<?php

function flatten(array $array) {
    $return = array();
    array_walk_recursive($array, function($a) use (&$return) { $return[] = $a; });
    return $return;
}

$fruits = array (
    "Apple",
     array("Apple", "Kiwi", "Tomato")
);

$result = flatten($fruits);
echo $cnt = count(array_filter($result ,function($a) {return $a=="Apple";}));

?>