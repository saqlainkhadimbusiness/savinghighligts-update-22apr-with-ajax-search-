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
                     <a class="btn btn-add " href="{{url('/allpagesview')}}">
                        <i class="fa fa-eye"></i> View Pages </a>
                  </div>
               </div>
               <div class="panel-body">
                  <form autocomplete="off" enctype="multipart/form-data" class="col-sm-12" action="{{url('/allpagesdetails/')}}" method="post"> {{csrf_field()}}
                     <div class="form-group">
                        <label>Page Parent</label>
                        <select name="parent_level" id="parent_level" class="form-control">
                           <option>Select Page</option>
                           <option>Home</option>
                           <option>About</option>
                           <option>Contact</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label>S</label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="page_name" id="page_name" required>
                     </div>
                     <div class="form-group">
                        <label>Meta Title</label>
                        <input type="text" class="form-control" placeholder="Meta Title" name="meta_title" id="meta_title" required>
                     </div>
                     <div class="form-group">
                        <label>Meta Keywords</label>
                        <input type="text" class="form-control" placeholder="Meta Keywords" name="meta_keyword" id="meta_keyword" required>
                     </div>
                     <div class="form-group">
                        <label>Meta Description</label>
                        <textarea class="form-control" name="meta_desc" id="meta_desc" placeholder="Meta Description"></textarea>
                     </div>
                     <div class="form-group">
                        <label>Sort Order</label>
                        <select class="form-control" name="sort_order" id="sort_order" required>
                           <option>1</option>
                           <option>2</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label>Content Image</label>
                        <input type="file" name="content_image" accept="image/x-png,image/gif,image/jpeg" id="content_image">
                     </div>
                     <div class="form-group">
                        <label>Banner Image Image</label>
                        <input type="file" name="banner_image" accept="image/x-png,image/gif,image/jpeg" id="banner_image">
                     </div>
                     <div class="form-group">
                        <label>Short Content</label>
                        <textarea class="form-control" name="short_content" id="short_content">

                                            </textarea>
                     </div>
                     <div class="form-group">
                        <label>Long Content</label>
                        <textarea class="form-control" name="long_content" id="summernote" rows="5" cols="5">

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
