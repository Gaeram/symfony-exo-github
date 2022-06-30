<?php

namespace App\Controller;



use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PokerController extends AbstractController {

    #[Route("/poker/{id}", name: "poker")]
    public function poker($id){
        $age = $id;
        if ($age >= 18){
            return new Response("Bienvenue, Vous pouver Entrer");
        } else if ($age < 18) {
            return $this->redirectToRoute('digimon');
        } else {
            return new Response("Veuillez mentionner votre age");
        }
    }
}