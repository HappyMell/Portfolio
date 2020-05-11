<hr class="m-0">
    <!-- Experience -->
    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="education">
      <div class="w-100">
        <h2 class="mb-5"><?php echo the_field('title')?></h2>

<?php $education = get_field('school')?>
        <?php foreach($education as $learn) { ?>
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="resume-content">
              <h3 class="mb-0"><?php echo $learn['place']?></h3>
              <div class="subheading mb-3"><?php echo $learn['course']?></div>
              <p><?php echo $learn['major']?></p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary"><?php echo $learn['date']?></span>
            </div>
          </div>
      <?php  }?>
        

       

    </section>