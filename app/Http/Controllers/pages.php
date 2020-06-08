<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\videos;
use App\category;
use Validator;
use Auth;

class pages extends Controller
{
    public function show(Request $request) {
        $category = category::all();
        $slug = $request->path();
        $videos = videos::all()->take(24);
        $redirect = ($slug != '/') ? $slug : 'index';
        $getVideos = ($slug == '/') ?  $videos : '';
            
        
        return view($redirect, ['category' => $category, 'videos' => $getVideos]);
    }

    function checkLogin(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:3'
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        if (Auth::attempt($user_data)) {
            return redirect()->route('userPanel');
        }else{
            return back()->with('error', 'Nieprawidłowy login lub haslo');
        }
    }

    function logout() {
        Auth::logout();
        Cache::flush();
        return redirect('index');
    }

    function singleVideo(Request $request, $slug_one, $videos) {
        $category = category::all();
        $checkCat = category::where('slug', $slug_one)->get()->first();
        if(!empty($checkCat)) {
            $getSingle = videos::where('slug', $videos)->get()->first();
            
            if(!empty($getSingle)) {
                return view('singleVideo', ['category' => $category, 'checkCat' => $checkCat, 'getSingle' => $getSingle, 'slug' => $slug_one]);
            }else{
                return view('404error');
            }
        }else{
            return view('404error');
        }
    }

    function handlePages(Request $request, $slug_one) {
        $category = category::all();
        $checkCat = category::where('slug', $slug_one)->get()->first();
        
        if(!empty($checkCat)) {
            $getVideos = videos::where('category_connection', $checkCat->video_connection)->get();
            return view('categoryView', ['category' => $category, 'checkCat' => $checkCat, 'getVideos' => $getVideos, 'slug' => $slug_one]);
        }else if($slug_one == 'userPanel'){
            return view('userPanel', ['category' => $category]);
        }else if($slug_one == 'cart') {
            return view('cart', ['category' => $category]);
        }else{
            if(view()->exists($slug_one)) {
                return view($slug_one, ['category' => $category]);
            }else{
                return view('404error', ['category' => $category]);
            }
        }
    }

}
