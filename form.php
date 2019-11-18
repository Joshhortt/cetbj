
    <?php
        include "header.php";
    ?>

     <!-- Formulario com botão de gravar na Base de dados -->
        <form action="insert.php" method="post">
        <h2>Formulário de inserção do Formando</h2>
            Nome:
            <input type="text" name="nomeForm" placeholder="nome" required> *<br><br>
            Morada:
            <input type="text" name="morada" placeholder="morada"><br><br>
            C.P:
            <input type="text" name="codPostal" placeholder="codigo postal" required>*<br><br>
            Localidade:
            <input type="text" name="local" placeholder="localidade" required>*<br><br>
            Numero:
            <input type="number" name="numForm" value="9" placeholder="nome" required>*<br><br>
            E-mail:
            <input type="text" name="emailForm" placeholder="email">*<br><br>
            Telefone:
            <input type="text" name="telForm" value="911815877" placeholder="telefone" required>*<br><br>
            Genero: <br>
            <label><input type="radio" name="genero" value="M">Masculino</label>*<br>
            <label><input type="radio" name="genero" value="F">Feminino</label>*<br><br>
            Data Nascimento:
            <input type="text" name="dataNasc" value="1971-07-21" placeholder="data nascimento"><br><br>
            <input type="submit" value="Gravar"></input><br><br>
        </form>
        
       <!-- link que faz voltar a página inicial-->
        <a href="index.php">Voltar a pagina Inicial</a><br><br>

        <hr>

    <?php
      include "footer.php";               
    ?>
