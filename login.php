<?php
 require_once "config.php";

         
 function is_logado(){
     if(empty($_SESSION['nome'])){
         return false;
     }else{
         return true;
     }
}
$Nome=$_POST['nome']?? null;
$SenhaP=$_POST['SenhaP']?? null;

if(is_null($Nome) || is_null($SenhaP)){
    echo "campo obrigatorio";
}else{ 
        $q="select nome,SenhaP from conta_premium where nome='$Nome' and SenhaP='$SenhaP' limit 1";
        $busca=$banco->query($q);            
        if(!$busca){
            //echo "<br><br><br>Falha ao acessar o banco!";
            echo "Falha ao acessar o banco de dados!!"; 
        }else{
            if($busca->num_rows == 1){
                $reg=$busca->fetch_object();
                        $_SESSION['nome']=$reg->nome;
                    $_SESSION['SenhaP']=$reg->SenhaP;
                //print_r($reg);
                    echo "<script>alert('Bem-vindo(a) $Nome!!');</script>";
                    echo "<script>window.location.href='index.php'</script>";
                    
            }else{
                echo "usuario nao encontrado";
            }
        }
    }                  
?>
