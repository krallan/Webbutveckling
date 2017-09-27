<?php
/**
 * Created by PhpStorm.
 * User: Krallan
 * Date: 2017-09-26
 * Time: 12:16
 */
header("Content-type: text/plain");

foreach ($_GET as $key => $value){
    echo "{$key} => {$value}\n";
}