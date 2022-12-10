<?php
session_start();

if (!isset($_SESSION['nome'])) {
    echo "<meta http-equiv='refresh' content='0;url=./'>";
}
?>

<!--Login screen with boostrap -->
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

            
                <h3 class="text-center title">Manual do <br>Estudante</h2>
                    <div class="btn__group">
                        <a href="./download/downloadfile.php?file=Manual.pdf" class="btn btn-primary btn-light btn-lg">Download</a>
                    </div>
        </div>
        
    </div>
    </div>

    </div>
</body>

</html>