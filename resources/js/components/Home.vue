<template>


<div id="app">
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>One more for good measure.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- about us -->
      <h2 class="h2 h2-responsive text-center">About Us</h2>

<div class="backgroundreview">
    <div class="container pb-3 pt-3">
    <div class="row">  
    <div class="col-12 col-md-6 p-3">    
        <div class="carousel-wrap">
                    <div class="owl-carousel" id="habt_sld">
            <div class="item">
                <h3>About ColourDrive</h3>
                <p class="text-justify">ColourDrive Home Solutions is Professional Painting Service Startup, serving across breath of Residential and Commercial Home Painting – Interior to Exterior, Budget(Rental) Painting to Texture, Stencil Work to Kids Décor Room. Our team includes geeks from IIT, NIT, Business Executives grads from Best Business School, Expert Painters - Trained and Certified at Best Painting Firms like Asian Paint. We are committed to provide best painting experience to customer. Currently we operate in  Bangalore, Hyderabad, Pune, Bhopal and Indore, looking forward to add happy customer across PAN India soon.</p>
            </div>
                        <div class="item">
                <h3>Paint Your Dreamy Home and Office</h3>
                <p class="text-justify">
        If it happens that you’re taking into consideration Home Painting, Wall Painting your home/Office or taking on remodelling or home improvement initiatives, meet Home Painters in India. <br>
Your Residential Painting Services India is a well-established, progressive Interior/Exterior painting and Residential Painting Contractor India and the Commercial Painting Services. With more than 10 years of 5-star entrepreneurial experience. Our commercial enterprise is a top-rated painting company on Painting Services. Now we have an A+ rating with the more effective Business venture Bureau. We have been committed to giving back up into the regional community.
        </p>
            </div>

                    </div>
                </div>  
    </div>
    <div class="col-md-6 d-none d-md-block p-3">
                <div class="text-center">
    <img :src="image18" style="height: 580px">
                </div>
            </div>
    </div>   
    </div>
</div> 
<!-- inspiration -->

    <h2 class="h2 h3-responsive text-center">Inspiration Gallery</h2>
    <div class="row">
<div class="col-md-9">
<h3>Want your walls look like this?</h3>
<span>Check out our collection for inspiration</span>
</div>
<div class="col-md-3">
        <button type="button" class="btn btn-primary btn-lg">Explore All</button>
</div>
</div>

    <br>
    <br>
   <div class="container">
    <div class="row">
        <div class="col-md-4">
    <img :src="image15" style="height: 250px">
        </div>
         <div class="col-md-4">
    <img :src="image16" style="height: 250px">
        </div>
         <div class="col-md-4">
    <img :src="image17" style="height: 250px">
        </div>
    </div>
    <br>
    <br>
    </div>
      <h2 class="h2 h7-responsive text-center">Our Painting Service</h2>

    <div class="container pt-5">
   
 <div class=" row text-center">
            <div class="row">
                <div class="col col-xs-5 p-4">
                    <a href="">
    <img :src="image" style="height: 50px">
                        <h3 class="h5 h5-responsive">Interior Painting</h3></a>
                </div>
                <div class="col col-xs-4 p-3">
                    <a href="">
                          <img :src="image1" style="height: 50px">
                        <h3 class="h5 h5-responsive">Exterior Painting</h3></a>
                </div> 
                <div class="col col-xs-4 p-3">
                    <a href="">
                          <img :src="image2" style="height: 50px">
                        <h3 class="h5 h5-responsive">Rental Painting</h3></a>
                </div>
                <div class="col col-xs-4 p-3">
                    <a href="">
                          <img :src="image3" style="height: 50px">
                        <h3 class="h5 h5-responsive">Textures Painting</h3></a>
                </div>
                <div class="col col-xs-4 p-3">
                    <a href="">
                          <img :src="image4" style="height: 50px">
                        <h3 class="h5 h5-responsive">Stencils Painting</h3></a>
                </div>                    
                <div class="col col-xs-4 p-3">
                    <a href="">
                          <img :src="image5" style="height: 50px">
                        <h3 class="h5 h5-responsive">Kids Decor</h3></a>
                </div>
                <div class="col col-xs-4 p-3">
                    <a href="">
                           <img :src="image6" style="height: 50px">

                        <h3 class="h5 h5-responsive">Wallpaper Painting</h3></a>
                </div>                   
                <div class="col col-xs-4 p-3">
                    <a href="">
                          <img :src="image7" style="height: 50px">
                        <h3 class="h5 h5-responsive">Free Hand Art</h3></a>
                </div>
                <div class="col col-xs-4 p-3">
                    <a href="">
                          <img :src="image8" style="height: 50px">
                        <h3 class="h5 h5-responsive">Water Proofing</h3></a>
                </div>
            </div>
        </div>
    </div>

            <h2 class="h2 h4-responsive text-center">How We Work</h2>
 <div class="backgroundwork">
        <div class="container-fluid pt-5 pb-5">
            
            <div class=" conatiner-fluid row text-center">
                <div class="col p-3">
                    <img :src="image9" style="height: 80px">

                    <h3 class="h5 h5-responsive">1. Easy To Book</h3>
                </div>
                <div class="col p-3">
                    <img :src="image10" style="height: 80px">
                    <h3 class="h5 h5-responsive">2. Laser Based Measurement</h3>
                </div>
                <div class="col p-3">
                    <img :src="image11" style="height: 80px">
                    <h3 class="h5 h5-responsive">3. Color Consultancy</h3>
                </div>
                <div class="col p-3">
                    <img :src="image12" style="height: 80px">
                    <h3 class="h5 h5-responsive">4. Cost Estimation</h3>
                </div>
                <div class="col p-3">
                    <img :src="image13" style="height: 80px">
                    <h3 class="h5 h5-responsive">5. Work Completion</h3>
                </div>
                <div class="col p-3">
                    <img :src="image14" style="height: 80px">
                    <h3 class="h5 h5-responsive">6. Customer Satisfaction</h3>
                </div>
            </div>
        </div>
    </div>
