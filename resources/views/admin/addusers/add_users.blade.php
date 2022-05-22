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
    {{-- <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-product-hunt"></i>
       </div>
       <div class="header-title">
          <h1>Add Blog</h1>
          <small>Add Blog</small>
       </div>
    </section> --}}
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
                   <div class="btn-group" id="buttonlist">
                      {{-- <a class="btn btn-add " href="{{url('viewnothing')}}"> --}}
                      {{-- <i class="fa fa-eye"></i>  View Blogs </a> --}}
                      <h3>Add Users</h3>
                   </div>
                </div>
                <div class="panel-body">
                <form  autocomplete="off" class="col-sm-6" action="{{url('/adduser/')}}" method="post" enctype="multipart/form-data"> {{csrf_field()}}
                      </div>
                       <div class="form-group" style="width: 530px;
                      margin-left: 30px;">
                         <label>User name</label>
                         <input type="text" class="form-control" placeholder="user name" name="user_name" id="user_name" required>
                      </div>
                      <div class="form-group" style="width: 530px;
                      margin-left: 30px;">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="first name" name="first_name" id="first_name" required>
                     </div>
                      <div class="form-group"  style="width: 530px;
                      margin-left: 30px;">
                       <label>Last Name</label>
                       <input type="text" class="form-control" placeholder="last name" name="last_name" id="last_name" required>
                    </div>
                    <div class="form-group"  style="width: 530px;
                    margin-left: 30px;">
                     <label>Contact</label>
                     <input type="text" class="form-control" placeholder="contact" name="contact" id="contact" required>
                  </div>
                  <div class="form-group"  style="width: 530px;
                  margin-left: 30px;">
                   <label>Address</label>
                   <input type="text" class="form-control" placeholder="address" name="address" id="address" required>
                </div>
                <div class="form-group"  style="width: 530px;
                margin-left: 30px;">
                 <label>Password</label>
                 <input type="password" class="form-control" placeholder="password" name="password" id="password" required>
              </div>
              <div class="form-group"  style="width: 530px;
              margin-left: 30px;">
                <label>Select Role</label>
                <select name="select_role" id="select_role" class="form-control">
                    <option></option>
                <option>admin</option>
                <option>user</option>

                </select>
             </div>
                         {{-- <div class="form-group"style="width: 530px;
                         margin-left: 30px;">
                           <label>Blog Image</label>
                           <input type="file" name="image">
                        </div> --}}

                      <div class="reset-button">
                         <input type="submit" class="btn btn-success" value="Add Users">
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
