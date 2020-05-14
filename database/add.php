<?php 
require 'config.php'; 

$data = $_POST;
$stmt = $db->prepare("INSERT book VALUES('',?,?,?,?,?,?);");

$stmt->bindParam(1,$data['name']);
$stmt->bindParam(2,$data['year']);
$stmt->bindParam(3,$data['author']);
$stmt->bindParam(4,$data['description']);

$img = file_get_contents($_FILES['img']['tmp_name']);
$stmt->bindParam(5,$img);
$stmt->bindParam(6,$data['selected']);
#жанр

$stmt->execute();
header('Location: /');
?>