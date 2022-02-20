@include('frontend.registerheader')

   <section class="flexbox-container custom-flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-6 col-10 box-shadow-2 p-0 register-wrp register-step bankaccountselfi-wrp" style="">
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
                                            <form class="form-horizontal" action="{{route('steptwentythree')}}" novalidate>                                           
                                      
                                                        <div class="form-group row">                                                                
                                                            <div class="col-sm-12">
                                                                <div class="member-type py-2">                                                                   
                                                                    <div class="col-md-11 m-auto">
                                                                        
                                                                        <div class="row pb-1">
                                                                            <div class="col-sm-12">
                                                                                <h3>Take Selfie <i class="ft-info text-right s-20"></i></h3>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="selfystric gray-light">
                                                                                    <img src="{{ url('assets/frontassets/register/app-assets/images/ico/selfie.svg')}}">
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
                                                                           
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-6 m-auto mb-1">Next</button>
                                                            
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