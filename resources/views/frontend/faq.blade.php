

      @include("frontend.header")

      <div class="banner-area" id="banner-area" style="background-image:url('{{ url('assets/frontassets/images/modules/faq.jpg')}}');">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col">
                  <div class="banner-heading">
                     <h1 class="banner-title">Faq</h1>
                     <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>faq</li>
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
            <div class="row">
               <div class="col-lg-8">
                  <div class="accordion-title">
                     <h3 class="column-title"><span>Our FAQ</span> Frequently Asked Questions</h3>
                  </div>
                  <div class="gap-40"></div>
                  <div id="accordion">
                     <div class="card">
                        <div class="card-header" id="headingOne">
                           <h5 class="mb-0">
                              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 <p>What do I get when my account is paid off?</p>
                              </button>
                           </h5>
                        </div>
                        <div class="collapse show" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
                           <div class="card-body">
                              <p>A business strategy is the means by which it sets out to achieve its desired ends. You have
                                 ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for
                                 talent like you and make your dream come true.</p>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="headingTwo">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 <p>I have a small credit balance on my account and it should be closed when and how?</p>
                              </button>
                           </h5>
                        </div>
                        <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion">
                           <div class="card-body">
                              <p>A business strategy is the means by which it sets out to achieve its desired ends. You have
                                 ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for
                                 talent like you and make your dream come true.</p>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="headingThree">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 <p>My payment was postmarked on the due date, why is it considered late?</p>
                              </button>
                           </h5>
                        </div>
                        <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordion">
                           <div class="card-body">
                              <p>A business strategy is the means by which it sets out to achieve its desired ends. You have
                                 ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for
                                 talent like you and make your dream come true.</p>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="headingFour">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                 <p>I sent my payment on time, but it has not been credited to my account?</p>
                              </button>
                           </h5>
                        </div>
                        <div class="collapse" id="collapseFour" aria-labelledby="headingFour" data-parent="#accordion">
                           <div class="card-body">
                              <p>A business strategy is the means by which it sets out to achieve its desired ends. You have
                                 ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for
                                 talent like you and make your dream come true.</p>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="headingFive">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                 <p>I have monthly payments. Can I use one-time payments every month?</p>
                              </button>
                           </h5>
                        </div>
                        <div class="collapse" id="collapseFive" aria-labelledby="headingFive" data-parent="#accordion">
                           <div class="card-body">
                              <p>A business strategy is the means by which it sets out to achieve its desired ends. You have
                                 ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for
                                 talent like you and make your dream come true.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- col end-->
               <div class="col-lg-4">
                  <div class="help-box">
                     <div class="help mrb-40">
                        <h2>Need any help!</h2>
                        <p>
                           Find answers to frequently asked questions about Bizipress, contacts and general customer account information
                        </p><a class="btn btn-primary" href="">Contact us</a>
                     </div>
                     <div class="brochure mrb-40">Brand Brochure<a href=""><i class="fa fa-download"></i></a></div>
                     <div class="quote-item quote-classic mrb-40"><span class="quote-text faq-quote-text">The Forexnic loan has been  the most attractive loan products on the market, helping numerous</span>
                        <div class="quote-item-footer quote-footer-classic">
                           <img class="testimonial-thumb" src="{{ url('assets/frontassets/images/clients/testimonial1.png')}}" alt="testimonial">
                           <div class="quote-item-info">
                              <p class="quote-author">Jhon Cameron</p><span class="quote-subtext">Manager Walton</span>
                           </div>
                        </div>
                     </div>
                     <!-- Quote item end-->
                     <div class="gap-80"></div>
                  </div>
               </div>
               <!-- Col end-->
            </div>
            <!-- Row end-->
         </div>
          <div class="gap-60"></div>
      </section>

      <!-- Footer start-->
   @include("frontend.footer")
      <!-- Footer end-->
