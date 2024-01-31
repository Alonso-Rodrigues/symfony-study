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
            ['id' => 1, 'title' => 'Test Post 1', 'slug' => 'postage-test-1'],
            ['id' => 2, 'title' => 'Test Post 2', 'slug' => 'postage-test-2'],
            ['id' => 3, 'title' => 'Test Post 3', 'slug' => 'postage-test-3'],
            ['id' => 4, 'title' => 'Test Post 4', 'slug' => 'postage-test-4'],
            ['id' => 5, 'title' => 'Test Post 5', 'slug' => 'postage-test-5']
        ];
    }
    
}