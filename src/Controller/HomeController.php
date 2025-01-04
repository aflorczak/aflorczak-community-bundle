<?php

namespace Aflorczak\CommunityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function indexAction(): Response
    {
        return $this->json([
            'success' => true,
        ]);
    }
}