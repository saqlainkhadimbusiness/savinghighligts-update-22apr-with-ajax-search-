         <!-- =============================================== -->
         <!-- Left side column. contains the sidebar -->
         <aside class="main-sidebar">
                <!-- sidebar -->
                <div class="sidebar">
                   <!-- sidebar menu -->
                   <ul class="sidebar-menu">
                      <li class="active">
                         <a href="{{url('/dashboard')}}"><i class="fa fa-tachometer"></i><span>Dashboard</span>
                         <span class="pull-right-container">
                         </span>
                         </a>
                      </li>

                     <li class="treeview">
                        <a href="#">
                        <i class="fa fa-image"></i><span>Blog</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="{{url('/blog')}}">Add Blog</a></li>
                        <li><a href="{{url('/viewnothing')}}">View Blog</a></li>
                        </ul>
                     </li>
                      <li class="treeview">
                        <a href="#">
                        <i class="fa fa-list"></i><span>Store</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="{{url('/showproduct')}}">Add product</a></li>
                        <li><a href="{{url('/allProductview')}}">View product</a></li>
                        </ul>
                     </li>
                      <li class="treeview">
                         <a href="#">
                         <i class="glyphicon glyphicon-folder-open"></i><span>Categories</span>
                         <span class="pull-right-container">
                         <i class="fa fa-angle-left pull-right"></i>
                         </span>
                         </a>
                         <ul class="treeview-menu">
                            <li><a href="{{url('/showcat')}}">Add Category</a></li>
                         <li><a href="{{url('/viewcategories')}}">View Categories</a></li>
                         </ul>
                      </li>
                      <li class="treeview">
                        <a href="#">
                        <i class="fa fa-gift"></i><span>Coupons</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="{{url('/showcoupns')}}">Add Coupon</a></li>
                        <li><a href="{{url('/viewcoupons')}}">View Coupons</a></li>
                        <li><a href="{{url('/sorting')}}">Coupons Sorting</a></li>
                        </ul>
                     </li>

                     {{-- zoy --}}
                     {{-- <li class="treeview">
                        <a href="#">
                        <i class="	glyphicon glyphicon-expand"></i><span>Siders</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="{{url('admin/add-coupon')}}">Add Siders</a></li>
                        <li><a href="{{url('admin/view-coupons')}}">View Siders</a></li>
                        </ul>
                     </li> --}}
                     {{-- 2ndzoyyy --}}
                     {{-- <li class="treeview">
                        <a href="#">
                        <i class="	glyphicon glyphicon-option-vertical"></i><span>Options</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="{{url('admin/add-coupon')}}">Add Siders</a></li>
                        <li><a href="{{url('admin/view-coupons')}}">View Siders</a></li>
                        </ul>
                     </li> --}}
                     {{-- 3rd zoyyy --}}
                     <li class="treeview">
                        <a href="#">
                        <i class="glyphicon glyphicon-wrench"></i><span>Developer Mode</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                           <li><a href="{{url('/header')}}">Add header</a></li>
                        <li><a href="{{url('/footer')}}">Add Footer</a></li>
                        </ul>

                     </li>

      {{-- 4 zoyyy --}}
      <li class="treeview">
        <a href="#">
        <i class="pe-7s-cart"></i><span>Users</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{url('/user')}}">Add user</a></li>
            <li><a href="{{url('/viewuser')}}">view user</a></li>
        </ul>

     </li>





                     {{-- 4th zoyyyy --}}
                     {{-- <li class="treeview">
                        <a href="#">
                        <i class="	glyphicon glyphicon-eye-open"></i><span>Visite Website</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                        </a>
                     </li> --}}

                     {{-- end zoy --}}
                     {{-- <li class="treeview">
                        <a href="{{url('admin/customers')}}">
                        <i class="fa fa-users"></i><span>Customers</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                        </a>

                     </li> --}}

                     {{-- <li class="treeview">
                        <a href="{{url('/allpages')}}">
                        <i class="fa fa-file"></i><span>Pages</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        </span>
                        </a>

                     </li> --}}
                     {{-- <ul class="treeview-menu">
                        <li><a href="{{url('/showcoupns')}}">Users</a></li>
                     <li><a href="{{url('/user')}}">Add user</a></li>
                     <li><a href="{{url('/viewuser')}}">view user</a></li>
                     </ul>
                  </li> --}}
                  <li class="treeview">
                    <a href="#">
                    <i class="fa fa-image"></i><span>Pages</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                       <li><a href="{{url('/allabout')}}">About</a></li>
                       <li><a href="{{url('/showterms')}}">Terms and conditions</a></li>
                    {{-- <li><a href="{{url('/viewnothing')}}" view</a></li> --}}
                    </ul>
                 </li>
                         {{-- 5thh zoy --}}
                         <li class="treeview">
                            <a href="#">
                            <i class="glyphicon glyphicon-log-out"></i><span>Logout</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            </span>
                            </a>
                         </li>
                         {{--  --}}

                   </ul>
                </div>
                <!-- /.sidebar -->
             </aside>
             <!-- =============================================== -->
