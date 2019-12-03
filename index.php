<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Livros</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <?php
    // session_start();

    // if (isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
    //     echo 'Area restrita';
    // } else {
    //     header("Location: login.php");
    // }

    require './DbFluxo.php';
    ?>

    <form name="cadLivro" action="" method="post">
        <div class="campos">
            <label for="livro">Livro: </label>
            <input type="text" id="livro" name="livro" placeholder="Digite o título do seu livro">
        </div>
        <div class="campos">
            <label for="autor">Autor: </label>
            <input type="text" id="autor" name="autor" placeholder="Digite o Autor">
        </div>
        <div class="campos">
            <label for="editora">Editora: </label>
            <input type="text" id="editora" name="editora" placeholder="Digite a editora">
        </div>

        <input type="submit" value="Cadastrar" name="SendCadUser" />
    </form><br>

    <table>
        <tr>
            <th>Livro</th>
            <th>Autor</th>
            <th>Editora</th>
        </tr>

        <?php while ($row_user = $resultado_livro->fetch(PDO::FETCH_ASSOC)) : ?>
            <tr>
                <td><?= $row_user['livro']; ?></td>
                <td><?= $row_user['autor']; ?></td>
                <td><?= $row_user['editora']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>

</body>

</html>