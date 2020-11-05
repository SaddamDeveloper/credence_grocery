@extends('web.templet.master')

  {{-- @include('web.include.seo') --}}

  @section('seo')
    <meta name="description" content="Credence">
  @endsection

  @section('content')

  @php
      $min_size = $product->minSize;
      $min_size = $min_size[0];
  @endphp
    <!-- Main Container -->
    <section class="main-container col1-layout">
      <div class="main">
        <div class="container">
          <div class="row">
            <div class="col-main">
              <div class="product-view">
                <div class="product-essential">
                  <form action="#" method="post" id="product">
                    <div class="product-img-box col-lg-5 col-sm-6 col-xs-12">
                        @if ($product->created_at == \Carbon\Carbon::today())
                            <div class="new-label new-top-left"> New </div>
                        @endif
                      <div class="product-image">
                        <div class="product-full"> <img id="product-zoom" src="{{ asset('images/products/'.$product->main_image) }}" data-zoom-image="{{ asset('images/products/'.$product->main_image) }}" alt="product-image"/> </div>
                        <div class="more-views">
                          <div class="slider-items-products">
                            <div id="gallery_01" class="product-flexslider hidden-buttons product-img-thumb">
                              <div class="slider-items slider-width-col4 block-content">
                                @if (isset($product->images))
                                    @foreach ($product->images as $images)
                                        <div class="more-views-items"> <a href="#" data-image="{{ asset('images/products/thumb/'.$images->image) }}" data-zoom-image="{{ asset('images/products/thumb/'.$images->image) }}"> <img id="product-zoom"  src="{{ asset('images/products/thumb/'.$images->image) }}" alt="product-image"/> </a></div>
                                    @endforeach
                                @endif
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- end: more-images --> 
                    </div>
                    <div class="product-shop col-lg-7 col-sm-6 col-xs-12">
                      <div class="product-name">
                        <h1>{{ $product->name }}</h1>
                      </div>
                      <div class="price-block">
                        <div class="price-box">
                          <p class="special-price"> <span class="price-label">Special Price</span> <span id="product-price-48" class="price"> ₹{{ number_format($product->mrp, 2) }} </span> </p>
                          <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> ₹{{ number_format($product->min_price, 2) }} </span> </p>
                        </div>
                      </div>
                      <div class="info-orther">
                        <p>Availability: 
                            {{-- {{ dd($product->size) }} --}}
                            @if ($min_size->stock > 0)
                                <span class="in-stock">In stock</span>
                            @else
                                <span>Out of Stock</span>
                            @endif
                        </p>
                      </div>
                      <div class="short-description">
                        <h2>Quick Overview</h2>
                        <p>{!! Str::words($product->description, 30, '...')!!}</p>
                      </div>
                      <div class="form-option">
                        <p class="form-option-title">Available Options:</p>                    
                        <div class="attributes">
                          <div class="attribute-label">Weight:</div>
                          <div class="attribute-list">
                            <ul class="list-size" id="list-size">
                                @if (isset($product->sizes))
                                    @foreach ($product->sizes as $sizes)
                                      @if ($min_size->id == $sizes->id)
                                        <li class="col-sel size-sel selected">
                                          <span>{{ $sizes->size }} KG</span>
                                          <input type="radio" name="product_size_id" value="{{ $sizes->id }}" hidden="" checked>
                                        </li>
                                      @else
                                        <li class="col-sel size-sel">
                                          <span>{{ $sizes->size }} KG</span>
                                          <input type="radio" name="product_size_id" value="{{ $sizes->id }}" hidden="">
                                        </li>
                                      @endif
                                       
                                    @endforeach
                                @endif
                              {{-- <li class="col-sel size-sel">
                                <span>S</span>
                                <input type="radio" name="product_size_id" value="13" checked="" hidden="">
                              </li>
                              <li class="col-sel size-sel">
                                <span>M</span>
                                <input type="radio" name="product_size_id" value="13" checked="" hidden="">
                              </li>
                              <li class="col-sel size-sel selected">
                                <span>L</span>
                                <input type="radio" name="product_size_id" value="13" checked="" hidden="">
                              </li>
                              <li class="col-sel size-sel">
                                <span>XL</span>
                                <input type="radio" name="product_size_id" value="13" checked="" hidden="">
                              </li>
                              <li class="col-sel size-sel">
                                <span>XXL</span>
                                <input type="radio" name="product_size_id" value="14" hidden="">
                              </li> --}}
                            </ul>
                          </div>
                        </div>
                        <div class="add-to-box">
                          <div class="add-to-cart" >
                            <div class="pull-left">
                              <div class="custom pull-left">
                                <label>Qty :</label>
                                <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="fa fa-minus">&nbsp;</i></button>
                                <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="fa fa-plus">&nbsp;</i></button>
                              </div>
                            </div>
                            <button onClick="productAddToCartForm.submit(this)" class="button btn-cart" title="Add to Cart" type="button">Add to Cart</button>
                          </div>
                          <div class="email-addto-box">
                            <ul class="add-to-links">
                            <li> <a class="link-wishlist" href="{{route('web.cart.cart')}}"><span>Add to Wishlist</span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="product-collateral col-lg-12 col-sm-12 col-xs-12">
              <div class="block-title">
                <h2>Product Detail</h2>
              </div>
              <div class="add_info">
                <div id="productTabContent" class="tab-content">
                  <div class="tab-pane fade in active" id="product_tabs_description">
                    <div class="std">
                      <p>{!! $product->description !!}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Main Container End --> 
    
    <!-- Related Products Slider -->  
    <div class="container">
      <div class="upsell-section">
        <div class="slider-items-products">
          <div class="upsell-block">
            <div class="jtv-block-inner">
              <div class="block-title">
                <h2>Lastest Arrival</h2>
              </div>
            </div>
            <div id="" class="upsell-products-slider product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col4 products-grid block-content">
                @foreach ($latest_product as $lp)
                    <div class="item" onclick="window.location='single_product.html';">
                    <div class="item-inner">
                        <div class="item-img">
                        <div class="item-img-info"> <a href="{{ route('web.product.single-product', ['slug' => $lp->slug, 'id' => $lp->id]) }}" class="product-image" title="{{ $lp->name }}"> <img alt="{{ $lp->name }}" src="{{ asset('images/products/thumb/'.$lp->main_image) }}" height="265" width="195"> </a>
                        </div>
                        </div>
                        <div class="item-info">
                        <div class="info-inner">
                            <div class="item-title"> <a title="{{ $lp->name }}" href="{{ route('web.product.single-product', ['slug' => $lp->slug, 'id' => $lp->id]) }}"> {{ $lp->name }} </a> </div>
                            <div class="item-content">
                            <div class="item-price">
                                <div class="price-box"> <span class="regular-price"><span><s>₹{{ number_format($lp->mrp, 2) }}</s></span> <span class="price">₹{{ number_format($lp->min_price, 2) }}</span> </span> </div>
                            </div>
                            <div class="action">
                                <a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a>
                                <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                @endforeach
                {{-- <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="#"> <img alt="Product Title Here" src="web/images/products/img03.jpg"> </a>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product Title Here" href="#"> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$99.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a>
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="#"> <img alt="Product Title Here" src="web/images/products/img02.jpg"> </a>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product Title Here" href="#"> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box">
                              <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $156.00 </span> </p>
                              <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p>
                            </div>
                          </div>
                          <div class="action">
                            <a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a>
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="#"> <img alt="Product Title Here" src="web/images/products/img04.jpg"> </a>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product Title Here" href="#"> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a>
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="#"> <img alt="Product Title Here" src="web/images/products/img01.jpg"> </a>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product Title Here" href="#"> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$99.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a>
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="#"> <img alt="Product Title Here" src="web/images/products/img06.jpg"> </a>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product Title Here" href="#"> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box">
                              <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $156.00 </span> </p>
                              <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p>
                            </div>
                          </div>
                          <div class="action">
                            <a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a>
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="#"> <img alt="Product Title Here" src="web/images/products/img07.jpg"> </a>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product Title Here" href="#"> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box">
                              <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $156.00 </span> </p>
                              <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p>
                            </div>
                          </div>
                          <div class="action">
                            <a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a>
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="#"> <img alt="Product Title Here" src="web/images/products/img08.jpg"> </a>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product Title Here" href="#"> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box">
                              <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $156.00 </span> </p>
                              <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p>
                            </div>
                          </div>
                          <div class="action">
                            <a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a>
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="#"> <img alt="Product Title Here" src="web/images/products/img09.jpg"> </a>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product Title Here" href="#"> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box">
                              <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $156.00 </span> </p>
                              <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p>
                            </div>
                          </div>
                          <div class="action">
                            <a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a>
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="#"> <img alt="Product Title Here" src="web/images/products/img10.jpg"> </a>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Product Title Here" href="#"> Product Title Here </a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box">
                              <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $156.00 </span> </p>
                              <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $167.00 </span> </p>
                            </div>
                          </div>
                          <div class="action">
                            <a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a>
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Related Products Slider End -->     
  
  @endsection

  @section('script') 
    <!--cloud-zoom js --> 
    <script type="text/javascript" src="{{asset('web/js/cloud-zoom.js')}}"></script>

    <script>
      $(document).on('click','#list-color li',function(){
          $(this).addClass('selected').siblings().removeClass('selected')
      });

      $('.color-sel').click(function() {
        $('.color-sel').removeClass('selected');
        $(this).addClass('selected').find('input').prop('checked', true)    
      });
    </script>

    <script>
      $(document).on('click','#list-size li',function(){
          $(this).addClass('selected').siblings().removeClass('selected')
      });

      $('.size-sel').click(function() {
        $('.size-sel').removeClass('selected');
        $(this).addClass('selected').find('input').prop('checked', true);

        var product_size_id = $("input[name='product_size_id']:checked").val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        });

        $.ajax({
            method: "POST",
            url   : "{{ url('product-price-check') }}",
            data  : {
                'stock_id': product_size_id
            },
            success: function(response) {

                var response = response.split(',');
                var price = response[0];
                var discount = response[1];

                if (price != "") {

                    if (discount != 0) {

                        $('.price-box').html('<p class=\"old-price\"><span class=\"price-label\">Special Price</span><span id=\"product-price-48\" class=\"price\">₹'+parseFloat(price).toFixed(2)+'</span></p>&nbsp;<p class=\"special-price\"><span class=\"price-label\">Regular Price:</span><span class=\"price\"> ₹'+parseFloat(discount).toFixed(2)+' </span> </p>');
                    } else {

                        $('.price-box').html('<p class=\"special-price\"> <span class=\"price-label\">Special Price</span> <span id=\"product-price-48\" class=\"price\"> ₹'+parseFloat(price).toFixed(2)+' </span> </p>');
                    }
                }
            }
        });

      });
    </script>
  @endsection
