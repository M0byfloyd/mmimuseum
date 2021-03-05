<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjetsController extends AbstractController
{
    /**
     * @Route("/projets", name="articles")
     */
    public function articles(): Response
    {
        return $this->render('articles/archive.html.twig');
    }
    /**
     * @Route("/projets/{id}", name="articles_one")
     */
    public function article($id): Response
    {
        return $this->render('articles/single.html.twig', [
            'articleId' => $id,
        ]);
    }
    /**
     * @Route("/projets/new", name="article_new")
     */
    public function newArticle(): Response
    {
        return $this->render('articles/new.html.twig');
    }

}
