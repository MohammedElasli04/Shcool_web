<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OFPPT Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/links.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="x-icon" href="images&videos/ofppt.png"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>
<body>
  <?php
      include("header.html");
  ?>
    <div class="animated-section">
            
        <div class="lines">
          <div class="line top"></div>
          <div class="line bottom"></div>
        </div>
      <!-- text animation -->
    </div>
    <div class="text-container">
      <h1 class="typing-text"> <span>My-way</span> et Tout les lien <span> utiles</span>   <br>
      </h1>
    </div>
<!-- Background Section -->
  <div class="container1"></div>


<!-- script pour menu on click -->
  <script>
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });
  </script>

  <div class="card">
    <div class="loader">
      <p>Des lien utiles comme</p>
      <div class="words">
        <span class="word">my way</span>
        <span class="word">sholarvox</span>
        <span class="word">teams</span>
        <span class="word">ofppt langue</span>
        <span class="word">ofppt info</span>
      </div>
    </div>
  </div>
  <section class="campus-life-activities">
    <div class="row">
      <div class="activity-box">
        <a href="https://www.myway.ac.ma/fr" style="text-decoration: none;"><h3>my way</h3></a>
        <p>My way est une plateforme d'orientation personnalisée conçue pour aider les utilisateurs à identifier leurs passions et intérêts, explorer les métiers d'aujourd'hui et de demain, et concrétiser leur projet professionnel </p>
        <a href="https://www.myway.ac.ma/fr" style="text-decoration: none;"><button class="btn" style="text-align: right;">  Visiter </button> </a>
      </div>
      <div class="activity-box">
        <a href="https://www.scholarvox.com/" style="text-decoration: none;"> <h3>scholarvox</h3> </a>
        <p>ScholarVox est une bibliothèque numérique communautaire dédiée aux institutions académiques. Elle offre un accès à une vaste collection de livres numériques dans des domaines tels que les sciences économiques, gestion, ingénierie, informatique et plus encore</p>
        <a href="https://www.scholarvox.com/" style="text-decoration: none;"><button class="btn" style="text-align: right;">  Visiter </button> </a>
      </div>
      <div class="activity-box">
        <a href="https://www.microsoft.com/fr-ca/microsoft-teams/group-chat-software" style="text-decoration: none;"> <h3>Teams</h3> </a>
        <p> Microsoft Teams est une plateforme de communication et de collaboration qui fait partie de la suite Microsoft 365. Elle permet aux utilisateurs de travailler ensemble en temps réel, de partager des documents, et de participer à des réunions via des appels audio et vidéo</p>
        <a href="https://www.microsoft.com/fr-ca/microsoft-teams/group-chat-software" style="text-decoration: none;"><button class="btn" style="text-align: right;">  Visiter </button> </a>
      </div>
      <div class="activity-box">
        <a href="https://www.ofppt.ma/fr/ofppt-langues" style="text-decoration: none;"> <h3>ofppt langue</h3> </a>
        <p>L'OFPPT propose une plateforme e-learning dédiée à l'apprentissage des langues étrangères appelée OFPPT Langues. Cette plateforme permet aux stagiaires d'apprendre le français, l'anglais et l'espagnol selon le Cadre Européen Commun de Référence pour les Langues</p>
        <a href="https://www.ofppt.ma/fr/ofppt-langues" style="text-decoration: none;"><button class="btn" style="text-align: right;">  Visiter </button> </a>
      </div>
      <div class="activity-box">
        <a href="https://ofppt.info/" style="text-decoration: none;"> <h3>ofppt info</h3> </a>
        <p>OFPPT INFO est une plateforme dédiée à la formation professionnelle Elle offre une large gamme de formations diplômantes et qualifiantes couvrant plus de 200 métiers et 250 établissements. La plateforme propose des cours du soir, des formations hybrides, et des programmes d'innovation entrepreneuriale</p>
        <a href="https://ofppt.info/" style="text-decoration: none;"><button class="btn" style="text-align: right;">  Visiter </button> </a>
      </div>
    </div>
  </section>
<!-- footer -->
  <?php 
      include("footer.html") ;
  ?>
<!-- on scroll animaton script -->
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const items = document.querySelectorAll('.item');
  
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('active');
          }
        });
      }, { threshold: 0.2 }); // Trigger when 20% of the element is visible
  
      items.forEach(item => observer.observe(item));
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
<!-- typicing -->

</body>
</html>