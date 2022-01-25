<?php

namespace App\Http\Controllers;



use App\Models\Movie;
use Facade\Ignition\DumpRecorder\Dump;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //

    public function addToCart(Movie $movie)
    {
        //setear

        // session()->forget(['carrito', 'cart', 'Cart']);
        Dump(session()->all());
        $carrito = session()->get('carrito', []);
        if ($carrito == null) {
            session()->put('carrito');
        }
        // Dump(session()->all());

        foreach($carrito as $item){
            if($item[0]==$movie->id){
                $item[2]++;
                return redirect(route('movies.index'));
            }
        }
        
        
        session()->push('carrito', [$movie->id, $movie->title, 1    , $movie->price]);
        return redirect(route('movies.index'));
        

        
        
        
        // return view('show')->with('movie', $movie);
    }
}
