@include('frontend.registerheader')

 <section class="flexbox-container custom-flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-6 col-10 box-shadow-2 p-0 register-wrp register-step postcode-wrp" style="">
                        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                            <div class="card-header border-0 p-0">
                                <div class="text-center mb-1">
                                    <img style="max-width: 210px;" class="img-fluid" src="{{ url('assets/frontassets/register/app-assets/images/logo/kanexalogo/Kannexa new.png')}}" alt="branding logo">
                                </div>
                                <div class="font-medium-5  text-center py-0">
                                    Enter Home Postcode <i class="ft-info text-right"></i> 
                                </div>
                            </div>
                            <div class="card-content">

                                <div class="card-body verify-user text-center">
                                    <div class="col-md-3 m-auto text-center">
                                        <span class="avatar avatar-online"><img src="{{ url('assets/frontassets/register/app-assets/images/portrait/small/avatar-s-19.png')}}" alt="avatar"></span>
                                    </div>
                                    <h4 class="pt-2">Hello, John Smith</h4>
                                    <p>
                                        You are just three steps away from joining<br> the best banking community ever
                                    </p>

                                    <div class="row">
                                        <div class="col-md-6 m-auto">
                                            <h4 class="float-left ">Postcode</h4>
                                            <span>
                                                <input type="text" class="form-control required" id="" name="" placeholder="EN49TF">
                                            
                                            </span>                                                  
                                        </div>
                                        <div class="col-sm-12 mt-2">
                                            <div class="form-group text-center">
                                                <a href="{{route('stepfive')}}"><button type="button" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-6 m-auto mb-1">Find Address By Postcode</button></a>
                                            </div>
                                        </div>

                                    </div>
                            </div>
                            </div>
                        </div>
                    <!--Registor Step-->
                    </div>
                </div>
            </section>
@include('frontend.registerfooter')