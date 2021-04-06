<?php
function logger($username){
    $ip = $_SERVER['ip_address'];
    $log = $connect->query("INSERT INTO access_log ('username','ip_address') VALUES ($username,$ip)");
}
?>

