<?php
function sell(){
    $con =mysqli_connect('localhost','ceck','sandrov','cars');
    $q = mysqli_query($con,'SELECT * FROM datacars WHERE picture="'.$_SESSION['is_loggged'].'" ');
    @$newUsedSell = trim($_POST['newUsedSell']);
    @$modelSell = trim($_POST['modelSell']);
    @$priceSell = trim($_POST['priceSell']);
    @$yearSell = trim($_POST['yearSell']);
    if(mysqli_num_rows($q)==0){
       $stmt = $con->prepare('INSERT INTO datacars (newUsed,model,price,year,picture) VALUES (?,?,?,?,?)');
       $stmt->bind_param('sssss',$newUsedSell,$modelSell,$priceSell,$yearSell,$_SESSION['is_loggged']);
       $stmt->execute();    
      }else{
        if($modelSell!=='' && $priceSell !==0 && $yearSell!==0  );
        $qam = 'UPDATE datacars SET newUsed= "'.$newUsedSell.'" , model="'.$modelSell.'",price="'.$priceSell.'",year="'.$yearSell.'" WHERE picture="'.$_SESSION['is_loggged'].'" ';
        mysqli_query($con,$qam);
      }   
  $target_dir = "uploads/";
  $name =$_SESSION['is_loggged'];
  $names = $name. "." .'jpg';
  $target_file = $target_dir.$names;
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  if(isset($_POST["submit"])) {
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
  }  
   }
   sell();
   ////////////msg PHP_\
   function sengMsg(){
          $con =mysqli_connect('localhost','ceck','sandrov','cars');
          $userNameSes = $_SESSION['is_loggged'];
          @$msg= $_POST['sendMsgText'];   
          $rMsg = mysqli_real_escape_string($con,$msg);  
          $sql = 'INSERT IGNORE INTO messages (user,msg) VALUES ("'.$userNameSes.'", "'.$rMsg.'")';
          if(strlen($msg) > 10){
         mysqli_query($con,$sql);
         echo  '<script>msgStatus.innerText =" Msg Sent"</script>';
            }else{
             echo  '<script>msgStatus.innerText =" Msg too Short"</script>';
            }
           }
     
     sengMsg();
   
   ?>