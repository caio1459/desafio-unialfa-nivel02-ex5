<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desafio 05</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <?php 
        if ($_POST) {
            $nome = $_POST["nome"] ?? NULL;
            $idade = $_POST["idade"] ?? NULL;
            $email = $_POST["email"] ?? NULL;
            $hobbies = $_POST["hobbies"] ?? NULL;

            if(empty($nome) || empty($idade) || empty($email) || empty($hobbies)){
                echo "<script>window.alert('[ERRO!] A campos que precisam ser preenchidos!')</script>";
            }
            if (strlen($nome)) {
                echo "<script>window.alert('[ERRO!] preencha o seu nome completo!')</script>";
            }
            if ($idade < 0) {
                echo "<script>window.alert('[ERRO!] Idade invalida!')</script>";
            }
            if ($idade < 18) {
                echo "<script>window.alert('[ERRO!] Não e permitido o cadastro de menores de idade!')</script>";
            }
            // echo "<script>location.href='listar.php'</script>";
            // exit;
        }
    ?>
    <div class="container">
        <form class="row g-3 mt-5" method="post" action="listar.php">
            <div class="col-md-6">
                <label for="idNome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" id="idNome">
            </div>
            <div class="col-md-6">
                <label for="idIdade" class="form-label">Idade</label>
                <input type="number" class="form-control" name="idade" id="idIdade">
            </div>
            <div class="col-12">
                <label for="idEmail" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="idEmail">
            </div>
            <div class="mb-3">
                <label for="idHobbies" class="form-label">Hobbies</label>
                <textarea class="form-control" id="idHobbies" name="hobbies" rows="3"></textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>