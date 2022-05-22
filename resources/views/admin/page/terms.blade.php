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
         <small>terms and conditions</small>
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
                  <form autocomplete="off" enctype="multipart/form-data" class="col-sm-12" action="{{url('/addtersms/')}}" method="post"> {{csrf_field()}}

                     <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" placeholder="Meta Title" name="Title" id="title" required>
                     </div>
                     <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="Description" id="disc">
                        </textarea>
                     </div>
                     <div class="form-group">
                        <label>Content</label>
                        <textarea class="form-control" name="content" id="content">
                        </textarea>
                     </div>
                     <div class="form-group">
                        <label>Organized as</label>
                        <textarea class="form-control" name="Organized" id="org">
                        </textarea>
                     </div>
                     <div class="form-group">
                        <label>Ownership</label>
                        <textarea class="form-control" name="Ownership" id="owner">
                        </textarea>
                     </div>

                     <div class="form-group">
                        <label>site usage</label>
                        <textarea class="form-control" name="siteusage" id="usage">
                        </textarea>
                     </div>

                     <div class="form-group">
                        <label>Warranties by users</label>
                        <textarea class="form-control" name="Warrantiesusers" id="usage">
                        </textarea>
                     </div>
                     <div class="form-group">
                        <label>User Conduct</label>
                        <textarea class="form-control" name="userconduct" id="usage">
                        </textarea>
                     </div>


                     <div class="form-group">
                        <label>Privicy</label>
                        <textarea class="form-control" name="Privicy" id="Privicy">
                        </textarea>
                     </div>
                     <div class="form-group">
                        <label>Copyright</label>
                        <textarea class="form-control" name="Copyright" id="Copyright">
                        </textarea>
                     </div>


                     <div class="form-group">
                        <label>terms&conditions change</label>
                        <textarea class="form-control" name="termsconditions" id="terms&conditions">
                        </textarea>
                     </div>

                     <div class="form-group">
                        <label>Communication</label>
                        <textarea class="form-control" name="communication" id="communication">
                        </textarea>
                     </div>



                     <div class="form-group">
                        <label>Disclaimer</label>
                        <textarea class="form-control" name="Disclaimer" id="Disclaimer">
                        </textarea>
                     </div>


                     <div class="form-group">
                        <label>contact us</label>
                        <textarea class="form-control" name="contactus" id="contact us">
                        </textarea>
                     </div>

                     <div class="form-group">
                        <label>Slug</label>
                        <input type="text" class="form-control" placeholder="slug" name="slug" id="slug" required>
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


