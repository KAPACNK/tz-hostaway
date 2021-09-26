<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
// use FOS\RestBundle\Controller\Annotations as Rest;
// use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PhoneBookController extends AbstractController
{

    /**
     * @Route("/api/phone-book", name="api_get_phone_book")
     */
    public function getPhoneBookAction()
    {
        var_dump(1);
        die();
    }


    // /**
    //  * @Rest\Get("/api/phone-book/{$id}")
    //  */
    // public function getPhoneBookAction(): Response
    // {
    //     return $this->json([
    //         'message' => 'Welcome to your new controller!',
    //         'path' => 'src/Controller/PhoneBookController.php',
    //     ]);
    // }

    // /**
    //  * @Rest\Get("/api/phone-book/")
    //  */
    // public function getPhoneBooksAction(): Response
    // {
    //     return $this->json([
    //         'message' => 'Welcome to your new controller!',
    //         'path' => 'src/Controller/PhoneBookController.php',
    //     ]);
    // }

    // /**
    //  * @Rest\Post("/api/phone-book")
    //  */
    // public function addPhoneBookAction(): Response
    // {
    //     return $this->json([
    //         'message' => 'Welcome to your new controller!',
    //         'path' => 'src/Controller/PhoneBookController.php',
    //     ]);
    // }

    // /**
    //  * @Rest\Patch("/api/phone-book")
    //  */
    // public function updatePhoneBookAction(): Response
    // {
    //     return $this->json([
    //         'message' => 'Welcome to your new controller!',
    //         'path' => 'src/Controller/PhoneBookController.php',
    //     ]);
    // }

    // /**
    //  * @Rest\Delete("/api/phone-book")
    //  */
    // public function deletePhoneBookAction(): Response
    // {
    //     return $this->json([
    //         'message' => 'Welcome to your new controller!',
    //         'path' => 'src/Controller/PhoneBookController.php',
    //     ]);
    // }
}
