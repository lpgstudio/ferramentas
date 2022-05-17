<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <title>Script automatico php</title>
</head>
<body>
    <div class="text">
        <h1>Galeria Automatica com PHP</h1>
        <p>Para adicionar ou remover as fotos na galeria, basta adicionar ou remover elas da pasta "image", o script em php irá fazer todo o resto.</p>
    </div>
<div class="swiper-container mySwiper">
    <div class="swiper-wrapper">
        <?php
            include "gallery-script.php"; // onde irá entrar o código gerado pelo php
        ?>
    </div>
    <div class="swiper-pagination"></div>
</div>

    <script src="js/swiper-bundle.min.js"></script>

    <script type="text/javascript">
        
        // Opções do slide
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 2,
                slideShadows: true,
            },
            
            //pagination: { el: ".swiper-pagination" }, //add bolinhas
            loop: true, // deixa o slide infinito, repetindo as fotos
        });
    </script>
</body>
</html>