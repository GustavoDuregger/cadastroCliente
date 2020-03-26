<?php
    header("Content-type: text/html; charset=ISO-8859-1");
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "clientes";

    $nome = $_POST['nome'];
    $anoNasc = $_POST['anoNasc'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $uf = $_POST['uf'];

    //Criar conexão
    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
    mysqli_set_charset($conexao, 'utf8');
    if(!conexao){
        die("Problema com a conexão: ".mysqli_connect_error());
    }

    //Criar consulta
    echo $consulta = "INSERT INTO clientes(nome, anoNasc, email, telefone, uf) 
                    VALUES ('$nome', '$anoNasc', '$email', '$telefone', '$uf')";

    //Executar a consulta
    $resultado = mysqli_query($conexao,$consulta) or die ("Falha na execução: ".mysqli_connect_error());
    echo "<h2>Cliente cadastrado</h2>";
?>