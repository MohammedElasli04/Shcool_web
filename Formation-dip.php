<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formation Diplomante</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="x-icon" href="images&videos/ofppt.png"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <?php
       
        include("header.html");

    ?>
    <div class="slider">
        <figure>
            <div class="slide">
                <img src="images&videos/html-css-collage-concept-with-person-1-scaled.webp" alt="" class="dark">
            </div>
            <div class="slide">
                <img src="images&videos/shutterstock_1556915846.jpg" alt="" class="dark">
            </div>
            <div class="slide">
                <img src="images&videos/professional-virtual-assistant-sitting-desk-600nw-2215192273.webp" alt="" class="dark">
            </div>
            <div class="slide">
                <img src="images&videos/f8392592-8bfd-4eb6-aa67-19e10800fa9f.jpg" alt="" class="dark">
                <div id="typing-container">
                 <strong>   Let's make a better future <br>
                     <span class="blue">together</span></strong>
                  </div>
            </div>
        </figure>
    </div>

    <section id="formation">
        <H1 id="titre">Les filières assurées à cet <span>établissement</span></H1>
    <div class="formation">
      <div class="filier card" style="width: 21rem;">
        <img class="card-img-top" src="images&videos/dd.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Développement Digital</h5>
          <p class="card-text">Le tronc commun en Développement Digital est une
             étape importante pour acquérir les bases nécessaires à l'étude
            , la conception, la construction, le...</p>
          <a href="https://www.myway.ac.ma/fr/filiere/DIA_DEV_TS" class="btn btn-primary" target="_blank">More Details</a>
        </div>
      </div>

      <div class="filier card" style="width: 21rem;">
        <img class="card-img-top" src="images&videos/Gestion-Entreprise.jpeg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Gestion des Entreprises</h5>
          <p class="card-text">Le tronc commun Gestion des Entreprises donne au stagiaire toutes les
             compétences nécessaires pour découvrir le monde des métiers de gestion et du commerce,...</p>
          <a href="https://www.myway.ac.ma/fr/filiere/GC_GE_TS" class="btn btn-primary" target="_blank">More Details></a>
        </div>
      </div>

      <div class="filier card" style="width: 21rem;">
        <img class="card-img-top" src="images&videos/assistant-admin-comm_thomas_31052023.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Assistant Administratif</h5>
          <p class="card-text">Le tronc commun de la filière Assistant Administratif donne au stagiaire les compétences
             nécessaires pour découvrir les métiers de gestion et du commerce,...</p>
          <a href="https://www.myway.ac.ma/fr/filiere/GC_AA_T" class="btn btn-primary" target="_blank">More details</a>
        </div>
      </div>
    </div>
</section>
<!-- footer -->
  <?php 
       
       include("footer.html") ;
  
  ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
         <!-- script pour menu on click -->
         <script>
        
            const menuToggle = document.querySelector('.menu-toggle');
            const navLinks = document.querySelector('.nav-links');
    
            menuToggle.addEventListener('click', () => {
                navLinks.classList.toggle('active');
            });
        </script>
</body>
</html>