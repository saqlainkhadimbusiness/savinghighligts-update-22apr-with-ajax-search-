

@extends('frontend.master')
{{-- @section('title','add product') --}}
@section("content")

<body>

<div class="main">
	<div class="container">
		<div class="contact-page" >
		    <div class="content_txt_Box">
	            <div class="main_headingBox">
				<h1>Contact Us</h1>
	            </div>

	            <div class="contact_formBox">
                    <form autocomplete="off"  action="{{ url('/customers') }}" method="post">

                    {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <label>Full Name*</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label>Email Address*</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label>Contact No</label>
		                       <input type="text" name="number" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label>Subject*</label>
                                <input type="text" name="subject" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label>Message*</label>
		                <textarea name="Message" class="form-control"></textarea>
                            </div>
                        </div>



		                <input type="submit" name="submit" value="Submit" class="mt-4 btn btn-submit" style="background-color: #8b008b ;color:white; width:204px">
	                </form>
	            </div>
	        </div>
	    </div>
	</div>
</div>

<!-- footer -->

  </body>
</html>
@endsection
