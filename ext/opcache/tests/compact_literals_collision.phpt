--TEST--
Collision between string and float literals during compaction
--FILE--
<?php

var_dump("\0\0\0\0\0\0\0\0");
var_dump(0.0);
var_dump("\0\0\0\0\0\0\0\0");
var_dump(0.0);

?>
--EXPECT--
string(8) "        "
float(0)
string(8) "        "
float(0)
