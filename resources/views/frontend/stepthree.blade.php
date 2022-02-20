@include('frontend.registerheader')

<!-- BEGIN: Body-->

<section class="flexbox-container custom-flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-lg-6 col-md-6 col-10 box-shadow-2 p-0 register-wrp register-step mobileregister">
            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                <div class="card-header border-0 p-0">
                    <div class="text-center mb-1">
                        <img style="max-width: 210px;" class="img-fluid" src="{{ url('assets/frontassets/register/app-assets/images/logo/kanexalogo/Kannexa new.png')}}" alt="branding logo">
                    </div>
                    <div class="font-medium-5  text-center py-0">
                        Verify Mobile OTP <i class="ft-info text-right"></i>
                    </div>
                </div>
                <div class="card-content">

                    <div class="card-body verify-user text-center">
                        <div class="col-md-3 m-auto text-center">
                            <span class="avatar avatar-online"><img src="{{ url('assets/frontassets/register/app-assets/images/portrait/small/avatar-s-19.png')}}" alt="avatar"></span>
                        </div>
                        <h4 class="pt-2">Hello, John Smith</h4>
                        <p>
                            You are just three steps away from joining the best banking community ever
                        </p>

                        <!-- Form wizard with step validation section start -->
                        <section id="validation">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">

                                        <div class="card-content collapse show">
                                            <div class="card-body veryfy-wrp-inr">
                                                <form action="{{route('stepfour')}}" class="steps-validation">

                                                    <!-- Step 1 -->
                                                    <h6></h6>
                                                    <fieldset>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h4 class="float-left ">Verify Mobile Phone</h4>
                                                                <span>
                                                                    <input type="text" class="form-control international-inputmask" id="international-mask1" placeholder="Enter Phone Number" />

                                                                </span>

                                                                <div class="otp-code-section">
                                                                    <span>1</span>
                                                                    <span>2</span>
                                                                    <span>3</span>
                                                                    <span>4</span>
                                                                    <span>5</span>
                                                                    <span>6</span>
                                                                    <a href="#">Resend OTP</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="form-group text-center">
                                                            <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-6 m-auto  mb-1">Verify</button>
                                                        </div>
                                                    </fieldset>

                                                    <!-- Step 2 -->
                                                    <h6></h6>
                                                    <fieldset>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h4 class="float-left ">Verify Email</h4>
                                                                <span>
                                                                    <input type="email" class="form-control required" id="emailAddress6" name="emailAddress" placeholder="john.smith@gmail.com">

                                                                </span>

                                                                <div class="otp-code-section">
                                                                    <span>1</span>
                                                                    <span>2</span>
                                                                    <span>3</span>
                                                                    <span>4</span>
                                                                    <span>5</span>
                                                                    <span>6</span>
                                                                    <a href="#">Resend OTP</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="form-group text-center">
                                                            <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-6 m-auto  mb-1">Verify</button>
                                                        </div>

                                                    </fieldset>

                                                    <!-- Step 3 -->
                                                    <h6></h6>
                                                    <fieldset>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h4 class="float-left ">Voucher(if any)</h4>
                                                                <span>
                                                                    <input type="text" class="form-control required" id="" name="" placeholder="">

                                                                </span>

                                                                <div class="member-type py-2">
                                                                    <h4 class="py-1 card-title">Membership Type</h4>
                                                                    <div class="col-md-7 m-auto">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <a href="#">
                                                                                    <div class="business-type">
                                                                                        <i class="ft-home"></i>
                                                                                        <h4>Business</h4>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                            <div class="col">
                                                                                <a href="#">
                                                                                    <div class="personal-type">
                                                                                        <i class="ft-user"></i>
                                                                                        <h4>Personal</h4>
                                                                                        <span class="check-active"><i class="ft-check"></i></span>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </fieldset>

                                            </div>
                                            <div class="form-group text-center mt-2">
                                                <div class="row">
                                                    <div class="col-md-4"></div>
                                                    <div class="col-md-6">
                                                        <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-6 mr-1 mb-1">Next</button></div>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Form wizard with step validation section end -->
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>
</div>
</div>
</div>

@include('frontend.registerfooter')