<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['subject']);


$to = "contato@consultoriamaximus.com.br";
$subject = "Contato - Consultoria Maximus";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mensagem. "\r\n";
$header = "From:site@consultoriamaximus.com.br". "\r\n".
          "Reply-To:".$email."\r\n".
          "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

  echo("Email enviado com sucesso!");
}else{
  echo("Houve um erro no envio, tente novamente");
}

}

?>

