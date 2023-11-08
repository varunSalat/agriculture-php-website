<?php

include("../config.php");
// Query to fetch data from the 'products' table
$query = "SELECT * FROM products";
$result = mysqli_query($connection, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Apexrim | Products</title>

  <!-- !GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,300;12..96,400;12..96,500;12..96,600&family=Raleway:wght@300;400;500;600;700&display=swap"
    rel="stylesheet" />
  <!-- !FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- !STYLES -->
  <link rel="stylesheet" href="../../styles/style.css" />
  <link rel="stylesheet" href="../../styles/responsive.css" />
  <link rel="stylesheet" href="./product.css" />
</head>

<body>
  <section id="loader_section">
    <figure>
      <img src="../assets/logo_without_bg.png" alt="" srcset="" />
    </figure>
  </section>
  <header class="flex">
    <div class="logo">
      <a href="/"><img src="../../assets/logo_without_bg.png" alt="Apexrim" /></a>
    </div>
    <nav>
      <ul class="flex nav_link_container">
        <li><a class="nav_link_btn " href="/">HOME</a></li>
        <li><a class="nav_link_btn" href="/aboutus/">ABOUT US</a></li>
        <li>
          <a class="nav_link_btn active_nav" href="/products">PRODUCTS</a>
        </li>
        <li>
          <a class="nav_link_btn" href="/contactus/">CONTACT US</a>
        </li>
        <li>
          <a class="nav_link_btn" href="/achievements/">OUR CERTIFICATE</a>
        </li>
      </ul>
    </nav>
    <!-- <button class="nav_link_btn">
        <a href="#" class="inquiry_btn">ENQUIRY</a>
      </button> -->
    <div class="burger_container">
      <i class="burger_line"></i>
      <i class="burger_line"></i>
      <i class="burger_line"></i>
    </div>
  </header>
  <!--! ===================HERO SECTION======================== -->
  <section class="hero_section">
    <div class="hero_dis">
      <h4>Our Shop</h4>
      <p class="hero_dis_navigate">
        <a href="#">Home</a> / <a href="#">Products</a>
      </p>
    </div>
  </section>

  <!--! ===================OUR PRODUCTS SECTION======================== -->
  <section class="section" id="our_product_section">
    <div class="section_header_container">
      <p>Explore</p>
      <h6>OUR PRODUCTS</h6>
    </div>
    <div class="our_products_container flex">
      <?php
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $productName = $row['title'];
          $productDescription = $row['description'];
          $productImage = $row['img'];

          echo '<a href="../singleProductPage/' . $row['url'] . '" class="our_product_card">';
          echo '    <figure>';
          echo '        <img src="' . $url . '/assets/products/' . $productImage . '" alt="' . $productName . '" srcset="" />';
          echo '    </figure>';
          echo '    <div class="our_product_dis">';
          echo '        <h3>' . $productName . '</h3>';
          echo '        <p>' . $productDescription . '</p>';
          echo '    </div>';
          echo '</a>';
        }
      }
      ?>
    </div>
  </section>

  <!--! ===================VIDEO SECTION======================== -->
  <div class="video_container hide">
    <div class="video_inner_container">
      <button class="video_close_btn">
        <i class="fa-solid fa-xmark"></i>
      </button>
      <video controls>
        <source src="
              http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4
            " type="video/mp4" />
      </video>
    </div>
  </div>
  <section class="video_section section">
    <div class="completed_work_container flex">
      <div class="completed_work_card">
        <h5>Quality Standards</h5>
        <figure class="completed_work_figure">
          <img src="https://shorturl.at/qrsNU" alt="" srcset="" />
        </figure>
      </div>
      <div class="completed_work_card">
        <h5>Organic Farming</h5>
        <figure class="completed_work_figure">
          <img src="https://shorturl.at/CMWX5" alt="" srcset="" />
        </figure>
      </div>
      <div class="completed_work_card">
        <h5>Agriculture Products</h5>
        <figure class="completed_work_figure">
          <img src="https://shorturl.at/sEFY0" alt="" srcset="" />
        </figure>
      </div>
    </div>
    <div class="video_main_container flex">
      <div class="video_left_container">
        <h3>
          <span class="block_span"> Watch our products </span>
          <span class="block_span"> in Video </span>
          <span class="block_span"> to take a glimpse of it </span>
          <span class="block_span"> Quality and freshness </span>
        </h3>
      </div>
      <div class="video_right_container">
        <button class="video_play_btn">
          <i class="fa-solid fa-play"></i>
          <div class="ripple"></div>
        </button>
      </div>
    </div>
  </section>

  <!--! ===================WHY CHOOSE US======================== -->
  <section class="section">
    <div class="why_choose_us_main_container flex">
      <div class="why_choose_us_left_container">
        <figure class="why_choose_us_img_container">
          <img src="../assets/home/farmer.webp" alt="" srcset="" />
        </figure>
        <div class="why_choose_us_img_bg"></div>
      </div>
      <div class="why_choose_us_right_container">
        <div class="why_choose_us_header">
          <p>Our Farm Goals</p>
          <h3>Our Mission</h3>
        </div>
        <p class="why_choose_us_dis">
          “Exporting Agriculture, Cultivating Trust” is our Motto. Quality of
          any of our products is the biggest mission for us. Only through the
          recognition of this quality, we will win the trust of importers from
          all over the world and move forward together
        </p>
        <br />
        <p class="why_choose_us_dis">
          Apart from this, to seriously implement corporate social
          responsibility by serving the societies, various sections in the
          community and taking good care of the natural resources and
          environment.
        </p>
        <div class="why_choose_us_list_container">
          <div class="why_choose_us_list flex">
            <div class="why_choose_us_list_icon">
              <i class="fa-solid fa-circle-check"></i>
            </div>
            <div class="why_choose_us_right_container">
              <h4>Quality Organic Food</h4>
              <p>
                There are variation You need to be sure there is anything
                hidden in the middle of text.
              </p>
            </div>
          </div>
          <div class="why_choose_us_list flex">
            <div class="why_choose_us_list_icon">
              <i class="fa-solid fa-circle-check"></i>
            </div>
            <div class="why_choose_us_right_container">
              <h4>Professional Farmers</h4>
              <p>
                There are variation You need to be sure there is anything
                hidden in the middle of text.
              </p>
            </div>
          </div>
          <div class="why_choose_us_list flex">
            <div class="why_choose_us_list_icon">
              <i class="fa-solid fa-circle-check"></i>
            </div>
            <div class="why_choose_us_right_container">
              <h4>Quality Products</h4>
              <p>
                There are variation You need to be sure there is anything
                hidden in the middle of text.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--! ===================WHY CHOOSE US======================== -->
  <section class="section contact_us_banner flex">
    <div class="left_banner_container">
      <h4>
        We are the best Agriculture export <br />
        You'll find so let's connect and work!!!
      </h4>
    </div>
    <a href="Contact Us" class="contact_us_banner_btn">Contact Us</a>
  </section>
  <section class="section">
    <div class="section_header_container">
      <p>Our Pride</p>
      <h6>CERTIFICATE</h6>
    </div>
    <div class="our_pride_card_container flex">
      <figure class="our_pride_card">
        <img src="/assets/cert/apeda.png" alt="" srcset="" />
      </figure>
      <figure class="our_pride_card">
        <img src="/assets/cert/dgft.png" alt="" srcset="" />
      </figure>
      <figure class="our_pride_card">
        <img src="/assets/cert/fssai.png" alt="" srcset="" />
      </figure>
      <figure class="our_pride_card">
        <img src="/assets/cert/iso.png" alt="" srcset="" />
      </figure>
      <figure class="our_pride_card">
        <img src="/assets/cert/sgs.png" alt="" srcset="" />
      </figure>
      <figure class="our_pride_card">
        <img src="/assets/cert/spicesBoard.png" alt="" srcset="" />
      </figure>
    </div>
  </section>
  <footer class="footer flex">
    <div class="footer_container">
      <figure class="footer_logo">
        <img src="../../assets/logo_without_bg.png" alt="" srcset="" />
      </figure>
      <p>
        There are many variations of passages of lorem ipsum available, but
        the majority suffered.
      </p>
      <div class="footer_social_icon_container flex">
        <a href="#" target="_blank"><i class="fa-brands fa-facebook"></i></a>
        <a href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
        <a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a>
      </div>
    </div>
    <div class="footer_container">
      <h6 class="footer_header">Useful Link</h6>
      <ul class="footer_list_container">
        <li><a href="#">Home</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact us</a></li>
      </ul>
    </div>
    <div class="footer_container">
      <h6 class="footer_header">About Website</h6>
      <ul class="footer_list_container">
        <li><a href="#">Sitemap</a></li>
      </ul>
    </div>
    <div class="footer_container">
      <h6 class="footer_header">Quick Contacts</h6>
      <ul class="footer_list_container">
        <li>
          <a href="#" class="flex"><i class="fa-solid fa-phone"></i>+91 99 888 85895</a>
        </li>
        <li>
          <a href="#" class="flex"><i class="fa-solid fa-envelope"></i>testmail@gmail.com</a>
        </li>
        <li>
          <a href="#" class="flex"><i class="fa-solid fa-location-dot"></i>plot-E/187 near Near
            science city <br />
            Ahmedabad <br />
            pincode: 225588</a>
        </li>
      </ul>
    </div>
  </footer>
</body>
<!-- !SCRIPTS -->

<!-- GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<!-- CUSTOM JS -->
<script src="./products.js"></script>

</html>