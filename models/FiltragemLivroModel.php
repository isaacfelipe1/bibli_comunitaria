<?php

namespace models;
$conn = \MySql::connect();
$generoSelecionado = $_GET["cdd"];
// Conecte ao banco de dados e execute a consulta com base no valor do parâmetro 'genero'
$query = \MySql::connect()->prepare("SELECT * FROM livros where cdd = '$generoSelecionado'");
$query->bindParam(':cdd', $generoSelecionado);
$query->execute();


// Execute a consulta SQL para buscar os livros com base no gênero selecionado
// Substitua isso pela lógica real do seu banco de dados
//$query = "SELECT * FROM livros WHERE cdd = '$generoSelecionado'";
// ...

// Gere a lista de livros
while ($row = $query->fetch(\PDO::FETCH_ASSOC)) {
    echo "<div>" . $row['titulo'] . "</div>";
    // Exiba outras informações do livro conforme necessário
}
class FiltragemLivroModel extends Model
{
}

