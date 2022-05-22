<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class store extends Model
{

     public function stores(){
            return $this->hasmany('App\Models\store','store_id');
        }

}
