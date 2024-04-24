<?php
require_once 'db_connection.php';

function fetchAllUsers() {
    global $conn;
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    
    $users = array();
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
    return $users;
}

function fetchUserById($id) {
    global $conn;
    $sql = "SELECT * FROM users WHERE id=$id";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}

function insertUser($username, $password) {
    global $conn;
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    return $conn->query($sql);
}

function updateUser($id, $username, $password) {
    global $conn;
    $sql = "UPDATE users SET username='$username', password='$password' WHERE id=$id";
    return $conn->query($sql);
}

function deleteUser($id) {
    global $conn;
    $sql = "DELETE FROM users WHERE id=$id";
    return $conn->query($sql);
}
?>
