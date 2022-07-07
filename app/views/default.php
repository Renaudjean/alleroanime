<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <header>
    <h1>Bienvenue sur mon blog</h1>
    <a href="http://localhost/alleroanime/public/Series/serieslist/"> change content</a>
</header>
<main>
    <?php foreach($Series as $Serie){
        echo  $Serie->name;
        echo "<br>";
    }
     foreach($Movies as $Movie){
        echo  $Movie->original_title;
        echo "<br>";
    }
        ?>
    
    
</main>
<footer>
    <p>&copy; 2022</p>
</footer>  
</body>
</html>
