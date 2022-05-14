<?php
@$con =mysqli_connect('localhost','ceck','sandrov','cars');
mb_internal_encoding('UTF-8');
mysqli_set_charset($con,'utf8');
mysqli_set_charset($con,'utf8');
if(!$con){
     echo 'no database';
}
 function validation(){
$con =mysqli_connect('localhost','ceck','sandrov','cars');
@$usr = $_POST['user'];
$realuser = mysqli_real_escape_string($con,$usr);
@$pass = $_POST['password'];
@$passwordconf= $_POST['repassword'];
$hashed_password = password_hash($pass, PASSWORD_DEFAULT);
@$mail = $_POST['email'];
$realmail = mysqli_real_escape_string($con,$mail);
$stmt = $con->prepare("INSERT INTO users  (email,username,passworda) VALUES(?,?,?) "); 
$stmt->bind_param("sss",$realmail, $realuser,$hashed_password);
if(strlen($mail) < 7 ){
    echo '<script>errDisp.innerHTML=""</script>';
 exit;
}elseif(strlen($usr) < 7 ){
    echo '<script>errDisp.innerHTML="Username is too short"</script>';
 exit;
}elseif(strlen($pass)< 7 ){
    echo '<script>errDisp.innerHTML="Password is too short"</script>';
    exit;
}elseif($passwordconf!==$pass){
    echo '<script>errDisp.innerHTML="Passwords does not match"</script>';
    exit;
}
else{
    $q = mysqli_query($con,'SELECT * FROM users WHERE username="'.$usr.'" ') ;
    $qa = mysqli_query($con,'SELECT * FROM users WHERE email="'.$mail.'" ') ;
     if(mysqli_num_rows($q)>0){
         echo '<script>errDisp.innerHTML="Username Already in Use"</script>';
          
     }elseif(mysqli_num_rows($qa)>0){
          echo '<p class="msg">E-mail Already in Use</p>';
          echo '<script>errDisp.innerHTML="E-mail Already in Use"</script>';
     }else{
          $stmt->execute();
           echo '<script>errDisp.innerHTML="Success"</script>';
     } 
}
}
?>
 <!-- <script>
 let formSignUp = document.getElementById('formSignUp');
formSignUp.addEventListener('submit',function(e){
  e.preventDefault();
}); 
function validateMyForm(){
let errDisp = document.getElementById('errDisp');
let email = document.getElementById('email').value;
let user = document.getElementById('user').value.trim();
let password = document.getElementById('password').value.trim();
let repassword = document.getElementById('repassword').value.trim();
if(email.length < 7){
  errDisp.innerHTML = 'Invalid E-mail';
  
}else if(user.length < 7){
  errDisp.innerHTML = 'Username is too short';
 
}else if(password.length < 7){
  errDisp.innerHTML = 'Password is too short';
 
}else if(repassword !== password){
  errDisp.innerHTML = 'Passwords do not match';

}else{
    errDisp.innerHTML = 'Passawfdo adch';
    // document.write('  ?> ');
}
}
</script>  -->
