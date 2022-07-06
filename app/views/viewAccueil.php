<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
<?php 
    foreach($articles as $article) ?>
    <h2><?php $article->title(); ?></h2>
    <p> <?php $article->overview(); ?></p>
</body>
</html>