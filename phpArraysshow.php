<?php
 $arrModels = array();
 $arrPrices = array();
 $arrYears = array();
  $con =mysqli_connect('localhost','ceck','sandrov','cars');
  $sqlModels = mysqli_query($con, "SELECT * from models");
  $sqlPrices = mysqli_query($con, "SELECT * from prices");
  $sqlYears = mysqli_query($con, "SELECT * from years");
  while ($row = mysqli_fetch_array($sqlModels)) {
      if($row['model'] !== ''){
     array_push($arrModels, $row['model']);
    }
  }
  while ($row = mysqli_fetch_array($sqlPrices)) {
    if($row['price'] !== '0'){
    array_push($arrPrices, $row['price']);
    }
  }
  while ($row = mysqli_fetch_array($sqlYears)) {
    if($row['year'] !== '0'){
    array_push($arrYears, $row['year']);
    }
  }

 
 
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








<script type="text/javascript">
  let newUsed = ['New','Used'];
  let model = <?php echo json_encode($arrModels); ?> ;
  model.sort();
  let price = <?php echo json_encode($arrPrices); ?> ;
  price.sort();
  let year = <?php echo json_encode($arrYears); ?> 
  year.sort();
  function selectors (selector , arrayy){
  let select = selector;
  for(i=0;i<arrayy.length;i++){
  let optionS = document.createElement('option');
  optionS.innerText = arrayy[i];
  optionS.value = arrayy[i];
  optionS.classList.add('optionClass');
  select.appendChild(optionS);
  }
}
// Options Search
selectors(document.getElementById('newUsed'),newUsed);
 selectors(document.getElementById('model'),model);
selectors(document.getElementById('price'),price);
selectors(document.getElementById('year'),year);
//Options Sell
selectors(document.getElementById('newUsedSell'),newUsed);
selectors(document.getElementById('modelSell'),model);
selectors(document.getElementById('priceSell'),price);
selectors(document.getElementById('yearSell'),year);
 </script>