<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OFPPT Website</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="cad.css">
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
    
<div class="text-container">
    <h1 class="typing-text">Institut Spécialisé de Technologie Appliquée <br>
      <span>ACTIVITES</span> 
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
   
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
<!-- typicing --></script>
<style>
  
    .cnt-b{
display: flex;
justify-content: center;
align-items: center;
height: 750px;
width: 60%;
margin-left: 10%;
margin-right: 10%;
    }
    .cnt-ch1{
        width: 50%;
        height: 100%;
        max-width: 50%;
        max-height: 100%;
        animation: opa 8s ease-in-out infinite;
        z-index: 1;
    }
    .cnt-ch2{
        background-image: url(images&videos/IMG-20241121-WA0086.jpg);
        background-repeat: no-repeat;
        background-size: cover;
      
        width: 50%;
        height: 100%;
        padding: 2rem;
      background: rgba(0, 0, 0, 0.5); /* Black overlay */
      color: white;
      backdrop-filter: blur(10px); /* Apply blur to the background */
      
    }   
    .cnt-b{
        background-image: url(Untitled\ design.png);
        background-repeat: no-repeat;
        background-size: cover;
      z-index: 0;
             width: 70%;

     

    }
  
    .container {
    padding: 20px;
    border-radius: 8px;
}

h2 {
    color: #343a40; /* Dark text color */
}

.img-fluid {
    max-width: 100%;
    height: auto;
    margin-bottom: 10px; /* Space between logo and title */
}

.rounded-circle {
    border-radius: 50%; /* Makes the image round */
}

.shadow {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Adds shadow */
    transition: box-shadow 0.3s, transform 0.3s; /* Smooth transitions for shadow and scaling */
}

.shadow:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); /* Darker shadow on hover */
    transform: scale(1.1); /* Scale up the logo slightly on hover */
}

.club-logo {
    width: 100px; /* Set a fixed width */
    height: 100px; /* Set a fixed height */
    object-fit: cover; /* Ensures the image covers the area without distortion */
}


    .cnt-t{
        margin-top: 30%;
    }

    @keyframes opa {
  0% {
    opacity: 1;
    background-image: url(images&videos/IMG-20241121-WA0086.jpg);
  }
  20% {
    opacity: 0.8;
    background-image: url(images&videos/IMG-20241121-WA0086.jpg);
  }
  40% {
    opacity: 1;
    background-image: url(images&videos/IMG-20241121-WA0087.jpg);
  }
  60% {
    opacity: 0.8;
    background-image: url(images&videos/IMG-20241121-WA0087.jpg);
  }
  80% {
    opacity: 1;
    background-image: url(images&videos/image.jpg);
  }
  100% {
    opacity: 0.8;
    background-image: url(images&videos/image.jpg);
  }
}
.benevolence-section {
    background-color: #f8f9fa; /* Light background */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.benevolence-section h2 {
    color: #4a4a4a; /* Darker text for the title */
}

.benevolence-section h3 {
    color: #2c3e50; /* Darker text for the subtitle */
}

.benevolence-section p {
    font-size: 1.1rem;
    line-height: 1.6;
    color: #555; /* Gray text for better readability */
}


    </style>
<!--ZAYD PART -->

<div class="cnt-b">
    <div class="cnt-ch1">
       
    </div>
    <div class="cnt-ch2">
        <div class="cnt-t">
        <h1 style="text-align: center;">Les Activites parashcolaire</h1>
        <br>
        <p>Les activités parascolaires jouent un rôle essentiel dans le développement global des stagiaires.
             Elles offrent une plateforme où les stagiaires peuvent explorer leurs passions, acquérir de nouvelles compétences et tisser des liens significatifs avec leurs pairs.
              Ces activités enrichissent l'expérience scolaire en favorisant la créativité, le travail d'équipe et la responsabilité.
               Au sein de notre club, nous nous engageons à créer un environnement inclusif où chaque stagiaire se sent bienvenu et valorisé. 
               Que ce soit à travers des ateliers, des compétitions sportives ou des projets artistiques, nous nous assurons toujours d'avoir une place pour chacun, 
               permettant ainsi à tous de s'épanouir et de contribuer à la communauté . En investissant dans ces expériences, 
            nous préparons nos stagiaires à devenir des individus confiants et engagés, prêts à relever les défis de demain</p>
    </div>
    </div>
</div>
<br>
<br>
<div class="tnt">
    <div class="bom"><img class="iom" src="" alt=""></div>
