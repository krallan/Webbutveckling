<?php
header("Content-type: text/html");
$template = file_get_contents("template.html");
foreach($_SERVER as $key => $value){
   $templatePieces = explode("<!-- ==xxx== -->", $template);
   $templatePieces[1] = "$key = $value";
   echo implode("", $templatePieces);
}