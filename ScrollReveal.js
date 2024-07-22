const scrollRevealOption = {
    distance: "50px",
    origin: "bottom",
    duration: 850,
    delay: 200,
    interval: 100
  };
  
/************************/
/*     1. populer     */
/************************/


  // header container
  ScrollReveal().reveal(".header__container img", {
    ...scrollRevealOption,
    origin: "right",
  });
  
  ScrollReveal().reveal(".header__container h1", {
    ...scrollRevealOption,
    delay: 500,
  });

  ScrollReveal().reveal(".section__header", {
    ...scrollRevealOption,
    delay: 500,
  });
  
  ScrollReveal().reveal(".header__container .btn", {
    ...scrollRevealOption,
    delay: 1000,
  });
  
  ScrollReveal().reveal(".header__container a", {
    ...scrollRevealOption,
    delay: 1500,
  });
  
  // service container
  ScrollReveal().reveal(".services__card", {
    ...scrollRevealOption,
    interval: 500,
  });
  
  // projects container
  ScrollReveal().reveal(".projects__card", {
    ...scrollRevealOption,
    interval: 500,
  });
  
  // banner container
  ScrollReveal().reveal(".banner__content", scrollRevealOption);
  
  // blogs container
  ScrollReveal().reveal(".blogs__card", {
    ...scrollRevealOption,
    interval: 500,
  });

  /************************/
/*     2. hero     */
/************************/

  
  document.addEventListener('DOMContentLoaded', function() {
    ScrollReveal().reveal('.container_hero', { 
        duration: 2000, // Menambah durasi animasi
        origin: 'bottom',
        distance: '50px'
    });

    ScrollReveal().reveal('.destination__container', { 
        duration: 2000, // Menambah durasi animasi
        origin: 'bottom',
        distance: '50px',
        delay: 700 // Menambah delay
    });

    ScrollReveal().reveal('.socials', { 
        duration: 2000, // Menambah durasi animasi
        origin: 'left',
        distance: '20px',
        delay: 400 // Menambah delay
    });

    ScrollReveal().reveal('.content h1', { 
        duration: 2000, // Menambah durasi animasi
        origin: 'top',
        distance: '50px',
        delay: 500 // Menambah delay
    });

    ScrollReveal().reveal('.content p', { 
        duration: 2000, // Menambah durasi animasi
        origin: 'top',
        distance: '50px',
        delay: 600 // Menambah delay
    });

    ScrollReveal().reveal('.btn', { 
        duration: 2000, // Menambah durasi animasi
        origin: 'bottom',
        distance: '20px',
        delay: 800 // Menambah delay
    });
});

/************************/
/*     3. kategori     */
/************************/

document.addEventListener('DOMContentLoaded', function() {
  ScrollReveal().reveal('#kategori .section__header', {
      duration: 1500,
      origin: 'top',
      distance: '50px'
  });

  ScrollReveal().reveal('#kategori .button-group', {
      duration: 1500,
      origin: 'bottom',
      distance: '50px',
      delay: 200
  });

  ScrollReveal().reveal('#kategori .element-item', {
      duration: 1500,
      origin: 'bottom',
      distance: '50px',
      delay: 300,
      interval: 200
  });
});


/************************/
/*     4. logdes     */
/************************/

document.addEventListener("DOMContentLoaded", function() {
  const filterButtons = document.querySelectorAll('.button[data-filter]');
  const lodgeCards = document.querySelectorAll('#lodges .blogs__card');


  function clearReveals() {
      ScrollReveal().clean(lodgeCards);
  }

  function applyReveal(filter) {
      const filteredCards = document.querySelectorAll(`#lodges .blogs__card${filter}`);
      filteredCards.forEach(card => {
          ScrollReveal().reveal(card, revealOptions);
      });
  }

  filterButtons.forEach(button => {
      button.addEventListener('click', function() {
          const filter = this.getAttribute('data-filter');
          clearReveals(); // Bersihkan semua animasi sebelumnya
          applyReveal(filter); // Terapkan animasi hanya pada elemen yang sesuai dengan filter
      });
  });
});



  // Sembunyikan popup card saat diklik di luar card
  document.addEventListener('click', (event) => {
    if (!popupCard.contains(event.target) && !projectsCards.contains(event.target)) {
      popupCard.style.display = 'none';
    }
  });
  


  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if(entry.isIntersecting) {
            entry.target.idList.add('show');
        } else {
            entry.target.idList.remove('show');
        }
    });
});


const heroElements = document.querySelector('#hero');
hiddenElement.forEach((el)=> observer.observe(el));



window.addEventListener('scroll', function() {
    var nav = document.querySelector('.nav');
    if (window.scrollY > 0) {
        nav.classList.add('scrolled');
    } else {
        nav.classList.remove('scrolled');
    }
});

window.addEventListener('scroll', function() {
    var nav = document.querySelector('.nav');
    if (window.scrollY > 0) {
        nav.classList.add('border');
    } else {
        nav.classList.remove('border');
    }
});

window.addEventListener('scroll', function() {
    var nav = document.querySelector('.nav');
    if (window.scrollY > 0) {
        nav.classList.add('blur');
    } else {
        nav.classList.remove('blur');
    }
});


document.addEventListener("DOMContentLoaded", function () {
  // Inisialisasi Swiper
  var swiper = new Swiper(".swiper-container", {
    // Opsi Swiper di sini
    slidesPerView: 3,
    spaceBetween: 30,
    // Tambahan opsi Swiper lainnya...
  });

  // Tambahkan event listener untuk tombol swipe
  const swipeButton = document.getElementById("swipeButton");
  swipeButton.addEventListener("click", function () {
    // Aktifkan Swiper
    swiper.init();
  });
});
