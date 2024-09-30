<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
    session_destroy();
    header('Location: home');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Biblioteca Maria Dolores</title>
    <link rel="stylesheet" href="views/templates/css/style.css">
    <link rel="stylesheet" href="views/templates/css/style_default.css">
    <link rel="stylesheet" href="views/templates/css/footer.css">
    <link rel="stylesheet" href="views/templates/css/navbar.css">
    <link rel="stylesheet" href="views/templates/css/square.css">
    <link rel="stylesheet" href="views/templates/css/buttonMain.css">
    <link rel="icon" href="views/templates/img/favicon-16x16.png">
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
    .nav-bar {
        padding: 20px;
    }

    .nav-list {
        display: flex;
        align-items: center;
    }

    .nav-item {
        margin: 0 10px;
        transition: background-color 0.3s, color 0.3s;
    }

    .nav-link {
        text-decoration: none;
        color: #fff !important;
        font-weight: bold;
        display: block;
        padding: 20px;
        transition: color 0.3s, background-color 0.3s; 
    }

    .nav-link:hover {
        color: #fff; 
        background-color: #2E8B57; 
    }

    .navbar-nav {
        margin-left: auto;
    }

    .active {
        text-decoration: none;
        font-size: 1.15rem;
        color: #fff; 
        font-weight: 400;
        background-color: #2E8B57;
    }

    .navbar-toggler {
        border: none;
        color: #fff;
    }

    .navbar-toggler-icon {
        background-image: url('views/templates/img/HAMBURGUE.png');
        background-size: cover;
        width: 50px;
        height: 100px;
        filter: brightness(0) invert(1);
        background-repeat: no-repeat;
    }
</style>


</head>

<body>
    <header id="header" style="background-image:url('views/templates/img/2.png');">
        <nav class="navbar navbar-expand-lg nav-bar">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav nav-list">
                        <li class="nav-item"><a href="#other-services" class="nav-link">Serviços</a></li>
                        <li class="nav-item"><a href="#secao" class="nav-link">Sobre</a></li>
                        <li class="nav-item"><a href="#outras-informacoes" class="nav-link">Contato</a></li>
                        <?php if (isset($_SESSION['user'])): ?>
                            <li class="nav-item">
                                <span class="nav-link">Olá, <?php echo htmlspecialchars($_SESSION['user']); ?></span>
                            </li>
                            <li class="nav-item">
                                <form method="post" action="" style="display: inline;">
                                    <button type="submit" name="logout" class="nav-link btn btn-link"
                                        style="color: #fff; text-decoration: none; padding: 0; border: none; background: none;">Sair</button>
                                </form>
                            </li>
                        <?php else: ?>
                            <li class="nav-item"><a href="login" class="nav-link">Entrar</a></li>
                        <?php endif; ?>
                        <li class="nav-item"><a href="menuUsuario" class="nav-link">Usuário</a></li>
                        <li class="nav-item"><a href="menu" class="nav-link">Acervo</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <span class="square"></span>
        <h1>Biblioteca Comunitária<br>Maria Dolores</h1>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>