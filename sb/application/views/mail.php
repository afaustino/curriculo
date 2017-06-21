<?php 
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];
// $mensagem = $_POST['msg'];
// $data_envio = date('d/m/Y');
// $hora_envio = date('H:i:s');


// emails para quem será enviado o formulário
    $emailenviar = "gaya@searchdigital.com.br";
    // $emailenviar = "rrgaya@gmail.com";
    $destino = $emailenviar;
    $assunto = "Contato pelo Site";
    $mensagem = "Nome: $nome <br> Email: $email <br> Telefone: $telefone <br> Mensagem: $mensagem <br>";
 
    // É necessário indicar que o formato do e-mail é html
    	$headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: $email';
    //$headers .= "Bcc: $EmailPadrao\r\n";
     
    $enviaremail = mail($destino, $assunto, $mensagem, $headers);
    if($enviaremail){
    $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
    echo "<meta http-equiv='refresh' content='0.1;URL=obrigado.php'>";
    } else {
    $mgm = "ERRO AO ENVIAR E-MAIL!";
    echo "Enviando... ERRO!!!";
    }

?>