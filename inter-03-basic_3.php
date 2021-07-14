<?php
/**
 * inter basic 3
 *
 */
function foo($x) {
    $y = $x;
    return $y;
}

function bar() {
    $a = $_GET[1];
    $b = $a;
    echo foo($b);
}
?>
