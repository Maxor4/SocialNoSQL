<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    public function index()
    {
        return new Response('
            <html>
                <body>
                    <h1>Hello Symfony 4 World</h1>
                </body>
            </html>
        ');
    }
}