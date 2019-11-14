# 101-hello-world

The simplest of examples, a Hello World!

In this example we load a single function from the C standard library: `printf`. This
function behaves in the exact same way as the PHP `printf` function does. We load the
function, and then we call it using the `\FFI` instance. We load the function with
`\FFI::cdef`.

To run:

    $ php hello-world.php
    > Hello world!
