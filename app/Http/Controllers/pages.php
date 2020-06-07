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
        //dd($slug);
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
            return redirect('login/successLogin');
        }else{
            return back()->with('error', 'Nieprawidłowy login lub haslo');
        }
    }

    function successLogin() {
        return view('userPanel');
    }

    function logout() {
        Auth::logout();
        Cache::flush();
        return redirect('main');
    }

    function singleVideo(Request $request, $category_slug, $videos) {
        $category = category::all();
        return view('singleVideo', ['category' => $category]);
    }

    function categoryView(Request $request) {
        $category = category::all();
        return view('categoryView', ['category' => $category]);
    }
}
