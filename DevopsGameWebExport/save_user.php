<?php
$data = file_get_contents("php://input");
$user = json_decode($data, true);

$file = "Data/users.json";

$users = [];

if (file_exists($file)) {
    $users = json_decode(file_get_contents($file), true);
}

$users[] = $user;

file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));

echo "ok";
?>
