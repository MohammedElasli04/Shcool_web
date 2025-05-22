<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>planing</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
   <link rel="shortcut icon" type="x-icon" href="images&videos/ofppt.png"> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
   <link rel="stylesheet" href="planing.css">
  <style>
    /* General container styling */
.calendar-container {
  max-width: 900px; /* Adjust width based on your site layout */
  margin: 50px auto; /* Center the calendar on the page */
  padding: 20px;
  background-color: #ffffff; /* Clean white background */
  box-shadow: 0px 8px 20px rgba(7, 86, 255, 0.582); /* Soft shadow */
  border-radius: 10px; /* Smooth corners */
  overflow: hidden; /* Prevent overflow */
}

/* Calendar title */
.calendar-title {
  text-align: center;
  font-family: 'Roboto', sans-serif;
  font-size: 24px;
  font-weight: bold;
  color: #333333; /* Neutral dark color */
  margin-bottom: 20px;
}

/* Responsive styling */
@media (max-width: 700px) {
  .calendar-container {
    padding: 15px;
  }

  .calendar-title {
    font-size: 20px;
  }
}

  </style>

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
<h1 class="typing-text">PLANING
</h1>
</div>
<!-- Background Section -->
<div class="container2"></div>
 <!-- script pour menu on click -->
 <script>
        
  const menuToggle = document.querySelector('.menu-toggle');
  const navLinks = document.querySelector('.nav-links');

  menuToggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
  });
</script>

  <!-- <h1>PLANING DES EVENMENT</h1> -->
<h1 align="center" style="color: rgb(12, 143, 47);">ici vous trouver les planing d'activites parascholair et plus!!</h1>
  <div class="calendar-container">
    <h2 class="calendar-title">planing des evenment parashcolaire</h2>
    <iframe 
      src="https://calendar.google.com/calendar/embed?src=b0d6bfb02c5ebe499c6bf621cc6431796166b4c4a9da346e90000f25ecb2ad9c%40group.calendar.google.com&ctz=Africa%2FCasablanca" 
      style="border: 0;" 
      width="100%" 
      height="600" 
      frameborder="0" 
      scrolling="yes">
    </iframe>
  </div>
<!-- footer -->
  <?php 
       
       include("footer.html") ;
  
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>

</body>
</html>
