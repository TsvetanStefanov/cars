
<?php
$con =mysqli_connect('localhost','ceck','sandrov','cars');
function carsArraysinsert(){
$con =mysqli_connect('localhost','ceck','sandrov','cars');
if($_POST){
    @$newUsedAdmin = trim($_POST['newUsedAdmin']);
    @$modelAdmin = trim($_POST['modelAdmin']);
    @$priceAdmin = trim($_POST['priceAdmin']);
    @$yearAdmin = trim($_POST['yearAdmin']);
    $sql = 'INSERT IGNORE INTO carsarrays (newUsed,model,price,year) VALUES ("'.$newUsedAdmin.'", "'.$modelAdmin.'","'.$priceAdmin.'","'.$yearAdmin.'")';
    if($newUsedAdmin !== 'new' && $newUsedAdmin !=='used'&& $newUsedAdmin !==''){
        echo '<p id="errorsArray">car can be new or used </p>'; 
}else{
mysqli_query($connection,$sql);
}
}
}
function modelOfCars(){
$con =mysqli_connect('localhost','ceck','sandrov','cars');
@$models = trim($_POST['models']);
$realModels = mysqli_real_escape_string($con,$models);
$stmt = $con->prepare('INSERT INTO models (model) VALUES (?)');
$stmt->bind_param('s',$realModels);
$asql = mysqli_query($con, "SELECT * from models WHERE model = '$models'");
if(mysqli_connect_errno()){
    echo 'Error Connection';
}elseif(mysqli_num_rows($asql) > 0){
    echo '<script>alert("Model '.$models.' already exists")</script>';  
}elseif(mb_strlen($models)>2){
$stmt->execute();
echo '<script>alert("'.$models.' inserted")</script>';
}
}
function pricesOfCars(){
    $con =mysqli_connect('localhost','ceck','sandrov','cars');
    @$prices = trim($_POST['prices']);
    $stmt = $con->prepare('INSERT INTO prices (price) VALUES (?)');
    $stmt->bind_param('s',$prices);
    $asql = mysqli_query($con, "SELECT * from prices WHERE price = '$prices'");
    if(mysqli_connect_errno()){
        echo 'Error Connection';
    }elseif(mysqli_num_rows($asql) > 0){
        echo '<script>alert("'.$prices.' already exists")</script>';   
    }elseif(mb_strlen(@$prices)>2){
    $stmt->execute();
    echo '<script>alert("'.$prices.' inserted")</script>';
    }}
    function yearsOfCars(){
        $con =mysqli_connect('localhost','ceck','sandrov','cars');
        @$years = trim($_POST['years']);
        $stmt = $con->prepare('INSERT INTO years (year) VALUES (?)');
        $stmt->bind_param('s',$years);
        $asql = mysqli_query($con, "SELECT * from years WHERE year = '$years'");
        if(mysqli_connect_errno()){
            echo 'Error Connection';
        }elseif(mysqli_num_rows($asql) > 0){
            echo ' <p id="errorMsg3 ">Year already exists </p>';
        }elseif(mb_strlen(@$years)>3){
        $stmt->execute();
        echo '<script>alert("'.$years.' inserted")</script>';
        }}
        function clear(){
            $con =mysqli_connect('localhost','ceck','sandrov','cars');
            @$delete = trim($_POST['delete']);
            if(@$delete == 'models'){
             mysqli_query($con, "DELETE  from models");
             echo '<script>alert(Models data is clearr)</script>';
             }elseif(@$delete == 'prices'){
                mysqli_query($con, "DELETE  from prices");
                echo '<script>alert(Prices data is clear)</script>';
             }elseif(@$delete == 'years'){
                mysqli_query($con, "DELETE  from years");
                echo '<script>alert(Years data is clear)</script>';
             }else{
                 echo '<p id="errorMsg4 ">Write models / years or prices </p>' ;              
             }
           }       
         ?>      
<?php
if(isset($_POST['models'])) 
{
 modelOfCars();
}
if(isset($_POST['prices'])) 
{
pricesOfCars();
}
if(isset($_POST['years'])) 
{
yearsOfCars();
}
if(isset($_POST['delete'])) 
{
clear();
}
?>
<?php
    $msgArray = array();
    $usrArray = array();
    $con =mysqli_connect('localhost','ceck','sandrov','cars');
    $asqla = mysqli_query($con, "SELECT * from messages");
    while ($row = mysqli_fetch_array($asqla)) {
        if($row['msg'] !== ''){
       array_push($msgArray, $row['msg']);
       array_push($usrArray, $row['user']);
      }
    }
    ?>
 
    <script type="text/javascript">
  let usrs = <?php echo json_encode($usrArray); ?> ;
  let msgs = <?php echo json_encode($msgArray); ?> ;
  </script>