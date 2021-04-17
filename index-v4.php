<!DOCTYPE html>
<html lang="en">
<head>
<meta name="description" content="NectarSpot, a Google Partner Company, is top ranking and fastest growing marketing and design company specializing in web and mobile app design &amp; development, paid search optimization, marketing automation, email campaign management and voice services provider."/>
<meta property="og:description" content="NectarSpot, a Google Partner Company, is top ranking and fastest growing marketing and design company specializing in web and mobile app design &amp; development, paid search optimization, marketing automation, email campaign management and voice services provider."/>
<title>IIMnet</title>
<?php include 'includes/snippets/meta-data.php'; ?>
<link rel="apple-touch-icon" href="touch-icon-iphone.png">
<link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad.png">
<link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png">
<link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png">   
<style>
<?php  include 'includes/css/bootstrap.min.css' ?>
<?php  include 'includes/css/fontawesome.css' ?>
<?php  include 'includes/css/montserrat.css' ?>
<?php  include 'includes/css/color-change-hv8-up.css' ?>
<?php  include 'includes/css/tabs.css' ?>
<?php  include 'includes/css/table.css' ?>
<?php  include 'includes/css/animate.css' ?>
<?php  include 'includes/css/header-footer-updated.css' ?> 
<?php  include 'includes/css/owl.carousel.min.css' ?>
<?php  include 'includes/css/owl.theme.default.min.css' ?>

/*new-styles-iim*/
.brtlr {
  border-top-left-radius: 6px;
  border-top-right-radius: 6px
}
.compare-table-mobile .carousel-item {
  margin-bottom: 1em
}
.compare-table-mobile .carousel-indicators li {
    border-radius: 50%;
    width: 10px;
    height: 10px;
      margin-right: 10px;
    margin-left: 10px;}
 .compare-table-mobile  .carousel-indicators {
    bottom: -3em;}
   .compare-table-mobile  .carousel-indicators li {
    background-color: #d6d6d6 !important;
    opacity: 1
}
 .compare-table-mobile  .carousel-indicators li.active {
    background-color: #1b48b2 !important;
    opacity: 1
}
.fs-15 {
  font-size: 15px
}
.fs-10 {
  font-size: 10px
}
.fw-700 {
  font-weight: 700
}

