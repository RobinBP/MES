<?php
/**
 * Template Name: Page accordeon
 * Template: chapelle
 */
?>

<?php 
while ( have_rows( 'folds' ) ) : the_row();
    $fold_title = get_sub_field( 'title' );
    $fold_content = get_sub_field( 'content' );
?>
<div class="card">

  <div class="card-header" id="heading-<?php echo get_row_index(); ?>">
    <h2 class="mb-0">
      <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse-<?php echo get_row_index(); ?>" aria-expanded="true" aria-controls="collapse-<?php echo get_row_index(); ?>">
      <?php echo $fold_title; ?>
      </button>
    </h2>
  </div>

  <div id="collapse-<?php echo get_row_index(); ?>" class="collapse show" aria-labelledby="heading-<?php echo get_row_index(); ?>" data-parent="#accordeonExample">
    <div class="card-body">
      <?php echo fold_content; ?>
    </div>
  </div>

</div>
<?php endwhile; ?>