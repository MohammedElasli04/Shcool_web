<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/A-propos.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="x-icon" href="images&videos/ofppt.png"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>a-propos</title>
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
        <h1 class="typing-text">À Propos de<br>
            <span>Nous</span> 
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
    <section>
        <div class="starter-text">
            <h1 align="center">Bienvenue dans notre ISTA <br>
            <br>
            </h1>
        </div>
    </section>
        
    <section class="celebration-section">
        <div class="celebration-image animate-on-scroll">
            <img src="images&videos/roche noire.jpg" alt="Image de Célébration">
        </div>
        <div class="celebration-text animate-on-scroll">
            <h2>Qui sommes-nous ?</h2>
            <p>L'Institut Spécialisé de Technologie Appliquée Roches Noires. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorem deleniti labore laboriosam commodi, iusto nostrum porro soluta. Sed enim perferendis quos exercitationem. Ad obcaecati unde ipsum, accusantium magnam quo asperiores.</p>
        </div>
    </section>
        
    <section>
        <!-- organigram -->
        <div class="organigram">      
            <div class="search-container">
                <span>Chercher :</span>
                <input type="text" id="search" placeholder="Search..." onkeyup="filterMembers()">
            </div>
            
            <!-- Top Level: President -->
            <div class="level">
                <div class="box" onclick="toggleInfo(this)">
                    <img src="" alt="Directeur Régional"> <!-- Replace with actual image -->
                    <h3>Directeur Régional</h3>
                    <div class="info">
                        <strong>Rôle :</strong> Leader<br>
                        <strong>Fun Fact :</strong> Aime peindre !
                    </div>
                </div>
            </div>
            
            <!-- Second Level: Director -->
            <div class="level">
                <div class="box" onclick="toggleInfo(this)">
                    <img src="images&videos/director.jpg" alt="Directeur"> <!-- Replace with actual image -->
                    <h3>Directeur</h3>
                    <div class="info">
                        <strong>Rôle :</strong> Supervise les opérations<br>
                        <strong>Fun Fact :</strong> Aime le jardinage !
                    </div>
                </div>
            </div>
            
            <!-- Third Level: One Staff Member -->
            <div class="level">
                <div class="box" onclick="toggleInfo(this)">
                    <img src="staff1.jpg" alt="Membre du Personnel"> <!-- Replace with actual image -->
                    <h3>Chef de Direction</h3>
                    <div class="info">
                        <strong>Rôle :</strong> Enseignant<br>
                        <strong>Fun Fact :</strong> Aime la randonnée !
                    </div>
                </div>
            </div>
            
            <!-- Fourth Level: Two Staff Members -->
            <div class="level">
                <div class="box" onclick="toggleInfo(this)">
                    <img src="images&videos/staff2.jpg" alt="Membre du Personnel 1"> <!-- Replace with actual image -->
                    <h3>Direction 1</h3>
                    <div class="info">
                        <strong>Rôle :</strong> Conseiller<br>
                        <strong>Fun Fact :</strong> Aime cuisiner !
                    </div>
                </div>
                <div class="box" onclick="toggleInfo(this)">
                    <img src="images&videos/staff3.jpg" alt="Membre du Personnel 2"> <!-- Replace with actual image -->
                    <h3>Direction 2</h3>
                    <div class="info">
                        <strong>Rôle :</strong> Bibliothécaire<br>
                        <strong>Fun Fact :</strong> Lecteur avide !
                    </div>
                </div>
            </div>
            
            <!-- Fifth Level: One Student-Related Staff (Conseiller) -->
            <div class="level">
                <div class="box" onclick="toggleInfo(this)">
                    <img src="images&videos/conseiller.jpg" alt="Conseiller"> <!-- Replace with actual image -->
                    <h3>Conseiller</h3>
                    <div class="info">
                        <strong>Rôle :</strong> Orientation<br>
                        <strong>Fun Fact :</strong> Aime la photographie !
                    </div>
                </div>
            </div>
            
            <!-- First 13 Trainers -->
            <div class="level" id="level">
                <div class="box" onclick="toggleInfo(this)">
                    <img src="images&videos/trainer1.jpg" alt="Formateur 1"><h3>Formateur 1</h3>
                    <div class="info">
                        <strong>Rôle :</strong> Formateur de Mathématiques<br>
                        <strong>Fun Fact :</strong> Joue de la guitare !
                    </div>
                </div>
                <div class="box" onclick="toggleInfo(this)">
                    <img src="images&videos/trainer2.jpg" alt="Formateur 2"><h3>Formateur 2</h3>
                    <div class="info">
                        <strong>Rôle :</strong> Formateur de Sciences<br>
                        <strong>Fun Fact :</strong> Aime voyager !
                    </div>
                </div>
                <div class="box" onclick="toggleInfo(this)">
                    <img src="images&videos/trainer3.jpg" alt="Formateur 3"><h3>Formateur 3</h3>
                    <div class="info">
                        <strong>Rôle :</strong> Formateur d'Histoire<br>
                        <strong>Fun Fact :</strong> Aime les échecs !
                    </div>
                </div>
                <div class="box" onclick="toggleInfo(this)">
                    <img src="images&videos/trainer4.jpg" alt="Formateur 4"><h3>Formateur 4</h3>
                    <div class="info">
                        <strong>Rôle :</strong> Formateur de Langues<br>
                        <strong>Fun Fact :</strong> Aime peindre !
                    </div>
                </div>
                <div class="box" onclick="toggleInfo(this)">
                    <img src="images&videos/trainer5.jpg" alt="Formateur 5"><h3>Formateur 5</h3>
                    <div class="info">
                        <strong>Rôle :</strong> Formateur d'EPS<br>
                        <strong>Fun Fact :</strong> Aime le sport !
                    </div>
                </div>
                <div class="box" onclick="toggleInfo(this)">
                    <img src="images&videos/trainer6.jpg" alt="Formateur 6"><h3>Formateur 6</h3>
                    <div class="info">
                        <strong>Rôle :</strong> Formateur d'Art<br>
                        <strong>Fun Fact :</strong> Aime la sculpture !
                    </div>
                </div>
                <div class="box" onclick="toggleInfo(this)">
                    <img src="images&videos/trainer7.jpg" alt="Formateur 7"><h3>Formateur 7</h3>
                    <div class="info">
                        <strong>Rôle :</strong> Formateur de Musique<br>
                        <strong>Fun Fact :</strong> Joue de plusieurs instruments !
                    </div>
                </div>
                <div class="box" onclick="toggleInfo(this)">
                    <img src="images&videos/trainer8.jpg" alt="Formateur 8"><h3>Formateur 8</h3>
                    <div class="info">
                        <strong>Rôle :</strong> Formateur en Tech<br>
                        <strong>Fun Fact :</strong> Aime coder !
                    </div>
                </div>
                <div class="box" onclick="toggleInfo(this)">
                    <img src="images&videos/trainer9.jpg" alt="Formateur 9"><h3>Formateur 9</h3>
                    <div class="info">
                        <strong>Rôle :</strong> Formateur de Géographie<br>
                        <strong>Fun Fact :</strong> Aime la randonnée !
                    </div>
                </div>
                <div class="box" onclick="toggleInfo(this)">
                    <img src="images&videos/trainer10.jpg" alt="Formateur 10"><h3>Formateur 10</h3>
                    <div class="info">
                        <strong>Rôle :</strong> Formateur de Théâtre<br>
                        <strong>Fun Fact :</strong> Aime jouer !
                    </div>
                </div>
                <div class="box" onclick="toggleInfo(this)">
                    <img src="images&videos/trainer11.jpg" alt="Formateur 11"><h3>Formateur 11</h3>
                    <div class="info">
                        <strong>Rôle :</strong> Formateur de Danse<br>
                        <strong>Fun Fact :</strong> Aime se produire !
                    </div>
                </div>
                <div class="box" onclick="toggleInfo(this)">
                    <img src="images&videos/trainer12.jpg" alt="Formateur 12"><h3>Formateur 12</h3>
                    <div class="info">
                        <strong>Rôle :</strong> Formateur de Santé<br>
                        <strong>Fun Fact :</strong> Aime cuisiner !
                    </div>
                </div>
                <div class="box" onclick="toggleInfo(this)">
                    <img src="images&videos/trainer13.jpg" alt="Formateur 13"><h3>Formateur 13</h3>
                    <div class="info">
                        <strong>Rôle :</strong> Formateur en Affaires<br>
                        <strong>Fun Fact :</strong> Aime le networking !
                    </div>
                </div>
            </div>
            
            <!-- Clickable Text to Show Additional Trainers -->
            <div class="expand-trainers" onclick="toggleAdditionalTrainers()">
                Cliquez ici pour voir plus
            </div>
            
            <!-- Additional Trainers Section -->
            <div id="additional-trainers" class="additional-trainers">
                <div class="level">
                    <div class="box" onclick="toggleInfo(this)">
                        <img src="images&videos/trainer14.jpg" alt="Formateur 14"><h3>Formateur 14</h3>
                        <div class="info">
                            <strong>Rôle :</strong> Formateur de Mathématiques<br>
                            <strong>Fun Fact :</strong> Aime les puzzles !
                        </div>
                    </div>
                    <div class="box" onclick="toggleInfo(this)">
                        <img src="images&videos/trainer15.jpg" alt="Formateur 15"><h3>Formateur 15</h3>
                        <div class="info">
                            <strong>Rôle :</strong> Formateur de Sciences<br>
                            <strong>Fun Fact :</strong> Aime les expériences !
                        </div>
                    </div>
                    <div class="box" onclick="toggleInfo(this)">
                        <img src="images&videos/trainer16.jpg" alt="Formateur 16"><h3>Formateur 16</h3>
                        <div class="info">
                            <strong>Rôle :</strong> Formateur d'Histoire<br>
                            <strong>Fun Fact :</strong> Historien avide !
                        </div>
                    </div>
                    <div class="box" onclick="toggleInfo(this)">
                        <img src="images&videos/trainer17.jpg" alt="Formateur 17"><h3>Formateur 17</h3>
                        <div class="info">
                            <strong>Rôle :</strong> Formateur de Langues<br>
                            <strong>Fun Fact :</strong> Aime la poésie !
                        </div>
                    </div>
                    <div class="box" onclick="toggleInfo(this)">
                        <img src="images&videos/trainer18.jpg" alt="Formateur 18"><h3>Formateur 18</h3>
                        <div class="info">
                            <strong>Rôle :</strong> Formateur d'EPS<br>
                            <strong>Fun Fact :</strong> Aime le fitness !
                        </div>
                    </div>
                    <div class="box" onclick="toggleInfo(this)">
                        <img src="images&videos/trainer19.jpg" alt="Formateur 19"><h3>Formateur 19</h3>
                        <div class="info">
                            <strong>Rôle :</strong> Formateur d'Art<br>
                            <strong>Fun Fact :</strong> Aime peindre !
                        </div>
                    </div>
                    <div class="box" onclick="toggleInfo(this)">
                        <img src="images&videos/trainer20.jpg" alt="Formateur 20"><h3>Formateur 20</h3>
                        <div class="info">
                            <strong>Rôle :</strong> Formateur de Musique<br>
                            <strong>Fun Fact :</strong> Aime chanter !
                        </div>
                    </div>
                    <div class="box" onclick="toggleInfo(this)">
                        <img src="images&videos/trainer21.jpg" alt="Formateur 21"><h3>Formateur 21</h3>
                        <div class="info">
                            <strong>Rôle :</strong> Formateur en Tech<br>
                            <strong>Fun Fact :</strong> Aime jouer !
                        </div>
                    </div>
                    <div class="box" onclick="toggleInfo(this)">
                        <img src="images&videos/trainer22.jpg" alt="Formateur 22"><h3>Formateur 22</h3>
                        <div class="info">
                            <strong>Rôle :</strong> Formateur de Géographie<br>
                            <strong>Fun Fact :</strong> Aime voyager !
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
        <!-- script d'organigram -->
    <script>
        function toggleInfo(box) {
            const info = box.querySelector('.info');
            info.style.display = info.style.display === 'block' ? 'none' : 'block';
        }
        
        function filterMembers() {
            const input = document.getElementById('search').value.toLowerCase();
            const boxes = document.getElementsByClassName('box');
            for (let i = 0; i < boxes.length; i++) {
                const name = boxes[i].getElementsByTagName('h3')[0].innerText.toLowerCase();
                boxes[i].style.display = name.includes(input) ? '' :
                boxes[i].style.display = name.includes(input) ? '' : 'none';
            }
        }
        function toggleAdditionalTrainers() {
            const additionalTrainers = document.getElementById('additional-trainers');
            additionalTrainers.style.display = additionalTrainers.style.display === 'block' ? 'none' : 'block';
        }
        
        function toggleOrganigram() {
            const organigram = document.getElementById('organigram');
            organigram.style.display = organigram.style.display === 'block' ? 'none' : 'block';
        }
    </script>
