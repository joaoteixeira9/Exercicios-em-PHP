<?php
// Obtém os dados do formulário
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$gmail = $_POST['gmail'];
$senha = $_POST['senha'];

$servername = 'localhost';
$username = 'root'; // Nome de usuário padrão do XAMPP
$password = ''; // Senha padrão do XAMPP (geralmente vazia)
$database = 'TESTE';

// Cria a conexão
$dbc = new mysqli($servername, $username, $password, $database);
if (!$dbc) {
    die('Erro ao conectar ao servidor MYSQL: ' . mysqli_connect_error());
}
echo 'Conectado ao servidor MYSQL com sucesso<br>';

// Sanitiza e escapa os valores de entrada
$nome = mysqli_real_escape_string($dbc, $nome);
$sobrenome = mysqli_real_escape_string($dbc, $sobrenome);
$gmail = mysqli_real_escape_string($dbc, $gmail);
$senha = mysqli_real_escape_string($dbc, $senha);

// Prepara a consulta SQL
$query = "INSERT INTO info_teste (nome, sobrenome, gmail, senha) VALUES ('$nome', '$sobrenome', '$gmail', '$senha')";

// Executa a consulta
$resultado = mysqli_query($dbc, $query);
if ($resultado) {
    echo 'Registro adicionado com sucesso';
} else {
    die('Erro ao executar a consulta: ' . mysqli_error($dbc));
}

// Fecha a conexão
mysqli_close($dbc);
?>
