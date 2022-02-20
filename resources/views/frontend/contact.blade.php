
       @include("frontend.header")

      <div class="banner-area" id="banner-area" style="background-image:url('{{ url('assets/frontassets/images/contact-us.png')}}');">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col">
                  <div class="banner-heading">
                     <h1 class="banner-title">Contact Us</h1>
                     <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>contact</li>
                     </ol>
                  </div>
               </div>
               <!-- Col end-->
            </div>
            <!-- Row end-->
         </div>
         <!-- Container end-->
      </div>
      <!-- Banner area end-->
      <section class="main-container" id="main-container">

         <div class="container">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
             <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
            </div>
            @endif
            <div class="row text-center">
               <div class="col-md-12">
                  <h2 class="section-title"><span>Send Us Message</span>Contact Us</h2>
               </div>
            </div>
            <!-- Title row end-->
            <div class="row">
               <div class="col-lg-4">
                  <div class="ts-col-inner">
                     <div class="ts-contact-info box-border"><span class="ts-contact-icon float-left"><i class="icon icon-map-marker2"></i></span>
                        <div class="ts-contact-content">
                           <h3 class="ts-contact-title">Find Us</h3>
                           <p>1, Canada Square, Canary Wharf,  London, E14 5AB United Kingdom</p>
                        </div>
                        <!-- Contact content end-->
                     </div>
                     <!-- End Contact info 1-->
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="ts-col-inner">
                     <div class="ts-contact-info box-border"><span class="ts-contact-icon float-left"><i class="icon icon-phone3"></i></span>
                        <div class="ts-contact-content">
                           <h3 class="ts-contact-title">Call Us</h3>
                           <p>  (+ 44) 207 712 1576 </p>
                           <br> <br>
                        </div>
                        <!-- Contact content end-->
                     </div>
                     <!-- End Contact info 1-->
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="ts-col-inner">
                     <div class="ts-contact-info box-border"><span class="ts-contact-icon float-left"><i class="icon icon-envelope"></i></span>
                        <div class="ts-contact-content">
                           <h3 class="ts-contact-title">Mail Us</h3>
                           <p>support@kannexa.com</p>
                            <br> <br>
                        </div>
                        <!-- Contact content end-->
                     </div>
                     <!-- End Contact info 1-->
                  </div>
               </div>
            </div>
            <!-- Row End-->
         </div>
         <!-- container end-->
         <div class="gap-60"></div>
         <div class="ts-form" id="ts-form">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6">
                     <form class="contact-form"  action="{{ route('sendmail') }}" method="post">
                        @csrf
                        <div class="error-container"></div>
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <input class="form-control form-name" id="name" name="name" placeholder="Full Name" type="text" required="">
                              </div>
                           </div>
                           <!-- Col end-->
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <input class="form-control form-website" id="url" name="url" placeholder="Website" type="url" required="">
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <input class="form-control form-email" id="email" name="email" placeholder="Email" type="email" required="">
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <textarea class="form-control form-message required-field" id="message" placeholder="Comments" rows="8" name="comments"></textarea>
                              </div>
                           </div>
                           <!-- Col 12 end-->
                        </div>
                        <!-- Form row end-->
                        <div class="text-right">
                           <button class="btn btn-primary tw-mt-30" type="submit">Contact US</button>
                        </div>
                     </form>
                     <!-- Form end-->
                  </div>
                  <div class="col-lg-6">
                     <div class="map" id="map"></div>
                  </div>
               </div>
            </div>
         </div>
          <div class="gap-60"></div>
      </section>

      <!-- Footer start-->
      @include("frontend.footer")
      <!-- Footer end-->

