<?php

header("Content-Type: text/plain");
header("X-Author: @thegreatrazz on GitHub");

$out_array = array();
exec("/usr/games/fortune", $out_array);

foreach ($out_array as $line) {
    echo $line . "\n";
}