
<?php
// Verifica se o formulário foi enviado
if ($_POST) {
    // Recupera os valores do formulário
    $nome = $_POST["nome"] ?? NULL;
    $email = $_POST["email"] ?? NULL;
    $idade = $_POST["idade"] ?? NULL;
    $hobbies = $_POST["hobbies"] ?? NULL;

    //Verifica a qtd de caracteres
    if (strlen($nome) < 6) {
        echo "<script>window.alert('O nome precisa ter no mínimo 6 caracteres')</script>";
        echo "<script>location.href='/desafio-unialfa-nivel02-ex5/'</script>";
        exit;
    }
    //verifica se a idade é menor que 18
    if ($idade <= 18) {
        echo "<script>window.alert('A idade precisa ser maior que 18 anos')</script>";
        echo "<script>location.href='/desafio-unialfa-nivel02-ex5/'</script>";
        exit;
    }
    //verifica se todos os campos foram preenchidos
    if (empty($email) || empty($hobbies) || empty($nome) || empty($idade)) {
        echo "<script>window.alert('Dados Incompletos!')</script>";
        echo "<script>location.href='/desafio-unialfa-nivel02-ex5/'</script>";
    } else {
        echo "<h1>Lista de Dados</h1>";
        echo "<h3>Nome: $nome</h3>";
        echo "<h3>Email: $email</h3>";
        echo "<h3>Idade: $idade anos</h3>";
        echo "<h3>Hobbies: $hobbies</h3>";
    }
}
?>