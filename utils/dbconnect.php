<?php

$db_host = "localhost";
$db_username = "root";
$db_password = "alex9200222";
$db_name = "hockey_shop";

$conn = @new mysqli($db_host, $db_username, $db_password, $db_name);

if ($conn->connect_error != "") {
  echo "資料庫連結失敗！";
} else {
  $conn->query("SET NAMES 'utf8'");
};
