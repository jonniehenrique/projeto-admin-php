<?php

if (isset($_POST['recuperar'])) {
    include("conexao/conecta.php");
    $email = utf8_decode(addslashes(strip_tags(trim($_POST['email']))));
    $assunto = 'Recuperação de Senha - Admin Sistema de Postagem';
    // verifica se o e-mail está no cadastrado no sistem	
    $select = "SELECT * from login WHERE email='$email' ";

    try {
        $result = $conexao->prepare($select);
        //$result->bindValue(':email', $email, PDO::PARAM_STR);
        $result->execute();
        $contar = $result->rowCount();
        if ($contar > 0) {
            foreach ($conexao->query($select) as $exibe)
                ;
            $nomeUser = $exibe['nome'];
            $emailUser = $exibe['email'];
            $usuarioUser = $exibe['usuario'];
            $senhaUser = $exibe['senha'];


            require_once('envia-email/PHPMailer/class.phpmailer.php');

            $Email = new PHPMailer();
            $Email->SetLanguage("br");
            $Email->IsSMTP(); // Habilita o SMTP 
            $Email->SMTPAuth = true; //Ativa e-mail autenticado
            $Email->Host = 'mail.seudominio.com.br'; // Servidor de envio # verificar qual o host correto com a hospedagem as vezes fica como smtp.
            $Email->Port = '587'; // Porta de envio - verificar com o servidor
            $Email->Username = 'email@seudominio.com.br'; //e-mail que será autenticado
            $Email->Password = 'suasenha'; // senha do email
            // ativa o envio de e-mails em HTML, se false, desativa.
            $Email->IsHTML(true);
            // email do remetente da mensagem
            $Email->From = 'email@seudominio.com.br';
            // nome do remetente do email
            $Email->FromName = utf8_decode($email);
            // Endereço de destino do emaail, ou seja, pra onde você quer que a mensagem do formulário vá?
            $Email->AddReplyTo($email, 'Seu nome ou da empresa');
            $Email->AddAddress($email); // para quem será enviada a mensagem
            // informando no email, o assunto da mensagem
            $Email->Subject = utf8_decode($assunto);
            // Define o texto da mensagem (aceita HTML)
            $Email->Body .= "Seguem os dados para acesso ao Gerenciador do Sistema de Postagem com PHP:<br /><br />
			<strong>Nome:</strong> $nomeUser<br />
			<strong>Email:</strong> $emailUser<br />
			<strong>Usu&aacute;rio:</strong> $usuarioUser<br />
			<strong>Senha:</strong> $senhaUser<br /><br />

			<strong>Obs:</strong> Voc&ecirc; n&atilde;o precisa responder &agrave; este e-mail

			";
            // verifica se está tudo ok com oa parametros acima, se nao, avisa do erro. Se sim, envia.
            if (!$Email->Send()) {
                echo '<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong>Erro ao enviar!</strong> Houve um problema ao recuperar sua senha, contate o administrador.
			</div>';
                echo "Erro: " . $Email->ErrorInfo;
            } else {
                echo '<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong>Sucesso!</strong> Uma mensagem com as informações de acesso foi enviada p/ o e-mail informado.
		</div>';
            }
        } else {
            echo '<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<strong>Erro ao recuperar!</strong> O e-mail digitado não consta cadastrado em nosso sistema.
</div>';
        }
    } catch (PDOException $e) {
        echo $e;
    }
}// se clicar
?>    