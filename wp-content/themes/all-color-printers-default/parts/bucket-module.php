		<section class="bucket-module" >
			<div class="container pt-3 pb-5">
				<div class="bm-wrap">
					<div class="bm-title-wrap">
						<?php if (get_field('bm_heading')): ?>
			    		<h2 class="bm-heading"><?php echo get_field('bm_heading'); ?></h2>
			    	<?php endif ?>
						<?php if (get_field('bm_text')): ?>
			    		<p class="bm-text"><?php echo get_field('bm_text'); ?></p>
			    	<?php endif ?>
		    	</div>
		    </div>
				<div class="row pt-3">
				<?php if (have_rows('bm_items')): while ( have_rows('bm_items') ) : the_row(); ?>
					<?php $bmi_image = get_sub_field('bmi_image');
					$bmi_link = get_sub_field('bmi_link'); ?>
					<div class="col-sm-6 col-md-4">
						<div class="bm-items">
						<?php if ($bmi_image): ?>
						<div class="bmi-image">
							<img src="<?php echo $bmi_image['url']; ?>" alt="<?php echo get_sub_field('bmi_heading'); ?>" title="<?php echo get_sub_field('bmi_heading'); ?>">
						</div>
						<?php endif ?>

						<div class="bm-content-wrap">							
							<?php if (get_sub_field('bmi_heading')): ?>
					    		<h3 class="bmi-heading"><?php echo get_sub_field('bmi_heading'); ?>
					    		</h3>
					    	<?php endif ?>
							<?php if (get_sub_field('bmi_text')): ?>
					    		<p class="bmi-text"><?php echo get_sub_field('bmi_text'); ?></p>
					    	<?php endif ?>
					    	<?php if ($bmi_link): ?>
					    		<div class="bm-cta-wrap">
					    		<a class="btn btn-primary bmi-btn" href="<?php echo $bmi_link['url']; ?>"><?php echo $bmi_link['title']; ?></a></div>
					    	<?php endif;?>
					    	
						</div>
						</div>
					</div>
				<?php endwhile; endif ?>
				</div>
			</div>
		</section>