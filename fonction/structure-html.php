<?php

function head(){
?>
  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Portfolio Erwan</title>
      <link type="text/css" href="./css/styles.css" rel="stylesheet"/>
      <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/73cbc12730.css" media="all">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <script type="text/javascript" src="./js/script.js" ></script>
  </head>
    <body class="parallax">
      <img class="image-fond" src="./images/fond.png" alt="" />
<?php
}

function menu(){
?>
<div class="barre-nav">
  <ul class="menu">
  	<li>
  		<a class="accueil-menu" href=".titre">Accueil</a>
  	</li>
  	<li>
  		<a class="presentation-menu" href="#surcouche-1">Présentation</a>
  	</li>
  	<li>
  		<a class="projet-menu" href="#surcouche-2">Projet</a>
  	</li>
  	<li>
  		<a class="contact-menu" href="#mail">Contact</a>
  	</li>
    <li>
      <a class="cv-menu" href="images/cv-erwan-guillet.pdf">CV</a>
    </li>
  </ul>
</div>
<?php
}

function titre(){
?>
<div class="titre">
  <h1 class="nom">ERWAN</h1>
  <h1 class="nom"> GUILLET</h1>
</div>
<?php
}

function surcouche_1(){
?>
<div id="surcouche-1" class="surcouche-parallax-partie-1">
  <div class="presentation-perso">
    <h1 class="presentation-titre">Présentation :</h1>
    <div class="text-perso">
      <p class="presentation">
        Après avoir passé mon BAC Professionnel Gestion-Administration et effectué
        plusieurs missions en intérim, j'ai décidé de faire la formation Simplon afin d'acquérir
        des compétences dans le domaine du développement web.<br>

        J'ai appris plusieurs langages notamment le PHP, HTML 5, CSS 3,
        Javascript, le framework jQuery afin de réaliser la conception d'un site web type réseau social
        en projet personnel ainsi que d'autres sites réalisés en groupe type e-commerce mais aussi un
        jeu Javascript dans l'esprit de cookie-clicker.<br><br>

        J'adore développer en PHP et manipuler les bases de données MySQL.<br><br>

        Je suis actuellement à la recherche d'un poste de <b>développeur Back-end PHP 5/7/PDO</b>.
      </p>
    </div>
    <div class="image-perso">
    </div>
  </div>
</div>
<?php
}

function connaissance(){
?>
  <div class="connaissance">
    <div class="maitrise">
      <h2 class="maitrise-titre">JE MAÎTRISE</h2>
      <div class="conteneur-maitrise">
        <i class="devicon-html5-plain"></i>
        <p class="plus-conteneur">+</p>
        <i class="devicon-css3-plain"></i>
        <p class="text-maitrise">
          HTML 5 et CSS 3<br>
          responsive-web-design
        </p>
      </div>
      <div class="conteneur-maitrise">
        <i class="devicon-php-plain"></i>
        <p class="plus-conteneur">+</p>
        <i class="devicon-mysql-plain"></i>
        <p class="text-maitrise">
          Back-end PHP<br>
          base de données MySQL
        </p>
      </div>
      <div class="conteneur-maitrise">
        <i class="devicon-apache-plain"></i>
        <p class="plus-conteneur">+</p>
        <i class="devicon-mysql-plain"></i>
        <p class="text-maitrise">
          Configuration de server
        </p>
      </div>
      <div class="conteneur-maitrise">
         <i class="devicon-wordpress-plain"></i>
        <p class="text-maitrise">
          Wordpress
        </p>
      </div>
      <div class="conteneur-maitrise">
        <i class="devicon-gimp-plain"></i>
        <p class="text-maitrise">
          Création de logos<br>
          retouche photo
        </p>
      </div>
    </div>
    <div class="utiliser">
      <h2 class="utiliser-titre">J'UTILISE</h2>
      <div class="conteneur-utiliser">
        <img class="image-conteneur" src="images/Console.png" alt="" />
        <p class="text-utiliser">
          Bash Linux
        </p>
      </div>
      <div class="conteneur-utiliser">
        <i class="devicon-git-plain"></i>
        <p class="text-utiliser">
          GIT
        </p>
      </div>
      <div class="conteneur-utiliser">
        <i class="devicon-atom-original"></i>
        <p class="text-utiliser">
          ATOM
        </p>
      </div>
      <div class="conteneur-utiliser">
        <i class="devicon-javascript-plain"></i>
        <p class="plus-conteneur">+</p>
        <i class="devicon-jquery-plain"></i>
        <p class="text-utiliser">
          Javascript et jQuery
        </p>
      </div>
      <div class="conteneur-utiliser">
        <img class="image-conteneur" src="images/virtualbox.png" alt="" />
        <p class="text-utiliser">
          Virtualbox
        </p>
      </div>
    </div>
    <div class="vue">
      <h2 class="vue-titre">J'AI VU</h2>
      <div class="conteneur-vue">
        <i class="devicon-python-plain"></i>
        <p class="text-vue">
          Python 2 & 3 / flask / pygame
        </p>
      </div>
      <div class="conteneur-vue">
        <i class="devicon-rails-plain"></i>
        <p class="text-vue">
          Ruby on Rails
        </p>
      </div>
      <div class="conteneur-vue">
         <i class="devicon-windows8-original"></i>
        <p class="text-vue">
          Windows Server 2012
        </p>
      </div>
      <div class="conteneur-vue">
        <i class="devicon-inkscape-plain"></i>
        <p class="text-vue">
          Inkscape
        </p>
      </div>
      <div class="conteneur-vue">
        <img src="images/secu.png" alt="" />
        <p class="text-vue">
          Sécurité des sites web
        </p>
      </div>
    </div>
    <div class="langage-apprentissage">
      <h2 class="langage-apprentissage-titre">JE SUIS EN COURS D'APRRENTISSAGE</h2>
      <div class="conteneur-langage-apprentissage">
        <i class="devicon-cplusplus-plain"></i>
        <p class="text-langage-apprentissage">
          C++
        </p>
      </div>
      <div class="conteneur-langage-apprentissage">
        <img src="images/symfony.png" alt="" />
        <p class="text-langage-apprentissage">
          Symfony
        </p>
      </div>
    </div>
  </div>
<?php
}

