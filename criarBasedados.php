       <?php

         # 1. CONECTAR COM O SERVIDOR
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "students";

           // Cria a conexão
            $conn = new mysqli($servername, $username, $password, $database);

           // Verifica conexão
            if ($conn->connect_error) {
                die("Conexão falhou!: " . $conn->connect_error);
            }
            echo "Conexão feita com sucesso!";

           // Create database
            $sql = "CREATE DATABASE students";
            if ($conn->query($sql) === TRUE) {
                echo "Database created successfully";
            } else {
                echo "Erro ao criar Base de dados: " . $conn->error;
            }

           // Cria a Tabela
            $sql = "CREATE TABLE users  (
                 user_id INT(11) VARCHAR(256) AUTO_INCREMENT PRIMARY KEY,
                 user_nome INT(11) VARCHAR(256) PRIMARY KEY NOT NULL,
                 user_apelido INT(11) VARCHAR(256) PRIMARY KEY NOT NULL,
                 user_email INT(11) VARCHAR(256) PRIMARY KEY NOT NULL,
                 user_uid INT(11) VARCHAR(256) PRIMARY KEY NOT NULL,
                 user_pwd INT(11) VARCHAR(256) PRIMARY KEY NOT NULL,
            )";

           // Verifica conexão
            if ($conn->query($sql) === TRUE) {
                echo "Tabela criada com sucesso!";
            } else {
                echo "Erro ao criar Tabela! " . $conn->error;
            }

           // Termina a ligaçao ao servidor SQL
            $conn->close();

            ?>