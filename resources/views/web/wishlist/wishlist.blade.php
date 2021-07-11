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
                      <ul class="products-grid row">
                        @if (isset($wish_data) && !empty($wish_data) && count((array)$wish_data) > 0 )
                            @foreach ($wish_data as $wish_list)
                                <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                                    <div class="item">
                                        <div class="item-inner">
                                        <div class="item-img">
                                            <div class="item-img-info"> <a class="product-image" title="{{ $wish_list['title'] }}" href="#"> <img alt="{{ $wish_list['title'] }}" src="images/products/{{ $wish_list['image'] }}"> </a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                            <div class="item-title"> <a title="{{ $wish_list['title'] }}" href="#"> {{ $wish_list['title'] }} </a> </div>
                                            <div class="item-content">
                                                <div class="item-price">
                                                <div class="price-box">
                                                    <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> ₹{{ number_format($wish_list['price'], 2) }} </span> </p>
                                                    <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> ₹{{ number_format($wish_list['mrp'], 2) }} </span> </p>
                                                </div>
                                                </div>
                                                <div class="action">
                                                <a class="link-wishlist" href="{{ route('web.delete_wish_list',['list_id' => encrypt($wish_list['wish_id'])]) }}"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a>
                                                <a href="{{ route('web.move_wish_list',['list_id' => encrypt($wish_list['wish_id'])]) }}" class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span><i class="fa fa-plus"></i> Move to Cart</span> </a>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        @else
                        <link class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item">
                                <div class="emptycrt text-center">
                                    <p class="emplty-div" style="margin: 50px 0 0">Wishlist is Empty</p>
                                    <div>                                
                                        <a href="{{ route('web.index') }}" class="button" style="margin: 30px 0 0">Continue Shopping</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endif
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