<?php

namespace App\Controller;

use App\Entity\Conversation;
use App\Entity\Participant;
use App\Repository\UserRepository;
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
     * @var $em
     */
    private $em;

    public function __construct(
        EntityManagerInterface $em,
        UserRepository $userRepository)
    {
        $this->em = $em;
        $this->userRepository = $userRepository;
    }

    /**
     * @Route("/conversation", name="app_conversation")
     */
    public function index(Request $request): Response
    {
        $receiver = $request->get('receiver', 0);
        $receiver = $this->userRepository->find($receiver);
        
        if (is_null($receiver)) {
            throw new \Exception("The user was not found");
        }

        $conversation = new Conversation();
        $byUser = new Participant();

        $byUser->setUser($this->getUser());
        $byUser->setConversation($conversation);

        $toUser = new Participant();

        $toUser->setUser($receiver);
        $toUser->setConversation($conversation);

        $this->em->getConnection()->beginTransaction();
        try{
            $this->em->persist($byUser);
            $this->em->persist($toUser);
            $this->em->persist($conversation);
            $this->em->flush();
        } catch (\Exception $exception) {
            $this->em->rollback();
            throw $exception;
        }

        return $this->json([
            'id' => $conversation->getId()
        ], Response::HTTP_CREATED, [], []);
    }
}
