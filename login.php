<?php
session_start();
if (isset($_POST['email']) && empty($_POST['email']) == false) {
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
}
?>

<h1>Pagina de login</h1>

<form action="" method="post">
    <label for="email"></label>
    <input type="email" id="email" name="email">
    <label for="senha"></label>
    <input type="password" id="senha" name="senha">
    <input type="submit" value="Entrar">
</form>