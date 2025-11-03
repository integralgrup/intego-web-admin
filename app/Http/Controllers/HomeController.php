<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Slider2;
use App\Models\Language;
use App\Models\Blog;
use App\Models\BlogSlider;
use App\Models\Product;
use App\Models\Playground;
use App\Models\About;
use App\Models\Menu;
use App\Models\Office;
use App\Models\Page;
use App\Models\Project;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {
        $slider = Slider::where('lang', app()->getLocale())->get();
        $slider2 = Slider2::where('lang', app()->getLocale())->get();
        $languages = Language::all();
        
        $blogs = Blog::where('lang', app()->getLocale())->orderBy('sort')->get();
        $about = About::where('lang', app()->getLocale())->first();
        $products = Product::where('lang', app()->getLocale())->get();
        $projects = Project::where('lang', app()->getLocale())->get();

        //dd($products);

        return view('home', compact('slider', 'slider2', 'languages', 'blogs', 'about', 'products', 'projects'));
    }

    public function route($slug, $slug2 = null)
    {
        
        if($slug == 'copy-db') {

            $lang_array = ['es', 'fr', 'ru', 'ae']; // Add more languages as needed

            if(in_array($slug2, $lang_array)) {
                $lang = $slug2;
            } else {
                return "Invalid or missing language code. Please provide a valid language code (e.g., /copy-db/es).";
            }

            //return $this->copyDB($lang);
        }

        $menu = Menu::where(['seo_url' => $slug, 'lang' => app()->getLocale()])->firstOrFail();
        //dd($menu);
        // If the menu item has a page_type of 'about', fetch the about data
        if($menu->page_type == 'about') {
            $about = About::where('lang', app()->getLocale())->first();
            $seo = $about;
            $how_we_do = DB::table('about_how_we_do')->where('lang', app()->getLocale())->get()->toArray();
            $what_we_do =  DB::table('about_what_we_do')->where('lang', app()->getLocale())->get()->toArray();
            
            //debug($memberships);
            
            //dd($politics);
            return view('about', compact('about', 'how_we_do', 'what_we_do', 'seo'));
        }

        if($menu->page_type == 'project') {
            if($slug2!= null) {
                $project = Project::where(['lang' => app()->getLocale(), 'seo_url' => $slug2])->with(['gallery', 'country'])->firstOrFail();
                $seo = $project;
                //dd($project);
                return view('project-detail', compact('project', 'seo'));
            }else{
                $projects = Project::where(['lang' => app()->getLocale()])->orderBy('sort')->with(['gallery', 'country'])->get()->toArray();
                //dd($projects);
                return view('projects', compact('projects'));
            }
        }

        if($menu->page_type == 'product') {
            if($slug2!= null) {
                $product = Product::where(['lang' => app()->getLocale(), 'seo_url' => $slug2])->firstOrFail();
                $seo = $product;
                return view('product-detail', compact('product', 'seo'));
            }else{
                $products = Product::where(['lang' => app()->getLocale()])->orderBy('sort')->get()->toArray();
                return view('products', compact('products'));
            }
        }

        if($menu->page_type == 'play_ground') {
            if($slug2!= null) {
                $play_ground = Playground::where(['lang' => app()->getLocale(), 'seo_url' => $slug2])->with(['images', 'gallery'])->firstOrFail();
                
                $seo = $play_ground;
                return view('playground', compact('play_ground', 'seo'));
            }

            //dd($slug);
        }

        if($menu->page_type == 'blog') {
            if($slug2!= null) {
                // Get blog posts limit 5 as array
                $blogs = Blog::where(['lang' => app()->getLocale()])->orderBy('sort')->limit(5)->get()->toArray();
                //dd($blogs);
                $blog = Blog::where(['lang' => app()->getLocale(), 'seo_url' => $slug2])->firstOrFail();
                $seo = $blog;
                $blogSlider = BlogSlider::where(['lang' => app()->getLocale(), 'blog_id' => $blog->blog_id])->get();
                //dd($blogSlider);
                return view('blog-detail', compact('blog', 'blogs', 'blogSlider', 'seo'));
            }else{
                $blogs = Blog::where(['lang' => app()->getLocale()])->orderBy('sort')->limit(5)->get()->toArray();
                return view('blog', compact('blogs'));
            }
            
        }

        if($menu->page_type == 'contact') {
            $offices = Office::where(['lang' => app()->getLocale()])->get();
            return view('contact', compact('offices'));
        }

        if($menu->page_type == 'page') {
            $page = Page::where(['lang' => app()->getLocale(), 'seo_url' => $slug])->first();
            $seo = $page;
            //dd($page);
            return view('page', compact('page', 'seo'));
        }

        //return view('page', compact('page'));
    }

    public function copyDB($lang)
    {
        $sourceLang = 'en';
        $targetLang = $lang;

        $tables = [
            'about_how_we_do',
            'about_memberships',
            'about_mission_vision',
            'about_page',
            'about_politics',
            'about_what_we_do',
            'blog',
            'blog_slider',
            'brand',
            'brand_gallery',
            'brand_slider_1',
            'brand_slider_2',
            'career',
            'career_jobs',
            'career_slider',
            'catalog',
            'catalog_file',
            'catalog_group',
            'footer_info',
            'main_slider',
            'menu',
            'office',
            'page',
            'sector',
            'sector_slider_1',
            'sector_slider_2',
            'static_image',
            'static_text'
        ];

        //Fetch all records from source language
        //Change the lang column to target language
        //Insert into the same table
        foreach ($tables as $table) {
            $records = DB::table($table)->where('lang', $sourceLang)->get();
            foreach ($records as $record) {
                $newRecord = (array) $record; // Convert stdClass to array
                $newRecord['lang'] = $targetLang;
                // Remove primary key to avoid duplicate key error
                unset($newRecord[array_key_first($newRecord)]);
                DB::table($table)->insert($newRecord);
            }
        }

        return "Database copy from {$sourceLang} to {$targetLang} completed.";
    }

    
}
