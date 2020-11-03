    <footer>
      <div class="footer-inner">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 col-xs-12 col-md-3">
              <div class="footer-links">
                <h4>Useful links</h4>
                <ul class="links">
                  <li><a href="#" title="Product Recall">Product Recall</a></li>
                  <li><a href="#" title="Gift Vouchers">Gift Vouchers</a></li>
                  <li><a href="#" title="Returns &amp; Exchange">Returns &amp; Exchange</a></li>
                  <li><a href="#" title="Shipping Options">Shipping Options</a></li>
                  <li><a href="#" title="Help &amp; FAQs">Help &amp; FAQs</a></li>
                  <li><a href="#" title="Order history">Order history</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-4 col-xs-12 col-md-3">
              <div class="footer-links">
                <h4>Service</h4>
                <ul class="links">
                  <li><a href="account_page.html">Account</a></li>
                  <li><a href="wishlist.html">Wishlist</a></li>
                  <li><a href="shopping_cart.html">Shopping Cart</a></li>
                  <li><a href="#">Return Policy</a></li>
                  <li><a href="#">Special</a></li>
                  <li><a href="#">Lookbook</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-4 col-xs-12 col-md-2">
              <div class="footer-links">
                <h4>Information</h4>
                <ul class="links">
                  <li><a href="sitemap.html">Sites Map </a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Trends</a></li>
                  <li><a href="about_us.html">About Us</a></li>
                  <li><a href="contact_us.html">Contact Us</a></li>
                  <li><a href="#">My Orders</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
              <div class="footer-links">
                <div class="footer-newsletter">
                  <h4>Subscribe to our news</h4>
                  <form id="newsletter-validate-detail" method="post" action="#">
                    <div class="newsletter-inner">
                      <p>Subscribe to be the first to know about Sales, Events, and Exclusive Offers!</p>
                      <input class="newsletter-email" name='Email' placeholder='Enter Your Email'/>
                      <button class="button subscribe" type="submit" title="Subscribe">Subscribe</button>
                    </div>
                  </form>
                </div>
                <div class="social">
                  <h4>Follow Us</h4>
                  <ul class="inline-mode">
                    <li class="social-network fb"><a title="Connect us on Facebook" target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                    <li class="social-network googleplus"><a title="Connect us on Google+" target="_blank" href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a></li>
                    <li class="social-network tw"><a title="Connect us on Twitter" target="_blank" href="https://twitter.com/"><i class="icon-social-twitter icons"></i></a></li>
                    <li class="social-network linkedin"><a title="Connect us on Linkedin" target="_blank" href="https://www.pinterest.com/"><i class="fa fa-linkedin"></i></a></li>
                    <li class="social-network rss"><a title="Connect us on rss" target="_blank" href="https://instagram.com/"><i class="fa fa-rss"></i></a></li>
                    <li class="social-network instagram"><a title="Connect us on Instagram" target="_blank" href="https://instagram.com/"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-sm-5 col-xs-12 coppyright">Copyright © 2017 <a href="#"> Bigstart </a>. All Rights Reserved. </div>
            <div class="col-sm-7 col-xs-12 payment-accept">
              <ul>
                <li> <a href="#"><img src="{{ asset('web/images/payment-1.png') }}" alt="Payment Card"></a> </li>
                <li> <a href="#"><img src="{{ asset('web/images/payment-2.png') }}" alt="Payment Card"></a> </li>
                <li> <a href="#"><img src="{{ asset('web/images/payment-3.png') }}" alt="Payment Card"></a> </li>
                <li> <a href="#"><img src="{{ asset('web/images/payment-4.png') }}" alt="Payment Card"></a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <!-- End Footer --> 

  <!-- jquery js --> 
  <script type="text/javascript" src="{{ asset('web/js/jquery.min.js') }}"></script> 

  <!-- bootstrap js --> 
  <script type="text/javascript" src="{{ asset('web/js/bootstrap.min.js') }}"></script> 

  <!-- owl.carousel.min js --> 
  <script type="text/javascript" src="{{ asset('web/js/owl.carousel.min.js') }}"></script> 

  <!-- jtv-jtv-mobile-menu js --> 
  <script type="text/javascript" src="{{ asset('web/js/jtv-mobile-menu.js') }}"></script> 

  <!-- countdown js --> 
  <script type="text/javascript" src="{{ asset('web/js/countdown.js') }}"></script> 

  <!-- main js --> 
  <script type="text/javascript" src="{{ asset('web/js/main.js') }}"></script> 

  <!-- rev-slider js --> 
  <script type="text/javascript" src="{{ asset('web/js/rev-slider.js') }}"></script> 
  <script type='text/javascript'>
  jQuery(document).ready(function() {
  jQuery('#jtv-rev_slider').show().revolution({
  dottedOverlay: 'none',
  delay: 5000,
  startwidth: 1140,
  startheight: 400,
  hideThumbs: 200,
  thumbWidth: 200,
  thumbHeight: 50,
  thumbAmount: 2,
  navigationType: 'thumb',
  navigationArrows: 'solo',
  navigationStyle: 'round',
  touchenabled: 'on',
  onHoverStop: 'on',
  swipe_velocity: 0.7,
  swipe_min_touches: 1,
  swipe_max_touches: 1,
  drag_block_vertical: false,
  spinner: 'spinner0',
  keyboardNavigation: 'off',
  navigationHAlign: 'center',
  navigationVAlign: 'bottom',
  navigationHOffset: 0,
  navigationVOffset: 20,
  soloArrowLeftHalign: 'left',
  soloArrowLeftValign: 'center',
  soloArrowLeftHOffset: 20,
  soloArrowLeftVOffset: 0,
  soloArrowRightHalign: 'right',
  soloArrowRightValign: 'center',
  soloArrowRightHOffset: 20,
  soloArrowRightVOffset: 0,
  shadow: 0,
  fullWidth: 'on',
  fullScreen: 'off',
  stopLoop: 'off',
  stopAfterLoops: -1,
  stopAtSlide: -1,
  shuffle: 'off',
  autoHeight: 'off',
  forceFullWidth: 'on',
  fullScreenAlignForce: 'off',
  minFullScreenHeight: 0,
  hideNavDelayOnMobile: 1500,
  hideThumbsOnMobile: 'off',
  hideBulletsOnMobile: 'off',
  hideArrowsOnMobile: 'off',
  hideThumbsUnderResolution: 0,
  hideSliderAtLimit: 0,
  hideCaptionAtLimit: 0,
  hideAllCaptionAtLilmit: 0,
  startWithSlide: 0,
  fullScreenOffsetContainer: ''
  });
  });
  </script> 
  <!-- Hot Deals Timer 1--> 
  <script type="text/javascript">
  var dthen1 = new Date("12/25/17 11:59:00 PM");
  start = "08/04/15 03:02:11 AM";
  start_date = Date.parse(start);
  var dnow1 = new Date(start_date);
  if (CountStepper > 0)
  ddiff = new Date((dnow1) - (dthen1));
  else
  ddiff = new Date((dthen1) - (dnow1));
  gsecs1 = Math.floor(ddiff.valueOf() / 1000);

  var iid1 = "countbox_1";
  CountBack_slider(gsecs1, "countbox_1", 1);
  </script> 
  @stack('script')
</body>

</html>
