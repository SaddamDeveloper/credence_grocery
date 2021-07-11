  @extends('web.templet.master')

  {{-- @include('web.include.seo') --}}

  @section('seo')
    <meta name="description" content="Credence">
  @endsection

  @section('content')
    <!-- JTV Home Slider -->
    <div class="main-container col2-right-layout profile">
      <div class="main container">
        <div class="row">
          <section class="col-sm-9">
            <div class="col-main">
              <div class="page-title">
                <h2>EDIT profile</h2>
              </div>
              <div class="static-contain account-login">
                @if (Session::has('message'))
                   <div class="alert alert-success" >{{ Session::get('message') }}</div>
                @endif
                @if (Session::has('error'))
                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                @endif

                <form action="{{ route('web.store.profile') }}" autocomplete="off" method="POST">
                  @csrf
                  <ul class="form-list">
                    <li>
                        <div class="row">
                            <div class="col-sm-12">
                                <label for="name">Name <span class="required">*</span></label>
                                <br>
                            <input type="text" name="name" value="{{ $user->name }}" class="input-text required-entry" required="">
                            @if($errors->has('name'))
                                <span class="invalid-feedback" role="alert" style="color:red">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="email">Email Address <span class="required">*</span></label>
                                <br>
                                <input type="email" class="input-text required-entry" value="{{ $user->email }}" name="email" required="">
                                @if($errors->has('email'))
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <label for="email">Phone Number <span class="required">*</span></label>
                                <br>
                                <input type="number" class="input-text required-entry" value="{{ $user->mobile }}" name="mobile">
                                @if($errors->has('mobile'))
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </li>
                  </ul>
                  <p class="required">* Required Fields</p>
                  <div class="buttons-set">
                      <a href="{{ route('web.profile.index') }}" class="button button1" style="padding: 4px 12px;border-width: 1px;">Back</a>
                      <button id="send2" name="send" type="submit" class="button login"><span>save</span></button>
                  </div>
                </form>
              </div>
            </div>
          </section>
          <aside class="col-right sidebar col-sm-3 wow">
            <div class="block block-company">
              <div class="block-title" style="padding-left: 13px;">Account </div>
              <div class="block-content">
                <ol id="recently-viewed-items">
                  <li class="item odd"><a href="{{ route('web.wishlist.wishlist') }}">Wishlist</a></li>
                  <li class="item  odd"><a href="{{route('web.order.order-list')}}">My Orders</a></li>
                  <li class="item odd"><a href="{{route('web.profile.edit-profile')}}">Edit Profile</a></li>
                  <li class="item odd"><a href="{{route('web.address.address')}}">My Address</a></li>
                  <li class="item last"><a href="{{route('web.profile.change-password')}}">Change password</a></li>
                </ol>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
       
  @endsection

  @section('script')
  @endsection