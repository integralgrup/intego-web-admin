<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Playground;
use App\Models\PlaygroundGallery;
use App\Models\PlaygroundImage;
use App\Models\Language; // Assuming you have a Language model to fetch languages
use Illuminate\Support\Facades\DB; // For database operations

class PlaygroundController extends Controller
{
    protected $languages;

    public function __construct()
    {
        $this->languages = Language::all();
        view()->share('languages', $this->languages);
    }
    // Display a list of playgrounds
    public function index()
    {
        $playgrounds = Playground::where('lang', app()->getLocale())->get();
        return view('admin.playground.index', compact('playgrounds'));
    }

    // Show form to create a new playground
    public function create()
    {
        return view('admin.playground.create');
    }

    // Store new playground in database
    public function store(Request $request)
    {
        //dd($request->all());
        if ($request->has('playground_id')) {
                $playground_id = $request->playground_id; // Use the provided playground_id
            }else{
                $playground_id = Playground::max('playground_id') + 1; // Increment the maximum playground_id by 1
                if (!$playground_id) {
                    $playground_id = 1; // If no playground items exist, start with 1
                }
            }
        try {
            foreach($this->languages as $language){
                if($language->lang_code == 'en'){
                    
                    $request->validate([
                        'lang_'.$language->lang_code => 'required|string|max:10',
                        //'category_id' => 'required|integer',
                        'title_'.$language->lang_code => 'required|string|max:100',
                        'description_'.$language->lang_code => 'nullable|string',
                        'seo_url_'.$language->lang_code => 'required|string|max:255',
                        'image_'.$language->lang_code => 'nullable|image',
                        'alt_'.$language->lang_code => 'required|string|max:255',
                        'seo_title_'.$language->lang_code => 'nullable|string|max:255',
                        'seo_description_'.$language->lang_code => 'nullable|string|max:255',
                        'seo_keywords_'.$language->lang_code => 'nullable|string|max:255',
                    ]);
                }

                if ($request->hasFile('image_en') || $request->hasFile('image_' . $language->lang_code)) {
                    $tmpImgPath = createTmpFile($request, 'image_en', $this->languages[0]);
                    $imageName = moveFile($request,$language,'image_' . $language->lang_code, 'image_en', 'alt_' . $language->lang_code, 'alt_en', $language->playground_images_folder, $tmpImgPath);
                    //dd($imageName);
                }else{
                    $imageName = $request->input('old_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }

                

                $data = [
                    'playground_id' => $playground_id,
                    'lang' => $language->lang_code,
                    'title' => $request->input('title_'.$language->lang_code) ?? $request->input('title_en'),
                    'seo_url' => $request->input('seo_url_'.$language->lang_code) ?? $request->input('seo_url_en'),
                    'image' => $imageName,
                    'alt' => $request->input('alt_'.$language->lang_code) ?? $request->input('alt_en'),
                    'seo_title' => $request->input('seo_title_'.$language->lang_code) ?? $request->input('seo_title_en'),
                    'seo_description' => $request->input('seo_description_'.$language->lang_code) ?? $request->input('seo_description_en'),
                    'seo_keywords' => $request->input('seo_keywords_'.$language->lang_code) ?? $request->input('seo_keywords_en'),
                    'sort' => $request->input('sort_'.$language->lang_code) ?? $request->input('sort_en') ?? 0,
                ];

                Playground::updateOrCreate(
                    ['playground_id' => $playground_id, 'lang' => $language->lang_code],
                    $data
                );

                //unlink temporary image
                if (isset($tmpImgPath) && file_exists($tmpImgPath)) {
                    unlink($tmpImgPath);
                }
                
            }

            return redirect()->route('admin.playground.index')->with('success', 'Ürün başarıyla kaydedildi!');

        } catch (\Throwable $th) {
            throw $th;
            return redirect()->route('admin.playground.index')->with('error', 'Ürün kaydedilirken bir hata oluştu!');
        }
    }

    // Show form to edit playground
    public function edit($id)
    {
        $languages = Language::all();
        $playgrounds = Playground::where('playground_id', $id)->get();
        return view('admin.playground.edit', compact('playgrounds', 'languages'));
    }

    // Delete sector
    public function destroy(Sector $sector)
    {
        $sector->delete();
        return redirect()->route('admin.sector.index')->with('success', 'Sector deleted successfully!');
    }

    // Additional methods for managing playground images will go here
    // Display a list of images for a specific playground
    public function imagesIndex($id)
    {
        $images = PlaygroundImage::where('playground_id', $id)->where('lang', app()->getLocale())->get();
        //dd($images);
        return view('admin.playground.images.index', compact('images'));
    }

    // Show form to add a new image to a specific playground
    public function imagesCreate($id)
    {
        $playground = Playground::where('playground_id', $id)->where('lang', app()->getLocale())->firstOrFail();
        return view('admin.playground.images.create', compact('playground'));
    }

    // Store new image for a specific playground
    public function imagesStore(Request $request, $id)
    {
        //dd($request->all());
        try {
        
            $playground = Playground::where('playground_id', $id)->where('lang', app()->getLocale())->firstOrFail();

            if($request->has('image_id')){
                $image_id = $request->image_id; // Use the provided image_id
            }else{
                $image_id = DB::table('playground_image')->where('playground_id', $id)->max('image_id') + 1; // Increment the maximum image_id by 1 for the specific playground
                if (!$image_id) {
                    $image_id = 1; // If no images exist for this playground, start with 1
                }
            }

            foreach($this->languages as $language){
                if($language->lang_code == 'en'){
                    
                    $request->validate([
                        'image_'.$language->lang_code => 'nullable|image|max:2048',
                        'title_'.$language->lang_code => 'required|string|max:255',
                        'description_'.$language->lang_code => 'required|string|max:255',
                        'alt_'.$language->lang_code => 'required|string|max:255',
                        'sort_'.$language->lang_code => 'required|integer',
                    ]);
                }

                if ($request->hasFile('image_en') || $request->hasFile('image_' . $language->lang_code)) {
                    $tmpImgPath = createTmpFile($request, 'image_en', $this->languages[0]);
                    $imageName = moveFile($request,$language,'image_' . $language->lang_code, 'image_en', 'alt_' . $language->lang_code, 'alt_en', $language->playground_images_folder, $tmpImgPath);
                    //dd($imageName);
                }else{
                    $imageName = $request->input('old_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }


                $data = [
                    'playground_id' => $id,
                    'image_id' => $image_id,
                    'lang' => $language->lang_code,
                    'image' => $imageName,
                    'title' => $request->input('title_'.$language->lang_code) ?? $request->input('title_en'),
                    'description' => $request->input('description_'.$language->lang_code) ?? $request->input('description_en'),
                    'alt' => $request->input('alt_'.$language->lang_code) ?? $request->input('alt_en'),
                    'sort' => $request->input('sort_'.$language->lang_code) ?? 0,
                ];

                PlaygroundImage::updateOrCreate(
                    ['playground_id' => $id, 'image_id' => $image_id, 'lang' => $language->lang_code],
                    $data
                );


            }

            return redirect()->route('admin.playground.images.index', $id)->with('success', 'Image added successfully!');
        
        } catch (\Throwable $th) {
            throw $th;
            return redirect()->route('admin.playground.images.index', $id)->with('error', 'An error occurred while adding the image.');
        }
    }

    // Show form to edit an image of a specific playground
    public function imagesEdit($id, $imageId)
    {
        $playground = Playground::where('playground_id', $id)->where('lang', app()->getLocale())->firstOrFail();
        $images = PlaygroundImage::where('playground_id', $id)->where('image_id', $imageId)->get();
        return view('admin.playground.images.edit', compact('playground', 'images'));
    }

    // image destroy method
    public function imagesDestroy($id, $imageId)
    {
        try {
            $images = PlaygroundImage::where('playground_id', $id)->where('image_id', $imageId)->get();
            foreach ($images as $image) {
                // Delete the image file from storage if needed
                // Storage::delete('path/to/image/' . $image->image);
                $image->delete();
            }
            return redirect()->route('admin.playground.images.index', $id)->with('success', 'Image deleted successfully!');
        } catch (\Throwable $th) {
            return redirect()->route('admin.playground.images.index', $id)->with('error', 'An error occurred while deleting the image.');
        }
    }


    // Playground Gallery methods will go here
    public function galleryIndex($id)
    {
        $playground = Playground::where('playground_id', $id)->where('lang', app()->getLocale())->firstOrFail();
        $gallery = PlaygroundGallery::where('playground_id', $id)->where('lang', app()->getLocale())->orderBy('sort')->get();
        return view('admin.playground.gallery.index', compact('playground', 'gallery'));
    }

    public function galleryCreate($id)
    {
        $playground = Playground::findOrFail($id);
        return view('admin.playground.gallery.create', compact('playground'));
    }

    public function galleryStore(Request $request, $id)
    {
        try {
        
            $playground = Playground::where('playground_id', $id)->where('lang', app()->getLocale())->firstOrFail();

            if($request->has('image_id')){
                $image_id = $request->image_id; // Use the provided image_id
            }else{
                $image_id = DB::table('playground_gallery')->where('playground_id', $id)->max('image_id') + 1; // Increment the maximum image_id by 1 for the specific playground
                if (!$image_id) {
                    $image_id = 1; // If no images exist for this playground, start with 1
                }
            }

            foreach($this->languages as $language){
                if($language->lang_code == 'en'){
                    
                    $request->validate([
                        'image_'.$language->lang_code => 'nullable|image|max:2048',
                        'title_'.$language->lang_code => 'required|string|max:255',
                        'description_'.$language->lang_code => 'required|string|max:255',
                        'alt_'.$language->lang_code => 'required|string|max:255',
                        'sort_'.$language->lang_code => 'required|integer',
                    ]);
                }

                if ($request->hasFile('image_en') || $request->hasFile('image_' . $language->lang_code)) {
                    $tmpImgPath = createTmpFile($request, 'image_en', $this->languages[0]);
                    $imageName = moveFile($request,$language,'image_' . $language->lang_code, 'image_en', 'alt_' . $language->lang_code, 'alt_en', $language->playground_images_folder, $tmpImgPath);
                    //dd($imageName);
                }else{
                    $imageName = $request->input('old_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }


                $data = [
                    'playground_id' => $id,
                    'image_id' => $image_id,
                    'lang' => $language->lang_code,
                    'image' => $imageName,
                    'title' => $request->input('title_'.$language->lang_code) ?? $request->input('title_en'),
                    'description' => $request->input('description_'.$language->lang_code) ?? $request->input('description_en'),
                    'alt' => $request->input('alt_'.$language->lang_code) ?? $request->input('alt_en'),
                    'sort' => $request->input('sort_'.$language->lang_code) ?? 0,
                ];

                PlaygroundGallery::updateOrCreate(
                    ['playground_id' => $id, 'image_id' => $image_id, 'lang' => $language->lang_code],
                    $data
                );

            }

            return redirect()->route('admin.playground.gallery.index', $id)->with('success', 'Galeri görseli başarıyla kaydedildi!');
        
        } catch (\Throwable $th) {
            throw $th;
            return redirect()->route('admin.playground.gallery.index', $id)->with('error', 'Galeri görseli eklenirken bir hata oluştu.');
        }
    }

    public function galleryEdit($id, $galleryId)
    {
        $playground = Playground::where('playground_id', $id)->where('lang', app()->getLocale())->firstOrFail();
        $gallery = PlaygroundGallery::where('playground_id', $id)->where('image_id', $galleryId)->get();
        return view('admin.playground.gallery.edit', compact('playground', 'gallery'));
    }

    public function galleryDestroy($id, $galleryId)
    {
        try {
            $gallery = PlaygroundGallery::findOrFail($galleryId);
            // Delete the image file from storage if needed
            // Storage::delete('path/to/image/' . $gallery->image);
            $gallery->delete();
            return redirect()->route('admin.playground.galleries.index', $id)->with('success', 'Gallery image deleted successfully!');
        } catch (\Throwable $th) {
            return redirect()->route('admin.playground.galleries.index', $id)->with('error', 'An error occurred while deleting the gallery image.');
        }
    }

}