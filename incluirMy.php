<?php
$ehPost=true;
$servidor="localhost";
$usuario="root";
$senha="";
$bancodedados="dawalunos";



if  ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nome = $_GET["nome"]; 
    $matricula= $_GET["matricula"];
    $id= $_GET["id"];
    $email= $_GET["email"];
    
    $conn = new mysqli($servidor, $usuario,$senha,$bancodedados);
    if($conn->connect_error)
    {
        die("FAlha!!");
    }
   $sql="INSERT INTO `alunos`(`id`, `nome`, `matricula`, `email`) VALUES ($id,'$nome','$matricula','$email')";
   $result=$conn->query($sql);
   echo "result: ". $result;
}
   else {
       $ehPost=false;
   }

    echo "aluno incluido";
?>