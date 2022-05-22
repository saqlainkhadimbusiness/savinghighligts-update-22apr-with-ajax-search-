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
          <h1>Sorting Select Option</h1>
          <small>Sorting Select Option</small>
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
    <div class="panel-body">
        <form class="col-sm-6" enctype="multipart/form-data" action="{{ url('/showstore') }}"
            method="get" name="add_coupon" id="add_coupon"> {{ csrf_field() }}
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                   <div class="panel-heading">
                      <div class="btn-group" id="buttonlist">
                         <a class="btn btn-add " href="{{url('/viewcategories')}}">
                         <i class="fa fa-eye"></i> Sort Store Coupons </a>
                      </div>
                      <div class="form-group">
                       <label>Stores</label>
                       <select name="store_id" id="parent_id" class="form-control">
                           <option value="" hidden>Select stores</option>
                            @foreach ($coup as $val)
                                <option value="{{ $val->id }}">{{ $val->name}}</option>
                           @endforeach
                              {{-- <option>red</option>
                              <option>blue</option> --}}
                       </select>
                   </div>
                   <div class="reset-button">
                       <input type="submit" class="btn btn-success"  value="Submit" href="{{url('/couponstores')}}">
                   </div>
                   </div>
                   </form>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->

@endsection
