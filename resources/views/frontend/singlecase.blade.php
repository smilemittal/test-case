@include("frontend.header")

<div class="banner-area" id="banner-area" style="background-image:url('{{ url('assets/frontassets/images/banner/banner1.jpg')}}');>
   <div class="container">
      <div class="row justify-content-center">
         <div class="col">
            <div class="banner-heading">
               <h1 class="banner-title">Case Single</h1>
               <ol class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li>cases</li>
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

   <div class="ts-single-case-info" id="ts-single-case-info">
      <div class="container">
         <div class="row">
            <div class="col-lg-4">
               <div class="list-style-classic box-solid">
                  <h3 class="classic-title">Alpha Century Software Inc.</h3>
                  <ul>
                     <li>
                        <div class="case-info-label">Client</div>
                        <div class="case-info-content">Jhon Carter</div>
                     </li>
                     <li>
                        <div class="case-info-label">Catagory</div>
                        <div class="case-info-content">Marketing Growth</div>
                     </li>
                     <li>
                        <div class="case-info-label">Date</div>
                        <div class="case-info-content">20 Nov, 2017</div>
                     </li>
                     <li>
                        <div class="case-info-label">Live demo</div>
                        <div class="case-info-content">www.domain.com</div>
                     </li>
                     <li>
                        <div class="case-info-label">Status</div>
                        <div class="case-info-content">Done</div>
                     </li>
                  </ul>
               </div>
            </div>
            <!-- Col End-->
            <div class="col-lg-8">
               <div class="case-single-img">
                  <img class="img-fluid" src="{{ url('assets/frontassets/images/case-study/case-details-big.jpg')}}" alt="">
               </div>
            </div>
         </div>
         <!-- Row End-->
      </div>
      <!-- Container End-->
   </div>

   <div class="ts-case-challange" id="ts-case-challange">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <div class="case-details-inner">
                  <div class="heading">
                     <h3 class=" content-title border-none"> The Challenge: </h3>
                  </div>
                  <div class="ts-text-block">
                     <p>A business strategy is the means by which it sets out to achieve its desired ends. You have ideas,
                        goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like
                        you and make your dream come true have ideas, goals.</p>
                  </div>
                  <ul class="ts-list">
                     <li>Collaborate with the technology information security, and business partners.</li>
                     <li>Find and address performance issues are main.</li>
                     <li>Assisting senior consultants projects priorate first.</li>
                     <li>Share best both practices and knowledge need to think.</li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="case-single-img text-right">
                  <img class="img-fluid" src="{{ url('assets/frontassets/images/case-study/case-study1.jpg')}}" alt="">
               </div>
            </div>
         </div>
         <div class="row case-img-left">
            <div class="col-lg-6">
               <div class="case-single-img text-left">
                  <img class="img-fluid" src="{{ url('assets/frontassets/images/case-study/case-study2.jpg')}}" alt="">
               </div>
            </div>
            <div class="col-lg-6">
               <div class="case-details-inner">
                  <div class="heading">
                     <h3 class=" content-title border-none">Possible Solution: </h3>
                  </div>
                  <div class="ts-text-block">
                     <p>A business strategy is the means by which it sets out to achieve its desired ends. You have ideas,
                        goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like
                        you and make your dream come true have ideas, goals.</p>
                  </div>
                  <ul class="ts-list">
                     <li>Collaborate with the technology information security, and business partners.</li>
                     <li>Find and address performance issues are main.</li>
                     <li>Assisting senior consultants projects priorate first.</li>
                     <li>Share best both practices and knowledge need to think.</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="ts-case-result" id="ts-case-result">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <div class="case-details-inner">
                  <div class="heading">
                     <h3 class=" content-title border-none"> The Result: </h3>
                  </div>
                  <div class="ts-text-block">
                     <p>A business strategy is the means by which it sets out to achieve its desired ends. You have ideas,
                        goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like
                        you.
                     </p>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-4">
                     <div class="case-counter">
                        <p><span class="counterUp">3000</span>$</p>
                        <h3>Cost savings</h3>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="case-counter">
                        <p><span class="counterUp">4.5</span>%</p>
                        <h3>Tax Saved</h3>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="case-counter">
                        <p><span class="counterUp">10.5</span>%</p>
                        <h3>Conversion</h3>
                     </div>
                  </div>
               </div>
               <p>A business strategy is the means by which it sets out to achieve its desired forward thinking team looking
                  for talent like you and make your dream come true have ideas, goals.</p>
            </div>
            <div class="col-lg-6 text-right">
               <div class="single-case-img">
                  <img class="img-fluid" src="{{ url('assets/frontassets/images/case-study/case-study3.jpg')}}" alt="">
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
