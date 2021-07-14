<?php
/**
 * basic taint 
 */
function bar() {
    $a = $_GET[1];
    $b = $a;
    echo $a;
}

?>
