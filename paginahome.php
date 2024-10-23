<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frog Tech - Home</title>
   
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', 'Helvetica', sans-serif; 
        }

        body {
            background-color: #f4f4f4;
            color: #333;
            font-family: 'Arial', 'Helvetica', sans-serif;
            line-height: 1.6;
        }

        header {
            background: rgba(40, 199, 111, 0.8);
            backdrop-filter: blur(10px);
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1080px;
            margin: 0 auto;
        }

        .logo img {
            width: 200px;
            height: auto;
            border-radius: 10px;
        }

        .menu-icon {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            width: 30px;
            height: 25px;
            cursor: pointer;
            transition: 0.3s;
        }

        .menu-icon:hover .bar {
            background-color: #006600;
        }

        .bar {
            height: 3px;
            width: 100%;
            background-color: #fff;
            border-radius: 5px;
            transition: 0.3s;
        }

        .titulo h1 {
            text-align: center;
            color: #333;
            margin-top: 100px;
        }

        .titulo h3 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }

        .cards-container {
            display: flex;
            justify-content: center;
            gap: 30px;
            padding: 100px 20px 80px;
        }

        .card, .side-card {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 300px;
            height: 300px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card:hover, .side-card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            background-color: #28C76F;
            color: white;
        }

        footer {
            color: black;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }

        .sidebar {
            position: fixed;
            top: 0;
            right: -300px;
            width: 300px;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            box-shadow: -2px 0 5px rgba(0, 0, 0, 0.1);
            transition: 0.5s;
            z-index: 1000;
        }

        .sidebar.open {
            right: 0;
        }

        .sidebar ul {
            list-style: none;
            padding: 20px;
        }

        .sidebar ul li {
            padding: 15px 0;
            border-bottom: 1px solid #ccc;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #333;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        .sidebar ul li a:hover {
            color: #006600;
        }

        .sidebar ul li a.logout {
            color: #333;
        }

        .sidebar ul li a.logout:hover {
            color: #ff0000;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
            z-index: 999;
        }

        .overlay.show {
            display: block;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="../img/logo2.png" alt="Frog Tech Logo">
            </div>
            <div class="menu">
                <div class="menu-icon" id="menuIcon">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
            </div>
        </div>
    </header>

    <div class="sidebar" id="sidebarMenu">
        <ul>
            <li><a href="loja.html">Loja</a></li>
            <li><a href="desenvolvedores.html">Desenvolvedores</a></li>
            <li><a href="perfil.php">Perfil de Usuário</a></li>
            <li><a href="logout.php" class="logout">Sair</a></li>
        </ul>
    </div>

    <div class="overlay" id="overlay"></div>

    <div class="titulo">
        <h1>Bem-vindo à Frog Tech</h1>
        <h3>Seu e-commerce de tecnologia</h3>
    </div>

    <div class="cards-container">
        <div class="side-card">
            <h2>Inovação</h2>
            <p>Compromisso com a inovação contínua, qualidade e atendimento excepcional.</p>
        </div>
        <div class="card">
            <h2>Missão</h2>
            <p>Oferecer produtos e serviços que garantam o melhor custo-benefício aos nossos clientes.</p>
        </div>
        <div class="side-card">
            <h2>Visão</h2>
            <p>Ser referência em tecnologia, reconhecida pela qualidade e inovação dos nossos produtos.</p>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Frog Tech. Todos os direitos reservados.</p>
    </footer>

    <script>
        const menuIcon = document.getElementById('menuIcon');
        const sidebarMenu = document.getElementById('sidebarMenu');
        const overlay = document.getElementById('overlay');

        menuIcon.addEventListener('click', () => {
            sidebarMenu.classList.toggle('open');
            overlay.classList.toggle('show');
        });

        overlay.addEventListener('click', () => {
            sidebarMenu.classList.remove('open');
            overlay.classList.remove('show');
        });
    </script>
</body>
</html>
