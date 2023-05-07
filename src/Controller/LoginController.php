<?php

declare(strict_types=1);

namespace Alura\Mvc\Controller;

use PDO;
use Alura\Mvc\Controller\ConnectionController;
use Alura\Mvc\Helper\FlashMessageTrait;

class LoginController implements Controller
{   
    use FlashMessageTrait;

    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = ConnectionController::getInstance();
    }

    public function processaRequisicao(): void
    {   
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password');

        $sql = 'SELECT * FROM users WHERE email = ?';
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $email);
        $statement->execute();

        $userData = $statement->fetch(PDO::FETCH_ASSOC);
        $correctPassword = password_verify($password, $userData['password'] ?? '');

        if ($correctPassword) {
            $_SESSION['logado'] = true;
            header('Location: /');
        } else {
            $this->addErrorMessage('Usuário ou senha inválidos');
            header('Location: /login?success=0');
        }
    }
}
