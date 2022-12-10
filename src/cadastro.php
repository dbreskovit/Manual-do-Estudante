<?php

session_start();

if (!isset($_SESSION['user'])) {
    echo "<meta http-equiv='refresh' content='0;url=./'>";
} else {

    if (isset($_POST["submit"])) {

        include "php/connect.php";

        $cpf = $_POST["cpf"];
        $nome = $_POST["nome"];
        $matricula = $_POST["matricula"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $sql = "INSERT INTO users (cpf, nome, matricula, email, senha) VALUES ('$cpf', '$nome', '$matricula', '$email', '$senha')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<script>alert('Usuário cadastrado com sucesso!')</script>";
            echo "<script>window.open('index.php', '_self')</script>";
        } else {
            echo "<script>alert('Erro ao cadastrar usuário!')</script>";
            echo "<script>window.open('cadastro.php', '_self')</script>";
        }

    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,regular,500,600,700,800,300italic,italic,500italic,600italic,700italic,800italic" rel="stylesheet" />

</head>

<body>
    <div class="container">

        <div class="col-md-4 offset-md-4 form-div login">

            <form method="POST">
                <h1 class="text-center">CADASTRAR</h1>
                <h3 class="text-center">Manual do Estudante</h2>

                    <div class="form__group">
                        <div class="form__group field">
                            <input required type="text" class="form__field" placeholder="CPF" name="cpf" id='cpf' autocomplete="off" required />
                            <label for="user" class="form__label">CPF</label>
                        </div>
                        <div class="form__group field">
                            <input required type="text" class="form__field" placeholder="Nome" name="nome" id='nome' autocomplete="off" required />
                            <label for="user" class="form__label">Nome</label>
                        </div>
                        <div class="form__group field">
                            <input required type="text" class="form__field" placeholder="Matricula" name="matricula" id='matricula' autocomplete="off" required />
                            <label for="matricula" class="form__label">Matricula</label>
                        </div>
                        <div class="form__group field">
                            <input required type="email" class="form__field" placeholder="Email" name="email" id='email' autocomplete="off" required />
                            <label for="email" class="form__label">Email</label>
                        </div>
                        <div class="form__group field">
                            <input required type="password" class="form__field" placeholder="Senha" name="senha" id='senha' autocomplete="off" required />
                            <label for="password" class="form__label">Senha</label>
                        </div>
                        <div class="btn__group">
                            <button type="submit" name="submit" class="btn btn-primary btn-light btn-lg">Cadastrar Aluno</button>
                        </div>
                    </div>
            </form>

    </div>

    </div>
</body>

</html>