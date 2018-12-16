<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PropertyController extends AbstractController
{
    /**
     * @Route("/bien/:id", name="property.show")
     * @return Response
     */
    public function show(): Response
    {
        return $this->render('property/show.html.twig');
    }
}