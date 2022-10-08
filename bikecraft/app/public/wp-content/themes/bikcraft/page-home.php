<?php
// Template Name: Home
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="introducao">
			<div class="container">
				<h1><?php the_field('titulo-introducao'); ?></h1>
				<blockquote class="quote-externo">
					<p><?php the_field('quote-introducao'); ?></p>
					<cite><?php the_field('citacao-introducao'); ?></cite>
				</blockquote>
				<a href="/bikecraft/produtos/" class="btn">Orçamento</a>
			</div>
		</section>

		<section class="produtos container animar">
			<h2 class="subtitulo">Produtos</h2>

			<ul class="produtos_lista">

				<?php
					$produtos = get_field('produtos-home');
					if ( isset($produtos) ) { foreach ( $produtos as $item ) {
				?>
					<li class="grid-1-3">
						<div class="produtos_icone">
							<img src="<? echo $item['icone'] ?>" alt="Bikcraft Passeio">
						</div>
						<h3><? echo $item['titulo-produto'] ?></h3>
						<p><? echo $item['descricao-produto'] ?></p>
					</li>
				<?php } } ?>
				
			</ul>

			<div class="call">
				<p><?php the_field('chamada-produtos'); ?></p>
				<a href="/bikecraft/produtos/" class="btn btn-preto">Produtos</a>
			</div>

		</section>
		<!-- Fecha Produtos -->

		<section class="portfolio">
			<div class="container">
				<h2 class="subtitulo">Portfólio</h2>
				<?php include(TEMPLATEPATH . '/inc/nosso-portfolio.php' ); ?>
			</div>
		</section>
		<?php include(TEMPLATEPATH . '/inc/qualidade.php' ); ?>
<?php get_footer(); ?>
<?php endwhile; else: endif; ?>