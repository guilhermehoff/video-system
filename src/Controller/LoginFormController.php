<?php

declare(strict_types=1);

namespace Alura\Mvc\Controller;

use Alura\Mvc\Helper\HtmlRenderTrait;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class LoginFormController implements Controller
{   
    use HtmlRenderTrait;

    public function processaRequisicao(ServerRequestInterface $request): ResponseInterface
    {   
        if(array_key_exists('logado', $_SESSION) && $_SESSION['logado'] === true) {
            return new Response(302, [
                'Location' => '/'
            ]);
        }

        return new Response(200, [], $this->renderTemplate('login-form'));
    }
}