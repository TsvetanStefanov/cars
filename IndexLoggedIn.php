<?php include 'signInfunctions.php' ?> ;
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="fonts/FontAwesome.otf" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="owl.carousel.min.css" />
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css" />
    <!-- My Css Files -->
    <link rel="stylesheet" href="general.css" type="text/css" />
  </head>
  <!-- Header -->
  <header>
    <!-- Animation -->
 <div class="animation"></div>
 <!-- Animation -->
    <nav>
      <div class="wrapper-upperMenu">
        <div id="flexMenu">
          <img
            src="Images/upperMenu/carLogo.jpg"
            alt="car on upper menu"
            id="carUpperMenu"
          />
          <p id="menuVarna">Varna Cars</p>
          <p id="menuPhone">
            <i class="fa fa-bars" aria-hidden="true"></i>
          </p>
        </div>
      </div>
      <div id="menuDown">
        <div id="Fatimes">
          <i class="fa fa-times" aria-hidden="true"></i>
        </div>
        <div id="menuDownclick"></div>
      </div>
    </nav>
  </header>
  <!-- Body -->
  <body>
    <!-- end Animation -->
    <div class="mainWrapper">
      <!-- Start Main Wrapper  -->
      <!-- Owl Carousel -->
      <div id="wrapperOwl">
      <div class="owl-carousel owl-theme">
        <div class="item">
          <img src="images/Carousel/c53c8d4371f17317d75c5e332d9333fb.jpg"   alt="car" />
        </div>
        <div class="item">
          <img src="images/Carousel/ferraripng.png" alt="car" />
        </div>
        <div class="item">
          <img src="images/Carousel/86586.webp" alt="car" />
        </div>
      </div>
      <?php echo '<p id="signInname">Hello '.$_SESSION['is_loggged'].'</p>'; ?>;
      <p id="findYourMatch">Find Your Match</p>
      <div id="owlDown"><p>Find or Sell your dream car in Varna</p></div>
    </div>
      <!-- End Owl Carousel -->
      <div class="search">    
        <div class="searchOrFind">      
          <div class="choice">
            <p id="search">Search</p>
            <p id="sell">Sell</p>          
          </div>
          <!-- Search Form -->
          <div class="formChoice">
           <div class="styleform1">
            <form  method="post" name="search" id="searchForm" >
              <div class="wrapSelector">
                <p>New/Used</p>
              <select name="newUsed" id="newUsed"></select>
            </div>
            <div class="wrapSelector">
              <p>Model</p>
            <select name="model" id="model"></select>
          </div>
          <div class="wrapSelector">
            <p>Max Price</p>
          <select name="price" id="price"></select>
        </div>
        <div class="wrapSelector">
          <p>Min Year</p>
        <select name="year" id="year"></select>
      </div>
      <input type="submit" value="Search" id="searchSubmit" >
            </form>        
          </div>
          </div>       
     <!-- end Search //////////////////////////////////////////////////////////////////////////////////////////-->
     <div class="sellWrapper" a>
      <div class="styleform1">
        <form  method="post" enctype="multipart/form-data" > 
          <div class="wrapSelector">
            <p>New/Used</p>
          <select name="newUsedSell" id="newUsedSell"></select>
        </div>
        <div class="wrapSelector">
          <p>Model</p>
        <select name="modelSell" id="modelSell"></select>
      </div>
      <div class="wrapSelector">
        <p>Max Price</p>
      <select name="priceSell" id="priceSell"></select>
    </div>
    <div class="wrapSelector">
      <p>Min Year</p>
    <select name="yearSell" id="yearSell"></select>
  </div>
  <div class="wrapSelector">
    <p>Upload Picture of your Car</p>
  <input id="image-file" type="file" name="fileToUpload"/>
</div>
  <input type="submit" value="Upload" id="upLoad" name="submit" >
        </form>
      </div>
      </div>
    </div>

    <!-- Send Mesg Part -->
    <div class="sendMesg">
       <form  method="POST" id="formSendMsg" >
         <div class="formMsg">
           <p>Ask a Question </p>
        <input type="text"  name="sendMsgText" id="sendMsgText"></input>
        <input type="submit" value="Send Message" id="submitSendmsg" >
      </div>
      <p id="msgStatus">Write a message </p>
       </form>
    </div>
        </div>    
<!-- End of Search / Sell Send Msg part            End of First part -->
 <div class="secondPart">
   <div class="testSecondPart">
  <p>The latest new car releases and expert reviews</p>
  <p> Get our experts' honest take on new makes and models.</p>
   <div class="imagesSecondPart">
     <div id="imagesRow">      <!-- Js get.document <script src="containerImages.js" -->         
       <!-- imgstr -->
       <!-- img end -->
          </div>
          <!-- Big image section -->
         <div class="bigImage">
          <p >Buy or Sell in Varna ! Check out our latest offers in the sea capital of Bulgaria !</p>
           <p > Be the Best in Varna</p>
           <a href="https://www.youtube.com/watch?v=DQwfHES_gSw" id="play"><i class="fa fa-play" aria-hidden="true"></i></a>
       <img src="images/65d40271-lamborghini-sc18-5.jpg" alt="family picture"  class="tiny" width="96%" id="imgBigImage">
         </div>
         <!-- Research popular used cars & SUVs  Part 3-->
         <!-- Part 3 -->
         <div id="Research">  </div>     
 <!-- Part 4 -->
<div class="wrapper4">
  <div class="paragraphWrapper4">
    <p>All the ways to find car chemistry</p>
    <p>We're your one-stop shop for buying and selling your car. Get matched to your perfect car, or sell one swiftly.</p>
  </div>
  <!-- --------------------- Part 4 -->
  <!-- Grid  Container-->
