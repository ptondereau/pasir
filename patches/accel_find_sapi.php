<?php

if (patch_point() !== 'after-php-extract') {
    return;
}

$file = SOURCE_PATH . '/php-src/ext/opcache/ZendAccelerator.c';
$content = file_get_contents($file);
$content = str_replace('"fuzzer",', "\"fuzzer\",\n\t\t\"pasir\",", $content);
file_put_contents($file, $content);
