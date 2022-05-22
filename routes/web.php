<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CouponsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\developermoodController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\UserController;
// use Mail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/wh', function () {
    return view('welcome');
});

// Route::get('/main', function () {
//     return view('frontend.home');
// });



// Route::get('/catgry', function () {

//     return view('frontend.Categories');
// });

// page of subcatgry dynamic
// Route::get('/subcatgry/{id}/{n}', [IndexController::class, 'showsubpagecatgry']);
// end

Route::get('/substore',[ProductsController::class,'index']);
Route::get('/pagesdynamic', [ProductsController::class, 'showpages']);
// show subcatgry page dynamic zoha start
// for page update

Route::get('editpage/', [PagesController::class, 'editpageright']);
// Route::post('admin/editCoupones/{id}', [CouponsController::class, 'editCoupon']);
Route::get('/admin/edit-page/{id}', [PagesController::class, 'editpage']);
Route::post('/admin/edit-page/{id}', [PagesController::class, 'update']);
Route::post('admin/edit_page/{id}',[PagesController::class,'updatepages']);
//for delete coupn

// Route::post('/addpages', [PagesController::class, 'pagesview']);
// Route::get('/subctggry/{id}', [IndexController::class, 'showsubpagecat']);
// endzoha
// Route::get('/subcatgry', function () {
//     return view('frontend.subpageofcat');
// });
Route::get('/subcatgry/{id}/{n}', [indexController::class, 'showcatpages']);



Route::get('/about', function () {
    return view('frontend.about');
});


Route::get('/privicy', function () {
    return view('frontend.privicy');
});
Route::get('/target',[LayoutController::class,'target']);
Route::get('/walmart', function () {
    return view('frontend.walmart');
});
Route::get('/bebe', function () {
    return view('frontend.bebe');
});
Route::get('/easyjet', function () {
    return view('frontend.easyjet');
});
Route::get('/stubhub', function () {
    return view('frontend.stubhub');
});

Route::get('/register2', function () {
    return view('admin.admin_reg');
});

// Route::get('/showpages', function () {
//     return view('admin.page.pages');
// });
// // admin athntication
// zoha worked on it
Route::group(['middleware' => ['admin_auth']], function () {
    //  for add catagry
Route::get('/showcat', [CategoryController::class, 'showcategory']);
Route::post('/addcatgry', [CategoryController::class, 'addCategory']);
Route::get('/viewcategories', [CategoryController::class, 'viewCategories']);
Route::get('editit/', [CategoryController::class, 'editshowcat']);
Route::get('admin/edit-category/{id}', [CategoryController::class, 'editCategory']);
Route::post('admin/edit-category/{id}', [CategoryController::class, 'editCategory']);
//for delete categry
Route::get('deletecategory/{id}',[CategoryController::class,'destroy']);

// for add product
Route::get('/showproduct',[ProductsController::class,'show']);
Route::post('/addProduct',[ProductsController::class,'addProduct']);
// for view product
// Route::get('/viewproduct',[ProductsController::class,'shownproduct']);
Route::get('/allProductview',[ProductsController::class,'viewProducts']);
//for update product

//for update product
Route::get('editproducts/',[ProductsController::class,'editshowproduct']);
Route::get('/admin/edit-product/{id}', [ProductsController::class, 'editproductes']);
Route::post('/admin/edit-product/{id}', [ProductsController::class, 'editproductes']);
// for update product status
Route::post('/statusupdateproduct',[ProductsController::class,'updateStatusproduct']);



//  Route::post('edit/{id}',[ProductsController::class,'editproduct']);
Route::post('admin/edit_product/{id}',[ProductsController::class,'update']);
//for delete product

Route::get('/delete-product/{id}',[ProductsController::class,'deleteproduct']);

// end store links
Route::get('/delete-page/{id}',[PagesController::class,'deletepage']);

// blog route
Route::get('/blog', [blogController::class, 'showblog']);
Route::post('/addblogs', [blogController::class, 'addblog']);
// for view the page of blogsss
Route::get('/viewnothing', [blogController::class,'viewblog']);
// for edit page blogs
Route::get('/blogedit/{id}', [blogController::class, 'editblog']);
Route::post('/edialltblogs/{id}', [blogController::class, 'editnowblogs']);
Route::get('/delete-blog/{id}',[blogController::class,'deleteblogs']);
// / for update status blogs
Route::post('/statusblogupdate',[blogController::class,'updateblogStatus']);


// for update status
Route::post('/statusupdate',[CategoryController::class,'updateStatus']);
// for update coupon status
Route::post('/statusupdatecoupn',[CouponsController::class,'updateStatuscoupn']);
// for  add coupons
Route::get('/showcoupns', [CouponsController::class, 'showcoupns']);
Route::post('/addcoupons', [CouponsController::class, 'addCoupon']);
// for view coupons
Route::get('/viewcoupons', [CouponsController::class, 'viewCoupons']);
// for edit couponsviewnothing
Route::get('editcoupon/', [CouponsController::class, 'editcouponright']);
// Route::post('admin/editCoupones/{id}', [CouponsController::class, 'editCoupon']);
Route::get('/admin/edit-coupon/{id}', [CouponsController::class, 'editCoupon']);
Route::post('/admin/edit-coupon/{id}', [CouponsController::class, 'editCoupon']);
//for delete coupn
Route::get('/delete-coupon/{id?}',[CouponsController::class,'deleteCoupon']);
// for sorting of cupons
Route::get('/sorting', [CouponsController::class, 'sortingCoupon']);

// for store coupon view
Route::get('/storecoupon', [CouponsController::class, 'selectCoupon']);
Route::get('/storeio', [CouponsController::class, 'selectCoupon']);
// end
// page show of store_sorting
Route::get('/showstore', [CouponsController::class, 'selectCouponstore']);
Route::get('/couponstores', [CouponsController::class, 'selectsstores']);
// footer
Route::get('/footer', [developermoodController::class, 'showdevelopermood']);
Route::get('/footer', [developermoodController::class, 'showdevelopermood']);
Route::post('/addfooter', [developermoodController::class,'addfooter']);
// herder
Route::get('/header', [developermoodController::class, 'showdevelopermood1']);
Route::post('/addheader', [developermoodController::class,'addheader']);
//  for users route
Route::get('/user', [UserController::class, 'showuser']);
Route::post('/adduser', [UserController::class, 'adduser']);
Route::get('/viewuser', [UserController::class,'viewusers']);
Route::post('/updateuser/{id}', [UserController::class,'update']);
Route::get('/edituser/{id}', [UserController::class,'edit']);
Route::get('/delete-user/{id}',[UserController::class,'deleteuser']);
Route::get('/blog/upadte-status/{id}',[blogController::class,'updateStatus']);


});


Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware('auth');
Route::post('/dash', [AdminController::class, 'dashboard']);
// for logout
Route::get('/logout', [AdminController::class, 'logout']);
Route::post('/logout', [AdminController::class, 'logout']);

