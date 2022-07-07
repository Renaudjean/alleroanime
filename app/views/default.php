<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link href="../../../public/css/style.css" rel="stylesheet" >
    <title>AllerOAnime</title>
</head>
<body>
  <header id="header">
    <h1 class="title">AllerOAnime</h1>
    <div class="head-container">
        <input type="text" class="search-bar" placeholder="Search...">  
        <img class="search-icon" src="../../../public/asset/icons8-google-web-search.svg">
    </div>
</header>
<main>
    <?php
    // Extract the datas  
     foreach($Series as $Serie){
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
