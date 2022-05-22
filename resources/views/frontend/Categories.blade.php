@extends('frontend.master')
{{-- @section('title', 'add product') --}}
@section('content')
    <!-- NEXT PART -->

    <div class="main">



        <!-- heading -->

        <div class="Top_Categories containe">
            <div class="row">
                <div class="simillar-heading">


                    <div class="container p0">

                        <div class="breadcrumbs">

                            <ul>
                                <li><a href="/main">Home</a></li>
                                <li> Categories</a></li>

                                <!-- <li>Store Name</li> -->

                            </ul>
                        </div>

                    </div>


                    <h1>Browse Top Categories</h1>
                </div>
                @foreach ($categories as $cat)
                    <div class="catpnl">
                        <div class="storeBox_title">
                            <h3><a href="#{{ $cat->id }}">{{ $cat->name }}</a></h3>
                        </div>
                        <ul>
                            @foreach ($cat->categories as $subcat)
                                <li><a href="/subcatgry/{{ $subcat->id }}/{{$subcat->name}}" title="Addison Lee">{{ $subcat->name }}</a></li>
                            @endforeach

                        </ul>
                    </div>
                @endforeach
                {{-- end zoy rfff --}}




            </div>

        </div>

    </div>

    </div>
    </div>
@endsection