<!--  -->



            <h2 class="h2 h4-responsive text-center">How We Work</h2>
            <div class=container>
                <div class="row">
                    <div class="col-md-3">
            <img :src="image13" style="height: 80px">
        </div>
        <div class="col-md-9">

    </div>
</div>
</div>
<br><br>

<div class="bubble-links">
    <p>
  <a class="" data-toggle="collapse" href="#multiCollapseExample1" role="button">Toggle first element</a> 
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
</p>


<button type="button" class="btn btn-outline-primary btn-rounded waves-effect">Primary</button>
<button type="button" class="btn btn-outline-default btn-rounded waves-effect">Default</button>
<button type="button" class="btn btn-outline-secondary btn-rounded waves-effect">Secondary</button>
<button type="button" class="btn btn-outline-success btn-rounded waves-effect">Success</button>
<button type="button" class="btn btn-outline-info btn-rounded waves-effect">Info</button>
<button type="button" class="btn btn-outline-warning btn-rounded waves-effect">Warning</button>
<button type="button" class="btn btn-outline-danger btn-rounded waves-effect">Danger</button>
    <h2 class="h2 h3-responsive text-center">We Are In</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="https://aapkapainter.com/assets/newdesign/images/homepage/logo-painters-in-bangalore.png" alt="house painting in bangalore" style="height:150px;">
                <span>Bangalore</span>


            </div>

            <div class="col-md-3">
            <img src="https://aapkapainter.com/assets/newdesign/images/homepage/logo-painters-in-mumbai.png" alt="house painting in mumbai" style="height:150px;">
                <span>Mumbai</span>

        </div>
         <div class="col-md-3">
            <img src="https://aapkapainter.com/assets/newdesign/images/homepage/logo-painters-in-pune.png" alt="house painting in pune" style="height:180px;">
                <span>Pune</span>

        </div>
        <div class="col-md-3">
            <img src="https://aapkapainter.com/assets/newdesign/images/homepage/logo-painters-in-bangalore.png" alt="house painting in bangalore" style="height:180px;">
                            <span>Bangalore</span>

        </div>


        </div>
    </div>
</div>

<br>
<section class="py-3">
      <h2 class="h2 h8-responsive text-center">How We Work</h2>
      <br>
<div class="container">
    <div class="row grid-divider">
      <div class="col-sm-12 col-md-8 col-lg-4 my-1">
                    <img :src="image22" style="height: 80px">
                    <br>
                    <h4 text-center>Plan</h4>
<p>Schedule a free onsite<br />consutation by giving us a call</p>

</div>
 <div class="col-sm-12 col-md-8 col-lg-4 my-1">
   <img :src="image23" style="height: 80px">
                    <br>
                    <h4 text-center>Preview</h4>
