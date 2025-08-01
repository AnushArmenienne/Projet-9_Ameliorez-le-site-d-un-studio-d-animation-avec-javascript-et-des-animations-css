<?php
get_header();
?>

<main id="primary" class="site-main">
    <section class="banner">
        <video autoplay loop muted>
            <source src="https://course.oc-static.com/projects/D%C3%A9veloppeur+Web/DWP+IW_P9+Studio+d'animation/Studio+Koukaki-vide%CC%81o+header+sans+son+(1).mp4" type="video/mp4">
        </video>
                <img class="logo floating" src="http://koukaki-p9.local/wp-content/uploads/2024/05/Image-logo-en-paralax.png" alt="logo Fleurs d'oranger & chats errants">
    </section>



  







    <section id="story" class="story">
        <h2 class=""> L'histoire</h2>
             <article id="" class="story__article">
            <p><?php echo get_theme_mod('story'); ?></p>
            </article>

                    <?php get_template_part('swiper-charachters'); ?>
                     
                
        <article id="place">
            <div>
                <img id="big_cloud" src="http://koukaki-p9.local/wp-content/uploads/2024/05/big_cloud.png" alt="nuage">
                <img id="little_cloud" src="http://koukaki-p9.local/wp-content/uploads/2024/05/little_cloud.png" alt="nuage">
                <h3 class="" >Le Lieu</h3>
                <p><?php echo get_theme_mod('place'); ?></p>
            </div>
        </article>
    </section>


    <section class="anush">
      <div class="container reveal">
        <div class="text-container">
          <h2 class="text-box">Studio</h2>
        </div>
      </div>
      <div class="container reveal_vincent">
        <div class="text-container">
          <h2 class="text-box2">Koukaki Anush</h2>
        </div>
      </div>
    </section>





   
    <section id="studio"> 
        <h2>Studio Koukaki</h2>
        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
        </div>
    </section>

    <?php include ("oscars-nomination.php") ?>
</main><!-- #main -->

<?php
get_footer();
?>
