import './bootstrap';

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
  $('.slider-02').slick({
    dots: false,
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


// Wait for the DOM to be ready
document.addEventListener("DOMContentLoaded", function() {
  const imageWrappers = document.querySelectorAll('.expert-trainers-img-wrapper'); // Get all image wrappers

  imageWrappers.forEach(imageWrapper => {
      const card = imageWrapper.querySelector('.expert-traning-card'); // Get the corresponding card
      const image = imageWrapper.querySelector('img'); // Get the image element
      
      // Set the initial state of the card (hidden)
      gsap.set(card, { opacity: 0, visibility: 'hidden' });

      // Add mouseenter event to show the card when hovering over the image
      imageWrapper.addEventListener('mouseenter', function() {
          gsap.to(card, { opacity: 1, visibility: 'visible', duration: 0.3 }); // Fade-in effect
      });

      // Mousemove event to make the card follow the cursor
      imageWrapper.addEventListener('mousemove', function(e) {
          const mouseX = e.clientX;
          const mouseY = e.clientY;

          // Use GSAP to follow the cursor with a slight offset to the card
          gsap.to(card, {
              x: mouseX + 10, // Slight offset to the right of the cursor
              y: mouseY + 10, // Slight offset to the bottom of the cursor
              duration: 0.2, // Smooth animation
              ease: 'power2.out' // Smooth easing
          });
      });

      // Mouseleave event to hide the card when the mouse leaves the image
      imageWrapper.addEventListener('mouseleave', function() {
          gsap.to(card, { opacity: 0, visibility: 'hidden', duration: 0.3 }); // Fade-out effect
      });
  });
});



const cursorCard = document.getElementById('cursor-card');
const cursorCardImg = document.getElementById('cursor-card-img');
const cursorCardName = document.getElementById('cursor-card-name');
const cursorCardSpecialty = document.getElementById('cursor-card-specialty');
const trainerCards = document.querySelectorAll('.trainer-card');

gsap.set(cursorCard, { scale: 0, opacity: 0 });

trainerCards.forEach(card => {
    const trainerName = card.dataset.name;
    const trainerSpecialty = card.dataset.specialty;
    const trainerImg = card.querySelector('img').src;

    card.addEventListener('mouseenter', (e) => {
        cursorCardName.textContent = trainerName;
        cursorCardSpecialty.textContent = trainerSpecialty;
        cursorCardImg.src = trainerImg;

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

