<?php
$storage_path = __DIR__ . '/../storage';

$user_id = $_POST['user_id'];
$img = base64_decode($_POST['img']);

file_put_contents("{$storage_path}/avatar/{$user_id}.jpg", $img);
echo true;