<?php

namespace App\Controller;

use App\Entity\Identite;
use App\Entity\Niveaux;
use App\Entity\VieAquarium;
use App\Form\IdentiteVieAquariumType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EauDouceController extends AbstractController
{
    /**
     * @Route("/eau/douce", name="app_eau_douce")
     */
    public function index(): Response
    {
        return $this->render('eau_douce/index.html.twig', [
            'controller_name' => 'EauDouceController',
        ]);
    }

    /**
     * @route("/ajouter", name="app_eauDouce_ajouter")
     */
    public function eauDouceAjouter(ManagerRegistry $doctrine, Request $request): Response
    {
        $identite = new Identite();
        $aquarium = new VieAquarium();
        $niveaux = $doctrine->getRepository(Niveaux::class)->findAll();

        $form = $this->createForm(IdentiteVieAquariumType::class, ['identite' => $identite, 'aquarium' => $aquarium]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $identite->setCategorie("Poissons d'eau douce");
            $identite->setMaintenance($request->get('maintenance'));
            $identite->setSoins($request->get('soins'));
            $identite->setReproduction($request->get('reproduction'));
            dd($request);
            $doctrine->getManager()->persist($identite);
            $doctrine->getManager()->flush();
            $aquarium->setIdentite($identite);
            $doctrine->getManager()->persist($aquarium);
            $doctrine->getManager()->flush();
            return $this->redirectToRoute('app_home');
        }

        return $this->render('eau_douce/ajouter.html.twig', [
            'identiteAquarium' => $form->createView(),
            'niveaux' => $niveaux,
            ]);
    }

}
