<?php

namespace Aflorczak\CommunityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/community', name: 'af-community-bundle_home')]
    public function indexAction(): Response
    {
        return $this->json([
            'success' => true,
        ]);
    }
}