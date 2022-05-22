@extends('admin.layouts.master')
@section('title','Add Category')
@section('content')
<style>

.parent-ul, .taxonomies-child-ul{list-style-type:none}

.parent-ul{padding-left:15px}
.taxonomies-child-ul {padding-left:20px}

#sortable {
	list-style:none;
	padding:0px
}

#sortable li{

	margin-top:5px;
	padding:5px 5px 5px 5px;
	cursor: all-scroll;
}
</style>

        {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> --}}
<

    </head>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <div class="header-icon">
          <i class="fa fa-product-hunt"></i>
       </div>
       <div class="header-title">
          <h1>Add Category</h1>
          <small>Add Category</small>
       </div>
    </section>
    @if(Session::has('flash_message_error'))
   <div class="alert alert-sm alert-danger alert-block" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      <strong>{!! session('flash_message_error') !!}</strong>
   </div>
   @endif

   @if(Session::has('flash_message_success'))
   <div class="alert alert-sm alert-success alert-block" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      <strong>{!! session('flash_message_success') !!}</strong>
   </div>
   @endif
    <!-- Main content -->
    <section class="content">
       <div class="row">
          <!-- Form controls -->
          <div class="box-body">
            <ul id="sortable">
                @foreach ($products as $product)
                    <li class="ui-state-default grabbable" data-id="{{ $product->id }}"><span
                            class="ui-icon ui-icon-arrowthick-2-n-s"></span>{{ $product->coupon_title }}
                        <span class="SortingCoupType pull-right">{{ $product->Cupon_type}}----
                             <a style=" color:#017bc4" target="_blank"
                                href="http://www.refundcode.com/control_panel/coupons/update/24887">
                                Edit</a></span>
                    </li>
                @endforeach
            </ul>

        </div>



    </div>





</div>
</div>
</center>



</section>
       </div>
    </section>
    <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->



 <script src="http://www.refundcode.com/assets/control_panel/js/jquery.min.js"></script>
 <script src="http://www.refundcode.com/assets/control_panel/js/jquery-ui.min.js"></script>
 <script>
     $.widget.bridge('uibutton', $.ui.button);
 </script>
 <script src="http://www.refundcode.com/assets/control_panel/js/bootstrap.min.js"></script>
 <script src="http://www.refundcode.com/assets/control_panel/js/adminlte.min.js"></script>
 <script src="http://www.refundcode.com/assets/control_panel/js/dashboard.js"></script>
 <script src="http://www.refundcode.com/assets/control_panel/js/demo.js"></script>
 <script src="http://www.refundcode.com/assets/control_panel/js/jquery.dataTables.min.js"></script>
 <script src="http://www.refundcode.com/assets/control_panel/js/dataTables.bootstrap.min.js"></script>
 <script src="http://www.refundcode.com/assets/control_panel/js/bootstrap-datepicker.min.js"></script>
 <script src="http://www.refundcode.com/assets/control_panel/js/jquery-menu.js"></script>
 <script src="http://www.refundcode.com/assets/control_panel/js/iconset-fontawesome-4.2.0.min.js"></script>
 <script src="http://www.refundcode.com/assets/control_panel/js/icon-picker.js"></script>
 <script src="http://www.refundcode.com/assets/control_panel/js/file_upload.js"></script>

 <script src="http://www.refundcode.com/assets/control_panel/js/quill.core.js"></script>
 <script src="http://www.refundcode.com/assets/control_panel/js/quill.min.js"></script>

 <script src="http://www.refundcode.com/assets/control_panel/js/select2.min.js"></script>
{{-- <script>--}}
{{--     $("ui-state-default").click(function() {--}}

{{--         var inputs = $(".ui-state-default");--}}
{{--         for (var i = 0; i < inputs.length; i++) {--}}
{{--             alert($(inputs[i]).attr('data-id'));--}}
{{--         }--}}
{{--     });--}}
{{-- </script>--}}

{{--/*Sorting*/--}}
<script>
    $(document).ready(function(){
        $( "#sortable" ).sortable({
            update: function( event, ui ) {
                var ids = $('.grabbable').map(function() {
                    return $(this).attr('data-id');
                }).get();
                console.log(ids);
                $.ajax({
                    url: "/admin/coupons/sorting",
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "ids": ids,
                    },
                    error: function(){
                        console.log("AJAX Request Error");
                    }
                });

            }

        });

    });

</script>

@endsection
