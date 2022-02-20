@include("frontend.header")

      <div class="banner-area" id="banner-area" style="background-image:url('{{ url('assets/frontassets/images/banner/banner1.jpg')}}');">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col">
                  <div class="banner-heading">
                     <h1 class="banner-title">404</h1>
                     <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>404</li>
                     </ol>
                  </div>
               </div>
               <!-- Col end -->
            </div>
            <!-- Row end -->
         </div>
         <!-- Container end -->
      </div>
      <!-- Banner area end -->

      <section id="main-container" class="main-container not-found">
         <div class="container">
            <div class="row">
               <div class="col-6 text-center align-self-center">
                  <div class="error-page text-center">
                     <div class="error-code">
                        <strong>404</strong>
                     </div>
                     <div class="error-message">
                        <h3>Oops... Page Not Found!</h3>
                     </div>
                     <div class="error-body">
                        Try using the button below to go to main page of the site <br>
                        <a href="index.html" class="btn btn-primary solid blank"><i class="fa fa-arrow-circle-left">&nbsp;</i> Go to Home</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 text-right">
                  <img class="img-fluid" src="{{ url('assets/frontassets/images/404.png') }}" alt="">
               </div>
            </div>
            <!-- Main row end -->
         </div>
         <!-- Container end -->
      </section>


      <!-- Footer start -->
@include("frontend.footer")
      <!-- Footer end -->

