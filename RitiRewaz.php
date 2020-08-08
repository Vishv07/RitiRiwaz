<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Aladin&family=Alegreya+SC:wght@500&family=Lobster&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/> -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" type="text/css" href="assets/css/font-pizzaro.css" media="all" />
  	
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/part1.css">
    <link rel="stylesheet" href="css/events.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/whyrr.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="icon" href="images/RRLogo.png">
    <title>Home Page</title>
   <style>
     .contentcontainer{
      position: relative;
  min-height: 100vh;
     }
     .contentwrapper{
      /* padding-bottom: 217%; */
     }
   .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  
   </style>
</head>
<body>
  <?php
  include 'header.php';
  ?>

<div class="contentcontainer">
<div class="contentwrapper">
<div id="myCarousel" class="carousel sliderRR" data-ride="carousel"> 
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner slidercontent" role="listbox">
      <div class="item active">
        <img src="images/slider1.jpg">
      </div>
      <div class="item">
        <img src="images/slider2.jpeg">
      </div>
      <div class="item">
        <img src="images/slider3.jpeg">
      </div>
    </div>   
</div>


        <div class="container-fluid bg-1 text-center aboutpadding">
                <div class="col-md-4 col-sm-2 content-left">
                    <h3 class="slideanim" style="font-family: 'Lobster', cursive;">About</h3>
                    <br>
                    <img src="images/RRLogo.png" class="slideanim">
                </div>
                <div class="col-md-8 col-sm-6 content-right slideanim" style="font-family: 'Alegreya SC', serif;">
                      
            
              <ul>
                      <li>RitiRewaz Caterer has grown main fold within short span of a few years.</li>
                      <li>RitiRewaz Caterer catering services in Ahmedabad divers services that suitable for customer as per the industry, type and requirement.</li>
                      <li> Our services are provided by a team of depth and knowledgeable professionals and fulfill your every need with style.</li>
                      <li>We ensure that we deliver food with perfection and quality. </li>
                      <li>Riti Rewaz serves food not by just business manner. </li>
                      <li>We treat you like a member of our family and that makes us more special and extraordinary.</li>
              </ul>
                </div>
        </div>
        <!-- events -->
        <div class="container-fluid bg-3" style="font-family: 'Alegreya SC', serif; padding-bottom: 6%;">    
                <h3 style="text-align: center; font-size: 55px; font-family: 'Lobster', cursive;" class="slideanim">Events</h3><br>
                <div class="row slideanim">
                        <div class="col-sm-4">
                                <h1 class="text-center" style="font-family: 'Alegreya SC', serif;">Social Events</h1>
                                <div class="wrapper" style="width:100%">
                                        
                                <div class="img-text slideanim" style="animation-duration: 1s;
                                -webkit-animation-duration: 1s;
                                animation-fill-mode: forwards;">
                                            <h2>Social Events</h2>
   
                                <a href="#" class="btn-full">More</a>        
                                </div>
                            
                                </div>
                        </div>
                        <div class="col-sm-4">
                                <h1 class="text-center" style="font-family: 'Alegreya SC', serif;">Weddings</h1>
                                <div class="wrapper1" style="width:100%">
                                        
                                <div class="img-text slideanim" style="animation-duration: 1s;
                                -webkit-animation-duration: 1s;
                                animation-fill-mode: forwards;">
                                            <h2>Weddings</h2>
                                <!-- <h3>Best Services</h3>
                                <h4>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci dolorem et iure nobis, voluptatem.</h4> -->
                                <a href="#" class="btn-full">More</a>        
                                </div>
                            
                                </div>
                        </div>
                        <div class="col-sm-4">
                                <h1 class="text-center" style="font-family: 'Alegreya SC', serif;">Corporate Events</h1>
                                <div class="wrapper2" style="width:100%">
                                        
                                <div class="img-text slideanim" style="animation-duration: 1s;
                                -webkit-animation-duration: 1s;
                                animation-fill-mode: forwards;">
                                            <h2>Corporate Events</h2>
                                <!-- <h3>Best Services</h3>
                                <h4>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci dolorem et iure nobis, voluptatem.</h4> -->
                                <a href="#" class="btn-full">More</a>        
                                </div>
                            
                                </div>
                        </div>
                </div>
        </div> 

        <!-- Testimonials -->
        <div class="jumbotron">
        <h2 style="color: #ff0066; text-align: center; font-family: 'Lobster', cursive;" class="slideanim">What our customers say</h2>
        <div id="testimonialcarousel" class="carousel slide text-center" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators slideanim testimonialarrows">
            <li data-target="#testimonialcarousel" data-slide-to="0" class="active"></li>
            <li data-target="#testimonialcarousel" data-slide-to="1"></li>
            <li data-target="#testimonialcarousel" data-slide-to="2"></li>
          </ol>
        
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox" style="font-family: 'Aladin', cursive;">
            <div class="item active">
            <h4 style="color: #ff0066">"This company is the best. I am so happy with the result!"<br><span style="font-style:normal;">Michael Roe, Vice President, Comment Box</span></h4>
            </div>
            <div class="item">
              <h4 style="color: #ff0066">"One word... WOW!!"<br><span style="font-style:normal;">John Doe, Salesman, Rep Inc</span></h4>
            </div>
            <div class="item">
              <h4 style="color: #ff0066">"Could I... BE any more happy with this company?"<br><span style="font-style:normal;">Chandler Bing, Actor, FriendsAlot</span></h4>
            </div>
          </div>
        
          <!-- Left and right controls -->
          <a class="left carousel-control arrow" href="#testimonialcarousel" role="button" data-slide="prev" style="background-image: none; color: 	#ff0066;">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control arrow" href="#testimonialcarousel" role="button" data-slide="next" style="background-image: none; color: 	#ff0066;">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