<p>Get personalized design &amp; color<br />assistance to your living space</p>

</div>
 <div class="col-sm-12 col-md-8 col-lg-4 my-1">
  <img :src="image24" style="height: 80px">
                    <br>
                    <h4 text-center>Paint</h4>
<p>Watch on aapkapainter's expert<br />painters beautifully transform your space</p>

</div>
</div>
</div>
</section>





<!--  -->
<br>
<br>
 <div ss="container pt-5">
  <h2 class="h2 h8-responsive text-center">Live In Actions</h2>
    <hr class="hrline">
    <div class="row">
        <div class="col-md-4 pb-4">
            <div class="card hoverable h-100">
                <div class="youtube single_video" id="BdM9qNE4ojY"></div>
                <div class="p-3">
                    <h3 class="pt-2 h5 h5-responsive">
                        <a class="text_style" href=""><strong>Dr.Fixit Terrace Waterproofing</strong></a>
                    </h3>
                    <div>
                        <p><strong>Product:- </strong>Dr.Fixit</p>
                        <p><strong>Procedure:- </strong>Wire Brush Rubbing, Water Wash, Cracks and Joints filling by Dr.Fixit Crack Filler, 2Coat of Dr.Fixit Newcoat</p>
                    </div>
                    <a href="">Book Your Project</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 pb-4">
            <div class="card hoverable h-100">
                <div class="youtube single_video" id="aPbRSRnBJ7Q"></div>
                <div class="p-3">
                    <h3 class="pt-2 h5 h5-responsive">
                        <a class="text_style" href="https://www.colourdrive.in/stencil.php"><strong>Asian Paints Stencil</strong></a>
                    </h3>
                    <div>
                        <p><strong>Base Coat:- </strong>Lavender Secret</p>
                        <p><strong>Top Coat:- </strong>Brown on Branches, Purple on Leaves & Flowers</p>
                    </div>
                    <a href="" class="btn btn-primary mt-auto">Book Your Design</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 pb-4">
            <div class="card hoverable h-100">
                <div class="youtube single_video" id="HAOgrP3Wf4A"></div>
                <div class="p-3">
                    <h3 class="pt-2 h5 h5-responsive">
                        <a class="text_style" href="https://www.colourdrive.in/texture.php"><strong>Asian Paints Bloom Texture</strong></a>
                    </h3>
                    <div>
                        <p><strong>Base Coat:- </strong>Orange Tango(X113)</p>
                        <p><strong>Top Coat:- </strong>White(M0908)</p>
                    </div>
                    <div><a href="https://www.colourdrive.in/texture.php" class="btn btn-primary mt-auto">Book Your Design</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<h2 class="h2 h2-responsive text-center">Painting Guide</h2>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div id="blog-grid-div" class="container pt-5">
    <div class="row">
                <div class="col-md-4 pb-4">
            <div class="card hoverable h-100">
                <a href="">
                        <img :src="image19" style="max-height: 200px;min-height: 200px; width: 100%;" class="img-fluid lazy" alt=""></a>
                <div class="p-3">
                    <h3 class="pt-2 h5 h5-responsive">
                        <a class="text_style"><strong>Things to Remember Before Painting a Room</strong></a>
                    </h3>
                    <p><i class="fa fa-calendar-alt"></i> Dec 14, 2018</p>
                    <div class="text-justify">
                    <p>
    A fresh look and a new colour can give a new life to a room. Choosing a right colour and a right paint can make your home look beautiful and attractive. Painting our home can be considered as a home</p>
                    </div>
                    <a href="">Read More</a>
                </div>
            </div>
        </div>
                <div class="col-md-4 pb-4">
            <div class="card hoverable h-100">
                <a href="">
                   <img :src="image20" style="max-height: 200px;min-height: 200px; width: 100%;" class="img-fluid lazy" alt=""></a>
                <div class="p-3">
                    <h3 class="pt-2 h5 h5-responsive">
                        <a class="text_style" href=""><strong>Exterior Texture Painting</strong></a>
                    </h3>
                    <p><i class="fa fa-calendar-alt"></i> Jun 01, 2018</p>
                    <div class="text-justify">
                    <p>
    Since the exteriors of your home play an important role in creating a good first impression, they also become the starting point of ushering in prosperity.&nbsp;Home exteriors set the tone for what&#39;s on the inside, they essentially create the first</p>
                    </div>
                    <a href="">Read More</a>
                </div>
            </div>
        </div>
                <div class="col-md-4 pb-4">
            <div class="card hoverable h-100">
                <a href="">
                    <img :src="image21" style="max-height: 200px;min-height: 200px; width: 100%;" class="img-fluid lazy" alt=""></a>
                <div class="p-3">
                    <h3 class="pt-2 h5 h5-responsive">
                        <a class="text_style" href=""><strong>Asian Paints Exterior- Ace vs Apex vs Ultim vs Protek</strong></a>
                    </h3>
                    <p><i class="fa fa-calendar-alt"></i> May 19, 2018</p>
                    <div class="text-justify">
                    <p>
    Asian Paints offer a wide range of products for Interior and Exterior with different life time and properties. So we will have a look at most widely used categories of Asian Exterior collection.

    
        
            Ace Exterior Emulsion.
    


    Ace Emulsion is a starting range</p>
                    </div>
                    <a href="" class="btn btn-primary mt-auto">Read More</a>
                </div>
            </div>
        </div>
               
    </div>
