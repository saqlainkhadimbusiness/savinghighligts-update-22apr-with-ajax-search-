<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\about;
use App\Models\term;
use App\Models\contact;
use Image;
// use League\CommonMark\Extension\CommonMark\Node\Inline\Image;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Isset_;

// use App\Pages as AppPages;

class PagesController extends Controller
{

    public function pagesview()
    {
        $pages = Page::get();
        return view('admin.page.pages')->with(compact('pages'));
    }
    // rffff
    public function pages(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $pages = new Page;
            $pages->parent_level = $data['parent_level'];
            $pages->page_name = $data['page_name'];
            $pages->meta_title = $data['meta_title'];
            $pages->meta_keyword = $data['meta_keyword'];
            $pages->meta_description = $data['meta_desc'];
            $pages->slug = str_slug($pages->page_name, '-');
            $pages->sort_order = $data['sort_order'];
            $pages->short_content = $data['short_content'];
            $pages->long_content = $data['long_content'];
            if (isset($request->content_image)  && ($request->content_image->extension() != '')) {
                $fileName1 =  rand(0, 1000000000) . time() . '.' . $request->content_image->extension();
                $request->content_image->move(public_path('images'), $fileName1);
                $pages->content_image = $fileName1;
            }
            if (isset($request->banner_image)  && ($request->banner_image->extension() != '')) {
                $fileName2 =  rand(0, 1000000000) . time() . '.' . $request->banner_image->extension();
                $request->banner_image->move(public_path('images'), $fileName2);
                $pages->banner_image = $fileName2;
            }
            $pages->save();
            return redirect('allpagesview');
        }else
        return view('admin.page.add_page');
    }


    // for edit the pages
    public function editpage(Request $request, $id)
    {
        $pageDetails = Page::where(['id' => $id])->first();
        return view('admin.page.edit_page')->with(compact('pageDetails'));
    }
    public function update(Request $request, $id)
    {


        $update = [];
        $data = $request->all();
        $update = [
            'page_name' => $data['page_name'],
            'meta_title' => $data['meta_title'],
            'meta_keyword' => $data['meta_keyword'],
            'meta_description' => $data['meta_desc'],
            'slug' => $data['meta_desc'],
            'sort_order' => $data['sort_order'],
            'short_content' => $data['short_content'],
            'long_content' => $data['long_content'],
        ];
        if (isset($request->content_image)  && ($request->content_image->extension() != '')) {
            $imageName = rand(0, 1000000000) . time() . '.' . $request->content_image->extension();
            $request->content_image->move(public_path('images'), $imageName);
            $update['content_image'] =  $imageName;
        }
        // return 0;
        if (isset($request->banner_image)    && ($request->banner_image->extension() != '')) {
            $imageName2 = rand(0, 1000000000) . time() . '.' . $request->banner_image->extension();
            $request->banner_image->move(public_path('images'), $imageName2);
            $update['banner_image'] =  $imageName2;
        }

        // dd($update );
        Page::where(['id' => $id])->update($update);
        return redirect('/allpagesview')->with('flash_message_success', 'Category Updated Successfully!!!');
    }

    public function updatepages(Request $request, $id = null)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            Page::where(['id' => $id])->update([
                'page_name' => $data['page_name'],
                'meta_title' => $data['meta_title'],
                'meta_keyword' => $data['meta_keyword'],
                'meta_description' => $data['meta_desc'],
                'slug' => $data['str_slug'],
                'sort_order' => $data['sort_order'],
                'short_content' => $data['short_content'],
                'long_content' => $data['long_content'],
                'image' => $imageName,
                'image' => $imageName,


            ]);


            return redirect('/allpagesview')->with('flash_message_success', 'Category Updated Successfully!!!');
        }
    }
    public function  deletepage(Page $Page, $id)
    {
        Page::where('id', $id)->delete();
        Alert::success('Deleated sucessfully', 'Success Message');
        return redirect('/allpagesview');
    }
    public function pageabout()
    {

        return view('admin.page.about');
    }
    // for view about page in admin
    public function viewaboutus()
    {
        $products = about::get();
        return view('admin.page.viewabout')->with(compact('products'));
    }
    public function addabout(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            //    echo "<pre>";print_r($data);die;
            $abouts = new about;
            $abouts->Title = $data['Title'];
            $abouts->content =$data['content'];
            $abouts->slug =$data['slug'];
            $abouts->save();
            return redirect('/allaboutview');

        }
    }
    public function customer(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            //    echo "<pre>";print_r($data);die;
            $contacts = new contact;
            $contacts->name = $data['name'];
            $contacts->email =$data['email'];
            $contacts->number =$data['number'];
            $contacts->subject=$data['subject'];
            $contacts->Message=$data['Message'];
            $contacts->save();
            return redirect('/contact');

        }
    }


    public function terms()
    {
        $products = about::get();
        return view('admin.page.terms')->with(compact('products'));
    }
    // about data submit
    public function termspage(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $pages = new term;
            $pages->Title = $data['Title'];
            $pages->Description = $data['Description'];
            $pages->content = $data['content'];
            $pages->Organized = $data['Organized'];
            $pages->Ownership = $data['Ownership'];
            $pages->siteusage = $data['siteusage'];
            $pages->Warrantiesusers = $data['Warrantiesusers'];
            $pages->userconduct = $data['userconduct'];
            $pages->Privicy = $data['Privicy'];
            $pages->Copyright = $data['Copyright'];
            $pages->termsconditions = $data['termsconditions'];
            $pages->communication = $data['communication'];
            $pages->Disclaimer = $data['Disclaimer'];
            $pages->contactus = $data['contactus'];
            $pages->Slug = $data['slug'];
            $pages->save();
            return redirect('allpagesview');
        }else
        return view('admin.page.terms');
    }

}
