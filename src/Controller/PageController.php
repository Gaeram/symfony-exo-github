<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

//Création de classe avec le meme nom que le fichier
//Obligatoirement suffixé par controller
//#[Route permet de spécifier la redirection de la page que je veux creer("L'url est spécifiée ici", name : "Ici on y spécifie un nom")]

class PageController extends AbstractController

{
    #[Route("/", name: "home")]
    public function home(){
        // Permet de renvoyer une reponse HTTP m'affichant une chaine de caractères
        // Response est une classe propre à SYMFONY
        return new Response("Salut P'tit Batard");
    }

    #[Route("/contact", name: "contact")]
    public function contact(){
        // Utilise la classe Response afin d'afficher la chaine de caractere contact
        return new Response("Contact");
    }

    #[Route("/digimon", name: "digimon")]
    public function digimon(){
        return new Response("Retourne jouer à digimon");
    }
}