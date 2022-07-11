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
        <form action="../viewInfo"  method="get">
          <input type="text" name="search-bar" class="search-bar" placeholder="Search...">  
          <input type="image" class="search-icon" src="../../../public/asset/icons8-google-web-search.svg" name="submit" alt="Submit">
        </form>
        <?php
       
        ?>
    </div>
  </header>
  <div class="menu-bar">
                <ul>
                  <li> <a href="">Acceuil</a> </li>
                  <li> <a href="">Category</a> </li>
                </ul>  
  </div>
            
     <?= $content ;?>
        

<script src="../../../public/Animation/main.js"> </script>
</body>
</html>
    
 