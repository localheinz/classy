<?php

namespace Ergebnis\Classy\Test\Fixture\NoClassy\WithAnonymousClassAndShellStyleComments;

function foo()
{
    return // foo
    new // bar
    class // baz
    extends // qux
    \stdClass {};
}
