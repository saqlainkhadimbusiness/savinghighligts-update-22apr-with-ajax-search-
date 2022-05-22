@extends('frontend.master')
{{-- @section('title','add product') --}}
@section("content")
<div class="sosadto"style="background-color: #f0f4f4;" >
<div class="container mb-5">
    @foreach ($set  as $cat)
    <div class="main_headingBox">
        <h1 style="margin-top: 16px">{{ $cat->Title}}</h1>

    <p style="text-align:justify" ><span style="font-family:arial,helvetica,sans-serif"><span style="color:#696969">
        {{ $cat->content}}
         </span>
        </span>
    </p>
</div>
</div>
@endforeach
@endsection
