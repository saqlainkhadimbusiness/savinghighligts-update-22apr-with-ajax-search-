<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Coupons;
use App\Models\Product;
use App\Models\store;
use App\Models\Category;
use Symfony\Component\HttpFoundation\Response;

class CouponsController extends Controller
{
    public function addCoupon(Request $request)
    {
        $data = $request->all();
        $coupon = new Coupons;
        // if (isset($request->image)  && ($request->image->extension() != '')) {
        //     //img code
        //     $imageName = time() . '.' . $request->image->extension();
        //     $request->image->move(public_path('images'), $imageName);
        //     $coupon->image = $imageName;
        // }
        $coupon->coupon_title = $data['coupon_title'];
        $coupon->coupon_code = $data['coupon_code'];
        $coupon->Affilate_Link = $data['Affilate_Link'];
        $coupon->store_id = $data['store_id'];
        $coupon->catgry_id = $data['catgry_id'];
        $coupon->expiry_date = $data['expiry_date'];
        $coupon->Description = $data['Description'];
        $coupon->Cupon_type = $data['getcode'];
        $coupon->save();
        return redirect('/viewcoupons')->with('flash_message_success', 'Coupon has been added Successfully');
    }
    public function showcoupns()
    {
        $products = store::where('store_id', '!=', 0)->get();
        $shows = Category::get();
        return view('admin.coupons.add_coupon')->with(compact('products', 'shows'));
    }
    public function viewCoupons(Request $request )
    {
       $coupons = Coupons::get();

      // zoha rff
// $stores = store::where(['store_id' => $store_id])->get();
        //   $stores= store::where(['store_id' => 0])->get();
        //   dd( $stores);
        // $stores = store::where('store_id', '!=', 0)->get();
        //  $stores=store::get();
        // end rff

        return view('admin.coupons.view_coupons')->with(compact('coupons'));
        // return view('admin.coupons.view_coupons')->with(compact('coupons','levels'));
    }
    public function updateStatus(Request $request, $id = null)
    {
        $data = $request->all();
        Coupons::where('id', $data['id'])->update(['status' => $data['status']]);
    }

    // esko dakhna hy
    public function editCoupon(Request $request, $id = null)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $coupon = Coupons::find($id);
            $coupon->coupon_title = $data['coupon_title'];
            $coupon->coupon_code = $data['coupon_code'];
            $coupon->Affilate_Link = $data['Affilate_Link'];
            $coupon->store_id = $data['store_id'];
            $coupon->catgry_id = $data['catgry_id'];
            $coupon->expiry_date = $data['expiry_date'];
            $coupon->Description = $data['Description'];

            //   /upload img
            // if (isset($request->image)    && ($request->image->extension() != '')) {
            //     $request->validate([
            //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            //     ]);
            //     $imageName = time() . '.' . $request->image->extension();
            //     $request->image->move(public_path('images'), $imageName);
            //     $coupon->image = $imageName;
            // }

            $coupon->expiry_date = $data['expiry_date'];
            $coupon->save();
            return redirect('/viewcoupons')->with('flash_message_success', 'Coupon has been Updated Successfully');
        }
        $products = store::all();
        $shows = Category::all();
        $couponDetails = Coupons::find($id);
        $catName = Category::where('id', $couponDetails->catgry_id)->get();
        $storeName = store::where('id', $couponDetails->store_id)->get();
        return view('admin.coupons.edit_coupon')->with(compact('catName', 'storeName', 'couponDetails', 'products', 'shows'));
    }


    public function deleteCoupon(Coupons $Coupons, $id = null)
    {
        Coupons::where('id', $id)->delete();
        Alert::success('Deleated sucessfully', 'Success Message');
        return redirect('/viewcoupons');
    }
    public function sortingCoupon()
    {
        return view('admin.coupons.sorting_coupon');
    }

    public function  selectsstores()
    // {
    //     $coup = Coupons::get();
    {
        // zoha mmmm
        $showcoupans = coupons::where(['store_id' => 0])->get();

        return view('admin.coupons.show_coupon');
    }
    // public function selectCoupon()
    // // {
    // //     $coup = Coupons::get();
    // {
    //     if($_GET['store_id']>-1)
    //     {
    //         $empty= Coupons::where(['store_id' => $request->input('store_id')])->get();
    //         $coup = store::where(['store_id' => 0])->get();
    //         return view('admin.coupons.store_coupon')->with(compact('coup'));
    //     }
    //     else
    //     {
    //         $empty=array();
    //         $coup = store::where(['store_id' => 0])->get();
    //         return view('admin.coupons.store_coupon')->with(compact('coup'));
    //     }
    // }
    public function selectCoupon()
    {
        $coup = store::where('store_id', '!=', 0)->get();
        return view('admin.coupons.store_coupon')->with(compact('coup'));
    }

    public function selectCouponstore(Request $request)
    {

        $store_id = $request->input('store_id');
        if ($store_id == '') {
            $products = Coupons::get();
        } else {
            $products = Coupons::where(['store_id' =>  $store_id])->get();
        }
        $products;
        return view('admin.coupons.view_store')->with(compact('products'));
    }
    // for status update
    public function updateStatuscoupn(Request $request, $id = null)
    {
        $data = $request->all();
        coupons::where('id', $data['id'])->update(['status' => $data['status']]);
    }

}
