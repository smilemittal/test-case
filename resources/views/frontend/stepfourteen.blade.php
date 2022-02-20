@include('frontend.registerheader')

   <section class="flexbox-container custom-flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-6 col-10 box-shadow-2 p-0 register-wrp register-step bankaccountinformation-wrp" style="">
                        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                            <div class="card-header border-0 p-0">
                                <div class="text-center mb-1">
                                    <img style="max-width: 210px;" class="img-fluid" src="{{ url('assets/frontassets/register/app-assets/images/logo/kanexalogo/Kannexa new.png')}}" alt="branding logo">
                                </div>
                                <div class="font-medium-5  text-center py-0">
                                    Bank Account Information <i class="ft-info text-right"></i> 
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body verify-user text-center">
                                   <div class="card">
                                       <div class="card-body">
                                            <form class="form-horizontal" action="{{route('stepfifteen')}}" novalidate>                                           
                                      
                                                        <div class="form-group row">                                                                
                                                            <div class="col-sm-12">
                                                                <div class="member-type py-2">                                                                   
                                                                    <div class="col-md-11 m-auto">
                                                                        
                                                                        <div class="row pb-1">
                                                                            <div class="col-sm-12">
                                                                                <h3>Upload ID Proofes <i class="ft-info text-right s-20"></i></h3>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                   
                                                                                    <select id="companyinput5" name="interested" class="form-control">
                                                                                        <option value="none" selected="" disabled="">Identity Proof</option>
                                                                                        <option value="design">Driving Licence</option>
                                                                                        <option value="development">Voter Id </option>
                                                                                        <option value="illustration">Aadhar Card</option>
                                                                                        <option value="branding">Pancard</option>
                                                                                        <option value="video">Passport</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row text-center justify-content-center mt-2">
                                                                            <div class="col-sm-4 mb-1">
                                                                                <a href="#">
                                                                                <div class="business-type gray-light h-100">
                                                                                    <i class="ft-camera"></i>
                                                                                    <h4>Camera</h4>
                                                                                    
                                                                                </div>
                                                                            </a>
                                                                            </div>
                                                                            <div class="col-sm-4 mb-1">
                                                                                <a href="#">
                                                                                <div class="personal-type gray-light h-100">
                                                                                    <i class="ft-image"></i>
                                                                                    
                                                                                    <h4>Gallery</h4>
                                                                                   
                                                                                </div>
                                                                            </a>
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