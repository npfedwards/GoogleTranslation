<?php
    $file = $_POST['file'];
    $language = $_POST['lang'];
    $translations = $_POST['translations'];

    include "lang/" . $language . "/" . $file . ".php";
    $translations = explode ("
", $translations);

    $i=0;
    foreach($dictionary as $key => $value){
        if(isset($translations[$i])){
            echo "&nbsp;&nbsp;&nbsp;&nbsp;'" . $key . "' => '" . $translations[$i] . "',<br>";
        }else{
            echo "&nbsp;&nbsp;&nbsp;&nbsp;'" . $key . "' => '', //No Translation Yet<br>";
        }
        $i++;
    }