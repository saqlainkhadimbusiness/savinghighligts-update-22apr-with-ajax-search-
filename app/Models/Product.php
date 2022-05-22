<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table="products";
    protected $primarykey="id";
    public function products(){
        return $this->hasmany('App\Models\Product','parent_id');
    }
}
