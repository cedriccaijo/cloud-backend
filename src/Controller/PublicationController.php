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

    public function __construct(
        EntityManagerInterface $entityManager,
        PublicationsRepository $PublicationsRepository,
        SerializerInterface $serializer)
    {
        $this->entityManager = $entityManager;
        $this->PublicationsRepository = $PublicationsRepository;
        $this->serializer = $serializer;
    }    


    /**
     * @Route("/publication", name="app_publication")
     */
    public function index(): Response
    {
        $publications = $this->PublicationsRepository->findAl();

        return $this->render('publication/index.html.twig', [
            'publication' => $publications,
        ]);
    }
    
    /**
     * @Route("/create", name="create_publication")
     */
    public function create(Request $request): Response
    {
        $publication = new Publications();
        $form = $this->createForm(PublicationFormType::class, $publication);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $newPublication = $form->getData(); 
            $this->entityManager->persist($newPublication);
            $this->entityManager->flush();

            return $this->redirectToRoute('/publication');
        }

        $result = $this->serializer->serialize(
            $publication,
            'json',
            [
                AbstractNormalizer::ATTRIBUTES =>
                    ['id', 'title', 'content', 'created_at'
                    ]
            ]
        );
        return new JsonResponse($result, 200, [], true);

        // return $this->renderForm('publication/create.html.twig', [
        //     'form' => $form,
        // ]);
    }
}
