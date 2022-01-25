<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart
{
    public $items;
    public $totalQty = 0;
    public $totalPrice = 0; 

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrices = $oldCart->totalPrice;
        }
    }
    public function add(Movie $item)
    
    {
        $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
        if ($this->items) {
            if (array_key_exists($item->id, $this->items)) {
                $storedItem = $this->items[$item->id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->items[$item->id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }
}
