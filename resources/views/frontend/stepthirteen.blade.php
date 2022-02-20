@include('frontend.registerheader')

    <section class="flexbox-container custom-flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-6 col-10 box-shadow-2 p-0 register-wrp register-step bankaccounttype-wrp" style="">
                        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                            <div class="card-header border-0 p-0">
                                <div class="text-center mb-1">
                                    <img style="max-width: 210px;" class="img-fluid" src="{{ url('assets/frontassets/register/app-assets/images/logo/kanexalogo/Kannexa new.png')}}" alt="branding logo">
                                </div>
                                <div class="font-medium-5  text-center py-0">
                                    Select bank account type <i class="ft-info text-right"></i> 
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body verify-user text-center">
                                   <div class="card">
                                       <div class="card-body">
                                            <form class="form-horizontal" action="{{route('stepfourteen')}}" novalidate>                                           
                                      
                                                        <div class="form-group row">                                                                
                                                            <div class="col-sm-12">
                                                                <div class="member-type py-2">                                                                   
                                                                    <div class="col-md-11 m-auto">
                                                                        <div class="row text-center justify-content-center">
                                                                            <div class="col-sm-4 mb-1">
                                                                                <a href="#">
                                                                                <div class="business-type gray-light h-100">
                                                                                    <i class="ft-user"></i>
                                                                                    <h4>Business Bank Account</h4>
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
                                                                                    
                                                                                    <h4>Personal Bank Account</h4>
                                                                                    
                                                                                    <span class="check-active">
                                                                                        <fieldset>
                                                                                            <input type="radio" name="input-radio-3" id="Private">                                                                                                
                                                                                        </fieldset>
                                                                                    </span>
                                                                                </div>
                                                                            </a>
                                                                            </div>
                                                                            
                                                                           
                                                                        </div>
                                                                        <div class="row py-1">
                                                                            <div class="col-sm-12">
                                                                                <h3>KYC details of Account Holder <i class="ft-info text-right s-20"></i></h3>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="position-relative has-icon-right">
                                                                                    <input type="date" id="timesheetinput3" class="form-control" name="date">
                                                                                    <div class="form-control-position">
                                                                                        <i class="ft-calendar"></i>
                                                                                    </div>
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
                                                            <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-sm-12 mb-1">Next </button>
                                                            
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