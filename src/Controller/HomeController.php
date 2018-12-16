<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Twig\Environment;
use App\Service\LbcData;

class HomeController extends AbstractController
{
    /**
     * @var Environment
     */
    private $twig;

    /**
     * @var LbcData
     */
    private $lbcData;

    public function __construct(Environment $twig, LbcData $lbcData)
    {
        $this->twig = $twig;
        $this->lbcData = $lbcData;
    }

    /**
     * @Route("/", name="home")
     * @return Response
     */
    public function index(): Response
    {
        $ok = $this->lbcData->getTest();

        return $this->render('pages/home.html.twig',
            [
                "test" => $ok
            ]);
    }
}