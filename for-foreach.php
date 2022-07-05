<?php

// for / for each

$array = [1,2,3,4];

for ($i = 0; $i<4; $i++){
    echo "$array[$i] \n";
}

foreach($array as $value) {
    echo "$value \n";
}