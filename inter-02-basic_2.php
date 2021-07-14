<?php
/**
 * inter basic-2
 *
 */
function foo() {
    $x = bar();
    $y = $x;
    echo $y;
}

function bar() {
    $a = $_GET[1];
    $b = $a;
    return $b;
}
?>
