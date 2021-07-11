    <footer>
      <div class="footer-inner">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <div class="footer-links">
                <div class="footer-newsletter">
                  <h1 style="font-size: 30px;color: #327519;font-weight: 900;">CREDENCE EVER LLPP</h1>
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
            <div class="col-sm-5 col-xs-12 coppyright">Copyright © 2020  <a href="#">CREDENCE EVER LLPP</a>  | All Rights Reserved. </div>
            <div class="col-sm-7 col-xs-12 payment-accept">
              <ul>
                <li> <a href="#">Terms & Condition</a> </li>
                <li> <a href="#">Privacy Policy</a> </li>
                <li> <a href="#">Return Policy</a> </li>
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
  <script type="text/javascript">
    $(document).ready(function(){
        $('#search').keyup(function(){
            var keyword = $('#search').val();

            if (keyword.length == 0) {
                $('#livesearch').hide();
            } else {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                });

                $.ajax({
                    method: "GET",
                    url   : "{{ url('/product-search/') }}/"+keyword,
                    success: function(response) {

                        if (response == ""){
                              $('#livesearch').html("<div style='background: #ffffff05; text-lign: center;'><img src='{{asset('web/images/not-found.jpg')}}' style='max-width: 100%'><strong>Sorry !!</strong> couldn\'t find what your are looking for...</div>");
                        }
                        else
                            $('#livesearch').html(response);

                        $('#livesearch').show();
                    }
                });
            }
        });
    });
  </script>

  <script>
    $(document).ready(function(){
      $("#this-togg").click(function(){
        $(".search-box").toggleClass("disply-blk");    
        $(".mm-toggle1").toggleClass("closeit");
        $(".closeit").click(function(){
          $("#livesearch").css("display", "none");
        });
        
      });
    });
  </script> 
  @stack('script')
</body>

</html>
