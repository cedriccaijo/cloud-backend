<?php

namespace App\Controller;

use App\Entity\Publications;
use App\Form\PublicationFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\PublicationsRepository;
use App\Service\UserService;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\String\Slugger\SluggerInterface;

class PublicationController extends AbstractController
{
    private $entityManager;
    private $PublicationsRepository;
    private $serializer;

    public function __construct(
        EntityManagerInterface $entityManager,
        PublicationsRepository $PublicationsRepository,
        SerializerInterface $serializer,
        UserService $userService
        )
    {
        $this->entityManager = $entityManager;
        $this->PublicationsRepository = $PublicationsRepository;
        $this->serializer = $serializer;
        $this->userService = $userService;
    }    
    
    /**
     * @Route("/create", name="create_publication")
     */
    public function create(Request $request, SluggerInterface $slugger): Response
    {
        /** @var User $user */
        $user = $this->userService->getUserFromRequest($request);
        if (null === $user) {
            return new Response('Unauthorized', 401);
        }

        $userToken = $user->getToken();
        $content = json_decode($request->getContent(), true);
        $form = $this->createForm(PublicationFormType::class);
        $form->submit($content);

        if(!$form->isValid()){
            $errors=[];
            foreach ($form->getErrors(true, true) as $error){
                $propertyName = $error->getOrigin()->getName();
                $errors[$propertyName] = $error->getMessage();
            }
            return $this->json([
                'message' => ['text' => $errors, 'level' => $error]
            ]);
        }     
        $publications = new Publications();

        $imageFile = $form->get('imageFile')->getData();

        if ($imageFile){
            $newImageFile = uniqid() . '.' . $imageFile->guessExtension();
            try {
                $imageFile->move(
                    $this->getParameter('images_directory'),
                    $newImageFile
                );
            } catch (FileException $e){
                return new Response($e->getMessage());
            }
            $publications->setImageFile($newImageFile);
        }
        
        $publications->setTitle($content['title']);
        $publications->setContent($content['content']);

        try {
            $this->entityManager->persist($publications);
            $this->entityManager->flush();
        } catch (UniqueConstraintViolationException $exception) {
            return $this->json([
                'message' => ['text'=>'Publication crée', 'level' => 'error']
            ]);
        }
        return new JsonResponse(['title' => $publications->getTitle(), 'content' =>  $publications->getContent()], 200);
    }
}
