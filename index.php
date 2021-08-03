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
  .main { text-align: center; width: 1420px; height: 689px; left: 250px; top: 123px; background: #F2F2F2; }
  .product { text-align: center; }
  .button { text-align: center; width: 460px; height: 60px; left: 730px; top: 853px; background: #FFBC7D; border-radius: 25px; }
  .text_buttom { text-align: center;  font-family: Roboto; font-style: normal; font-weight: 500; font-size: 24px; line-height: 28px; color: #FFFFFF;}

  .heder { background-color: #4E5D66; height: 90px; width: 100%; }


  ul {
  list-style-type: none;
  width: 100%;
  display: table;
  table-layout: fixed;
}

li {
  display: table-cell;
  width: 33.3%;

width: 460px;
height: 65px;
left: 250px;
top: 206px;

background: #FFFFFF;


width: 69px;
height: 28px;

font-family: Roboto;
font-style: normal;
font-weight: 500;
font-size: 24px;
line-height: 28px;
text-align: center;

color: #000000;
}


 
.logo {
  padding: 1% 2% 2% 2%;
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



</style>

</head>
<body>




<div class="heder">
  <div class="logo">LOGO</div>

</div>


<div class="main_body">
<div class="main" id="store">



  <ul>
  <li><div class="product">ID Продукта</div></li>
  <li><div class="product">Cтатус продукта</div></li>
  <li><div class="product">Общее количество</div></li>
</ul>
<div class="product">
   
    <?php foreach ($store as $arr): ?>
     <ul><li><div class="product"><?php echo htmlspecialchars($arr['store_id']); ?></div></li>
     <li><div class="product"><?php echo htmlspecialchars($arr['type']); ?></div></li>
     <li><div class="product"><?php echo htmlspecialchars($arr['product']); ?></div></li></ul>
       
    <?php endforeach; ?>

</div>
</div></div>
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
<button class="button" id="more" onclick="rel()"><div class="text_buttom">Обновить список</div></button>



</body>
</html>
