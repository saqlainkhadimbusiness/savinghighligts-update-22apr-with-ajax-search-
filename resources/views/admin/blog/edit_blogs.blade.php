@extends('admin.layouts.master')
@section('title', 'Edit Category')
@section('content')
    <style>
        .tox-notifications-container {
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
                                <a class="btn btn-add " href="{{ url('viewnothing') }}">
                                    <i class="fa fa-eye"></i> View blogs </a>
                            </div>
                        </div>
                        @foreach ($blog as $blogs)
                        @endforeach
                        <div class="panel-body">
                            <form class="col-sm-6" action="{{ $url }}" method="post"
                                enctype="multipart/form-data"> {{ csrf_field() }}

                                <div class="form-group">
                                    <label>Blog Little Description</label>
                                    <textarea name="tittle_des" id="tittle_des" class="form-control">{{ $blogs->tittle_des }}</textarea>

                                </div>
                                <div class="form-group">
                                    <label>Url</label>
                                    <input type="text" class="form-control" value="{{ $blogs->blog_url }}" name="blog_url"
                                        id="blog_url" required>
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" placeholder="title" name="blog_title"
                                        value="{{ $blogs->blog_title }}" id="blog_title" required>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="blog_description" id="blog_description" class="form-control">{{ $blogs->blog_description }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Blog Image</label>
                                    <input type="file" name="image" id="image" accept="image/x-png,image/gif,image/jpeg">
                                    @if (!empty($blogs->image))
                                        <img style="width:100px;margin-top:10px;" id="blah"
                                            src="{{ asset('images/' . $blogs->image) }}">

                                    @endif
                                </div>
                                <input type="hidden" name="id" value="{{ $blogs->id }}">
                                <div class="reset-button">
                                    <input type="submit" class="btn btn-success" value="Edit Blog">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
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

            $("#image").change(function() {
                readURL(this);
            });
        </script>
    </div>
    <!-- /.content-wrapper -->

@endsection
