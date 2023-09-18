<?php
$_con = mysqli_connect('127.0.0.1','root','','dssistemas_db');
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $numero = $_POST["numero"];
    $genero = $_POST["genero"];
    $data = $_POST["data"];
    $cidade = $_POST["cidade"];
    $senha = $_POST["senha"];
    
    $sql = "INSERT INTO funcionario ( nome_func, cpf_func, datanasc_func, email_func, celular_func, genero_func, endereco_func, senha_func ) values ( '$nome', '$cpf', '$data', '$email', '$numero', '$genero', '$cidade', '$senha')";


    if ($_con->query($sql) === TRUE) {
        echo"Dados inseridos com sucesso!";
    } else {
        echo"Erro na inserção: " . $_con->error;
    }

    $_con->close();
}
else{
    echo "Erro Dados";
}
?>