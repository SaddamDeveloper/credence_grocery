@extends('web.templet.master')

  @section('seo')
    <meta name="description" content="Credence">
  @endsection

  @section('content')
    <!-- JTV Home Slider -->
    <div class="jtv-slideshow">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div id='jtv-rev_slider_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
              <div id='jtv-rev_slider' class='rev_slider fullwidthabanner'>
                <ul>
                  <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='web/images/slider/slide-img1.jpg'><img src="web/images/slider/slide-img1.jpg" alt="slide-img" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' />
                    <div class="info">
                      <div class='tp-caption jtv-sub-title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'><span>Fashion 2017</span> </div>
                      <div class='tp-caption jtv-large-title sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'><span>Look Book</span> </div>
                      <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Lorem ipsum dolor sit amet, consectetur adipiscing.</div>
                      <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="jtv-shop-now-btn">Shop Now</a> </div>
                    </div>
                  </li>
                  <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='web/images/slider/slide-img2.jpg'><img src="web/images/slider/slide-img2.jpg" alt="slide-img" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' />
                    <div class="info">
                      <div class='tp-caption jtv-sub-title sft slide2  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;padding-right:0px'><span>Designer Clothing</span> </div>
                      <div class='tp-caption jtv-large-title sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'>Trendy colletions</div>
                      <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Best offer of the month top brands.</div>
                      <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="jtv-shop-now-btn">View colletion</a> </div>
                    </div>
                  </li>
                  
                  <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='web/images/slider/slide-img3.jpg'><img src="web/images/slider/slide-img3.jpg" alt="slide-img" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' />
                    <div class="info">
                      <div class='tp-caption jtv-sub-title sft slide2  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;padding-right:0px'><span>Save up to 45% off</span> </div>
                      <div class='tp-caption jtv-large-title sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'>new season</div>
                      <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Most Popular Ecommerce HTML Template.</div>
                      <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="jtv-shop-now-btn">Order now</a> </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- end JTV Home Slider --> 

          
        </div>
      </div>
    </div>  

    <!-- Apprisal Slider -->
    <section>
      <div class="container">
        <div class="upsell-section">
          <div class="slider-items-products">
            <div class="upsell-block">
              <div class="jtv-block-inner">
                <div class="block-title">
                  <h2>Grocery</h2>
                </div>
              </div>
              <div class="category-products">
                <ul class="products-grid row">
                    @if (isset($products) && !empty($products))
                        @foreach ($products as $product)
                            @php
                                if(isset($product) && !empty($product)){
                                    $min_size = $product->minSize;
                                    $min_size = $min_size[0];
                                }
                            @endphp
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                <div class="item">
                                    <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info"> <a class="product-image" title="{{ $product->name }}" href="{{ route('web.product.single-product', ['slug' => $product->slug, 'id' => $product->id]) }}"> <img alt="{{ $product->name }}" src="{{ asset('images/products/thumb/'.$product->main_image) }}" height="263" width="263"> </a>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                        <div class="item-title"> <a title="{{ $product->name }}" href="{{ route('web.product.single-product', ['slug' => $product->slug, 'id' => $product->id]) }}"> {{ $product->name }} </a> </div>
                                        <div class="item-content">
                                            <div class="item-price">
                                            <div class="price-box"> <span class="regular-price"><span><s>₹{{ number_format($product->mrp, 2) }}</s></span> <span class="price">₹{{ number_format($product->min_price, 2) }}</span> </span> </div>
                                            </div>
                                            <div class="action">
                                                @if(isset($min_size->stock) && ($min_size->stock > 0))
                                                    <a class="link-wishlist" href="{{ route('web.add_wish_list', ['product_id' => encrypt($product->id), 'size_id' => $min_size->id]) }}"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a>
                                                    <input type="hidden" value="{{ $product->id }}" name="product_id">
                                                    <a href="{{ route('web.product.single-product', ['slug' => $product->slug, 'id' => $product->id]) }}" class="button btn-cart" title="View Detail">View Detail</a>
                                                @else
                                                    <button class="button btn-cart" title="Out of Stock" type="button" disabled>Out of Stock</button>
                                                @endif
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    @endif
                  <li class="item col-12">
                    <button type="submit" title="Submit" class="button button-clear"><span>View all</span></button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Cosmatic & Perfume Slider -->
    <section>
      <div class="container">
        <div class="upsell-section">
          <div class="slider-items-products">
            <div class="upsell-block">
              <div class="jtv-block-inner">
                <div class="block-title">
                  <h2>Popular Product</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="upsell-products-slider1 product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col4 products-grid block-content">
                        @if (isset($popular_products) && !empty($popular_products))
                            @foreach ($popular_products as $pp)
                                <div class="item" onclick="window.location='single_product.html';">
                                    <div class="item-inner">
                                        <div class="item-img">
                                        <div class="item-img-info"> <a href="{{ route('web.product.single-product', ['slug' => $pp->slug, 'id' => $pp->id]) }}" class="product-image" title="{{ $pp->name }}" href="{{ route('web.product.single-product', ['slug' => $pp->slug, 'id' => $pp->id]) }}"> <img alt="{{ $pp->name }}" src="{{ asset('images/products/'.$pp->main_image) }}" height="265" width="265"> </a>
                                        </div>
                                        </div>
                                        <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title="{{ $pp->name }}" href="{{ route('web.product.single-product', ['slug' => $pp->slug, 'id' => $pp->id]) }}"> {{ $pp->name }} </a> </div>
                                            <div class="item-content">
                                            <div class="item-price">
                                                <div class="price-box">
                                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> ₹{{ number_format($pp->min_price, 2) }} </span> </p>
                                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> ₹{{ number_format($pp->mrp, 2) }} </span> </p>
                                                </div>
                                            </div>
                                            <div class="action">
                                                <a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a>
                                                <a href="{{ route('web.product.single-product', ['slug' => $pp->slug, 'id' => $pp->id]) }}" class="button btn-cart" title="View Detail" data-original-title="View Detail"><span>View Detail</span> </a>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- New Arrival Slider -->
    <section>
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
                    @if (isset($latest_product) && !empty($latest_product))
                        @foreach ($latest_product as $latest)
                        @php
                            if(isset($latest) && !empty($latest)){
                                $min_size = $latest->minSize;
                                $min_size = $min_size[0];
                            }
                        @endphp
                            <div class="item" onclick="window.location='single_product.html';">
                                <div class="item-inner">
                                    <div class="item-img">
                                    <div class="item-img-info"> <a href="{{ route('web.product.single-product', ['slug' => $latest->slug, 'id' => $latest->id]) }}" class="product-image" title="{{ $latest->name }}" href="{{ route('web.product.single-product', ['slug' => $latest->slug, 'id' => $latest->id]) }}"> <img alt="{{ $latest->name }}" src="{{ asset('images/products/thumb/'.$latest->main_image) }}" height="265" width="265"> </a>
                                    </div>
                                    </div>
                                    <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"> <a title="{{ $latest->name }}" href="{{ route('web.product.single-product', ['slug' => $latest->slug, 'id' => $latest->id]) }}"> {{ $latest->name }} </a> </div>
                                        <div class="item-content">
                                        <div class="item-price">
                                            <div class="price-box"> <span class="regular-price"><span><s>₹{{ number_format($latest->mrp, 2) }}</s></span> <span class="price">₹{{ number_format($latest->min_price, 2) }}</span> </span> </div>
                                        </div>
                                        <div class="action">
                                            @if(isset($min_size->stock) && ($min_size->stock > 0))
                                                <a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a>
                                                <input type="hidden" value="{{ $latest->id }}" name="product_id">
                                                <a href="{{ route('web.product.single-product', ['slug' => $latest->slug, 'id' => $latest->id]) }}" class="button btn-cart" title="View Detail">View Detail</a>
                                            @else
                                                <button class="button btn-cart" title="Out of Stock" type="button" disabled>Out of Stock</button>
                                            @endif
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>    

  @endsection

  @section('script')
  
  @endsection
  