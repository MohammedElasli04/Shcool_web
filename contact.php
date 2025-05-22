<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




  <title>Contactez-nous - Établissement XYZ</title>
  <link rel="stylesheet" href="contact.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="shortcut icon" type="x-icon" href="images&videos/ofppt.png"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  
</head>
<body>
    <?php
       
          include("header.html");

       ?>
           <!-- script pour menu on click -->
    <script>
        
        const menuToggle = document.querySelector('.menu-toggle');
        const navLinks = document.querySelector('.nav-links');

        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    </script>
    </header>
    <div class="animated-section">
            
        <div class="lines">
          <div class="line top"></div>
          <div class="line bottom"></div>
        </div>
       <!-- text animation -->
      </div>
<div class="text-container">
    <h1 class="typing-text">contacter-nous</b> 
    </h1>
</div>
<!-- Background Section -->
<div class="container1"></div>
    
    <br><br><br>
 

  <div class="contact-container">
    <div class="contact-info">
      <h2>nos Informations </h2>
      <p>ISRA-ROCHE-NOIR</p>
      <p>Adresse : 123 Rue de la Ville, 75000 </p>
      <p>Téléphone : 01 23 45 67 89</p>
      <p>Email : contact@etablissement.com</p>
    </div>

    <div class="contact-form">
      <h2>Formulaire de contact</h2>
      <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfFVsiIi71Gs4xt1POq6h8iXduA-jxNVGossEoAe8koAmOT7g/viewform?embedded=true" width="640" height="988" frameborder="0" marginheight="0" marginwidth="0">Chargement…</iframe>    </div>
  </div>
 <!-- footer -->
       <?php 
       
            include("footer.html") ;
       
       ?>
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>

</body>
</html>