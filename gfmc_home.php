<?php
session_start();
if(!$_SESSION['logged_in']){
   header("location: /");
//   die;
}
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>GFMC - PH 2020</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="slick/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick/slick/slick-theme.css"/>
    <style>
        .shadow-effect {
		    background: #fff;
		    padding: 20px;
		    border-radius: 4px;
		    text-align: center;
	        border:1px solid #ECECEC;
		    box-shadow: 0 19px 38px rgba(0,0,0,0.10), 0 15px 12px rgba(0,0,0,0.02);
		}
		#customers-testimonials .shadow-effect p {
		    font-family: inherit;
		    font-size: 17px;
		    line-height: 1.5;
		    margin: 0 0 17px 0;
		    font-weight: 300;
		}
		.testimonial-name {
		    margin: -17px auto 0;
		    display: table;
		    width: auto;
		    background: #3190E7;
		    padding: 9px 35px;
		    border-radius: 12px;
		    text-align: center;
		    color: #fff;
		    box-shadow: 0 9px 18px rgba(0,0,0,0.12), 0 5px 7px rgba(0,0,0,0.05);
		}
		#customers-testimonials .item {
		    text-align: center;
		    padding: 50px;
			margin-bottom:80px;
		    opacity: .2;
		    -webkit-transform: scale3d(0.8, 0.8, 1);
		    transform: scale3d(0.8, 0.8, 1);
		    -webkit-transition: all 0.3s ease-in-out;
		    -moz-transition: all 0.3s ease-in-out;
		    transition: all 0.3s ease-in-out;
		}
		#customers-testimonials .owl-item.active.center .item {
		    opacity: 1;
		    -webkit-transform: scale3d(1.0, 1.0, 1);
		    transform: scale3d(1.0, 1.0, 1);
		}
		.owl-carousel .owl-item img {
		    transform-style: preserve-3d;
		    max-width: 90px;
    		margin: 0 auto 17px;
		}
    </style>
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">GFMC<span>PH.</span></a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
	          <li class="nav-item"><a href="#speakers-section" class="nav-link"><span>Artistes</span></a></li>
	          <li class="nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#upload"><span>Upload Data</span></a></li>
	          <!-- <li class="nav-item"><a href="#pricing-section" class="nav-link"><span>Pricing</span></a></li> -->
	          <!-- <li class="nav-item"><a href="#blog-section" class="nav-link"><span>Blog</span></a></li> -->
	          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
	          <li class="nav-item cta"><a style="background-color:red;" href="watch.php" class="nav-link">Watch Live</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
 <section id="home-section" class="hero">
	  	<h3 class="vr"><span>Welcome</span> to GFMC.</h3>
	  	<div id="timer" class="text-center">
			  <div class="time" id="days"></div>
			  <div class="time" id="hours"></div>
			  <div class="time" id="minutes"></div>
			  <div class="time" id="seconds"></div>
			</div>
		  <div class="">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <!-- <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol> -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/gfmc.jpg" class="d-block w-100" alt="...">
    </div>
        <div class="carousel-item">
      	<img src="images/c_4.JPG" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      	<img src="images/c_1.JPG" class="d-block w-100" alt="...">
    </div>
        <div class="carousel-item">
      	<img src="images/cc2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      	<img src="images/152338385717_img_5669.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/bg_5.jpg" class="d-block w-100" alt="...">
      <!-- <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div> -->
    </div>
    <div class="carousel-item">
      <img src="images/c_2.JPG" class="d-block w-100" alt="...">
  <!--     <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div> -->
    </div>
       <div class="carousel-item">
      <img src="images/bg_1.jpg" class="d-block w-100" alt="...">
  <!--     <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div> -->
    </div>
       <div class="carousel-item">
      	<img src="images/cr_1.jpg" class="d-block w-100" alt="...">
    </div>
 
    
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	    </div>
    </section>

    <section class="ftco-about ftco-counter ftco-no-pb img ftco-section" id="about-section">
    	<div class="container">
    	    <div class="row">
                <div class="col-12 py-3">
                    <video controls autoplay src="https://player.vimeo.com/external/402606332.hd.mp4?s=49c4c49a4c766ad6ee649e56ab56f9caf14bacfb&profile_id=175" width="100%" allow="autoplay; fullscreen" ></video>
                    <center>
                        <div class="text p-4 pr-5 bg-danger">
                            <p class="mb-0">
                              <!-- <span class="number" data-number="50">0</span> -->
                              <a style="color:white;" href="watch.php" class="nav-link">Watch Live</a>
                          </p>
                        </div>
                    </center>
                </div>
            </div>
    	    
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-5 d-flex">
    				<div class="img-about img d-flex align-items-stretch">
    					<div class="overlay"></div>
	    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/about-1.jpg);">
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-7 pl-lg-5 pt-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Welcome</span>
		            <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">About GFMC</h2>
		            <p>Good Friday Miracle Crusade (GFMC) is the biggest event in Port Harcourt City with Hundreds of Thousands of people connecting from around the world. The power of Gods word to heal, deliver and save would be present. The blind would see, the lame would walk, the deaf would hear! lives would be changed and destinies altered forever!! Get ready to experience a superlative move of God's Spirit as you position your self to connect on this website. We would be live streaming on Wazobia Max, RSTV, Silver Bird TV, NTA, DSTV and on all our social media platforms.</p>
		          </div>
		        </div>
	          <div class="counter-wrap ftco-animate d-flex mt-md-3">
              <div class="text p-4 pr-5 bg-danger">
              	<p class="mb-0">
	                <!-- <span class="number" data-number="50">0</span> -->
	                <a style="color:white;" href="watch.php" class="nav-link">Watch Live</a>
                </p>
              </div>
	          </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
    	<div class="container-fluid px-0">
    		<div class="row no-gutters">
	  			<div class="col-md-6 col-lg-3 ftco-animate">
	  				<div class="gallery img" style="background-image: url(images/artists/artist-4.jpg);">
	  				</div>
	  			</div>
	  			<div class="col-md-6 col-lg-3 ftco-animate">
	  				<div class="gallery img" style="background-image: url(images/gallery-2.jpg);">
	  				</div>
	  			</div>
	  			<div class="col-md-6 col-lg-3 ftco-animate">
	  				<div class="gallery img" style="background-image: url(images/gallery-3.jpg);">
	  				</div>
	  			</div>
	  			<div class="col-md-6 col-lg-3 ftco-animate">
	  				<div class="gallery img" style="background-image: url(images/gallery-4.jpg);">
	  				</div>
	  			</div>
    		</div>
    	</div>
    </section>
		
		<section class="ftco-section ftco-subscribe img" style="background-image: url(images/bg_1.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
            <h2 class="mb-4">Get Notified</h2>
            <p>Receive notifications concerning GFMC</p>
            <div class="row d-flex justify-content-center mt-4">
              <div class="col-md-10">
                <form action="#" class="subscribe-form">
                  <div class="form-group d-flex">
                    <input type="text" class="form-control" placeholder="Enter email address">
                    <input type="submit" value="Subscribe" class="submit px-3">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
			</div>
		</section>

		<section class="ftco-section ftco-speakers bg-white" id="speakers-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section heading-section-white text-center ftco-animate">
          	<span class="subheading">Artistes</span>
            <h2 class="mb-4" style="color:black;">GFMC Artistes</h2>
            <p style="color: black;">Watch your favorite artist perform.</p>
          </div>
        </div>
        <div class="row">
					<div class="col-sm-6 col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch justify-content-end">
								<div class="img align-self-stretch" style="background-image: url(images/artists/artist-1.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3">
								<div>
									<h3 class="mb-2 text-blck shadow-lg">Jahdiel</h3>
				
		              </ul>
		            </div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch justify-content-end">
								<div class="img align-self-stretch" style="background-image: url(images/artists/artist-2.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3">
								<div>
									<h3 class="mb-2 text-blck shadow-lg">Eben</h3>
								
		            </div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch justify-content-end">
								<div class="img align-self-stretch" style="background-image: url(images/artists/artist-3.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3">
								<div>
									<h3 class="mb-2 text-blck shadow-lg">Eli-J</h3>
									
		            </div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch justify-content-end">
								<div class="img align-self-stretch" style="background-image: url(images/artists/artist-4.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3">
								<div>
									<h3 class="mb-2 text-blck shadow-lg">Buchi</h3>
									
		            </div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch justify-content-end">
								<div class="img align-self-stretch" style="background-image: url(images/artists/boundless.png);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3">
								<div>
									<h3 class="mb-2 text-blck shadow-lg">Boundless <br> Grace</h3>
						
		            </div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch justify-content-end">
								<div class="img align-self-stretch" style="background-image: url(images/artists/dedoris.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3">
								<div>
									<h3 class="mb-2 text-blck shadow-lg">Dee <br> Doris<br></h3>
									
		            </div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch justify-content-end">
								<div class="img align-self-stretch" style="background-image: url(images/artists/sammy.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3">
								<div>
									<h3 class="mb-2 text-blck shadow-lg">Sammy <br>HART</h3>
		                        </div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch justify-content-end">
								<div class="img align-self-stretch" style="background-image: url(images/artists/roy.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3">
								<div>
									<h3 class="mb-2 text-blck shadow-lg">Leroy <br>Sparks</h3>
		                        </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
