<?php 

class TinyMVC_Library_Upload
{
	private $Maxsize;
	private $UploadPath;
	function __construct() {
		//$db = new TinyMVC_Library_Pagesdb();
		$this->Maxsize = 102400;   //100MB
		$this->UploadPath = "c:/xampp/tinymvc/calc/uploads";
	}
	
	function saveAsTemp($ctrlname)
	{
		$now = DateTime::createFromFormat('U.u', microtime(true));
		$array = explode(".",$_FILES[$ctrlname]['name']);
		$ext = end($array);
		$filename = md5($now->format("m-d-Y H:i:s.u")).".".$ext;
		if (move_uploaded_file($_FILES[$ctrlname]['tmp_name'], $this->UploadPath.$filename))
			return $filename;
		else
			return false;
	}
	
	function getUploadAvatar($ctrlname)
	{
	  	$allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
	  	$detectedType = exif_imagetype($_FILES[$ctrlname]["tmp_name"]);
	  	if ($_FILES["file"]["size"] < $this->Maxsize) {
		  	if((in_array($detectedType, $allowedTypes)) && (($_FILES["file"]["size"] < 10485760))){
		  		$data = base64_encode(file_get_contents($_FILES[$ctrlname]["tmp_name"]));
		  		$ext = "";
		  		switch($detectedType){
		  			case IMAGETYPE_PNG:
		  				$ext = "png";
		  				break;
		  			case IMAGETYPE_JPEG:
		  				$ext = "jpeg";
		  				break;
		  			case IMAGETYPE_GIF:
		  				$ext = "gif";
		  				break;
		  		}
		  		$avatar = "data:image/".$ext.";base64,".$data;
		  		return $avatar;
			} else 
			 	return false;
			  
	  	} else
	  		return false;
	}
}
  
?>  