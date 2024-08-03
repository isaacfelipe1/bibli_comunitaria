<?php

namespace models;
$conn = \MySql::connect();
$generoSelecionado = $_GET["cdd"];
$query = \MySql::connect()->prepare("SELECT * FROM livros where cdd = '$generoSelecionado'");
$query->bindParam(':cdd', $generoSelecionado);
$query->execute();


while ($row = $query->fetch(\PDO::FETCH_ASSOC)) {
    echo "<div>" . $row['titulo'] . "</div>";

}
class FiltragemLivroModel extends Model
{
}