</div>  
<!-- 
 -->

 <div class="faq_sec">
<div class="abt_title">
<h2 class="h2 h2-responsive text-center">Frequently Asked Question</h2>
</div>
<div id="blog-grid-div" class="container pt-5">

<div class="faq_dtls">
<div class="inr_wrk_dtls">
<div class="container">
<div class="question_padding text_justify">
<div class="faq_prt">
<h3>What is Colorwale?</h3>
<p>colorwale.in is the easiest way to paint your home or office, bringing in technology, automation and service guarantee. aapkapainter.com manages the entire process online, from paint selection, to quotes to service booking, project management and payment. We, at AapkaPainter are on mission to revolutionize the way homes get painted.</p>
</div>
<hr>
<div class="faq_prt">
 <h3>What is the overall procedure once I place a contact request? </h3>
<p>You will receive a call from us very soon. Then as per your comfort, we schedule a visit at your site and our qualified engineers will guide you with all your requirements along with helping you choose the right product, keeping your budget intact. Further, you get an email with completely customized quotation on the same day (in the best of situations). View your quotation, along with detailed measurements on your dashboard. We are always available, should you need any clarification or further customization.</p>
</div>
<hr>
<div class="faq_prt">
<h3>Why colorwale and not any local painter?</h3>
<p>We are true to our work and words. We do not charge a lump sum. We measure exact square foot. Use the exact materials promised. And yes, we deliver on time, always. All of colorwale's painters are trained and background checked, and there is a full team of project managers to guarantee job completion and satisfaction.</p>
</div>
<button type="button text-center" class="btn btn-primary btn-lg-center">All Questions</button>

<hr>
</div>
</div>
</div>
<div class="faq_lnk">
</div>
</div>
</div>
</div>
<br>
<br>


<section class="py-3">
    <h2 class="h2 h3-responsive text-center">Why COLORWALE</h2>
      <br>
<div class="container">
    <div class="row grid-divider">
      <div class="col-sm-12 col-md-6 col-lg-3 my-1">
                    <img :src="image25" style="height: 80px">
                    <br>
                    <h4 text-center>Genuine Pricing</h4>

</div>
 <div class="col-sm-12 col-md-6 col-lg-3 my-1">
   <img :src="image26" style="height: 80px">
                    <br>
                    <h4 text-center>1 Year warranty</h4>

</div>
 <div class="col-sm-12 col-md-6 col-lg-3 my-1">
  <img :src="image27" style="height: 80px">
                    <br>
                    <h4 text-center>Custom Designs</h4>

</div>
<div class="col-sm-12 col-md-6 col-lg-3 my-1">
  <img :src="image28" style="height: 80px">
                    <br>
                    <h4 text-center>Dedicated project
Managers</h4>

</div>
</div>
</div>
</section>
<br>
<br>


