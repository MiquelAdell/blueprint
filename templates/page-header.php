<?php use Roots\Sage\Titles; ?>

<div class="page-header">
    <?php if (is_home()) { ?>
    	<!-- don't display title (leave this blank) -->
    <?php } else { ?>
    	<h2><?= Titles\title(); ?></h2>
    <?php } ?>
</div>
