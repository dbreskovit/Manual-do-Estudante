

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

        <div class="circle"></div>
        <div class="col-md-4 offset-md-4 form-div login">

            <form method="POST">
                <h1 class="text-center">RECUPERAR</h1>
                <h1 class="text-center">SENHA</h1>
                <h3 class="text-center">Informe seu CPF</h2>

                    <div class="form__group">
                        <div class="form__group field">
                            <input type="CPF" class="form__field" placeholder="CPF" name="CPF" id='CPF' autocomplete="off" required />
                            <label for="CPF" class="form__label">CPF</label>
                        </div>
                        <div class="btn__group">
                            <button type="submit" name="submit" class="btn btn-primary btn-light btn-lg">Verificar</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>

    </div>
</body>

</html>

<?php 

if(isset($_POST['submit'])){

    session_start();
    include 'php/connect.php';
    $cpf = intval($_POST['CPF']);

    $sql = "SELECT * FROM users WHERE cpf = $cpf";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if($row['cpf'] == $cpf){
        $_SESSION['cpf'] = $row['cpf'];
        header("Location: reset.php");
    }else{
        echo "<script>alert('CPF não encontrado!')</script>";
    }
}