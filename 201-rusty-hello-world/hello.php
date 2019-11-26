<?php declare(strict_types = 1);

$ffi = \FFI::cdef(
    file_get_contents(__DIR__ . '/target/debug/my_library.h'),
    __DIR__ . '/target/debug/libmy_library.so'
);

$cstr = $ffi->c_hello_world();
$phpstr = \FFI::string($cstr);
$ffi->c_hello_world_free($cstr);

echo $phpstr;
