// script.js
// For future enhancements like cart toggle or mobile menu

document.addEventListener('DOMContentLoaded', () => {
  // Example placeholder for any interaction
  const cartIcon = document.querySelector('.fa-shopping-cart');
  cartIcon.addEventListener('click', () => {
    alert('Cart feature coming soon!');
  });

  const form = document.querySelector('.newsletter-form');
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    const email = form.querySelector('input').value;
    if (email) {
      alert(`Thanks for subscribing with ${email}`);
      form.reset();
    }
  });
});

// hero section

const heroElements = Array.from(document.querySelectorAll('.hero-slider img, .hero-slider video'));
let currentIndex = 0;
let sliderInterval;

function showSlide(index) {
heroElements.forEach((el) => {
  el.classList.remove('active');
  if (el.tagName === 'VIDEO') {
    el.pause();
    el.currentTime = 0;
    el.style.opacity = 0;
  } else {
    el.style.opacity = 0;
  }
});

const currentEl = heroElements[index];

if (currentEl.tagName === 'VIDEO') {
  const onReady = () => {
    currentEl.classList.add('active');
    currentEl.style.opacity = 1;
    currentEl.play();

    currentEl.onended = () => {
      currentIndex = (currentIndex + 1) % heroElements.length;
      showSlide(currentIndex);
      startSlider(); // restart after video
    };
  };

  if (currentEl.readyState >= 3) {
    onReady();
  } else {
    currentEl.addEventListener('canplay', onReady, { once: true });
  }

} else {
  currentEl.classList.add('active');
  currentEl.style.opacity = 1;
}
}

function nextSlide() {
currentIndex = (currentIndex + 1) % heroElements.length;
showSlide(currentIndex);
}

function startSlider() {
clearInterval(sliderInterval); // clear previous interval if any

sliderInterval = setInterval(() => {
  const currentEl = heroElements[currentIndex];

  // Skip advancing if current is video – wait for onended
  if (currentEl.tagName === 'VIDEO') {
    clearInterval(sliderInterval);
    return;
  }

  nextSlide();
}, 4000);
}

document.addEventListener('DOMContentLoaded', () => {
showSlide(currentIndex);

const video = document.querySelector('.hero-slider video');
if (video) {
  video.load();
}

startSlider();
});



//photo to categorie list products
document.querySelectorAll('.category-card').forEach(card => {
card.addEventListener('click', () => {
  const categoryName = card.querySelector('h3').textContent.trim().toLowerCase();

  // Normalize category names to match your product keys
  const normalizedCategory = categoryName
    .replace(/t-shirts?/, 't-shirt')
    .replace(/hoodie/, 'hoodie')
    .replace(/jacket/, 'jacket')
    .replace(/pants?/, 'pant');

  // Redirect to the shop page with the category as a query parameter
  window.location.href = `shop?category=${normalizedCategory}`;
});
});
