
<?php
 require_once ('config.php');
      //$conexao=$banco->query()

      //if (!$conexao) {
            //die("Falha de Conexão: " . mysqli_connect_error());
     // }
       
     // echo "Sucesso Conexão!!!";
//$Id_usuario = $_POST['Id_usuario'];
$Nome = $_POST['nome']; 
$Sobrenome = $_POST['Sobrenome']; 
$Email = $_POST ['Email']; 
$SenhaP = $_POST['SenhaP']; 
$Tipo_Pagamento = $_POST['tpPagamento'];
$Planos = $_POST['Planos'];



//mysqli_query($conexao, "SET NAMES 'utf8'");
//mysqli_query($conexao,'SET character_set_connection=utf8');
//mysqli_query($conexao,'SET character_set_client=utf8');
//mysqli_query($conexao,'SET character_set_results=utf8');
	
$banco->query("INSERT INTO conta_premium(nome,Sobrenome,Email,SenhaP,tpPagamento,Planos)
VALUES('$Nome','$Sobrenome','$Email','$SenhaP','$Tipo_Pagamento','$Planos')") or die($banco->error);
if ($banco){ 
      echo "!!";
} else {
      echo "Erro ao cadastrar!";
}
//mysqli_close($conexao);
//(mysqli_query($conexao, $))
?>
<html>
<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
          #hlogin{
    font-family: Knewave;
    font-size: 45pt;
    text-align:center;
    color: #fff;
          }
            #voltar {
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;
    background-color: rgb(218, 113, 52);
    box-shadow:1px 1px 3px rgb(17, 17, 17); ;
    border-radius: 0.5em;
    width: 150px;
    height: 67px ;
    margin-top:-300px;
    font-size:15pt;
    color: white;
    border: none;
    text-shadow:2px 2px 2px rgba(43, 42, 42, 0.5); 
    cursor: pointer;
    margin-top:5px;}
    #voltar:hover{
        background-color: rgb(99, 97, 96);
        color:white;
            }
          
          </style>
      <body>
            <h1> Premium cadastrado com sucesso!! </h1>
<form action="index.php" method="POST">
      <center>
<button id="voltar" action="index.php">Voltar á tela inicial</button>
      </center>
     <center> <h3 id = "hlogin"> Faça seu login! </h3> </center>
</form>
</html>