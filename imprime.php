<html>
    <head></head>
    <body>
          
    
<?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "base_teste";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if (!$conn) {
             die("Falha na conexão!!! " . mysqli_connect_error());
                  
        }

        $sql = "SELECT id, nome, senha FROM usuarios";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
             
        	 ?>

             <meta charset="utf-8">
             <h1>Usuarios cadastrados</h1>

             ?>
             </tr><?php
             while($linha = $result->fetch_assoc()) {
                 ?><tr>
                     <br><br>
                     <?php echo "Identificador:     " . $linha["id"] . "    Nome:     " .$linha["nome"]."    Senha:     " .$linha["senha"]?>
                     
                   </tr>
                <?php
             }
        } else {
             echo "Nenhum registro encontrado";
        }

        mysqli_close($conn);
        ?>
            </table>
            <br><br><br><br><br>
            <a href="index.php">Voltar</a>
            </form>
</body>
</html>