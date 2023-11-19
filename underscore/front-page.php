<?php

$first_section = get_field('first_section');
$hero_background = $first_section ['hero_background'];
$hero_title = $first_section ['hero_title'];
$hero_description = $first_section ['hero_description'];
$button = $first_section ['button'];

    //echo '<pre>';
    //print_r($first_section);
    //echo '</pre>';
 get_header();
?>



<main class="home-page">
    <section class="home-section-1">
      <?php  if($hero_background): ?>
        <img class_alias="home-section-image" src="<?php echo $hero_background['url'] ?>" alt="<?php $hero_background['alt'] ?>">
      <?php endif; ?>
            <div class="hero-content">
                <h1 class="hero-title"><?php echo $hero_title ?></h1>
                <p class="hero-text"> <?php echo $hero_description ?></p>

                <a class="hero-button-a" href="#">
                    <div class="hero-button">
                         <div  class="hero-button-text">
                           <?php echo $button ?>
                        </div>
                    </div>
                </a>
                
            </div>

    </section>
</main>
    














