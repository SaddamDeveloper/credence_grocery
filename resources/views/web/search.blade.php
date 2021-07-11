@extends('web.templet.master')

{{-- @include('web.include.seo') --}}

@section('seo')
  <meta name="description" content="Credence">
@endsection

@section('content')
  <!-- JTV Home Slider -->
  <section class="main-container col2-left-layout wishlist">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <article class="col-main" style="width: 100%;">
            <div class="container-fluid">
              <div class="row">
                <div class="category-products">
                    <h2>Search for: "<span style="color: #327519;">{{ $keywords }}</span>"</h2>
                    <ul class="products-grid row">
                        <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                          @forelse ($products ?: [] as $product)
                            <div class="item">
                              <div class="item-inner">
                              <div class="item-img">
                                  <div class="item-img-info"> <a class="product-image" title="{{ $product->name }}" href="#"> <img alt="{{ $product->name }}" src="images/products/{{ $product->main_image }}"> </a>
                                  </div>
                              </div>
                              <div class="item-info">
                                  <div class="info-inner">
                                  <div class="item-title"> <a title="{{ $product->name }}" href="#"> {{ $product->name }} </a> </div>
                                  <div class="item-content">
                                      <div class="item-price">
                                      <div class="price-box">
                                          <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> ₹2323 </span> </p>
                                          <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> ₹2323 </span> </p>
                                      </div>
                                      </div>
                                      <div class="action">
                                      <a class="link-wishlist" href="#"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a>
                                      <a href="#" class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span><i class="fa fa-plus"></i> Move to Cart</span> </a>
                                      </div>
                                  </div>
                                  </div>
                              </div>
                              </div>
                            </div>
                          @empty
                           <div class="row livesrc"><div class="col-md-12"><p style="font-weight: bold;text-align:center;margin: 9px 0;color: #327519;">No Product</p></div></div>
                          @endforelse
                        </li>
                        <li class="item col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="item">
                                <div class="emptycrt text-center">
                                    <div>                                
                                        <a href="{{ route('web.index') }}" class="button" style="margin: 30px 0 0">Continue Shopping</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>
     
@endsection

@section('script')
@endsection