<?php

namespace App\Http\Controllers;
use App\Models\Category;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function showcategory()
    {$levels = Category::where(['categry_id'=>0])->get();
        return view('admin.category.add_category')->with(compact('levels'));
    }
    public function addCategory (Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $category = new Category;
            $category->name = $data['category_name'];
            $category->categry_id= $data['categry_id'];
            $category->url = $data['url'];
            $category->description = $data['category_description'];
            $category->save();
            return redirect('viewcategories')->with('flash_message_success','Category Added Successfully!!');
        }
        $levels = Category::where(['categry_id'=>0])->get();
        return view('admin.category.add_category')->with(compact('levels'));
    }


// zoy
    public function  editshowcat($id){
        $levels = Category::where(['categry_id'=>0])->get();
        $categoryDetails = Category::where(['id'=>$id])->first();
        return view('admin.category.edit_category')->with(compact('levels','categoryDetails'));
    }
    // end
    public function viewCategories(){
        $categories = Category::get();
        return view('admin.category.view_category')->with(compact('categories'));
    }

    public function destroy(Category $Category, $id)
    {

        Category::where('id', $id)->delete();
        Alert::success('Deleated sucessfully', 'Success Message');
        return redirect('/viewcategories');
    }
    // rff
    public function update(Request $request,$id=null)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            Category::where(['id'=>$id])->update(['name'=>$data['category_name'],
            'categry_id'=>$data['categry_id'],'description'=>$data['category_description']
            ,'url'=>$data['url']]);
            return redirect('/admin/view-categories')->with('flash_message_success','Category Updated Successfully!!!');
        }
        $levels = Category::where(['categry_id'=>0])->get();
        $categoryDetails = Category::where(['id'=>$id])->first();
        return view('admin.category.edit_category')->with(compact('levels','categoryDetails'));

    }

    public function editCategory (Request $request,$id=null)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            Category::where(['id'=>$id])->update(['name'=>$data['category_name'],
            'categry_id'=>$data['parent_id'],'description'=>$data['category_description']
            ,'url'=>$data['url']]);
            return redirect('/viewcategories')->with('flash_message_success','Category Updated Successfully!!!');
        }
        $levels = Category::where(['categry_id'=>0])->get();
        $categoryDetails = Category::where(['id'=>$id])->first();
        return view('admin.category.edit_category')->with(compact('levels','categoryDetails'));

    }




    // rff end

    public function updateStatus(Request $request,$id=null){
        $data = $request->all();
        Category::where('id',$data['id'])->update(['status'=>$data['status']]);

    }


}
