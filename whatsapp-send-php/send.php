<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Link Para WhatsApp</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;700&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            background-color: #f8f8f8;
        }
        main{
            position: relative;
            margin: 0 auto;
            text-align: center;
        }

        main h1{
            margin: 30px 0 0px 0;
            font-weight: 700;
            font-size: 30px;
            color: #32cd32;
        }
        main h2{
            margin: 30px 0 20px 0;
            font-weight: 500;
            font-size: 24px;
            color: #32cd32;
        }

        form{
            width: min(90%, 800px);
            text-align: left;

        }

        form label{
            width: 100%;
            display: block;
            font-weight: 700;
            margin-bottom: 5px;
        }

        form input{
            margin-bottom: 15px;
            height: 40px;
            padding-left: 8px;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 16px;
        }

        form #number{
            width: 30%;
        }

        form #message{
            width: 100%;
        }

        form button{
            margin: 0 auto;
            width: 100%;
            background-color: #32cd32;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            color: #fff;
            font-weight: 700;
            letter-spacing: 2px;
            cursor: pointer;
        }

        .link{
            margin-top: 50px;
        }

    </style>
</head>
<body>
    <?php

        $numero = @$_POST['number'];
        $message = @$_POST['message'];
        $space = '%20';
        $msgTratada = str_replace(" ",$space, $message);
        if(isset($_POST['number']) and isset($_POST['message'])){
            $link = header("Location:https://wa.me/".@$numero."?text=".@$msgTratada);
            $sendOk = 'Mensagem Enviada';
        };
        

    ?>
    <main>
        <h1>Gerador de link para WhatsApp:</h1>
        <h2>Gere link de mensagem para whatsapp para usar no seu site.</h2>
        <form action="#" method="POST" target="_blank">
        <label for="number">Numero a ser enviado:</label>
        <input type="number" name="number" id="number" placeholder="5511988888888" required>
        <label for="message">Mensagem:</label>
        <input type="text" name="message" id="message" placeholder="Texto da mensagem a ser enviado" required> 
        <button>Enviar</button>
        </form>
    </main>
   
</body>
</html>