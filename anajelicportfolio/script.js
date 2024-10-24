
const carouselTrack = document.querySelector('.carousel-track');
const leftArrow = document.querySelector('.carousel-arrow.left');
const rightArrow = document.querySelector('.carousel-arrow.right');

let currentIndex = 0; 


const updateCarousel = () => {
    const items = document.querySelectorAll('.carousel-item'); 
    items.forEach((item, index) => {
        item.classList.remove('active'); 
        if (index === currentIndex) {
            item.classList.add('active'); 
        }
    });
  
    carouselTrack.style.transform = `translateX(-${currentIndex * 100}%)`;
};


leftArrow.addEventListener('click', () => {
    if (currentIndex > 0) {
        currentIndex--; 
        updateCarousel(); 
    }
});


rightArrow.addEventListener('click', () => {
    const items = document.querySelectorAll('.carousel-item'); 
    if (currentIndex < items.length - 1) {
        currentIndex++; 
        updateCarousel(); 
    }
});


document.addEventListener('DOMContentLoaded', () => {
    updateCarousel(); 
});


var contactButtons = document.querySelectorAll(".contact-btn");


contactButtons.forEach(function(button) {
    button.addEventListener("click", function(event) {
        event.preventDefault();  
        var popupForm = document.getElementById("popupForm");
        popupForm.style.display = "block";  
    });
});

document.getElementById("closeFormButton").addEventListener("click", function(event) {
    event.preventDefault();  
    document.getElementById("popupForm").style.display = "none";  
});

document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.querySelector('.hamburger');
    const navMenu = document.querySelector('nav ul');

    // Toggle the navigation menu when the hamburger is clicked
    hamburger.addEventListener('click', function() {
        navMenu.classList.toggle('show'); // Toggle 'show' class on nav ul
    });
});
