<?php
        //POST

        $nome = filter_input(INPUT_POST, "nome"); 
        $email = filter_input(INPUT_POST, "email"); 
        $fone = filter_input(INPUT_POST, "fone"); 
        
        
	//EMAIL

        require_once('src/PHPMailer.php');
        require_once('src/SMTP.php');
        require_once('src/Exception.php');

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;


//-----------------------ENVIO DE EMAIL EM CASO DE SUCESSO----------------------------------//                                            
       

        $texto_email = 'Olá, <b>' . 'Luciano' . '</b> <br><br>
        
        Foi enviada uma mensagem da sessão saiba mais do seu site www.dinavilanova.com.br, com os seguintes dados:
        
        <br><br> Nome cliente: ' . $nome . '
        <br> Email: ' . $email . '
        <br> Telefone:' . $fone . '

        <br><br> Dina Vila Nova '; 

        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 2;
        $mail->Debugoutput = 'html';
        $mail->CharSet = 'utf-8';
        
            
        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = 'ns334.hostgator.com.br';
            $mail->SMTPAuth = true;
            $mail->Username = 'contato@dinavilanova.com.br';
            $mail->Password = 'contatodinavilanova';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            
            
            $mail->setFrom('contato@dinavilanova.com.br');
            $mail->addAddress('luciano@jrgdi.com.br'); #($email);


            $mail->isHTML(true);
            $mail->FromName = $nome;
            $mail->Subject = $nome . '  enviou uma mensagem do site www.dinavilanova.com.br ';
            $mail->Body = $texto_email   ;
            $mail->AltBody = $nome . 'enviou uma mensagem do seu site www.dinavilanova.com.br';

            if($mail->send()) {
              #  echo 'Email enviado com sucesso';
            } else {
              #  echo 'Email nao enviado';
            }
        } catch (Exception $e) {
           # echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
        } 

        header("location: index.php?mensagem-enviada=1");
?>