</div>
<div class="container my-5 benevolence-section">
    <h2 class="text-center mb-4">Bénévolat pour le Ramadan</h2>
    <div class="row align-items-center">
        <div class="col-md-6">
            <img src="images&videos/9ofat_ramadan.png" alt="Collecte de fonds pour Ramadan" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
            <h3>Collecte de Fonds pour "9ofat Ramadan"</h3>
            <p>
                Pendant le mois sacré de Ramadan, nous avons l'opportunité de montrer notre solidarité et notre générosité envers ceux qui en ont besoin. 
                Nous organisons une collecte de fonds pour soutenir les 9ofat Ramadan, qui apportent une aide précieuse aux familles défavorisées. 
                Chaque don, qu'il soit petit ou grand, contribue à illuminer le mois de Ramadan pour ceux qui en ont le plus besoin. 
                Rejoignez-nous dans cet effort noble et faites une différence dans la vie des autres.
            </p>
        </div>
    </div>
</div>
<br>
<div class="container my-5">
    <h2 class="text-center mb-4">nos clubs</h2>
    <div class="row text-center">
        <div class="col-md-2 mb-4">
            <img src="images&videos/logo1.png" alt="Club 1" class="img-fluid rounded-circle shadow club-logo">
            <h5>Club 1</h5>
        </div>
        <div class="col-md-2 mb-4">
            <img src="images&videos/cad (2).jpg" alt="Club 2" class="img-fluid rounded-circle shadow club-logo">
            <h5>Club 2</h5>
        </div>
        <div class="col-md-2 mb-4">
            <img src="images&videos/logo3.png" alt="Club 3" class="img-fluid rounded-circle shadow club-logo">
            <h5>Club 3</h5>
        </div>
        <div class="col-md-2 mb-4">
            <img src="images&videos/contact-image.jpg" alt="Club 4" class="img-fluid rounded-circle shadow club-logo">
            <h5>Club 4</h5>
        </div>
        <div class="col-md-2 mb-4">
            <img src="images&videos/logo5.png" alt="Club 5" class="img-fluid rounded-circle shadow club-logo">
            <h5>Club 5</h5>
        </div>
        <div class="col-md-2 mb-4">
            <img src="images&videos/Gestion-Entreprise.jpeg" alt="Club 6" class="img-fluid rounded-circle shadow club-logo">
            <h5>Club 6</h5>
        </div>
    </div>
</div>




<br>
<style>
    .main-cad{
        background-color: #f8f9fa;
        display: flex;
  flex-wrap: wrap;
  gap: 10px;
gap: 100PX;
width: 100dvw;
justify-content: center
    }
    body{
        overflow-x: hidden;
    }

    .full img{
        width: 80%;
        border-radius: 22px;
        transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }
    .full img:hover{
        transform: scale(1.1) rotate(2deg);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5), 0 0 20px rgba(138, 43, 226, 0.8);
  background: linear-gradient(135deg, #8a2be2, #6a5acd);
    }
</style>



<H1 class="big-one" style="font-weight: 700; text-align: center; color: black; font-family: Arial, Helvetica, sans-serif; font-size: 90px;"> LES MEMBRES DU <span style="color: #6a5acd;">CAD</span></H1>
<br>
<br>
<br>
<br>
<!-- partiya dyal tsawar bi style css dyalha intern-->
<div class="main-cad">

<div class="full">
    <img src="images&videos/1.png" >
</div>
<div class="full">
    
    <img src="images&videos/2.png" >
</div>

<div class="full">
    
    <img src="images&videos/4.png" >
</div>
<div class="full">
    
    <img src="images&videos/5.png" >
</div>
<div class="full">
    
    <img src="images&videos/6.png" >
</div>
<div class="full">
    
    <img src="images&videos/7.png" >
</div>
<div class="full">
    
    <img src="images&videos/8.png" alt="">
</div>
<div class="full">
    
    <img src="images&videos/9.png" alt="">
</div>
<div class="full">
    
    <img src="images&videos/10.png" alt="">
</div>
<div class="full">
    
    <img src="images&videos/11.png" alt="">
</div>
<div class="full">
    
    <img src="images&videos/12.png" alt="">
</div>
<div class="full">
    
    <img src="images&videos/13.png" alt="">
</div>
<div class="full">
    
    <img src="images&videos/14.png" alt="">
</div>
<div class="full">
    
    <img src="images&videos/15.png" alt="">
</div>
<div class="full">
    
    <img src="images&videos/16.png" alt="">
</div>
<div class="full">
    
    <img src="images&videos/17.png" alt="">
</div>
<div class="full">
    
    <img src="images&videos/18.png" alt="">
</div>

<style>
    .jouj{
        background-color: #f8f9fa;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 4rem;
        padding: 60px;
    }
</style>

</div>

<div class="jouj">
    <div class="full">
        <img src="images&videos/mm.png" alt="">
    </div>
    <div class="full">
        <img src="images&videos/tt.png" alt="">
    </div>
</div>

<!-- footer -->
  <?php 
       
       include("footer.html") ;
  
  ?>
</body>
</html>