<?php
  $sobreID = get_page_by_title('sobre')->ID;
?>
<section class="qualidade container">
	<h2 class="subtitulo"><?php the_field('titulo-qualidade', $sobreID); ?></h2>
	<img src="<?php the_field('img-qualidade', $sobreID); ?>" alt="Bikcraft">
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
	</ul>
<?php if ( !is_page('sobre') ){ ?>
	<div class="call">
        <p><?php the_field('chamda-sobre', $sobreID) ?></p>
		<a href="/bikecraft/sobre/" class="btn btn-preto">Sobre</a>
	</div>
<?php } ?>
</section>