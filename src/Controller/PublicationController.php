<?php

namespace App\Controller;

use App\Form\PublicationFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\PublicationsRepository;
use Doctrine\Common\Annotations\DocLexer;

class PublicationController extends AbstractController
{
    private $entityManager;
    private $PublicationsRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        PublicationsRepository $PublicationsRepository)
    {
        $this->entityManager = $entityManager;
        $this->PublicationsRepository = $PublicationsRepository;
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
     * @Route("/create, name="app_publication")
     */
    public function create(Request $request): Response
    {
        $publication = new Publication();
        $form = $this->createForm(PublicationFormType::class, $publication);

        $form->HandlerRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $newPublication = $form->getData(); 
            $this->entityManager->persist($newPublication);
            $this->entityManager->flush();

            return $this->redirectToRoute('');
        }

        return $this->render('publication/create.html.twig'[
            'form' -> $form->createView()
        ]);
    }
}
