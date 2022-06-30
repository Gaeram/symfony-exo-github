<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// Création d'une nouvelle classe au nom de la page afin que cela fonctionne correctement

class BlogController

{
    #[Route("article", name: "article")]
    public function article(){
        // Création d'un nouvel article & nouveau titre : Utilisation de balise HTML précisant que ceci est un titre
        return new Response("NOUVEL ARTICLE");
    }
}