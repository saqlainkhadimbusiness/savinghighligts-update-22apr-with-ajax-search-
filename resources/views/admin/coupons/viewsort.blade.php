@extends('admin.layouts.master')
@section('title','Add Category')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-product-hunt"></i>
       </div>
       <div class="header-title">
          <h1>Add Category</h1>
          <small>Add Category</small>
       </div>
    </section>
    @if(Session::has('flash_message_error'))
   <div class="alert alert-sm alert-danger alert-block" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      <strong>{!! session('flash_message_error') !!}</strong>
   </div>
   @endif

   @if(Session::has('flash_message_success'))
   <div class="alert alert-sm alert-success alert-block" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      <strong>{!! session('flash_message_success') !!}</strong>
   </div>
   @endif
    <!-- Main content -->
    <section class="content">
       <div class="row">
          <!-- Form controls -->
          <div class="box-body">
            <ul id="sortable">
                @foreach ($products as $product)
                    <li class="ui-state-default grabbable" data-id="{{ $product->id }}"><span
                            class="ui-icon ui-icon-arrowthick-2-n-s"></span>{{ $product->coupon_title }}
                        <span class="SortingCoupType pull-right">{{ $product->Cupon_type}}----
                             <a style=" color:#017bc4" target="_blank"
                                href="http://www.refundcode.com/control_panel/coupons/update/24887">
                                Edit</a></span>
                    </li>
                    {{-- <li class="ui-state-default grabbable" data-id="24886"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Spring Clearance Up to 70% off                <span class="SortingCoupType pull-right">Deal &nbsp; &nbsp; - &nbsp; &nbsp; <a style=" color:#017bc4" target="_blank" href="http://www.refundcode.com/control_panel/coupons/update/24886"> Edit</a></span>
    </li>
                  <li class="ui-state-default grabbable" data-id="24888"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>10% off when You Sign Up                <span class="SortingCoupType pull-right">Deal &nbsp; &nbsp; - &nbsp; &nbsp; <a style=" color:#017bc4" target="_blank" href="http://www.refundcode.com/control_panel/coupons/update/24888"> Edit</a></span>
    </li>
                  <li class="ui-state-default grabbable" data-id="24889"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Up to 70% Off Further Reductions                <span class="SortingCoupType pull-right">Deal &nbsp; &nbsp; - &nbsp; &nbsp; <a style=" color:#017bc4" target="_blank" href="http://www.refundcode.com/control_panel/coupons/update/24889"> Edit</a></span>
    </li>
                  <li class="ui-state-default grabbable" data-id="24890"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Buy One Get One Free On selected Items                <span class="SortingCoupType pull-right">Deal &nbsp; &nbsp; - &nbsp; &nbsp; <a style=" color:#017bc4" target="_blank" href="http://www.refundcode.com/control_panel/coupons/update/24890"> Edit</a></span>
    </li>
                  <li class="ui-state-default grabbable" data-id="24891"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>10% off With Student Discount                <span class="SortingCoupType pull-right">Deal &nbsp; &nbsp; - &nbsp; &nbsp; <a style=" color:#017bc4" target="_blank" href="http://www.refundcode.com/control_panel/coupons/update/24891"> Edit</a></span>
    </li>
                  <li class="ui-state-default grabbable" data-id="24892"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Express Delivery Only £3.99                <span class="SortingCoupType pull-right">Deal &nbsp; &nbsp; - &nbsp; &nbsp; <a style=" color:#017bc4" target="_blank" href="http://www.refundcode.com/control_panel/coupons/update/24892"> Edit</a></span> --}}
                    {{-- </li> --}}
                @endforeach
            </ul>

        </div>



    </div>





</div>
</div>
</center>



</section>
       </div>
    </section>
    <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->

@endsection
