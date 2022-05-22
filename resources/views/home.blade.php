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
            <div class="col-md-4">
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
                <!-- 2nd -->
                {{-- <div class="col-md-4">
                <div class="blogs">
                <div class="blog_post">
                  <a href="#"
                    >
                    <img src="{{asset('/imges/accessories1.jpg')}}">
                </a>
            <div class="uperlay">
                <div class="inner_lay">
                  <a href="accessories.html" class="categories">Accessories</a>
                  <a href="accessories.html"><h2 class="blog_title">Click To Redirect Blogs</h2></a>

                </div>
              </div>
            </div>
                </div>
             </div>
              <!-- 3rd -->
              <div class="col-md-4">
                <div class="blogs">
                <div class="blog_post">
                  <a href="#"
                    >
                    <img src="{{asset('/imges/kitchn.png')}}">



                </a>
            <div class="uperlay">
                <div class="inner_lay">
                  <a href="Appliances.html" class="categories">Kitchen-and-Appliance</a>
                  <a href="Appliances.html"><h2 class="blog_title">Click To Redirect Blogs</h2></a>

                </div>
              </div>
            </div>
                </div>
             </div>
            </div>
            </div> --}}
            {{-- <br>
            <br> --}}

            <!-- 2nd row -->
        {{-- <div class="container">
            <div class="row">
            <div class="col-md-4">

            <div class="blogs">
                <div class="blog_post">
                  <a href="#"
                    >
                    <img src="{{asset('/imges/home.jpg')}}">
                </a>
            <div class="uperlay">
                <div class="inner_lay">
                  <a href="Home & Garden.html" class="categories">Home-and-Garden</a>
                  <a href="Home & Garden.html"><h2 class="blog_title">Click To Redirect Blogs</h2></a>

                </div>
              </div>
              </div>
            </div>
                </div> --}}
                <!-- 2nd -->
                {{-- <div class="col-md-4">
                <div class="blogs">
                <div class="blog_post">
                  <a href="#"
                    >
                    <img src="{{asset('/imges/diy1.jpg')}}">




                </a>
            <div class="uperlay">
                <div class="inner_lay">
                  <a href="diy.html" class="categories">Diy-and-Household</a>
                  <a href="diy.html"><h2 class="blog_title">Click To Redirect Blogs</h2></a>

                </div>
              </div>
            </div>
                </div>
             </div>
              <!-- 3rd -->
              <div class="col-md-4">
                <div class="blogs">
                <div class="blog_post">
                  <a href="#"
                    >
                    <img src="{{asset('/imges/seasonal.jpg')}}">




              </a>
            <div class="uperlay">
                <div class="inner_lay">
                  <a href="seasonal-and-promotion.html" class="categories">Seasonal Promotion</a>
                  <a href="seasonal-and-promotion.html"><h2 class="blog_title">Click To Redirect Blogs</h2></a>

                </div>
              </div>
            </div>
                </div>
             </div>
            </div>
            </div> --}}
            <br>
            <br>
               <!-- 3rd row -->
               {{-- <div class="container">
                <div class="row mb-5">
                <div class="col-md-4">

                <div class="blogs">
                    <div class="blog_post">
                      <a href="#"
                        >

                        <img src="{{asset('/imges/travel1.jpg')}}">
</a>
                <div class="uperlay">
                    <div class="inner_lay">
                      <a href="travel&tour.html" class="categories">Travel-and-Tour</a>
                      <a href="travel&tour.html"><h2 class="blog_title">Click To Redirect Blogs</h2></a>

                    </div>
                  </div>
                  </div>
                </div>
                    </div>
                    <!-- 2nd -->
                    <div class="col-md-4">
                    <div class="blogs">
                    <div class="blog_post">
                      <a href="#"
                        >

                        <img src="{{asset('/imges/pcr.jpg')}}">

                     </a>
                <div class="uperlay">
                    <div class="inner_lay">
                      <a href="covid-19.html" class="categories">Covid-19 PCR test</a>
                      <a href="covid-19.html"><h2 class="blog_title">Click To Redirect Blogs</h2></a>

                    </div>
                  </div>
                </div>
                    </div>
                 </div> --}}
                  <!-- 3rd -->
                  {{-- <div class="col-md-4">
                    <div class="blogs">
                    <div class="blog_post">
                      <a href="#"
                        >



                        <img src="{{asset('/imges/save1.jpg')}}">


                   </a>
                <div class="uperlay">
                    <div class="inner_lay">
                      <a href="saving&discount.html" class="categories">Saving-and-Discount</a>
                      <a href="saving&discount.html"><h2 class="blog_title">Click To Redirect Blogs</h2></a>

                    </div>
                  </div>
                </div> --}}

                    </div>
                 {{-- </div>
                </div>
                </div>
                </div> --}}


                @endsection
