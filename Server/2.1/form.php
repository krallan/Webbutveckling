<?php
/**
 * Created by PhpStorm.
 * User: Krallan
 * Date: 2017-09-26
 * Time: 10:40
 */
header("Content-type: text/plain");
foreach($_GET as $key => $value){
    echo "{$key} = {$value}\n";
}