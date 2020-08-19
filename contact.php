<?php
  session_start();
?><!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Nouvelle Forge - Contact</title>

    <link rel="icon" type="image/png" href="images/graphic-nf/logos_nf_ original_sansfond.png" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEdivSl0sibVcOQVnN" crossorigin="anonymous">
  </head>
  <body>
    <!-- small-jumbotron - header -->
    <header class="header">
      <div class="navbar">
        <a href="/landing-page.html">
          <img src="images/graphic-nf/logos_nf_ blanc_sansfond.png" alt="logotype" class="navbar-logo">
        </a>
       <div class="burger" id="burger">
          <span class="middle-bar"></span>
        </div>
        <nav class="nav" id="nav">
          <a href="/services.html" class="nav-item">Nos services</a>
          <a href="/pepiniere.html" class="nav-item">La pépinière</a>
          <a href="/fablab.html" class="nav-item">Fablab</a>
          <a href="/residents.html" class="nav-item">Nos résidents</a>
          <span class="nav-item dropdown" id="dropdown">
            À propos
            <i class="fa fa-caret-down icon-dropdown"></i>
            <span class="dropdown-open" id="dropdown-open">
              <a href="/contact.html" class="dropdown-open-item">Nous contacter</a> <br>
              <a href="/team.html" class="dropdown-open-item">Notre équipe</a>
            </span>
          </span>
        </nav>
      </div>
      <div class="container">
        <h1 class="header-title">Nous contacter</h1>
        <p class="header-text">Pour toute question n'ayant pas trouvée réponse sur le site.</p>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#472F88" fill-opacity="1" d="M0,256L60,266.7C120,277,240,299,360,288C480,277,600,235,720,218.7C840,203,960,213,1080,229.3C1200,245,1320,267,1380,277.3L1440,288L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
    </header>
    <!-- small-jumbotron - header -->
    <!-- contact -->
    <div class="container-small">

    <!-- ALERT php -->
      <?php if(array_key_exists('errors', $_SESSION)): ?>
        <div class="alert alert-danger">
          <?= implode('<br>', $_SESSION['errors']); ?>
        </div>
      <?php endif; ?>
      <?php if(array_key_exists('success', $_SESSION)): ?>
        <div class="alert alert-success">
          Votre email a bien été envoyé
        </div>
      <?php endif; ?>

      <form action="post_contact.php" method="POST" class="form-example">
        <div class="form">
          <input type="text" name="name" id="name" placeholder="Nom Prénom" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>">
        </div>
        <div class="form">
          <input type="email" name="email" id="email" placeholder="Email" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>">
        </div>
        <div class="form">
          <textarea type="message" name="message" id="message" placeholder="Votre message ici..." rows="5"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
        </div>
        <div class="form">
          <input type="submit" value="Envoyer" class="btn btn-primary submit">
        </div>
      </form>

      <!-- Debug !  -->
      <h2>Debug :</h2>
      <?= var_dump($_SESSION); ?>

      <div class="icons-contact">
        <div class="block-contact">
          <i class="fa fa-envelope-open fa-2x icon-contact"></i>
          <p class="icon-contact-email">lnforge@false.fr</p>
        </div>
        <div class="block-contact">
          <i class="fa fa-phone fa-2x icon-contact"></i>
          <p class="icon-contact-number">03.62.26.05.60</p>
        </div>
        <div class="block-contact">
          <i class="fa fa-map-marker fa-2x icon-contact"></i>
          <p class="icon-contact-planning">9h30 - 17H30</p>
        </div>
        <div class="block-contact">
          <i class="fa fa-map-marker fa-2x icon-contact"></i>
          <p class="icon-contact-position">80 Avenue Roland Moreno, <br>
            59410 Anzin</p>
        </div>
      </div>

      <img src="/images/plan.jpg" alt="plan" class="plan">
    </div>
    <!-- contact -->
    <!-- footer -->
    <footer class="footer">
      <div class="container container-footer">
        <div class="footer-about">
          <h3 class="footer_title">À propos</h3>
          <a href="/team.html">Notre équipe</a><br>
          <a href="/contact.html">Nous contacter</a>
        </div>
        <div class="footer-social">
          <h3 class="footer_title">Nous suivre</h3>
          <div class="footer-social_icon">
            <a href="https://www.facebook.com/jean.bridoux.NouvelleForge" target="_blank"><i class="fa fa-facebook fa-2x"></i></a> 
            <a href="https://www.instagram.com/nouvelleforge_createur/?hl=fr" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
            <a href="https://www.linkedin.com/company/nouvelleforge/" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
          </div>
        </div>
        <div class="footer-address">
          <h3 class="footer_title">Adresse</h3>
          <p>80 avenue Roland Moreno</p>
          <p>Anzin 59410</p>
        </div>
        <div class="footer-more">
          <a href="#">Politique de confidentialités</a><br>
          <a href="#">Conditions générales</a>
        </div>
      </div>
     </footer>
    <!-- footer -->

    <!-- PHP : Nettoyer la session -->
    <?php
      unset($_SESSION['inputs']);
      unset($_SESSION['success']);
      unset($_SESSION['errors']);
    ?>

    <!-- JS -->
    <script src="/js/navbar.js"></script>
  </body>
</html> 