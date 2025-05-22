<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="emploi.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="x-icon" href="images&videos/ofppt.png"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>emploi du temps</title>
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
        <h1 class="typing-text">Consulter votre emploi du temps <br> <b>2024/2025</b> 
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

</div>

<div class="calendar-container">
    <h1>ici vous trouver les emploi du temps</h1>
</div>

<!-- Add a container for the dropdown -->
<div class="dropdown-container">
    <label for="group" class="select">Select Group:</label>
    <select id="group">
        <option value="#">Emploi du temps du premiere année</option>
        <option value="dd101">DD-101 / DD-102 / 1GE-101 / 1GE-102</option>
        <option value="DEV101">1GE-103 / 1GE-104 / 1GE-105 / 1GE-106</option>
        <option value="DEV102">1GE-107 / 1GE-108 / 1AA-101 / 1AA-102 / 1AA-103</option>
        <option value="#">Emploi du temps du dexieme année</option>
        <option value="DEV103">2GEOCM-201 / 2GEOCM-202 / 2GEOCM-203 / 2GEOCM-204 / 2GOCF-201</option>
        <option value="DEV104">2GEOCF 202 / 2GEOCF 203 / 2GEORH 201 / 2AAOC 201</option>
        <option value="DEV105">2AAOCP 201 / 2AAOG 201 / 3GEOCM 301 / 3GEOCM 302</option>
        <option value="DEV106">3GEOCM 303 / 3GEOCM 304 / 3GEOCM 305 / 3GEOCM 306 / 3GEOCF 301</option>
        <option value="DEV107">3GEOCF 301 / 3GEOCF 302 / 3GEOCF 303 / 3GEORH 301 / 3GEORH 302 / 3AAOC 301</option>
        <option value="DEV108">3AAOCP 301 / 3AAOG 301 / 3AAOG 302</option>
    </select>
</div>

<div class="schedule-container">
    <img class="imgallo" id="dd101" src="emploi du temps pic/101.png" />
    <img class="imgallo" id="DEV101" src="emploi du temps pic/CONTINUE 101.png" />
    <img class="imgallo" id="DEV102" src="emploi du temps pic/COONTINUE 101.png" />
    <img class="imgallo" id="DEV103" src="emploi du temps pic/202.png" />
    <img class="imgallo" id="DEV104" src="emploi du temps pic/CONINUE 202.png" />
    <img class="imgallo" id="DEV105" src="emploi du temps pic/COONTINUE 202.png" />
    <img class="imgallo" id="DEV106" src="emploi du temps pic/COOONTINUE 202.png" />
    <img class="imgallo" id="DEV107" src="emploi du temps pic/COOOOONTINE 202.png" />
    <img class="imgallo" id="DEV108" src="emploi du temps pic/emploi.png" />
</div>
            <!-- script dial drop menu emploi -->
    <script>
// Get references to the dropdown and images
const dropdown = document.getElementById("group");
const images = document.querySelectorAll(".schedule-container img");

// Add change event listener to the dropdown
dropdown.addEventListener("change", function () {
    const selectedGroup = dropdown.value;

    // Hide all images
    images.forEach((img) => {
        img.style.display = "none";
    });

    // Show the selected group's image
    const selectedImage = document.getElementById(selectedGroup);
    if (selectedImage) {
        selectedImage.style.display = "block";
    } else {
        console.warn("No image found for the selected group:", selectedGroup);
    }
});

// Optional: Trigger the change event on page load to show the default selected image
window.addEventListener("load", () => {
    dropdown.dispatchEvent(new Event("change"));
});
      </script>

<!-- footer -->
  <?php 
       
       include("footer.html") ;
  
  ?>    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>

</body>
</html>