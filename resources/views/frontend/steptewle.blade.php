@include('frontend.registerheader')

   <section class="flexbox-container custom-flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-6 col-10 box-shadow-2 p-0 register-wrp register-step openbankaccount-wrp" style="">
                        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                            <div class="card-header border-0 p-0">
                                <div class="text-center mb-1">
                                    <img style="max-width: 210px;" class="img-fluid" src="{{ url('assets/frontassets/register/app-assets/images/logo/kanexalogo/Kannexa new.png')}}" alt="branding logo">
                                </div>
                                
                            </div>
                            <div class="card-content">
                                <div class="card-body verify-user text-center">
                                   <div class="card">
                                       <div class="card-body">
                                            <form class="form-horizontal" action="{{route('stepthirteen')}}">                                           
                                      
                                                        <div class="form-group row">                                                                
                                                            <div class="col-sm-12">
                                                                <div class="member-type py-2">                                                                   
                                                                    <div class="col-md-11 m-auto">
                                                                        <div class="row">
                                                                            <div class="col-sm-4 mb-1">
                                                                                <a href="#">
                                                                                <div class="business-type gray-light h-100">
                                                                                    <i class="ft-user"></i>
                                                                                    <h4>Membership Business Information</h4>
                                                                                    <span class="check-active">
                                                                                        <fieldset>
                                                                                            <input type="radio" name="input-radio-3" id="Contact">                                                                                                
                                                                                        </fieldset>
                                                                                    </span>
                                                                                </div>
                                                                            </a>
                                                                            </div>
                                                                            <div class="col-sm-4 mb-1">
                                                                                <a href="#">
                                                                                <div class="personal-type gray-light h-100">
                                                                                    <i class="ft-home"></i>
                                                                                    
                                                                                    <h4>Account Holder Personal Information</h4>
                                                                                    
                                                                                    <span class="check-active">
                                                                                        <fieldset>
                                                                                            <input type="radio" name="input-radio-3" id="Private">                                                                                                
                                                                                        </fieldset>
                                                                                    </span>
                                                                                </div>
                                                                            </a>
                                                                            </div>
                                                                            <div class="col-sm-4 mb-1">
                                                                                <a href="#">
                                                                                <div class="business-type gray-light h-100">
                                                                                    <i class="ft-file-text"></i>
                                                                                    <h4>Bank Account Information</h4>
                                                                                    <span class="check-active">
                                                                                        <fieldset>
                                                                                            <input type="radio" name="input-radio-3" id="Invoice">                                                                                                
                                                                                        </fieldset>
                                                                                    </span>
                                                                                </div>
                                                                            </a>
                                                                            </div>
                                                                           
                                                                        </div>
                                                                        <div class="row py-1">
                                                                            <div class="col-sm-12">
                                                                                <img class="img-fluid pb-2" style="width: 50%;" src="{{ url('assets/frontassets/images/bankimg.png')}}">
                                                                                <h3>Banking at your fingertipsn <i class="ft-info text-right s-20"></i></h3>
                                                                                <p>Yoour Sort Code, Accounting Number and IBAN Issued in minutes</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="custom-control custom-checkbox mr-sm-2">
                                                                                  <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                                                                  <label class="custom-control-label" for="customControlAutosizing">Open Bank Account</label>
                                                                                </div>
                                                                              </div>
                                                                              <div class="col-md-6">
                                                                                <div class="custom-control custom-checkbox mr-sm-2">
                                                                                  <input type="checkbox" class="custom-control-input" id="customControlAutosizing1">
                                                                                  <label class="custom-control-label" for="customControlAutosizing1">Order Card</label>
                                                                                </div>
                                                                              </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    
                                                    <div class="col-sm-12 ml-auto text-center m-0">
                                                        <div class="form-group text-center mt-2 row">
                                                        <label class="col-sm-2 label-control"></label>
                                                            <div class="col-sm-8">
                                                            <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-sm-12 mb-1">Send </button>
                                                            
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                            </form>
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