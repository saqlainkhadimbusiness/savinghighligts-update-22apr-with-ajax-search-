<!DOCTYPE html>
<html lang="en">

<head>

    <style>
        #myInput {
            box-sizing: border-box;
            background-image: url('searchicon.png');
            background-position: 14px 12px;
            background-repeat: no-repeat;
            font-size: 16px;
            /* padding: 14px 20px 12px 45px; */
            border: none;
            border-bottom: 1px solid #ddd;
        }

        #myInput:focus {
            outline: 3px solid #ddd;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f6f6f6;
            min-width: 362px;
            overflow: auto;
            border: 1px solid #ddd;
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown a:hover {
            background-color: #ddd;
        }

        .show {
            display: block;
        }

    </style>
    <!-- Bootstrap CDN  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> 15 February 2022 </title>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-169283711-1"></script>
    <!-- External CSS Link  -->
    <link rel="stylesheet" type="text/css" href="{{ url('frontend.css') }}" />
    <!-- FontAwesome CDN  -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    {{-- for searching --}}
    {{-- rfff --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script> --}}

    {{-- end --}}
    {{-- <script type="text/javascript">
    var path = "{{ route('store') }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
</script> --}}

    <!-- Google Font CDN  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="container" id="a">
        <h1 id="" class="mbltext text-center" style="margin-top:20px !important; margin-bottom:-10px; ">Saving highlights
        </h1>
        <nav class="navbar navbar-expand-lg navbar-light " id="align-id">
            <a class="navbar-brand top-class" href="#">
                <h1 id="top-text" class="lgtext">Saving highlights</h1>
            </a>
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                {{-- <div class="main">
                  <div class="input-group" id="input-fields">
                      <input type="text" id="input-search" class="form-control"
                          placeholder="Search by your favourite brand or store name" />
                      <div class="input-group-append">
                          <button style="width: 70px;"  class="btn btn-secondary" id="btn-search" type="button">
                              <i class="fa fa-search"></i>
                          </button> --}}

                <div class="main">
                    @php
                        $search = '';
                    @endphp
                    <form action="" method="GET" autocomplete="off">
                        <div class="input-group" id="input-fields">
                            <input type="search" name="search"  id="input-search myInput"
                                value="{{ $search }}" class="form-control searchInput" autocomplete="off"
                                placeholder="Search by your favourite brand or store name" />
                            <div class="input-group-append">
                                <button style="width: 70px;" class="btn btn-secondary" id="btn-search" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                        <div class="dropdown">
                            <div id="myDropdown" class="dropdown-content" style="height: 300px">
                                <a href="#tools">Tools</a>
                            </div>
                        </div>
                </div>
            </div>
        </nav>
        <div class="main searchbar">
            @php
                $search = '';
            @endphp
            <form action="" method="GET">
                <div class="input-group" id="input-fields">
                    <input type="text" class="form-control searchInput"
                        placeholder="Search by your favourite brand or store name" />
                    <div class="input-group-append">
                        <button style="width: 100px;" class="btn btn-secondary" id="btn-search" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>

                <div class="dropdown">
                    <div id="myDropdown" class="dropdown-content" style="height: 300px">
                        <a href="#tools">Tools</a>
                    </div>
                </div>
        </div>
    </div>

    <!-- navbar -->

    <div class="scrollmenu">
        <div class="container">
            <a href="/main">Home</a>
            <a href="/catgry"> Categories </a>
            <a href="/store">Store</a>
            <a href="/offer">Featured Offer</a>
        </div>
    </div>
    </header>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {


            $.ajax({
                url: "/ajax_search",
                success: function(result) {

                    text = '';
                    result[0].forEach(stores_fu);
                    function stores_fu(item, index) {
                        text +='<a href="{{url('substore')}}/'+item.id+'/'+item.name+'">'+item.name+'</a>';
                    }
                    result[1].forEach(blogs_fu);
                    function blogs_fu(item, index) {
                        text +='<a href="/product/'+item.id+'">'+item.blog_url+'</a>';
                    }
                    $("#myDropdown").html(text);


                }
            });



            $('.searchInput').on('keyup ', function() {
                input = $('.searchInput').val();
                filter = input.toUpperCase();
                a = $('#myDropdown a');
                for (i = 0; i < a.length; i++) {
                    txtValue = a[i].textContent || a[i].innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        a[i].style.display = "";
                    } else {
                        a[i].style.display = "none";
                    }
                }

            });

            $('.searchInput').on('keyup click', function() {
                $("#myDropdown").addClass("show");
            });

            $('.dropdown').mouseleave(function() {
                $("#myDropdown").removeClass("show");
            });

        });


    </script>
