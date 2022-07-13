<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="../../../public/css/style.css">
    <title>AlleroAnime</title>
</head>
<body>
  <header id="header">
    <h1 class="title">AllerOAnime</h1>
    <div class="head-container">
      
      <div class="menu-btn"> 
              <div class="menu-btn_burger"></div> 
             
        </div>
        <form action="../../Categorie/searchCategorie/"  method="GET">
          <input type="text" name="query" class="search-bar" placeholder="Search...">  
          <input type="image" class="search-icon" src="../../../public/asset/icons8-google-web-search.svg" name="submit" alt="Submit">
        </form>
        <?php
       
        ?>
    </div>
  </header>
  <div class="menu-bar">
                <ul>
                  <li> <a href="../../Home/accueil/">Accueil</a> </li>
                  <li> <a href="../../Categorie/genre/">Catégorie</a> </li>
                </ul>  
  </div>
            
     <?= $content ;?>
        
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<script src="../../../public/Animation/main.js"> </script>
</body>
</html>
    
 