<?php 
require 'database/config.php';
$data = $db->prepare("SELECT * FROM book ;");
$data->execute();
function content(){
	$content = '';
	global $data;
	foreach ($data as $row){
		$content.="
		<div class='book'>
		<img src='data:image;base64,".base64_encode($row['art'])."'>
		<p>Назва: ".$row['name']."</p>
		<p>Рік: ".$row['year']."</p>
		<p>Автор: ".$row['author']."</p>
		<p>Жанр: ".$row['ganre']."</p>
		</div>";
	}
	echo $content;
}
$data->execute();
?>