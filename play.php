<?php
include("vendor/autoload.php");

// Gets the two lines from standard input (is there a better way of doing this?):
$handle = fopen("php://stdin", "r");
fscanf($handle,"%d %d %d %d",$a0,$a1,$a2,$a3);
fscanf($handle,"%d %d %d %d",$b0,$b1,$b2,$b3);

\Symfony\Component\VarDumper\VarDumper::dump(array($a0, $a1, $a2, $a3));
\Symfony\Component\VarDumper\VarDumper::dump(array($b0, $b1, $b2, $b3));
