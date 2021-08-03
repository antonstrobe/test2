<?php
$db_host = "localhost";
$db_name = "vapezonepro";
$db_user = "mysql";
$db_pass = "";

$db = mysqli_connect ($db_host, $db_user, "", $db_name);
mysqli_query ($db, 'set character_set_results = "utf8"');

$res = mysqli_query($db, "SELECT * FROM `store` ORDER BY `id` DESC LIMIT 10");

$store = array();
while($row = mysqli_fetch_assoc($res))
{
    $store[] = $row;
}
?>

<!DOCTYPE HTML>
<html>

<head>
  <meta charset = "utf-8" />
  <title></title>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="scripts.js"></script>

<style type="text/css">


body {
  margin: 0;
  text-align: center;
}
  .header { 

  text-align: center;
  top: 0;
  width: 100%;
    background-color: #4E5D66; height: 90px; }
  .header_product_ul {background: #F2F2F2;}
  .header_product_li {background: #FFBC7D; padding: 3%; color: #fff; }
  .main_body { text-align: center; width: 1420px; height: 689px; left: 250px; top: 123px; padding: 0 13% 0 13%; }
  .main { text-align: center; background: #F2F2F2;  }
  .product { text-align: center; }
  .button { text-align: center; color: #fff;

width: 460px;
height: 60px;
left: 730px;
top: 853px;

background: #FFBC7D;
border-radius: 25px; }



  ul {
  list-style-type: none;
  width: 94.5%;
  display: table;
  table-layout: fixed;
}

li {
  display: table-cell;

}


 
.logo {
padding: 1.2%;
width: 93px;
height: 42px;
left: 92px;
top: 24px;

font-family: Roboto;
font-style: normal;
font-weight: 900;
font-size: 36px;
line-height: 42px;

color: #FF7A00; }


@media (max-width: 1067px) {

ul {

    width: 91.5%;
    display: table;
    table-layout: fixed;
    
}

.header_product_ul {font-size: 190%;}
.product {font-size: 190%;}
.button { font-size: 212%; }

}



</style>

</head>
<body>







<!-- <div class="main_body">
  <div class="header">
  <div class="logo">LOGO</div>

</div> -->

<div class="main" id="store">



  <ul class="header_product_ul">
  <li><div class="header_product_li" >ID Продукта</div></li>
  <li><div class="header_product_li" >Cтатус продукта</div></li>
  <li><div class="header_product_li" >Общее количество</div></li>
</ul>

   
    <?php foreach ($store as $arr): ?>
     <ul><li><div class="product"><?php echo htmlspecialchars($arr['store_id']); ?></div></li>
     <li><div class="product"><?php echo htmlspecialchars($arr['type']); ?></div></li>
     <li><div class="product"><?php echo htmlspecialchars($arr['product']); ?></div></li></ul>
       
    <?php endforeach; ?>


</div><button class="button" id="more" onclick="rel()">Обновить список</button></div>
<script>
var i = 10;

function rel() {
  i=(i+i);
    if (i==80) {
  //document.getElementById("store").outerHTML='<?php echo htmlspecialchars($arr['product']); ?>';
  //$("#reload").load(location.href + " #reload");
  //document.getElementById("store").outerHTML='';
setTimeout(function(){
  location.reload();
}, 100);

}}


</script>




</body>
</html>
