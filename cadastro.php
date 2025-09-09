?php

include '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$nome = $_POST['name'];
$senha = $_POST['senha'];


$sql = " INSERT INTO usuarios (senha, nome) VALUE ('$nome','$senha')";

if ($conn->query($sql) === true) {
echo "Novo registro criado com sucesso.";
} else {
echo "Erro " . $sql . '<br>' . $conn->error;
}
$conn->close();

header("Location: public.php");
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header>
        <h1>Mario Odontologias</h1>
    </header>
    <main>

        <div class="card">

            <form method="POST" action="create_autores.php">

                <label for="name">Nome:</label>
                <input type="text" name="name" required>

                <label for="senha">Senha:</label>
                <input type="password" name="senha" required>



                <input type="submit" value="Cadastrar-se">

            </form>
        </div>
    </main>



</body>

</html>