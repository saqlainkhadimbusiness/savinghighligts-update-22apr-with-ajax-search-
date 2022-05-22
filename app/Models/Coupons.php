<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupons extends Model
{
    use HasFactory;
    public function coupans(){
        return $this->hasmany('App\Models\Coupons','parent_id');
    }
   
}