<!-- TESTIMONIALS -->
<!--<section class="testimonials">-->
<!--    	<div class="container">-->
<!--				<div class="row justify-content-center pb-5">-->
<!--          <div class="col-md-12 heading-section heading-section-white text-center ftco-animate">-->
<!--          	<span class="subheading">Testimonies</span>-->
<!--            <h2 class="mb-4" style="color:black;">Amazing Testimonies</h2>-->
<!--            <p style="color: black;">Get inspired with Amazing Testimonies</p>-->
<!--          </div>-->
<!--        </div>-->
<!--	<div class="container">-->
<!--      <div class="row">-->
<!--        <div class="col-sm-12">-->
<!--          <div id="customers-testimonialss" class="owl-carousel">-->

            <!--TESTIMONIAL 1 -->
<!--            <div class="item">-->
<!--              <div class="shadow-effect">-->
<!--                <img class="img-circle" src="images/artists/sammy.jpg" alt="">-->
<!--                <p>I am happy to be a member of Christ Embassy Port Harcourt Zone 1, it's really a blessing to me, i am blessed, Haleluyiah.</p>-->
<!--              </div>-->
<!--              <div class="testimonial-name">Joshua B.</div>-->
<!--            </div>-->
            <!--END OF TESTIMONIAL 1 -->
            <!--TESTIMONIAL 2 -->
