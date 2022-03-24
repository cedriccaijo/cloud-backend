<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Json;

class SecurityController extends AbstractController
{

    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * @var UserPasswordHasherInterface
     */
    private $passwordHasher;

    public function __construct(
        EntityManagerInterface $em,
        UserPasswordHasherInterface $passwordHasher) {
        $this->em = $em;
        $this->passwordHasher = $passwordHasher;
    }

    /**
     * @Route("/login", name="app_login")
     */
    public function login(Request $request): Response
    {
        $email = $request->request->get('email');
        $password = $request->request->get('password');

        if (null == $email || null == $password) {
            return new JsonResponse('Invalid request', 400);
        }

        $user = $this->em->getRepository(User::class)->findOneByEmail($email);
        if (null === $user) {
            return new JsonResponse('Invalid request', 400);
        }

        if (!$this->passwordHasher->isPasswordValid($user, $password)) {
            return new JsonResponse('Bad credentials.', 401);
        }

        if ($user->getToken() === null) {
            $user->setToken(bin2hex(random_bytes(10)));
            $this->em-->persist($user);
            $this->em->flush();
        }

        return new JsonResponse(['email' => $user->getEmail(), 'token' =>  $user->getToken()], 200);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
