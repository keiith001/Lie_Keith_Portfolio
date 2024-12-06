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







})();