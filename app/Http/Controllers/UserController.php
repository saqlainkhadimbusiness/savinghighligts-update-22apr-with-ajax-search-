<?php

namespace App\Http\Controllers;
use App\Models\adduser;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showuser()
    {
        return view('admin.addusers.add_users');
    }
    public function adduser(Request $request)
    {
        $user = new adduser();
        $user->user_name = $request->input('user_name');
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->contact_num = $request->input('contact');
        $user->address = $request->input('address');
        $user->password = $request->input('password');
        $user->select_role = $request->input('select_role');
        $user->status = "Active";
        $user->save();
        return redirect('viewuser');
    }
    public function viewusers(){
        $shows=adduser::get();
        return view('admin.addusers.all_users')->with(compact('shows'));

    }
    public function edit($id)
    {
        $users=adduser::where('id', $id)->get();

        $url="/updateuser"."/".$id;
        return view('admin.addusers.edit_user')->with(compact('users','url'));

    }
    public function update(Request $request,$id)
    {
        // echo "<pre>";
        // print_r($request->all());
        // die;
        adduser::where('id', $id)
        ->update([
            'user_name'=>$request->input('user_name'),
            'first_name'=>$request->input('first_name'),
            'last_name'=>$request->input('last_name'),
            'contact_num'=>$request->input('contact'),
            'address'=>$request->input('address'),
            'password'=>$request->input('password'),
            'select_role'=>$request->input('select_role'),
            'status'=>$request->input('status')
        ]);
        return redirect('viewuser');
    }
    public function deleteuser(adduser $Coupons, $id=null)
    {
        adduser::where('id', $id)->delete();
        Alert::success('Deleated sucessfully', 'Success Message');
        return redirect('/viewuser');
    }
}
