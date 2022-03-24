<?php

namespace App\Controller;

use App\Entity\Publications;
use App\Form\PublicationFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\PublicationsRepository;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class PublicationController extends AbstractController
{
    private $entityManager;
    private $PublicationsRepository;
    private $serializer;

    public function __construct(
        EntityManagerInterface $entityManager,
        PublicationsRepository $PublicationsRepository,
        SerializerInterface $serializer
        )
    {
        $this->entityManager = $entityManager;
        $this->PublicationsRepository = $PublicationsRepository;
        $this->serializer = $serializer;
    }    
    
    /**
     * @Route("/create", name="create_publication")
     */
    public function create(Request $request): Response
    {

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

            $publications->setTitle($content['title']);
            $publications->setContent($content['content']);
            $publications->setCreatedAt(new \DateTime());
            $publications->setAuthor($content['author']);

            try {
                $this->entityManager->persist($publications);
                $this->entityManager->flush();
            } catch (UniqueConstraintViolationException $exception) {
                return $this->json([
                    'message' => ['text'=>'Publication crée', 'level' => 'error']
                ]);
            }

        $result = $this->serializer->serialize(
            $publications,
            'json',
            [
                AbstractNormalizer::ATTRIBUTES =>
                    ['id', 'title', 'content', 'created_at', 'author'
                    ]
            ]
        );
        return new JsonResponse($result, 200, [], true);

    }
}
