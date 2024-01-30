<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(): Response
    {
        $posts = $this->getPosts();
        
        return $this->render('index/index.html.twig', compact('posts'));
    }
    
    #[Route('/post/{slug?}', name: 'app_show')]
    public function show(string $slug): Response
    {
        
        return $this->render('index/single.html.twig', compact('slug'));
    }

    private function getPosts(): array
    {
        return[
            ['id' => 1, 'title' => 'Teste Postagem 1'],
            ['id' => 2, 'title' => 'Teste Postagem 2'],
            ['id' => 3, 'title' => 'Teste Postagem 3'],
            ['id' => 4, 'title' => 'Teste Postagem 4'],
            ['id' => 5, 'title' => 'Teste Postagem 5']
        ];
    }
    
}