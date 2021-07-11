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
              <div class="account-login register-login" style="background: #fff">
                  <fieldset class="col2-set">
                      <div class="new-users"><strong>Change Password</strong>
                          <div class="content">
                              @if (Session::has('message'))
                                    <div class="alert alert-success" >{{ Session::get('message') }}</div>
                                @endif
                                @if (Session::has('error'))
                                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                                @endif
                              <form action="{{ route('web.profile.do.change-password') }}" autocomplete="off" method="POST">
                                @csrf
                                  <ul class="form-list">
                                      <li>
                                          <label for="email">Old Password <span class="required">*</span></label>
                                          <br>
                                          <input type="password" title="Old Password" class="input-text required-entry" value="" name="old_password">
                                          @if($errors->has('old_password'))
                                                <span class="invalid-feedback" role="alert" style="color:red">
                                                    <strong>{{ $errors->first('old_password') }}</strong>
                                                </span>
                                            @enderror
                                      </li>
                                      <p class="required">* Required Fields</p>
                                      <li>
                                          <label for="pass">New Password <span class="required">*</span></label>
                                          <br>
                                          <input type="password" title="New Password" class="input-text required-ent_ry" name="new_password">
                                          @if($errors->has('new_password'))
                                                <span class="invalid-feedback" role="alert" style="color:red">
                                                    <strong>{{ $errors->first('new_password') }}</strong>
                                                </span>
                                            @enderror
                                      </li>
                                      <p class="required">* Required Fields</p>
                                      <li>
                                          <label for="pass">Confirm New Password <span class="required">*</span></label>
                                          <br>
                                          <input type="password" title="Confirm New Password" class="input-text required-entry" name="confirm_password">
                                            @if($errors->has('confirm_password'))
                                                <span class="invalid-feedback" role="alert" style="color:red">
                                                    <strong>{{ $errors->first('confirm_password') }}</strong>
                                                </span>
                                            @enderror
                                      </li>
                                      <p class="required">* Required Fields</p>
                                  </ul>
                                  <div class="buttons-set">
                                      <button id="send2" name="send" type="submit" class="button login"><span>Submit</span></button>
                                  </div>
                              </form>
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