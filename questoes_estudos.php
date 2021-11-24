
<?php
require_once('config.php');

$codPerguntas = $banco->query('SELECT enunciado_questao_est FROM perguntas_estudo limit 1');
$codRespostas = $banco->query('SELECT enunciado_resp_est, valor FROM respostas_estudo') ;

$materia = ('SELECT Nome_materia from materia where $materia = biologia');

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Questões</title>
        <link rel="icon" type="image/x-icon" href="imagens/logo1.png" />

    </head>
    <body>
        
        <div id="container-a">
            <div>
            <?php
                    if($codPerguntas){
                      while($pergunta=$codPerguntas->fetch_object()){
                        echo "<div class=\"enunciado_per\">",$pergunta->enunciado_questao_est,"</div>";
                        while($resposta=$codRespostas->fetch_object()){
                            echo"<div class=\"enunciado_resp\">",$resposta->enunciado_resp_est ,"</div> <br>";
                        }
                      }
                    //   echo "</div>";
                    }
                    else{
                      echo "<br>";
                      echo ("Nenhum registro!!!");
                    }
        ?> 
<div id="container-b"></div>
        <div id="btnvoltar"><a href="index.php">Voltar</a> </div>
        
        <style> 
            body{
                background-color: rgb(100, 181, 212);
            }
            #container-a{
                border: solid snow;
                height:300px ;
                width:800px ;
                background-color: skyblue;
                border-radius: 3em;
                margin-top: 50px;
                margin-left: 340px;
                box-shadow:4px 4px 4px rgb(95, 94, 94);
                margin-left:250px;
                margin-top:50px
            }
            #container-b{
                height:550px ;
                width:800px ;
                border-radius: 3em;
                margin-top:20px;
                margin-left:340px;
                background-color: snow;
                border: solid skyblue;
                box-shadow:4px 4px 4px rgb(95, 94, 94);
                margin-left:1px;
                margin-top:150px;
            }
            #btnvoltar{
                height:40px ;
                width:70px;
                background-color:tomato;
                margin-top:-900px;
                margin-left:50px;
                border-radius: 0.5em;
                border: solid snow;
                box-shadow:4px 4px 4px rgb(95, 94, 94) ;
                text-decoration: none;
                margin-top:-52em;
                margin-left:-200px;
               

            }
            a{
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;
                font-size:1.4em;
                color: snow;
                margin-left: 6px;
               margin-top: 6px;
  
            }
            .enunciado_resp{
                font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;

            }
        </style>
       
    </body>
</html>












































</html>
