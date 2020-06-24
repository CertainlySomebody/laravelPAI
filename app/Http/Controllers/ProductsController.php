<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\videos;
use App\order;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    // add to cart function
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

    // remove from cart
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

    // order function
    public function orderVideos(Request $request) {
        if(!empty(session('cart'))) {
            $currentOrder = session('cart');
            $totalValue = 0;
            $desc = '';
            //dd(Auth::user());
            foreach($currentOrder as $order_item) {
                //dd($order_item);
                $totalValue += $order_item['cena'];
                $desc .= $order_item['name'].', ';
            }
            $newOrder = new order;
            $newOrder->cena = $totalValue;
            $newOrder->description = $desc;
            $newOrder->userId = Auth::user()->id;

            $newOrder->save();

            session()->forget('cart');

            return redirect()->back()->with('error', 'Złożono zamówienie!');

        }
    }

    // add new video
    public function addVideo(Request $request) {
        $this->validate(request(), [
            'tytul' => 'required',
            'kategoria' => 'required',
            'rok_produkcji' => 'required',
            'opis_fabuly' => 'required',
            'image_dir' => 'required',
            'category_connection' => 'required',
            'slug' => 'required',
            'cena' => 'required'
        ]);

        $user = videos::insert([
            'tytul'=>$request->tytul,
            'kategoria'=>$request->kategoria,
            'rok_produkcji'=>$request->rok_produkcji,
            'opis_fabuly'=>$request->opis_fabuly,
            'image_dir'=>$request->image_dir,
            'category_connection'=>$request->category_connection,
            'slug'=>$request->slug,
            'cena'=>$request->cena
        ]);

        return redirect()->back()->with('error', 'Dodano Wideo');
    }

    // remove video
    public function removeVideo(Request $request) {
        videos::destroy($request->id);

        return redirect()->back()->with('error', 'Film usunięty');
    }


}
