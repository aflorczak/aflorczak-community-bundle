<?php

namespace Aflorczak\CommunityBundle\Services;

class MyFirstServiceInCommunityBundle
{
    public function test(): string
    {
        return 'Zwracamy tekst dla test';
    }

    public function community(): string
    {
        return 'Zwracamy tekst dla community';
    }
}