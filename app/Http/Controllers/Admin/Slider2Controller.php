<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider2;
use App\Models\Language; // Assuming you have a Language model to fetch languages

class Slider2Controller extends Controller
{

    public function index()
    {
        // code to list all sliders where lang is en
        $sliders = Slider2::where('lang', 'en')->get();
        $languages = Language::all(); // Assuming you have a Language model to fetch languages
        return view('admin.slider2.index', compact('sliders', 'languages'));
    }

    public function create()
    {
        // code to show create slider form
        $languages = Language::all();
        return view('admin.slider2.create', compact('languages'));
    }

    public function store(Request $request)
    {
        //dd($request->all());

        if ($request->has('slider_id')) {
            $slider_id = $request->slider_id; // Use the provided slider_id
        }else{
            $slider_id = Slider2::max('slider_id') + 1; // Increment the maximum slider_id by 1
            if (!$slider_id) {
                $slider_id = 1; // If no slider items exist, start with 1
            }
        }

        try {

            $languages = Language::all();
            
            //validation
            foreach ($languages as $language) {
                if($language->lang_code == 'en'){
                    $request->validate([
                        'title_' . $language->lang_code => 'required|max:200',
                        'description_' . $language->lang_code => 'required|max:400',
                        'image_' . $language->lang_code => 'nullable|image|max:2048', // Assuming image is optional
                        'alt_' . $language->lang_code => 'required|max:255',
                    ]);
                }
                if ($request->hasFile('image_en') || $request->hasFile('image_' . $language->lang_code)) {
                    $tmpImgPath = createTmpFile($request, 'image_en', $languages[0]);
                    $imageName = moveFile($request,$language,'image_' . $language->lang_code, 'image_en', 'alt_' . $language->lang_code, 'alt_en', $language->images_folder, $tmpImgPath);
                    //dd($imageName);
                }else{
                    $imageName = $request->input('old_image_' . $language->lang_code, null); // Use old image if no new image is uploaded
                }

                Slider2::updateOrCreate(
                    ['slider_id' => $slider_id, 'lang' => $request->input('lang_' . $language->lang_code)],
                    [
                        'title' => $request->input('title_' . $language->lang_code) ?? $request->input('title_en'),
                        'description' => $request->input('description_' . $language->lang_code) ?? $request->input('description_en'),
                        'image' => $imageName,
                        'alt' => $request->input('alt_' . $language->lang_code) ?? $request->input('alt_en'),
                        'sort' => $request->input('sort_' . $language->lang_code) ?? 0,
                    ]
                );

            }

            return redirect()->route('admin.slider2.index')->with('success', 'Slider başarıyla kaydedildi.');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->withErrors(['error' => 'Hata oluştu: ' . $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        // code to show edit slider form
        $sliders = Slider2::where('slider_id', $id)->get();
        //dd($sliders);
        $languages = Language::all();

        return view('admin.slider2.edit', compact('sliders', 'languages'));
    }

    public function destroy($id)
    {
        // code to delete blog
        Slider2::where('slider_id', $id)->delete();
        return redirect()->route('admin.slider2.index')->with('success', 'Slider başarıyla silindi.');
    }

   

}
