@extends('admin.layouts.master')
@section('title', 'Add Coupon')
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
                <i class="fa fa-product-hunt"></i>
            </div>
            <div class="header-title">
                <h1>Add Coupon</h1>
                <small>Add Coupons</small>
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
                                <a class="btn btn-add " href="{{ url('/viewcoupons') }}">
                                    <i class="fa fa-eye"></i> View Coupons </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form autocomplete="off" class="col-sm-6" enctype="multipart/form-data" action="{{ url('/addcoupons/') }}"
                                method="post" name="add_coupon" id="add_coupon"> {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Coupon Title</label>
                                    <input type="text" class="form-control" placeholder="Enter Coupon Code"
                                        name="coupon_title" id="coupon_title" required>














                                    <div class="form-group">
                                        <label>Coupon Code</label>
                                        <input type="text" class="form-control" placeholder="Enter Coupon Code"
                                            name="coupon_code" id="coupon_code" required>
                                    </div>
                                    {{-- <div class="form-group">
                         <label>Amount</label>
                         <input type="text" class="form-control" placeholder="Enter Amount" name="coupon_amount" id="coupon_amount" required>
                      </div> --}}
                                    {{-- <div class="form-group">
                        <label>Amount Type</label>
                        <select name="amount_type" id="amount_type" class="form-control">
                         <option value="Percentage">Percentage</option>
                         <option value="Fixed">Fixed</option>
                        </select>
                     </div> --}}

                                    <div class="form-group">
                                        <label>Affilate Link</label>
                                        <input type="text" class="form-control" placeholder="Affilate Link"
                                            name="Affilate_Link" id="Affilate Link" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Expiry Date</label>
                                        <input type="text" class="form-control" name="expiry_date" id="datepicker"
                                            required>
                                    </div>


                                    {{-- side bar --}}
                                    {{-- <div class="form-group">
                        <label> Coupon Stores</label>
                        <select name="parent_id" id="parent_id" class="form-control">
                            <option value="" hidden>Select Coupon Stores</option>
                             @foreach ($products as $val)
                             <option value="{{$val->name}}">{{$val->name}}</option>
                         <option value="{{$val->id}}">{{$val->name}}</option>
                         @endforeach
                        </select>
                     </div> --}}

                                    <div class="form-group">
                                        <label>Stores</label>
                                        <select name="store_id" id="parent_id" class="form-control">
                                            <option value="" hidden>Select stores</option>
                                            @foreach ($products as $val)
                                                <option value="{{ $val->id }}">{{ $val->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label> Coupon Categories</label>
                                        <select name="catgry_id" id="catgrry_id" class="form-control">
                                            <option value="" hidden>Select Coupon Categories</option>
                                            @foreach ($shows as $val)
                                                <option value="{{ $val->id }}">
                                                    @if($val->categry_id!= 0)--@endif
                                                    {{ $val->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
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
                                   <textarea id="editor" name="Description"></textarea>
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
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="Description" id="category_description" class="form-control">

                        </textarea>
                                </div>
                                {{-- radio button --}}

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="getcode" id="flexRadioDefault1" value="getdeal">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                      Get Deal
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="getcode" id="flexRadioDefault2" value="getcode" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                     Get Code
                                    </label>
                                  </div>
                                  {{-- rfffnow --}}

                                {{-- radio button end --}}
                                {{-- rfffend --}}
                                {{-- <div class="form-group">
                                    <label>Set Featured/Background Image</label>
                                    <input type="file" name="image">
                                </div> --}}
                                {{-- end --}}

                                <div class="reset-button">
                                    <input type="submit" class="btn btn-success" value="Add Coupon">
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
