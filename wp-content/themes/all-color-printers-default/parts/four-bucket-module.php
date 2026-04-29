<section class="aum-four-bucket-module">
	<?php $images = get_field('aum_f_img_gallery');
							if( $images ): ?>
	<div class="container">
			<div class="row">				
								<?php foreach( $images as $image ): ?>
				<div class="col-12 col-sm-6 col-md-3">
						<a href="<?php echo $image['url']; ?>" class="lightbox"> <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['alt']; ?>"> </a>
				</div>
				<?php endforeach; ?>
							
			</div>
	</div>
	<?php endif; ?>	
</section>