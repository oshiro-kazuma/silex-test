<?php

$a = array(1,2,3,4,5);

// mapで全要素を10倍
$a = array_map(function ($i) {
	 return $i."aa";
}, $a);

print_r($a);
