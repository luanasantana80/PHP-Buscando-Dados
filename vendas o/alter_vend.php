<?php
    if(session_status()!==PHP_SESSION_ACTIVE){
        session_start();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Especialidade Médicas</title>
    </head>
    <body>
        <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
        <form method="POST" action="">
        <p><center><h1> Especialidade Médicas </center></h1>
        <table border="1" width="100%">
            <?php
                include('conexao.php');
                $sql="Select * from especialidade order by descricao";
                $resu=mysqli_query($con,$sql) or die(mysqli_connect_error());
                while ($reg=mysqli_fetch_array($resu)){
                    echo "<tr><td>" . $reg['descricao'] . "</td>";
                    echo "<td><a href='edit_esp.php?id=". $reg['id'] . "'> Editar</a></td>";
                    echo "<td><a href='del_esp.php?id=". $reg['id'] . "'> Excluir</a></td></tr>";
                }
            ?>
            </table></form>
            <?php
                mysqli_close($con);
            ?>
    </body>
</html>