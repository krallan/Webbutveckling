<?php
/**
 * Created by PhpStorm.
 * User: Krallan
 * Date: 2017-09-26
 * Time: 11:02
 */


if($_FILES['file']['error']==UPLOAD_ERR_OK){
   $type = $_FILES['file']['type'];
   $size = $_FILES['file']['size'];
   if($type == "text/plain"||$type=="image/jpeg"||$type=="image/png"){
       header ("Content-type: {$type}");
       header ("Content-length: {$size}");
       echo file_get_contents($_FILES['file']['tmp_name']);
   }else{
       header("Content-type: text/plain");
       echo "Filnamn: {$_FILES['file']['name']}\n";
       echo "MIME-typ: {$type}\n";
       echo "Storlek: {$size} bytes";
   }
}else{
    exit("Error: Fel vid uppladdning");

}