.case-studies .case-study {
    display: flex;
    flex-direction: column;
    height: 100%;
    border-radius: 6px;
     -webkit-box-shadow: 0 0 2.1875rem 0 rgb(0 0 0 / 7%);
    box-shadow: 0 0 2.1875rem 0 rgb(0 0 0 / 7%);
}
.case-studies .case-study a {
    color: #000;
}
.case-studies .case-study p {
    padding: 2em;
    font-weight: 600;
}
.cs-topic p {
    padding: 1em !important;
    margin-bottom: 0 !important;
}
.select-label {
  width: 100%;
  margin-bottom: 0
}
.select-icon {
    position: absolute;
    left: 28px;
    top: 22px;
    width: 20px;
    height: 20px;
    margin-top: -10px;
    font-size: 18px;
    line-height: 20px;
    text-align: center;
    color: #979797;
    z-index: 2;
}
/*.form-select::after {
  font-family: "Font Awesome 5 Free";
    content: '\f058'; 
}*/
.form-select {padding-left: 40px; color:  #33475b;     -webkit-appearance: searchfield !important;}
.test-icon {
  border-radius: 50%;
    width: 80px;
    /*height: 80px;*/
}

.full-width {
  width: auto !important
}
.form-input {
  margin-bottom: 0 !important
}
.details-box {
background-color: #fff;
    box-shadow: 0 1px 11px 1px rgb(8 1 24 / 10%);
    padding: 1em;
    z-index: 100;
    position: relative;
    margin: -32px auto 1em;
    display: table;
    border-radius: 6px;
}
.banner-grid {
  display: grid;
    grid-auto-columns: 1fr;
    grid-column-gap: 1em;
    grid-row-gap: 0;
    -ms-grid-columns: 1fr 1fr 1fr 1fr 1fr;
    grid-template-columns: 1fr 1fr;
    margin-bottom: 0;

}
.banner-grid p {
  font-size: 15px;
  line-height: normal;
}
.li-br {
  border-right: 1px solid #e9e9e9;
  padding-right: 1em
}
.banner-icons {
      text-align: center;
    width: 32px;
    height: 32px;
    border-radius: 32px;
    background: var(--main-dark-blue-color);
    line-height: 32px;
    font-size: 17px;
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
    color: #fff;
    margin-right: 1em;
}

.icon i{font-size: 30px;
    padding: 0 0 10px 0;
    color: var(--main-light-blue-color);}
.box-shadow{border:none;background-color:#fff; margin-top:1em; padding: 1em}
.steps .active{box-shadow: 0px 0px 25px rgb(0 0 0 / 8%); border-radius:5px; border-left:2px solid var(--main-dark-blue-color) !important;}
.step-text{color:var(--main-dark-blue-color);font-size:14px;font-weight:600;}
.steps .head{font-weight:600;}
.steps{padding:10px 0px;}
/*.steps-img{width:80%;}*/
.step-btn{margin:25px auto;display:table;}
.tab .para-text{text-align:left;}
.tab .head{margin-bottom:0;text-align:left;}
.tab .step-text {margin-bottom:0;}
.container-band-bg {
  background-color: var(--main-dark-blue-color);
     padding: 15px 0 !important;
  color: #fff;
}
.image-box {
  
    height: 220px;
    display: flex;
    align-items: center;}
@media (max-width: 1100px) {
  .iframe-video {
     width: 100% !important; 
}
}
@media (max-width: 991px) { 
 .offset-1 {
  margin-left: 0}
.container-band-bg {
  text-align: center;
}
}
@media (max-width: 767px) {
.offset-1 {
  margin-left: 0}
}
@media (max-width: 575px) {
  .banner-icons {
    margin-right: 0
  }
  .banner-text-div .pr-0 {
    padding-right: 15px !important
  }
}
</style>

</head>
<body class="home-page index body">

<?php include "includes/snippets/header-updated.php" ?>  
<div class="about-section tabs-functionality ">
    
    <div class="container-fluid full-wrapper">
        <div class="container wrapper">
         <div class="row">
            <div class="col-lg-6 banner-text-div">
                <h1 class="main-heading">Work with best Interns to Grow Your Business</h1>
                <p class="banner-text">Get your work done by hiring<sup><i class="fas fa-star-of-life blue-font fs-10"></i></sup> pre-vetted MBA interns and freelancers, backed by senior MBA mentors</p>
                <p><i class="fas fa-star-of-life blue-font mr-2"></i>Hire Interns Free (a limited time offer)</p>
                <div class="row align-item-center">
                  <div class="col-sm-8 pr-0">
                    <form>
                      <label for="fields" class="select-label"><i class="fas fa-search select-icon"></i> 
 <select name="fields" id="fields" class="form-input form-select">
                   <option value="I am looking to hire intern(s)">I am looking to hire intern(s)</option>
                   <option value="I am looking to hire freelancer(s)">I am looking to hire freelancer(s)</option>
                   <option value="I want to apply as an intern<">I want to apply as an intern</option>
                   <option value="I want to apply as an freelancer">I want to apply as an freelancer</option>
                   <option value="Others">Others</option>
                   <!--  -->
                 </select>
                      </label>
                
               </form>
                  </div>
                  <div class="col-sm-4 pl-0">
                    <a href="#" class="btn-blue-white mob-center">Learn More ➞</a>
                  </div>
                </div>
               
                
              
         </div>
         <div class="col-lg-6 tab-mtb2">

          <div id="banner-carousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/banner-img.jpg" width="" height="" alt="Banner Image" class="img-back">
              <div class="details-box">
                <ul class="banner-grid">
                  <li class="li-br">
                    <p><b>Expertise</b></p>
                    <p>Lead Gen, Operations, Digital 
 </p>
                  </li>
                  <li>
                    <p><b>Platform</b></p>
                    <p>
                      <i class="fab fa-facebook-f banner-icons"></i>
                      <i class="fab fa-linkedin-in banner-icons"></i>
                      <i class="fab fa-amazon banner-icons"></i></p>
                  </li>
                </ul>
              </div>
    </div>
    <div class="carousel-item">
      <img src="images/banner-img2.jpg" width="" height="" alt="Banner Image" class="img-back">
              <div class="details-box">
                <ul class="banner-grid">
                  <li class="li-br">
                    <p><b>Expertise</b></p>
                    <p>Lead Gen, Operations, Digital 
 </p>
                  </li>
                  <li>
                    <p><b>Platform</b></p>
                    <p>
                      <i class="fab fa-facebook-f banner-icons"></i>
                      <i class="fab fa-linkedin-in banner-icons"></i>
                      <i class="fab fa-amazon banner-icons"></i></p>
                  </li>
                </ul>
              </div>
    </div>
     <a class="carousel-control-prev" href="#banner-carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left"></i></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#banner-carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
</div>

         

         </div>
        </div>
    </div>
</div>
</div>
<div class="ns-partners ns-awards ptb-3">
        <div class="container-fluid full-wrapper">
            <div class="container wrapper">
                <div class="row">
                    <div class="col-lg-12">

                        <center>
                            <h2 class="sub-heading blue-font"><span class="uline">Our Brand Associations</span> (Past and Present) </h2>
                        </center>
                        <div class="owl-carousel owl-theme">
                            <div class="item image-box">
                                <img width="300" height="200" data-class="LazyLoad" src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src="images/square-yards-logo.png" alt="image">
                            </div>
                            <div class="item image-box">
                                <img width="300" height="200" data-class="LazyLoad" src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src="images/pnb-metlife-logo.png" alt="image">
                            </div>
                            <div class="item image-box">
                                <img width="300" height="200" data-class="LazyLoad" src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src="images/giftxoxo-logo.png" alt="image">
                            </div>
                            <div class="item image-box">
                                <img width="300" height="200" data-class="LazyLoad" src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src="https://nectarspot.com/images/new-ns-clear-logo.png" alt="image">
                            </div>
                            <div class="item image-box">
                                <img width="300" height="200" data-class="LazyLoad" src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src="images/zoho-logo.png" alt="image">
                            </div>
                            


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<div class="section-5 ptb-5">
    <div class="container-fluid full-wrapper">
        <div class="container wrapper">
           <h2 class="sub-heading blue-font text-center">Learn what you may <span class="uline">Achieve</span></h2>
          <div class="row">
            <div class="col-md-4">
              <div class="mb-5">
                            <div class="icon">
                               <img data-class="LazyLoad" src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src="images/icon1a.png" alt="Icon 1" width="64" height="64" class="mb-3">
                          </div>
                           <div class="icon-para">
                                <p>Understand Your Market - Business Strategy & Foundational Finance </p>
                            </div>        
                        </div>
                      </div>
                        <div class="col-md-4">
                            <div class="mb-5">
                            <div class="icon">
                             <img data-class="LazyLoad" src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src="images/icon1b.png" alt="Icon 1" width="64" height="64" class="mb-3">
                            </div>
                            <div class="icon-para">
                            <p>Build a Sales & Marketing Plan</p>
                            </div>
                        </div>
                      </div>
                        <div class="col-md-4">
                            <div class="mb-5">
                           <div class="icon">
                             <img data-class="LazyLoad" src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src="images/icon1c.png" alt="Icon 1" width="64" height="64" class="mb-3">
                          </div>
                          <div class="icon-para">
                            <p>Set Your Pricing Strategy and Perform Competition Analysis</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                          <div class="mb-5">
                          <div class="icon">
                             <img data-class="LazyLoad" src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src="images/icon1d.png" alt="Icon 1" width="64" height="64" class="mb-3">
                          </div>
                        <div class="icon-para">
                        <p>Cultivate and Grow Your Brand across Channels</p>
                        </div>
                      </div>
                      </div>
                      <div class="col-md-4">
                          <div class="mb-5">
                           <div class="icon">
                             <img data-class="LazyLoad" src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src="images/icon1e.png" alt="Icon 1" width="64" height="64" class="mb-3">
                          </div>
                          <div class="icon-para">
                              <p>Co-Strategize and Communicate Your Business Concept </p>
                          </div>
                          </div>  
                      </div>
                       <div class="col-md-4">
                          <div class="mb-5">
                           <div class="icon">
                             <img data-class="LazyLoad" src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src="images/icon1f.png" alt="Icon 1" width="64" height="64" class="mb-3">
                          </div>
                          <div class="icon-para">
                              <p>Test Assumptions With Customer Research & Analysis</p>
                          </div>
                           </div> 
                      </div>
            </div>
        </div>
    </div>
</div>

<div class="ptb-5 wow fadeInLeft" data-wow-duration="2s">
  <div class="container wrapper">
    <h2 class="sub-heading blue-font  text-center">Why we <span class="uline">Exist</span></h2>

                <div class="c-table-table">
                    <div class="c-table-column">
                        <div class="c-table-rowcell"></div>
                        <div class="c-table-rowcell ceentr-grey align-left"><div class="table-row-lable">Expertise Level</div></div>
                        <!-- <div class="c-table-rowcell align-left"><div class="table-row-lable">Management service</div></div> -->
                        <div class="c-table-rowcell align-left"><div class="table-row-lable">Pricing</div></div>
                        <div class="c-table-rowcell ceentr-grey align-left"><div class="table-row-lable">Tools and Frameworks</div></div>
                        <div class="c-table-rowcell  align-left"><div class="table-row-lable">Oversight</div></div>
                        <div class="c-table-rowcell ceentr-grey align-left"><div class="table-row-lable">NDA & Non-Compete Agreement</div></div>
                    </div>
                    <div class="c-table-column">
                        <div class="c-table-rowcell"><div class="table-headline">Marketplace(s)</div></div>
                        <div class="c-table-rowcell ceentr-grey"><div class="table-row-value">Very Low to Medium</div></div>
                        <!-- <div class="c-table-rowcell"><img src="images/table-close-icon.svg" alt="" /></div> -->
                        <div class="c-table-rowcell ">
                            <div class="table-row-value">Very Difficult to Attribute <br /></div>
                        </div>
                        <div class="c-table-rowcell ceentr-grey"><img src="images/table-close-icon.svg" alt="" /></div>
                        <div class="c-table-rowcell">
                            <div class="table-row-value">Transactional only<br /></div>
                        </div>
                        <div class="c-table-rowcell ceentr-grey"><img src="images/table-close-icon.svg" alt="" /></div>
                    </div>
                    <div class="c-table-column iimnet-column">
                        <div class="c-table-rowcell"><div class="table-row-value color-text-white bigger fw-600">IIMnet</div></div>
                        <div class="c-table-rowcell"><div class="table-row-value color-text-white bigger">Pre-Vetted Interns & Freelancers</div></div>
                        <!-- <div class="c-table-rowcell"><img src="images/table-check-circle.svg" alt="check" /></div> -->
                        <div class="c-table-rowcell"><div class="table-row-value color-text-white bigger">Fixed </div></div>
                        <div class="c-table-rowcell"><div class="table-row-value color-text-white bigger">Best in Class</div></div>
                        <div class="c-table-rowcell"><div class="table-row-value color-text-white bigger">Unbiased</div></div>
                        <div class="c-table-rowcell"><div class="table-row-value color-text-white bigger">Full</div></div>
                    </div>
                    <div class="c-table-column">
                        <div class="c-table-rowcell"><div class="table-headline">In-house</div></div>
                        <div class="c-table-rowcell ceentr-grey"><div class="table-row-value">Varies</div></div>
                        <!-- <div class="c-table-rowcell">
                            <div class="c-table-rowcell"></div>
                            <img src="images/table-close-icon.svg" alt="" />
                        </div> -->
                        <div class="c-table-rowcell"><div class="table-row-value">$$$</div></div>
                        <div class="c-table-rowcell ceentr-grey"><div class="table-row-value">Limited or expensive</div></div>
                        <div class="c-table-rowcell"><div class="table-row-value">Varies</div></div>
                        <div class="c-table-rowcell ceentr-grey"><div class="table-row-value">Varies</div></div>
                    </div>
                    <div class="c-table-column">
                        <div class="c-table-rowcell"><div class="table-headline">Agencies</div></div>
                        <div class="c-table-rowcell ceentr-grey"><div class="table-row-value">Varies</div></div>
                        <!-- <div class="c-table-rowcell"><div class="table-row-value">Varies</div></div> -->
                        <div class="c-table-rowcell"><div class="table-row-value">$$$</div></div>
                        <div class="c-table-rowcell ceentr-grey"><div class="table-row-value">Limited</div></div>
                        <div class="c-table-rowcell"><div class="table-row-value">Only for big clients</div></div>
                        <div class="c-table-rowcell ceentr-grey">
                            <div class="c-table-rowcell"><img src="images/table-close-icon.svg" alt="" /></div>
                        </div>
                    </div>
                </div>
           
            <div class="compare-table-mobile pb-5">

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
   <ol class="carousel-indicators"> 
        <li data-target="#carouselExampleControls" data-slide-to="0" class="active">
          
        </li> 
        <li data-target="#carouselExampleControls" data-slide-to="1">
          
        </li> 
        <li data-target="#carouselExampleControls" data-slide-to="2">
          
        </li>
        <li data-target="#carouselExampleControls" data-slide-to="1">
          
        </li> 
        <li data-target="#carouselExampleControls" data-slide-to="2">
          
        </li>  
      </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
     <div class="compare-slide w-slide">
                            <div class="compare-card">
                                <div class="mobile-headline">Expertise Level</div>
                                <div class="row">
                                    <div class="c-table-rowcell-copy ceentr-grey no-border"><div class="table-headline"></div></div>
                                    <div class="c-table-rowcell-copy ceentr-grey no-border"><div class="table-row-value">Very Low to Medium</div></div>
                                </div>
                                <div class="row prom">
                                    <div class="c-table-rowcell-copy ceentr-grey no-border">
                                       <div class="table-row-value bigger  fw-600">
                                        <p>IIMnet</p>
                                        </div>
                                    </div>
                                    <div class="c-table-rowcell-copy ceentr-grey no-border"><div class="table-row-value bigger mob-left">Pre-Vetted Interns & Freelancers</div></div>
                                </div>
                                <div class="row">
                                    <div class="c-table-rowcell-copy"><div class="table-headline">In-house</div></div>
                                    <div class="c-table-rowcell-copy"><div class="table-row-value">Varies</div></div>
                                </div>
                                <div class="row prom">
                                    <div class="c-table-rowcell-copy ceentr-grey no-border"><div class="table-headline">Agencies</div></div>
                                    <div class="c-table-rowcell-copy no-border"><div class="table-row-value">Varies</div></div>
                                </div>
                            </div>
                        </div>
    </div>
    <!-- <div class="carousel-item">
       <div class="compare-slide w-slide">
                            <div class="compare-card">
                                <div class="mobile-headline">Management service</div>
                                <div class="row">
                                    <div class="c-table-rowcell-copy"><div class="table-headline">Marketplace(s)</div></div>
                                    <div class="c-table-rowcell-copy"><img src="images/table-close-icon.svg" alt="" /></div>
                                </div>
                                <div class="row prom">
                                    <div class="c-table-rowcell-copy ceentr-grey no-border">
                                       <div class="table-row-value bigger  fw-600">IIMnet</div>
                                    </div>
                                    <div class="c-table-rowcell-copy ceentr-grey no-border"><img src="images/table-check-circle.svg" alt="check" /></div>
                                </div>
                                <div class="row">
                                    <div class="c-table-rowcell-copy"><div class="table-headline">In-house</div></div>
                                    <div class="c-table-rowcell-copy"><img src="images/table-close-icon.svg" alt="" /></div>
                                </div>
                                <div class="row">
                                    <div class="c-table-rowcell-copy no-border"><div class="table-headline">Agencies</div></div>
                                    <div class="c-table-rowcell-copy no-border"><div class="table-row-value">Varies</div></div>
                                </div>
                            </div>
                        </div>
    </div> -->
    <div class="carousel-item">
     <div class="compare-slide w-slide">
                            <div class="compare-card">
                                <div class="mobile-headline">Pricing</div>
                                <div class="row">
                                    <div class="c-table-rowcell-copy"><div class="table-headline"></div></div>
                                    <div class="c-table-rowcell-copy"><div class="table-row-value">Very Difficult to Attribute</div></div>
                                </div>
                                <div class="row prom">
                                    <div class="c-table-rowcell-copy ceentr-grey no-border">
                                       <div class="table-row-value bigger fw-600">IIMnet</div>
                                    </div>
                                    <div class="c-table-rowcell-copy ceentr-grey no-border"><div class="table-row-value bigger">Fixed</div></div>
                                </div>
                                <div class="row">
                                    <div class="c-table-rowcell-copy"><div class="table-headline">In-house</div></div>
                                    <div class="c-table-rowcell-copy"><div class="table-row-value">$$$</div></div>
                                </div>
                                <div class="row prom">
                                    <div class="c-table-rowcell-copy no-border"><div class="table-headline">Agencies</div></div>
                                    <div class="c-table-rowcell-copy no-border"><div class="table-row-value">$$$</div></div>
                                </div>
                            </div>
                        </div>
    </div>
     <div class="carousel-item">
      <div class="compare-slide w-slide">
                            <div class="compare-card">
                                <div class="mobile-headline">Tools and Frameworks</div>
                                <div class="row">
                                    <div class="c-table-rowcell-copy"><div class="table-headline"></div></div>
                                    <div class="c-table-rowcell-copy"><img src="images/table-close-icon.svg" alt="" /></div>
                                </div>
                                <div class="row prom">
                                    <div class="c-table-rowcell-copy ceentr-grey no-border">
                                       <div class="table-row-value bigger fw-600">IIMnet</div>
                                    </div>
                                    <div class="c-table-rowcell-copy ceentr-grey no-border"><div class="table-row-value bigger">Best in Class</div></div>
                                </div>
                                <div class="row">
                                    <div class="c-table-rowcell-copy"><div class="table-headline">In-house</div></div>
                                    <div class="c-table-rowcell-copy"><div class="table-row-value">Limited or expensive</div></div>
                                </div>
                                <div class="row prom">
                                    <div class="c-table-rowcell-copy  ceentr-grey no-border"><div class="table-headline">Agencies</div></div>
                                    <div class="c-table-rowcell-copy no-border"><div class="table-row-value">Limited</div></div>
                                </div>
                            </div>
                        </div>
     </div>
     <div class="carousel-item">
       <div class="compare-slide w-slide">
                            <div class="compare-card">
                                <div class="mobile-headline">Oversight</div>
                                <div class="row">
                                    <div class="c-table-rowcell-copy"><div class="table-headline"></div></div>
                                    <div class="c-table-rowcell-copy"><div class="table-row-value">Transactional only</div></div>
                                </div>
                                <div class="row prom">
                                    <div class="c-table-rowcell-copy ceentr-grey no-border">
                                       <div class="table-row-value bigger fw-600">IIMnet</div>
                                    </div>
                                    <div class="c-table-rowcell-copy ceentr-grey no-border"><div class="table-row-value bigger">Unbiased</div></div>
                                </div>
                                <div class="row">
                                    <div class="c-table-rowcell-copy"><div class="table-headline">In-house</div></div>
                                    <div class="c-table-rowcell-copy"><div class="table-row-value">Varies</div></div>
                                </div>
                                <div class="row prom">
                                    <div class="c-table-rowcell-copy  ceentr-grey no-border"><div class="table-headline">Agencies</div></div>
                                    <div class="c-table-rowcell-copy no-border"><div class="table-row-value">Only for big clients</div></div>
                                </div>
                            </div>
                        </div>
     </div>
     <div class="carousel-item">
      <div class="compare-slide w-slide">
                            <div class="compare-card">
                                <div class="mobile-headline">NDA & Non-Compete Agreement</div>
                                <div class="row">
                                    <div class="c-table-rowcell-copy"><div class="table-headline"></div></div>
                                    <div class="c-table-rowcell-copy"><img src="images/table-close-icon.svg" alt="" /></div>
                                </div>
                                <div class="row prom">
                                    <div class="c-table-rowcell-copy ceentr-grey no-border">
                                       <div class="table-row-value bigger fw-600">IIMnet</div>
                                    </div>
                                    <div class="c-table-rowcell-copy ceentr-grey no-border"><div class="table-row-value bigger">Full</div></div>
                                </div>
                                <div class="row">
                                    <div class="c-table-rowcell-copy"><div class="table-headline">In-house</div></div>
                                    <div class="c-table-rowcell-copy"><div class="table-row-value">Varies</div></div>
                                </div>
                                <div class="row prom">
                                    <div class="c-table-rowcell-copy  ceentr-grey no-border"><div class="table-headline">Agencies</div></div>
                                    <div class="c-table-rowcell-copy no-border"><img src="images/table-close-icon.svg" alt="" /></div>
                                </div>
                            </div>
                        </div>
     </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left"></i></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span>
    <span class="sr-only">Next</span>
  </a>
</div>

 </div>

  </div>
</div>

<div class="section-5 ptb-5 wow fadeInLeft" data-wow-duration="2s">
    <div class="container-fluid full-wrapper">
        <div class="container wrapper">
        <h2 class="sub-heading blue-font  text-center">We go the extra mile to find talent(s) to fulfill your <span class="uline"> business objective(s)</span></h2>
            <div class="row tab-column-reverse">
                <div class="col-lg-7 wow fadeInLeft tab-mtb2" data-wow-duration="1s">
                    <div id="step1" class="tabcontent">
                      <img width="731" height="876" data-class="LazyLoad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-src="images/iim-dashboard.png" alt="image" class="">
                    </div>
                    
                    <div id="step2" class="tabcontent">
                      <img width="731" height="876" data-class="LazyLoad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-src="images/iim-dashboard.png" alt="image" class="">
                      <p>iim</p>
                    </div>
                    
                    <div id="step3" class="tabcontent">
                      <img width="731" height="876" data-class="LazyLoad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-src="images/iim-dashboard.png" alt="image" class="">
                       <p>iimnet</p>
                    </div>
                </div>
                   <div class="col-lg-5 wow fadeInRight mob-mt2" data-wow-duration="1s">
                        <div class="tab steps">
                          <button class="tablinks box-shadow" onclick="openCity(event, 'step1')" id="defaultOpen">
                                  <p class="para-text step-text">STEP 1</p>
                                  <p class="head">Let's understand what you want to achieve?</p> 
                                  <p class="para-text">We will understand your business goals for hiring interns/freelancers to match the right fit</p>
                          </button>
                          <button class="tablinks box-shadow" onclick="openCity(event, 'step2')">
                                  <p class="para-text step-text">STEP 2</p>
                                  <p class="head">Interview and finalize your intern/freelancer</p> 
                                  <p class="para-text">Our team assisted with proprietary technology will help to match the right intern/freelancer that matches for your business need(s)</p>
                          </button>
                          <button class="tablinks box-shadow" onclick="openCity(event, 'step3')">
                                  <p class="para-text step-text">STEP 3</p>
                                  <p class="head">Continuous Mentoring and Oversight</p> 
                                  <p class="para-text">IIMnet team monitors the output and overall project performance for quality and overall satisfaction. For any concern, you may reach out to our account manager to resolve the pertinent issue in hand</p>
                          </button>
                          
                        </div>
                        <a aria-label="link" href="#" class="btn-blue-white full-width tab-center">I am ready to post my requirement ➞</a>
                    </div>
                
            </div>
                
           
        </div>
    </div>
</div>    



<div class="ptb-5">
  <div class="container wrapper">
    <h2 class="sub-heading blue-font  text-center">Build and Grow businesses with help of <span class="uline">Interns and Freelancers</span></h2>
     <div class="row align-item-center">
            <div class="col-md-7">
              <div class="video">
                <iframe class="iframe-video" width="560" height="315" src="https://www.youtube.com/embed/BMMMVqbmNkE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              
            </div>
            <div class="col-md-5 tab-mtb2">
              <p>"Crowdsourcing allows marketers to engage users with their brand and collect creative ideas"</p>
              <div class="row">
                <div class="col-lg-3 col-md-4">
                  <img src="images/pinar-yildirim.png" width="100" height="100" alt="Pinar Yildirim" class="test-icon mob-center">
                </div>
                <div class="col-lg-9 col-md-8">
                   <span><b>Pinar Yildirim, PhD, MS is an</b></span> <br>
                <span>Assistant Professor of Marketing at the Wharton School</span>
                </div>

              </div>
              
             
            </div>
          </div>
   <!--  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
      <ol class="carousel-indicators"> 
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
          
        </li> 
        <li data-target="#carouselExampleIndicators" data-slide-to="1">
          
        </li> 
        <li data-target="#carouselExampleIndicators" data-slide-to="2">
          
        </li> 
      </ol>
       <div class="carousel-inner"> 
        <div class="carousel-item active"> 
          <div class="row align-item-center">
            <div class="col-md-7">
              <div class="video">
                <iframe class="iframe-video" width="560" height="315" src="https://www.youtube.com/embed/BMMMVqbmNkE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              
            </div>
            <div class="col-md-5">
              <p>"Crowdsourcing allows marketers to engage users with their brand and collect creative ideas"</p>
              <span><b>Pinar Yildirim, PhD, MS is an</b></span> <br>
                <span>Assistant Professor of Marketing at the Wharton School</span>
            </div>
          </div>
        </div> 
        <div class="carousel-item"> 
           <div class="row align-item-center">
            <div class="col-md-7">
              <div class="video">
                <iframe class="iframe-video" width="560" height="315" src="https://www.youtube.com/embed/BMMMVqbmNkE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              
            </div>
            <div class="col-md-5">
              <p>"Crowdsourcing allows marketers to engage users with their brand and collect creative ideas"</p>
              <span><b>Pinar Yildirim, PhD, MS is an</b></span> <br>
                <span>Assistant Professor of Marketing at the Wharton School</span>
            </div>
          </div> 
        </div> 
        <div class="carousel-item"> 
           <div class="row align-item-center">
            <div class="col-md-7">
              <div class="video">
                <iframe class="iframe-video" width="560" height="315" src="https://www.youtube.com/embed/BMMMVqbmNkE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              
            </div>
            <div class="col-md-5">
              <p>"Crowdsourcing allows marketers to engage users with their brand and collect creative ideas"</p>
              <span><b>Pinar Yildirim, PhD, MS is an</b></span> <br>
                <span>Assistant Professor of Marketing at the Wharton School</span>
            </div>
          </div>
        </div> 
      </div> 
    
    </div> -->
  </div>
</div>
<div class="ptb-5 case-studies light-blu-bg wow fadeInLeft" data-wow-duration="2s">
    <div class="container-fluid full-wrapper">
        <div class="container wrapper">
          <h2 class="sub-heading blue-font text-center">Join us to <span class="uline"> Collaborate and Accelerate</span>  your career.</h2>
          <div class="row  align-item-center">
                <div class="offset-1 col-lg-5 col-md-6 wow fadeInLeft" data-wow-duration="1s">
                    <div class="case-study">
                        <a href="#"><div class="cs-image">
                           <img width="530" height="400" class="brtlr" data-class="LazyLoad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-src="images/join-img1.png" alt="image">
                           </div>
                           <div class="cs-topic">
                            <p>I am looking for Internships/Projects ➞</p> 
                           </div></a>
                        </div>
                    
                </div>
                <div class="col-lg-5 col-md-6 wow fadeInRight mob-mt2" data-wow-duration="1s">
                  <div class="case-study">
                        <a href="#"><div class="cs-image">
                           <img width="530" height="400" class="brtlr" data-class="LazyLoad" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  data-src="images/join-img2.png" alt="image">
                           </div>
                           <div class="cs-topic">
                            <p>I am looking for Interns/Freelancers ➞</p> 
                           </div></a>
                        </div>
                   
                </div>
                
            </div>
        </div>
    </div>
</div>

<div class="ptb-5 wow fadeInLeft" data-wow-duration="2s">
  <div class="container wrapper">
    <h2 class="sub-heading blue-font  text-center">By the time the Intern completed your Project, <span class="uline">you may have</span></h2>
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="mb-4">
        <div class="row">
          <div class="col-md-3 col-sm-2">
            <img data-class="LazyLoad" src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src="images/icon1.png" alt="Icon 1" width="64" height="64" class="mb-3">
          </div>
          <div class="col-md-9 col-sm-10">
            <p>Refined and tested a new business concept</p>
          </div>
        </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="mb-4">
        <div class="row">
          <div class="col-md-3 col-sm-2">
            <img data-class="LazyLoad" src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src="images/icon2.png" alt="Icon 2" width="64" height="64" class="mb-3">
          </div>
          <div class="col-md-9 col-sm-10">
            <p>Run a market sizing, revenue growth and competitor analysis</p>
          </div>
        </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="mb-4">
        <div class="row">
          <div class="col-md-3 col-sm-2">
            <img data-class="LazyLoad" src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src="images/icon3.png" alt="Icon 3" width="64" height="64" class="mb-3">
          </div>
          <div class="col-md-9 col-sm-10">
            <p>Built a no-code website or workflows</p>
          </div>
        </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="mb-4">
        <div class="row">
          <div class="col-md-3 col-sm-2">
            <img data-class="LazyLoad" src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src="images/icon4.png" alt="Icon 4" width="64" height="64" class="mb-3">
          </div>
          <div class="col-md-9 col-sm-10">
            <p>Delivered a top consulting firm caliber presentation (with slides)</p>
          </div>
        </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="mb-4">
        <div class="row">
          <div class="col-md-3 col-sm-2">
            <img data-class="LazyLoad" src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src="images/icon5.png" alt="Icon 5" width="64" height="64" class="mb-3">
          </div>
          <div class="col-md-9 col-sm-10">
            <p>Created a business concept with knowledge and backed with data </p>
          </div>
        </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="mb-4">
        <div class="row">
          <div class="col-md-3 col-sm-2">
           <img data-class="LazyLoad" src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' data-src="images/icon6.png" alt="Icon 6" width="64" height="64" class="mb-3">
          </div>
          <div class="col-md-9 col-sm-10">
            <p>Developed and refined your brand identity and brand strategy</p>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="container-band-bg">
  <div class="container wrapper">
    <div class="row align-item-center">
      <div class="col-lg-8">
        <h5 class="white-font fw-700">Scale Your Business with Pre-Vetted MBA Interns and Freelancers</h5>
        <p class="white-font mb-0 fs-15">Join Now, Free for a Limited Time</p>
      </div>
      <div class="col-lg-4">
        <a href="#" class="btn-white d-block tab-center">Get Started ➞</a>
        <!-- <p class="mt-3 white-font">Join Now, Free for a Limited Time</p> -->
      </div>
    </div>
  </div>
</div>


<?php include 'includes/snippets/footer-updated-index2.php' ?>
<!-- <script src="/includes/js/cubes.js"></script> -->
<script src='sw-install.js'></script> 
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html>