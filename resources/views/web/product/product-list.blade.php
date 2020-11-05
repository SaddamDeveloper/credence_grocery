@extends('web.templet.master')

  {{-- @include('web.include.seo') --}}

  @section('seo')
  @endsection

  @section('content')
    <style>.list-group {margin-bottom: 0}</style>

    <!-- JTV Home Slider -->
    <section class="main-container col2-left-layout">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-9 col-sm-push-3">
            <article class="col-main" style="width: 100%;">              
              <div class="toolbar toolbar-top" style="padding-bottom: 0.8%;border-bottom: 1px solid #ddd">
                <div class="row">
                  <div class="col-md-7 col-sm-5">
                    <h2 class="page-heading"> 
                        <span class="page-heading-title">{{ $sub_category->name }}</span> 
                    </h2>
                  </div>
                  <div class="col-sm-5 text-right sort-by">
                    <label class="control-label" for="input-sort">Sort By:</label>
                    <select name="">
                      <option value="">Newest</option>
                      <option value="">Popularty</option>
                      <option value="">Price low to high</option>                      
                      <option value="">Price high to low</option>
                    </select>
                  </div>
                </div>
              </div>
              <div id="product_container">
                <div class="category-products">
                  <ul class="products-grid row">
                      @forelse ($products ?: [] as $product)
                        <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                <div class="item-img-info"> <a class="product-image" title="{{ $product->name }}" href="{{ route('web.product.single-product', ['slug' => $product->slug, 'id' => $product->id]) }}"> <img alt="{{ $product->name }}" src="{{ asset('images/products/'.$product->main_image) }}"> </a>
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
                                        <a class="link-wishlist" href=""><i class="icon-heart icons"></i><span class="hidden">Wishlist</span></a>
                                        <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </li>
                      @empty
                          <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6 text-center">
                            No Product Found!
                          </li>
                      @endforelse
                    {{-- <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
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
                    </li>
                    <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                      <div class="item">
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
                    </li>
                    <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
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
                    </li> --}}
                  </ul>
                </div>
                <div class="toolbar">
                  <div class="row">
                    <div class="col-sm-6 text-left">
                      <ul class="pagination">
                        
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </article>
            <!--  ///*///======    End article  ========= //*/// --> 
          </div>
          <div class="sidebar col-sm-3 col-xs-12 col-sm-pull-9">
            <aside class="sidebar">
              <div class="block-title">Shop By Catagories</div>
              <div class="block block-layered-nav">
                <div class="block-content" id="sidebar">
                  <p class="block-subtitle">Shopping Options</p>                  
                  <div class="list-group">
                    @if (isset($categories) && !empty($categories))
                        @foreach ($categories as $category)
                            @if(isset($category->subCategory) && !empty($category->subCategory))
                                <a href="#{{ $category->id }}" class="list-group-item ji" data-toggle="collapse" data-parent="#sidebar" aria-expanded="false">
                                <span class="hidden-sm-down">{{ $category->name }}</span> 
                                </a>
                                <div class="collapse sub-cat" id="{{ $category->id }}" style="border-bottom: 1px solid rgb(221, 221, 221);}">
                                    @foreach ($category->subCategory as $subCategory)
                                        <a href="{{ route('web.product.product-list', ['slug' => $subCategory->slug, 'id' => $subCategory->id]) }}" class="list-group-item" data-parent="#{{ $category->id }}">{{ $subCategory->name }}</a>
                                    @endforeach
                                </div>
                            @else
                                <a href="#menu2" class="list-group-item ji">
                                    <span class="hidden-sm-down">{{ $category->name }}</span> 
                                </a>
                            @endif
                        @endforeach
                    @endif
                  </div>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>
        
  @endsection

  @section('script')  
  @endsection