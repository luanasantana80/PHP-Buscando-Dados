<?php
    session_start();
    include_once("conexão.php");
    $id=filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
    $result="SELECT * FROM especilidade WHERE id='$id'";
    $resultado=mysqli_query($con, $result);
    $row=mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>CRUD - EXLUIR</title>
    </head>
    <body>
        <h1>EXCLUIR ESPECIALIDADE</h1>
        <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
        <form method="POST" action="proc_del_espe.php">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <label>Especialidade: </label>
            <input type="text" name="nome" value="<?php echo $row['descricao']; ?>"><br><br>
            <input type="submit" value="CONFIRMAR EXCLUSÃO">
        </form>
    </body>
</html>