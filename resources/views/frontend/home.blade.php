

       @include("frontend.header")

      <div class="carousel slide" id="main-slide" data-ride="carousel">
         <!-- Indicators-->
         <ol class="carousel-indicators visible-lg visible-md">
            <li class="active" data-target="#main-slide" data-slide-to="0"></li>
            <li data-target="#main-slide" data-slide-to="1"></li>
            <li data-target="#main-slide" data-slide-to="2"></li>
         </ol>
         <!-- Indicators end-->
         <!-- Carousel inner-->
         <div class="carousel-inner">
            <div class="carousel-item active" style="background-image:url('{{ url('assets/frontassets/images/slider/bg1.jpg')}}')">
               <div class="container">
                  <div class="slider-content text-left">
                     <div class="row">
                        <div class="col-md-12">
                           <h2 class="slide-title title-light"></h2>
                           <h3 class="slide-sub-title">Click, click, send. That’s it.</h3>
                           <!-- <p class="slider-description lead">Nobody’s more committed to connecting you with the exceptional <br> top talents with the right fit
                              for your business than us.</p> -->
                           <p><a class="slider btn btn-primary" href="#">Our Services</a><a class="slider btn btn-border" href="#">Contact Us</a></p>
                        </div>
                        
                     </div>
                     <!-- Col end-->
                  </div>
                  <!-- Slider content end-->
               </div>
               <!-- Container end-->
            </div>
            <!-- Carousel item 1 end-->
            <div class="carousel-item" style="background-image:url('{{ url('assets/frontassets/images/slider/background2.jpg')}}')">
               <div class="container">
                  <div class="slider-content text-center">
                     <div class="col-md-12">
                        <h3 class="slide-sub-title">Sending your money to almost anywhere is quick and easy.
                        </h3>
                        <p><a class="slider btn btn-primary" href="#">Our Services</a><a class="slider btn btn-border" href="#">Contact Us</a></p>
                     </div>
                     <!-- Col end-->
                  </div>
                  <!-- Slider content end-->
               </div>
               <!-- Container end-->
            </div>
            <!-- Carousel item 1 end-->
            <div class="carousel-item" style="background-image:url('{{ url('assets/frontassets/images/slider/bg3.jpg')}}')">
               <div class="container">
                  <div class="slider-content text-right">
                     <div class="col-md-12">
                        <h2 class="slide-title title-light"></h2>
                        <h3 class="slide-sub-title">Online Payment - A Safe Place In An Unsafe World!</h3>
                        <!-- <p class="slider-description lead">Nobody’s more committed to connecting you with the exceptional <br> top talents with the right fit
                           for your business than us.</p> -->
                        <p><a class="slider btn btn-primary" href="#">Our Services</a><a class="slider btn btn-border" href="#">Contact Us</a></p>
                     </div>
                     <!-- Col end-->
                  </div>
                  <!-- Slider content end-->
               </div>
               <!-- Container end-->
            </div>
            <!-- Carousel item 1 end-->
            <div class="carousel-item" style="background-image:url('{{ url('assets/frontassets/images/slider/bg4.jpg')}}')">
               <div class="container">
                  <div class="slider-content text-left">
                     <div class="col-md-12">
                        <h2 class="slide-title title-light"></h2>
                        <h3 class="slide-sub-title">Pay and get paid instantly.</h3>
                        <!-- <p class="slider-description lead">Nobody’s more committed to connecting you with the exceptional <br> top talents with the right fit
                           for your business than us.</p> -->
                        <p><a class="slider btn btn-primary" href="#">Our Services</a><a class="slider btn btn-border" href="#">Contact Us</a></p>
                     </div>
                     <!-- Col end-->
                  </div>
                  <!-- Slider content end-->
               </div>
               <!-- Container end-->
            </div>
            
         </div>
         <!-- Carousel inner end-->
         <!-- Controllers--><a class="left carousel-control carousel-control-prev" href="#main-slide" data-slide="prev"><span><i class="fa fa-angle-left"></i></span></a>
         <a class="right carousel-control carousel-control-next" href="#main-slide" data-slide="next"><span><i class="fa fa-angle-right"></i></span></a>
      </div>
      <!-- Carousel end-->

      <section class="call-to-action">
         <div class="container">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
             <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
            </div>
            @endif
            <div class="row text-center">
               <div class="col-lg-12">

                  <div class="post">
                     <div class="post-quote-wrapper">
                        <div class="post-quote-content text-center">
                           <div class="entry-header">
                              <h2 class="entry-title text-uppercase"><a href="#">get free quote</a></h2>
                           </div>
                           <div class="meta-author"><a href="#">Let Us Help You Find the Coverage You Need</a></div>
                           <div class="post-meta">
                              <p class="text-white">
                                 Get ready to start your exciting jouraney.<br>
                                 Our agency wil lead you through the amazing digital world
                              </p>
                           </div>
                           <!-- Post meta end-->
                           <form method="post" action="{{ route('getquotedetails') }}">
                           @csrf
                           <div class="row justify-content-center">
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <input class="form-control form-name" id="name" name="name" placeholder="Full Name" type="text" required="">
                                 </div>
                              </div>
                              <!-- Col end-->
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <input class="form-control form-email" id="email" name="email" placeholder="Email" type="email" required="">
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <input class="form-control form-phone" id="tel" name="tel" placeholder="Phone" type="tel" required="">
                                 </div>
                              </div>
                              
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <select class="custom-select form-control" id="inlineFormCustomSelect" name="businesstype">
                                       <option selected>Select Business Type</option>
                                       <option value="One">One</option>
                                       <option value="Two">Two</option>
                                       <option value="Three">Three</option>
                                     </select>
                                 </div>
                              </div>
                              <div class="text-right">
                                 <button class="btn btn-primary tw-mt-30 mt-0" type="submit">Get Quote</button>
                              </div>
                              
                              <!-- Col 12 end-->
                           </div>
                           </form>
                        </div>
                     </div>
                  </div>

               </div>
               <!-- Col end-->
            </div>
            <!-- Row end-->
         </div>
         <!-- container end-->
      </section>
      <section class="ts-intro about-pattern" id="ts-intro">
         <div class="container">
            <div class="row">
               <div class="col-lg-7">
                  <h2 class="column-title"><span>About Kannexa</span> We assure you that the transfer of money is easy, safe, secure, and the best rates.</h2>
                  <p class="intro-desc">
                     We provide the best money transfer service with the best rates. We can transfer out money world of like different countries. We can provide different types of features like Money transfer, Exchange Rates, Compare Rates & Membership Type. Here you can transfer money safely and securely. 
                  </p>
                  <p>We provide innovating payments and software solutions all under one shelter to help different enterprise businesses simplify commerce and improve their vision of success. </p>
                  <div class="gap-40"></div>
                  
                  <!-- Content Row end-->
               </div>
               <!-- Col end-->
               <div class="col-lg-5">
                  <div class="intro-image-box">
                     <img class="img-fluid" src="{{ url('assets/frontassets/images/intro-img.jpg')}}" alt="">
                     <!-- <div class="intro-image-content">
                        
                     </div> -->
                     <div class="intro-shape"></div>
                  </div>
                  <!-- Intro image box end-->
               </div>
               <!-- Col end-->
            </div>
            <!-- Content row 1 end-->
         </div>
         <!-- Container end-->
      </section>
      <!-- Intro area end-->

      <section class="ts-services solid-bg" id="ts-services">
         <div class="container">
            <div class="row text-left">
               <div class="col-lg-12">
                  <h2 class="section-title border-title-left">Our Best Services <span class="section-title-tagline title-light">What We Do</span></h2>
               </div>
            </div>
            <!-- Title row end-->
            <div class="row">
               <div class="col-lg-12">
                  <div class="featured-tab">
                     <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active animated fadeIn" href="#tab_one" data-toggle="tab"><span class="tab-head"><span><i class="icon icon-money"></i></span><span class="tab-text-title">Money Transfer</span></span></a></li>
                        <!-- list 1 end-->
                        <li class="nav-item"><a class="nav-link animated fadeIn" href="#tab_two" data-toggle="tab"><span class="tab-head"><span><i class="icon icon-loan"></i></span><span class="tab-text-title">Exchange Rates</span></span></a></li>
                        <!-- list 2 end-->
                        <li class="nav-item"><a class="nav-link animated fadeIn" href="#tab_three" data-toggle="tab"><span class="tab-head"><span><i class="icon icon-savings"></i></span><span class="tab-text-title">Compare Rates</span></span></a></li>
                        <!-- list 3 end-->
                        <li class="nav-item"><a class="nav-link animated fadeIn" href="#tab_four" data-toggle="tab"><span class="tab-head"><span><i class="icon icon-consult"></i></span><span class="tab-text-title">Membership Type</span></span></a></li>
                        <!-- list 4 end-->
                     </ul>
                     <!-- Nav-tabs end-->
                     <div class="tab-content">
                        <div class="tab-pane active animated fadeInRight" id="tab_one">
                           <div class="row">
                              <div class="col-lg-4 align-self-center">
                                 <div class="bg-contain-verticle" style="background-image:url('{{ url('assets/frontassets/images/tabs/tab-shape.png')}}')">
                                    <img class="img-center img-fluid" src="{{ url('assets/frontassets/images/tabs/img1.jpg')}}" alt="">
                                 </div>
                              </div>
                              <!-- Col end-->
                              <div class="col-lg-8">
                                 <div class="tab-content-info">
                                    <h3 class="tab-content-title">Solution for many transfer</h3>
                                    <p>
                                       We can transfer out money world of like USA , UK
                                    </p><a class="btn-light" href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                 </div>
                                 <!-- Tab content info end-->
                              </div>
                              <!-- Col end-->
                           </div>
                           <!-- Row end-->
                        </div>
                        <!-- Tab pane 1 end-->
                        <div class="tab-pane animated fadeInRight" id="tab_two">
                           <div class="row">
                              <div class="col-lg-8">
                                 <div class="tab-content-info">
                                    <h3 class="tab-content-title">We Provide Best Exchange Rate.</h3>
                                    <p>
                                       We can offer our best exchange rates to our customers, then other services.
                                    </p><a class="btn-light" href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                 </div>
                                 <!-- Tab content info end-->
                              </div>
                              <!-- Col end-->
                              <div class="col-lg-4 align-self-center">
                                 <div class="bg-contain-verticle align-self-center" style="background-image:url('{{ url('assets/frontassets/images/tabs/tab-shape.png')}}')">
                                    <img class="img-center img-fluid" src="{{ url('assets/frontassets/images/tabs/img2.png')}}" alt="">
                                 </div>
                              </div>
                              <!-- Col end-->
                           </div>
                           <!-- Row end-->
                        </div>
                        <!-- Tab pane 2 end-->
                        <div class="tab-pane animated fadeInRight" id="tab_three">
                           <div class="row">
                              <div class="col-lg-4 align-self-center">
                                 <div class="bg-contain-verticle" style="background-image:url('{{ url('assets/frontassets/images/tabs/tab-shape.png')}}');">
                                    <img class="img-center img-fluid" src="{{ url('assets/frontassets/images/tabs/img3.jpg')}}" alt="">
                                 </div>
                              </div>   
                              <!-- Col end-->
                              <div class="col-lg-8">
                                 <div class="tab-content-info">
                                    <h3 class="tab-content-title">We Compare For You.</h3>
                                    <p>
                                       We give all the possible rates of different services, we compare & choose which is the best fit for you.
                                    </p>
                                    <a class="btn-light" href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                 </div>
                                 <!-- Tab content info end-->
                              </div>
                              <!-- Col end-->
                           </div>
                           <!-- Row end-->
                        </div>
                        <!-- Tab pane 3 end-->
                        <div class="tab-pane animated fadeInRight" id="tab_four">
                           <div class="row">
                              <div class="col-lg-8">
                                 <div class="tab-content-info">
                                    <h3 class="tab-content-title">We Provide membership</h3>
                                    <p>
                                       You can create an own account as a business user or personal user and can transfer money directly from your account.
                                    </p><a class="btn-light" href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                 </div>
                                 <!-- Tab content info end-->
                              </div>
                              <!-- Col end-->
                              <div class="col-lg-4 align-self-center">
                                 <div class="bg-contain-verticle" style="background-image:url('{{ url('assets/frontassets/images/tabs/tab-shape.png')}}');">
                                    <img class="img-center img-fluid" src="{{ url('assets/frontassets/images/tabs/img4.jpg')}}" alt="">
                                 </div>
                              </div>
                              <!-- Col end-->
                           </div>
                           <!-- Row end-->
                        </div>
                        <!-- Tab pane 3 end-->
                     </div>
                     <!-- tab content-->
                     <div class="gap-60"></div>
                     <div class="text-center"><a class="btn btn-primary" href="#"> Check More Services</a></div>
                  </div>
                  <!-- Schedule tab end-->
               </div>
               <!-- Col end-->
            </div>
            <!-- Content row end-->
         </div>
         <!-- Container end-->
      </section>
      <!-- Service end-->

      <section class="integrate-website-section pb-0">
         <div class="container">
           <div class="row text-center">
             <div class="col-md-12">
               <div class="title-wrap">
                 <h2 class="row-title d-flex justify-content-center">Features</h2>
                
               </div>
             </div>
           </div>
           <div class="row facts-wrapper text-center feature-blog">
            <div class="col-md-4">
               <div class="ts-facts"><span class="facts-icon"><img src="{{ url('assets/frontassets/images/icons/preferwhere.png')}}"></span>
                  <div class="ts-facts-content">
                   
                     <h4><span class="tab-text-title">Prefer Where</span></h4>
                     <p class="facts-desc">You can send to any part of the world like USA, UK on a single click.</p>
                  </div>
               </div>
               <!-- Facts end-->
            </div>
            <!-- Col 1 end-->
            <div class="col-md-4">
               <div class="ts-facts"><span class="facts-icon"><img src="{{ url('assets/frontassets/images/icons/namewhi.png')}}"></span>
                  <div class="ts-facts-content">
                     <h4><span class="tab-text-title">Name Who</span></h4>
                     
                     <p class="facts-desc">Select whom do you want to pay and add  like a payee for a quick transfer.</p>
                  </div>
               </div>
               <!-- Facts end-->
            </div>
            <!-- Col 1 end-->
            <div class="col-md-4">
               <div class="ts-facts facts-col"><span class="facts-icon"><img src="{{ url('assets/frontassets/images/icons/selecthow.png')}}"></span>
                  <div class="ts-facts-content">
                     <h4><span class="tab-text-title">Select How</span></h4>
                     
                     <p class="facts-desc">Choose different paying methods like debit card, credit card, cash.</p>
                  </div>
               </div>
               <!-- Facts end-->
            </div>
            <!-- Col 1 end-->
         </div>
         </div>
      </section>
      
      <!-- Section chart end-->

      <section class="ts-featured-cases">
         <div class="container">
            <div class="section-title-vertical">
               <h2 class="section-title">Benefits of Kannexa</h2>
            </div>
            <!-- Title row end-->
            <div class="row">
               <div class="owl-carousel owl-theme featured-cases-slide" id="featured-cases-slide">
                  <div class="item">
                     <div class="featured-projects-content row">
                        <div class="featured-projects-text float-left">
                           <h2 class="column-title"> Benefits of Kannexa</h2>
                           <ul class="ts-list">

                              <li>Safe</li>
                              <li>Secure</li>
                              <li>Greate Exchange Rate</li>
                              <li>Cheper transfer fees</li>
                              <li>Quick transfer speeds</li>
                              <li>Lock in exchange routes upto 6 month.</li>
                              <li>Select one pay, and transfer quickly</li>
                           </ul>
                           <a class="btn btn-primary" href="#"> Read More</a></p>
                        </div>
                        <div class="features-slider-img float-right col-md-6 align-self-center">
                           <img class="img-fluid" src="{{ url('assets/frontassets/images/benefitskannexa.jpg')}}" alt="">
                        </div>
                     </div>
                  </div>
                  <!-- Item 1 end-->
                  <!-- <div class="item">
                     <div class="featured-projects-content">
                        <div class="featured-projects-text pull-left">
                           <h2 class="column-title"><span>Tax Planning</span>Alpha Century Software Inc.</h2>
                           <p class="intro-desc">A business strategy is the means by which it sets out to achieve its desired ends. You have ideas,
                              goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like
                              you and make your dream come true.</p>
                           <p><a class="btn btn-primary" href="#"> Read More</a></p>
                        </div>
                        <div class="features-slider-img pull-right">
                           <img src="images/slider-small/featured-slider2.jpg" alt="">
                        </div>
                     </div>
                  </div> -->
                  <!-- Item 2 end-->
                  <!-- <div class="item">
                     <div class="featured-projects-content">
                        <div class="featured-projects-text float-left">
                           <h2 class="column-title"><span>Business Loan</span>Spider Microsystem</h2>
                           <p class="intro-desc">A business strategy is the means by which it sets out to achieve its desired ends. You have ideas,
                              goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like
                              you and make your dream come true.</p>
                           <p><a class="btn btn-primary" href="#"> Read More</a></p>
                        </div>
                        <div class="features-slider-img float-right">
                           <img class="img-fluid" src="images/slider-small/featured-slider3.jpg" alt="">
                        </div>
                     </div>
                  </div> -->
                  <!-- Item 3 end-->
               </div>
               <!-- Featured Projects slider end-->
            </div>
            <!-- Content row end-->
         </div>
         <!-- Container end-->
      </section>
      <!-- Featured projects end-->

      <section class="quote-area bg-overlay overlay-color" id="quote-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 qutoe-form-inner-left">
                  <div class="quote_form">
                     <h2 class="column-title title-white"><span>We are always ready</span> Request a call back</h2>
                     <form class="contact-form" id=""  method="POST" action="{{ route('requsetcallback') }}">
                        @csrf
                        <div class="error-container"></div>
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <input class="form-control form-name" id="name" name="name" placeholder="Full Name" required="">
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <input class="form-control form-email" type="email" id="email" name="email" placeholder="Email Address" required="">
                              </div>
                           </div>
                        </div>
                        <!-- Row 1 end-->
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <input class="form-control form-subject" id="subject" name="subject" type="text" placeholder="Subject" required="">
                              </div>
                           </div>
                        </div>
                        <!-- Row end-->
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <textarea class="form-control form-message" placeholder="Message" rows="6" name="message" required=""></textarea>
                              </div>
                           </div>
                        </div>
                        <!-- Row end-->
                        <div class="form-group text-right mb-0">
                           <input class="button btn btn-primary" type="submit" value="Send Message">
                        </div>
                     </form>
                  </div>
                  <!-- Quote form end-->
               </div>
               <!-- Col end-->
               <div class="col-lg-6 align-self-center">
                  <div class="owl-carousel owl-theme testimonial-slide owl-dark" id="testimonial-slide">
                     <div class="item">
                        <div class="quote-item quote-square"><span class="quote-text">The Kannexa loan has been  the most attractive loan products on the market, helping numerous businesses gain access to financing they would not be able to obtain conventionally and at extremely favorable rates and terms.</span>
                           <div class="quote-item-footer">
                              <img class="testimonial-thumb" src="{{ url('assets/frontassets/images/clients/testimonial1.png')}}" alt="testimonial">
                              <div class="quote-item-info">
                                 <p class="quote-author">Gabriel Denis</p><span class="quote-subtext">Chairman, OKT</span>
                              </div>
                           </div>
                        </div>
                        <!-- Quote item end-->
                     </div>
                     <!-- Item 1 end-->
                     <div class="item">
                        <div class="quote-item quote-square"><span class="quote-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi aliquip consequat.</span>
                           <div class="quote-item-footer">
                              <img class="testimonial-thumb" src="{{ url('assets/frontassets/images/clients/testimonial2.png')}}" alt="testimonial">
                              <div class="quote-item-info">
                                 <h3 class="quote-author">Weldon Cash</h3><span class="quote-subtext">CFO, First Choice</span>
                              </div>
                           </div>
                        </div>
                        <!-- Quote item end-->
                     </div>
                     <!-- Item 2 end-->
                     <div class="item">
                        <div class="quote-item quote-square"><span class="quote-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi ut commodo consequat.</span>
                           <div class="quote-item-footer">
                              <img class="testimonial-thumb" src="{{ url('assets/frontassets/images/clients/testimonial3.png')}}" alt="testimonial">
                              <div class="quote-item-info">
                                 <h3 class="quote-author">Minter Puchan</h3><span class="quote-subtext">Director, AKT</span>
                              </div>
                           </div>
                        </div>
                        <!-- Quote item end-->
                     </div>
                     <!-- Item 3 end-->
                  </div>
                  <!-- Testimonial carousel end-->
               </div>
               <!-- Col end-->
            </div>
            <!-- Content row end-->
         </div>
         <!-- Container end-->
      </section>
      <!-- Quote area end-->

      <section class="main-container" id="main-container">
         <div class="container">
            <div class="row">
               <div class="col-12 text-center">
                  <h2 class="column-title">25 Years of Experience</h2>
                  <p class="intro-desc">We are rethoric question ran over her cheek When she reached the first hills of the Italic Mountains.</p>
                  
               </div>
            </div>
         </div>
         <div class="ts-facts-area-bg bg-overlay">
            <div class="container">
               <div class="row facts-wrapper text-center">
                  <div class="col-lg-3 col-md-3">
                     <div class="ts-facts-bg"><span class="facts-icon"><i class="icon icon-money-1"></i></span>
                        <div class="ts-facts-content">
                           <h4 class="text-white"><span class="">1.5 M</span></h4>
                           <p class="facts-desc">Businesses</p>
                        </div>
                     </div>
                     <!-- Facts 1 end-->
                  </div>
                  <!-- Col 1 end-->
                  <div class="col-lg-3 col-md-3">
                     <div class="ts-facts-bg"><span class="facts-icon"><i class="icon icon-invest"></i></span>
                        <div class="ts-facts-content">
                           <h4 class="text-white"><span class="">300K +</span></h4>
                           <p class="facts-desc">Service Professionals</p>
                        </div>
                     </div>
                     <!-- Facts 2 end-->
                  </div>
                  <!-- Col 2 end-->
                  <div class="col-lg-3 col-md-3">
                     <div class="ts-facts-bg"><span class="facts-icon"><i class="icon icon-chart2"></i></span>
                        <div class="ts-facts-content">
                           <h4 class="text-white"><span class="">3,800 +</span></h4>
                           <p class="facts-desc">Banks & Financial institutions </p>
                        </div>
                     </div>
                     <!-- Facts 3 end-->
                  </div>
                  <!-- Col 3 end-->
                  <div class="col-lg-3 col-md-3">
                     <div class="ts-facts-bg"><span class="facts-icon"><i class="icon icon-deal"></i></span>
                        <div class="ts-facts-content">
                           <h4 class="text-white"><span class="">70+</span></h4>
                           <p class="facts-desc">Contributors</p>
                        </div>
                     </div>
                     <!-- Facts 4 end-->
                  </div>
                  <!-- Col 4 end-->
               </div>
               <!-- Row end-->
            </div>
            <!-- Container 2 end-->
         </div>
      </section>
      <section class="news" id="news">
         <div class="container">
            <div class="row text-center">
               <div class="col-md-12">
                  <h2 class="section-title"><span>Don't Miss</span>Our Latest News</h2>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-6">
                  <div class="latest-post post-large">
                     <div class="latest-post-media">
                        <a class="latest-post-img" href="#">
                           <img class="img-fluid" src="{{ url('assets/frontassets/images/news/news1.jpg')}}" alt="img">
                        </a><a class="post-cat" href="#">News</a>
                        <div class="post-body"><span class="post-item-date">20 Nov, 2017</span>
                           <h4 class="post-title"><a href="#">Spacex's interviewing process is rude as hell</a></h4><a class="btn btn-primary" href="#">Read More</a>
                        </div>
                        <!-- Post body end-->
                     </div>
                     <!-- Post media end-->
                  </div>
                  <!-- Latest post end-->
               </div>
               <!-- Col big news end-->
               <div class="col-lg-6">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="latest-post">
                           <div class="post-body"><a class="post-cat" href="#">News</a>
                              <h4 class="post-title"><a href="#">American Express finally ditches</a></h4><span class="post-item-date">20 Nov, 2017</span>
                              <div class="post-text">
                                 <p>Earlier this year, the firm announced it had reached its goal of hiring.</p>
                                 <div class="text-right"><a href="#">Read More <i class="fa fa-long-arrow-right"> </i></a></div>
                              </div>
                           </div>
                        </div>
                        <!-- Latest post end-->
                     </div>
                     <!-- Col end-->
                     <div class="col-lg-6">
                        <div class="latest-post">
                           <div class="post-body"><a class="post-cat" href="#">News</a>
                              <h4 class="post-title"><a href="#">Disney buys 21st Century Fox</a></h4><span class="post-item-date">20 Nov, 2017</span>
                              <div class="post-text">
                                 <p>Earlier this year, the firm announced it had reached its goal of hiring.</p>
                                 <div class="text-right"><a href="#">Read More <i class="fa fa-long-arrow-right"> </i></a></div>
                              </div>
                           </div>
                        </div>
                        <!-- Latest post end-->
                     </div>
                     <!-- Col end-->
                  </div>
                  <!-- row end-->
               </div>
               <!-- Col small news end-->
            </div>
            <!-- Content row end-->
         </div>
         <!-- Container end-->
      </section>
      <!-- News end-->
      <!-- <section id="call-to-action" class="call-to-action-bg bg-overlay">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 align-self-center">
                  <h3 class="call-to-action-title">Open Your Account to Make Overseas Money Transfers</h3>
                  <p>
                     Our mission is to provide quality guidance, build relationships of
                     <br> trust, and develop innovative solutions
                  </p>
               </div>
               <div class="col-lg-4 text-right">
                  <a class="btn btn-primary" href="">Register Now</a>
               </div>
            </div>
         </div>
      </section> -->

      <section class="clients-area" id="clients-area">
         <div class="container">
            <div class="row">
               <div class="col-sm-12 owl-carousel owl-theme text-center partners" id="partners-carousel">
                  <figure class="item partner-logo">
                     <a href="#">
                        <img class="img-fluid" src="{{ url('assets/frontassets/images/clients/client1.png')}}" alt="">
                     </a>
                  </figure>
                  <figure class="item partner-logo">
                     <a href="#">
                        <img class="img-fluid" src="{{ url('assets/frontassets/images/clients/client2.png')}}" alt="">
                     </a>
                  </figure>
                  <figure class="item partner-logo">
                     <a href="#">
                        <img class="img-fluid" src="{{ url('assets/frontassets/images/clients/client3.png')}}" alt="">
                     </a>
                  </figure>
                  <figure class="item partner-logo">
                     <a href="#">
                        <img class="img-fluid" src="{{ url('assets/frontassets/images/clients/client4.png')}}" alt="">
                     </a>
                  </figure>
                  <figure class="item partner-logo">
                     <a href="#">
                        <img class="img-fluid" src="{{ url('assets/frontassets/images/clients/client5.png')}}" alt="">
                     </a>
                  </figure>
                  <figure class="item partner-logo last">
                     <a href="#">
                        <img class="img-fluid" src="{{ url('assets/frontassets/images/clients/client6.png')}}" alt="">
                     </a>
                  </figure>
                  <figure class="item partner-logo last">
                     <a href="#">
                        <img class="img-fluid" src="{{ url('assets/frontassets/images/clients/client7.png')}}" alt="">
                     </a>
                  </figure>
               </div>
               <!-- Owl carousel end-->
            </div>
            <!-- Content row end-->
         </div>
         <!-- Container end-->
      </section>
      <!-- Partners end-->


      <section class="call-to-action call-to-action bg-pattern-3 pab-120">
         <div class="container-fluid px-0 quickwrp">
            <div class="row text-center">
               <div class="col-lg-12">

                  <div class="post">
                     <div class="post-quote-wrapper quickwrp">
                        <div class="text-white text-center">
                           <div class="entry-header pb-2">
                              <h2 class="entry-title text-uppercase text-white">Sign up in minutes. Quick and easy.</h2>
                           </div>
                           <div class="row justify-content-center">
                              <div class="col-md-4">
                                 <i class="fa fa-check-circle text-white" aria-hidden="true"></i>

                                 <p class="text-white">
                                    Sign up easily on your laptop or mobile phone
                                 </p>
                              </div>
                              <div class="col-md-4">
                                 <i class="fa fa-check-circle text-white" aria-hidden="true"></i>

                                 <p class="text-white">
                                    Get approved within 24 hours or quicker after you sign up so can hit the ground running
                                 </p>
                              </div>
                              <div class="col-md-4">
                                 <i class="fa fa-check-circle text-white" aria-hidden="true"></i>

                                 <p class="text-white">
                                    Around the clock support to ensure your onboarding process in buttery smooth
                                 </p>
                              </div>
                           </div>
                           
                           <!-- Post meta end-->
                           <form method="post" action="{{ route('regsiterfromhome')}}">
                           @csrf
                           <div class="row justify-content-center">

                              <div class="col-sm-12">
                                 <h3>Create an account</h3>
                              </div>
                              <div class="col">
                                 <div class="form-group">
                                    <input class="form-control form-name" id="firstname" name="firstname" placeholder="First Name" type="text" required="">
                                 </div>
                              </div>
                              <div class="col">
                                 <div class="form-group">
                                    <input class="form-control form-name" id="middlename" name="middlename" placeholder="Middle Name" type="text" required="">
                                 </div>
                              </div>
                              <div class="col">
                                 <div class="form-group">
                                    <input class="form-control form-name" id="lastname" name="lastname" placeholder="Last Name" type="text" required="">
                                 </div>
                              </div>
                              <!-- Col end-->
                              <div class="col">
                                 <div class="form-group">
                                    <input class="form-control form-email" id="email" name="email" placeholder="Email" type="email" required="">
                                 </div>
                              </div>
                              <div class="col">
                                 <div class="form-group">
                                    <input class="form-control form-phone" id="tel" name="tel" placeholder="Phone" type="tel" required="">
                                 </div>
                              </div>
                              
                              <div class="text-right">
                                 <button class="btn btn-primary tw-mt-30 mt-0" type="submit">Continue</button>
                              </div>
                              
                              <!-- Col 12 end-->
                           </div>
                        </form>
                        </div>
                     </div>
                  </div>

               </div>
               <!-- Col end-->
            </div>
            <!-- Row end-->
         </div>
         <!-- container end-->
      </section>
      <!-- Footer start-->
       @include("frontend.footer")
      <!-- Footer end-->

     