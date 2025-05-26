<?php 
    require_once("conexao.class.php");
    
     $conecta = new Conexao();

     if($conecta->getInstance()){
         echo  "Conexão Estabelecida!!!";
     }
     else{
         echo "Tem parada errada aí irmão";
     }
?>
