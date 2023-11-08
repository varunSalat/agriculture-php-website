<?php
include("../config.php");

// Get the current URL path
$currentUrl = $_SERVER['REQUEST_URI'];

// Extract the slug from the URL
$parts = explode('/', $currentUrl);
$slug = end($parts);


// SQL query to fetch data based on the slug
$query = "SELECT * FROM single_products WHERE url = '$slug'";

$result = mysqli_query($connection, $query);

if ($result) {
  // Check if a matching record was found
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    // Now you can use this data as needed, e.g., to display it in your HTML.
  } else {
    // No matching record found for the provided slug
    echo "Product not found.";
  }

  mysqli_free_result($result);
} else {
  // Query execution failed
  echo "Error: " . mysqli_error($connection);
}

// Close the database connection
mysqli_close($connection);

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
  <link rel="stylesheet" href="./singleProduct.css" />
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
        <li><a class="nav_link_btn" href="/">HOME</a></li>
        <li><a class="nav_link_btn" href="/aboutus/">ABOUT US</a></li>
        <li>
          <a class="nav_link_btn" href="/products">PRODUCTS</a>
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
      <h4>Cumin Seeds</h4>
      <p class="hero_dis_navigate">
        <a href="#">Home</a> / <a href="#">Products</a> /
        <a href="#">
          <?= $row['name'] ?>
        </a>
      </p>
    </div>
  </section>

  <!--! =================== PRODUCT DETAIL SECTION======================== -->
  <section class="section flex" id="product_detail_section">
    <div class="product_contact_us_form_container">
      <form class="product_contact_us_form">
        <div class="close_btn_container flex">
          <h4>Enquiry Form</h4>
          <span onclick="handleContactFormClose()">
            <i class="fa-solid fa-xmark"></i>
          </span>
        </div>
        <div class="product_form_input_container flex">
          <label for="name">Name*</label>
          <input type="text" name="name" placeholder="Enter your name" id="name" />
        </div>
        <div class="product_form_input_container flex">
          <label for="email">Email Address</label>
          <input type="email" name="email" placeholder="Enter your Email" id="email" />
        </div>
        <div class="product_form_input_container flex">
          <label for="num">Phone Number*</label>
          <input type="number" name="num" placeholder="Enter your Email" id="num" />
        </div>
        <div class="product_form_input_container flex">
          <label for="dis">Description</label>
          <textarea name="dis" id="dis" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="discover_more_btn">Submit Form</button>
      </form>
    </div>
    <div class="product_detail_left_container">
      <figure>
        <img src="<?= $url . "/assets/single/" . $row['img'] ?>" alt="" srcset="" />
      </figure>
    </div>
    <div class="product_detail_right_container">
      <h4>
        <?= $row['description'] ?>
      </h4>
      <div class="product_detail_right_dis">
        <button onclick="handleContactFormOpen()" class="discover_more_btn">
          Contact Us
        </button>
      </div>
    </div>
  </section>
  <section class="section" id="more_product_detail_section">
    <div class="product_detail_nav flex">
      <button class="product_detail_nav_btn active" data-btn-detail-type="physical-property">
        Physical Property
      </button>
      <button class="product_detail_nav_btn" data-btn-detail-type="chemical-property">
        Chemical Property
      </button>
      <button class="product_detail_nav_btn" data-btn-detail-type="general-detail">
        Product Details
      </button>
    </div>
    <div class="more_product_detail_container">
      <div class="physical_property_container detail_container show">
        <div class="product_detail_table">
          <div class="product_detail_card flex">
            <h3 class="product_detail_left_card_container">Shape</h3>
            <p class="product_detail_right_card_container">
              <?= $row['shape'] ?>
            </p>
          </div>
          <div class="product_detail_card flex">
            <h3 class="product_detail_left_card_container">Appearance</h3>
            <p class="product_detail_right_card_container">

              <?= $row['appearance'] ?>
            </p>
          </div>
          <div class="product_detail_card flex">
            <h3 class="product_detail_left_card_container">Taste</h3>
            <p class="product_detail_right_card_container">
              <?= $row['taste'] ?>
            </p>
          </div>
        </div>
      </div>
      <!-- !CHEMICAL  PROPERTY -->
      <div class="physical_property_container detail_container">
        <div class="product_detail_table">
          <div class="product_detail_card flex">
            <h3 class="product_detail_left_card_container">Odor</h3>
            <p class="product_detail_right_card_container">
              <?= $row['odor'] ?>
            </p>
          </div>
          <div class="product_detail_card flex">
            <h3 class="product_detail_left_card_container">Solubility</h3>
            <p class="product_detail_right_card_container">
              <?= $row['solubility'] ?>
            </p>
          </div>
          <div class="product_detail_card flex">
            <h3 class="product_detail_left_card_container">Density</h3>
            <p class="product_detail_right_card_container">
              <?= $row['density'] ?>
            </p>
          </div>
        </div>
      </div>
      <div class="general_detail_container detail_container">
        <p>
          <?= $row['details'] ?>
        </p>
      </div>
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
          <img src="/assets/home/farmer.webp" alt="" srcset="" />
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
    <a href="#" class="contact_us_banner_btn">Contact Us</a>
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
<script src="./singleProduct.js"></script>

</html>