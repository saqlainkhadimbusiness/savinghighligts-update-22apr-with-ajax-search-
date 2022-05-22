@extends('admin.layouts.master')
@section('title','Edit Category')
@section('content')
<style>
    .tox-notifications-container
    {
        display: none !important;
    }
</style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-pencil"></i>
       </div>
       <div class="header-title">
          <h1>Edit Blogs</h1>
          <small>Edit Blogs</small>
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
                   <div class="btn-group" id="buttonlist">
                      <a class="btn btn-add " href="{{url('viewnothing')}}">
                      <i class="fa fa-eye"></i>  View blogs </a>
                   </div>
                </div>

                <div class="panel-body">
                <form class="col-sm-6" action="{{$url}}" method="post" enctype="multipart/form-data"> {{csrf_field()}}
                    @foreach ($users as $user)
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" name="user_name" id="user_name"    class="form-control" value="{{$user->user_name}}">
                      </div>
                      <div class="form-group">
                         <label>First Name</label>
                      <input type="text" class="form-control" value="{{$user->first_name}}" name="first_name" id="first_name" required>
                      </div>

                      <div class="form-group">
                        <label>Last Name</label>
                     <input type="text" class="form-control" value="{{$user->last_name}}" name="last_name" id="last_name" required>
                     </div>

                      <div class="form-group">
                        <label>Contact</label>
                        <input type="text" class="form-control" placeholder="contact" name="contact" value="{{$user->contact_num}}"  id="contact" required>
                     </div>

                     <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" placeholder="address" name="address" value="{{$user->address}}"  id="address" required>
                     </div>

                     <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" placeholder="password" name="password" value="{{$user->password}}"  id="password" required>
                     </div>

                     <label>Select Role</label>
                     <select name="select_role" id="select_role" class="form-control" >
                         <option>{{$user->select_role}}</option>
                     <option >admin</option>
                     <option>user</option>
{{-- ruf --}}
                      <div class="form-group">
                        <label>Status</label>
                        @if ($user->status=="Active")
                        <label for="active"><input type="radio" name="status" id="active" value="Active" checked>Active</label>
                        <label for="inactive1"><input type="radio" name="status" id="inactive1" value="In-Active" >In-Active</label>
                        @else
                        <label for="active1"><input type="radio" name="status" id="active1" value="Active" >Active</label>
                        <label for="inactive"><input type="radio" name="status" id="inactive" value="In-Active" checked> In-Active</label>
                        @endif

                     </div>
                     {{--<input type="hidden" name="id" value="{{$blogs->id}}">
                      <div class="reset-button"> --}}
                         <input type="submit" class="btn btn-success" value="Edit User">
                      </div>
                      @endforeach
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
