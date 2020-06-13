<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\videos;

class ProductsController extends Controller
{

    public function addToCart($id) {
        $video = videos::find($id);

        if(!$video) {
            abort(404);
        }

        $cart = session()->get('cart');

        if(!$cart) {
            $cart = [
                $id => [
                    'id' => $video->id,
                    'name' => $video->tytul,
                    'kategoria' => $video->kategoria,
                    'slug' => $video->slug,
                    'image_dir' => $video->image_dir,
                    'cena' => $video->cena
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('error', 'Produkt został dodany do koszyka');
        }
        if(isset($cart[$id])) {
            return redirect()->back()->with('error','Produkt już jest w koszyku');
        }

        $cart[$id] = [
            'id' => $video->id,
            'name' => $video->tytul,
            'kategoria' => $video->kategoria,
            'slug' => $video->slug,
            'image_dir' =>$video->image_dir,
            'cena' => $video->cena
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('error', 'Produkt został dodany do koszyka');
    }

    public function removeFromCart($id) {
        $videos = session('cart');
        //dd($videos[1]);
        foreach($videos as $key => $value) {
            if($id == $value['id']) {
                unset($videos[$id]);
            }
        }
        //dd($videos);
        session()->put('cart', $videos);
        return redirect()->back()->with('error', 'Produkt został usunięty z koszyka');
    }

    public function orderVideos(Request $request) {

    }


}