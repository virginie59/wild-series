<?php
// src/Controller/ProgramController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
 use Symfony\Component\Routing\Annotation\Route;

class ProgramController extends AbstractController
{
    #[Route('/program/', name: 'program_index')]
    public function index(): Response
    {
        return $this->render('program/index.html.twig', [
            'website' => 'Wild Series'
         ]);
    }

    #[Route('/program/{id}', methods: ['GET', 'POST'], name: 'program_show')]
    public function new(int $id=4)  : Response
    {
        return $this->render('program/show.html.twig', ['id'=> 4]);
    }
}