@include("frontend.header")
   <?php  if($id == 'prosumerplatform'){?><div class="banner-area" id="banner-area" style="background-image:url('{{ url('assets/frontassets/images/modules/service.jpg')}}');"> <?php }else if($id == 'moneymanagement') { ?> <div class="banner-area" id="banner-area" style="background-image:url('{{ url('assets/frontassets/images/modules/money.jpg')}}');"> <?php } else if($id == 'productiveapplications'){ ?> <div class="banner-area" id="banner-area" style="background-image:url('{{ url('assets/frontassets/images/modules/productivity.jpg')}}');"><?php } else if($id == 'accountingcompliance'){ ?><div class="banner-area" id="banner-area" style="background-image:url('{{ url('assets/frontassets/images/modules/accountcompliance.jpg')}}');"><?php }else { ?><div class="banner-area" id="banner-area" style="background-image:url('{{ url('assets/frontassets/images/modules/enterprise.jpg')}}');"><?php }?>
      
         <div class="container">
            <div class="row justify-content-center">
               <div class="col">
                  <div class="banner-heading">
                     <h6 class="banner-title" style="font-size: 70px;"><?php  if($id == 'prosumerplatform'){?> Prosumer Platform <?php }else if($id == 'moneymanagement') { ?> Money Management <?php } else if($id == 'productiveapplications'){ ?> Productive Applications<?php } else if($id == 'accountingcompliance'){ ?>Accounting & Compliance<?php }else { ?>Enterprise Solution<?php }?></h6>
                     <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><?php  if($id == 'prosumerplatform'){?> Prosumer Platform <?php }else if($id == 'moneymanagement') { ?> Money Management <?php } else if($id == 'productiveapplications'){ ?> Productive Applications<?php } else if($id == 'accountingcompliance'){ ?>Accounting & Compliance<?php }else { ?>Enterprise Solution<?php }?></li>
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
                        <h2 class="content-title"><?php  if($id == 'prosumerplatform'){?> Prosumer Platform <?php }else if($id == 'moneymanagement') { ?> Money Management <?php } else if($id == 'productiveapplications'){ ?> Productive Applications<?php } else if($id == 'accountingcompliance'){ ?>Accounting & Compliance<?php }else { ?>Enterprise Solution<?php }?></h2>
                     </div>
                     <div class="text-block mrb-40">
                        <?php if($id == 'prosumerplatform'){?>
                        <p>There has been an increasing trend for products and services to be adaptable or customizable to customers specific needs or preferences. With many types of products, it has even become the norm for consumers to expect, and even demand, some degree of customization if they are to consider purchasing. This has given rise to the age of the prosumer.</p>

                        <p>This trend has been called the rise of “prosumerism”, which is defined by the consumer taking part in the design process of the services or products consumed. It can also be classified as blending the line between producer and consumer.</p>

                        <p>One of the driving forces behind this trend is consumer demand. People, specifically in the technology industry, have been increasingly demanding more control over, and impact on, the development of their own services.</p>
                     <?php } else if($id == 'moneymanagement'){ ?>
                         <ul class="ts-list">
                           <li>Best Budgeting Apps.</li>
                           <li>Best Money Management App: Mint.</li>
                           <li>Best Debt App: You Need a Budget.</li>
                           <li>Best Tracking Expenses App: Wally</li>
                           <li>Best App for Easy Saving: Acorns.</li>
                           <li>Best App for Freelancers: Tycoon.</li>
                           <li>Wealthify</li>
                           <li>Nutmeg</li>
                        </ul>
                     <?php } else if($id == 'productiveapplications'){ ?>
                        
                     <?php } else if($id == 'accountingcompliance'){?>
                        <div class="row">
                           <div class="col-md-4">
                              <h3>Senior Management</h3>
                              <ul class="ts-list">
                                 <li>Ultimate responsibility.</li>
                                 <li>Actively manages risk.</li>
                              </ul>
                           </div>
                           <div class="col-md-4"><h3>MRM Committee</h3>
                              <ul class="ts-list">
                                 <li>Oversees MRM activities.</li>
                                 <li>Informs senior management .</li>
                              </ul></div>
                           <div class="col-md-4">
                              <h3>Internal Audit</h3>
                              <ul class="ts-list">
                                 <li>Holistic MRM program.</li>
                                 <li>Conflicts check.</li>
                              </ul>
                           </div>
                        </div>

                     <?php }else {?>
                     <p>This trend has been called the rise of “prosumerism”, which is defined by the consumer taking part in the design process of the services or products consumed. It can also be classified as blending the line between producer and consumer.</p>
                     <?php }?>
                     </div>
                     <?php if($id == 'prosumerplatform'){?>
                     <div class="fw-single-image mrb-40">
                        <img class="img-fluid" src="{{ url('assets/frontassets/images/services/prosomurcontent.jpg')}}" alt="">
                     </div>
                     <?php }else if($id == 'moneymanagement'){?>
                        <div class="fw-single-image mrb-40">
                        <img class="img-fluid" src="{{ url('assets/frontassets/images/services/moneymangement.jpg')}}" alt="">
                     </div>
                     <?php }else if($id == 'productiveapplications'){?>
                      
                           <div class="row">
                           <div class="col-lg-4"> <img class="img-fluid" src="{{ url('assets/frontassets/images/productive/1.png')}}" alt=""></div>
                           <div class="col-lg-8">
                              <h4>Digital Banking</h4>
                               <p align="justify">The World is moving into digitization. We believe that digital payment makes life simpler and easy. By using Digital payment, You can track your spendings and it's easy to carry. It's the most secure payment method. Where everyone can rely on it.</p>
                           </div>
                           </div>
                           <br><br>
                        
                          
                           <div class="row">
                            <div class="col-lg-8"><h4>Personal Finance Management App</h4>
                               <p align="justify">"Personal finance management" Helps to track all your spendings, which will help you to calculate the monthly and yearly expenses. By finance management you can save a lot of money by knowing your spendings.</p></div>
                           <div class="col-lg-4"> <img class="img-fluid" src="{{ url('assets/frontassets/images/productive/3.png')}}" alt=""></div>
                           
                           </div>
                           <br><br>
                            <div class="row">
                          
                           <div class="col-lg-4"><img class="img-fluid" src="{{ url('assets/frontassets/images/productive/4.png')}}" alt=""></div>
                            <div class="col-lg-8"><h4>Robo advising software</h4>
                               <p align="justify">With our special assistant named Zulu will help you to make the work simpler for you. Zulu can find the data for and suggest the best out of all. Zulu can help you in whatever the requirement is.</p> </div>
                           </div>
                           <br><br>
                            

                           
                           
                            <div class="row">
                           <div class="col-lg-8"><h4>Digital wallets</h4>
                               <p align="justify">Wallet is a place to save or store your money. We will help you to keep your money safe and secure by providing a digital wallet feature. By using digital wallet, you can spend your money easily with your card or contact less payment. You can keep track of your spendings by using digital wallet.</p> </div>
                           <div class="col-lg-4"><img class="img-fluid" src="{{ url('assets/frontassets/images/productive/8.png')}}" alt=""></div>
                           </div>
                           <br><br>
                           
                          
                           
                           

                  
                     <?php }else if($id == 'accountingcompliance'){?>
                           <img class="img-fluid" src="{{ url('assets/frontassets/images/services/accounting.jpg')}}" alt="">
                     <?php }else if($id == 'enterprisesolution')
                     {?>
                            <img class="img-fluid" src="{{ url('assets/frontassets/images/services/enterprise.png')}}" alt="">
                     <?php }?>
                    
                  </div>
                 
               </div>
               <div class="col-lg-4">
                  <div class="sidebar sidebar-right">
                     <div class="widget no-padding no-border">
                        <ul class="service-menu">
                           <li><a href="{{ route('service','prosumerplatform') }}" <?php  if($id == 'prosumerplatform'){?> style="background-color: #0062cc;color:#ffffff;"<?php }?>>Prosumer Platform</a></li>
                           <li><a href="{{ route('service','moneymanagement') }}" <?php  if($id == 'moneymanagement'){?> style="background-color: #0062cc;color:#ffffff;"<?php }?>>Money Management</a></li>
                           <li><a href="{{ route('service','productiveapplications') }}" <?php  if($id == 'productiveapplications'){?> style="background-color: #0062cc;color:#ffffff;"<?php }?>>Productive Applications</a></li>
                           <li><a href="{{ route('service','accountingcompliance') }}" <?php  if($id == 'accountingcompliance'){?> style="background-color: #0062cc;color:#ffffff;"<?php }?>>Accounting & Compliance</a></li>
                           <li><a href="{{ route('service','enterprisesolution') }}" <?php  if($id == 'enterprisesolution'){?> style="background-color: #0062cc;color:#ffffff;"<?php }?>>Enterprise Solution </a></li>
                           
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
         </div>
      </section>

      <!-- Footer start-->
@include("frontend.footer")
      <!-- Footer end-->

