<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OFPPT Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/efm.css">
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
        <h1 class="typing-text">Calendrier des <b>EFM regional</b> 
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



<!-- Dropdown container -->
<div class="dropdown-container">
    <label for="group" class="select">Select Group:</label>
    <select class="groupefm" id="group">
        <option value="#">calendrier des efm du premiere année</option>
        <option value="dd101">DEVLOPMENT DEGITALE</option>
        <option value="DEV101">GESTION</option>
        <option value="#">calendrier des efm du dexieme année</option>
        <option value="DEV103">GESTION</option>
        <option value="DEV104">GESTION</option>
        <option value="DEV105">GESTION</option>
        <option value="DEV106">GESTION</option>
        <option value="#">calendrier des efm du troisieme année</option>
        <option value="DEV108">GESTION</option>
        <option value="DEV107">GESTION</option>
        <option value="DEV108">GESTION</option>
        <option value="DEV107">GESTION</option>
    </select>
</div>

<!-- Image container -->
<div class="schedule-container">
    <img id="dd101" class="imgallo" src="emploi du temps pic/101.png" />
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