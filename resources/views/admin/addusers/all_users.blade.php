@extends('admin.layouts.master')
@section('title','View Categories')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-eye"></i>
       </div>
       <div class="header-title">
          <h1>View Users</h1>
          {{-- <small>Blogs List</small> --}}
       </div>
    </section>
    @if(Session::has('flash_message_error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    <strong>{{ session('flash_message_error') }}</strong>
    </div>
    @endif
    @if(Session::has('flash_message_success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    <strong>{{ session('flash_message_success') }}</strong>
    </div>
    @endif

    <div id="message_success" style="display:none;" class="alert alert-sm alert-success">Status Enabled</div>
    <div id="message_error" style="display:none;" class="alert alert-sm alert-danger">Status Disabled</div>
    <!-- Main content -->
    <section class="content">
       <div class="row">
          <div class="col-sm-12">
             <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                   <div class="btn-group" id="buttonexport">
                      <a href="#">
                         {{-- <h4>View Blogs</h4> --}}
                      </a>
                   </div>
                </div>
                <div class="panel-body">
                <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                   <div class="btn-group">
                      <div class="buttonexport" id="buttonlist">
                      <a class="btn btn-add" href="{{url('/user')}}"> <i class="fa fa-plus"></i> Add users
                         </a>
                      </div>

                   </div>
                   <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                   <div class="table-responsive">
                      <table id="table_id" class="table table-bordered table-striped table-hover">
                         <thead>
                            <tr class="info">
                               <th>ID</th>
                               <th>User Name</th>
                               <th>First Name</th>
                               <th>Last Name</th>
                               <th>Contact</th>
                               <th>Address</th>
                               <th>Password</th>
                               <th>Select Role</th>
                               {{-- <th>Status</th> --}}
                               <th>Action</th>
                            </tr>
                         </thead>
                         <tbody>
                             @foreach($shows as $user)
                            <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->user_name}}</td>
                            <td>{{$user->first_name}}</td>
                            <td>{{$user->last_name}}</td>
                            <td>{{$user->contact_num}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->password}}</td>
                            <td>{{$user->select_role}}</td>
                            {{-- <td>{{$user->status}}</td> --}}
                            {{-- <td>
                              <input type="checkbox" id="toggle-demo" class="CategoryStatus btn btn-success" rel="{{$user->id}}"
                              data-toggle="toggle" data-on="Enabled" data-of="Disabled" data-onstyle="success" data-offstyle="danger"
                              @if($user['status']=="1") checked @endif>
                              <div id="myElem" style="display:none;" class="alert alert-success">Status Enabled</div>
                              </td> --}}
                               <td>
                               <a href="{{url('/edituser/'.$user->id)}}" class="btn btn-add btn-sm"><i class="fa fa-pencil"></i></button>
                               <a href="{{url('/delete-user/'.$user->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> </button>
                               </td>
                            </tr>
                             @endforeach
                         </tbody>
                      </table>

                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
@endsection
