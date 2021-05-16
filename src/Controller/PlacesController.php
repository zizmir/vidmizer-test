<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Place;
use App\Repository\PlaceRepository;

class PlacesController extends AbstractController
{
    /**
     * @Route("/places", name="places")
     */
    public function index(PlaceRepository $repos): Response
    {
        return $this->json($repos->findAll());
    }

    /**
     * @Route("/places/create", name="places_create")
     */
    public function create(Request $req, ObjectManager $manager): Response
    {
        $place = new Place();

        $form = this->CreateFormBuilder($article)
            -add('nom')
            ->add('address')
            ->add('coordinate')
            ->getForm();
        return
    }

    /**
     * @Route("/places/{name}", name="places_show")
     */
    public function show(PlaceRepository $repos, $name): Response
    {
        return $this->json($repos->findBy(['nom'=>$name]));
    }

}
