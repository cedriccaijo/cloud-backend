<?php

namespace App\Controller;

use App\Service\UserService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{

    /**
     * @var UserService
     */
    private $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    /**
     * @Route("/", name="default")
     */
    public function index(): Response
    {
        return $this->json('Welcome !');
    }

    /**
     * @Route("/protected", name="protected")
     */
    public function protectedController(Request $request): Response
    {
        /** @var User */
        $user = $this->userService()->getUserFromRequest($request);
        if (null !== $user) {
            return new JsonResponse('Not authentified.', 401);
        }
        
        // Je sais que mon user est auth
        return $this->json(sprintf('Welcome %s!', $user->getEmail()));
    }
}
