<?php
ini_set('display_errors', 1);
error_reporting(-1);
include("db.php");
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $name = $row['name'];
                $sname = $row['sname'];
                $login = $row['login'];
                $pass = $row['password'];
            echo "$id" . " " . "$name" . " " . "$sname" . " " . "$login" . " " . "$date_c" . " .$pass. "<br>";
        }
    }

$conn->close();
?>