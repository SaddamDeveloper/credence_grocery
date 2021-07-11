  @extends('web.templet.master')

  {{-- @include('web.include.seo') --}}

  @section('seo')
    <meta name="description" content="Credence">
  @endsection

  @section('content')
    <!-- JTV Home Slider -->
    <section class="main-container col1-layout product-login">
        <div class="main container">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="margin: auto;">
              <div class="account-login register-login">
                  <fieldset class="col2-set">
                    @if (Session::has('message'))
                      <div class="alert alert-success text-center" >{{ Session::get('message') }}</div>
                    @endif
                    @if (Session::has('error'))
                        <div class="alert alert-danger text-center">{{ Session::get('error') }}</div>
                    @endif
                      <div class="new-users"><strong>Login</strong>
                          <div class="content">
                              <p>If you have an account with us, please log in.</p>
                            
                              <form action="{{ route('web.login') }}" autocomplete="off" method="POST">
                                @csrf
                                  <ul class="form-list">
                                      <li>
                                          <label for="username">Email or Mobile No  <span class="required">*</span></label>
                                          <br>
                                          <input type="text" title="Mobile No" class="input-text required-entry" id="username" value="" name="username">
                                      </li>
                                      <li>
                                          <label for="pass">Password <span class="required">*</span></label>
                                          <br>
                                          <input type="password" title="Password" id="pass" class="input-text required-entry validate-password" name="password">
                                      </li>
                                  </ul>
                                  <p class="required">* Required Fields</p>
                                  <div class="buttons-set">
                                      <button id="send2" name="send" type="submit" class="button login"><span>Login</span></button>
                                      <a class="forgot-word" target="_blank" href="{{route('web.user.forgot-password')}}">Forgot Your Password?</a>
                                  </div>
                              </form>
                              <hr>
                              <p>If you don't have an account with us, please register in.</p>
                              <a class="button login " href="{{route('web.user.register')}}">CREATE AN ACCOUNT</a>
                          </div>
                      </div>
                  </fieldset>
              </div>
            </div>          
          </div>
        </div>
    </section>
       
  @endsection

  @section('script')
  @endsection