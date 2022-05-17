<?php
$path = "image/"; //Caminho da pasta
$img = glob($path . "*.{jpg}", GLOB_BRACE); //Filtro para JPG

foreach($img as $arquivo){   
    
    //Script para colocar a foto no slide, esse trecho pode variar conforme a sua galeria.
echo "  <div class='swiper-slide'>
            <div class='testimonialBox'>
                <img class='quote' src='$arquivo' alt=''>
            </div>
        </div>
        ";
};
?>