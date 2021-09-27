<?php

namespace App\Controller;

use App\Entity\PhoneBook;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;


/**
 * Class PhoneBookController
 * 
 * @Rest\Route("/api", name="phone_book_api")
 */
class PhoneBookController extends AbstractFOSRestController
{
    /**
     * @Rest\Get("/phone-book/{id}", name="api_get_phone_book")
     */
    public function getPhoneBookAction(int $id): Response
    {
        $repository = $this->getDoctrine()->getRepository(PhoneBook::class);

        $result = $repository->find($id);

        if (!$result) {
            $response =  $this->json([
                'code' => Response::HTTP_NOT_FOUND,
                'message' => 'Phone book not found'
            ]);
            return $response;
        }

        $response =  $this->json([
            'code' => Response::HTTP_OK,
            'body' => $result->jsonSerialize()
        ]);

        return $response;
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
