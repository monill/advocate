<?php

$arr = [];

for ($i = 0; $i < 30; $i++) {
    $arr[$i] = readline(": ");

    $input = rtrim($arr[$i]);
    exec("@php .\artisan make:migration create_" . $input . "_table");
}

exit();
