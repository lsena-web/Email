<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Communication\Email;


$endereco = 'seuemail@gmail.com';
$assunto = 'olá mundo';
$body = '<b>Olá mundo</b><br><br><i>Olá mundo</i>';

$obEmail = new Email;

$sucesso = $obEmail->sendEmail($endereco, $assunto, $body);

echo $sucesso ? 'enviado' : 'error';
