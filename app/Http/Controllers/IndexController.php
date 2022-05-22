<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\Category;
use App\Models\Coupons;
use App\Models\Product;
use App\Models\store;
use App\Models\blog;
use App\Models\term;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function showcat()
    {
        $categories = Category::with('categories')->where(['categry_id' => 0])->get();
        return view('frontend.Categories')->with(compact('categories'));
    }
    public function ajax_search()
    {
         $stores=store::with('stores')->where('store_id','!=',0)->get();
        $blogs = blog::all();
        return[$stores,$blogs];
    }

    public function showstore(Request $request)
    {

        if($request->ajax())
        $data =post::where('name', 'like', '%'.$request->store.'%')->get();

//         $data = store::select("name")
//         ->where("name","LIKE","%{$request->query}%")
//         ->get();
//         // dd($data);
        // return response()->json($data);

        $stores=store::with('stores')->where(['store_id'=>0])->get();
        // return($products);
        return view('frontend.store1')->with(compact('stores'));
    }

    public function  showsubpagestore($id,$n)
    {
        $image=store::where('id',$id)->get();
        $discraption=store::where('id',$id)->get();


        // dd($discraption);
        // $coupans=Coupons::all();
        $coupans = coupons::where('store_id', $id)->orderBy('position','asc')->get();
        $name=$n;
     $stores=store::get();
    //  dd( $stores);
        // dd($coupans);
        return view('frontend.subpageofstore')->with(compact('image','coupans','name','stores', 'discraption'));
    }
    public function  showsubpagecatgry($id)
    {

        //  $coupans=Coupons::all();
         $coupans = coupons::where('categry_id', $id)->get();
        //  dd($coupans);
        return view('frontend.subpageofcat')->with(compact('coupans'));
    }

    // public function showcategriespage ($categroy_id)
    // {
    //     $categories=Category::with('catgries')->where(['parent_id'=>0])->get();
    //     // $products=product::where(['categroy_id'=>$categroy_id])->get();
    //     // $Product_name=product::where(['categroy_id'=>$categroy_id])->first();
    //   return view('frontend.Categories')->with(compact('categories'));
    // }
    // public function showcatpages()
    // {
    //     $products=Product::with('products')->where(['parent_id'=>0])->get();

    //     return view('frontend.Categories')->with(compact('products'));
    // }
    // zoha img lany ky lia catgry ma yhn changing ki thi
    public function  showcatpages($id,$n)
    {
        $image=store::where('id',$id)->get();
        //  $coupans=Coupons::all();
        $coupans = DB::table('coupons')->where('catgry_id',$id)->get();
        $name=$n;
        //  dd($coupans);

        return view('frontend.subpageofcat')->with(compact('coupans','name','image'));
    }
    //for blogs
    public function viewblogs(Request $request)
    {
        if(isset($_GET['search']))
    {
        $search=$_GET['search'];
        if($search!=""){
            $blogs=DB::table('blogs')->where('blog_url','=',$search)->get();
        }
        else
        {
            $blogs=array();

        }
    }


        else{
            $blogs = blog::all();
        }

        return view('frontend.home')->with(compact('blogs',));
    }

    public function viewblogsdetail($id){
        //  $blogs=blog::get();
        //  $blogs = blog::where('id',$id)->get();

        // $blogs=blog::with('blogs')->where(['id'=>$id])->get();
         $blogs = blog::where('id', $id)->get();
        //  dd( $blogs);
         return view('frontend.productdetail')->with(compact('blogs'));
        //  return view('frontend.productdetail');
    }

    public function   aboutpage(){
        $set=about::get();
        //  dd(  $set);
         return view('frontend.about')->with(compact('set'));

    }
    public function featreoffer()
    {
        $blogs=blog::select("*")
        ->orderby("id","desc")
        ->get();
        // $blogs = blog::with('blogs')->where(['id'=>0])->get();

        return view('frontend.fearedoffer')->with(compact('blogs'));
    }


    public function contactpage()
    {
   return view('frontend.contact');
    }
    public function   tooterms(){
        $set=term::get();
        //  dd(  $set);
         return view('frontend.termsandcondition')->with(compact('set'));

    }

}