//
//for update product
// rff




// Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
// check
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
// Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// for blogs page

// for developer moode

//
Route::get('/catgry', [IndexController::class, 'showcat']);
Route::get('/store', [IndexController::class, 'showstore'])->name('store');
Route::get('/ajax_search', [IndexController::class, 'ajax_search'])->name('store');

Route::get('/substore/{id}/{n}', [IndexController::class, 'showsubpagestore']);
// //for page about
 Route::get('/about', [IndexController::class, 'aboutpage']);
// for show admin about
Route::get('/allabout', [PagesController::class, 'pageabout']);
// for addd about pages
Route::post('/adddata', [PagesController::class, 'addabout']);
// for view about page in admin panel
Route::get('/allaboutview',[PagesController::class,'viewaboutus']);
// for featred offer
Route::get('/offer',[IndexController::class,'featreoffer']);
// for contact
// Route::get('/contact', function () {
//     return view('frontend.contact');
// });
// for view contact page
Route::get('/contact', [IndexController::class, 'contactpage']);

Route::post('/customers', [PagesController::class, 'customer']);
// for email
Route::get('send-mail', function () {
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
    \Mail::to('Khalidnimra011@gmail.com')->send(new \App\Mail\MyTestMail($details));

    dd("Email is Sent.");
});
// for login

Route::get('/login', function () {
    session()->forget('login_id');
    return view('admin.admin_login');
});
Route::post('/login', [AdminController::class, 'loginnow']);
// for view blos
Route::get('/main',[IndexController::class,'viewblogs']);




// Route::get('/product', function () {
//     return view('frontend.productdetail');
// });

// product details
Route::get('/product/{id}',[IndexController::class,'viewblogsdetail']);
//zohA





















// for show termsandcondition
Route::get('/showterms', [PagesController::class, 'terms']);
// for addd about pages
Route::post('/addtersms', [PagesController::class, 'termspage']);
// Route::get('/terms', function () {
//     return view('frontend.termsandcondition');
// });
Route::get('/terms', [IndexController::class, 'tooterms']);


/*Sorting*/
Route::post('/admin/coupons/sorting', [CouponsController::class, 'reorderCoupans']);

