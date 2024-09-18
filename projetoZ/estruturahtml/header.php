<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Curso</title>
<link rel="stylesheet" href="/phptips/projetoZ/estruturahtml/STYLE.CSS">

</head>

<body>
    <header>
        <div class="container">
            <a href="?pagina=home">
                <img src="https://cdn0.iconfinder.com/data/icons/the-middle-ages/500/Knight_dragon-64.png" title="Logo" alt="Logo">
            </a>
            <div id="menu">
                <a href="?pagina=cursos">Cadastre-se</a>
                <a href="?pagina=matriculas">Continuar sem login</a>
            </div>
        </div> <!-- Fechamento da div container -->
    </header>

    <div id="conteudo" class="container">
        <?php
        // Conexão com o banco de dados REVISAR!!!!!!!!!!!!!!!!!!!!!!!!!

        //revisar essa parte também 
        if (isset($_GET['pagina'])) {
            $pagina = $_GET['pagina'];
        } else {
            $pagina = 'home';
        }

        if ($pagina == 'Cadastro') {
            include 'cadastro.php';
        } elseif ($pagina == 'guest') {
            include 'guest.php';
        } else {
            include 'home.php';
        }
        ?>
    </div>

    <?php include 'footeer.php'; ?>
</body>
</html>