<footer class="page-footer backgroundfooter footerlink">
    <!--Footer Links-->
    <div class="container">
        <div class="row">
            <!--First column-->
            <div class="col-6 col-lg-3 col-sm-6 ml-auto">
                <h5 class="title mb-2"><strong>Services</strong></h5>
                <ul>
                    <li class="pb-2"><a href="https://www.colourdrive.in/interior-painting.php">Interior Painting</a></li>
                    <li class="pb-2"><a href="https://www.colourdrive.in/exterior-painting.php">Exterior Painting</a></li>
                    <li class="pb-2"><a href="https://www.colourdrive.in/rental-painting.php">Rental Painting</a></li>
                    <li class="pb-2"><a href="https://www.colourdrive.in/texture.php">Textures</a></li>
                    <li class="pb-2"><a href="https://www.colourdrive.in/stencil.php">Stencils</a></li>
                    <li class="pb-2"><a href="https://www.colourdrive.in/kids_decor.php">Kids-Decor</a></li>
                    <li class="pb-2"><a href="https://www.colourdrive.in/custom_designs.php">Wallpaper</a></li>
                    <li class="pb-2"><a href="https://www.colourdrive.in/water-proofing.php">Water Proofing</a></li>
                    <li class="pb-2"><a href="https://www.colourdrive.in/paints.php">Paint Products</a></li>
                </ul>
            </div>
            <!-- First column-->
            
            <!--Second column--> 
      <div class="col-6 col-lg-3 col-sm-6 ml-auto">
                <h5 class="title mb-2"><strong>Company</strong></h5>
                <ul>
                    <li class="pb-2"><a href="https://www.colourdrive.in/about-us.php">About Us</a></li>
                    <li class="pb-2"><a href="https://www.colourdrive.in/projects.php">Recent Projects</a></li>
        <li class="pb-2"><a href="https://www.colourdrive.in/gallery.php">Gallery</a></li>
                    <li class="pb-2"><a href="https://www.colourdrive.in/reviews.php">Reviews</a></li>
                    <li class="pb-2"><a href="https://www.colourdrive.in/faq.php">FAQs</a></li>
                    <li class="pb-2"><a href="https://www.colourdrive.in/contact-us.php">T&C</a></li>
                    <li class="pb-2"><a href="https://www.colourdrive.in/contact-us.php">Contact Us</a></li>
                    <li class="pb-2"><a href="https://www.colourdrive.in/career.php">Career</a></li>
        <li class="pb-2"><a href="https://www.colourdrive.in/diy">Blog</a></li>       
                </ul>
            </div>
            <!-- Second column-->
            <hr class="w-100 clearfix d-sm-none">
            <!--Third column-->            
      <div class="col-lg-3 col-sm-6 ml-auto">
                <h5 class="title mb-2"><strong>Offices</strong></h5>
                <p><a href="mailto:+91-9014182316"><i class="fa fa-envelope mr-2"></i> support@colorwale.in</a></p>
                <p><a href="tel:+91-9594942445"><i class="fa fa-phone mr-2"></i> +91-9594942445</a></p>
                <h6 class="pb-2" data-toggle="collapse" data-target="#bangaloreAddress" aria-expanded="false" aria-controls="bangaloreAddress"><i class="fas fa-map-marker-alt mr-2"></i><strong> BANGALORE</strong> <i class="fa fa-chevron-down"></i>
