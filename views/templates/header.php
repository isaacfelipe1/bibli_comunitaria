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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .nav-bar {
            background-color: #04aa6d;
            padding: 0.1rem 2rem;
        }
        .nav-list {
            display: flex;
            align-items: center;
        }
        .nav-list ul {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .nav-item {
            margin: 0;
            transition: background-color 0.3s, color 0.3s;
            list-style: none;
        }
        .nav-item:hover {
            background-color: #2E8B57;
        }
        .nav-link {
            text-decoration: none;
            font-size: 1rem;
            color: #fff;
            font-weight: 400;
            display: block;
            padding: 20px; 
            transition: color 0.3s;
            font-weight: bold;
        }
        .nav-link:hover {
            color: #ffffff;
        }
        .navbar-nav {
            margin-left: auto; 
        }
        .login-button a {
            text-decoration: none;
            color: #fff;
            font-weight: 400;
            font-size: 1.4rem;
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
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba%28255, 255, 255, 1%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }
    </style>
</head>
<body>
    <header id="header" style="background-image:url('views/templates/img/wallpaper_biblioteca.jpg');">
        <nav class="navbar navbar-expand-lg nav-bar">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav nav-list">
                        <li class="nav-item"><a href="#other-services" class="nav-link">Serviços</a></li>
                        <li class="nav-item"><a href="#secao" class="nav-link">Sobre</a></li>
                        <li class="nav-item"><a href="#outras-informacoes" class="nav-link">Contato</a></li>
                        <li class="nav-item"><a href="login" class="nav-link">Entrar</a></li>
                        <!-- <li class="nav-item"><a href="menuUsuario" class="nav-link">Usuário</a></li> -->
                        <!-- <li class="nav-item"><a href="menu" class="nav-link">Acervo</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <span class="square "></span>
        <h1>Biblioteca Comunitária<br>Maria Dolores</h1>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
