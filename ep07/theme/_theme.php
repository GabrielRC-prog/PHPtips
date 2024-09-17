<?php ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

</head>
<body>

<nav>class="main_nav" 
<?php if($v->section("sidebar")): 
    echo $v->section("sidebar");
else:
    ?>

    <a title="" href="<?= url(); ?>">Home</a>
    <a title="" href="<?= url(uri: "contato"); ?>">Contato</a>
    <a title="" href="<?= url(uri: "teste"); ?>">Teste</a>
    <?php
    endif;?>
</nav>

<main class="main_content"> 
    <?= $v->section("content");?>
</main>

<footer class="main_footer">
<?= SITE;?> - Todos os direitos reservados
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</body>
</html>