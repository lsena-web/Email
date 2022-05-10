<?

if (isset($_POST['nome']) && !empty($_POST['nome'])) {


    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $msg = addslashes($_POST['msg']);
    $assunto = addslashes($_POST['assunto']);
    $para = addslashes($_POST['para']);
    $empresa = mb_strtoupper(addslashes($_POST['empresa']));

    $corpo = $msg . "\n\n" . "Nome " . $nome . "\n" . $empresa . "\n" . $email . "\n" . $telefone;

    $cabecalho = "From: " . $email . "\r\n" .
        "Reply-to: " . $email . "\r\n" .
        "X-mailer: PHP/" . phpversion();

    mail($para, $assunto, $corpo, $cabecalho);

    header("Location: contato.html");
}

// ENVIANDO E-MAIL SO COM PHP SEM A BIBLIOTECA PHPMAILER