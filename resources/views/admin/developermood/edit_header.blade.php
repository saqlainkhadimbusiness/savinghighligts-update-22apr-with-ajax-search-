@extends('admin.layouts.master')
@section('title','Add Category')
@section('content')
<style>
    .tox-notifications-container
    {
        display: none !important;
    }
    .form-group{
        margin: 10px;

    }

</style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-product-hunt"></i>
       </div>
       <div class="header-title">
          <h1>Add header</h1>
          <small>Add header</small>
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
          <div class="col-sm-12">
             <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                   {{-- <div class="btn-group" id="buttonlist">
                      <a class="btn btn-add " href="{{url('viewnothing')}}">
                      <i class="fa fa-eye"></i>  View Blogs </a>
                   </div> --}}
                </div>
                <div class="panel-body">
                <form class="col-sm-6" action="{{url('/addheader')}}" method="post" enctype="multipart/form-data"> {{csrf_field()}}
                      </div>
                      <div class="form-group"  style="width: 530px;
                      margin-left: 30px;">
                         <label>Header Script</label>
                         <textarea name="header_description" id="header_description" class="form-control">{{$header[0]->description}}</textarea>
                      </div>
                      <div class="reset-button">
                         <input type="submit" class="btn btn-success" value="Add Category">
                      </div>
                      <br>
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
