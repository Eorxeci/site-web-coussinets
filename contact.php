<!DOCTYPE html>
<html>
  <head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Les Coussinets de l'Amitié</title>

    <!-- slider stylesheet -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"
    />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap"
      rel="stylesheet"
    />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
  </head>

  <body class="sub_page">
    <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
        <div class="container">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.html">
              <img src="images/logo-sans-fond.png" alt="" />
              <span> Les Coussinets de l'Amitié </span>
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="s-1"> </span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div
                class="d-flex ml-auto flex-column flex-lg-row align-items-center"
              >
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="index.html">
                      Accueil <span class="sr-only">(current)</span></a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.html"> A propos </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="sauvetage.html"> Sauvetages </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="adoption.html"> Adoptions </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="adopter.html">
                      Comment adopter
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="help.html"> Nous aider </a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="contact.html"> Nous contacter </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- end header section -->
    </div>

    <!-- contact section -->

    <section class="contact_section layout_padding">
      <div class="container">
        <div class="heading_container">
          <h2>Contactez-nous !</h2>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <form method="post">
              <div>
                <input
                  type="text"
                  name="identite"
                  placeholder="NOM Prénom"
                  required
                />
              </div>
              <div>
                <input type="email" name="email" placeholder="Email" required />
              </div>
              <div>
                <input type="text" name="sujet" placeholder="Sujet" required />
              </div>
              <div>
                <input
                  type="text"
                  name="message"
                  class="message-box"
                  placeholder="Message"
                  required
                />
              </div>
              <div class="d-flex">
                <input type="submit" value="Envoyer" />
              </div>
            </form>
            <?php
              if (isset($_POST["message"])) {
                $retour = mail("ecathignol@gmail.com", $_POST["sujet"], $_POST["message"], "From:contact@exemplesite.fr\r\nReply-to:" . $_POST["email"]);
                if ($retour) {
                  echo "<p>L'email a bien été envoyé</p>";
                }
             }
            ?>
          </div>
          <div class="col-md-6">
            <div class="map_container">
              <div class="map-responsive">
                <iframe
                  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Marcilly-en-Villette+France"
                  width="600"
                  height="300"
                  frameborder="0"
                  style="border: 0; width: 100%; height: 100%"
                  allowfullscreen
                ></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end contact section -->

    <!-- info section -->
    <section class="info_section layout_padding">
      <div class="container">
        <div class="info_contact">
          <div class="row">
            <div class="col-md-4">
              <a href="contact.html">
                <img src="images/location-white.png" alt="" />
                <span> Marcilly-en-Villette, Loiret, France </span>
              </a>
            </div>
            <div class="col-md-4">
              <a href="contact.html">
                <img src="images/telephone-white.png" alt="" />
                <span> Téléphone : 06 52 86 49 79 </span>
              </a>
            </div>
            <div class="col-md-4">
              <a href="contact.html">
                <img src="images/envelope-white.png" alt="" />
                <span> lescoussinetsdelamitie@gmail.com </span>
              </a>
            </div>
          </div>
        </div>

        <div class="info_social">
          <div>
            <a
              href="https://www.facebook.com/profile.php?id=100093385792592"
              class="info_social_text"
            >
              Les Coussinets de l'Amitié
              <img src="images/fb.png" alt="" />
            </a>
          </div>
          <div>
            <a href="https://www.instagram.com/les_coussinets_de_lamitie/">
              <img src="images/instagram.png" alt="" />
            </a>
          </div>
          <div>
            <a
              href="https://www.facebook.com/lesgamellesdelamitie/"
              class="info_social_text"
            >
              Les Gamelles de l'Amitié
              <img src="images/fb.png" alt="" />
            </a>
          </div>
          <div>
            <a href="https://www.instagram.com/gamellesdelamitie/">
              <img src="images/instagram.png" alt="" />
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- end info section -->

    <!-- footer section -->
    <footer class="container-fluid footer_section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-9 mx-auto">
            <p>
              &copy; 10-2023 All Rights Reserved By Les Gamelles de l'Amitié
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer section -->

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
