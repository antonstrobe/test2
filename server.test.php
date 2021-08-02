<?php
$db_host = "localhost";
$db_name = "vapezonepro";
$db_user = "mysql";
$db_pass = "";

$db = mysqli_connect ($db_host, $db_user, "", $db_name);
mysqli_query ($db, 'set character_set_results = "utf8"');

$startFrom = $_POST['startFrom'];
$res = mysqli_query($db, "SELECT * FROM `store` ORDER BY `id` DESC LIMIT {$startFrom}, 10");
$store = array();
while ($row = mysqli_fetch_assoc($res))
{   
    $row = preg_replace('/\W+/', ' ', $row);
    $store[] = $row;
}

if ($startFrom == 30) {

$res2 = mysqli_query($db, "SELECT * FROM `store` ORDER BY `id` DESC");
$counter = 0;
$store2 = array();
while($row2 = mysqli_fetch_assoc($res2))
{
 
    $counter++;
}

   $res1 = mysqli_query($db, "INSERT ignore INTO `store` (store_id, type, product, amount) VALUES ('2', 'W', '" .  $counter . "', '0')");
}

echo json_encode($store);

?>