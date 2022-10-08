<style type="text/css">
	.introducao-interna{
		background: url("<?php the_field('img-background'); ?>") no-repeat center;
		background-size: cover;
	}
</style>

<section class="introducao-interna">
	<div class="container">
		<h1><?php the_field('titulo-introducao-head') ?></h1>
		<p><?php the_field('descrição-introducao-head') ?></p>
	</div>
</section>