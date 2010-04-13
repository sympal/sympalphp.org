<?php use_stylesheet('/sfSympalReleasePlugin/css/release.css') ?>

<h1><?php echo get_sympal_content_slot('title') ?></h1>

<?php echo get_sympal_content_slot('archive_filename', array('template' => 'core_release/download_button')) ?>

<div class="release_body">
  <?php echo get_sympal_content_slot('details') ?>
</div>
