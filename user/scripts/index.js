

const navbar = document.getElementById('navbar');
const navbarToggle = document.getElementById('navbarToggle');

navbarToggle.addEventListener('click', () => {
  navbar.classList.toggle('-translate-x-full');
});


/// JavaScript to make the carousel slide with next and prev buttons

const carousel = document.querySelector('.carousel');
const carousel1 = document.querySelector('.carousel1');
const carousel2 = document.querySelector('.carousel2');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');
const prevBtn1 = document.querySelector('.prev-btn1');
const nextBtn1 = document.querySelector('.next-btn1');
const prevBtn2 = document.querySelector('.prev-btn2');
const nextBtn2 = document.querySelector('.next-btn2');

let translateX = 0;
let slideWidth = 25; // 1 item width

function updateSlideWidth() {
  // Update the slideWidth based on the number of items visible per row
  const windowWidth = window.innerWidth;
  if (windowWidth >= 1024) {
    slideWidth = 25;
  } else if (windowWidth >= 768) {
    slideWidth = 50;
  } else {
    slideWidth = 100;
  }
}

function slideNext() {
  translateX -= slideWidth;
  if (translateX < -slideWidth * 2) {
    translateX = 0;
  }
  carousel.style.transform = `translateX(${translateX}%)`;
}
function slideNext1() {
  translateX -= slideWidth;
  if (translateX < -slideWidth * 2) {
    translateX = 0;
  }
  carousel1.style.transform = `translateX(${translateX}%)`;
}
function slideNext2() {
  translateX -= slideWidth;
  if (translateX < -slideWidth * 2) {
    translateX = 0;
  }
  carousel2.style.transform = `translateX(${translateX}%)`;
}

function slidePrev() {
  translateX += slideWidth;
  if (translateX > 0) {
    translateX = -slideWidth * 2;
  }
  carousel.style.transform = `translateX(${translateX}%)`;
  carousel1.style.transform = `translateX(${translateX}%)`;
  carousel2.style.transform = `translateX(${translateX}%)`;
}
function slidePrev1() {
  translateX += slideWidth;
  if (translateX > 0) {
    translateX = -slideWidth * 2;
  }
  carousel1.style.transform = `translateX(${translateX}%)`;
}
function slidePrev2() {
  translateX += slideWidth;
  if (translateX > 0) {
    translateX = -slideWidth * 2;
  }
  carousel2.style.transform = `translateX(${translateX}%)`;
}

// Initial slide width update
updateSlideWidth();

// Handle slide width update on window resize
window.addEventListener('resize', () => {
  updateSlideWidth();
});

nextBtn.addEventListener('click', slideNext);
prevBtn.addEventListener('click', slidePrev);
nextBtn1.addEventListener('click', slideNext1);
prevBtn1.addEventListener('click', slidePrev1);
nextBtn2.addEventListener('click', slideNext2);
prevBtn2.addEventListener('click', slidePrev2);







