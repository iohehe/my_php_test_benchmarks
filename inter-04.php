<?php
/**
 * argument sensetive - 1
 */
function foo($x, $y) {
    echo $x;
}

function bar() {
    $a = $_GET[1];
    $b = $a;
    foo($a, $b);
}
?>
