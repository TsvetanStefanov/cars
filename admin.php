<?php   
include 'adminPhpcode.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="fonts/FontAwesome.otf" type="text/css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- My Css Files -->
    <link rel="stylesheet" href="admin.css" type="text/css" />
  </head>
  <body>
    <p class="admins">Adminstration Cars Varna</p>
    <div class="mainWrapper">
     <div class="wrap">
<p id="lapelforOptions">Options</p>
<form method="post" id="modelSubmit" >
<div class= "formArraysModels">  
        <p class="paraSize">Fill data for Model options in the webside </p>    
        <input type="text" name="models" placeholder="Model of cars">
        <input type="submit" >
        </div>   
    </form>
<form method="post" id="priceSubmit">
<div class= "formArraysPrice">  
        <p class="paraSize">Fill data for Prices options in the webside </p>    
        <input type="number" name="prices" placeholder="Prices of cars">
        <input type="submit">
        </div>   
    </form>
<form method="post" >
<div class= "formArraysYear" id="yearSubmit">  
        <p class="paraSize">Fill data for Years options in the webside </p>    
        <input type="number" name="years" placeholder="Years of cars">
        <input type="submit" >
        </div>   
    </form>
<hr>
<form method="post" >
<div class= "formArraysClear" id="clearSubmit">  
        <p class="paraSize">Write in the text area  what d you want to clear : models,prices,years</p>    
        <input type="text" name="delete" placeholder="Write what you want to clear">
        <input type="submit" >
        </div>   
    </form>
    
</div>
<div id="table">
  <p>Messages</p>

</div>
</div>
  </body>
  <script src="admin.js" type="text/javascript"></script>
</html>