<!--            <div class="item">-->
<!--              <div class="shadow-effect">-->
<!--                <img class="img-circle" src="images/artists/sammy.jpg" alt="">-->
<!--              <p>I am happy to be a member of Christ Embassy Port Harcourt Zone 1, it's really a blessing to me, i am blessed, Haleluyiah.</p>-->
<!--              </div>-->
<!--              <div class="testimonial-name">Joshua B.</div>-->
<!--            </div>-->
            <!--END OF TESTIMONIAL 2 -->
            <!--TESTIMONIAL 3 -->
<!--            <div class="item">-->
<!--              <div class="shadow-effect">-->
<!--                <img class="img-circle" src="images/artists/sammy.jpg" alt="">-->
<!--               <p>I am happy to be a member of Christ Embassy Port Harcourt Zone 1, it's really a blessing to me, i am blessed, Haleluyiah.</p>-->
<!--              </div>-->
<!--              <div class="testimonial-name">Joshua B.</div>-->
<!--            </div>-->
            <!--END OF TESTIMONIAL 3 -->
            <!--TESTIMONIAL 4 -->
<!--            <div class="item">-->
<!--              <div class="shadow-effect">-->
<!--                <img class="img-circle" src="images/artists/sammy.jpg" alt="">-->
<!--              <p>I am happy to be a member of Christ Embassy Port Harcourt Zone 1, it's really a blessing to me, i am blessed, Haleluyiah.</p>-->
<!--              </div>-->
<!--              <div class="testimonial-name">Joshua B.</div>-->
<!--            </div>-->
            <!--END OF TESTIMONIAL 4 -->
            <!--TESTIMONIAL 5 -->
<!--            <div class="item">-->
<!--              <div class="shadow-effect">-->
<!--                <img class="img-circle" src="images/artists/sammy.jpg" alt="">-->
<!--             <p>I am happy to be a member of Christ Embassy Port Harcourt Zone 1, it's really a blessing to me, i am blessed, Haleluyiah.</p>-->
<!--              </div>-->
<!--              <div class="testimonial-name">Joshua B.</div>-->
<!--            </div>-->
            <!--END OF TESTIMONIAL 5 -->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--      </div>-->
