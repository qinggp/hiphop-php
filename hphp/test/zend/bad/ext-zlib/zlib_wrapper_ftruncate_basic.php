<?php
$f = dirname(__FILE__)."/004.txt.gz";
$f2 = "temp.txt.gz";
copy($f, $f2);

$h = gzopen($f2, "r");
ftruncate($h, 20);
fclose($h);
unlink($f2);

$h = gzopen($f2, "w");
ftruncate($h, 20);
fclose($h);
unlink($f2);

?>
===DONE===