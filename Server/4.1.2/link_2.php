<?php
/**
 * Created by PhpStorm.
 * User: Krallan
 * Date: 2017-09-26
 * Time: 12:52
 */
header("Content-type: text/plain");
foreach ($_POST as $key => $value){
    echo "{$key} => {$value}\n";
}