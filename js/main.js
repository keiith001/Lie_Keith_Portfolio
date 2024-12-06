(() => {

console.log("Js is Connected");

// Variables
// =====================

// General Screen Area
const screenSize = window.innerWidth;

// Mobile Navigation
// =====================

// Variables
const hamburgerBtn = document.querySelector('.hamburger-btn');
const closeBurgerBtn = document.querySelector('.close-btn');
const offScreen = document.querySelector('.off-screen');

// Function
function openBurger() {
    offScreen.classList.toggle('active');
    console.log('Hamnburger Menu Opened');
}

function closeBurger() {
    offScreen.classList.toggle('active');
    console.log('Hamburger Menu Closed');
}

// Event Listener
hamburgerBtn.addEventListener('click', openBurger);
closeBurgerBtn.addEventListener('click', closeBurger)

// Floating Animation
// =====================

// Variables
const floatAnim = document.querySelectorAll('.floating-anim');

// Function
floatAnim.forEach((img, index) => {
    gsap.to(img, {
      y: 10,
      rotation: 5,
      repeat: -1,
      yoyo: true,
      ease: "power1.inOut",
      duration: 2,
      delay: index * 0.2
    });
});

// Fade In Transition
// =====================

// Variables
const fadeIn = document.querySelectorAll('.fade-in');

// Function
fadeIn.forEach((fade) => {
    gsap.fromTo(
      fade,
      {opacity: 0, y: 30},

      {
        opacity: 1,
        y: 0,
        duration: 1,
        ease: "power1.out",

        scrollTrigger: {
          trigger: fade,
          start: "top 80%",
          toggleActions: "play none none none",
          markers: false
        }
      }
    );
});

// Works Carousel
// =====================

// Variables
const workCarousel = document.querySelector('#works-catalogue');
const workCard = document.querySelectorAll('.work-card');

// Initial Variables Properties
let currentIndex = 0;
const totalCards = workCard.length;
const cardWidth = workCard[0].offsetWidth + 20;
const autoCarouselTime = 3;

// Function
function moveCarousel(index) {
  if (index < 0) {
    currentIndex = totalCards - 1;
  } else if (index >= totalCards) {
    currentIndex = 0;
  } else {
    currentIndex = index;
  }

  // Smooth Transition with GSAP
  gsap.to(workCarousel, {
    duration: 1,
    x: -currentIndex * cardWidth,
    ease: "power2.inOut",
  });
}

// Touch Sliding Behaviour
let touchStartX = 0;
let touchEndX = 0;

// Sliding Function
function touchStartPoint(e) {
  touchStartX = e.touches[0].clientX;
}

function touchEndPoint(e) {
  touchEndX = e.changedTouches[0].clientX;

  if (touchStartX - touchEndX > 50) {
    // Swipe Left
    moveCarousel(currentIndex + 1);
  } else if (touchEndX - touchStartX > 50) {
    // Swipe Right
    moveCarousel(currentIndex - 1);
  }
}

// Auto Carousel
function autoCarousel() {
  if (window.innerWidth <= 767) {
    setInterval(() => {
      moveCarousel(currentIndex + 1);
    }, autoCarouselTime * 1000);
  } else {
    console.log("Auto Carousel turned off in Tablet and Desktop Size.");
  }
}
// Call Function
moveCarousel(currentIndex);
autoCarousel();

// Event Listener
workCarousel.addEventListener('touchstart', touchStartPoint);
workCarousel.addEventListener('touchend', touchEndPoint);







})();