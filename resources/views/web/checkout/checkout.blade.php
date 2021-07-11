  @extends('web.templet.master')

  {{-- @include('web.include.seo') --}}

  @section('seo')
    <meta name="description" content="Credence">
  @endsection

  @section('content')
    <section class="main-container col2-left-layout">
        <form action="{{ route('web.place_order') }}" method="POST">
            @csrf
            <div class="container-fluid">
                @if(session()->has('msg'))
                    <div class="alert alert-success">{{ session()->get('msg') }}</div>
                @endif
                @if(session()->has('error'))
                    <div class="alert alert-danger">{{ session()->get('error') }}</div>
                @endif
                <div class="row">
                    <div class="col-sm-9">
                        <article class="col-main" style="width: 100%;">              
                        <div class="ordernav" style="padding-bottom: 0.8%;">
                            <ul>
                                <li style="border-color: #327519"><div>Cart information</div></li>
                                <li class="step"><div>shipping information</div></li>
                                <li><div>Order confirmation</div></li>
                            </ul>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <!-- <div class="col-md-1"></div> -->
                                <div class="col-md-12">
                                    <div class="row">
                                    <div class="box-account">
                                        <div class="page-title">
                                        <h2 class="text-center" style="padding: 0">Shipping Information</h2>
                                        </div>                            
                                        <div class="col2-set" id="select-address">
                                        <h5 class="text-center">Select Address</h5>
                                        @forelse ($addresses ?: [] as $address)
                                            <div class="col-1">
                                                <div class="single-address flex">
                                                <label class="radio-container">
                                                    <input type="radio" checked="checked" name="address_id" value="{{ $address->id }}">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <div class="single-address-content">
                                                    <p>{{ $address->name }}</p>
                                                    <p>{{ $address->address }}</p>
                                                    <p>{{ $address->state }}</p>
                                                    <p>{{ $address->city }}</p>
                                                    <p>Phone: {{ $address->mobile }}</p>
                                                    <p>Email: {{ $address->email }}</p>
                                                    <p>Pincode: {{ $address->pin }}</p>
                                                    <a href="{{ route('web.address.edit-address', ['id' => encrypt($address->id)]) }}" title="">EDIT THIS ADDRESS</a>
                                                </div>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="col-1 text-center">
                                                No address found!
                                            </div>
                                        @endforelse
                                        <a class="manage_add" href="{{ route('web.address.add_address') }}"><h5 class="text-center">Add New Shipping Addresses</h5></a>
                                        </div>
                                        <div class="checkout-page" id="add-address" style="display: none;">
                                        <h5 class="text-center">Add New Address</h5>   
                                        <div class="box-border">
                                      
                                            <ul>
                                            <li class="row">
                                                <div class="col-sm-6">
                                                    <label for="first_name" class="required">Name</label>
                                                    <input type="text" class="input form-control" name="name" id="name">
                                                    <span id="name_msg" style="color: red;"></span>
                                                </div>
                                                <!--/ [col] -->
                                                <div class="col-sm-6">
                                                    <label for="email_address" class="required">Email Address</label>
                                                    <input type="email" class="input form-control" name="email" id="email_address">
                                                    <span id="email_msg" style="color: red;"></span>
                                                </div>
                                                <!--/ [col] --> 
                                            </li>
                                            <!--/ .row -->
                                            <li class="row">
                                                <div class="col-xs-12">
                                                <label for="address" class="required">Address</label>
                                                <textarea class="input form-control form-area" name="address" id="address" rows="10"></textarea>
                                                <span id="address_msg" style="color: red;"></span>
                                                </div>
                                                <!--/ [col] --> 
                                                
                                            </li>
                                            <!-- / .row -->
                                            <li class="row">
                                                <div class="col-sm-6">
                                                <label for="telephone">Phone Number</label>
                                                <input type="number" name="contact_no" class="input form-control" id="telephone">
                                                <span id="telephone_msg" style="color: red;"></span>
                                                </div>
                                                <!--/ [col] -->
                                                <div class="col-sm-6">
                                                <label for="postal_code" class="required">Pincode</label>
                                                <input type="number" class="input form-control" name="pin_code" id="postal_code">
                                                <span id="postal_code_msg" style="color: red;"></span>
                                                </div>
                                                <!--/ [col] --> 
                                            </li>
                                            <!--/ .row -->
                                            
                                            <li class="row">
                                                <div class="col-sm-6">
                                                <label for="city" class="required">City</label>
                                                <input class="input form-control" type="text" name="city" id="city">
                                                <span id="city_msg" style="color: red;"></span>
                                                </div>
                                                <!--/ [col] -->
                                                
                                                <div class="col-sm-6">
                                                <label class="required">State/Province</label>
                                                <input type="text" class="input form-control" name="state" id="state">
                                                <span id="state_msg" style="color: red;"></span>
                                                </div>
                                                <!--/ [col] --> 
                                            </li>
                                            <!--/ .row -->
                                            <li>
                                                <button onclick="myFunction()" class="button button1">Cancel</button>
                                                <button type="submit" class="button" id="address_btn">Continue</button>
                                            </li>
                                            </ul>
                                        </div>
                                        </div>                            
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </article>
                    </div>
                    @if(isset($cart) && !empty($cart))
                        @if (($cart->count() > 0))
                            <div class="sidebar col-sm-3 col-xs-12">
                                <aside class="sidebar">
                                    <div class="block-title" style="border-bottom: 0">PAYMENT INFORMATION</div>
                                    <div class="cartcalculation">
                                        <div class="paymttotal">
                                            <h4 style="text-align: left;">Cart Amount  </h4>
                                            <h4 style="text-align: right;" id="total">₹{{ number_format($total, 2) }}</h4>
                                            <input type="hidden" name="total" value="{{ $total }}">
                                        </div>
                                        <div class="paymttotal">
                                            <h4 style="text-align: left;">Shipping  </h4>
                                            <h4 style="text-align: right;" id="total">₹{{ number_format($shipping_charge, 2) }}</h4>
                                            <input type="hidden" name="shipping_charge" value="{{ $shipping_charge }}">
                                        </div>
                                        <div class="paymttotal">
                                            <h4 style="text-align: left;font-weight: 700">Grand Total </h4>
                                            <h4 style="text-align: right;font-weight: 700" id="total">₹{{ number_format($grand_total, 2) }}</h4>
                                            <input type="hidden" name="grand_total" value="{{ $grand_total }}">
                                        </div>
                                        <div class="paymtmthd">
                                        <label>Payment Methord *</label>
                                        <label class="radio-container">
                                            <input type="radio" name="payment_type" value="1" required checked class="payment_type_radio">
                                            <span class="checkmark"></span>
                                            Cash On Delivery
                                        </label>
                                        <label class="radio-container">
                                            <input type="radio" name="payment_type" value="2" required class="payment_type_radio">
                                            <span class="checkmark"></span>
                                            Pay Online
                                        </label> 
                                        </div>                                    
                                        <div class="paymttotal" style="float: right;margin-top: 10px">
                                            <button class="button button--aylen btn" type="submit">Proceed to Checkout</button>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </form>
    </section>
    </section>
       
  @endsection

  {{-- @section('script')
    <script type="text/javascript">
      function myFunction() {
        var x = document.getElementById("add-address");
        if (x.style.display === "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
        var y = document.getElementById("select-address");
        if (y.style.display === "none") {
          y.style.display = "block";
        } else {
          y.style.display = "none";
        }
      }
      function myFunction1() {
        var x = document.getElementById("add-address");
        if (x.style.display === "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
        var y = document.getElementById("select-address");
        if (y.style.display === "none") {
          y.style.display = "block";
        } else {
          y.style.display = "none";
        }
      }
      $(document).ready(function(){
        $("#address_btn").on("click", function(e){
          e.preventDefault();
          $.ajaxSetup({
	                headers: {
	                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	                }
                });
                var name = $('#name').val();
                var email = $('#email').val();
                var address = $('#address').val();
                var mobile_no = $('#mobile_no').val();
                var pin_code = $('#pin_code').val();
                var city = $('#city').val();
                var state = $('#state').val();
                $.ajax({
                    url: "",
                    method: "POST",
                    data: {name: name, email: email, address: address, mobile_no: mobile_no, pin_code: pin_code, city: city, state: state},
                    success: function(data){
                        if(data == 1){
                            window.location.reload();
                        }else if(data == 2){
                            alert("Something went wrong!");
                        }
                    }
                });
        });
      });
    </script>
  @endsection --}}

