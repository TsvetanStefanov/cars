<?php
session_start();
function logincheck(){
    $con =mysqli_connect('localhost','ceck','sandrov','cars');
    @$mailIn = $_POST['email'];
    @$pass= $_POST['password'];
    $q = mysqli_query($con,'SELECT * FROM users WHERE email="'.$mailIn.'" ');
    if(mysqli_num_rows($q)==0){
    echo   '<script>errDisp.innerHTML="Wrong e-mail"</script>';
    }
    elseif(mysqli_num_rows($q)!==0){
    while($row= mysqli_fetch_assoc($q)){
         if(password_verify($pass,$row['passworda'])){
              echo '<script>errDisp.innerHTML="Correct Username/Password"</script>';
              $_SESSION['is_loggged']=$row['username'];
              header('Location:IndexLoggedIn.php');
         }else{
              echo '<script>errDisp.innerHTML="Wrong Username/Password"</script>';            
         }
    }
    }
}

logincheck();
//////////////////// sell function

$db = array();

  $con =mysqli_connect('localhost','ceck','sandrov','cars');
  $q = mysqli_query($con,'SELECT * FROM datacars ');
  while ($row = mysqli_fetch_object($q)) {
   
   array_push($db, $row);
  
}

//echo '<pre>',print_r($db,1),'</pre>';
?>
<script type="text/javascript">
  let db = <?php echo json_encode($db); ?> ;
  </script>
