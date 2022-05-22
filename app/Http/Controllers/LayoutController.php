<?php

namespace App\Http\Controllers;

use App\Models\store;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
 public function target(){
     $stores=store::get();
    return view('frontend.target')->with(compact('stores'));
 }
}
