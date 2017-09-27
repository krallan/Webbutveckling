<?php
/**
 * Created by PhpStorm.
 * User: Krallan
 * Date: 2017-09-26
 * Time: 10:50
 */
header("Content-type: text/plain");
foreach($_GET as $key => $value){
    echo "{$key} = {$value}\n";
}
foreach($_POST as $key => $value){
    echo "{$key} = {$value}\n";
}