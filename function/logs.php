<?php
function logger()
{
    if(isset($_SESSION['userId'])) {
        $user_id = $_SESSION['userId'];
        $log = "INSERT INTO access_log (user_id) 
        VALUES ('$user_id')";
    }
}
?>