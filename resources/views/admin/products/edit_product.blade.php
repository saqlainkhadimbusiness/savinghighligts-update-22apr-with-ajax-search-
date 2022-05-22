@extends('admin.layouts.master')
@section('title', 'Edit Product')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="header-icon">
                <i class="fa fa-product-hunt"></i>
            </div>
            <div class="header-title">
                <h1>Edit Product</h1>
                <small>Edit Products</small>
            </div>
        </section>
        @if (Session::has('flash_message_error'))
            <div class="alert alert-sm alert-danger alert-block" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>{!! session('flash_message_error') !!}</strong>
            </div>
        @endif

        @if (Session::has('flash_message_success'))
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
                                <a class="btn btn-add " href="{{ url('admin/view-products') }}">
                                    <i class="fa fa-eye"></i> View Stores </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="col-sm-6" enctype="multipart/form-data"
                                action="{{ url('/admin/edit-product/' . $productDetails->id) }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" value="{{ $productDetails->name }}"
                                        name="name" id="category_name" required>
                                </div>
                                <div class="form-group">
                                    <label>Parent Category</label>
                                    <select name="store_id" id="parent_id" class="form-control">
                                        <option value="0">Parent Category</option>
                                        @foreach ($levels as $val)
                                            <option value="{{ $val->id }}"
                                                @if ($val->id == $productDetails->store_id) selected @endif>{{ $val->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Url</label>
                                    <input type="text" class="form-control" value="{{ $productDetails->url }}" name="url"
                                        id="category_url" required>
                                </div>

                                <div class="form-group">
                                    <label>Affilate Link</label>
                                    <input type="text" class="form-control" value="{{ $productDetails->Affilate_Link }}"
                                        name="Affilate_Link" id="Affilate_Link" required>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" id="description" class="form-control">
                                       {{$productDetails->description}}
                                    </textarea>
                                 </div>

                                {{-- rffff --}}
                                <div class="form-group">
                                    <label>Picture upload</label>
                                    <input type="file" name="image" id="image1" accept="image/x-png,image/gif,image/jpeg">
                                    <input type="hidden" name="current_image"  value="{{ $productDetails->image }}">
                                    @if (!empty($productDetails->image))
                                        <img style="width:100px;margin-top:10px;" id="blah"
                                            src="{{ asset('images/' . $productDetails->image) }}">
                                    @endif
                                </div>
                                
                                <div class="reset-button">
                                    <input type="submit" class="btn btn-success" value="Edit Product">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#image1").change(function() {
            readURL(this);
        });
    </script>
@endsection
