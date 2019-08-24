<?php

require_once ("functions.php");

echo "first loop:\n";
init();
while(true) {
    $currentValue = getCurrentValue();
    if(someTest($currentValue)) {
        break;
    }
    echo "{$currentValue}\n";
}

echo "second loop:\n";
init();
while(!(someTest($currentValue = getCurrentValue()))) {
    echo "{$currentValue}\n";
}