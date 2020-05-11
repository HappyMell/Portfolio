<hr class="m-0">
    <!--Examples-->
    <section class="resume-section p-3 p-lg-5 d-flex col-lg-12 align-items-center" id="examples">
      <div class="w-100">
        <h2 class="mb-5"><?php echo the_field('title')?></h2>
        <?php if(get_field('examples')): $i = 0; ?>

        <div class="row">
        <?php while(has_sub_field('examples')): $i++; ?>

       
          
                   <!-- Button trigger modal -->
          <button type="button" class="modal-button" data-toggle="modal" data-target="#exampleModal<?php echo $i?>">
            <img class="showing" src="<?php echo the_sub_field('image')?>">
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal<?php echo $i?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel0"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel0"><?php echo the_sub_field('title')?></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php $type = get_sub_field('type'); 
                $carouselImages = get_sub_field('images');
                ?>

                <?php if ($type) {?>

                <div class="modal-body p-4">  
                <div id="modalCarousel-<?php echo $i?>" class="carousel slide" data-ride="carousel" >
                <div class="carousel-inner">   
                <?php $counter = 1?>
                <?php foreach($carouselImages as $carousel)  {?>
                  <div class="carousel-item <?php echo ($counter++ == 1 ) ?  'active' : '' ?>">
                  <div class="carousel-image" style="background-image: url(<?php echo $carousel['modal_images']?>)"> 
                  </div> </div>
                  
                <?php };?>
                </div>
                <a class="carousel-control-prev" href="#modalCarousel-<?php echo $i?>" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#modalCarousel-<?php echo $i?>" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
                </div>
                
                </div>
                <?php };?>

                <div class="modal-footer">
                  <div class="container-fluid buttons">
                    <a type="button" target="_blank" class="btn btn-md btn-outline-secondary" href="<?php echo get_sub_field('site_button')['url']?>">View</a>
                    <a type="button" target="_blank" class="btn btn-md btn-outline-secondary" href="<?php echo get_sub_field('code_button')['url']?>">Code</a>
                  </div>
                </div>

              </div>

            </div>
          </div>
        <?php endwhile?>
        </div>
        <?php endif;?>

    </section>