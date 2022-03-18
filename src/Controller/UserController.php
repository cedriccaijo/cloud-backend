<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;


/**
* @Route("/api/user", name="app_user")
*/
class UserController extends AbstractController
{
    private $entityManager;
    private $UserRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        UserRepository $UserRepository)
    {
        $this->entityManager = $entityManager;
        $this->UserRepository = $UserRepository;
    }    

    /**
    * @Route("/api/user", name="app_user")
    */
    public function index()
    {
        $users = $this->UserRepository->findAll();

        $arrayOfUsers = [];
        foreach($users as $user) {
            $arrayOfUsers[] = $user->toArray();
        }

        return $this->json($arrayOfUsers);
    }
}
