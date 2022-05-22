@extends('frontend.master')
{{-- @section('title','add product') --}}
@section("content")

    <!-- heading -->
    <section class="blog_sec">
        <div class="container">
          <div class="main-heading">
            <h5>Latest Blogs & Promotion</h5>
          </div>

    <!-- now start the mid part of page -->

        <div class="container">
            <div class="row">
                @foreach ($blogs as $co)
            <div class="col-md-4 mb-5">
            <div class="blogs">
                <div class="blog_post">
                  <a href="/product">
                    {{-- <img src="{{asset('/imges/health.png')}}"> --}}
                    <img src="{{ asset('images') . '/' . $co->image }}">
                   </a>
            <div class="uperlay">
                <div class="inner_lay">
                  <a href="/product/{{$co->id}}" class="categories">{{$co->blog_url}}</a>
                  <a href="product/{{$co->id}}" ><h2 class="blog_title">{{$co->tittle_des}}</h2></a>
                </div>
              </div>
              </div>
            </div>
                </div>
                @endforeach
            </div>
        </div>

                    </div>



                @endsection
