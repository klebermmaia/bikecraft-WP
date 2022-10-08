<?php	$portfolioID = get_page_by_title('portfolio')->ID; ?>

<ul class="portfolio_lista rslides_portfolio">
	<?php
		$slide = get_field('slide', $portfolioID);
		if ( isset($slide) ) { foreach ( $slide as $item ) {
	?>
		<li>
		<div class="grid-8">
			<img src="<?php echo $item['grupo-fotos-slide-1']; ?>" alt="Bicicleta Retrô">
		</div>
		<div class="grid-8">
			<img src="<?php echo $item['grupo-fotos-slide-2']; ?>" alt="Bicicleta Passeio">
		</div>
		<div class="grid-16">
			<img src="<?php echo $item['grupo-fotos-slide-3']; ?>" alt="Bicicleta Esporte">
		</div>
	</li>
	<?php } } ?>
</ul>

<?php if ( !is_page('portfolio') ){ ?>
<div class="call">
	<p><?php the_field('chamada-portfolio'); ?></p>
	<a href="/portfolio/" class="btn">Portfólio</a>
</div>
<?php } ?>