


<select id="filtroCDD" onchange="filtrarLivros()">
                <option value="">Selecione um código CDD</option>
                <option value="028.5">Literatura Infantil/Juvenil</option>
                <option value="869">Educação</option>
                <!-- Adicione mais opções de CDD conforme necessário -->
            </select>

            <script>
                function filtrarLivros() {
                    var cddSelecionado = document.getElementById("filtroCDD").value;
                    if (cddSelecionado) {
                        var xhr = new XMLHttpRequest();
                        xhr.onreadystatechange = function() {
                            if (xhr.readyState === 4 && xhr.status === 200) {
                                document.getElementById("resultadoLivros").innerHTML = xhr.responseText;
                            }
                        };
                        xhr.open("GET", "consultaLivro?cdd=" + cddSelecionado, true);
                        xhr.send();
                    } else {
                        document.getElementById("resultadoLivros").innerHTML = "";
                    }
                }
            </script>




$conn = \MySql::connect();

if (isset($_GET['cdd'])) {
    $cddSelecionado = $_GET['cdd'];


    // Prepare a consulta SQL para buscar os livros com base no CDD
    $query = $conn->prepare("SELECT * FROM livros WHERE cdd = :cdd");
    $query->bindParam(':cdd', $cddSelecionado);
    $query->execute();

    // Exiba a lista de livros correspondentes ao CDD selecionado
    if ($query->rowCount() > 0) {
        while ($row = $query->fetch(\PDO::FETCH_ASSOC)) {
            echo "<div>" . $row['letra_titulo'] . "</div>";
            // Exiba outras informações do livro conforme necessário
        }
    } else {
        echo "Nenhum livro encontrado para este CDD.";
    }
} else {
    echo "Nenhum código CDD selecionado.";
}


<div id="listaLivros">
</div>