<!--    </section>-->
    <!-- END OF TESTIMONIALS -->
    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Contact</span>
            <h2 class="mb-4">Contact Us</h2>
            <p></p>
          </div>
        </div>

        <div class="row block-9">
          <div class="col-md-7 order-md-last d-flex">
            <form action="#" class="bg-light p-4 p-md-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-5 d-flex">
          	<div class="row d-flex contact-info mb-5">
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-map-signs"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Address</h3>
				            <p>180 E/W Road, Opposite Mikab Filling Station, Rumuodara, Port Harcourt.</p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-phone2"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Contact Number</h3>
				            <p>08176482941</p>
				            <p>08094952812</p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-paper-plane"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Email Address</h3>
				            <p><a href="mailto:info@yoursite.com">info@gfmcph.com</a></p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-globe"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Website</h3>
				            <p><a href="#">cephzone1.org</a></p>
			            </div>
			          </div>
		          </div>
		        </div>
          </div>
        </div>
                <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">GFMC ON TV</span>
            <h2 class="mb-4">Watch us on TV</h2>
            <p></p>
          </div>
        </div>
         <div class="mytvs py-5 row">
        <div class="px-3 col-sm-6"><img width="100px" src="images/tvs/dstv-logo.png"></div>
        <div class="px-3 col-sm-6"><img width="100px" src="images/tvs/gotvNew.png"></div>
        <div class="px-3 col-sm-6"><img width="100px" src="images/tvs/StarTimes_B2C-02_(2).png"></div>
        <div class="px-3 col-sm-6"><img width="100px" src="images/tvs/CEFLIX-512x512 (1).png"></div>
        <div class="px-3 col-sm-6"><img width="50px" src="images/tvs/silverbird.jpg"></div>
        <div class="px-3 col-sm-6"><img width="150px" src="images/tvs/rstv.png"></div>
        <div class="px-3 col-sm-6"><img width="150px" src="images/tvs/wazobia.png"></div>
        <div class="px-3 col-sm-6"><img width="150px" src="images/tvs/NTA.png"></div>
        <!--<div class="px-3"><img width="200px" src="images/tvs/ait.png"></div>-->
        <!--<div class="px-3"><img width="200px" src="images/tvs/youtube.png"></div>-->
        <!--<div class="px-3"><img width="200px" src="images/tvs/instagram.png"></div>-->
        </div>
    </div>
      </div>
    </section>
    
    <style>
    
@import url(https://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,900,700italic,700,600italic,600,400italic);

.live-body {
  font-family: 'Titillium Web', cursive;
  width: 800px;
  margin: 0 auto;
  text-align: center;
  color: white;
  background: #222;
  font-weight: 100;
}

#timer {
  display: inline-block;
  line-height: 1;
  padding: 20px;
  font-size: 40px;
}

span {
  display: block;
  font-size: 20px;
  color: white;
}

#days {
  font-size: 100px;
  color: #db4844;
}
#hours {
  font-size: 100px;
  color: #f07c22;
}
#minutes {
  font-size: 100px;
  color: #f6da74;
}
#seconds {
  font-size: 50px;
  color: #abcd58;
}
</style>

<!-- Modal -->
<div class="modal fade" id="livenow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">We are Live Now</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
            <h1>Event Has Started..</h1>
            <a href="watch.php" class="btn btn-danger btn-lg"> Watch Live </a>
	  </div>
	</div>
  </div>
    
<!-- Modal -->
<div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Do you have counterfoils ?</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
			<h3>Take a photo of all your counterfoils and upload them here, if you have a database of them, Upload it.</h3>
			 <form id="registerform" action="uploadfile.php" method="POST" class="bg-light p-4 p-md-5 contact-form" enctype="multipart/form-data">
				<div class="form-group">
					<label for="selectfile">Upload Files</label>
				  <input multiple="multiple" id="selectfile" name="file[]" type="file" class="form-control" required>
				</div>
				<div class="form-group">
				  <button id="reg" type="submit" value="Register" class="btn btn-primary py-3 px-5">Upload</button>
				</div>
			
			  </form>
		</div>
		<div class="modal-footer">
		  <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
		  <!-- <button type="button" class="btn btn-primary">Notify Me</button> -->
		</div>
	  </div>
	</div>
  </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register for GFMCPH</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <form id="registerform" action="#" class="bg-light p-4 p-md-5 contact-form">
              <div class="form-group">
                <input name="name" type="text" class="form-control" placeholder="full name" required>
              </div>
              <div class="form-group">
                <input name="phone" type="text" class="form-control" placeholder="Phone Number" required>
              </div>
              <div class="form-group">
                <input name="email" type="text" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
              	<label>Are you a member ?</label>
              	<br>
                <label for="is_member">
                	<input type="radio" name="member" id="is_member" required>
                	Yes
                </label>
                <label for="is_not_member">
                	<input type="radio" name="member" id="is_not_member" required>
                	No
                </label>
              </div>
              <div class="form-group">
              	<input type="text" class="form-control" name="church" placeholder="Church Name">
              </div>
               <div class="form-group">
              	<input type="text" class="form-control" name="group" placeholder="Group Name">
              </div>
           <!--    <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div> -->
              <div class="form-group">
                <button id="reg" type="submit" value="Register" class="btn btn-primary py-3 px-5">Register</button>
              </div>
              <p>Already Registered ?</p>
               <a href="login.php" class="btn btn-primary">Sign In</a>
            </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <!-- <button type="button" class="btn btn-primary">Notify Me</button> -->
      </div>
    </div>
  </div>
