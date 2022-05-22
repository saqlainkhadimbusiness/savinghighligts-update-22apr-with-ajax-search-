@extends('admin.layouts.master')
@section('title','View About')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-product-hunt"></i>
       </div>
       <div class="header-title">
          <h1>View About Us</h1>
          <small>About Us</small>
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
                         <h4>View About Us</h4>
                      </a>
                   </div>
                </div>
                <div class="panel-body">
                <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                   <div class="btn-group">
                      <div class="buttonexport" id="buttonlist">
                      <a class="btn btn-add" href="{{url('/allabout')}}"> <i class="fa fa-plus"></i> Add About us
                         </a>
                      </div>
                   </div>
                   <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                   <div class="table-responsive">
                      <table id="table_id" class="table table-bordered table-striped table-hover">
                         <thead>
                            <tr class="info">
                               <th>ID</th>
                               <th>Title</th>
                               <th>Slug</th>
                               <th>Content</th>
                               {{-- <th>Status</th>
                               <th>Action</th> --}}
                            </tr>
                         </thead>
                         <tbody>
                             @foreach($products as $product)
                            <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->Title}}</td>
                            <td>{{$product->Slug}}</td>
                            <td>{{$product->content}}</td>

                               {{-- <td>{{$product->Affilate_Link}}</td> --}}
                               {{-- <td> --}}
                                {{-- @if(!empty($product->image))
                              <img alt="image" src="{{asset('images').'/'.$product->image}}" width="35">
                            </td> --}}
                            {{-- @endif
                               <td>
                               <input type="checkbox" class="ProductStatus btn btn-success" rel="{{$product->id}}"
                               data-toggle="toggle" data-on="Enabled" data-of="Disabled" data-onstyle="success" data-offstyle="danger"
                               @if($product['status']=="1") checked @endif>
                               <div id="myElem" style="display:none;" class="alert alert-success">Status Enabled</div>
                               </td>

                               <td> --}}
                              {{-- <a href="{{url('/admin/add-images/'.$product->id)}}" class="btn btn-info btn-sm" title="Add Images"><i class="fa fa-image"></i></button>
                              <a href="{{url('/admin/add-attributes/'.$product->id)}}" class="btn btn-warning btn-sm" title="Add Attributes"><i class="fa fa-list"></i></button> --}}
                               {{-- <a href="{{url('/admin/edit-product/'.$product->id)}}" class="btn btn-add btn-sm" title="Edit Product"><i class="fa fa-pencil"></i></button>
                               <a href="{{url('/delete-product/'.$product->id)}}" class="btn btn-danger btn-sm" title="Delete Product"><i class="fa fa-trash-o"></i> </button>
                               </td> --}}
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
