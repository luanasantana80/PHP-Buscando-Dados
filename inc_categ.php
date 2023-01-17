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