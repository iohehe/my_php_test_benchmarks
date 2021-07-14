<?php
/**
 * inter basic-1
 */
function foo($x) {
    $y = $x;
    echo $x;
}

function bar() {
    $a = $_GET[1];
    $b = $a;
    foo($b);
}
?>
