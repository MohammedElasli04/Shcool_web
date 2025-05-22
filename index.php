<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OFPPT ISTA-Roches Noires</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images&videos/ofppt.png"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div id="intro">
        <video autoplay muted playsinline>
            <source src="images&videos/intro3.mp4" type="video/mp4"> <!-- Replace with your video file -->
            Votre navigateur ne prend pas en charge la balise vidéo.
        </video>
    </div>
    
    <!-- Script pour l'introduction -->
    <script>
        window.onload = function() {
            const intro = document.getElementById('intro');
            const content = document.getElementById('content');

            // Démarrer la transition après un délai
            setTimeout(() => {
                // Fade out la section d'introduction
                intro.style.transition = 'opacity 1s ease-in-out';
                intro.style.opacity = '0';

                // Afficher le contenu après l'animation
                setTimeout(() => {
                    intro.style.display = 'none'; // Cacher l'introduction
                    content.style.display = 'block'; // Afficher le contenu
                    content.style.opacity = '1'; // Fade in le contenu
                }, 500); // Correspondre à la durée de transition d'opacité
            }, 2200); // Durée avant de disparaître
        };
    </script> 

    <div id="content">
       <?php
       
          include("header.html");

       ?>

        <!-- Image de fond et lignes -->
        <div class="animated-section">
            <div class="lines">
                <div class="line top"></div>
                <div class="line bottom"></div>
            </div>
        </div>
        
        <div class="text-container">
            <h1 class="typing-text">Institut Spécialisé de Technologie Appliquée <br>
                <span>Roches Noires</span> 
            </h1>
        </div>
        
        <!-- Section de fond -->
        <div class="container1"></div>

        <!-- JavaScript -->
        <script>
            const menuToggle = document.querySelector('.menu-toggle');
            const navLinks = document.querySelector('.nav-links');

            menuToggle.addEventListener('click', () => {
                navLinks.classList.toggle('active');
            });
        </script>

        <section>
            <div class="starter-text">
                <h1 align="center">Bienvenue dans notre ISTA <br>
                    Nous sommes <del>un établissement</del> <b>une famille</b>
                </h1>
            </div>
        </section>

        <!-- Section histoire -->
        <div class="history-section">  
            <div class="history-content">  
                <h2 align="center">Qui sommes-nous ?</h2>  
                <p>En 1932, <span style="color: #007BFF;">L'Institut Spécialisé de Technologie Appliquée Roches Noires</span> a été fondé. Au fil des années, il a évolué pour devenir une institution prestigieuse dédiée à la technologie appliquée, intégrant le réseau de l'OFPPT. Aujourd'hui, il reste un centre de formation professionnelle incontournable à Casablanca.</p>  
                <div class="history-card">  
                    <i class="fa-regular fa-clock fa-xl" style="color: #74C0FC;"></i>          
                    <div>  
                        <h3>Des décennies d'excellence</h3>  
                        <p>Dévoué à l'innovation académique et à la réussite des stagiaires.</p>  
                    </div>  
                </div>  
                <a href="A-propos.html" style="color: #007BFF; text-decoration: none; font-size: 16px; margin-top: 15px; display: inline-block;">En savoir plus sur notre ISTA →</a>  
            </div>  
            <div class="images-container">  
                <img src="images&videos/activite2.jpg" class="image-left">  
                <img src="images&videos/class1.jpg" class="image-right">  
            </div>  
        </div>  

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>  
        
        <!-- Section statistique -->
        <section>
            <div class="stats-section">
                <div class="stats-container">
                    <div class="stat-item">
                        <div class="number">2000+</div>
                        <div>Stagiaires</div>
                    </div>
                    <div class="stat-item">
                        <div class="number">25+</div>
                        <div>Formateurs et formatrices</div>
                    </div>
                    <div class="stat-item">
                        <div class="number">3</div>
                        <div>Filieres</div>
                    </div>
                    <div class="stat-item">
                        <div class="number">97%</div>
                        <div>Taux de réussite</div>
                    </div>
                </div>
            </div> 
            <br><br>
