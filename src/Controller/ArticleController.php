<?php

namespace App\Controller;



use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController{

    #[Route('/articles', name:'show_articles')]
    public function ShowArticle(Request $request){

        // fake requête SQL "SELECT * FROM article";
        $articles = [
            1 => [
                'title' => 'La canicule, il fait chaud',
                'contenu' => 'je transpire'
            ],
            2 => [
                'title' => 'Fin des moteurs thermiques en 2035',
                'contenu' => 'BROUM'
            ],
            3 => [
                'title' => "L'alcool c'est pas cool",
                'contenu' => "Pourquoi y'a cool dans alcool ?"
            ]
        ];

        // récupérer l'id dans l'url (parametre GET)
        $id = $request->query->get('id');

        // trouver dans la liste des articles l'article qui correspond à l'id récupéré
        $article = $articles[$id];

        // afficher son titre en réponse
        return new Response($article['title']);
    }


}