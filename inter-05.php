<?php
/**
 * argument sensetive - 2
 */
function foo($x, $y) {
    echo $x;
}

function bar() {
    $a = $_GET[1];
    $b = $a;
    foo(woo($a), moo($b));
}

function moo($x){ return $x;}
function woo($x){ return $y;}
?>
