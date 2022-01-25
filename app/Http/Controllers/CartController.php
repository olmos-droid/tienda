<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Movie;
use Facade\Ignition\DumpRecorder\Dump;
use Illuminate\Http\Request;


class CartController extends Controller
{
    //
    public function getAddToCart(Request $request, Movie $movie)
    {
        $oldCart = session()->has('cart') ? session()->get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($movie);
        
        $request->session()->put('cart',$cart);
        // dump(session()->all());
        return redirect()->route('movies.index');

    }
    public function getCart(){
        if(!session()->has('cart')){
            return view('shop.shopping-cart')->with('movies', null);
        }
        $oldCart=session()->get('cart');
        $cart=new Cart($oldCart);
        return view('shop.shopping-cart')->with(['movies'=>$cart->items,'totalprice'=>$cart->totalPrice]);
    }
}
//     public function addToCart(Movie $movie)
//     {
//         //setear
//         // session()->forget(['carrito', 'cart', 'Cart']);
//         Dump(session()->all());
//         $carrito = session()->get('carrito', []);
//         if ($carrito == null) {
//             session()->put('carrito');
//         }
//         // Dump(session()->all());
//         foreach ($carrito as $item) {
//             if ($item[0] == $movie->id) {
//                 $item[2]++;
//                 return redirect(route('movies.index'));
//             }
//         }
//         session()->push('carrito', [$movie->id, $movie->title, 1, $movie->price]);
//         return redirect(route('movies.index'));
//         // return view('show')->with('movie', $movie);
//     }
// }
