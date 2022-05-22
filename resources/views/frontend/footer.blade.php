 <!-- now start the footer -->
 <footer>
    <div class="jumbotron jumbotron-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
          <div class="headings_titles">
              <h3 class="h3">Subscribe <span class="h-light">to our weekly newsletter!</span></h3>
       <p>Get vouchers from your favourite retailers sent to your inbox at the beginning of every week. You can cancel anytime.</p>
      </div>
      </div>
       <!-- rfff -->
       <div class="col-md-6">
        <nav class="navbar navbar-expand-lg navbar-light ">
              <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <div class="mainnow">
                    <div class="input-group" id="input-fields">
                        <input type="text" class="form-control"
                            placeholder="Enter Your Email" />
                        <div class="input-group-append" >
                            <button style="width: 100px;"  class="btn btn-secondary" id="btn-searchnow" type="button" >
                               Subscribe
                            </button>
                        </div>
                    </div>
                </div>
            </div>

          </nav>
          </div>
          <div class="main searchbar">
            <div class="input-group" id="input-fields">
                <input type="text" class="form-control"
                    placeholder="Enter your Email" />
                <div class="input-group-append">
                    <button style="width: 100px;" class="btn btn-secondary" id="btn-searchnow" type="button">
                       Search
                    </button>
                </div>
            </div>
        </div>
      </div>
      </div>
    </div>



    <!-- remaining part of footer  -->
    <section class="nb-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="footer-single">
              <div class="dummy-logo">





                <h2 id="rate">Saving highlights </h2>
                <!-- <img src="http://www.refundcode.com/assets/uploads/required/739636690_f3.png" alt="Saving Lite"
                  class="web_logo"> -->
                <p>Disclaimer: "We may earn a commission when you use one of our coupons/links to make a purchase."</p>
              </div>
            </div>
          </div>

          <!-- lets check Navigation -->
          <div class="col-md-3 col-sm-6">
            <div class="footer-single useful-links">
              <div class="footer-title">
                <h2>Navigation</h2>
              </div>
              <ul class="list-unstyled">
                <li><a href="/main">Home <i class="fa fa-angle-right pull-right"></i></a></li>
                <li><a href="about">About Us <i
                  class="fa fa-angle-right pull-right"></i></a></li>
                <li><a href="terms">Terms & Conditions <i
                  class="fa fa-angle-right pull-right"></i></a></li>
                <li><a href="privicy">Privacy Policy <i
                  class="fa fa-angle-right pull-right"></i></a></li>
                <li><a href="contact">Contact Us <i
                  class="fa fa-angle-right pull-right"></i></a></li>
              </ul>
            </div>
          </div>
          <!--  just check Popular Stores -->
          <div class="col-md-3 col-sm-6">
            <div class="footer-single useful-links">
              <div class="footer-title">
                <h2>Popular Stores</h2>
              </div>
              @php
                  use App\Models\store;
                  $stores=store::get();
              @endphp
              <ul class="list-unstyled">
                  @foreach ($stores as $store )
                    @if ($store->popular_store == 1)
                  <li><a href="{{url('substore')}}/{{$store->id}}/{{$store->name}}">{{$store->name}}<i class="fa fa-angle-right pull-right"></i></a></li>
                  @endif
                  @endforeach

              </ul>
            </div>
          </div>
          <!-- contect details-->
          <div class="col-md-3 col-sm-6">
            <div class="footer-single useful-links">
              <div class="footer-title">
                <h2>Contacts </h2>
              </div>
              <ul class="list-unstyled">
                          <li><a href="javascript" class="flexed"><i class="button fa fa-envelope-o"></i>
                            Savinghighlights@.com</a>
              </li>


              <div class="footer-title">
                <h2>Lets Socialize</h2>
              </div>
              <div class="social-buttons">
                              <a href="#"
                  class="social-buttons__button social-button social-button--facebook">
                <i class="fa fa-facebook">
                </i>
                </a>
                                            <a href="#"
                  class="social-buttons__button social-button social-button--twitter">
                <i class="fa fa-twitter">
                </i>
                </a>
                                            <a href="#"
                  class="social-buttons__button social-button social-button--instagram">
                <i class="fa fa-instagram">
                </i>
                </a>
                                            <a href="#"
                  class="social-buttons__button social-button social-button--google-plus">
                <i class="fa fa-google-plus">
                </i>
                </a>
                                            <a href="#"
                  class="social-buttons__button social-button social-button--pinterest">
                <i class="fa fa-pinterest">
                </i>
                </a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
      <!-- lets check again copyright area -->
    <div class="inner">
      <div class="copyright-area">
        Copyright 2022 &copy; All Rights Reserved.    </div>
    </div>
  </footer>
  <!-- Footer End -->

 <script src="https://use.fontawesome.com/43872ee6af.js"></script>
  <script src="http://www.refundcode.com/assets/theme/js/all.min.js"></script>



