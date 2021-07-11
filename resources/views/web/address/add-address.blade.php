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
        <div class="col-sm-12">
          <article class="col-main" style="width: 100%;">
            <div class="container-fluid">
                <div class="row">
                  <!-- <div class="col-md-1"></div> -->
                  <div class="col-md-12">
                      <div class="row">
                        <div class="box-account">
                          <div class="page-title">
                            <h2 class="text-center" style="padding: 0">Shipping Information</h2>
                          </div>   
                          <div class="checkout-page">
                              <h5 class="text-center">Add Shipping Address</h5> 
                            <div class="box-border">
                            <form method="POST" action="{{ route('web.address.add') }}">
                              @csrf
                              <ul>
                                <li class="row">
                                  <div class="col-sm-6">
                                    <label for="first_name" class="required">Name</label>
                                  <input type="text" value="{{ old('name') }}" placeholder="Enter Name" class="input form-control" name="name" id="name">
                                    @if($errors->has('name'))
                                        <span id="name_msg" style="color:red">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                                  <!--/ [col] -->
                                  <div class="col-sm-6">
                                    <label for="email_address" class="required">Email Address</label>
                                    <input type="email" class="input form-control" value="{{ old('email') }}" placeholder="Enter Email address" name="email" id="email_address">
                                    @if($errors->has('email'))
                                        <span id="email_msg" style="color:red">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                                  <!--/ [col] --> 
                                </li>
                                <!--/ .row -->
                                <li class="row">
                                  <div class="col-xs-12">
                                    <label for="address" class="required">Address</label>
                                    <textarea class="input form-control form-area" name="address" id="address" placeholder="Enter Address" rows="10">{{ old('address') }}</textarea>
                                    @if($errors->has('address'))
                                        <span id="address_msg" style="color:red">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                                </li>
                                <li class="row">
                                  <div class="col-sm-6">
                                    <label for="telephone">Phone Number</label>
                                    <input type="number" name="mobile" value="{{ old('mobile') }}" placeholder="Enter Mobile No" class="input form-control">
                                    @if($errors->has('mobile'))
                                        <span id="mobile_msg" style="color:red">
                                            <strong>{{ $errors->first('mobile') }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                                  <!--/ [col] -->
                                  <div class="col-sm-6">
                                    <label for="postal_code" class="required">Pincode</label>
                                    <input type="number" class="input form-control" value="{{ old('pin') }}" placeholder="Enter Pin" name="pin">
                                    @if($errors->has('pin'))
                                        <span id="pin_msg" style="color:red">
                                            <strong>{{ $errors->first('pin') }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                                </li>
                                <li class="row">
                                  <div class="col-sm-6">
                                    <label for="city" class="required">City</label>
                                    <input class="input form-control" type="text" value="{{ old('city') }}" placeholder
                                    ="Enter City" name="city" id="city">
                                    @if($errors->has('city'))
                                        <span id="city_msg" style="color:red">
                                            <strong>{{ $errors->first('city') }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                                  <div class="col-sm-6">
                                    <label class="required">State/Province</label>
                                    <input type="text" class="input form-control" value="{{ old('state') }}" name="state" id="state" placeholder="Enter State">
                                    @if($errors->has('state'))
                                        <span id="state_msg" style="color:red">
                                            <strong>{{ $errors->first('state') }}</strong>
                                        </span>
                                     @enderror
                                  </div>
                                </li>
                                <li>
                                  <a href="{{route('web.address.address')}}" class="button button1" style="padding: 4px 12px;border-width: 1px;">Back</a>
                                  <button type="submit" class="button button-clear" id="address_btn">Save</button>
                                </li>
                              </ul>
                              </form>
                            </div>
                          </div>                            
                        </div>
                      </div>
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
<script>
  $(document).ready(function(){

    $('#address_btn').click(function(){
        var name = $('#name').val();
        var email = $('#email_address').val();
        var address = $('#address').val();
        var telephone = $('#telephone').val();
        var postal_code = $('#postal_code').val();
        var city = $('#city').val();
        var state = $('#state').val();

        if (name == "") {
            $('#name_msg').text('Name can\'t be empty');
            return false;
        } else
            $('#name_msg').text('');

        if (email == "") {
            $('#email_msg').text('Email can\'t be empty');
            return false;
        } else{
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

            if (email.match(mailformat))
                $('#email_msg').text('');
            else {

                $('#email_msg').text('Invalid email');
                return false;
            }
        }

        if (address == "") {
            $('#address_msg').text('Address can\'t be empty');
            return false;
        } else
            $('#address_msg').text('');

        if (telephone == "") {
            $('#telephone_msg').text('Telephone can\'t be empty');
            return false;
        } else {
            if (telephone.length < 10){
                $('#telephone_msg').text('Contact no. should be of 10 digits');
                return false;
            }
            else if (telephone.length > 10){
                $('#telephone_msg').text('Contact no. should be of 10 digits');
                $('#telephone').val("");
                return false;
            } else
                $('#telephone_msg').text('');
        }

        if (postal_code == "") {
            $('#postal_code_msg').text('PIN Code can\'t be empty');
            return false;
        } else {
            if (postal_code.length < 6){
                $('#postal_code_msg').text('Pin code should be of 6 digits');
                return false;
            } 
            else if (postal_code.length > 6){
                $('#postal_code').val("");
                $('#postal_code_msg').text('Pin code should be of 6 digits');
                return false;
            } else
                $('#postal_code_msg').text('');
        }

        if (city == "") {
            $('#city_msg').text('City can\'t be empty');
            return false;
        } else
            $('#city_msg').text('');

        if (state == "") {
            $('#state_msg').text('State can\'t be empty');
            return false;
        } else
            $('#state_msg').text('');
    });

    $('#telephone').keyup(function(e){
        var telephone = $('#telephone').val();

        if (telephone.length < 10) 
            $('#telephone_msg').text('Contact no. should be of 10 digits');
        else{
            $('#telephone_msg').text('');
            event.preventDefault();
            return false;
        }
    });

    $('#postal_code').keyup(function(e){
        var postal_code = $('#postal_code').val();

        if (postal_code.length < 6) 
            $('#postal_code_msg').text('Pin code should be of 6 digits');
        else{
            $('#postal_code_msg').text('');
            event.preventDefault();
            return false;
        }
    });
  });
</script>
@endsection