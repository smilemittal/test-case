@include("frontend.header")
   <?php  if($id == 'moneytransfer'){?><div class="banner-area" id="banner-area" style="background-image:url('{{ url('assets/frontassets/images/features/moneybackground.jpg')}}');"> <?php }else if($id == 'exchangerate') { ?> <div class="banner-area" id="banner-area" style="background-image:url('{{ url('assets/frontassets/images/features/exchangerates.jpg')}}');"> <?php } else if($id == 'comparerates'){ ?> <div class="banner-area" id="banner-area" style="background-image:url('{{ url('assets/frontassets/images/features/comparerates.jpg')}}');"><?php } else if($id == 'membershiptype'){ ?><div class="banner-area" id="banner-area" style="background-image:url('{{ url('assets/frontassets/images/features/membership.jpg')}}');"><?php }else { ?><div class="banner-area" id="banner-area" style="background-image:url('{{ url('assets/frontassets/images/features/bankaccount.jpg')}}');"><?php }?>
      
         <div class="container">
            <div class="row justify-content-center">
               <div class="col">
                  <div class="banner-heading">
                     <h6 class="banner-title" style="font-size: 70px;"><?php  if($id == 'moneytransfer'){?> Money transfer <?php }else if($id == 'exchangerate') { ?> Exchange Rate <?php } else if($id == 'comparerates'){ ?>Compare Rates<?php } else if($id == 'membershiptype'){ ?>Membership Type<?php }else { ?>Open Bank Account<?php }?></h6>
                     <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><?php  if($id == 'moneytransfer'){?> Money transfer <?php }else if($id == 'exchangerate') { ?> Exchange Rate <?php } else if($id == 'comparerates'){ ?>Compare Rates<?php } else if($id == 'membershiptype'){ ?>Membership Type<?php }else { ?>Open Bank Account<?php }?></li>
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
                  <div class="service-content">
                     <div class="heading">
                        <h2 class="content-title"><?php  if($id == 'moneytransfer'){?> Money transfer <?php }else if($id == 'exchangerate') { ?> Exchange Rate <?php } else if($id == 'comparerates'){ ?>Compare Rates<?php } else if($id == 'membershiptype'){ ?>Membership Type<?php }else { ?>Open Bank Account<?php }?></h2>
                     </div>
                     <div class="text-block mrb-40">
                        <?php if($id == 'moneytransfer'){?>
                         <p align="justify">Tell us how much you would like to send out. We will display you our fees in advance and inform you when your money is expected to arrive. Fill in the bank account information for your recipient. We can request them for you if you don't know their information.</p>
                         <p> For certain currencies, or for big transfers, we need a picture of your ID. This helps us keep your money secure. With just a bank transfer, send your money. We'll handle the rest. In your account, you can monitor your move, then we'll inform your recipient that it's coming.</p>

                        
                     <?php } else if($id == 'exchangerate'){ ?>
                         <ul class="ts-list">
                            <li>Competitive exchange rates to help you make the most of your money. </li>
                           <li>Exchange of Online Currencies. Simple Exchange, Flexi Ways.</li>
                           <li>Pure Exchange rates.</li>
                           <li>Get Out the Exchange Rates.</li>
                           <li>We will give our customers our best exchange rates, followed by other services.</li>

                          
                        </ul>
                     <?php } else if($id == 'comparerates'){ ?>
                         <ul class="ts-list">
                           <li>We offer all the possible rates of various services, compare and choose which one suits you best.</li>
                           <li> Compare rates. It's anywhere you want to be.</li>
                          <li>Excellent Rates.</li>
                          
                        </ul>

                     <?php } else if($id == 'membershiptype'){?>
                      <ul class="ts-list">
                           <li>Everything Is Simple With Membership Type.</li>
                           <li> As a business user or personal user, you can create your own accounts and therefore can directly move money from the account.</li>
                        
                          
                        </ul>

                     

                     <?php }else {?>
                     <p>Increased use of data and technology is changing how our financial markets work. It has led to greater innovation as new business models and ways for firms to engage with their customers have emerged.</p>
                     <p>The UK has led on this with the development of open banking – where consumers and small businesses can give access to their payment account data to third party providers to get new services.</p>
                     <p>Open finance would extend open banking principles to give consumers and businesses more control over a wider range of their financial data, such as savings, insurance, mortgages, investments, pensions and consumer credit. It has the potential to deliver transformative benefits for consumers and open finance participants a like</p>
                     <ul class="ts-list">
                           <li>Consumers.</li>
                           <li>Banks, building societies and credit unions.</li>
                           <li>Consumer credit firms.</li>
                           <li>Electronic money and payment institutions.</li>
                           <li>Financial advisers.</li>
                           <li>Fintech and innovative businesses.</li>
                           <li>General insurers and insurance intermediaries.</li>
                           <li>Investment managers.</li>
                           <li>Life insurers and pension providers.</li>
                          <li>Mortgage lenders and intermediaries.</li>
                        </ul>
                     <?php }?>
                     </div>
                     <?php if($id == 'moneytransfer'){?>
                     
                        <img class="img-fluid" src="{{ url('assets/frontassets/images/features/moneytransfer_content.jpg')}}" alt="">
                     
                     <?php }else if($id == 'exchangerate'){?>
                       <img class="img-fluid" src="{{ url('assets/frontassets/images/features/exchangenew.jpg')}}" alt="">
                     
                     <?php }else if($id == 'comparerates'){?>
                      
                         <img class="img-fluid" src="{{ url('assets/frontassets/images/features/comparecontent.jpg')}}" alt="">
                           

                  
                     <?php }else if($id == 'membershiptype'){?>
                           <img class="img-fluid" src="{{ url('assets/frontassets/images/features/member.jpg')}}" alt="">
                     <?php }else if($id == 'openbankaccount')
                     {?>
                           
                     <?php }?>
                    </div>
                  </div>
                  <div class="col-lg-4">
                  <div class="sidebar sidebar-right">
                     <div class="widget no-padding no-border">
                        <ul class="service-menu">
                           <li><a href="{{ route('fetures','moneytransfer') }}" <?php  if($id == 'moneytransfer'){?> style="background-color: #0062cc;color:#ffffff;"<?php }?>>Money transfer</a></li>
                           <li><a href="{{ route('fetures','exchangerate') }}" <?php  if($id == 'exchangerate'){?> style="background-color: #0062cc;color:#ffffff;"<?php }?>>Exchange Rate</a></li>
                           <li><a href="{{ route('fetures','comparerates') }}" <?php  if($id == 'comparerates'){?> style="background-color: #0062cc;color:#ffffff;"<?php }?>>Compare Rates</a></li>
                           <li><a href="{{ route('fetures','membershiptype') }}" <?php  if($id == 'membershiptype'){?> style="background-color: #0062cc;color:#ffffff;"<?php }?>>Membership Type</a></li>
                           <li><a href="{{ route('fetures','openbankaccount') }}" <?php  if($id == 'openbankaccount'){?> style="background-color: #0062cc;color:#ffffff;"<?php }?>>Open Bank Account </a></li>
                           
                        </ul>
                     </div>
                     <!-- <div class="widget no-padding no-border">
                        <h3 class="download-btn"><a href="#"><span>Brand Brochure</span><i class="fa fa-download float-right"></i></a></h3>
                     </div>
                     <div class="widget no-padding testimonial-static">
                        <div class="quote-item quote-classic"><span class="quote-text faq-quote-text">The Forexnic loan has been  the most attractive loan products on the market, helping numerous</span>
                           <div class="quote-item-footer quote-footer-classic">
                              <img class="testimonial-thumb" src="{{ url('assets/frontassets/images/clients/testimonial1.png')}}" alt="testimonial">
                              <div class="quote-item-info">
                                 <p class="quote-author">Jhon Cameron</p><span class="quote-subtext">Manager Walton</span>
                              </div>
                           </div>
                        </div>
                      
                     </div> -->
                  </div>
                  </div>
               </div>
              
            </div>
            
        <div class="gap-60"></div>
      </section>

      <!-- Footer start-->
@include("frontend.footer")
      <!-- Footer end-->

