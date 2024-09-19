 <!-- Her laves en custom query til vores grønne CTA Boks hvor der skal vises 4 tilfældige hver gang der loades -->
 <?php
    $ctaDyr = new WP_Query(array(
        'posts_per_page' => 4,
        'post_type' => 'dyr',
        'orderby' => 'rand',
    )); ?>

 <section class="nyVenSec">
     <h3>Din nye ven?</h3>
     <div class="nyVenDiv">
         <?php while ($ctaDyr->have_posts()) {
                $ctaDyr->the_post();
                $internatTid = get_field('tid_ved_internat'); ?>
             <div class="dyr">
                 <a href="<?php echo get_permalink() ?>">
                     <?php the_post_thumbnail('dyrCard'); ?></a>
                 <a href="<?php echo get_permalink() ?>">
                     <h4><?php the_title() ?></h4>
                 </a>
                 <div class="attributeAnimalCTA">
                     <span class="attributeTitleTime">Været hos os siden d.</span>
                     <div class="lineFEP"></div>
                     <span class="attributeTimevalueTime"><?php echo $internatTid ?></span>
                 </div>
             </div>

         <?php
            } ?>

     </div>
     <div class="buttonDiv">
         <a href="<?php echo get_post_type_archive_link('dyr') ?>"><button class="blueButton">Se alle vores dyr</button></a>
     </div>
 </section>