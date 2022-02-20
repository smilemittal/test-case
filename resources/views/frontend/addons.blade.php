@include("frontend.header")

      <div class="banner-area" id="banner-area" style="background-image:url('{{ url('assets/frontassets/images/banner/banner1.jpg')}}');">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col">
                  <div class="banner-heading">
                     <h1 class="banner-title">Addons</h1>
                     <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Addons</li>
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
               <div class="col-lg-6">
                  <h3 class="addons-title">Accordion</h3>
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
                                 ideas, goals, and dreams..</p>
                           </div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header" id="headingTwo">
                           <h5 class="mb-0">
                              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 <p>I have a small credit balance on my account?</p>
                              </button>
                           </h5>
                        </div>
                        <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion">
                           <div class="card-body">
                              <p>A business strategy is the means by which it sets out to achieve its desired ends. You have
                                 ideas, goals, and dreams.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- col end-->
               <div class="col-lg-6">
                  <h3 class="addons-title">Graph</h3>
                  <div id="graph"></div>
               </div>
               <!-- col end-->
            </div>
         </div>
      </section>

      <section id="skill-addons" class="skill-addons no-padding">
         <div class="ts-skills-area solid-bg" id="ts-skills-area">
            <div class="container-fluid no-padding">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="skills-image">
                        <img class="img-fluid" src="{{ url('assets/frontassets/images/pages/about_1.png') }}" alt="">
                     </div>
                     <!-- Skills image end-->
                  </div>
                  <!-- Col end-->
                  <div class="col-lg-6 ts-padding">
                     <h3 class="addons-title">Progress Bar</h3>
                     <p class="intro-desc">A business strategy is the means by which it sets out to achieve its desired ends. You have ideas, goals,
                        and dreams. We have a culturally diverse, forward thinking team looking for talent like you and make
                        your dream come true.</p>
                     <div class="gap-20"></div>
                     <div class="ts-progress-bar">
                        <h3>Planning</h3>
                        <div class="progress">
                           <div class="progress-bar" style="width:75%; background:blue;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-value">75%</div>
                           </div>
                        </div>
                     </div>
                     <!-- End ts-progress bar 1-->
                     <div class="ts-progress-bar">
                        <h3>Consulting</h3>
                        <div class="progress">
                           <div class="progress-bar" style="width:90%; background:blue;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-value">90%</div>
                           </div>
                        </div>
                     </div>
                     <!-- End ts-progress bar 2-->
                     <div class="ts-progress-bar">
                        <h3>Marketing</h3>
                        <div class="progress">
                           <div class="progress-bar" style="width:80%; background:blue;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                              <div class="progress-value">80%</div>
                           </div>
                        </div>
                     </div>
                     <!-- End ts-progress bar 3-->
                  </div>
                  <!-- Col end-->
               </div>
               <!-- Content row end-->
            </div>
            <!-- Container 2 end-->
         </div>
      </section>

      <!-- Footer start-->
 @include("frontend.footer")
      <!-- Footer end-->