<!-- Les cartes avec les infos des stagiaires, formateurs, etc. -->
    <section>
        <div class="card-container">
            <div class="card">
                <img src="images&videos/image.jpg" alt="Image 1">
                <div class="card-title">Nos Stagiaires</div>
                <div class="card-paragraph">Nos stagiaires sont au cœur de notre institution, apportant diversité et motivation. Nous créons un environnement d'apprentissage stimulant où chacun peut développer ses compétences. Grâce à des programmes adaptés et un accompagnement personnalisé, nous les préparons à exceller dans leur future carrière.</div>
            </div>
            <div class="card">
                <img src="images&videos/formateur4.png" alt="Image 2">
                <div class="card-title">Nos Formateurs</div>
                <div class="card-paragraph">Nos formateurs sont des experts passionnés, dédiés à l'enseignement. Avec une approche pédagogique innovante, ils favorisent l'interaction et l'échange d'idées, garantissant ainsi une formation de haute qualité. Ils s'assurent que chaque stagiaire acquiert les compétences nécessaires pour réussir professionnellement.</div>
            </div>
            <div class="card">
                <img src="images&videos/class1.jpg" alt="Image 3">
                <div class="card-title">Notre Mission</div>
                <div class="card-paragraph">Notre mission est de fournir une éducation de qualité qui prépare nos stagiaires aux défis du marché du travail. En alliant théorie et pratique, nous formons des professionnels compétents et responsables, prêts à innover et à contribuer positivement à leur secteur.</div>
            </div>
        </div>
    </section>
