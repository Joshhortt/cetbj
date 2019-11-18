    <?php
        include_once 'header.php';
    ?>


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
        echo "Conexão feita com sucesso! "; // Se a conexão é feita com sucesso então...

    ?>


        <?php

    # 2. Criar cada uma das Variaveis dos inputs
         $nomeForm = mysqli_real_escape_string($conn, $_REQUEST['nomeForm']);
         $morada = mysqli_real_escape_string($conn, $_REQUEST['morada']);
         $codPostal = mysqli_real_escape_string($conn, $_REQUEST['codPostal']);
         $local = mysqli_real_escape_string($conn, $_REQUEST['local']);
         $numForm = mysqli_real_escape_string($conn, $_REQUEST['numForm']);
         $emailForm = mysqli_real_escape_string($conn, $_REQUEST['emailForm']);
         $telForm = mysqli_real_escape_string($conn, $_REQUEST['telForm']);
         $genero = mysqli_real_escape_string($conn, $_REQUEST['genero']);
         $dataNasc = mysqli_real_escape_string($conn, $_REQUEST['dataNasc']);

    # 3. Dados inseridos no formulario
        $sql = "INSERT INTO formandos
                (nomeForm, morada, codPostal, local, numForm, emailForm, telForm, genero, dataNasc)
    
                VALUES
                ('$nomeForm', '$morada', '$codPostal', '$local', '$numForm', '$emailForm', '$telForm',  '$genero', '$dataNasc')";

    # 4. Se a conexão com a base de dados for gravada...então...Aparece a msg abaixo.
                if ($conn->query($sql) === TRUE) {
                    echo " Dados gravados com sucesso";

    # 5. Se a conexão com a base de dados não for gravada...então...Aparece outra msg abaixo.
                } else {
                    echo " Erro na gravação de dados" . $conn->error;
                }

        ?>


    <?php
    include "footer.php";
    ?>