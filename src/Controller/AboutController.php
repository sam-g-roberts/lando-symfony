<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AboutController extends AbstractController
{
    public function about()
    {
        $number = random_int(0, 100);

        return $this->render('about.html.twig', [
            'number' => $number,
        ]);
    }
}