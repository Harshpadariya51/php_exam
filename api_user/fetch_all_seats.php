<?php
require_once 'user_api.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $users = fetchAllseats();
    echo json_encode($users);
}else{
    echo"Done";
}
?>
