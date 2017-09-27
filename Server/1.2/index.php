<?php
/**
 * Created by PhpStorm.
 * User: Krallan
 * Date: 2017-09-26
 * Time: 10:34
 */

header("Content-type: text/plain");

foreach($_SERVER as $key => $value){
    echo "{$key} = {$value}\n";
}