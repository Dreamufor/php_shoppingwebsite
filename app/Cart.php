<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart
{
   public $items = null;
   public $totalQuantity = 0;
   public $totalGST = 0;
   public $totalPrice = 0;

   public function __construct($oldCart)
   {
       if ($oldCart){
           $this->items = $oldCart->items;
           $this->totalQuantity = $oldCart->totalQuantity;
           $this->totalGST = $oldCart->totalGST;
           $this->totalPrice = $oldCart->totalPrice;
       }
   }

   public function add($item, $id){
//      $storedItem = ['qty' => 0,'id' => $item->id,'img' => $item->imgUrl, 'price' => $item->price, 'name' => $item->name, 'category' => $item->category->name, 'item' => $item];
       $storedItem = ['qty' => 0,'category' => $item->category->name,'item' => $item];
        if ($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->items[$id] = $storedItem;

        $this->totalQuantity++;
        $this->totalPrice += $item->price;
        $this->totalGST += ($item->price) * 0.15;

   }

}
