<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Crazy Hit</title>
  <link rel="stylesheet" href="{{asset('assets/frontend/css/index.css')}}" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />


  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
  <!-- Navbar -->
  <header class="navbar">
    <div class="container nav-container">
      <div class="logo">Crazy Hit</div>
      <nav>
            <ul class="nav-links">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('shop') }}">Shop</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
        </ul>

      </nav>
    </div>
  </header>

  <div class="hero">
    <div class="hero-slider">
      <img src="{{asset('assets/frontend/photos/R1.jpg')}}" class="active" />
      <img src="{{asset('assets/frontend/photos/R2.jpg')}}" />
      <img src="{{asset('assets/frontend/photos/R3.jpg')}}" />
      <img src="{{asset('assets/frontend/photos/R4.jpg')}}" />
      <video muted playsinline preload="auto">
        <source src="{{asset('assets/frontend/photos/R4.mp4')}}" type="video/mp4" />
      </video>
      
      
    </div>
    <div class="hero-content">
      <h1>Express Yourself in Style</h1>
      <p>Discover New Arrivals</p>
      <button class="btn-primary">Shop Now</button>
    </div>
  </div>
  
  <section class="categories">
    <h2>Featured Categories</h2>
    <p><strong>New Arrivals</strong></p>
    <div class="category-grid">
      <div class="category-card">
        <img src="{{asset('assets/frontend/Photos/Arrivals/Jackets/females/Tshirt/Blue floral 1.jpg')}}" alt="T-shirt">
        <h3>T-Shirts</h3>
      </div>
      <div class="category-card">
        <img src="{{asset('assets/frontend/Photos/Arrivals/Jackets/females/Hoodie/Mode23 Black Zip up Hoodie 2.jpg')}}" alt="Hoodie">
        <h3>Hoodie</h3>
      </div>
      <div class="category-card">
        <img src="{{asset('assets/frontend/Photos/Arrivals/Jackets/females/Jacket/Willow Purple Corduroy Jacket 1.jpg')}}" alt="Jacket">
        <h3>Jacket</h3>
      </div>
      <div class="category-card">
        <img src="{{asset('assets/frontend/Photos/Arrivals/Jackets/females/Pants/Rusted black jeans 2.jpg')}}" alt="Accessories">
        <h3>Pants</h3>
      </div>
    </div>
  </section>
  

  <!-- Bold Text Section -->
  <section class="promo-text">
    <h2>
      <em>
        <span class="b">B</span><span class="rest">old</span>? 
        <span class="i">I</span><span class="rest">conic</span>? 
        <span class="y">Y</span><span class="rest">ou</span>!!
      </em>
    </h2>
  </section>


  <!-- Newsletter -->
  <section class="newsletter">
    <h2>Join Our Fashion Family</h2>
    <p>Subscribe to get special offers, free giveaways, and once-in-a-lifetime deals.</p>
    <form class="newsletter-form">
      <input type="email" placeholder="Enter your email" required />
      <button class="btn-primary" type="submit">Subscribe</button>
    </form>
  </section>


<!-- Footer -->
<footer class="footer">
  <div class="footer-container">
    <!-- Brand Info -->
    <div class="footer-col">
      <h3>Crazy Hit</h3>
      <p>Crazy Hit is your go-to destination for modern fashion and style. We bring curated collections that help you express yourself with confidence and flair.</p>
    </div>

    <!-- Quick Links -->
    <div class="footer-col">
      <h4>Quick Links</h4>
      <ul>
      <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('shop') }}">Shop</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
      </ul>
    </div>

    <!-- Social Media -->
    <div class="footer-col">
      <h4>Connect with Us</h4>
      <div class="social">
        <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a><br />
        <a href="#"><i class="fab fa-instagram"></i> Instagram</a><br />
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <p>&copy; 2025 Crazy Hits Fashion. All rights reserved.</p>
  </div>
</footer>

  <script src="{{asset('assets/frontend/js/index.js')}}"></script>
</body>
</html>
