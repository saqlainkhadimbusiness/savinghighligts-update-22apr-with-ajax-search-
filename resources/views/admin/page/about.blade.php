@extends('admin.layouts.master')
@section('title','Add Page')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="header-icon">
         <i class="fa fa-image"></i>
      </div>
      <div class="header-title">
         <h1>Add Page</h1>
         <small>Add Page</small>
      </div>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <!-- Form controls -->
         <div class="col-md-12">
            <div class="panel panel-bd lobidrag">
               <div class="panel-heading">
                  <div class="btn-group" id="buttonlist">
                     <a class="btn btn-add " href="{{url('/allaboutview')}}">
                        <i class="fa fa-eye"></i> View Pages </a>
                  </div>
               </div>
               <div class="panel-body">
                  <form autocomplete="off" enctype="multipart/form-data" class="col-sm-12" action="{{url('/adddata/')}}" method="post"> {{csrf_field()}}
                     <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" placeholder="Meta Title" name="Title" id="title" required>
                     </div>
                     <div class="form-group">
                        <label>Slug</label>
                        <input type="text" class="form-control" placeholder="slug" name="slug" id="slug" required>
                     </div>
                     <div class="form-group">
                        <label>Content</label>
                        <textarea class="form-control" name="content" id="content">

                        </textarea>
                     </div>
                     <div class="reset-button">
                        <input type="submit" class="btn btn-success" value="Add Page">
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

