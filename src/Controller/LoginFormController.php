<?php

declare(strict_types=1);

namespace Alura\Mvc\Controller;

class LoginFormController extends WithHtmlController implements Controller
{
    public function processaRequisicao(): void
    {   
        if(array_key_exists('logado', $_SESSION) && $_SESSION['logado'] === true) {
            header('Location: /');
        }

        echo $this->renderTemplate('login-form');
    }
}