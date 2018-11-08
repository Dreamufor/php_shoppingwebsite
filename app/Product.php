<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'category_id', 'supplier_id', 'price', 'imgUrl'];


    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function supplier(){
        return $this->belongsTo('App\Supplier');
    }

    public function orderItem() {
        return $this->hasMany('App\OrderItem');
    }
    
}
