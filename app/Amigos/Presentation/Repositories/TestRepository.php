<?php

namespace App\Amigos\Presentation\Repositories;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class TestRepository
{

    function hola(Request $request, Response $response)
    {
        $response->getBody()->write("Hola Mundo!");
        return $response;
    }
}