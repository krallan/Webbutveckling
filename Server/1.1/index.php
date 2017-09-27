<?php

const Counter = "Counter.TXT";

$File = fopen(Counter, "r");

if(flock($File, LOCK_SH)){
    $FileContent = fread($File, filesize(Counter));
    $Count = intval($FileContent);
    fclose($File);
    $File = fopen(Counter,"w");
    if(flock($File, LOCK_EX)){
        fwrite($File, ++$Count);
        fclose($File);
        header("Content-type: text/plain");
        echo "Antal besökare: " .$Count;
    }else{
        exit("Error locking file for writing");
    }

}else{
    exit("Error locking file");
}

