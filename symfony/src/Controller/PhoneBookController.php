<?php

namespace App\Controller;

use App\Entity\PhoneBook;
use App\Repository\PhoneBookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
// use FOS\RestBundle\Controller\Annotations as Rest;
// use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PhoneBookController extends AbstractController
{

    /**
     * @Route("/api/phone-book/{id}", name="api_get_phone_book", methods={"GET"})
     */
    public function getPhoneBookAction(int $id): Response
    {
        $repository = $this->getDoctrine()->getRepository(PhoneBook::class);

        $result = $repository->find($id);

        if (!$result) {
            return $this->json([
                'message' => 'ERROR',
                'body' => Response::HTTP_NOT_FOUND,
            ]);
        }

        return new JsonResponse($result, Response::HTTP_OK);
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
