<?php

$var = "Carlos Eduardo Rodrigues de Lima";
$size = strlen($var);

for ($i = $size; $i > 0; $i--){
    echo $var[$i-1];
}

echo "\n";

$e = 0;

while (1){
    if ($e == 10){
        break;
    }
    echo ++$e;
}

echo "\n";

function blabla($var){
    echo $var[3];
}

$var = "Huayan";

blabla($var);

echo "\n";

function serial(){
    $cod1 = ''; // 5
    $sizecod1 = 5;
    $cod2 = ''; // 8
    $sizecod2 = 5;
    $cod3 = ''; // 6
    $sizecod3 = 5;
    $cod4 = ''; // 8
    $sizecod4 = 5;
    $cod5 = ''; // 6
    $sizecod5 = 4;

    $size = 32;

    $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    $randon = '';

    for ($i = 0; $i < $sizecod1; $i++){
       $cod1 .= $char[rand(0, strlen($char))];
    }
    for ($i = 0; $i < $sizecod2; $i++){
        $cod2 .= $char[rand(0, strlen($char))];
    }
    for ($i = 0; $i < $sizecod3; $i++){
        $cod3 .= $char[rand(0, strlen($char))];
    }
    for ($i = 0; $i < $sizecod4; $i++){
        $cod4 .= $char[rand(0, strlen($char))];
    }
    for ($i = 0; $i < $sizecod5; $i++){
        $cod5 .= $char[rand(0, strlen($char))];
    }

    return $cod1.'-'.$cod2.'-'.$cod3.'-'.$cod4.'-'.$cod5;
}
$i = 0;
while(1){
    if($i < 1){
        echo serial()."\n";
        break;
    }
    $i++;
}

echo "\n";

