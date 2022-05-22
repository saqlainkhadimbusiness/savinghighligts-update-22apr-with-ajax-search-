{{-- @extends('frontend.master') --}}

@extends('frontend.master',['stores'=> $stores])

@section("content")
<div class="mainright">

    {{-- <section class="bdcrums12">

        <div class="container">

            <div class="breadcrumbs12">

                <ul>

                    <li><a href="#">Home</a></li>

                    <li>Store</a></li>



                </ul>

            </div>

        </div>

    </section> --}}
    <div class="container p0">

        <div class="breadcrumbs">

            <ul>

              <li><a href="/main">Home</a></li>
              <li><a href="#">Store</a></li>

              <!-- <li>Store Name</li> -->

            </ul>

        </div>

    </div>

    <div class="container">


        <section class="store-list">

            <div class="container">

                <div class="store_listingBox">

                    <div class="simillar-heading">

                        <h1>Browse Top Stores</h1>

                    </div>

                    <div class="store_listing-box">

                        <ul>

                            <li><a href="#a">A</a></li>

                            <li><a href="#b">B</a></li>

                            <li><a href="#c">C</a></li>

                            <li><a href="#d">D</a></li>

                            <li><a href="#e">E</a></li>

                            <li><a href="#f">F</a></li>

                            <li><a href="#g">G</a></li>

                            <li><a href="#h">H</a></li>

                            <li><a href="#i">I</a></li>

                            <li><a href="#j">J</a></li>

                            <li><a href="#k">K</a></li>

                            <li><a href="#l">L</a></li>

                            <li><a href="#m">M</a></li>

                            <li><a href="#n">N</a></li>

                            <li><a href="#o">O</a></li>

                            <li><a href="#p">P</a></li>

                            <li><a href="#q">Q</a></li>

                            <li><a href="#r">R</a></li>

                            <li><a href="#s">S</a></li>

                            <li><a href="#t">T</a></li>

                            <li><a href="#u">U</a></li>

                            <li><a href="#v">V</a></li>

                            <li><a href="#w">W</a></li>

                            <li><a href="#x">X</a></li>

                            <li><a href="#y">Y</a></li>

                            <li><a href="#z">Z</a></li>

                            <li><a href="#0-9">0-9</a></li>

                        </ul>
                    </div>



                    @foreach($stores as $store)
                    <div class="catpnl">
                        <div class="storeBox_title">
                            <h3><a href="#{{ $store->id }}">{{ $store->name }}</a></h3>
                        </div>
                        <ul>
                            @foreach ($store->stores as $substore)
                            <li><a href="{{url('substore')}}/{{$substore->id}}/{{$substore->name}}">{{$substore->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach


                </div>

            </div>

        </section>

    </div>
</div>
<script>
    $(document).ready(function(){
        $('#input-search').on('keyup',function(){
            var query=$(this).val();
            $.ajax({
                url:"store",
                type:"get",
                data:{'store':query},
                success:function(data){
                    $('.catpnl').html(data);
                }
            });
            // end of ajax
        });
    });
</script>

@endsection


