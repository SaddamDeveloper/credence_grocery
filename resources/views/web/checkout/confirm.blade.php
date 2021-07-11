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
          <div class="col-sm-9">
            <article class="col-main" style="width: 100%;">
              <div class="ordernav" style="padding-bottom: 0.8%;">
                  <ul>
                    <li style="border-color: #327519"><div>Cart information</div></li>
                    <li style="border-color: #327519"><div>shipping information</div></li>
                    <li class="step"><div>Order confirmation</div></li>
                  </ul>
              </div>
              <div class="container-fluid">
                  <div class="row">
                    <!-- <div class="col-md-1"></div> -->
                    <div class="col-md-12">
                      <div class="orderconfim">
                        <svg class="checkmark1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/></svg>                           
                      </div>
                      <div class="col-md-7"> 
                        <label style="font-weight: 700">Order Detail</label>                       
                        <div class="row singleorder">
                            @if (isset($order) && !empty($order))
                                @foreach ($order->orderDetails as $od)
                                    @foreach ($product as $pr)
                                        <div class="row">
                                            <div class="col-md-2 singleorderimg">
                                                <a href="{{ route('web.product.single-product', ['slug' => $pr->slug, 'id' => $pr->id]) }}">
                                                    <img src="{{ asset('images/products/'.$pr->main_image.'') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-10 singleordercontent" style="padding-top: 10px;">
                                            <a href="{{ route('web.product.single-product', ['slug' => $pr->slug, 'id' => $pr->id]) }}">{{ $pr->name }}</a>
                                            <div class="cart-price" style="text-align: left;">
                                                <div class="quantity">
                                                    <p><small>₹{{ number_format($od->quantity, 2) }}</small> ₹{{ number_format($od->price, 2) }} </p> <b>|</b> 
                                                    <label class="" style="margin-bottom: 0;">Quantity:</label>&nbsp;&nbsp;{{ $od->quantity }}
                                                </div>                                      
                                            </div>
                                            <div class="varient">
                                                <b class="sub-tag spl">Size : {{ $od->size }} </b>
                                            </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach
                            @endif
                        </div>
                      </div>
                      <div class="col-md-5"> 
                        <label style="font-weight: 700">Shipping</label>
                        <div class="single-address orderconfim">
                          <div class="single-address-content">
                            <p>Name: {{ $address->name }}</p>
                            <p>Address: {{ $address->address }} </p>
                            <p>Email: {{ $address->email }} </p>
                            <p>Mobile No: {{ $address->mobile_no }} </p>
                            <p>City: {{ $address->city }} </p>
                            <p>Pincode: {{ $address->pin_code }}</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                    <div class="col-md-12" style="display:flex;justify-content: center;margin-top: 30px">
                      <a href="{{route('web.index')}}" class="button button--aylen btn">Continue Shopping</a>
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