<?php
    $conn = mysqli_connect("localhost", "root", "", "loja_fullstackphp");
 
    if (!$conn){
        die ("Falha na conexão com o BD " . mysqli_connect_errno());
    }else{
        //echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL.";
    }
    
   // mysqli_close($conn);
?> 
