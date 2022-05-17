<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title>Gerador de Link Para WhatsApp</title>
</head>
<body>
    <?php
        $numero = @preg_replace('/[-\@\.\;\" "]+/', '', $_POST['number']);
        $message = @$_POST['message'];
        
        if(strlen($numero) >= 11){
            if(strlen($numero) < 13){
                $numero = '55'.$numero;
            }else if(strlen($numero) < 11){
                $errorMessage = '<p class="erro">O numero precisa conter o Código do País e o DDD</p>';
            };
            function tratar($message){
                global $message;
    
                $caracter = ['!', '*', "'", "(", ")", ";", ":", "@", "&", "=", "+", "$", ",", "/", "?", "%", "#", "[", "]"," "];
                $replacements = ['%21', '%2A', '%27', '%28', '%29', '%3B', '%3A', '%40', '%26', '%3D', '%2B', '%24', '%2C', '%2F', '%3F', '%25', '%23', '%5B', '%5D','%20'];
                
                return str_replace($replacements, $caracter, urlencode($message));
            };   
    
            if(isset($_POST['number']) and isset($_POST['message'])){
                $link = '<textarea type="text" id="txtLink" onclick="myFunction()">https://wa.me/'.@$numero."?text=".@tratar($message).'</textarea>';
            }else{
                $link = "";
            };
        }else {
            $link = '<p>O Numero do telefone precisa ter o Código do País e o DDD.</p>';
        }
    ?>
    <header>
        <div class="container">
            <h1>Gerador de link para WhatsApp</h1>
            <div class="toggle" onClick="toggleMenu()">
                <i class="fas fa-bars"></i>
            </div>
            <ul class="menu ">
                <li><a href="https://lpcode.com.br" target="_blank">Site LPCode</a></li>
                <li><a href="https://mercado.lpcode.com.br" target="_blank">App Lista de Mercado</a></li>
                <li><a href="https://tarefas.lpcode.com.br" target="_blank">App Lista de Tarefas</a></li>
                <li><a href="https://appfinancas.lpcode.com.br" target="_blank">App Controle de Gastos</a></li>
                <li><a href="https://calculadora-imc.lpcode.com.br" target="_blank">App Calculadora IMC</a></li>
                <li><a href="https://jokenpo.lpcode.com.br" target="_blank">Jogo Jokenpo</a></li>
            </ul>
        </div>
    </header>
    <main>
        
        <h2>Gere link de mensagem para whatsapp para usar no seu site.</h2>
        <form action="#" method="POST">
        <label for="number">Numero a ser enviado:</label>
        <input type="number" name="number" id="number" placeholder="5511988888888" required>
        <?= @$errorMessage?>
        <label for="message">Mensagem:</label>
        <textarea type="text" name="message" id="message" placeholder="Texto da mensagem a ser enviado." required></textarea> 
        <button>Gerar Link</button>
        </form>

        <div class="link">
            <h3>Esse é o seu link:</h3>
            <?php echo @$link ?>
        </div>
    </main>
    <footer>
        <p>Desenvolvido por <a href="https://www.lpcode.com.br" target="_blank">LPCode</a></p>
    </footer>

    <script>
        function myFunction() {
            var copyText = document.getElementById("txtLink");

            copyText.select();
            copyText.setSelectionRange(0, 99999);

            navigator.clipboard.writeText(copyText.value);
            alert("Link Copiado: " + copyText.value);
        }

        function toggleMenu(){
            var toggle = document.querySelector('.menu');
            toggle.classList.toggle('active')
        }
    </script>
</body>
</html>