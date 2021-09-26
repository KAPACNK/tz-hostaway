<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;

class PhoneBookController extends AbstractController
{

    /**
     * @Rest\Get("/api/phone-book/{$id}")
     */
    public function getPhoneBookAction(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PhoneBookController.php',
        ]);
    }

    /**
     * @Rest\Get("/api/phone-book/")
     */
    public function getPhoneBooksAction(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PhoneBookController.php',
        ]);
    }

    /**
     * @Rest\Post("/api/phone-book")
     */
    public function addPhoneBookAction(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PhoneBookController.php',
        ]);
    }

    /**
     * @Rest\Patch("/api/phone-book")
     */
    public function updatePhoneBookAction(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PhoneBookController.php',
        ]);
    }

    /**
     * @Rest\Delete("/api/phone-book")
     */
    public function deletePhoneBookAction(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PhoneBookController.php',
        ]);
    }
}
