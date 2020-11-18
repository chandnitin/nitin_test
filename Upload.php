<?php
include('constant.php');

class  Upload {
    public $target = "";
    function  __construct(){
        $this->target = STORAGE;
    }

    function  upload($FU){

        $target_file = $this->target . basename($FU["photo"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $check = getimagesize($FU["photo"]["tmp_name"]);
        if($check !== false) {
            
            $uploadOk = 1;
        } else {
            return  "File is not an image.";
            $uploadOk = 0;
        }

        if (file_exists($target_file)) {
            $uploadOk = 0;
            return "Sorry, file already exists.";
            
        }
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            $uploadOk = 0;
            return  "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        
        }

        if ($uploadOk == 0) {
            return  "Sorry, your file was not uploaded.";
         
          } else {
            if (move_uploaded_file($FU["photo"]["tmp_name"], $target_file)) {
              return  array("code"=>0, "filename"=>htmlspecialchars( basename( $FU["photo"]["name"])) ) ;
            } else {
              return  "Sorry, there was an error uploading your file.";
            }
          }

    }
}

?>