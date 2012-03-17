<?php

namespace Syntax\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SyntaxUserBundle extends Bundle
{
    public function getParent() {
        return 'FOSUserBundle';
    }
}
