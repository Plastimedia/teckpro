<footer>
	<div class="ancho">
        <div class="columns">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer') ) : ?>
			<?php endif; ?>
        </div>
	</div>	
	<div class="ancho">
		<div class="firma">
			<div class="marca">						
				<!-- <span>ucuuba swimwear colombia 2023</span> -->
			</div>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Firma footer') ) : ?>
			<?php endif; ?>
		</div>
	</div>
</footer>
</div> <!-- Fin de wrapper -->
<?php wp_footer(); ?>
<script>
	window.onload = () => {
			
			setTimeout(() => {
				new WppBtn([
					{
						number: 573206863274,
						title: 'Contacto',
						message: '¡Hola Rapeluches🧸! Estoy en tu sitio web y requiero...'
					},
				], {
					title: '¡Hola! En que te podemos ayudar',
					subtitle: 'El equipo suele responder en unos minutos',
					x: 20,
					y: 60,
				})
			},1000)
		}
</script>
</body>
</html>