</h6>
    <p id="bangaloreAddress" class="text-justify collapse">#27, 3rd Cross, 5th Main, Bank of Baroda Colony, J P Nagar, 7th Phase, Bangalore - 560078</p>
    <h6 class="pb-2" data-toggle="collapse" data-target="#hyderabadAddress" aria-expanded="false" aria-controls="hyderabadAddress"><i class="fas fa-map-marker-alt mr-2"></i><strong> HYDERABAD</strong> <i class="fa fa-chevron-down"></i></h6>
    <p id="hyderabadAddress" class="text-justify collapse">#301, Ankitha Residency, Khanamet, Hitex Road, Kondapur, Hyderabad, Telangana - 500084</p>
    <h6 class="pb-2" data-toggle="collapse" data-target="#puneAddress" aria-expanded="false" aria-controls="puneAddress"><i class="fas fa-map-marker-alt mr-2"></i> <strong>PUNE</strong> <i class="fa fa-chevron-down"></i></h6>
    <p id="puneAddress" class="text-justify collapse">#102, Tranquility phase 2, Kodre Nagar, Shewalewadi, Manjari Farm, Pune - 412307</p>
    <h6 class="pb-2" data-toggle="collapse" data-target="#indoreAddress" aria-expanded="false" aria-controls="indoreAddress"><i class="fas fa-map-marker-alt mr-2"></i> <strong>INDORE</strong> <i class="fa fa-chevron-down"></i></h6>
    <p id="indoreAddress" class="text-justify collapse">#25 Sanchar Nagar Near Bengali Square, Indore, Madhya Pradesh - 452016</p>
    <h6 class="pb-2" data-toggle="collapse" data-target="#bhopalAddress" aria-expanded="false" aria-controls="bhopalAddress"><i class="fas fa-map-marker-alt mr-2"></i> <strong>BHOPAL</strong> <i class="fa fa-chevron-down"></i></h6>
    <p id="bhopalAddress" class="text-justify collapse">#2, Lalghati, Gufamandir road, Bhopal, Madhya Pradesh - 462023</p>
            </div>
            <!--Third column-->
            <hr class="w-100 clearfix d-sm-none">
            <!--Fourth column-->
      <div class="col-lg-3 col-sm-6 ml-auto">
                <h5 class="mb-2 h5-responsive title"><strong>Colorwale</strong></h5>
                <p>Home Painting Service Provider - Interior Exterior Texture Rental Painting Service Provider in Bangalore, Hyderabad, Pune, Mumbai, Delhi, Bhopal, Indore</p>
                <hr class="w-100 clearfix d-sm-none">
                <h5 class="mb-2"><strong>SOCIAL LINKS</strong></h5>
                <div class="h3">
                    <a target="_blank" href="https://goo.gl/maps/mdojHsEJYqp"><i class="fab fa-google mr-2"></i></a>
                    <a target="_blank" href="https://www.facebook.com/colourdrive/"><i class="fab fa-facebook mr-2"></i></a>
                    <a target="_blank" href="https://www.instagram.com/colourdrive.in/"><i class="fab fa-instagram mr-2"></i></a>
                    <a target="_blank" href="https://twitter.com/ColourDrive"><i class="fab fa-twitter-square mr-2"></i></a>
                    <a target="_blank" href="https://in.pinterest.com/colourdrive/"><i class="fab fa-pinterest-square mr-2"></i></a>
                    <a target="_blank" href="https://www.linkedin.com/company/10400491"><i class="fab fa-linkedin mr-2"></i></a>
                    <a target="_blank" href="https://www.youtube.com/channel/UCTtaHhqN87LYIGi-osmCLow"><i class="fab fa-youtube mr-2"></i></a>             
        <a target="_blank" href="https://www.quora.com/profile/Colour-Drive"><i class="fab fa-quora" aria-hidden="true"></i></a>
                </div>
            </div>           
            <!--Fourth column-->
            <hr class="w-100 clearfix d-sm-none">
            <!--Five column
            <div class="col-lg-2 col-sm-6 ml-auto">
                <h5 class="title mb-2"><strong>Follow Us</strong></h5>
                <div class="fb-page" data-href="https://www.facebook.com/colourdrive" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/colourdrive" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/colourdrive">ColourDrive</a></blockquote>
                </div>
            </div>
            Five column-->
        </div>
        <hr class="w-100 clearfix d-none d-md-block ">
        <div class="row">
      <div class="col-lg-3 col-sm-6 ml-auto">
    <h5 class="mb-2"><strong><a target="_blank" href="https://www.colourdrive.in/painters-in-bangalore">Painters in Bangalore</a></strong></h5>
                <ul>
                    <li class="pb-2"><a target="_blank" href="https://www.colourdrive.in/painters-in-Whitefield">Painters in Whitefield</a></li>
                    <li class="pb-2"><a target="_blank" href="https://www.colourdrive.in/painters-in-Marathahalli">Painters in Marathahalli</a></li>
        <li class="pb-2"><a target="_blank" href="https://www.colourdrive.in/painters-in-Bellandur">Painters in Bellandur</a></li>
        <li class="pb-2"><a target="_blank" href="https://www.colourdrive.in/painters-in-Bannerghatta%20Road">Painters Bannerghatta Road</a></li>       
        <li class="pb-2"><a target="_blank" href="https://www.colourdrive.in/painters-in-HSR%20Layout">Painters in HSR Layout</a></li>
                </ul>
      </div>
      <hr class="w-100 clearfix d-sm-none">
      <div class="col-lg-3 col-sm-6 ml-auto">
    <h5 class="mb-2"><strong><a target="_blank" href="https://www.colourdrive.in/painters-in-hyderabad">Painters in Hyderabad</a></strong></h5>
                <ul>
                    <li class="pb-2"><a target="_blank" href="https://www.colourdrive.in/painters-in-Kondapur">Painters in Kondapur</a></li>
                    <li class="pb-2"><a target="_blank" href="https://www.colourdrive.in/painters-in-Secunderabad">Painters in Secunderabad</a></li>
        <li class="pb-2"><a target="_blank" href="https://www.colourdrive.in/painters-in-Madhapur">Painters in Madhapur</a></li>
        <li class="pb-2"><a target="_blank" href="https://www.colourdrive.in/painters-in-Jubilee%20Hill">Painters in Jubilee Hill</a></li>        
        <li class="pb-2"><a target="_blank" href="https://www.colourdrive.in/painters-in-Kukatpally">Painters in Kukatpally</a></li>
                </ul>
      </div>
      <hr class="w-100 clearfix d-sm-none">
      <div class="col-lg-3 col-sm-6 ml-auto">
    <h5 class="mb-2"><strong><a target="_blank" href="https://www.colourdrive.in/painters-in-pune">Painters in Pune</a></strong></h5>
                <ul>
                    <li class="pb-2"><a target="_blank" href="https://www.colourdrive.in/painters-in-Hinjewadi">Painters in Hinjewadi</a></li>
                    <li class="pb-2"><a target="_blank" href="https://www.colourdrive.in/painters-in-Wakad">Painters in Wakad</a></li>
        <li class="pb-2"><a target="_blank" href="https://www.colourdrive.in/painters-in-Hadapsar">Painters in Hadapsar</a></li>
        <li class="pb-2"><a target="_blank" href="https://www.colourdrive.in/painters-in-Pimpri%20Chinchwad">Painters in Pimpri Chinchwad</a></li>        
        <li class="pb-2"><a target="_blank" href="https://www.colourdrive.in/painters-in-Wagholi">Painters in Wagholi</a></li>
                </ul>
      </div>
      <hr class="w-100 clearfix d-sm-none">
      <div class="col-lg-3 col-sm-6 ml-auto">
    <h5 class="mb-2"><strong><a target="_blank" href="https://www.colourdrive.in/painters-in-mumbai">Painters in Mumbai</a></strong></h5>
                <ul>
                    <li class="pb-2"><a target="_blank" href="https://www.colourdrive.in/painters-in-Mira%20Road">Painters in Mira Road</a></li>
                    <li class="pb-2"><a target="_blank" href="https://www.colourdrive.in/painters-in-Dombivli">Painters in Dombivli</a></li>
        <li class="pb-2"><a target="_blank" href="https://www.colourdrive.in/painters-in-Navi%20Mumbai">Painters in Navi Mumbai</a></li>
        <li class="pb-2"><a target="_blank" href="https://www.colourdrive.in/painters-in-Dharavi">Painters Dharavi</a></li>       
        <li class="pb-2"><a target="_blank" href="https://www.colourdrive.in/painters-in-Thane">Painters in Thane</a></li>
                </ul>
      </div>
        </div>
    </div>
    <!--Footer Links-->
    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2019 Copyright: <a href="https://www.colorwale.in/"> Colorwale.in </a> All Rights Reserved.
        </div>
    </div>
    <!--Copyright-->
