# 102-hello-world-with-load

This example is the same as 101-hello-world, but using the `\FFI::load` method of
loading a FFI library. Alongside `hello-world.php`, there is a `header.h`, which
contains the library definition that we want to use inside PHP.

To run:

    $ php hello-world.php
    > Hello world!
