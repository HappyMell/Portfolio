<hr class="m-0">
    <!--Skills -->
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
      <div class="w-100">
        <h2 class="mb-5"><?php the_field('title')?></h2>

        <div class="subheading mb-3"><?php the_field('sub_title')?></div>

        <ul class="fa-ul mb-0">
            <?php $skills = get_field('skills')?>
            <?php foreach($skills as $skill) { ?>
            <li>
            <i class="fa-li fa fa-check"></i>
            <?php echo $skill['list']?>
        </li>
        <?php    }?>
          
         
        </ul>
      </div>
    </section>