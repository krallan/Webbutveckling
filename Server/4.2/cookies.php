<?php

header("Content-type: text/plain");
foreach ($_COOKIE as $key => $value){
    echo "{$key} => {$value}\n";
}