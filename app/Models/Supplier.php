<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'supplier';
    /**
     * The attributes that are mass assignable.
     *
     */
    protected $fillable = [
        'name','phoneNumber','email'
    ];
    public function products() {
        return $this->hasMany('App\Models\Products');
    }
}
