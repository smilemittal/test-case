@include('frontend.registerheader')

     <section class="flexbox-container custom-flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-6 col-10 box-shadow-2 p-0 register-wrp register-step membership-business-detail-wrp" style="">
                        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                            <div class="card-header border-0 p-0">
                                <div class="text-center mb-1">
                                    <img style="max-width: 210px;" class="img-fluid" src="{{ url('assets/frontassets/register/app-assets/images/logo/kanexalogo/Kannexa new.png')}}" alt="branding logo">
                                </div>
                                <div class="font-medium-5  text-center py-0">
                                    Membership business details <i class="ft-info text-right"></i> 
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body verify-user text-center">
                                   <div class="card">
                                       <div class="card-body">
                                            <form class="form-horizontal" action="{{route('stepnine')}}" novalidate>                                           
                                      
                                                        <div class="form-group row">
                                                            <div class="col-md-11 text-left m-auto p-0"> <h4 class="float-left w-100">Address Type</h4>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="member-type py-2">                                                                   
                                                                    <div class="col-md-11 m-auto">
                                                                        <div class="row">
                                                                            <div class="col-sm-4 mb-1">
                                                                                <a href="#">
                                                                                <div class="business-type gray-light">
                                                                                    <i class="ft-user"></i>
                                                                                    <h4>Contact</h4>
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
                                                                                <div class="personal-type gray-light">
                                                                                    <i class="ft-home"></i>
                                                                                    
                                                                                    <h4>Private</h4>
                                                                                    
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
                                                                                <div class="business-type gray-light">
                                                                                    <i class="ft-file-text"></i>
                                                                                    <h4>Invoice</h4>
                                                                                    <span class="check-active">
                                                                                        <fieldset>
                                                                                            <input type="radio" name="input-radio-3" id="Invoice">                                                                                                
                                                                                        </fieldset>
                                                                                    </span>
                                                                                </div>
                                                                            </a>
                                                                            </div>
                                                                            <div class="col-sm-4 mb-1">
                                                                                <a href="#">
                                                                                <div class="personal-type gray-light">
                                                                                    <i class="ft-layout"></i>
                                                                                    <h4>Shipping</h4>
                                                                                    <span class="check-active">
                                                                                        <fieldset>
                                                                                            <input type="radio" name="input-radio-3" id="Shipping">                                                                                                
                                                                                        </fieldset>
                                                                                    </span>
                                                                                </div>
                                                                            </a>
                                                                            </div>
                                                                            <div class="col-sm-4 mb-1">
                                                                                <a href="#">
                                                                                <div class="business-type gray-light">
                                                                                    <i class="ft-save"></i>
                                                                                    <h4>Correspondence</h4>
                                                                                    <span class="check-active">
                                                                                        <fieldset>
                                                                                            <input type="radio" name="input-radio-3" id="Correspondence">                                                                                                
                                                                                        </fieldset>
                                                                                    </span>
                                                                                </div>
                                                                            </a>
                                                                            </div>
                                                                            <div class="col-sm-4 mb-1">
                                                                                <a href="#">
                                                                                <div class="personal-type gray-light">
                                                                                    <i class="ft-user"></i>
                                                                                    <h4>Other</h4>
                                                                                    <span class="check-active">
                                                                                        <fieldset>
                                                                                            <input type="radio" name="input-radio-3" id="Other">                                                                                                
                                                                                        </fieldset>
                                                                                    </span>
                                                                                    
                                                                                </div>
                                                                            </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            <div class="col-md-12">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 label-control">Postcode</label>
                                                                <div class="col-sm-8">
                                                                    <div class="position-relative">
                                                                    <input type="text" id="" placeholder="EN49TF" class="form-control">
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                    <div class="col-sm-12 ml-auto text-center m-0">
                                                        <div class="form-group text-center mt-2 row">
                                                        <label class="col-sm-3 label-control"></label>
                                                            <div class="col-sm-8">
                                                            <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-sm-12 mb-1">Find Address By Postcode </button>
                                                            
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