</div>

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Follow Us</h2>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a target="_blank" href="https://www.youtube.com/channel/UCzuRz06oUspZoHh4Inx1KMg"><span class="icon-youtube"></span></a></li>
                <li class="ftco-animate"><a target="_blank" href="https://web.facebook.com/ceportharcourtzone1/"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a target="_blank" href="https://www.instagram.com/_phenomenallife/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                <!-- <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Schedule</a></li> -->
                <!-- <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Speakers</a></li> -->
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Privacy</h2>
              <ul class="list-unstyled">
                <!-- <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Career</a></li> -->
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About GFMC</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact Us</a></li>
                <!-- <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Buy Ticket</a></li> -->
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	           
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2348176482941</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@gfmcph.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | GFMC PH 2020
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
   <script type="text/javascript" src="hppt://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick/slick/slick.min.js"></script>
  <script src="js/google-map.js"></script>
  <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="9f67ce86-0794-46cd-a3d4-f85ce7cccbd2";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
  <script src="js/main.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('.mytvs').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
    });
    });
  </script>
  <script type="text/javascript">
  jQuery(document).ready(function($) {
        		"use strict";
        		//  TESTIMONIALS CAROUSEL HOOK
		        $('#customers-testimonialss').owlCarousel({
		            loop: true,
		            center: true,
		            items: 3,
		            margin: 0,
		            autoplay: true,
		            dots:true,
		            autoplayTimeout: 8500,
		            smartSpeed: 450,
		            responsive: {
		              0: {
		                items: 1
		              },
		              768: {
		                items: 2
		              },
		              1170: {
		                items: 3
		              }
		            }
		        });
        	});
  
  	$('#registerform').submit(function () {
  		event.preventDefault();
  		var oldbtn = $('#reg').html()
  		$('#reg').html('<i class="fas fa-spin spinner"></i> Registering...')
  		$.ajax({
  			url: 'signup.php',
  			type: 'post',
  			data: $('#registerform').serialize(),
  			success :function (data) {
  			   // alert(data);
  			   $('#reg').html(oldbtn);
  				if (data == 'yes') {
  					alert('Registration was successful, kindly check your mail.')
  						window.location.href="http://gfmcph.com/watch.php";
  				}
  			}
  		})
  	})
  	 $(document).ready(function () {
        // $('#exampleModal').modal('show');
         $('#livenow').modal('show');
    })
    
    
function makeTimer() {

	//		var endTime = new Date("29 April 2018 9:56:00 GMT+01:00");	
		var endTime = new Date("10 April 2020 3:00:00 GMT+01:00");			
			endTime = (Date.parse(endTime) / 1000);

			var now = new Date();
			now = (Date.parse(now) / 1000);

			var timeLeft = endTime - now;

			var days = Math.floor(timeLeft / 86400); 
			var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
			var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
			var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
  
			if (hours < "10") { hours = "0" + hours; }
			if (minutes < "10") { minutes = "0" + minutes; }
			if (seconds < "10") { seconds = "0" + seconds; }

			$("#days").html(days + "<span>Days</span>");
			$("#hours").html(hours + "<span>Hours</span>");
			$("#minutes").html(minutes + "<span>Minutes</span>");
			$("#seconds").html(seconds + "<span>Seconds</span>");		

	}

	setInterval(function() { makeTimer(); }, 1000);
    
  </script>
    
  </body>
</html>