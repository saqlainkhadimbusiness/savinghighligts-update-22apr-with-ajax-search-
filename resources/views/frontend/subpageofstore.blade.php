
@extends('frontend.master',['
'=> $stores])
@section('content')
    <!-- end of header -->

    <!-- start next part -->

    <div class="main">
        <section class="bdcrums">
            <div class="container">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="/main">Home</a></li>
                         <li><a href="/store">Store</a></li>
                        <li>{{$name}}</li>
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
                                <h1> {{$name}}</h1>
                                {{-- <h1> Avon Popular Coupons &amp; Promo Codes 2021</h1> --}}
                            </div>


                            <div class="store_tabs">
                                <ul>
                                    <li id="showall">
                                        <div>All<span>(0)</span></div>
                                    </li>
                                    <li id="code">
                                        <div class="clr_pink">Promo Codes<span>(0)</span></div>
                                    </li>
                                    <li id="freeship">
                                        <div class="clr_prpl">Free Shipping<span>(0)</span></div>
                                    </li>
                                    <li id="special">
                                        <div class="clr_blue">Special Offers<span>(0)</span></div>
                                    </li>
                                    <li id="deal">
                                        <div class="clr_gray">Deals<span>(0)</span></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="simillar-heading">
                                <h2>Expire Coupons</h2>
                            </div>
                            @foreach ($coupans as $co)
                            {{-- dd($coupans); --}}
                                <div class="storecoupons expire-coupon">
                                    <div class="storecoupons-detail">
                                        <div class="couponpst">
                                            @foreach ($image as $val )
                                            <a href="#"><img src="{{ asset('images') . '/' . $val->image }}" width="80%"
                                                    onclick="javascripts: showAllCodes('43571'), window.open('https://www.couponsluv.com/shop.html?cid=43571')">
                                            </a>
                                             @endforeach
                                        </div>





                                        <div class="couponotherinfo">
                                            <div class="title-&amp;likebox">
                                                <div class="coupon-tittle">
                                                    <span style="cursor:pointer"
                                                        onclick="javascripts: showAllCodes('43571'), window.open()">
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
                                                <div class="exppirydate">
                                                    <p>Expire Date:{{ $co->expiry_date }}</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                             @endforeach
                             {{-- zoyyyy --}}
                             @foreach ($discraption as $dc)
                            <div class="about_home">
                                <div class="simillar-heading">
                                    <h2>More About Sotre</span></h2>
                                </div>
                                <div class="about_txt">
                                <p><p>{{ $dc->description}}</p>
        </p>
                                </div>
                            </div>
                        </div>
                    </div>
                       @endforeach
                    {{-- SIDEBAR PART --}}
                    <div class="col-md-4">
                        <div class="storeright-side">
                            <div class="store-banner">
                                <a href="#">
                                    <img height="200" width="200" src="{{ asset('/images/1st.jpg') }}">
                                    {{-- <img src="sustore.jpg"> --}}
                                </a>
                            </div>
                            <div class="store-banner">
                                <a href="#">
                                    <img height="200" width="200" src="{{ asset('/images/2nd.jpg') }}">
                                    {{-- <img height="200" width="200" src="substore.jpg"> --}}
                                </a>
                            </div>
                            <div class="heading-left2">
                                <h2>Related Categories</h2>
                            </div>
                            <div class="store-list">
                                <ul>

                                    <li><a href="#">Beauty</a></li>


                                </ul>
                            </div>
                            <div class="heading-left2">
                                <h2>New Stores</h2>
                            </div>
                            <div class="store-list">
                                <ul>


                                    <li><a href="#">Tuckernuck</a></li>

                                    <li><a href="#">Watch Shop</a></li>

                                    <li><a href="#">John Greed</a></li>

                                    <li><a href="#">Champion</a></li>

                                    <li><a href="#">Voogueme</a></li>

                                    <li><a href="#">Trespass</a></li>

                                    <li><a href="#">JW Anderson</a></li>

                                    <li><a href="#">Love Bonito</a></li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @endsection


