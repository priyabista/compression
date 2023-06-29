<?php 
function randomString($a){
    $char = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#';
    $str = '';
    for($i = 0; $i < $a; $i++){
        $index = rand(0, strlen($char)-1);
        $str .= $char[$index];
    }
    return $str;
}