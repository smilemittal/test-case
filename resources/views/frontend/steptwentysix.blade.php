@include('frontend.registerheader')

  <section class="flexbox-container custom-flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-lg-6 col-md-6 col-10 box-shadow-2 p-0 register-wrp register-step mobileregister" style="">
                            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                                <div class="card-header border-0 p-0">
                                    <div class="text-center mb-1">
                                        <img style="max-width: 210px;" class="img-fluid" src="{{ url('assets/frontassets/register/app-assets/images/logo/kanexalogo/Kannexa new.png')}}" alt="branding logo">
                                    </div>
                                    <div class="font-medium-5  text-center py-0">
                                        Register Mobile Verification 
                                    </div>
                                </div>
                                <div class="card-content">

                                    <div class="card-body">
                                        <form class="form-horizontal" action="{{route('stepthree')}}" novalidate>
                                              
                                              <div class="form-group row">
                                                <label class="col-sm-3 label-control">Countery Name</label>
                                                <div class="col-sm-8">
                                                    <div class="position-relative has-icon-left">
                                                        <input style="
                                                        padding: 0 0 0 37px;" type="text" id="timesheetinput2" class="form-control" placeholder="United Kingdom" name="projectname">
                                                        <div class="form-control-position">
                                                            

                                                            <img style="width: 28px;
                                                            height: 26px;
                                                            margin: -12px 0 0;" src="{{ url('assets/frontassets/images/flagimg.png')}}">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="form-group row">
                                                <label class="col-sm-3 label-control">Mobile Number</label>
                                                <div class="col-sm-8">
                                                  <div class="position-relative">                                                    
                                                    <input type="text" class="form-control international-inputmask" id="international-mask" placeholder="Phone Number" />  
                                                    <div class="form-control-position">
                                                        <i class="ft-smartphone"></i>
                                                    </div>
                                                </div>
                                                </div>
                                              </div>
                                              
                                              

                                              
                                              <div class="col-sm-8 ml-auto">
                                                <div class="form-group text-center mt-2">
                                                    <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-sm-9 mr-1 mb-1">Verify</button>
                                                </div>
                                              </div>
                                            

                                        </form>
                                    </div>
                                    

                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
@include('frontend.registerfooter')