<!-- Liens rapides -->
            <section class="campus-life-activities">
                <h2>Service Pédagogique</h2>
                <div class="row">
                    <div class="activity-box">
                        <i class="fas fa-calendar-alt"></i>
                        <a href="emploi-du-temps.html" target="_blank"><h3>Emploi du Temps</h3></a>
                        <p>Consultez votre emploi du temps détaillé pour la semaine.</p>
                    </div>
                    <div class="activity-box">
                        <i class="fas fa-calendar-check"></i>
                        <a href="efm.html" target="_blank"><h3>Calendrier Des EFM</h3></a>
                        <p>Découvrez les EMF régionaux à venir.</p>
                    </div>
                    <div class="activity-box">
                        <i class="fas fa-file-alt"></i>
                        <a href="https://www.ofppt.ma/fr/reglement-interieur" target="_blank"><h3>Règlement Intérieur</h3></a>
                        <p>Consultez le règlement intérieur de l'établissement.</p>
                    </div>
                    <div class="activity-box">
                        <i class="fas fa-calendar-week"></i>
                        <a href="planing.html" target="_blank"><h3>Planification des Activités Parascolaires</h3></a> 
                        <p>Découvrez le planning des activités parascolaires.</p>
                    </div>
                </div>
            </section>
        </section>
            
        <section class="hidden">
            <main>
                <div class="content-container">
                    <div class="item">
                        <div class="director-section">
                            <div class="director-container">
                                <!-- Section image à gauche -->
                                <div class="director-image">
                                    <i class="fas fa-quote-left quote-icon"></i>
                                    <img src="images&videos/zira3i.png" alt="Image du Directeur">
                                </div>
                                
                                <!-- Section texte à droite -->
                                <div class="director-text">
                                    <h2>Message du Directeur</h2>
                                    <blockquote>
                                        "Dans notre ISTA, nous croyons en la formation non seulement des esprits, mais aussi des caractères. Notre engagement envers l'excellence, l'innovation et l'éducation inclusive a façonné des milliers de carrières réussies. Nous vous invitons à faire partie de notre héritage continu de leadership et d'accomplissement."
                                    </blockquote>
                                    <p class="author">Dr. Ziraai</p>
                                    <p class="role">Directeur, ISTA Roches Noires</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </section>

        <!-- Images des activités -->
        <section class="celebration-section">
            <div class="celebration-image animate-on-scroll">
                <img src="images&videos/photo11.jpeg" alt="Image de Célébration">
            </div>
            <div class="celebration-text animate-on-scroll">
                <h2>Célébrer notre fierté nationale</h2> 
                <p>L'attachement de notre établissement aux valeurs patriotiques et à l'identité marocaine est inévitable. À travers ce tableau d'affichage, décoré des drapeaux du Maroc et de projets réalisés par nos stagiaires, nous mettons en avant notre héritage culturel et notre unité nationale. Célébrer les fêtes nationales et rester connectés aux grands événements de notre pays est une priorité pour nous. Ces moments renforcent notre fierté d'appartenir à cette nation riche en histoire et en traditions, et permettent de transmettre ces valeurs précieuses aux générations futures.</p>
            </div>
        </section>

        <section class="celebration-section">
            <div class="celebration-text animate-on-scroll">
                <h2>"Dans notre établissement,</h2> 
                <p>les activités parascolaires occupent une place essentielle dans le développement des compétences et des valeurs de nos stagiaires. Lors de notre événement consacré à la sécurité routière, nous avons mis l'accent sur la sensibilisation en abordant des sujets cruciaux pour la vie quotidienne. Ce type d’initiative vise à éduquer et à responsabiliser les étudiants tout en renforçant leur rôle actif dans la société. Grâce à des ateliers interactifs et des discussions enrichissantes, nous encourageons nos élèves à devenir des citoyens conscients et engagés, prêts à relever les défis de demain." </p>       
            </div>
            <div class="celebration-image animate-on-scroll">
                <img src="images&videos/sensibilisation-routiere.jpeg" alt="Image de Célébration">
            </div>
        </section>

        <br><br>
        <div>
            <h2 align="center" class="formateur-titre">"Nos <span>formateurs</span> inspirants et nos <span>stagiaires</span> appréciés 
                sont la fierté de notre institution, <br> créant une communauté <span>harmonieuse</span> et <span>respectueuse</span>."
            </h2>
            <br>
        </div>
        
        <div class="formateur-container">
            <img class="formateur2" src="images&videos/formateur4.png" alt="Image Statique">
            <img class="formateur1" src="images&videos/formateur.png" alt="Image Statique">
            <img class="formateur3" src="images&videos/formateur3.png" alt="Image Statique">
        </div>

        <div class="navigation-buttons">
            <i id="prevBtn" class="fa-solid fa-angle-left"></i>
            <i id="nextBtn" class="fa-solid fa-angle-right"></i>
        </div>

        <script>
            const container = document.querySelector('.formateur-container');
            const cards = Array.from(container.children);
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');

            // Fonction pour déplacer la carte du dessus à l'arrière
            function moveNext() {
                const firstCard = cards[0];
                container.appendChild(firstCard); // Déplacer la première carte à la fin
                cards.push(cards.shift()); // Mettre à jour l'ordre du tableau
                updateZIndex();
            }

            // Fonction pour déplacer la dernière carte à l'avant
            function movePrev() {
                const lastCard = cards[cards.length - 1];
                container.insertBefore(lastCard, cards[0]); // Déplacer la dernière carte à l'avant
                cards.unshift(cards.pop()); // Mettre à jour l'ordre du tableau
                updateZIndex();
            }

            // Fonction pour mettre à jour le z-index pour un empilement correct
            function updateZIndex() {
                cards.forEach((card, index) => {
                    card.style.zIndex = cards.length - index;
                });
            }

            // Attacher des écouteurs d'événements aux boutons
            nextBtn.addEventListener('click', moveNext);
            prevBtn.addEventListener('click', movePrev);

            // Initialisation du z-index
            updateZIndex();
        </script>

        <!-- JavaScript -->
        <script>
            // Sélectionner tous les éléments à animer
            const elementsToAnimate = document.querySelectorAll('.animate-on-scroll');

            // Créer l'Intersection Observer
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate'); // Ajouter la classe "animate" quand visible
                        observer.unobserve(entry.target); // Arrêter d'observer pour déclencher une seule fois
                    }
                });
            }, { threshold: 0.5 }); // Déclencher quand 50% de l'élément est visible

            // Observer chaque élément
            elementsToAnimate.forEach(element => observer.observe(element));
        </script>

        <!-- Footer -->
       <?php 
       
            include("footer.html") ;
       
       ?>
        <!-- Animation au défilement -->
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const items = document.querySelectorAll('.item');

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('active');
                        }
                    });
                }, { threshold: 0.2 }); // Déclencher quand 20% de l'élément est visible

                items.forEach(item => observer.observe(item));
            });
        </script>

        <div class="conteur">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
            <!-- Typing effect -->
        </div> 

        <script>
            window.addEventListener('mouseover', initLandbot, { once: true });
            window.addEventListener('touchstart', initLandbot, { once: true });
            var myLandbot;

            function initLandbot() {
                if (!myLandbot) {
                    var s = document.createElement('script');
                    s.type = "module";
                    s.async = true;
                    s.addEventListener('load', function() {
                        myLandbot = new Landbot.Livechat({
                            configUrl: 'https://storage.googleapis.com/landbot.online/v3/H-2769681-2WC512VHJAMHQRQB/index.json',
                        });
                    });
                    s.src = 'https://cdn.landbot.io/landbot-3/landbot-3.0.0.mjs';
                    var x = document.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                }
            }
        </script>
        <script>
            window.addEventListener('mouseover', initLandbot, { once: true });
            window.addEventListener('touchstart', initLandbot, { once: true });
            var myLandbot;
            function initLandbot() {
              if (!myLandbot) {
                var s = document.createElement('script');
                s.type = "module"
                s.async = true;
                s.addEventListener('load', function() {
                  var myLandbot = new Landbot.Livechat({
                    configUrl: 'https://storage.googleapis.com/landbot.online/v3/H-2769681-2WC512VHJAMHQRQB/index.json',
                  });
                });
                s.src = 'https://cdn.landbot.io/landbot-3/landbot-3.0.0.mjs';
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
              }
            }
            </script>
    </body>
</html>
