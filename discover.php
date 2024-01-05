<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chapter Threads - Theads of Knowledge</title>
  <meta name="title" content="Chapter Threads - Theads of Knowledge">
  <meta name="description"
    content="Read More And Make Success The Result Of Perfection. - Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad harum quibusdam, assumenda quia explicabo.">
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="read.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">
  <title>Document</title>
  <style>
#results {
            position: absolute;
            top: 100%;
            left: 0;
            right: 100%;
            width: 1141px; /* Adjust width as needed */
            max-height: 900px;
            overflow-y: auto;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 0 0 5px 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 2;
            display: flex;
            flex-wrap: wrap;
            border: none;
        }

        #searchBar {
            width: 400px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .result-item {
          width: calc(33.33% - 20px); /* Adjust the width as needed */
          margin: 10px;
          display: inline-block;
          cursor: pointer;
        }
.book-details {
    padding: 10px;
}

.book-details p {
    margin: 0;
}
        .result-item:hover {
            background-color: #f0f0f0;
        }
        .not-found-message {
    padding: 10px;
    text-align: center;
    font-style: italic;
    color: #555;
}

  </style>
</head>
<body>
  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">Chapter Threads</a>
      <div class="search-wrapper">
            <!-- <i class="fas fa-search" style="cursor: pointer; margin-right: 150px;"></i> -->
            <input type="text" id="searchBar" placeholder="Search Book or Author..." style="widht: 400px;">
            <div id="results"></div>
        </div>

      <div id="result">
      </div>
      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="index.php" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li class="navbar-item">
            <a href="#contact" class="navbar-link" data-nav-link>Contact</a>
          </li>
          <?php
