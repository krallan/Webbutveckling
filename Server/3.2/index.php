<?php
/**
 * Created by PhpStorm.
 * User: Krallan
 * Date: 2017-09-26
 * Time: 10:34
 */

header("Content-type: text/html");
$template = file_get_contents("template.html");
foreach($_SERVER as $key => $value){
   $templatePieces = explode("<!-- ==xxx== -->", $template);
   $templatePieces[1] = "$key = $value";
   echo implode("", $templatePieces);
}