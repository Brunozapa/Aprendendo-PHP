<?php declare(strict_types=1);

// function verificaSeEmailEhValido(): string
// {
//     return filter_var($_GET['email'], FILTER_VALIDATE_EMAIL) ? "O seu e-mail é: " . $_GET['email'] : "O seu e-mail não é válido";
// }

function verificaSeEmailEhValido(): string
{
    $email = $_GET['email'];
    $mensagem = "O seu e-mail é: " . $email;
    $mensagemErro = "O seu e-mail não é válido";

    return filter_var($email, FILTER_VALIDATE_EMAIL) ? $mensagem : $mensagemErro;
}

echo verificaSeEmailEhValido();
