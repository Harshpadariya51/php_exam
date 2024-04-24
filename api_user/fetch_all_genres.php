<?php
require_once 'user_api.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $users = fetchAllgenres();
    echo json_encode($users);
}else{
    echo"Done";
}
?>
