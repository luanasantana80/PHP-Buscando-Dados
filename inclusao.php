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

<?php
    $nome=$_POST['produto'];
    $preco=$_POST['preco'];
    $qtd=$_POST['quantidade'];
    $unid=$_POST['medida'];
    include('conexao.php');
    $query="INSERT INTO produtos(nome,preco,qtd_estoque,unidade_medida) VALUES ('$nome','$preco','$qtd','$unid')";
    $resu=mysqli_query($con,$query);
    if(mysqli_insert_id($con)){
        print "<BR> Inclusão realizada com sucesso!!";

    }

    mysqli_close($con);
?>

<?php
    $qnt=$_POST['quant_vendida'];
    include('conexao.php');
    $query="INSERT INTO itens_vendas(quant_vendida) VALUES ('$qnt')";
    $resu=mysqli_query($con,$query);
    if(mysqli_insert_id($con)){
        print "<BR> Inclusão realizada com sucesso!!";

    }

    mysqli_close($con);
?>

<?php
    $nome=$_POST['descricao'];
    include('conexao.php');
    $query="INSERT INTO categoria(descricao) VALUES ('$nome')";
    $resu=mysqli_query($con,$query);
    if(mysqli_insert_id($con)){
        print "<BR> Inclusão realizada com sucesso!!";

    }

    mysqli_close($con);
?>