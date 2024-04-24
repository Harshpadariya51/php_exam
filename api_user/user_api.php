<?php
require_once 'connection.php';

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

function fetchAllmovie() {
    global $conn;
    $sql = "SELECT * FROM movies";
    $result = $conn->query($sql);
    
    $users = array();
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
    return $users;
}
function fetchAllbookings() {
    global $conn;
    $sql = "SELECT * FROM bookings";
    $result = $conn->query($sql);
    
    $users = array();
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
    return $users;
}
function fetchAlldirectors() {
    global $conn;
    $sql = "SELECT * FROM directors";
    $result = $conn->query($sql);
    
    $users = array();
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
    return $users;
}
function fetchAllgenres() {
    global $conn;
    $sql = "SELECT * FROM genres";
    $result = $conn->query($sql);
    
    $users = array();
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
    return $users;
}
function fetchAllseats() {
    global $conn;
    $sql = "SELECT * FROM seats";
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
