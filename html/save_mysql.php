<?php
$servername = "mysql";
$username = "root";
$password = "";
$dbname = "escola";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro de conexão com o banco de dados: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_aluno'])) {
$nome_aluno = $_POST['nome_aluno'];
$idade_aluno = $_POST['idade_aluno'];

$sql = "INSERT INTO alunos (nome, idade) VALUES ('$nome_aluno', '$idade_aluno')";

if ($conn->query($sql) === TRUE) {
echo "Dados do aluno foram salvos com sucesso.";
} else {
echo "Erro ao salvar dados do aluno: " . $conn->error;
}
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_professor'])) {
$nome_professor = $_POST['nome_professor'];
$disciplina = $_POST['disciplina'];

$sql = "INSERT INTO professores (nome, disciplina) VALUES ('$nome_professor',
'$disciplina')";

if ($conn->query($sql) === TRUE) {
echo "Dados do professor foram salvos com sucesso.";
} else {
echo "Erro ao salvar dados do professor: " . $conn->error;
}
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_curso'])) {
$nome_curso = $_POST['nome_curso'];
$duracao = $_POST['duracao'];

$sql = "INSERT INTO cursos (nome, duracao) VALUES ('$nome_curso', '$duracao')";

if ($conn->query($sql) === TRUE) {
echo "Dados do curso foram salvos com sucesso.";
} else {
echo "Erro ao salvar dados do curso: " . $conn->error;
}
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_disciplina'])) {
$nome_disciplina = $_POST['nome_disciplina'];
$curso_id = $_POST['curso_id'];


$sql = "INSERT INTO disciplinas (nome, curso_id) VALUES ('$nome_disciplina', '$curso_id')";

if ($conn->query($sql) === TRUE) {
echo "Dados da disciplina foram salvos com sucesso.";
} else {
echo "Erro ao salvar dados da disciplina: " . $conn->error;
}
}

$conn->close();
?>