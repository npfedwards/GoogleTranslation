<?php
    $file = $_GET['file'];
    $language = $_GET['lang'];

    include "lang/" . $language . "/" . $file . ".php";

    foreach($dictionary as $key => $value){
        echo $key . '<br>';
    }