<?php

declare(strict_types=1);

namespace Alura\Mvc\Controller;

use Alura\Mvc\Helper\HtmlRenderTrait;

class LoginFormController implements Controller
{   
    use HtmlRenderTrait;

    public function processaRequisicao(): void
    {   
        if(array_key_exists('logado', $_SESSION) && $_SESSION['logado'] === true) {
            header('Location: /');
        }

        echo $this->renderTemplate('login-form');
    }
}