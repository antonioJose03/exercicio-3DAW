<?php

$matricula="";
$nome="";   
$funcao="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $matricula = $_POST["matricula"];
    $nome = $_POST["nome"];
    //$funcao=$_POST["funcao"];
}
    
   // $funcao = $_POST["funcao"];
 
?>
<!doctype html>
<html>
    <head>
        <title> ex02</title>
    </head>
    <style>
    table, th, td {
    border:1px solid black;
    border-collapse: collapse;
    text-align: center;
    padding: 15px;
    }
</style>
    <body>

        <form action="ex03.php" method="POST">
            MAtricula:
            <input type="text" name="matricula"><br>
            Nome:
            <input type="text" name="nome">
            <br>
            <br>
            <input type="submit" value="enviar">

        </form>
        <br>
       
       <?php if($_SERVER["REQUEST_METHOD"] == "POST")

       echo "matricula $matricula";
        
        echo "nome   $nome ";
   
        ?>  
                  
    </body>
</html>