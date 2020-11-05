  @extends('web.templet.master')

  {{-- @include('web.include.seo') --}}

  @section('seo')
    <meta name="description" content="Credence">
  @endsection

  @section('content')
    <!-- JTV Home Slider -->
    <section class="main-container col2-left-layout">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-2"></div>:
          <div class="col-sm-9">
            <article class="col-main" style="width: 100%;">
              <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-9">
                        <div class="block-title" style="border-bottom: 0;text-decoration: underline;">MY ORDERS</div>
                        <div class="row singleorder">
                            <div class="row">
                                <div class="col-md-2 singleorderimg">
                                    <a href="#"><img src="{{ asset('web/images/products/img02.jpg') }}" alt=""></a>
                                </div>
                                <div class="col-md-10 singleordercontent"><a href="#">Royal velvet</a>
                                    <div class="cart-price" style="text-align: left;">
                                        <div class="quantity">1499</small> ₹1299</p> &nbsp; <b>|</b>
                                          <label style="margin-bottom: 0;">Quantity:</label>&nbsp;&nbsp;1  &nbsp; &nbsp;<b>|</b>
                                          <b class="sub-tag ">Size : 2kg </b>
                                      </div>
                                    </div>
                                    <div class="varient">
                                      <b class="sub-tag">Order Id : OD1452845 </b>
                                      <b class="sub-tag spl">Order Date : 21/10/2020 </b>
                                    </div>
                                </div>
                                <div class="col-md-12" style=""><hr style="margin: 0"></div>
                                <div class="col-md-12 singleordercontent" style="padding: 10px 15px;">
                                    <div class="varient">
                                      <b class="sub-tag">Delivery Status : <strong>Delivered</strong> </b>
                                      <a href="#" class="editproduct oth" style="margin-left: 10px">Return</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                  <span>No Orders Yet</span>
                              </div>
                            </div>
                        </div>
                      <a href="{{route('web.index')}}" class="button">GO TO HOME</a>
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