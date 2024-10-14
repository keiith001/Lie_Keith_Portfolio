console.log("Js is Connected");

// Variables
// =====================

// General Screen Area
const screenSize = window.innerWidth;

// Mobile Navigation
const hamburgerBtn = document.querySelector('.hamburger-btn');
const closeBurgerBtn = document.querySelector('.close-btn');
const offScreen = document.querySelector('.off-screen');

// Functions
// =====================
function openBurger() {
    offScreen.classList.toggle('active');
    console.log('Hamnburger Menu Opened');
}

function closeBurger() {
    offScreen.classList.toggle('active');
    console.log('Hamburger Menu Closed');
}

// Event Listener
// =====================
hamburgerBtn.addEventListener('click', openBurger);
closeBurgerBtn.addEventListener('click', closeBurger)