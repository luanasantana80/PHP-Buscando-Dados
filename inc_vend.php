<?php
    $nome=$_POST['data'];
    $preco=$_POST['prazo'];
    $qtd=$_POST['cond'];
    include('conexao.php');
    $query="INSERT INTO vendas(date,prazo_entrega,cond_pagto) VALUES ('$date','$prazo','$cond')";
    $resu=mysqli_query($con,$query);
    if(mysqli_insert_id($con)){
        print "<BR> Inclusão realizada com sucesso!!";

    }

    mysqli_close($con);
?>