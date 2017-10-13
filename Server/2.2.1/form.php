<?php
header("Content-type: text/plain");
foreach($_GET as $key => $value){
    echo "{$key} = {$value}\n";
}
foreach($_POST as $key => $value){
    echo "{$key} = {$value}\n";
}