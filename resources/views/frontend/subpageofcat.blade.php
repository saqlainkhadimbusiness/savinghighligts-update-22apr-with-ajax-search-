@extends('frontend.master')
{{-- @section('title', 'add product') --}}
@section('content')
    <!-- end of header -->
    <div class="main">
        <section class="bdcrums">
            <div class="container">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="/main">Home</a></li>
                        <li><a href="/catgry">Categories</a></li>
                        <li> {{$name}}</li>
                    </ul>
                </div>
            </div>

        </section>


        <section class="store-dtlSec">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="storeleft-side">
                            <div class="simillar-heading">
                                {{-- <h1>Photography Coupons</h1> --}}
                            </div>
                            <div class="about-txt">
                            </div>

   <?php
                            // echo '<pre>';
                            //     print_r($coupans);
                            //     die();
                            //     echo '</pre>';
                            //     ?>
                           <div class="simillar-heading">
                                {{-- <h2>Expire Coupons</h2> --}}
                            </div>
                            @foreach ($coupans as $co)

                                <div class="storecoupons expire-coupon">
                                    <div class="storecoupons-detail">
                                        <div class="couponpst">
                                            @foreach ($image as $val )

   <?php
    // echo '<pre>';
    //    print_r($image);
    //    die();
    //   echo '</pre>';
      ?>

                                            <a href="#"><img src="{{ asset('images') . '/' . $val->image }}" width="80%"
                                                    onclick="javascripts: showAllCodes('43571'), window.open('https://www.couponsluv.com/shop.html?cid=43571')">
                                            </a>
                                             @endforeach
                                        </div>
                                        {{-- <div class="couponpst">
                                            <a href="#">
                                                <img src="{{ asset('images') . '/' . $co->image }}"
                                                 width="80%"
                                                onclick="javascripts: showAllCodes('43571'), window.open('https://www.couponsluv.com/shop.html?cid=43571')">
                                            </a>
                                        </div> --}}





                                        <div class="couponotherinfo">
                                            <div class="title-&amp;likebox">
                                                <div class="coupon-tittle">
                                                    <span style="cursor:pointer"
                                                        onclick="javascripts: showAllCodes('43571'), window.open('#')">
                                                        <h3>{{ $co->coupon_title }}</h3>
                                                    </span>
                                                    <p>{{ $co->Description }}</p>
                                                </div>
                                            </div>
                                            <div class="mainbtn">
                                                <div class="uscode_btn">
                                                    {{-- <div class="coupon_action"
                                                        onclick="javascripts: showAllCodes('43571'), copyMyCodes('43571'), window.open('#')">
                                                        <span class="coupon_get_link btn-outer">Get Code</span>
                                                        <span id="in43571"
                                                            class="coupon_code btn-inner">{{ $co->coupon_code }}</span>
                                                    </div> --}}

                                                    @if ($co->Cupon_type	 == "getcode")
                                                    <div class="coupon_action"
                                                    onclick="javascripts: showAllCodes('43571'), copyMyCodes('43571'),href="{{ $co->Affilate_Link}}">
                                                    <span class="coupon_get_link btn-outer"><a style="color: white" href="{{ $co->Affilate_Link}}">Get Code</a></span>
                                                    <span id="in43571"
                                                        class="coupon_code btn-inner">{{ $co->coupon_code }}</span>
                                                </div>
                                                   @elseif ($co->Cupon_type	 == "getdeal")
                                                    <div class="mainbtn">
                                                        <div class="coupon-btn" style ="cursor:pointer" onclick="javascripts: showAllCodes('43574')">
                                                                <span class="smpl-btn" style="padding: 8px"><a style="color: white" href="{{ $co->Affilate_Link}}">Get Deal</a></span>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    {{-- <?php if($co->coupon_code=="getdeal"){?>
                                                    <div style="display:none;" id="successMsg43571" class="copy-code"> Code
                                                        Copied </div>
                                                        <?php}
                                                        else

                                                        {
                                                        ?>

                                                        <?php}?> --}}
                                                </div>
                                            {{-- <div class="mainbtn">
                                                <div class="uscode_btn">
                                                    <div class="coupon_action"
                                                        onclick="javascripts: showAllCodes('43571'), copyMyCodes('43571'),window.open{{$co->Affilate_Link}}"> --}}


                                                        {{-- zoiii --}}
                                                        {{-- <div class="coupon_action"
                                                        onclick="javascripts: showAllCodes('43571'), copyMyCodes('43571'){{$co->Affilate_Link}}"> --}}
                                                        {{-- end --}}
                                                        {{-- <span class="coupon_get_link btn-outer">Get Code</span>
                                                        <span id="in43571"
                                                            class="coupon_code btn-inner">{{ $co->coupon_code }}</span>
                                                    </div>
                                                    <div style="display:none;" id="successMsg43571" class="copy-code"> Code
                                                        Copied </div>
                                                </div> --}}
                                                <div class="exppirydate">
                                                    <p><strong>Expire Date:</strong>{{ $co->expiry_date }}</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                </div>
            </div>

    </div>
    </section>
    </div>


    </body>

    </html>
@endsection

