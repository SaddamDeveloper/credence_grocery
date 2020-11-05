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
                        <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                          <div class="item">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"> <a class="product-image" title="Product Title Here" href="{{route('web.product.single-product')}}"> <img alt="Product Title Here" src="web/images/products/img06.jpg"> </a>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"> <a title="Product Title Here" href="{{route('web.product.single-product')}}"> Product Title Here </a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box">
                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> ₹156.00 </span> </p>
                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> ₹167.00 </span> </p>
                                      </div>
                                    </div>
                                    <div class="action">
                                      <a class="link-wishlist" href="wishlist.html"><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a>
                                      <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>View Detail</span> </button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                  </div>
                </div>
              </div>
            </article>
            <!--  ///*///======    End article  ========= //*/// --> 
          </div>
        </div>
      </div>
    </section>
       
  @endsection

  @section('script')
  @endsection