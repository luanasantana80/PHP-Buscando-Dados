<?php
    $nome=$_POST['vendedor'];
    $end=$_POST['ende_vend'];
    $cidade=$_POST['city_vend'];
    $estado=$_POST['est_vend'];
    $telefone=$_POST['tel_vend'];
    $porc_comissao=$_POST['comissao'];
    include('conexao.php');
    $query="INSERT INTO vendedor(nome,endereco,cidade,estado,telefone,porc_comissao) VALUES ('$nome','$end','$cidade','$estado','$telefone','$porc_comissao')";
    $resu=mysqli_query($con,$query);
    if(mysqli_insert_id($con)){
        print "<BR> Inclusão realizada com sucesso!!";

    }

    mysqli_close($con);
?>