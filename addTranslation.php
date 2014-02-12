<?php
    $file = $_POST['file'];
    $language = $_POST['lang'];
    $translations = $_POST['translations'];

    include "lang/" . $language . "/" . $file . ".php";
    $translations = explode ("
", $translations);

    $i=0;
    $filewrite = '<?php return array(';
    foreach($dictionary as $key => $value){
        if(isset($translations[$i])){
            $filewrite .= "    '" . $key . "' => '" . $translations[$i] . "',\r\n";
        }else{
            $filewrite .= "    '" . $key . "' => '', //No Translation Yet\r\n";
        }
        $i++;
    }
    $filewrite .= ');';

    file_put_contents(__DIR__.'/'. time() . '.php', $filewrite);