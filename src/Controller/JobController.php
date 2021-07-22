<?php

namespace App\Controller;

use App\Entity\Job;
use App\Repository\JobRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JobController extends AbstractController
{
    /**
     * @Route("/lieux/{id}", name="lieux_show")
     */
    public function show(int $id): Response
    {
        $lieux = $this->getDoctrine()
            ->getRepository(lieux::class)
            ->find($id);

        if (!$lieux) {
            throw $this->createNotFoundException(
                'Aucune photos ne correspond au lieu' . $id
            );
        }
        return $this->render('lieux/show.html.twig', [
            'lieux' => $lieux,
        ]);
    }
}
