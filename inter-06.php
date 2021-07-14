<?php
/**
 * argument sensetive - 3
 */
function foo($x) {
    return htmlspecialchars($x);
}

function bar() {
    $a = $_GET[1];
    echo foo($a) + $a; // distinct the same taint in different place in the same statement. 
}

?>
