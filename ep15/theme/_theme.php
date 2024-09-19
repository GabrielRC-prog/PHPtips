<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP TIPS - <?= $title; ?></title>

    <link rel="stylesheet" href="<?asset(path:"/css/style.css"); ?>"/>
</head>
<body>
    

    <main class="main">
        <?= $v->section("content"); ?>
    </main>

<script src="<?= asset(path: "/js/query.js"); ?>"></script>
<?= $v->section("js"); ?>

</body>
</html>