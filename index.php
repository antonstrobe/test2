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

</head>
<body>


<div id="reload">
<div style="width: 200px;" id="store">

    <?php foreach ($store as $arr): ?>
     <br><?php echo htmlspecialchars($arr['store_id']); ?>
       <?php echo htmlspecialchars($arr['type']); ?>
        <?php echo htmlspecialchars($arr['product']); ?>
       
    <?php endforeach; ?>

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
<button id="more" onclick="rel()">Обновить список</button>



</body>
</html>
