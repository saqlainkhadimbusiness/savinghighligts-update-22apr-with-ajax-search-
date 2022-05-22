<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\developermood;
use App\Models\editheader;

class developermoodController extends Controller
{
    // / footer
    public function showdevelopermood()
    {
        $data=DB::table('editfooters')->where('id',1)->get();
        return view('admin.developermood.edit_footer')->with(compact('data'));
    }
    public function addfooter(Request $request)
    {

        $id=1;
        $des=$request->input('footer_description');

        DB::update('update editfooters set description = ? where id = ?',[$des,$id]);
        return redirect('/footer');
    }
    // herader
    public function showdevelopermood1()
    {
        $header=DB::table('editheaders')->where('id',1)->get();
        return view('admin.developermood.edit_header')->with(compact('header'));
    }
    public function addheader(Request $request)
    {

        $id=1;
        $des=$request->input('header_description');

        DB::update('update editheaders set description = ? where id = ?',[$des,$id]);
        return redirect('/header');
    }
}
