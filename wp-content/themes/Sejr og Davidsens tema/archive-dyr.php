<?php
get_header();

while (have_posts()) {
    the_post();
    $internatTid = get_field('tid_ved_internat');
?>
    <img src="<?php the_post_thumbnail_url('dyrCard') ?>" alt="Billede af et internatdyr">
    <h1><?php the_title(); ?> </h1>
    <p>Været hos os siden d. <?php echo $internatTid; ?>
    </p>
<?php
}

?>