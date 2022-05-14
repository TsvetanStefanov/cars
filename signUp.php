
<?php include 'signUpfunction.php'?>;
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
    <link rel="stylesheet" href="signUp.css" type="text/css" />
    <header>
   
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
    <div id="signUpWrapper">
   <p id="mainLabel">Sign Up</p>
   <form method="POST" id="formSignUp" >
     <div class="formWrapper">
   <label for="email">E-mail:
   <input type="email" name="email" id="email"></label>

   <label for="user">Username:
    <input type="text" name="user" id="user"></label>

    <label for="password">Password:
      <input type="password" name="password" id="password"></label>

      <label for="repassword">Re-Password:
        <input type="password" name="repassword" id="repassword"></label>
        <input type="submit" id="subId">
    <p id="errDisp">Errfaaaf</p>
  </div>
  </form>

   <div class="endSignUp">
    <p>Cars Varna</p>
     <p>© 2022 Cars.com. All rights reserved.</p>
   </div>
</div><!-- End Main Wrapper -->
  </body>
  <a id="back" href="Index.php">Back<a>
    <script
      src="https://kit.fontawesome.com/44f9a6fddc.js"
      crossorigin="anonymous"
    ></script>
    <!-- My JavaScript Files -->
    <script src="main.js" type="text/javascript"></script>
    <script src="UpperMenu.js" type="text/javascript"></script>
    <?php validation(); ?>
  </html>
  
