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