<?php
/**
 * Created by PhpStorm.
 * User: Krallan
 * Date: 2017-09-26
 * Time: 13:05
 */

header("Content-type: text/plain");
foreach ($_COOKIE as $key => $value){
    echo "{$key} => {$value}\n";
}