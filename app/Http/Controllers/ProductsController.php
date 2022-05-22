<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Coupons;
use App\Models\store;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function addproduct(Request $request)
    {
        // echo"<pre>";
        // print_r($request->all());
        // die;
        $data = $request->all();
        $product = new store;
        if (isset($request->image)  && ($request->image->extension() != '')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $product->image = $imageName;
        }
        $product->store_id = $data['store_id'];
        $product->name = $data['name'];
        $product->url = $data['url'];
        $product->Affilate_Link = $data['Affilate_Link'];
        $product->description = $data['description'];
        $product->popular_store=$request['popular_store'];
        // if(isset($data['popular_store'])){
        // $product->popular_store =(int) $data['popular_store'];
        // }
        $product->save();
        return redirect('/allProductview')->with('flash_message_success', 'product Added Successfully!!');
    }
    public function show()
    {
        $levels = store::where(['store_id' => 0])->get();
        return view('admin.products.add_product')->with(compact('levels'));
    }

    public function viewProducts()
    {
        $products = store::get();
        return view('admin.products.view_products')->with(compact('products'));
    }
    public function editproduct(Request $request, $id = null)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $product = store::find($id);
            $product->store_id = $data['store_id'];
            $product->name = $data['name'];
            $product->url = $data['url'];
            $product->Affilate_Link = $data['Affilate_Link'];
            $product->description = $data['description'];
            //Upload image
            if (isset($request->image)    && ($request->image->extension() != '')) {
                $request->validate([
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
                ]);
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $product->image = $data[' $imageName'];
            }


            //   'image' => $imageName

            $product->save();
            return redirect('/allProductview')->with('flash_message_success', 'Coupon has been Updated Successfully');
        }
        $productDetails = store::find($id);
        return view('admin.products.edit_product')->with(compact('productDetails'));
    }








    // rffff
    // rff
    public function update(Request $request, $id = null)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ]);
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            store::where(['id' => $id])->update([
                'name' => $data['name'],
                'store_id' => $data['store_id'], 'Affilate_Link' => $data['Affilate_Link'], 'image' => $imageName, 'url' => $data['url']
            ]);


            return redirect('/allProductview')->with('flash_message_success', 'Category Updated Successfully!!!');
        }
        $levels = store::where(['store_id' => 0])->get();
        $categoryDetails = store::where(['id' => $id])->first();
        return view('admin.products.edit_product')->with(compact('levels', 'productDetails'));
    }

    public function editproductes(Request $request, $id = null)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $update = [
                'name' => $data['name'],
                'store_id' => $data['store_id'],
                'Affilate_Link' => $data['Affilate_Link'],
                'url' => $data['url'],
            ];
            if (isset($request->image)  && ($request->image->extension() != '')) {
                $imageName = rand(0, 1000000000) . time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $update['image'] = $imageName;
            }

            store::where(['id' => $id])->update($update);

            return redirect('/allProductview')->with('flash_message_success', 'Category Updated Successfully!!!');
        }
        $levels =  store::where(['store_id' => 0])->get();
        $productDetails =  store::where(['id' => $id])->first();
        return view('admin.products.edit_product')->with(compact('levels', 'productDetails'));
    }
    public function  editshowproduct($id)
    {

        $levels =  store::where(['store_id' => 0])->get();
        $productDetails =  store::where(['id' => $id])->first();
        return view('admin.products.edit_product')->with(compact('levels', 'productDetails'));
    }
    public function  deleteproduct(store $store, $id)
    {
        store::where('id', $id)->delete();
        Alert::success('Deleated sucessfully', 'Success Message');
        return redirect('/viewcoupons');
    }
    public function  showpages($id = null)
    {
        $storedetails = store::where('id', $id)->first();
        echo  $storedetails;
        die;
        return view('frontend.subpageofcat');
    }
    public function index()
    {
        $coupans = store::all();
        echo "<pre>";
        print_r($coupans);
        die;
        return view('frontend.subpageofstore')->with(compact('coupans'));
    }

    public function updateStatusproduct(Request $request, $id = null)
    {
        $data = $request->all();
        store::where('id', $data['id'])->update(['status' => $data['status']]);
    }
}
