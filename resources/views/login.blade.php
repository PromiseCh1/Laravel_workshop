<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Crazy Hit</title>
  <link rel="stylesheet" href="{{asset('assets/frontend/css/index.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/frontend/css/login.css')}}" />


  
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


<!-- login -->
<section class="login-section">
  <div class="login-box">
    <h2 class="login-title">Login to Your Account</h2>

    <form class="login-form">
      <label for="email">Email</label>
      <input type="email" id="email" placeholder="Enter your email" required>

      <label for="password">Password</label>
      <input type="password" id="password" placeholder="Enter your password" required>

      <div class="login-options">
        <a href="#" class="forgot-link">Forgot Password?</a>
      </div>

      <button type="submit" class="login-button">Login</button>
    </form>

    <p class="register-text">
      Don't have an account?
      <a href="#" class="register-link">Register</a>
    </p>
  </div>
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



</body>
</html>
