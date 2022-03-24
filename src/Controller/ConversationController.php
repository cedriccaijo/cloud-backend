<?php

namespace App\Controller;

use GuzzleHttp\Psr7\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConversationController extends AbstractController
{
    /**
     * @var $userRepository
     */
    private $userRepository;

    /**
     * @var $entityManager
     */
    private $entityManager;



    /**
     * @Route("/conversation", name="app_conversation")
     */
    public function index(Request $request): Response
    {
        $receiver = 

        return new JsonResponse();
    }
}
