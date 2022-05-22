@extends('admin.layouts.master')
@section('title', 'Add Product')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="header-icon">
                <i class="fa fa-product-hunt"></i>
            </div>
            <div class="header-title">
                <h1>Add Stores</h1>
                <small>Add Stores</small>
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
                                <a class="btn btn-add " href="{{ url('/allProductview') }}">
                                    <i class="fa fa-eye"></i> View Stores </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form autocomplete="off" class="col-sm-6" enctype="multipart/form-data"
                                action="{{ url('/addProduct') }}" method="post"> {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Store Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Product Name" name="name"
                                        id="product_name" required>
                                </div>
                                <div class="form-group">
                                    <label>Stores</label>
                                    <select name="store_id" id="parent_id" class="form-control">
                                        <option value="0">Parent Category</option>
                                        @foreach ($levels as $val)
                                            <option value="{{ $val->id }}">{{ $val->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Url</label>
                                    <input type="text" class="form-control" placeholder="Url" name="url" id="category_url"
                                        required>
                                </div>

                                <div class="form-group">
                                    <label>Affilate Link</label>
                                    <input type="text" class="form-control" placeholder="Affilate Link"
                                        name="Affilate_Link" id="Affilate Link" required>
                                </div>

   <div class="form-group">
    <label>Description</label>
    <textarea name="description" id="description" class="form-control">
</textarea>
</div>
                                <!-- Checked checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="popular_store"
                                        value="1" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">Popular Store</label>
                                </div>



                                <div class="form-group">
                                    <label>Picture upload</label>
                                    <input type="file" name="image">
                                </div>

                                <div class="form-check">
                                    <div class="reset-button">
                                        <input type="submit" class="btn btn-success" value="Add to Store">
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
