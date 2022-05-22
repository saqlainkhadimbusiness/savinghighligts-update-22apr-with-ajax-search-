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
          <h1>Add Blog</h1>
          <small>Add Blog</small>
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
                      <i class="fa fa-eye"></i>  View Blogs </a>
                   </div>
                </div>
                <div class="panel-body">
                <form autocomplete="off" class="col-sm-6"action="{{url('/addblogs/')}}" method="post" enctype="multipart/form-data"> {{csrf_field()}}
                      {{-- <div class="form-group"style="width: 530px;
                      margin-left: 30px;">
                        <label>Blog Image</label>
                        <input type="file" name="image">
                     </div> --}}
                      </div>

                      <div class="form-group" style="width: 530px;
                      margin-left: 30px;">
                         <label>Blog Little Description</label>
                         <textarea name="tittle_des" id="tittle_des" placeholder=" Enter your little description" class="form-control"></textarea>
                         {{-- <select name="tittle_des" id="tittle_des" class="form-control"> --}}
                             {{-- <option value="0">Parent Category</option> --}}
                             {{-- @foreach($levels as $val)
                         <option value="{{$val->id}}">{{$val->name}}</option>
                             @endforeach --}}
                         </select>
                      </div>
                      <div class="form-group"style="width: 530px;
                      margin-left: 30px;">
                         <label>Url</label>
                         <input type="text" class="form-control" placeholder="Enter your url" name="blog_url" id="blog_url" required>
                      </div>
                      <div class="form-group" style="width: 530px;
                      margin-left: 30px;">
                        <label> Product Title</label>
                        <input type="text" class="form-control" placeholder=" Enter your product name" name="blog_title" id="blog_title" required>
                     </div>
                      <div class="form-group"  style="width: 530px;
                      margin-left: 30px;">
                         <label> Product Description</label>
                         <textarea name="blog_description" id="blog_description" placeholder=" Enter your product description" class="form-control"></textarea>
                      </div>
                      {{-- rff
                            for description --}}
                            {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
                            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
                            <div class="container mt-4 mb-4">
                                <div class="row justify-content-md-center" style="width: 830px;
                                margin-left: -30px;">
                                  <div class="col-md-12 col-lg-8">
                                    <label>Description</label>
                                    <div class="form-group">
                                       <textarea id="editor" name="blog_description"></textarea>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
                        <script>
                          tinymce.init({
                            selector: 'textarea#editor',
                            menubar: false
                          });
                        </script> --}}
                         <div class="form-group"style="width: 530px;
                         margin-left: 30px;">
                           <label>Blog Image</label>
                           <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg" >
                        </div>
                             {{-- rfffend --}}
                      {{-- <div class="form-group">
                        <label>title</label>
                        <input type="text" class="form-control" placeholder="title" name="blog_title" id="blog_title" required>
                     </div> --}}
                      <div class="reset-button">
                         <input type="submit" class="btn btn-success" value="Add Blogs">
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
