		 	<section class="additional-fact-module">
		 		<div class="container">
		 			<div class="row m-0 justify-content-center align-items-center">
		 				<div class="col-12 col-md-6 text-center">
		 					<?php $img = get_field('afm_img'); if($img):?><a href="<?php echo $img['url'];?>" class="lightbox"><img src="<?php echo $img['url'];?>" alt="<?php echo $img['alt'];?>" title="<?php echo $img['alt'];?>"></a><?php endif;?>
		 				</div>
		 				<div class="col-12 col-md-6">
		 					<div class="afm-content"><?php if(get_field('afm_heading')):?>
		 						<h2 class="afm-heading"><?php echo get_field('afm_heading');?></h2><?php endif;?><?php if(get_field('afm_desc')):?>
		 						<p class="afm-desc"><?php echo get_field('afm_desc');?></p><?php endif;?>
		 						<?php $cta = get_field('afm_cta'); if($cta):?>
		 						<a href="<?php echo $cta['url'];?>" class="btn btn-primary"><?php echo $cta['title'];?></a><?php endif;?>
		 					</div>
		 				</div>
		 			</div>
		 		</div>
		 	</section>