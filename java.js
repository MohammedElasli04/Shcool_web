const navLinks = document.querySelectorAll('.nav-link');

navLinks.forEach(link => {
    link.addEventListener('click', (event) => {
        event.preventDefault();
        alert(`You clicked on ${link.textContent}`);
    });
});c
const applyButton = document.querySelector('.apply-button');

applyButton.addEventListener('click', () => {
    alert('Thank you for your interest! We will contact you soon.');
});

const infobutton = document.querySelector('.info-button');

info-button.addEventListener('click' , () => {alert('Here is more information about our programming courses!');
});
// script.js

document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.getElementById('menu-toggle');
    const navbar = document.getElementById('navbar');
    const barsIcon = document.getElementById('bars-icon');
    const closeIcon = document.getElementById('close-icon');

    menuToggle.addEventListener('click', () => {
        navbar.classList.toggle('open');
        barsIcon.style.display = barsIcon.style.display === 'none' ? 'inline' : 'none';
        closeIcon.style.display = closeIcon.style.display === 'none' ? 'inline' : 'none';
    });
});
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        } else {
            entry.target.ClassList.remove('show');
        }
    });
});

const hiddenElements = document.querySelectorAll('.box1');
hiddenElements.forEach((el) => observer.observe(el));
