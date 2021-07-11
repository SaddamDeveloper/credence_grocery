  @extends('web.templet.master')

  {{-- @include('web.include.seo') --}}

  @section('seo')
    <meta name="description" content="Credence">
  @endsection

  @section('content')
    <section class="main-container col2-left-layout">
        <form action="{{ route('web.checkout') }}" autocomplete="off" method="POST"></form>
            <div class="row">
            <div class="col-sm-12">
                <article class="col-main" style="width: 100%;">  
                    @if ((isset($cart_data)) && !empty($cart_data))
                        <div class="row">
                            <div class="col-sm-9">
                                <article class="col-main" style="width: 100%;">              
                                <div class="ordernav" style="padding-bottom: 0.8%;">
                                    <ul>
                                        <li class="step"><div>Cart information</div></li>
                                        <li><div>shipping information</div></li>
                                        <li><div>Order confirmation</div></li>
                                    </ul>
                                </div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-9">
                                            <div class="row singleorder">
                                            @foreach ($cart_data as $item)
                                                <div classs="row">
                                                    <div class="col-md-2 singleorderimg">
                                                        <a href="#"><img src="{{ asset('images/products/'.$item['image'] ) }}" alt=""></a>
                                                    </div>
                                                    <div class="col-md-10 singleordercontent"><a href="#">{{ $item['name'] }}</a>
                                                        <div class="cart-price" style="text-align: left;">
                                                            <div class="quantity">
                                                            <p><small>₹{{ number_format($item['mrp'], 2) }}</small> ₹{{ number_format($item['price'], 2) }}</p> <b>|</b> 
                                                            @if(session()->has('msg'))
                                                                <span style="color: red">{{ session()->get('msg') }}</span>
                                                            @endif
                                                            <form action ="{{ route('web.update_cart') }}" method="POST" autocomplete="off">
                                                            @csrf
                                                                <input type="hidden" name="stock" value="{{ $item['stock'] }}">
                                                                <label class="hidden-xs" style="margin-bottom: 0;">Quantity:</label>&nbsp;&nbsp;
                                                                <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button">
                                                                    <i class="fa fa-minus">&nbsp;</i>
                                                                </button>
                                                                <input type="text" class="input-text qty" title="Qty" value="{{ $item['quantity'] }}" maxlength="12" id="qty" name="qty">
                                                                
                                                                <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button">
                                                                    <i class="fa fa-plus">&nbsp;</i>
                                                                </button>

                                                                <input type="hidden" name="product_id" value="{{ $item['product_id'] }}">
                                                                <button type="submit" class="editproduct oth">Update</button>
                                                            </form>
                                                            </div>                                      
                                                        </div>
                                                        <div class="varient">
                                                        @if (isset($item['size']))
                                                            <b class="sub-tag">Size : {{ $item['size']." " .$item['size_type'] }} </b>
                                                        @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12" style=""><hr style="margin: 0"></div>
                                                    <div class="col-md-12 singleordercontent" style="padding: 10px 15px;">                                
                                                        <a href="{{ route('web.add_wish_list', ['product_id' => encrypt($item['product_id']), 'size_id' => $item['size_id']]) }}" class="editproduct">Move to whishlist</a>
                                                        <a href="{{ route('web.remove_cart_item', ['id' => $item['product_id']]) }}" class="editproduct oth">Remove</a>
                                                    </div>
                                                </div>
                                            @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </article>
                            </div>
                            <div class="sidebar col-sm-3 col-xs-12">
                                <aside class="sidebar">
                                <div class="block-title">PAYMENT INFORMATION</div>
                                <div class="cartcalculation">
                                    <div class="paymttotal">
                                        <h4 style="text-align: left;">Cart Amount  </h4>
                                        <h4 style="text-align: right;" id="total">₹{{ number_format($total, 2) }}</h4>
                                    </div>
                                    <div class="paymttotal">
                                        <h4 style="text-align: left;">Shipping Charge</h4>
                                        <h4 style="text-align: right;" id="total">₹{{ number_format($shipping_charge, 2) }}</h4>
                                    </div>
                                    <div class="paymttotal">
                                        <h4 style="text-align: left;font-weight: 700">Grand Total </h4>
                                        <h4 style="text-align: right;font-weight: 700" id="total">₹{{ number_format($grand_total, 2) }}</h4>
                                    </div>
                                    <div class="paymttotal" style="float: right;margin-top: 10px">
                                        <a href="{{route('web.checkout')}}" class="button button--aylen btn">Proceed to Checkout</a>
                                    </div>
                                </div>
                                </aside>
                            </div>
                        </div>
                    @else
                        <div>
                            <div class="emptycrt text-center">
                                <p class="emplty-div" style="margin: 50px 0 0">Cart is Empty</p>
                                <div>                                
                                    <a href="/" class="button" style="margin: 30px 0 0">Continue Shopping</a>
                                </div>
                            </div>
                        </div>
                    @endif
                </article> 
            </div>
            
            </div>
        </form>
    </section>
       
  @endsection

  @section('script')
  @endsection