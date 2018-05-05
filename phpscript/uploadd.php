<?php
$target_dir = "uploadd/images";
$image = $_POST["image"];

if(!file_exists($target_dir)){
	mkdir($target_dir,0777,true);

}


$target_dir = $target_dir."/". rand(). "_".time().".jpeg";
if(file_put_contents($target_dir,base64_decode($image))){
	echo json_encode([
		"Message" => "The file has been uploaded",
		"Status" => "OK"
		]);
	}else{
		echo json_encode([
		"Message" => "Sorry",
		"Status" =>"Error"
		]);
}
?>