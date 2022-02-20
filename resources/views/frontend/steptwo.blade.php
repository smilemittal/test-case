@include('frontend.registerheader')

 <section class="flexbox-container custom-flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-6 col-10 box-shadow-2 p-0 register-wrp register-step userregister" style="">
                        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                            <div class="card-header border-0 p-0">
                                <div class="text-center mb-1">
                                    <img style="max-width: 210px;" class="img-fluid" src="{{ url('assets/frontassets/register/app-assets/images/logo/kanexalogo/Kannexa new.png')}}" alt="branding logo">
                                </div>
                                <div class="font-medium-5  text-center py-0">
                                    
                                </div>
                            </div>
                            <div class="card-content">

                                <div class="card-body">
                                    <form class="form-horizontal" action="{{route('steptwentysix')}}" novalidate>

                                        
                                        
                                          <div class="form-group row">
                                            <label class="col-sm-3 label-control">Title</label>
                                            <div class="col-sm-3">
                                                <div class="position-relative">
                                                    <select id="" name="priority" class="form-control">
                                                        <option value="low">Mrs</option>
                                                        <option value="Mis">Mis</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                          </div>
                                          
                                          <div class="form-group row">
                                            <label class="col-sm-3 label-control">First Name</label>
                                            <div class="col-sm-8">
                                              <div class="position-relative">
                                                <input type="text" id="" class="form-control">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-3 label-control">Middle Name</label>
                                            <div class="col-sm-8">
                                              <div class="position-relative">
                                                <input type="text" id="" class="form-control">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-3 label-control">Last Name</label>
                                            <div class="col-sm-8">
                                              <div class="position-relative">
                                                <input type="text" id="" class="form-control">
                                              </div>
                                            </div>
                                          </div>
                                          
                                          <div class="form-group row">
                                            <label class="col-sm-3 label-control">Email</label>
                                            <div class="col-sm-8">
                                              <div class="position-relative">
                                                <input type="email" id="" class="form-control">
                                              </div>
                                            </div>
                                          </div>

                                          <div class="form-group row">
                                            <label class="col-sm-3 label-control">Password</label>
                                            <div class="col-sm-8">
                                              <div class="position-relative">
                                                <input type="password" id="" class="form-control">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-3 label-control">Re-Enter Password</label>
                                            <div class="col-sm-8">
                                              <div class="position-relative">
                                                <input type="password" id="" class="form-control">
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-3 label-control">Countery of Residence</label>
                                            <div class="col-sm-8">
                                              <div class="position-relative">
                                                <select id="" name="priority" class="form-control">
                                                    <option value="low">Afghanistan</option>
                                                    <option value="medium">Albania</option>
                                                    <option value="high">Algeria</option>
                                                  </select>
                                              </div>
                                            </div>
                                          </div>

                                          
                                          <div class="col-sm-8 ml-auto">
                                            <div class="form-group text-center mt-2">
                                                <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-sm-9 mr-1 mb-1">Save</button>
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