function surcouche_2(){
?>
<div id="surcouche-2" class="surcouche-parallax-partie-2">
  <div class="presentation-projet-realiser">
    <h1 class="projet">PROJET</h1>
    <div class="miniature-projet">
      <img class="image-projet" id="image-projet-1"src="images/projet-messagerie.png" alt="" />
      <p class="over-image">
        <span class="center-text">
          Site entiérement coder à la main fonctionne comme un réseau social
          mais en version simplifiée avec les languages :<br>
          PHP/HTML 5/CSS 3/Javascript/jQuery<br>
          <br>
          <a class="over-lien" href="http://messagerie-erw.esy.es/">Voir</a>
        </span>
      </p>
    </div>
    <div class="miniature-projet">
      <img class="image-projet" id="image-projet-2" src="images/projet-alu.jpg" alt="" />
      <p class="over-image">
        <span class="center-text">
          Site développé avec wordpress retouche intégrale du CSS<br>
          <br>
          <a class="over-lien" href="http://01aluservice.fr/">Voir</a>
        </span>
      </p>

    </div>
  </div>
</div>
<?php
}

function footer(){
?>
<div class="footer">
  <div class="icon-utiliser">
    <h2 class="icon-utiliser-titre">ICONS UTILISER</h2>
    <a class="lien-icon" href="http://www.alex-arriaga.com/wp-content/uploads/2013/08/Console-128.png">Bash Linux</a>
    <a class="lien-icon" href="http://icons.iconarchive.com/icons/janosch500/tropical-waters-folders/512/Virtualbox-icon.png">Virtualbox</a>
    <a class="lien-icon" href="http://images.google.fr/imgres?imgurl=https%3A%2F%2Fyt3.ggpht.com%2F-65pJZ6-CN9U%2FAAAAAAAAAAI%2FAAAAAAAAAAA%2Fbo_ZBNTKdIY%2Fs900-c-k-no-mo-rj-c0xffffff%2Fphoto.jpg&imgrefurl=https%3A%2F%2Fwww.youtube.com%2Fuser%2FTeamicecret&h=900&w=900&tbnid=FQQBdcWvrfR9KM%3A&docid=Qy6Mm-mmVQpyGM&ei=BAgCWLCuCOzWgAbdtJ3gAQ&tbm=isch&client=firefox-b&iact=rc&uact=3&dur=1399&page=8&start=414&ndsp=48&ved=0ahUKEwiwwMT2z9zPAhVsK8AKHV1aBxw4kAMQMwgeKBwwHA&bih=971&biw=1920">Sécurité des sites web</a>
    <a class="lien-icon" href="http://symfony.com/logos/symfony_white_03.png?v=4">Symfony</a>
    <a class="lien-icon" href="http://devicon.fr/">Devicon</a>
  </div>
  <div class="contact">
    <div class="contact-realisation">
      <i id="code" class="fa fa-code" aria-hidden="true"></i>
      <h2 class="realisation-titre">
        SITE :
      </h2>
      <p class="realisation">
        Réalisé à la main par mes soins<br>
        en HTML 5, CSS 3 et jQuery.
      </p>
    </div>
      <div class="contact-adresse">
        <i id="map" class="fa fa-map-marker" aria-hidden="true"></i>
        <h2 class="adresse-titre">
          ADRESSE :
        </h2>
        <p class="adresse">
          GUILLET Erwan<br>
          105, lot. les boutons d'or<br>
          01250 MONTAGNAT
        </p>
    </div>
      <div class="contact-mail">
        <i id="mail" class="fa fa-envelope" aria-hidden="true"></i>
        <h2 class="mail-titre">
          CONTACT :
        </h2>
        <a href="mailto:guilleterwan@aol.com" class="mail">
          guilleterwan@aol.com
        </a>
    </div>
  </div>
  <div class="reseaux-sociaux">
    <a href="https://github.com/erwansimplon">
      <i class="fa fa-github" id="github" aria-hidden="true"></i>
    </a>
    <a href="https://gitlab.com/erwansimplon">
      <i class="fa fa-gitlab" id="gitlab" aria-hidden="true"></i>
    </a>
    <a href="https://fr.linkedin.com/in/erwan-guillet-6003a212b">
      <i class="fa fa-linkedin" id="linkedin" aria-hidden="true"></i>
    </a>
  </div>
</div>
<?php
}

function fermeture_body_html(){
?>
  </body>
</html>
<?php
}
?>
