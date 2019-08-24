<?php

$i=0;

function init() {
    global $i;
    $i=0;
}

function getCurrentValue() {
    global $i;

    $i+=1;

    return $i;
}

function someTest($value) {
    return boolval ($value == 5);
}