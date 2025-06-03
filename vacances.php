<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OFPPT Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/vacances.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="x-icon" href="images&videos/ofppt.png"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body>
    <?php
       
          include("header.html");

    ?>
<!-- background image et lignes -->

    <div class="animated-section">
            
            <div class="lines">
            <div class="line top"></div>
            <div class="line bottom"></div>
            </div>
        <!-- text animation -->
        </div>
    <div class="text-container">
        <h1 class="typing-text">Calendrier des vacances <b> 2024/2025</b> 
        </h1>
    </div>
    <!-- Background Section -->
    <div class="container1"></div>

    <!-- JavaScript -->
    <!-- script pour menu on click -->
    <script>
        
        const menuToggle = document.querySelector('.menu-toggle');
        const navLinks = document.querySelector('.nav-links');

        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    </script>

<!-- <h1>PLANING DES EVENMENT</h1> -->
<div class="calendar-container">
<h1 >ici vous trouver calendrier des vacances</h1>
</div>
<!--IMAGE EFM-->
<div class="efmimg">
    <img class="imaage" src="images&videos/vacances.jpg">
</div>



<!-- footer -->
  <?php 
       
       include("footer.html") ;
  
  ?>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
</body>
</html>