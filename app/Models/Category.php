<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    /**
     * The attributes that are mass assignable.
     *
     */
    protected $fillable = [
        'name','description'
    ];
    public function products() {
        return $this->hasMany('App\Models\Products');
    }
}
