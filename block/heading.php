<?php
/**
 * Block Name: Heading
 */


 $link = get_field('email');
 $link_url = $link['url'];
 $link_title = $link['title']
 ?>

 

<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h1 class="mb-0"><?php echo the_field('first_name')?>
          <span class="text-primary"><?php echo the_field('last_name')?></span>
        </h1>
        <div class="subheading mb-5"> <?php echo the_field('phone_number')?> ·
          <a href="<?php echo $link_url ?>"><?php echo $link_title?></a>
        </div>
        <p class="lead mb-5"><?php echo the_field('about')?>
        </p>
        <div class="social-icons">
          <a href="<?php echo the_field('linkedin')?>">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="<?php echo the_field('github')?>">
            <i class="fab fa-github"></i>
          </a>
         
        </div>
      </div>
    </section>