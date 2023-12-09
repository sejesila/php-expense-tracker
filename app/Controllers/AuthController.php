<?php

namespace App\Controllers;

use Slim\Psr7\Request;
use Slim\Psr7\Response;
use Slim\Views\Twig;

class AuthController
{
    public function __construct(private readonly Twig $twig)
    {
    }
    public function loginView(Request $request,Response $response):Response
    {
        return $this->twig->render($response,'auth/login.twig');

    }
    public function registerView(Request $request,Response $response):Response
    {
        return $this->twig->render($response,'auth/register.twig');

    }

    public function register(Request $request,Response $response):Response
    {
        return $response;

    }

}