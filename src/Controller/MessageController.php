<?php

namespace App\Controller;

use App\Entity\Conversation;
use App\Entity\Message;
use App\Repository\MessageRepository;
use App\Repository\ParticipantRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class MessageController extends AbstractController
{
    /**
     * @var EntityManagerInterface
     */
    private $em;
    /**
     * @var MessageRepository
     */
    private $messageRepository;
    /**
     * @var UserRepository
     */
    private $userRepository;
    /**
     * @var ParticipantRepository
     */
    private $participantRepository;
    /**
     * @var PublisherInterface
     */
    private $publisher;

    public function __construct(
        EntityManagerInterface $em,
        MessageRepository $messageRepository,
        UserRepository $userRepository,
        SerializerInterface $serializer)
    {
        $this->em = $em;
        $this->messageRepository = $messageRepository;
        $this->userRepository = $userRepository;
        $this->serializer = $serializer;
    }


    /**
     * @Route("/{id}", name="get_message")
     */    
    public function index(Request $request, Conversation $conversation)
    {
        
    }

    /**
     * @Route("/{id}", name="new_message")
     */
    public function newMessage(Request $request, Conversation $conversation): Response
    {
        $user = $this->getUser();
        $content = json_decode($request->getContent(), true);

        $message = new Message();
        $message->setContent($content);
        $message->setUser($this->em->getRepository(User::class)->findOneBy(['id']));
        $message->setMine(true);

        $conversation->addMessage($message);
        $conversation->setLastMessage($message);
        
        $this->em->getConnection()->beginTransaction();
        try{
            $this->em->persist($message);
            $this->em->persist($conversation);
            $this->em->flush();
        } catch (\Exception $exception) {
            $this->em->rollback();
            throw $exception;
        }

        $result = $this->serializer->serialize(
            $message,
            'json',
            [
                AbstractNormalizer::ATTRIBUTES =>
                    ['id', 'content', 'createdAt', 'mine'
                    ]
            ]
        );
        return new JsonResponse($result, 200, [], true);
    }
}
