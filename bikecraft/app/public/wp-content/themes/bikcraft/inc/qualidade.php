<?php
    $sobreID = get_page_by_title('sobre')->ID;
?>
<section class="qualidade container">
	<h2 class="subtitulo">Qualidade</h2>
	<img src="<?php echo get_template_directory_uri(); ?>/img/bikcraft-qualidade.png" alt="Bikcraft">
	<ul class="qualidade_lista">
        <?php
            $qualidade = get_field('qualidade', $sobreID);
            if ( isset($qualidade) ) { foreach ( $qualidade as $item ) {
        ?>
            <li class="grid-1-3">
                <h3><?php echo $item['titilo-item-qualidade']; ?></h3>
                <p><?php echo $item['descricao-item-qualidade']; ?></p>
            </li>
        <?php } } ?>
		<!-- <li class="grid-1-3">
			<h3>Durabilidade</h3>
			<p>Sólida como pedra, leve como o vento e resistente como o diamante, são nossos diferenciais.</p>
		</li>
		<li class="grid-1-3">
			<h3>Design</h3>
			<p>Feitas sob medida para o melhor conforto e eficiência. Adaptamos a sua Bikcraft para o seu corpo.</p>
		</li>
		<li class="grid-1-3">
			<h3>Sustentabilidade</h3>
			<p>Além de ajudar a cuidar do meio ambiente, tirando carros da rua, toda a produção é sustentável.</p>
		</li> -->
	</ul>
    <?php if ( !is_page('sobre') ){ ?>
	<div class="call">
        <p><?php the_field('chamda-sobre', $sobre) ?></p>
		<!-- <p>conheça mais a nossa história</p> -->
		<a href="/bikecraft/sobre/" class="btn btn-preto">Sobre</a>
	</div>
    <?php } ?>
</section>