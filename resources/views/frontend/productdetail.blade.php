@extends('frontend.master')
{{-- @section('title', 'add product') --}}
 @section('content')
<!-- Remember one thing that css of this page is healthorbeauty.css -->
<div class="main">
	<section class="bdcrums">
		<div class="container">
			<div class="breadcrumbs">
	            <ul>
				  <li><a href="/main"> Home </a></li>
                  <li>{{$blogs[0]->blog_title}}</a></li>
	            </ul>
            </div>
		</div>
	</section>
    <div class="container">
        @foreach ($blogs as $bl )
        <div class="row">
	<section class="blog_sec">
		<div class="container">
			<div class="blog_main">
				<div class="main-heading blog_heading">
				     <h1>{{$bl->blog_title}}</h1>
				</div>
				<div class="blogs_detail">
					<div class="blog_post_detail">
                        <img  class="img-fluid" src="{{ asset('images') . '/' . $bl->image }}">
						 <p><strong>{{$bl->blog_description}}</strong></p>

                           </div>
					</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </section>
</div>
</body>
</html>
@endsection
