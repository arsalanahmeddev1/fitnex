import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {
  if (window.innerWidth < 1025) {
    AOS.init({
      disable: true
    });
  } else {
    AOS.init();
  }
});

let navs = document.querySelector('.primary-navs')
let menuIcon = document.querySelectorAll('.menu-toggle')
console.log(navs, menuIcon);
menuIcon.forEach(function (e) {
  e.addEventListener('click', function () {
    navs.classList.toggle('active');
  });
});

$('.fitness-journey-slider').slick({
  dots: true,
  arrows: true,
  nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>', // Custom next arrow
  prevArrow: null, // Hide the prev arrow
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  centerMode: true,
  centerPadding: '400px',
  slidesToScroll: 1,
  centerMode: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        centerPadding: '0',
        arrows: false,

      }
    },

  ]
});


$('.testimonials-slider').slick({
  dots: true,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 4000,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
$('.slider-01').slick({
  dots: false,
  arrows: false,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 0,
  swipe: false,
  draggable: false,
  speed: 6000,
  cssEase: 'linear',
  slidesToShow: 6,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
      }
    },

    {
      breakpoint: 1440,
      settings: {
        slidesToShow: 5,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
      }
    },
   
  ]
});
$('.slider-02').slick({
  dots: false,
  arrows: false,
  infinite: true,
  autoplay: true,
  swipe: false,
  draggable: false,
  autoplaySpeed: 0,
  speed: 6000,
  cssEase: 'linear',
  slidesToShow: 6,
  rtl: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
      }
    },

    {
      breakpoint: 1440,
      settings: {
        slidesToShow: 5,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
      }
    },
   
  ]
});




const cursorCard = document.getElementById('cursor-card');
const cursorCardTitle = document.getElementById('cursor-card-title');
const cursorCardDescription = document.getElementById('cursor-card-description');
const cursorCardPrice = document.getElementById('cursor-card-price');
const trainerCards = document.querySelectorAll('.trainer-card');

gsap.set(cursorCard, { scale: 0, opacity: 0 });

trainerCards.forEach(card => {
  const trainerTitle = card.dataset.title;
  const trainerDescription = card.dataset.description;
  const trainerPrice = card.dataset.price;

  card.addEventListener('mouseenter', (e) => {
    cursorCardTitle.textContent = trainerTitle;
    cursorCardDescription.textContent = trainerDescription;
    cursorCardPrice.textContent = trainerPrice;

    gsap.to(cursorCard, {
      duration: 0.3,
      scale: 1,
      opacity: 1,
      ease: 'power3.out'
    });
  });

  card.addEventListener('mousemove', (e) => {
    gsap.to(cursorCard, {
      duration: 0.3,
      x: e.clientX + 15,
      y: e.clientY + 15,
      ease: 'power3.out'
    });
  });

  card.addEventListener('mouseleave', () => {
    gsap.to(cursorCard, {
      duration: 0.3,
      scale: 0,
      opacity: 0,
      ease: 'power3.in'
    });
  });
});


let count = document.querySelectorAll(".count")

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const item = entry.target;
            const isKiloCounter = item.dataset.number === '100000';
            const targetNumber = isKiloCounter ? 100 : parseInt(item.dataset.number, 10);
            const initialText = item.innerText;
            const prefix = initialText.match(/^[^\d]*/)?.[0] || '';
            const suffix = isKiloCounter ? 'k' : '';

            let startnumber = 0;
            item.innerHTML = prefix + '0' + suffix;

            const animationDuration = 2000; // 2 seconds
            const stepDuration = 20;
            const totalSteps = animationDuration / stepDuration;
            const increment = targetNumber / totalSteps;

            const counterup = () => {
                startnumber += increment;

                if (startnumber >= targetNumber) {
                    item.innerHTML = prefix + targetNumber + suffix;
                    clearInterval(stop);
                } else {
                    item.innerHTML = prefix + Math.ceil(startnumber) + suffix;
                }
            }

            let stop = setInterval(counterup, stepDuration);
            observer.unobserve(item);
        }
    });
}, {
    threshold: 0.25
});

count.forEach(item => {
    observer.observe(item);
});