<div class="wrapper8divs">

<div class="wrapper4Grid">
    <br>
    <div class="fontGrid"><i class="fa fa-car" aria-hidden="true"></i> SHOP</div>
    <p>Find cars for sale, local dealers, and advice. Also, our price-badging and price-drop notifications keep you informed of potential deals.</p>
  </div>

  <div class="wrapper4Grid">
    <br>
    <div class="fontGrid"><i class="fa fa-book" aria-hidden="true"></i> Research</div>
    <p>View side-by-side comparisons, payment calculators, video reviews, and consumer reviews. These let you hear the good and the bad from current car owners.</p>
  </div>

  <div class="wrapper4Grid">
    <br>
    <div class="fontGrid"><i class="fa fa-newspaper-o" aria-hidden="true"></i> News</div>
    <p>Our very own Cars.com experts offer unbiased coverage of today's automotive landscape. Yes, there will be dad jokes.</p>
  </div>

  <div class="wrapper4Grid">
    <br>
    <div class="fontGrid"><i class="fa fa-ticket" aria-hidden="true"></i> Sell</div>
    <p>Stay up to date on the latest selling advice from our experts. Coming soon: Get your car appraised and sell to interested buyers in your area.</p>
  </div>

  <div class="wrapper4Grid">
    <br>
    <div class="fontGrid"><i class="fa fa-check" aria-hidden="true"></i> Service</div>
    <p>Watch do-it-yourself tutorials or find local repair options.</p>
  </div>

  <div class="wrapper4Grid">
    <br>
    <div class="fontGrid"><i class="fa fa-shield" aria-hidden="true"></i> Certified Pre-Owned</div>
    <p>Learn why you should consider a Certified Pre-Owned car, and get info on manufacturer programs.</p>
  </div>
</div>
</div>
 <!-- Part five -->
 <div class="fifthContainer">
  <p class="fistP">Popular searches</p>
  <div class="flexFifthContainer">
    <div class="flexMenuWrap">
   <div class="flexFifthItem "><p>Popular new cars for sale</p><i class="fa fa-arrow-down " aria-hidden="true"></i></div>
   <div class="flexFifthItemDown"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quasi quas consequatur, eligendi, nobis odio laborum non dolore enim corrupti ipsam facilis eaque iste? Odio totam officiis quo rem voluptas.</p></div>
  </div>
   <div class="flexMenuWrap">
   <div class="flexFifthItem"><p>Popular used cars</p><i class="fa fa-arrow-down" aria-hidden="true"></i></div>
   <div class="flexFifthItemDown"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quasi quas consequatur, eligendi, nobis odio laborum non dolore enim corrupti ipsam facilis eaque iste? Odio totam officiis quo rem voluptas.</p></div>
  </div>
  <div class="flexMenuWrap">
    <div class="flexFifthItem"><p>Research popular new cars for sale</p><i class="fa fa-arrow-down" aria-hidden="true"></i></div>
    <div class="flexFifthItemDown"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quasi quas consequatur, eligendi, nobis odio laborum non dolore enim corrupti ipsam facilis eaque iste? Odio totam officiis quo rem voluptas.orem ipsum dolor sit amet consectetur adipisicing elit. Animi quasi</p></div>
   </div>
   <div class="flexMenuWrap">
    <div class="flexFifthItem"><p>Research popular used cars for sale</p><i class="fa fa-arrow-down" aria-hidden="true"></i></div>
    <div class="flexFifthItemDown"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quasi quas consequatur, eligendi, nobis odio laborum non dolore enim corrupti ipsam facilis eaque iste? Odio totam officiis quo rem voluptas.nsequatur, eligendi, nobis odio la</p></div>
   </div>
</div>
</div>
<!-- Footer -->
<div class="bodyPartSix">
<div class="footerLEft">
  <h4>Buying & Selling</h4>
  <a href="/">Find a Car</a>
  <a href="/">Find a Dealer</a>
  <a href="/">Our Clients</a>
  <a href="/">Best Cars</a>
  <a href="/">Car Reviews</a>
  <a href="/">Sell Your Car</a>
  <a href="/">Fuels</a>
</div>
<div class="footerRight">
  <h4>Connect With Us</h4>
  <p>Check out our latest info in our social media</p>
  <a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-youtube"></a>
</div>
</div>
 <div class="end">
  <p>Cars Varna</p>
   <p>© 2022 Cars.com. All rights reserved.</p>
 </div>
 </div> <!--End -->
<!-- ------------------ -->
  </body>
  <!-- <script>
let msgStatus = document.getElementById('msgStatus');
      </script> -->
  <?php include 'phpArraysshow.php' ?> ;  <!-- Php file -->
  <?php include 'loggedInFunctions.php' ?> 

  <script src="https://cdn.jsdelivr.net/npm/less@4.1.1"></script>
  <script src="jquery-3.6.0.min.js"></script>
  <script
    src="https://kit.fontawesome.com/44f9a6fddc.js"
    crossorigin="anonymous"
  ></script>
  <script src="jquery.min.js"></script>
  <script src="owl.carousel.min.js"></script>
  <!-- My JavaScript Files -->
  <script src="mainLogged.js" type="text/javascript"></script>
  <script src="UpperMenu.js" type="text/javascript"></script>
  <script src="animation.js" type="text/javascript"></script>
  <script src="containerImagesLogged.js" type="text/javascript"></script>
  <script src="research.js" type="text/javascript"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</html>

