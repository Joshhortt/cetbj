<?php
	include_once 'header.php';
?>


<!-- Titulo em html -->
<h1 class="lista">Lista de Formandos</h1><br><br>


<?php

    # 1. CONECTAR COM O SERVIDOR
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "cetbj";

        // Cria a conexão
        $conn = new mysqli($servername, $username, $password, $database);

        // Verifica conexão
        if ($conn->connect_error) {
            die("Conexão falhou!: " . $conn->connect_error);
        }

        echo "<h3 style='color: green;'>Conexão feita com sucesso!</h3>"; // Se a conexão é feita com sucesso então...
        
        echo "<br>";

        echo "<br>";

        echo "<hr>";
    # 2. Seleciona os Dados da Base de Dados mySQL, onde a tabela está criada.
     
        $sql = "SELECT * FROM formandos";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
               // Dados de saída de cada linha
                while($row = $result->fetch_assoc()) {
                    echo "idForm : " . $row["idForm"]
                    . " - Nome : " . $row["nomeForm"]
                    . " - Morada : " . $row["morada"]
                    . " - Codigo Postal : " . $row["codPostal"]
                    . " - Local : " . $row["local"]
                    . " - Numero : " . $row["nomeForm"]
                    . " - E-mail : " . $row["emailForm"]
                    . " - Telefone : " . $row["telForm"]
                    . " - Genero : " . $row["genero"]
                    . " - Data de Nascimento : " . $row["dataNasc"] ."<br>"."<hr>";
                }
            } else {
                echo "0 results";
            }
    # 3.  Fecha a conexão à Base de dados mySQL
            $conn->close();

?>
    


<?php
include "footer.php";
?>
