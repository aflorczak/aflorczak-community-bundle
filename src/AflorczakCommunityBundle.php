<?php

namespace Aflorczak\CommunityBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AflorczakCommunityBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}