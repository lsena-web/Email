<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Communication\Email;


$endereco = 'seuemail@gmail.com';
$assunto = 'arquivo anexo';
$body = '<b>Seguem em anexo o </b><i>arquivo de texte</i>';
$anexo = __DIR__ . '/anexo-teste.txt';

$obEmail = new Email;

$sucesso = $obEmail->sendEmail($endereco, $assunto, $body, $anexo);

echo $sucesso ? 'E-mail enviado com sucesso' : $obEmail->getError();