<!-- Section d'Appréciation -->
    <div class="appreciation">
        <h2>Appréciation Spéciale</h2>
        <div class="team">
            <div class="team-member">
                <h4>Équipe de Sécurité</h4>
                <p>Mr. Hassane</p>
                <p>Mr. Ibrahim</p>
            </div>
            <div class="team-member">
                <h4>Personnel de Nettoyage</h4>
                <p>Mme. Hasnaa</p>
                <p>Mme. Nijdane</p>
            </div>
            <div class="team-member">
                <h4>Personnel de Soutien</h4>
                <p>Photocopy & Support Person</p>
            </div>
        </div>
    </div>
<!-- On-scroll-animation -->
<!-- JavaScript -->
    <script>
        // Select all elements to animate
        const elementsToAnimate = document.querySelectorAll('.animate-on-scroll');
        // Create the Intersection Observer
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate'); // Add the "animate" class when in view
                    observer.unobserve(entry.target); // Stop observing to trigger only once
                }
            });
        }, { threshold: 0.5 }); // Trigger when 50% of the element is visible

        // Observe each element
        elementsToAnimate.forEach(element => observer.observe(element));
    </script>

<!-- Section des activités de la vie du campus -->
    <section class="campus-life-activities">
        <h2>Service Pédagogique</h2>
        <div class="row">
            <div class="activity-box">
                <i class="fas fa-calendar-alt"></i>
                <a href="emploi-du-temps.html"><h3>Emploi du Temps</h3></a>
                <p>Consultez votre emploi du temps détaillé pour la semaine</p>
            </div>
            <div class="activity-box">
                <i class="fas fa-calendar-check"></i>
                <a href="efm.html"><h3>Calendrier des EFM</h3></a>
                <p>Découvrez les EMF régionaux à venir</p>
            </div>
            <div class="activity-box">
                <i class="fas fa-file-alt"></i>
                <a href="https://www.ofppt.ma/fr/reglement-interieur"><h3>Règlement Intérieur</h3></a>
                <p>Consultez le règlement intérieur de l'établissement</p>
            </div>
            <div class="activity-box">
                <i class="fas fa-calendar-week"></i>
                <a href="planing.html"><h3>Planification des Activités Parascolaires</h3></a> 
                <p>Découvrez le planning des activités parascolaires</p>
            </div>
        </div>
    </section>
<!-- Footer -->
    <?php 
        include("footer.html") ;
    ?>
<!-- script-bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
</body>
</html>