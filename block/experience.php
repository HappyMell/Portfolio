<hr class="m-0">
    <!-- Experience -->
    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
        <h2 class="mb-5"><?php echo the_field('title')?></h2>

<?php $work = get_field('work')?>
        <?php foreach($work as $works) { ?>
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
            <div class="resume-content">
              <h3 class="mb-0"><?php echo $works['title']?></h3>
              <div class="subheading mb-3"><?php echo $works['place']?></div>
              <p><?php echo $works['details']?></p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary"><?php echo $works['date']?></span>
            </div>
          </div>
      <?php  }?>
        

       

    </section>
