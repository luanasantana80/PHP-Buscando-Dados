<?php
    session_start();
    include_once("conexao.php");
    $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
    $result="SELECT * FROM especialidade WHERE id='$id'";
    $resultado = mysqli_query($con,$result);
    $row = mysqli_fetch_array($resultado);
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="utf-8">
            <title> CRUD - EDITAR </title>
        </head>
        <body>
            <h1>Alteração - Especialidade</h1>
            <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
            ?>
            <form method="POST" action="proc_edit_esp.php">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                <label>Especialidade</label>
                <p><input type="text" name="nome" value="<?php echo $row['descricao']; ?>"><br><br>
                
                <input type="submit" value="SALVAR">
                
            </form>
        </body>
</html>