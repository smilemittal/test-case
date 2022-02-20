 @include("frontend.header")

<div class="banner-area" id="banner-area" style="background-image:url('{{ url('assets/frontassets/images/modules/testimonial.jpg')}}');">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col">
            <div class="banner-heading">
               <h1 class="banner-title">Testimonial</h1>
               <ol class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li>Testimonial</li>
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
<section class="main-container no-padding" id="main-container">
   <div id="ts-testimonial-static" class="ts-testimonial-static">
      <div class="container">
         <div class="row text-center">
            <div class="col-md-12">
               <h2 class="section-title"><span>Happy peoples</span>Our Clients</h2>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-4">
               <div class="quote-item quote-classic mrb-40"><span class="quote-text faq-quote-text">The Forexnic loan has been  the most attractive loan products on the market, helping numerous</span>
                  <div class="quote-item-footer quote-footer-classic">
                     <img class="testimonial-thumb" src="{{ url('assets/frontassets/images/clients/testimonial1.png')}}" alt="testimonial">
                     <div class="quote-item-info">
                        <p class="quote-author">Diane Santos</p><span class="quote-subtext">HR Denim</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="quote-item quote-classic mrb-40"><span class="quote-text faq-quote-text">The Forexnic loan has been  the most attractive loan products on the market, helping numerous</span>
                  <div class="quote-item-footer quote-footer-classic">
                     <img class="testimonial-thumb" src="{{ url('assets/frontassets/images/clients/testimonial2.png')}}" alt="testimonial">
                     <div class="quote-item-info">
                        <p class="quote-author">Carol Warren</p><span class="quote-subtext">Director Jaguar</span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="quote-item quote-classic mrb-40"><span class="quote-text faq-quote-text">The Forexnic loan has been  the most attractive loan products on the market, helping numerous</span>
                  <div class="quote-item-footer quote-footer-classic">
                     <img class="testimonial-thumb" src="{{ url('assets/frontassets/images/clients/testimonial3.png')}}" alt="testimonial">
                     <div class="quote-item-info">
                        <p class="quote-author">Jhon Cameron</p><span class="quote-subtext">Manager Walton</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div id="ts-testimonial-slide" class="ts-testimonial-slide solid-bg">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="testimonial-slide owl-carousel owl-theme">
                  <div class="row quote-item-area">
                     <div class="col-md-5">
                        <div class="quote-thumb">
                           <img class="quote-thumb-img" src="{{ url('assets/frontassets/images/clients/testimonial1.png')}}" alt="Julia Mayer">

                        </div>
                        <!-- Quote thumb end -->
                     </div>
                     <!-- Col end -->

                     <div class="col-md-7">
                        <div class="quote-item-content">
                           <h3 class="quote-name">Julia Mayer </h3>
                           <span class="quote-name-desg">
                                    HR Manager</span>
                           <p class="quote-message">
                              The Forexnic loan has been the most attractive loan products on the market, would not be able to obtain conventionally and
                              at extremely. </p>
                        </div>
                        <!-- Quote content end -->
                     </div>
                     <!-- Col end -->
                  </div>
                  <div class="row quote-item-area">
                     <div class="col-md-5">
                        <div class="quote-thumb">
                           <img class="quote-thumb-img" src="{{ url('assets/frontassets/images/clients/testimonial2.png')}}" alt="Julia Mayer">

                        </div>
                        <!-- Quote thumb end -->
                     </div>
                     <!-- Col end -->

                     <div class="col-md-7">
                        <div class="quote-item-content">
                           <h3 class="quote-name">Julia Mayer </h3>
                           <span class="quote-name-desg">
                                    HR Manager</span>
                           <p class="quote-message">
                              The Forexnic loan has been the most attractive loan products on the market, would not be able to obtain conventionally and
                              at extremely. </p>
                        </div>
                        <!-- Quote content end -->
                     </div>
                     <!-- Col end -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


<div class="gap-40"></div>
      <!-- Footer start-->
@include("frontend.footer")
      <!-- Footer end-->

