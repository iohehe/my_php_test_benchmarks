<?php
/**
 * basic taint with path sensitive
 * 
 * */
function bar ($x) {
    $a = $_GET[1];
    if ($x == 1)
    {
        $b = $x;
    }
    else
    {
	$b = $a;
    }
    echo $b;
}
?>
