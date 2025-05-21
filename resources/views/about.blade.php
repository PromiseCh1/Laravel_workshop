<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Crazy Hit</title>
  <link rel="stylesheet" href="{{asset('assets/frontend/css/index.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/frontend/css/about.css')}}" />

  <script src="{{asset('assets/frontend/js/shop.js')}}"></script>

  
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">



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
          <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
        </ul>
      </nav>
    </div>
  </header>

<!-- main sec_________________________ -->
  <main>
    <section class="about">
        <br>
        <div class="about-text">
            <h1>About Crazy Hit Store</h1>
            <p class="subtitle">More than a store — a passion for quality and personal style.</p>
            </div>
      <div class="container about-flex">
        <div class="about-text">
          <p class="subtitle2">
            Founded in 2025, Crazy Hits was created to blend premium quality with fearless personal style. We handpick every piece to reflect our values of individuality, creativity, and sustainability. More than just a fashion brand, we’re a movement that encourages self-expression and conscious living. At Crazy Hits, style isn’t just what you wear — it’s who you are.

            </p>
        </div>
        <div class="about-img">
          <img src="{{asset('assets/frontend/Photos/about/about_image.jpg')}}" alt="Store Image">
        </div>
      </div>
    </section>

    <section class="beliefs">
      <div class="container1">
        <h2>What We Believe?</h2>
        <div class="beliefs-grid">
          <div class="belief">
            <span>🌱</span>
            <h3>Sustainability</h3>
            <p>Committed to eco-friendly practices and sustainable fashion choices.</p>
          </div>
          <div class="belief">
            <span>🤝</span>
            <h3>Authenticity</h3>
            <p>Every product tells a genuine story of quality and craftsmanship.</p>
          </div>
          <div class="belief">
            <span>🚀</span>
            <h3>Innovation</h3>
            <p>Constantly evolving to bring you the latest in fashion and technology.</p>
          </div>
          <div class="belief">
            <span>❤️</span>
            <h3>Community</h3>
            <p>Building meaningful connections through shared style values.</p>
          </div>
          <div class="belief">
            <span>🎨</span>
            <h3>Creativity</h3>
            <p>We celebrate bold ideas and original designs that reflect personal expression.</p>
          </div>
          <div class="belief">
            <span>🌍</span>
            <h3>Global Vision</h3>
            <p>Inspired by cultures worldwide, we aim to unite fashion lovers everywhere.</p>
          </div>
          
        </div>
      </div>
    </section>

    <section class="cta">
      <div class="container">
        <h2>Ready to Experience CS Store?</h2>
        <div class="cta-buttons">
          <a href="{{ route('index') }}" class="btn btn-primary">Shop Now</a>
          <a href="{{ route('contact') }}" class="btn btn-outline">Contact Us</a>
        </div>
      </div>
    </section>
  </main>















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
