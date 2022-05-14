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
    <!-- My Css Files -->
    <link rel="stylesheet" href="general.css" type="text/css" />
  </head>
  <!-- Header -->
  <header>
  <div id="imagesRow"> </div>



  
  <script>
      


let carImages = ['2022_Acura_ILX_1.jpg',
'pexels-photo-3729464.jpeg','amggt63sphev_50.jpg'
,'front-left-side-47.webp',
'gpcjae98_jeep-meridian-suv-review_625x300_01_May_22.webp',
'426414c97264657bebb33d11a0205c04.jpg'
];

let carReviews = [ ' 2022 Hyundai Ioniq 5 Review: The EV We’ve Been Waiting For',
'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy ',
'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
];








function insertCarReviews(){
for(i=0;i<carImages.length;i++){
let imagesRow = document.getElementById('imagesRow');
let containerImage = document.createElement('div');
containerImage.classList.add('containerImage');
imagesRow.appendChild(containerImage);
let imgimagesRow = document.createElement('img');
imgimagesRow.src = `images/carsNews/${carImages[i]}`;
imgimagesRow.classList.add('carsSize')
containerImage.appendChild(imgimagesRow);
let peImg = document.createElement('p');
peImg.classList.add('experReview');
peImg.innerText = 'Expert Review';
containerImage.appendChild(peImg);
let peImgSection = document.createElement('p');
peImgSection.classList.add('descReview');
containerImage.appendChild(peImgSection);
peImgSection.innerText= carReviews[i];
}
}
insertCarReviews();







</script>














<?php include 'phpArraysshow.php' ?> ;  <!-- Php file -->
  <script src="https://cdn.jsdelivr.net/npm/less@4.1.1"></script>
  <script src="jquery-3.6.0.min.js"></script>
  <script
    src="https://kit.fontawesome.com/44f9a6fddc.js"
    crossorigin="anonymous"
  ></script>
  <script src="jquery.min.js"></script>
  <script src="owl.carousel.min.js"></script>
  <!-- My JavaScript Files -->
  <script src="main.js" type="text/javascript"></script>
  <script src="UpperMenu.js" type="text/javascript"></script>
  <script src="animation.js" type="text/javascript"></script>
  <script src="containerImages.js" type="text/javascript"></script>
  <script src="research.js" type="text/javascript"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</html>

