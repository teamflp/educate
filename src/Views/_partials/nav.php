<header>
   <div class="navtop w-100">
      <div class="container d-flex j-content-s-b a-content-center">
         <div class="contacts d-flex a-content-center">
            <div class="left">
               <?= getUrl('tel:+33 06 00 00 00 00','+33 06 00 00 00 00',['class' => 'phone'], '', 'fas fa-phone'); ?>
            </div> &nbsp;&nbsp;
            <div class="right">
               <?= getUrl('mailto:info@exemple.com','info@exemple.com',['class' => 'email'],'_blank', 'fas fa-envelope'); ?>
            </div>
         </div>

         <div class="icons-socials">
            <?php 
               getUrl('#','',['class' => 'facebook fb'],'_blank', 'fab fa-facebook');
               getUrl('#','',['class' => 'fwitter'],'_blank', 'fab fa-twitter');
               getUrl('#','',['class' => 'instagram'],'_blank', 'fab fa-instagram'); 
               getUrl('#','',['class' => 'youtube'],'_blank', 'fab fa-youtube'); 
            ?>
         </div>
      </div>
   </div>

   <nav class="w-100">
      <div class="container d-flex j-content-s-b a-items-center a-content-center">
         <div class="box-logo">
            <img class="logo img-100" src="../../images/logo.png" alt="Logo" srcset="">
         </div>

         <div class="navbar">
            

            <a href="<?= $router->get('home', 'home', 'HomeController') ?>">Accueil</a>
            <a href="<?= $router->get('/about?url=about', 'about') ?>">A propos</a>
            <a href="<?= $router->get('/login?url=login', 'login') ?>">Login</a>
            <a href="<?= $router->get('/contact?url=contact', 'contact')?>">Contact</a>
            <a href="<?= $router->get('/projet?url=projet', 'projet', 'ProjetController')?>">Projet</a>
         </di>
      </div>
   </nav>
</header>