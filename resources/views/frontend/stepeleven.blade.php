@include('frontend.registerheader')

      <section class="flexbox-container custom-flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-6 col-10 box-shadow-2 p-0 register-wrp register-step membership-detail-wrp" style="">
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
                                    

                                    <form class="form-horizontal" action="{{route('steptevele')}}" novalidate>                                           
                                        
                                        <div class="form-group row position-relative has-icon-right">
                                          <label class="col-sm-3 label-control">Business Name</label>
                                          <div class="col-sm-8">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" id="" placeholder="Business Name" required="" aria-invalid="false">
                                                <div class="form-control-position">
                                                    <a href="#"><i class="ft-briefcase"></i></a>
                                                </div>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="form-group row position-relative has-icon-right">
                                            <label class="col-sm-3 label-control">Contact Number</label>
                                            <div class="col-sm-8">
                                              <div class="position-relative">
                                                  <input type="text" class="form-control" id="" placeholder="Contact Number" required="" aria-invalid="false">
                                                  <div class="form-control-position">
                                                      <a href="#"><i class="ft-phone"></i></a>
                                                  </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group row position-relative has-icon-right">
                                            <label class="col-sm-3 label-control">Contact Email</label>
                                            <div class="col-sm-8">
                                              <div class="position-relative">
                                                  <input type="text" class="form-control" id="" placeholder="Contact Email" required="" aria-invalid="false">
                                                  <div class="form-control-position">
                                                      <a href="#"><i class="ft-mail"></i></a>
                                                  </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group row position-relative has-icon-right">
                                            <label class="col-sm-3 label-control">Website</label>
                                            <div class="col-sm-8">
                                              <div class="position-relative">
                                                  <input type="text" class="form-control" id="" placeholder="Website" required="" aria-invalid="false">
                                                  <div class="form-control-position">
                                                      <a href="#"><i class="ft-globe"></i></a>
                                                  </div>
                                              </div>
                                            </div>
                                          </div>
                                          

                                          <div class="form-group row">
                                              <div class="col-md-10 text-left m-auto py-1"> <h4 class="float-left w-100">Add Address  <a class="float-right" href="#"><i class="ft-map-pin"></i></a></h4>
                                              </div>

                                              <div class="col-md-10 text-left m-auto">
                                                <div class="form-group">
                                                    <p class="text-muted">Private Address</p>
                                                    <textarea class="form-control" id="descTextarea" rows="3" placeholder="4 Pippin Court Apple Tree Gardens 55 Park Road New Barnet London EN9TF United Kingdom
                                                    "></textarea>
                                                
                                                  </div>
                                              </div>
                                              <div class="col-md-10 text-left m-auto">
                                                <div class="form-group">
                                                    <p class="text-muted">Shipping Address</p>
                                                    <textarea class="form-control" id="descTextarea" rows="3" placeholder="4 Pippin Court Apple Tree Gardens 55 Park Road New Barnet London EN9TF United Kingdom
                                                    "></textarea>
                                                
                                                  </div>
                                              </div>
                                           </div>
                                        
                                        <div class="col-sm-12 ml-auto text-center m-0">
                                          <div class="form-group text-center mt-2 row">
                                            <label class="col-sm-3 label-control"></label>
                                              <div class="col-sm-8">
                                                <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-sm-12 mb-1">Next <i class="ft-arrow-right"></i></button>
                                              
                                              </div>
                                              
                                            </div>
                                        </div>
                                      

                                  </form>
                            </div>
                            </div>
                        </div>
                    <!--Registor Step-->
                    </div>
                </div>
            </section>
@include('frontend.registerfooter')