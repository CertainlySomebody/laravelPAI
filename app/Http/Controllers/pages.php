<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\videos;
use App\category;
use Validator;
use Auth;
use App\order;

class pages extends Controller
{
    // standard page handling
    public function show(Request $request) {
        $category = category::all();
        $slug = $request->path();
        $videos = videos::all()->take(24);
        $redirect = ($slug != '/') ? $slug : 'index';
        $getVideos = ($slug == '/') ?  $videos : '';
            
        
        return view($redirect, ['category' => $category, 'videos' => $getVideos]);
    }
    // check login
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

    // logout function
    function logout(Request $request) {
        return redirect('login')->with(Auth::logout());
    }
    // single video view handling
    function singleVideo(Request $request, $slug_one, $videos) {
        $category = category::all();
        $checkCat = category::where('slug', $slug_one)->get()->first();
        if(!empty($checkCat)) {
            $getSingle = videos::where('slug', $videos)->get()->first();
            
            if(!empty($getSingle)) {
                return view('singleVideo', ['category' => $category, 'checkCat' => $checkCat, 'getSingle' => $getSingle, 'slug' => $slug_one]);
            }
        }
    }
    // extended page handling
    function handlePages(Request $request, $slug_one) {
        $category = category::all();
        $checkCat = category::where('slug', $slug_one)->get()->first();
        
        if(!empty($checkCat)) {
            $getVideos = videos::where('category_connection', $checkCat->video_connection)->get();
            return view('categoryView', ['category' => $category, 'checkCat' => $checkCat, 'getVideos' => $getVideos, 'slug' => $slug_one]);
        }else if($slug_one == 'userPanel'){
            
            if (!Auth::guest()) {
                $getOrders = order::where('userId','=', Auth::user()->id)->get();
                return view('userPanel', ['category' => $category, 'orders' => $getOrders]);
            }else{
                return redirect()->to('login');
            }

        }else if($slug_one == 'cart') {

            if (!Auth::guest()) {
                return view('cart', ['category' => $category]);
            }else{
                return redirect()->to('login');
            }
        }else if($slug_one == 'register') {
            return view('register', ['category' => $category]);

        }else if($slug_one == 'removeVideo') {
            $videos = videos::all();
            return view('removeVideo', ['category' => $category, 'videos' => $videos]);
        }else{
            if(view()->exists($slug_one)) {
                return view($slug_one, ['category' => $category]);
            }
        }
    }

}
