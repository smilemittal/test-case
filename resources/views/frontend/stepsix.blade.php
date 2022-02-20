@include('frontend.registerheader')

  <section class="flexbox-container custom-flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-6 col-10 box-shadow-2 p-0 register-wrp register-step personaldetail-wrp" style="">
                        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                            <div class="card-header border-0 p-0">
                                <div class="text-center mb-1">
                                    <img style="max-width: 210px;" class="img-fluid" src="{{ url('assets/frontassets/register/app-assets/images/logo/kanexalogo/Kannexa new.png')}}" alt="branding logo">
                                </div>
                                <div class="font-medium-5  text-center py-0">
                                    Personal Details <i class="ft-info text-right"></i> 
                                </div>
                            </div>
                            <div class="card-content">

                                <div class="card-body verify-user text-center">
                                    <div class="col-md-3 m-auto text-center">
                                        <span class="avatar avatar-online"><img src="{{ url('assets/frontassets/register/app-assets/images/portrait/small/avatar-s-19.png')}}" alt="avatar"></span>
                                    </div>
                                    <div class="text-center col-md-6 m-auto" style="height: 36px;">
                                        <label for="files" class="btn"> <i class="ft-camera"></i>  Select Image</label>
                                        <input id="files" style="visibility:hidden;" type="file">
                                      </div>
                                    <h4 class="pt-2">Hello, John Smith</h4>
                                    <p>
                                        You are just three steps away from joining<br> the best banking community ever
                                    </p>

                                    <form class="form-horizontal" action="{{route('stepseven')}}" novalidate>
                                       
                                        
                                        <div class="form-group row position-relative has-icon-right">
                                          <label class="col-sm-3 label-control">Mobile Number</label>
                                          <div class="col-sm-8">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" id="" placeholder="" required="" aria-invalid="false">
                                                <div class="form-control-position">
                                                    <a href="#"><i class="la la-edit"></i></a>
                                                </div>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="form-group row position-relative has-icon-right">
                                            <label class="col-sm-3 label-control">Email Address</label>
                                            <div class="col-sm-8">
                                              <div class="position-relative">
                                                  <input type="text" class="form-control" id="" placeholder="daisy.potter@gmail.com" required="" aria-invalid="false">
                                                  <div class="form-control-position">
                                                      <a href="#"><i class="la la-edit"></i></a>
                                                  </div>
                                              </div>
                                            </div>
                                          </div>
                                          

                                          <div class="form-group row">
                                              <div class="col-md-10 text-left m-auto"> <h4 class="float-left w-100">Address <a class="float-right" href="#"><i class="la la-edit"></i></a></h4>
                                              </div>

                                              <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 label-control">House Number</label>
                                                    <div class="col-sm-8">
                                                      <div class="position-relative">
                                                        <input type="text" placeholder="55" id="" class="form-control">
                                                      </div>
                                                    </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 label-control">House Name</label>
                                                    <div class="col-sm-8">
                                                      <div class="position-relative">
                                                        <input type="text" id="" placeholder="4 pippin count" class="form-control">
                                                      </div>
                                                    </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 label-control">Address Info</label>
                                                    <div class="col-sm-8">
                                                      <div class="position-relative">
                                                        <input type="text" id="" placeholder="Apple Tree Gardens" class="form-control">
                                                      </div>
                                                    </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 label-control">Street</label>
                                                    <div class="col-sm-8">
                                                      <div class="position-relative">
                                                        <input type="text" id="" placeholder="Park road" class="form-control">
                                                      </div>
                                                    </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 label-control">City</label>
                                                    <div class="col-sm-8">
                                                      <div class="position-relative">
                                                        <select id="" name="priority" class="form-control">
                                                            <option value="low">New Barnet</option>
                                                            <option value="medium">Albania</option>
                                                            <option value="high">Algeria</option>
                                                          </select>
                                                    </div>
                                                    </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 label-control">Countery</label>
                                                    <div class="col-sm-8">
                                                      <div class="position-relative">
                                                        <select id="" name="priority" class="form-control">
                                                            <option value="low">London</option>
                                                            <option value="medium">Albania</option>
                                                            <option value="high">Algeria</option>
                                                          </select>
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
                                              <div class="col-sm-6">
                                                <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-sm-12 mb-1">Cancel</button>
                                              
                                              </div>
                                              <div class="col-sm-6">
                                                <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-sm-12 mb-1">Save</button>
                                          
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