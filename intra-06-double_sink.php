<?php
/**
 * double sink
 */
function bar() {
    $a = $_GET[1];
    $b = $a;

    echo strip_tags($b);
    echo $b;
}
?>
