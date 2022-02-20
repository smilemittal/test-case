@include('dashboard.partials.registerheader')
    <!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="flexbox-container custom-flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-6 col-10 box-shadow-2 p-0 register-wrp register-step" style="">
                        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                            <div class="card-header border-0 p-0">
                                <div class="text-center mb-1">
                                    <img style="max-width: 250px;" class="img-fluid" src="{{ url('assets/frontassets/register/app-assets/images/logo/kanexalogo/Kannexa new.png')}}" alt="branding logo">
                                </div>
                                <div class="font-large-1  text-center">
                                    Register
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form-horizontal" action="{{ route('register.user')}}" method="POST">
                                        @csrf
                                      
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input name="first_name" type="text" class="form-control " placeholder="First name" value="@if(isset($registerdata)) {{ $registerdata['firstname'] }} @else @endif"  required>
                                            <div class="form-control-position">
                                                <i class="ft-user"></i>
                                            </div>

                                            @error('first_name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input name="middle_name" type="text" class="form-control " placeholder="Middle name" value="@if(isset($registerdata)) {{ $registerdata['middlename'] }} @else @endif" >
                                            <div class="form-control-position">
                                                <i class="ft-user"></i>
                                            </div>

                                            @error('middle_name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input name="last_name" type="text" class="form-control " placeholder="Last name" value="@if(isset($registerdata)) {{ $registerdata['lastname'] }} @else @endif" required>
                                            <div class="form-control-position">
                                                <i class="ft-user"></i>
                                            </div>

                                            @error('last_name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input name="email" type="email" class="form-control " placeholder="Email address"  value="@if(isset($registerdata)) {{ $registerdata['email'] }} @else @endif"required>
                                            <div class="form-control-position">
                                                <i class="ft-mail"></i>
                                            </div>

                                            @error('email')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <div class="row col-sm-12 m-auto px-0 mx-0">
                                                <div class="col-md-6 p-0">
                                                    <select id="" name="priority" class="form-control ">
                                                        <option value="low">United Kingdom (+44)</option>
                                                      </select>
                                                      <div class="form-control-position">
                                                        <i class="ft-phone"></i>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 pr-0">
                                                    <input name="phone" type="text" class="form-control " placeholder="000 000 0000"  value="@if(isset($registerdata)) {{ $registerdata['phone'] }} @else @endif" required>
                                                </div>
                                            </div>


                                            @error('phone')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input name="password" type="password" class="form-control " placeholder="Enter Pin" required>
                                            <div class="form-control-position">
                                                <i class="ft-lock"></i>
                                            </div>

                                            @error('password')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input name="password_confirmation" type="password" class="form-control " placeholder="Confirm Pin" required>
                                            <div class="form-control-position">
                                                <i class="ft-lock"></i>
                                            </div>
                                        </fieldset>
                                       
                                        <div class="form-group text-center mt-2">
                                            <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1">Register</button>
                                        </div>
                                    </form>
                                </div>

                                <p class="card-subtitle text-muted text-right font-small-3 mx-2 my-1">
                                    <span>Already have an account? <a href="{{ route('login.form') }}" class="card-link">Sign In</a>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--Register step-->
            </section>
        </div>
    </div>
</div>
    <!-- END: Content-->
@include('dashboard.partials.registerfooter')
