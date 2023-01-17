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