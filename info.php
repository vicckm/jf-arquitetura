<?php 






 function enviaemail($body, $subject){
        $para = "wellersonramos360@gmail.com";
        $assunto = $subject;
        $mensagem = $body;
        $cabecalho = "Content-type: text/html; charset=ISO 8859-1" . "\r\n";
        $cabecalho .= "from: Wellerson Harper<wellersonramos360@gmail.com>" . "\r\n";
        return $retorno = (mail($para, $assunto, $mensagem, $cabecalho)) ? "true" : "Erro ao enviar email. Tente novamente mais tarde.";
    }

//Gerador de chave
    function geradorchave($qtyCaraceters = 20){
        //Letras minúsculas embaralhadas
        $smallLetters = str_shuffle('abcdefghijklmnopqrstuvwxyz');
        //Letras maiúsculas embaralhadas
        $capitalLetters = str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
        //Números aleatórios
        $numbers = (((date('Ymd') / 12) * 24) + mt_rand(800, 9999));
        $numbers .= 1234567890;
        //Junta tudo
        $characters = $capitalLetters.$smallLetters.$numbers;
        //Embaralha e pega apenas a quantidade de caracteres informada no parâmetro
        $key = substr(str_shuffle($characters), 0, $qtyCaraceters);
        //Retorna a chave
        return $key;
    }

//Função envia link de alteração de senha
   

 //Função envia link de alteração de senha
    function linksenha($chave){
        $subject = 'Link para redefinição de senha';
        $body = 'Olá,<br><br>
        Link para redefinir sua senha: <a href="http://localhost/jf-arquitetura/redefinirsenha.php?chave='.$chave.'">http://localhost/jf-arquitetura/redefinirsenha.php?chave='.$chave.'</a><br><br>
        <strong>ATENÇÂO: O link expira após 24 horas</strong><br><br><br>
        Atenciosamente,<br>
        EQUIPE JF';
        $retorno = enviaemail($body, $subject);
        $status = ($retorno == "true") ? "Email enviado com sucesso" : $retorno;
        return $status;
    }

?>