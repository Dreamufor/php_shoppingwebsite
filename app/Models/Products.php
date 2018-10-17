<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Products extends Model
{
    protected $table = 'products';
    /**
     * The attributes that are mass assignable.
     *
     */
    protected $fillable = [
        'name', 'description', 'price', 'imageUrl', 'category_id', 'supplier_id',
    ];
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
    public function supplier(){
        return $this->belongsTo('App\Models\Supplier');
    }


}