if(isset($_SESSION['Email']))
{
  echo '<li class="navbar-item">
  <a href="Logout.php" class="navbar-link" data-nav-link>Log Out</a>
</li>';
}
else{
  echo'<button class="navbar-link dropdown">
  Sign Up
  <i class="fa fa-caret-down"></i>
  <div class="dropdown-content">
    <a href="Login.php">Log-In</a>
    <a href="Sign-In.php">Sign up</a>
  </div>
</button>';
}
?>
          <button class="navbar-link dropdown">
            Genre
            <i class="fa fa-caret-down"></i>
            <div class="dropdown-content scrollable-menu">
              <a href="">Sci-Fi</a>
              <a href="">Thriller</a>
              <a href="">Auto Biography</a>
              <a href="">Horror</a>
              <a href="">Romance</a>
            </div>
          </button>
        </ul>
      </nav>

      <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true" class="open"></ion-icon>

        <ion-icon name="close-outline" aria-hidden="true" class="close"></ion-icon>
      </button>
    </div>
  </header>
  <center>
    </section>
    <section class="featured-products">
      <div class="product" id="Books">
        <a href="#"><img src="P1.png" alt="Product 1"></a>
        <h3>A Ruthless Proportion</h3>
        <p>Free</p>
        <button class="bt"style="margin-top: 10px;">Read Now</button>
        <br><br>
        <button class="add-to-cart" onclick="toggleWishlist('button1')"style="border: none; background: none; padding: 0;">
          <i id="button1" class="fas fa-heart wishlist-icon add-to-cart" title="Wishlist">&nbsp;Wishlist</i>
      </button>
      </div>
      <div class="product" id="Books">
        <a href="#"><img src="P2.png" alt="Product 1"></a>
        <h3>An Exorcist explains the Demonic</h3>
        <p>Free</p>
        <button class="bt">Read Now</button>
        <br><br>
        <button class="add-to-cart" onclick="toggleWishlist('button2')"style="border: none; background: none; padding: 0;">
          <i id="button2" class="fas fa-heart wishlist-icon add-to-cart" title="Wishlist">&nbsp;Wishlist</i>
      </button>
      </div>
      <div class="product" id="Books">
        <a href="#"><img src="P3.png" alt="Product 1"></a>
        <h3>Unfollow: A journeh from harted to hope</h3>
        <p>Free</p>
        <button class="bt"style="margin-top:7px;">Read Now</button>
        <br><br>
        <button class="add-to-cart" onclick="toggleWishlist('button3')"style="border: none; background: none; padding: 0;">
          <i id="button3" class="fas fa-heart wishlist-icon add-to-cart" title="Wishlist">&nbsp;Wishlist</i>
      </button>
      </div>
      <div class="product" id="Books">
        <a href="#"><img src="P4.png" alt="Product 1"></a>
        <h3>Harry Potter and the Order of Phoenix</h3>
        <p>&#x20B9;325</p>
        <button class="bt" style="margin-top: 10px;">Buy Now</button>
        <br><br>
        <button class="add-to-cart" onclick="toggleWishlist('button4')"style="border: none; background: none; padding: 0;">
          <i id="button4" class="fas fa-heart wishlist-icon add-to-cart" title="Wishlist">&nbsp;Wishlist</i>
      </button>
      </div>
      <div class="product" id="Books">
        <a href="#"><img src="P5.png" alt="Product 1"></a>
        <h3>Harry Potter and the Prizoner of Azkaban</h3>
        <p>&#x20B9;325</p>
        <button class="bt"style="margin-top:10px;">Buy Now</button>
        <br><br>
        <button class="add-to-cart" onclick="toggleWishlist('button5')"style="border: none; background: none; padding: 0;">
          <i id="button5" class="fas fa-heart wishlist-icon add-to-cart" title="Wishlist">&nbsp;Wishlist</i>
      </button>
      </div>
      <div class="product" id="Books">
        <a href="#"><img src="P6.png" alt="Product 1"></a>
        <h3>Harry Potter and the Half Blood Prince</h3>
        <p>&#x20B9;325</p>
        <button class="bt"style="margin-top:15px;">Buy Now</button>
        <br><br>
        <button class="add-to-cart" onclick="toggleWishlist('button6')"style="border: none; background: none; padding: 0;">
          <i id="button6" class="fas fa-heart wishlist-icon add-to-cart" title="Wishlist">&nbsp;Wishlist</i>
      </button>
      </div>
    </section>
  </center>
  <br>
  <section class="section contact" id="contact" aria-label="contact">
    <div class="container">

      <p class="section-subtitle">Contact</p>

      <h2 class="h2 section-title has-underline">
        Write me anything
        <span class="span has-before"></span>
      </h2>

      <div class="wrapper">

        <form action="" class="contact-form">

          <input type="text" name="name" placeholder="Your Name" required class="input-field">

          <input type="email" name="email_address" placeholder="Your Email" required class="input-field">

          <input type="text" name="subject" placeholder="Subject" required class="input-field">

          <textarea name="message" placeholder="Your Message" class="input-field"></textarea>

          <button type="submit" class="btn btn-primary">Send Now</button>

        </form>

        <ul class="contact-card">

          <li>
            <p class="card-title">Address:</p>

            <address class="address">
              16, Abcxy <br>
              Abcxyz, India 999000
            </address>
          </li>

          <li>
            <p class="card-title">Phone:</p>

            <a href="tel:1234567890" class="card-link">123 456 7890</a>
          </li>

          <li>
            <p class="card-title">Email:</p>

            <a href="mailto:ChapterThreads@gmail.com<" class="card-link">ChapterThreads@gmail.com</a>
          </li>

          <li>
            <p class="social-list-title h3">Connect book socials</p>

            <ul class="social-list">

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-youtube"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-whatsapp"></ion-icon>
                </a>
              </li>

            </ul>
          </li>

        </ul>

      </div>

    </div>
  </section>
  <script>
    function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
  }
  function toggleWishlist(buttonId) {
              var icon = document.getElementById(buttonId);
              icon.classList.toggle("clicked");
  
              if (icon.classList.contains("clicked")) {
                  alert("Item added to cart!");
              }
          }
  </script>
  <script src="./assets/js/search.js" defer></script>
  <script src="./assets/js/script.js" defer></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>