</footer>

</div>



</template>

<script type="text/javascript">


  export default {
    data(){
      return {
        //image: '',
        image: 'img/E.jpg',
        image1: 'img/interior.jpg',
        image2: 'img/rent.png',
        image3: 'img/teture.png',
                image4: 'img/stencils.png',
                        image5: 'img/kids.png',
        image6: 'img/wallpaper.png',
        image7: 'img/freehand.png',

        image8: 'img/waterproof.png',

        image9: 'img/book.png',
        image10: 'img/laser.jpg',
                image11: 'img/color.jpg',
                image12: 'img/cost.jpg',
image13: 'img/work.jpg',
                image14: 'img/customer.png',
                image15: 'img/colorwale1.jpg',
                image16: 'img/main1.jpg',
                image17: 'img/main2.jpg',

                image18: 'img/paint.png',
                image19: 'img/things.jpg',
                image20: 'img/exterior1.jpg',
                image21: 'img/asian.jpg',
                                image22: 'img/plan.png',
                                image23: 'img/preview.png',
                                image24: 'img/paint1.png',
                                image25: 'img/PRICING.png',
                                image26: 'img/warranty.png',
                                image27: 'img/customde.png',
                                image28: 'img/managers.png',



       
      
      }
    
      
    },

    mounted() {
      console.log('Component mounted.')
    } 
  }



  </script>




