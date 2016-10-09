<?php
	$time = time();
	if(!file_exists("upload")){
		mkdir("upload");
	}
	try{
		if(isset($_FILES["image"])){
			switch($_FILES["image"]["error"]){
				case 0: break;
				case 1: throw new Exception("UPLOAD_ERR_INI_SIZE: ".$_FILES["image"]["name"]); break;
				case 2: throw new Exception("UPLOAD_ERR_FORM_SIZE: ".$_FILES["image"]["name"]); break;
				case 3: throw new Exception("UPLOAD_ERR_PARTIAL: ".$_FILES["image"]["name"]); break;
				case 4: throw new Exception("UPLOAD_ERR_NO_FILE: ".$_FILES["image"]["name"]); break;
				case 5: throw new Exception("UPLOAD_EMPTY_FILE: ".$_FILES["image"]["name"]); break;
			}
			// $fro = explode('.', $_FILES["image"]["name"]);
			move_uploaded_file($_FILES["image"]["tmp_name"], "upload/".$time.".png");
		}
		else{
			throw new Exception($_FILES["image".$i]["name"]." lose!");
		}
		echo "Success!";
	} catch (Exception $e){
		echo "error";
		exit;
	}
?>