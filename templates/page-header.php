<?php use Roots\Sage\Titles; ?>

<div class="page-header">
    <?php if (is_home()) { ?>
    	<!-- don't display title (leave this blank) -->
    <?php } else { ?>
    	<h1><?= Titles\title(); ?></h1>
    <?php } ?>
</div>