</div>
        <!-- History -->
      
        <div class="container-fluid bg-3 whyrrpaddingtop"> 
                    <div class="col-md-12 col-sm-6 text-center whyus" style="height: 30%;">
                      <h3 class="text-center slideanim" style="color:#ff0066; font-family: 'Lobster', cursive;">Why Riti Rewaz?</h3>
                      <div class="features-list slideanim" >
                        <div class="row">
                           <div class="feature col-xs-12 col-sm-3">
                              <div class="feature-icon"><i class="po po-best-quality"></i></div>
                              <div class="feature-label">
                                 <h4>Best Quality</h4>
                                 <h6>Food made with fresh ingredients.</h6>
                              </div>
                           </div>
                           <div class="feature col-xs-12 col-sm-3" style="margin-top:-0.47%;">
                              <div class="feature-icon"><i class="po po-on-time"></i></div>
                              <div class="feature-label">
                                 <h4>On Time</h4>
                                 <h6>Delivering the food with care on time.</h6>
                              </div>
                           </div>
                           <div class="feature col-xs-12 col-sm-3">
                              <div class="feature-icon"><i class="po po-master-chef"></i></div>
                              <div class="feature-label">
                                 <h4>MasterChefs</h4>
                                 <h6>We have chefs who are experienced.</h6>
                              </div>
                           </div>
                           <div class="feature col-xs-12 col-sm-3" style="margin-top: -0.5%;">
                              <div class="feature-icon"><i class="po po-ready-delivery"></i></div>
                              <div class="feature-label">
                                 <h4>Taste Food</h4>
                                 <h6>Making delicious and tasty food is our speciality.</h6>
                              </div>
                           </div>
                        </div>
                     </div>
                 </div>
                     </div>
        </div>

        <!-- <div class="container-fluid historypaddingtop" style="background-color: #ddd;"> 
                        <div class="col-md-12 col-sm-6 text-center history" style="height: 30%;">
                        <h3 style="color:#ff0066; font-family: 'Lobster', cursive;" class="slideanim">Our History</h3>
                                  <ul style="font-family: 'Alegreya SC', serif; margin-left: -35px;">
                                      <p> Riti Rewaz started it's journey way back in 2011.</p>
                                          <li class="slideanim">Ten years of mesmerizing experience and trust of our clients has made our journey an unforgettable one.</li>
                                          <li class="slideanim"> Be it weddings, social events or corporate events Riti Rewaz always provides delicious and quality content.</li>
                                          <li class="slideanim">We work with our clients to create unique events with delicious food for them.</li>
                                          <li class="slideanim">Riti Rewaz is a woman owned business which is managed by women, who understands your taste well.</li>
                                  </ul>
                       </div>
        </div> -->
        <div class="container-fluid bg-1 aboutpadding" style="background: url('images/history.jpg'); background-size: cover;">
                <div class="col-md-4 col-sm-2 c-left text-center ">
                    <h3 class="slideanim" style="font-family: 'Lobster', cursive; color: white;">History</h3>
                    <br>
                    <!-- <img src="images/history.jpg" class="slideanim"> -->
                </div>
                <div class="col-md-8 col-sm-6 c-right text-center slideanim" style="font-family: 'Alegreya SC', serif;">
                      
            
              <ul>
                      <li>Riti Rewaz started it's journey way back in 2011.</li>
                      <li>Ten years of mesmerizing experience and trust of our clients has made our journey an unforgettable one.</li>
                      <li>Be it weddings, social events or corporate events Riti Rewaz always provides delicious and quality content.</li>
                      <li>We work with our clients to create unique events with delicious food for them.</li>
                      <li>Riti Rewaz serves food not by just business manner. </li>
                      <li>Riti Rewaz is a woman owned business which is managed by women, who understands your taste well.</li>
              </ul>
                </div>
        </div>

        <!-- FOOTER -->
       
        <!-- FOOTER END -->
        <script>
                $(document).ready(function()
                {
                  $(window).scroll(function() 
                  {
                    $(".slideanim").each(function()
                    {
                      var pos = $(this).offset().top;
                
                      var winTop = $(window).scrollTop();
                        if (pos < winTop + 550) 
                        {
                          $(this).addClass("slide");
                        }
                    });

                  });
                })
                </script>  
                </div>   <!-- end contentwrapper div -->  
                <?php
                include 'footer.php';
                ?>  
        </div>  <!-- end contentcontainer div --> 
</body>
</html>
