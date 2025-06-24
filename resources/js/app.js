import './bootstrap';

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
    speed: 6000,
    cssEase: 'linear',
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
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
  $('.slider-02').slick({
    dots: false,
    arrows: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 6000,
    cssEase: 'linear',
    slidesToShow: 5,
    rtl: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
        }
      }
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

