

<!DOCTYPE html>
<html lang="pt-bt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="icon" href="img/icon.png">
        <title>IMC </title> 
    </head>

    <body>

        <div class=" pt-1 container-fluid  d-md-inline-flex"> 

            <div class="principal row align-items-center  "> 

                <h2>O que é IMC? </h2>

                <div class="col-8 text-center paragrafo">

                    <p> O IMC (Índice de Massa Corporal) é um padrão internacional de cálculo da obesidade de um indivíduo adotado pela OMS (Organização Mundial da Saúde). O método é a forma mais fácil de saber se uma pessoa está com o peso ideal ou não.</p>
                    <p>A altura e o peso do indivíduo são os dois fatores levados em conta no cálculo do IMC. Para calcularmos o índice, basta dividirmos o peso de uma pessoa pela sua altura ao quadrado.</p>

                </div>

            </div>  

            <div class="row"> 

                <h2>Quer saber seu IMC ? </h2>

                <div class="col-12">
                    
                    <form action="" method="GET">

                        <input  type="number" name="peso" placeholder="Digite seu peso: "><br>
                        <input type="text" name="altura" placeholder="Digite sua altura: " ><br><br>
                        <input type="submit" value="enviar">

                    </form> 

                </div> 

                <div class=" paragrafo col-12">

                    <?php
                        if(isset( $_GET['peso'])) {
                            calcula();
                        }
                    ?>

                </div> 

            </div>     
            
        </div>

        

        <div class="row  d-flex justify-content-between">

            <div class=" col-7  ">

                <img src="img/tabela-imc.png" class="img-fluid rounded-2 " width="500px"   alt="Tabela IMC" >

            </div>

            <div class="col-5 pt-3 ">
                <h3>Links para ter uma vida mais saudável</h3>
               
                <a href="">Entenda melhor sobre IMC</a><br>
                <a href="">Exercícios para perder peso</a><br>
               
                <a href="">Melhores alimentos pré treino</a><br>
                <a href="">Melhores alimentos pós treino</a><br>
                <a href="">Ebook de alimentação saudável</a><br>
                <a href="">Entenda como ganhar massa magra</a><br>
                <a href="">Veja o mal que a gordura visceral faz</a><br>
                <a href="">Veja o mal que a gordura subcutanêa faz</a><br>
                <a href="">Entenda como emagrecer de forma saudável</a><br>
            </div>               

           

        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
            
    </body>

</html>

<?php



function calcula(){

    $peso = $_GET['peso'];
    $altura = $_GET['altura'];
    $imc =  $peso / ($altura * $altura);

 
    if($imc <= 18.5){

        echo"Seu IMC é de: $imc. Você está abaixo do peso! COMA MAIS!";

    }elseif($imc <= 24.9){

        echo"Seu IMC é de: $imc. Você está com o peso ideal. PARABÉNS!";

    }elseif($imc <= 29.9){

        echo"Seu IMC é de: $imc. Você está levemente acima do peso. CUIDADO!";

    }elseif($imc <= 34.9){

        echo"Seu IMC é de: $imc. Você está com obesidade grau 1. REGULE SUA ALIMENTAÇÂO!";

    }elseif($imc <= 39.9){

        echo"Seu IMC é de: $imc. Você está com obesidade grau 2 (severa). REGULE SUA ALIMENTAÇÂO";

    }else{

        echo"Seu IMC é de: $imc. Você está com obesidade grau 3 (mórbida). REGULE SUA ALIMENTAÇÂO";

    }


}
   




//echo phpinfo();

//$peso = 65;
//$altura = 1.65;
//$imc = $peso / ($altura * $altura);
//echo"Seu IMC é de: $imc";

//$peso = 65;
//$altura = 1.66  ;
//$imc = $peso / ($altura * $altura);



//if($imc < 18 ) {

    //echo"Seu IMC é de: $imc. Você está com IMC baixo. COMA MAIS!";

//}elseif($imc <= 23) {

    //echo"Seu IMC é de: $imc. Você está com IMC na média.";

//}else{
    //echo"Seu IMC é de: $imc.  Você está com IMC alto. PARE DE COMER!";

//}

?> 


