@extends('admin.layouts.master')
@section('title', 'View Categories')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="header-icon">
                <i class="fa fa-eye"></i>
            </div>
            <div class="header-title">
                <h1>View Blogs</h1>
                <small>Blogs List</small>
            </div>
        </section>
        @if (Session::has('flash_message_error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>{{ session('flash_message_error') }}</strong>
            </div>
        @endif
        @if (Session::has('flash_message_success'))
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
                                    <h4>View Blogs</h4>
                                </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                            <div class="btn-group">
                                <div class="buttonexport" id="buttonlist">
                                    <a class="btn btn-add" href="{{ url('/blog') }}"> <i class="fa fa-plus"></i>
                                        Add
                                        blogs
                                    </a>
                                </div>

                            </div>
                            <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                            <div class="table-responsive">
                                <table id="table_id" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr class="info">
                                            <th>ID</th>
                                            <th>image</th>
                                            <th>Blog little des</th>
                                            <th>Url</th>
                                            <th>Description</th>
                                            <th>title</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($shows as $blogs)
                                            <tr>
                                                <td>{{ $blogs->id }}</td>
                                                <td>
                                                    @if (!empty($blogs->image))
                                                        <img alt="image"
                                                            src="{{ asset('/images') . '/' . $blogs->image }}" width="35">
                                                </td>
                                        @endif
                                        <td>{{ $blogs->tittle_des }}</td>
                                        <td>{{ $blogs->blog_url }}</td>
                                        <td>{{ $blogs->blog_description }}</td>
                                        <td>{{ $blogs->blog_title }}</td>
                                        <td>
                                            <input type="checkbox" class="CouponStatus btn btn-success"
                                                rel="{{ $blogs->id }}" data-toggle="toggle" data-on="Enabled"
                                                data-off="Disabled" data-onstyle="success" class="blogStatus"
                                                data-offstyle="danger" @if ($blogs['status'] == '1') checked @endif>
                                            <div id="myElem" style="display:none" class="alert alert-success"
                                                name="blog_status">Status Enabled</div>
                                        </td>
                                        {{-- <td>
                              <input type="checkbox" id="toggle-demo" class="CategoryStatus btn btn-success" rel="{{$blogs->id}}"
                              data-toggle="toggle" data-on="Enabled" data-of="Disabled" data-onstyle="success" data-offstyle="danger"
                              @if ($blogs['status'] == '1') checked @endif>
                              <div id="myElem" style="display:none;" class="alert alert-success">Status Enabled</div>
                              </td> --}}
                                        <td>
                                            <a href="{{ url('/blogedit/' . $blogs->id) }}" class="btn btn-add btn-sm"><i
                                                    class="fa fa-pencil"></i></button>
                                                <a href="{{ url('/delete-blog/' . $blogs->id) }}"
                                                    class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> </button>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $(".CouponStatus").change(function() {
                var id=$(".CouponStatus").attr('rel');
                $.ajax({
                    url: "/blog/upadte-status/"+id,
                    success: function(respose) {
                       console.log(respose);
                    }
                });

            });
        });
    </script>
@endsection
