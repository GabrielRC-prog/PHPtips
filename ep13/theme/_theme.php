<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="ajax_load">
    <div class="ajax_load_box">
        <div class="ajax_load_box_circle"></div>
        <div class="ajax_load_box_title">Aguarde, carregando!</div>
    </div>
</div>

<main class="content">
    <?= $v->section("content"); ?>
</main>

<script src="<?= url(path: "/ep13/theme/assets/js/jquery.js"); ?>"></script>
<?= $v->section("js"); ?>
    
</body>
</html>