<?php

declare(strict_types=1);

namespace Alura\Mvc\Controller;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

interface Controller
{
    public function processaRequisicao(ServerRequestInterface $request): ResponseInterface;
}
