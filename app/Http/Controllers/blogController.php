<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\blog;
use RealRashid\SweetAlert\Facades\Alert;


class blogController extends Controller
{
    public function showblog()
    {
        return view('admin.blog.add_blogs');
    }

    public function addblog(Request $request)

    {
        // $blog=$request->all();

        //   $request->validate([
        //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        //     ]);
        $blog = new blog();

        if (isset($request->image)  && ($request->image->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $blog->image =  $imageName;
        }
        $blog->tittle_des = $request->input('tittle_des');
        $blog->blog_url = $request->input('blog_url');
        $blog->blog_description = $request->input('blog_description');
        $blog->blog_title = $request->input('blog_title');
        $blog->save();


        return redirect('/viewnothing');
    }


    public function viewblog()
    {
        $shows = blog::get();
        return view('admin.blog.view_blogs')->with(compact('shows'));
    }

    public function  editblog($id)
    {
        $url = url('/edialltblogs' . "/" . $id);
        $blog = DB::table('blogs')->where('id', $id)->get();
        return view('admin.blog.edit_blogs')->with(compact('blog', 'url'));
    }
    public function editnowblogs(Request $request, $id = null)
    {

        $data = $request->all();
        $da = array(
            'tittle_des' => $data['tittle_des'],
            'blog_url' => $data['blog_url'],
            'blog_description' => $data['blog_description'],
            'blog_title' => $data['blog_title']
        );
        if (isset($request->image)  && ($request->image->extension() != '')) {
            $imageName = rand(0, 999999999) . time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $da['image'] = $imageName;
        }


        DB::table('blogs')->where('id', $data['id'])->update($da);

        return redirect('/viewnothing');
    }
    public function deleteblogs(blog $Coupons, $id = null)
    {
        blog::where('id', $id)->delete();
        Alert::success('Deleated sucessfully', 'Success Message');
        return redirect('/viewnothing');
    }
    // rff end
    public function updateblogStatus(Request $request, $id = null)
    {
        $data = $request->all();
        blog::where('id', $data['id'])->update(['status' => $data['status']]);
    }

    public function updateStatus($id)
    {
        $status = blog::where('id', $id)->first();
        if ($status->status == 1) {
            $newstatus = 0;
        } else {
            $newstatus = 1;
        }
        blog::where('id', $id)->update(['status'=>  $newstatus ]);
        return 200;
    }
}
