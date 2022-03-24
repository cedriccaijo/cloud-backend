<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\LoginFormAuthenticator;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Forms;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class RegistrationController extends AbstractController
{   
    private $serializer;

    public function __construct(
        SerializerInterface $serializer,
        EntityManagerInterface $entityManager
        )
    {
        $this->entityManager = $entityManager;
        $this->serializer = $serializer;
    }

    /**
     * @Route("/register", name="app_register")
     */
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, LoginFormAuthenticator $authenticator, EntityManagerInterface $entityManager): Response
    {
        
        $content = json_decode($request->getContent(), true);
        $form = $this->createForm(RegistrationFormType::class);
        $form->submit($content);

        if(!$form->isValid()){
            $errors=[];
            foreach ($form->getErrors(true, true) as $error){
                $propertyName = $error->getOrigin()->getName();
                $errors[$propertyName] = $error->getMessage();
            }
            return $this->json([
                'message' => ['text' => $errors, 'level' => $error],
            ]);    
        }
        $user = new User();

        $user->setEmail($content['email']);
        $user->setPassword(
            $userPasswordHasher->hashPassword(
                $user,
                $form->get('password')->getData()
            )
        );
        $user->setFirstname($content['firstname']);
        $user->setLastname($content['lastname']);

        if ($user->getToken() === null) {
            $user->setToken(bin2hex(random_bytes(10)));
        }

        try {
            $this->entityManager->persist($user);
            $this->entityManager->flush();
        } catch (UniqueConstraintViolationException $exception) {
            return $this->json([
                'message' => ['text'=>'User creer', 'level' => 'error']
            ]);
        }
               
        $result = $this->serializer->serialize(
            $user,
            'json',
            [
                AbstractNormalizer::ATTRIBUTES =>
                    ['id', 'email', 'roles', 'posted', 'firstname', 'lastname'
                    ]
            ]
        );
        return new JsonResponse($result, 200, [], true);
    }
        
}
