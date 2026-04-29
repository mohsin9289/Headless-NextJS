
<?php if( have_rows('flexible_content') ): $i = 0; echo '<section class="additional-content">';
    while ( have_rows('flexible_content') ) : the_row(); $i++; ?>

    <?php if( get_row_layout() == 'tab_content' ): ?>
		<section class="accordian-tabs-module" id="accordian-tabs-module-<?php echo $i ?>">
		 	<div class="container">		 	
		 		<?php if( get_sub_field('section_header')): ?>
					<h2><?php echo get_sub_field('section_header'); ?></h2>
				<?php endif; ?>
				<?php if( get_sub_field('section_subtext')): ?>
					<p class="column-subtext"><?php echo get_sub_field('section_subtext'); ?></p>
				<?php endif; ?>

				<ul class="accordion-tabs">
					<?php if( have_rows('tab_content_row') ): while ( have_rows('tab_content_row') ) : the_row(); ?><li class="tab-header-and-content"><a href="javascript:void(0)" class="tab-link"><?php echo get_sub_field('tab_header'); ?></a><div class="tab-content"><?php echo get_sub_field('tab_body'); ?></div></li><?php endwhile; ?><?php endif; ?>
				</ul>
				<?php if( get_sub_field('divider')): ?>
					<hr>
				<?php endif; ?>			
			</div>
		</section>


	<?php elseif( get_row_layout() == 'full_width_cta' ): ?>
		<section class="full-width-cta-test" id="full-width-cta-test<?php echo $i ?>">

			<?php if( get_sub_field('section_header')): ?>
	          	<div class="container pt-5"><h2 class="cta-banner-header"><?php echo get_sub_field('section_header'); ?></h2></div>
	        <?php endif; ?>

	        <section class="full-width-cta">
                <div class="fwc-wrap">
                    <div class="container">
                    <?php if( get_sub_field('section_body')): ?>
                        <h3 class="fwc-para"><?php echo get_sub_field('section_body'); ?></h3>
                         <?php endif; ?>
                        <?php $fwc_cta = get_sub_field('cta_button'); if($fwc_cta): ?>
                        	<a href="<?php echo $fwc_cta['url']; ?>" class="btn btn-alt-on-color fwc-cta"><?php echo $fwc_cta['title']; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
	        </section>

	        <?php if (get_sub_field('divider')): ?>
	        	<div class="container pt-5"><hr></div>
	        <?php endif ?>
        </section>	

	<?php elseif( get_row_layout() == 'full_width_cta1' ): ?>
		<section class="fullwidth-cta1" id="fullwidth-cta1<?php echo $i ?>" <?php if (get_sub_field('fwc_bg')): ?>style="background-image: url(<?php echo get_sub_field('fwc_bg'); ?>);"<?php endif ?>>
			 <div class="container">
			 	<?php if (get_sub_field('fwc_heading')): ?>
		    		<h2 class="fwc-heading"><?php echo get_sub_field('fwc_heading'); ?></h2>
		    	<?php endif ?>

		    	<?php if (get_sub_field('fwc_description')): ?>
		    		<p class="fwc-description"><?php echo get_sub_field('fwc_description'); ?></p>
		    	<?php endif ?>

		    	<?php 
				$link = get_sub_field('fwc_cta1');
				if( $link ): 
				    $link_url = $link['url'];
				    $link_title = $link['title'];
				    $link_target = $link['target'] ? $link['target'] : '_self';
				    ?>
				    <a class="button btn  btn-primary btn-lg fwc-cta1" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>

				<?php 
				$link = get_sub_field('fwc_cta2');
				if( $link ): 
				    $link_url = $link['url'];
				    $link_title = $link['title'];
				    $link_target = $link['target'] ? $link['target'] : '_self';
				    ?>
				    <a class="button btn btn-outline-light btn-lg fwc-cta2" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>
			 </div>
		</section>

	<?php elseif( get_row_layout() == 'full_width_cta2' ): ?>
		<section class="fullwidth-cta2" id="fullwidth-cta2<?php echo $i ?>" <?php if (get_sub_field('fwc_bg')): ?>style="background-image: url(<?php echo get_sub_field('fwc_bg'); ?>);"<?php endif ?>>
			 <div class="container">
			 	<div class="fwc2-wrap">
			 		<?php if (get_sub_field('fwc_heading')): ?>
			    		<h2 class="fwc2-heading"><?php echo get_sub_field('fwc_heading'); ?></h2>
			    	<?php endif ?>
			    	<?php 
					$link = get_sub_field('fwc_cta1');
					if( $link ): 
					    $link_url = $link['url'];
					    $link_title = $link['title'];
					    $link_target = $link['target'] ? $link['target'] : '_self';
					    ?>
					    <span><a class="button btn  btn-primary btn-lg fwc-cta1" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></span>
					<?php endif; ?>
			 	</div>
			 </div>
		</section>

 	<?php elseif( get_row_layout() == 'multiple_columns' ): ?>
 		<section class="multiple-cols-module" id="multiple_columns<?php echo $i ?>">

		 	<div class="container <?php echo !empty(get_sub_field('container_padding')) ? get_sub_field('container_padding') : 'py-5' ?>">
		 		<div class="row">
			 		<?php if( get_sub_field('section_header')): ?>
						<h2 class="col-12"><?php echo get_sub_field('section_header'); ?></h2>
					<?php endif; ?>
					<?php if( get_sub_field('section_subtext')): ?>
						<p class="column-subtext col-12"><?php echo get_sub_field('section_subtext'); ?></p>
					<?php endif; ?>
				</div>
				<section class="row">
					<?php if (get_sub_field('number_columns') == '2') {
							$gridClass = 'col-md-6';
						} else if (get_sub_field('number_columns') == '3') {
						        $gridClass = 'col-md-4';
						} else if (get_sub_field('number_columns') == '4') {
						        $gridClass = 'col-md-6 col-lg-3';
						} else {
							$gridClass = 'col-12';
						}
						?>

		         	<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row(); ?>
						<div class="<?php echo $gridClass; ?>"><?php echo get_sub_field('content_column'); ?></div>
					<?php endwhile; ?>
					<?php endif; ?>				
				</section>
				<?php if( get_sub_field('divider')): ?>	
					<hr>
				<?php endif; ?>
			</div>
 		</section>	

	<?php elseif( get_row_layout() == 'img_gallery_section' ): ?>
		<?php if( get_sub_field('fullwidth') == false): ?>
			<section class="image-gallery-module" id="img_gallery_section<?php echo $i ?>">
				<div class="container">	
					<div class="row">
						<?php if( get_sub_field('section_header')): ?>
							<h2 class="col-12"><?php echo get_sub_field('section_header'); ?></h2>
						<?php endif; ?>
					</div>
					<section class="row">
						<?php $images = get_sub_field('img_gallery');
							if( $images ): ?>
								<?php foreach( $images as $image ): ?>
									<div  class="<?php if (get_sub_field('number_columns') == '2') {
											echo 'col-md-2';
										} else if (get_sub_field('number_columns') == '3') {
										        echo 'col-md-4';
										} else if (get_sub_field('number_columns') == '4') {
										        echo 'col-md-3';
										}
										?>">
										
				                    	<a href="<?php echo $image['sizes']['large']; ?>" class="lightbox loop-item">
					                    	<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['alt']; ?>"/>
				                    		<h4 class="li-title"><?php echo $image['caption']; ?></h4>
				                    	</a>
									</div>
								<?php endforeach; ?>
							<?php endif; ?>
					</section>
					<?php if( get_sub_field('divider')): ?>
							<hr>
					<?php endif; ?>
				</div>
			</section>
		<?php endif; ?>
		
	<?php elseif( get_row_layout() == 'image_carousel_module' ): ?>
		<section class="image-carousel-module" id="image_carousel_module<?php echo $i ?>">
			<div class="container">
				
		        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<?php if( have_rows('icm_carousel') ): ?>
					<ol class="carousel-indicators">
						<?php while ( have_rows('icm_carousel') ) : the_row(); ?>
						    <li tabindex="0" data-target="#carouselExampleIndicators" data-slide-to="<?php echo get_row_index() - 1 ?>" <?php if (get_row_index()==1): ?>class="active"<?php endif ?>></li>
						<?php endwhile; ?>
					</ol>
					<?php endif; ?>

					<?php if( have_rows('icm_carousel') ): ?>
					<div class="carousel-inner icm-carousel">
						<?php while ( have_rows('icm_carousel') ) : the_row(); ?>
					    <div class="carousel-item <?php if (get_row_index()==1): ?>active<?php endif ?>">
					    	<?php
					    	$icm_img = get_sub_field('icm_img');
					    	if( $icm_img ): ?>
								<a href="<?php echo $image['url'] ?>" class="lightbox"><img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>"></a>
							<?php endif; ?>
					    </div>
						<?php endwhile; ?>
					</div>
					<?php endif; ?>

					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					</a>
				</div>
			</div>
        </section>

    <?php elseif( get_row_layout() == 'img_gallery_with_thumbnails' ): ?>
		<section class="image-gallery-with-thumbs" id="img_gallery_with_thumbnails<?php echo $i ?>">
	        <div class="container">
	          	<?php if( get_sub_field('imt_section_header')): ?>
					<h2><?php echo get_sub_field('imt_section_header'); ?></h2>
				<?php endif; ?>
		        <div class="innerpage-carousel">
	                <div id="slider" class="slides slider-for">
				        <?php $images = get_sub_field('imgwt_gallery');
						if( $images ): ?>
							<?php foreach( $images as $image ): ?>
				          		<div><a href="<?php echo $image['sizes']['large']; ?>" class="lightbox"><img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['alt']; ?>"></a></div>
				           <?php endforeach; ?>
						<?php endif; ?> 
			        </div>
			        <div id="carousel" class="slides slider-nav">
				        <?php $images = get_sub_field('imgwt_gallery');
							if( $images ): ?>
							<?php foreach( $images as $image ): ?>
				          		<div> <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['alt']; ?>"></div>
				         	<?php endforeach; ?>
					  	<?php endif; ?>
			        </div>
		        </div>

	       		<?php if( get_sub_field('divider')): ?>
					<hr>
				<?php endif; ?>
	        </div>
        </section>

	<?php elseif( get_row_layout() == 'click_expand' ): ?>

		<section class="click-expand-module" id="click_expand<?php echo $i ?>">
			<div class="container py-5">
				<?php if( get_sub_field('section_header')): ?>
					<h2><?php echo get_sub_field('section_header'); ?></h2>
				<?php endif; ?>
				<div id="accordion" >
					<?php if (have_rows('accordion')): ?>
						<?php while (have_rows('accordion')): the_row(); ?>
						
						<div class="card">
						    <h3 class="mb-0" id="heading<?php echo get_row_index(); ?>">
						        <button class="btn-link card-header <?php if(get_row_index()!=1): ?>collapsed<?php endif; ?>" data-toggle="collapse" data-target="#collapse<?php echo get_row_index(); ?>" aria-expanded="true" aria-controls="collapse<?php echo get_row_index(); ?>">
						        	<?php echo get_sub_field('section_header'); ?>

						        	<?php if(get_row_index()!=1): ?>
						        		<!-- <i class="fa fa-plus" aria-hidden="true"></i> -->
						        		<span class="material-icons">add</span>
						        	<?php else: ?>
						        		<!-- <i class="fa fa-minus" aria-hidden="true"></i> -->
						        		<span class="material-icons">remove</span>
						        	<?php endif; ?>
						        </button>
						    </h3>

						    <div id="collapse<?php echo get_row_index(); ?>" class="collapse <?php if(get_row_index() == 1) :?>show<?php endif; ?>" aria-labelledby="heading<?php echo get_row_index(); ?>" data-parent="#accordion">
						      	<div class="card-body">
						       		<?php echo get_sub_field('section_body'); ?>
						      	</div>
						    </div>
						</div>
						<?php endwhile ?>
					<?php endif ?>
			  
				</div>
			</div>
		</section>

 			
	<?php elseif( get_row_layout() == 'table' ): ?>
		<section class="tabular-data" id="tabular_data<?php echo $i ?>">
		   <div class="container pb-5">
		        <?php if( get_sub_field('section_header')): ?>
		            <h2 class="headexpand"><?php echo get_sub_field('section_header'); ?></h2>
				<?php endif; ?>

				<?php if( get_sub_field('section_header')): ?>
					<h3 class="column-subtext"><?php echo get_sub_field('section_subtext'); ?></h3>
				<?php endif; ?>

		        <?php if( get_sub_field('table_content')): ?>
		            <div class="table-wrap">
		                <?php echo get_sub_field('table_content'); ?>
		            </div>
		        <?php endif; ?>

			</div>
	        <?php if( get_sub_field('divider')): ?>
				<div class="container"><hr></div>
			<?php endif; ?>
		</section>	

	<?php elseif( get_row_layout() == 'product_grid' ): ?>
		<section class="product-grid-module" id="product_grid<?php echo $i ?>">
			<div class="container">
				<?php if( get_sub_field('section_header')): ?>
					<h2><?php echo get_sub_field('section_header'); ?></h2>
				<?php endif; ?>
				<?php if( get_sub_field('section_subtext')): ?>
					<p class="column-subtext"><?php echo get_sub_field('section_subtext'); ?></p>
				<?php endif; ?>

				<div class="product-carousel <?php if (get_sub_field('carousel')): ?>slick-item-carousel<?php endif ?>">
					
					<ul class="slides row">
						<?php if( have_rows('product_item') ): while ( have_rows('product_item') ) : the_row(); ?>
							<?php 	
																
							$link = get_sub_field('product_url');
							if( $link ): 
								$link_url = $link['url'];
								$link_title = $link['title'];
								?>
								<li class="col-md-3 col-lg-3 col-12">
									<a class="product-item" href="<?php echo esc_url($link_url); ?>">
										<span class="product-img">
											<?php if(get_sub_field('product_picture')) : ?>
												<?php $product_picture = get_sub_field('product_picture'); ?>
												   <figure><img class="pmi-img" src="<?php echo $product_picture['url']; ?>" alt="<?php echo $product_picture['title']; ?>" title="<?php echo $product_picture['title']; ?>"></figure>
											<?php endif; ?>
										</span>									
										<?php if (get_sub_field('product_header')): ?>
											<h2 class="product-header"><?php echo get_sub_field('product_header'); ?></h2> 
										<?php endif ?>
										<?php if ($link_title): ?>
											<span class="product-title"><?php echo esc_html($link_title); ?></span>
										<?php endif ?>
									</a>
								</li>
							<?php endif; ?>
						<?php endwhile; ?>
						<?php endif; ?>
					</ul>
				</div>
			</div>
			<?php if( get_sub_field('divider')): ?>
				<div class="container"><hr></div>
			<?php endif; ?>
		</section>

	<?php elseif( get_row_layout() == 'text_media' ): ?>
		<section class="text-media-module" id="text_media<?php echo $i ?>">
			<div class="container pt-5">
				<?php if( get_sub_field('section_subtext')): ?>
					<p class="column-subtext"><?php echo get_sub_field('section_subtext'); ?></p>
				<?php endif; ?>			
		     	<article class="row">	    		
		    		<div class="col-md-5">
		    			<?php echo get_sub_field('media'); ?>
		    		</div>
		    		<div class="col-md-7 col-last">
			    		<?php if( get_sub_field('section_header')): ?>
						<h2><?php echo get_sub_field('section_header'); ?></h2>
						<?php endif; ?>
		    			<?php echo get_sub_field('text'); ?>
		    		</div>	    		
				</article>
				<?php if( get_sub_field('divider')): ?>
					<hr>
				<?php endif; ?>
			</div>
		</section>


	<?php elseif( get_row_layout() == 'hero_canvas' ): ?>
		<section class="hero-canvas" id="hero_canvas<?php echo $i ?>" <?php if (get_sub_field('hc_bg')): ?>style="background-image: url(<?php echo get_sub_field('hc_bg') ?>);"<?php endif ?>>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-10 col-12 text-center">
						<?php if (get_sub_field('hc_heading')): ?>
							<h2 class="hc-heading"><?php echo get_sub_field('hc_heading') ?></h2>
						<?php endif ?>

					</div>
				</div><?php $cta = get_sub_field('hc_cta'); if($cta):?>
				<div class="hc-cta-wrap"><a class="hc-cta btn btn-alt"href="<?php echo $cta['url'];?>"><?php echo $cta['title'];?></a></div><?php endif;?>
			</div>
		</section>

	<?php elseif( get_row_layout() == 'carousel_with_content' ): ?>
		<section class="carousel-with-content" id="carousel_with_content<?php echo $i ?>">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<?php if( have_rows('cwc_carousel') ): ?>
				<ol class="carousel-indicators">
					<?php while ( have_rows('cwc_carousel') ) : the_row(); ?>
					    <li tabindex="0" data-target="#carouselExampleIndicators" data-slide-to="<?php echo get_row_index() - 1 ?>" <?php if (get_row_index()==1): ?>class="active"<?php endif ?>></li>
					<?php endwhile; ?>
				</ol>
				<?php endif; ?>

				<?php if( have_rows('cwc_carousel') ): ?>
				<div class="carousel-inner cwc-carousel">
					<?php while ( have_rows('cwc_carousel') ) : the_row(); ?>
				    <div class="carousel-item <?php if (get_row_index()==1): ?>active<?php endif ?>" <?php if( get_sub_field('cwc_bg') ): ?>style="background-image: url(<?php echo get_sub_field('cwc_bg') ?>);"<?php endif; ?>>
						<div class="container">
							<div class="row">
								<?php $animation = get_sub_field('animation_style') != 'none' ? get_sub_field('animation_style') . ' animated' : ''; ?>
							    <div class="carousel-content col-md-8 <?php echo $animation; ?>">
							    	<?php if (get_sub_field('cwc_title')): ?>
							    		<h2 class="cwc-title"><?php echo get_sub_field('cwc_title'); ?></h2>
							    	<?php endif ?>

							    	<?php if (get_sub_field('cwc_description')): ?>
							    		<p class="cwc-description"><?php echo get_sub_field('cwc_description'); ?></p>
							    	<?php endif ?>

							    	<?php 
									$link = get_sub_field('cwc_cta1');
									if( $link ): 
									    $link_url = $link['url'];
									    $link_title = $link['title'];
									    $link_target = $link['target'] ? $link['target'] : '_self';
									    ?>
									    <a class="button btn  btn-primary btn-lg cwc-cta1" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									<?php endif; ?>

									<?php 
									$link = get_sub_field('cwc_cta2');
									if( $link ): 
									    $link_url = $link['url'];
									    $link_title = $link['title'];
									    $link_target = $link['target'] ? $link['target'] : '_self';
									    ?>
									    <a class="button btn btn-outline-light btn-lg cwc-cta2" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									<?php endif; ?>
								</div>
							</div>
						</div>
				    </div>
					<?php endwhile; ?>
				</div>
				<?php endif; ?>

					<!--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				</a>-->
			</div>
		</section>




		<?php elseif( get_row_layout() == 'carousel_with_content_hero_1' ): ?>
		<section class="carousel-with-content carousel-with-content-hero-one" id="carousel_with_content<?php echo $i ?>">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<?php if( have_rows('cwc_carousel') ): ?>
				<ol class="carousel-indicators">
					<?php while ( have_rows('cwc_carousel') ) : the_row(); ?>
					    <li tabindex="0" data-target="#carouselExampleIndicators" data-slide-to="<?php echo get_row_index() - 1 ?>" <?php if (get_row_index()==1): ?>class="active"<?php endif ?>></li>
					<?php endwhile; ?>
				</ol>
				<?php endif; ?>

				<?php if( have_rows('cwc_carousel') ): ?>
				<div class="carousel-inner cwc-carousel">
					<?php while ( have_rows('cwc_carousel') ) : the_row(); ?>
				    <div class="carousel-item <?php if (get_row_index()==1): ?>active<?php endif ?>" <?php if( get_sub_field('cwc_bg') ): ?>style="background-image: url(<?php echo get_sub_field('cwc_bg') ?>);"<?php endif; ?>>
						<div class="container">
							<div class="row">
								<?php $animation = get_sub_field('animation_style') != 'none' ? get_sub_field('animation_style') . ' animated' : ''; ?>
							    <div class="carousel-content col-md-8 <?php echo $animation; ?>">
							    	<?php if (get_sub_field('cwc_title')): ?>
							    		<h2 class="cwc-title"><?php echo get_sub_field('cwc_title'); ?></h2>
							    	<?php endif ?>

							    	<?php if (get_sub_field('cwc_description')): ?>
							    		<p class="cwc-description"><?php echo get_sub_field('cwc_description'); ?></p>
							    	<?php endif ?>

							    	<?php 
									$link = get_sub_field('cwc_cta1');
									if( $link ): 
									    $link_url = $link['url'];
									    $link_title = $link['title'];
									    $link_target = $link['target'] ? $link['target'] : '_self';
									    ?>
									    <a class="button btn  btn-primary btn-lg cwc-cta1" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									<?php endif; ?>

									<?php 
									$link = get_sub_field('cwc_cta2');
									if( $link ): 
									    $link_url = $link['url'];
									    $link_title = $link['title'];
									    $link_target = $link['target'] ? $link['target'] : '_self';
									    ?>
									    <a class="button btn btn-outline-light btn-lg cwc-cta2" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									<?php endif; ?>
								</div>
								<div class="carousel-content-image col-md-4"><?php if(get_sub_field('product_image')) : ?>
												<?php $product_picture = get_sub_field('product_image'); ?>
												   <img src="<?php echo $product_picture['url']; ?>" alt="<?php echo $product_picture['title']; ?>" title="<?php echo $product_picture['title']; ?>">
											<?php endif; ?></div>
							</div>
						</div>
				    </div>
					<?php endwhile; ?>
				</div>
				<?php endif; ?>

				<!--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				</a>-->
			</div>
		</section>




	<?php elseif( get_row_layout() == 'blocks_hovered_content_grid' ): ?>
		<section class="blocks-hover-content-grid text-center" id="blocks_hovered_content_grid<?php echo $i ?>">
			<div class="container">
				<div class="row bhcg-content-wrap">
					<div class="col-12">
						<?php if (get_sub_field('bhcg_heading')): ?>
				    		<h2 class="bhcg-heading"><?php echo get_sub_field('bhcg_heading'); ?></h2>
				    	<?php endif ?>

				    	<?php if (get_sub_field('bhcg_descritpion')): ?>
				    		<p class="bhcg-description"><?php echo get_sub_field('bhcg_descritpion'); ?></p>
				    	<?php endif ?>
					</div>
				</div>

				<?php if( have_rows('bhcg_blocks') ): ?>
				<div class="row bhcg-listing"  id="bhcg_blocks<?php echo $i ?>">
					<?php while ( have_rows('bhcg_blocks') ) : the_row(); ?>
					<div class="col-lg-4">
						    <div class="bhcg-item" tabindex="0">
						    	
						    	<?php 
								$image = get_sub_field('bhcg_image');
								if( !empty( $image ) ): ?>
								    <img class="bhcg-item-img" src="<?php echo esc_url($image['sizes'][ 'large' ]); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>

								<div class="bhcg-hover-content">
									<?php if (get_sub_field('bhcg_item_title')): ?>
										<h3 class="bhcg-item-title"><?php echo get_sub_field('bhcg_item_title') ?></h3>
									<?php endif ?>

									<?php if (get_sub_field('bhcg_item_description')): ?>
										<p class="bhcg-item-description"><?php echo get_sub_field('bhcg_item_description'); ?></p>
									<?php endif ?>

									<?php 
									$link = get_sub_field('bhcg_item_link');
									if( $link ): 
									    $link_url = $link['url'];
									    $link_title = $link['title'] ? $link['title'] : 'Subheader';
									    $link_target = $link['target'] ? $link['target'] : '_self';
									    ?>
										<a class="bhcg-item-btn btn btn-outline-light btn-lg" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									<?php endif; ?>
								</div>
						    		
						    </div>

						</div>
					<?php endwhile; ?>
				</div>
				<?php endif; ?>

				<?php 
				$link = get_sub_field('bhcg_section_link');
				if( $link ): 
				    $link_url = $link['url'];
				    $link_title = $link['title'];
				    $link_target = $link['target'] ? $link['target'] : '_self';
				    ?>
				    <a class="button btn btn-primary btn-lg bhcg-section-cta" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>
			</div>
		</section>

		<?php elseif( get_row_layout() == 'four_blocks_hovered_content_grid' ): ?>
		<section class="four_blocks-hover-content-grid text-center" id="four_blocks_hovered_content_grid<?php echo $i ?>">
			<div class="container">
				<div class="row fbhcg-content-wrap">
					<div class="col-12">
						<?php if (get_sub_field('fbhcg_heading')): ?>
				    		<h2 class="fbhcg-heading"><?php echo get_sub_field('fbhcg_heading'); ?></h2>
				    	<?php endif ?>

				    	<?php if (get_sub_field('fbhcg_descritpion')): ?>
				    		<p class="fbhcg-description"><?php echo get_sub_field('fbhcg_descritpion'); ?></p>
				    	<?php endif ?>
					</div>
				</div>

				
				<div class="row fbhcg-listing"  id="fbhcg_blocks<?php echo $i ?>" <?php if (get_sub_field('fbhcg_bg')): ?>style="background-image: url(<?php echo get_sub_field('fbhcg_bg') ?>);"<?php endif ?>>
					<?php if( have_rows('fbhcg_blocks') ): ?><?php while ( have_rows('fbhcg_blocks') ) : the_row(); ?>
					<div class="col-lg-3">
						    <div class="fbhcg-item" tabindex="0">
								<div class="fbhcg-hover-content">
									<?php if (get_sub_field('fbhcg_item_title')): ?>
										<h3 class="fbhcg-item-title"><?php echo get_sub_field('fbhcg_item_title') ?></h3>
									<?php endif ?>

									<?php if (get_sub_field('fbhcg_item_description')): ?>
										<p class="fbhcg-item-description"><?php echo get_sub_field('fbhcg_item_description'); ?></p>
									<?php endif ?>

									<?php 
									$link = get_sub_field('fbhcg_item_link');
									if( $link ): 
									    $link_url = $link['url'];
									    $link_title = $link['title'] ? $link['title'] : 'Subheader';
									    $link_target = $link['target'] ? $link['target'] : '_self';
									    ?>
										<a class="fbhcg-item-btn btn btn-outline-light btn-lg" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									<?php endif; ?>
								</div>
						    		
						    </div>

						</div>
					<?php endwhile; ?><?php endif; ?>
				</div>
				
			</div>
		</section>

<?php elseif( get_row_layout() == 'content_gallery_one_hovered_content_grid' ): ?>
		<section class="content-gallery-one-hover-content-grid" id="content_one_hovered_content_grid<?php echo $i ?>">
			<div class="container">
				<div class="row cgohcg-content-wrap">
					<div class="col-lg-3">
						<?php if (get_sub_field('cgohcg_heading')): ?>
				    		<h2 class="cgohcg-heading"><?php echo get_sub_field('cgohcg_heading'); ?></h2>
				    	<?php endif ?>

				    	<?php if (get_sub_field('cgohcg_descritpion')): ?>
				    		<p class="cgohcg-description"><?php echo get_sub_field('cgohcg_descritpion'); ?></p>
				    	<?php endif ?>
				    	<?php 
				$link = get_sub_field('cgohcg_section_link');
				if( $link ): 
				    $link_url = $link['url'];
				    $link_title = $link['title'];
				    $link_target = $link['target'] ? $link['target'] : '_self';
				    ?>
				    <a class="button btn btn-primary btn-lg cgohcg-section-cta" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>
					</div>
					<div class="col-lg-9 col-md-12">
				<?php if( have_rows('cgohcg_blocks') ): ?>
				<div class="row cgohcg-listing"  id="cgohcg_blocks<?php echo $i ?>">
					<?php while ( have_rows('cgohcg_blocks') ) : the_row(); ?>
					<div class="col-lg-4 col-md-4">
						    <div class="cgohcg-item" tabindex="0">
						    	
						    	<?php 
								$image = get_sub_field('cgohcg_image');
								if( !empty( $image ) ): ?>
								    <img class="cgohcg-item-img" src="<?php echo esc_url($image['sizes'][ 'large' ]); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>

								<div class="cgohcg-hover-content">
									<?php if (get_sub_field('cgohcg_item_title')): ?>
										<h3 class="cgohcg-item-title"><?php echo get_sub_field('cgohcg_item_title') ?></h3>
									<?php endif ?>

									<?php if (get_sub_field('cgohcg_item_description')): ?>
										<p class="cgohcg-item-description"><?php echo get_sub_field('cgohcg_item_description'); ?></p>
									<?php endif ?>

									<?php 
									$link = get_sub_field('cgohcg_item_link');
									if( $link ): 
									    $link_url = $link['url'];
									    $link_title = $link['title'] ? $link['title'] : 'Subheader';
									    $link_target = $link['target'] ? $link['target'] : '_self';
									    ?>
										<a class="cgohcg-item-btn btn btn-outline-light btn-lg" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									<?php endif; ?>
								</div>
						    		
						    </div>

						</div>
					<?php endwhile; ?>
				</div>
				<?php endif; ?>
					</div>
				</div>
			</div>
		</section>

<?php elseif( get_row_layout() == 'content_gallery_two_hovered_content_grid' ): ?>
		<section class="content-gallery-two-hover-content-grid" id="content_gallery_two_hovered_content_grid<?php echo $i ?>">
			<div class="container">
				<div class="row cgthcg-content-wrap">
					<div class="col-12">
						<?php if (get_sub_field('cgthcg_heading')): ?>
				    		<h2 class="cgthcg-heading"><?php echo get_sub_field('cgthcg_heading'); ?></h2>
				    	<?php endif ?>

				    	<?php if (get_sub_field('cgthcg_descritpion')): ?>
				    		<p class="cgthcg-description"><?php echo get_sub_field('cgthcg_descritpion'); ?></p>
				    	<?php endif ?>
					</div>
				</div>

				<?php if( have_rows('cgthcg_blocks') ): ?>
				<div class="row cgthcg-listing"  id="cgthcg_blocks<?php echo $i ?>">
					<?php while ( have_rows('cgthcg_blocks') ) : the_row(); ?>
					<div class="col-lg-6">
						    <div class="cgthcg-item <?php if (get_sub_field('cgthcg_small_box')): ?>cgthcg-item-small<?php endif ?>"  tabindex="0">
						    	
						    	<?php 
								$image = get_sub_field('cgthcg_image');
								if( !empty( $image ) ): ?>
								    <img class="cgthcg-item-img" src="<?php echo esc_url($image['sizes'][ 'large' ]); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>

								<div class="cgthcg-hover-content">
									<?php if (get_sub_field('cgthcg_item_title')): ?>
										<h3 class="cgthcg-item-title"><?php echo get_sub_field('cgthcg_item_title') ?></h3>
									<?php endif ?>

									<?php if (get_sub_field('cgthcg_item_description')): ?>
										<p class="cgthcg-item-description"><?php echo get_sub_field('cgthcg_item_description'); ?></p>
									<?php endif ?>

									<?php 
									$link = get_sub_field('cgthcg_item_link');
									if( $link ): 
									    $link_url = $link['url'];
									    $link_title = $link['title'] ? $link['title'] : 'Subheader';
									    $link_target = $link['target'] ? $link['target'] : '_self';
									    ?>
										<a class="cgthcg-item-btn btn btn-outline-light btn-lg" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									<?php endif; ?>
								</div>
						    		
						    </div>

						    <div class="cgthcg-item <?php if (get_sub_field('cgthcg_two_small_box')): ?>cgthcg-item-small<?php endif ?>"  tabindex="0">
						    	
						    	<?php 
								$image = get_sub_field('cgthcg_two_image');
								if( !empty( $image ) ): ?>
								    <img class="cgthcg-item-img" src="<?php echo esc_url($image['sizes'][ 'large' ]); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>

								<div class="cgthcg-hover-content">
									<?php if (get_sub_field('cgthcg_two_item_title')): ?>
										<h3 class="cgthcg-item-title"><?php echo get_sub_field('cgthcg_two_item_title') ?></h3>
									<?php endif ?>

									<?php if (get_sub_field('cgthcg_two_item_description')): ?>
										<p class="cgthcg-item-description"><?php echo get_sub_field('cgthcg_two_item_description'); ?></p>
									<?php endif ?>

									<?php 
									$link2 = get_sub_field('cgthcg_two_item_link');
									if( $link2 ): 
									    $link_url2 = $link2['url'];
									    $link_title2 = $link2['title'] ? $link2['title'] : 'Subheader';
									    $link_target2 = $link2['target'] ? $link2['target'] : '_self';
									    ?>
										<a class="cgthcg-item-btn btn btn-outline-light btn-lg" href="<?php echo esc_url( $link_url2 ); ?>" target="<?php echo esc_attr( $link_target2 ); ?>"><?php echo esc_html( $link_title2 ); ?></a>
									<?php endif; ?>
								</div>
						    		
						    </div>

						</div>
					<?php endwhile; ?>
				</div>
				<?php endif; ?>

				<?php 
				$link = get_sub_field('cgthcg_section_link');
				if( $link ): 
				    $link_url = $link['url'];
				    $link_title = $link['title'];
				    $link_target = $link['target'] ? $link['target'] : '_self';
				    ?>
				    <a class="button btn btn-primary btn-lg bhcg-section-cta" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>
			</div>
		</section>

	<?php elseif( get_row_layout() == 'blocks_grid' ): ?>
		<section class="blocks-grid text-center" id="blocks_grid<?php echo $i ?>">
			<div class="container">
				<div class="row bg-content-wrap">
					<div class="col-12">
						<?php if (get_sub_field('bg_heading')): ?>
				    		<h2 class="bg-heading"><?php echo get_sub_field('bg_heading'); ?></h2>
				    	<?php endif ?>

				    	
					</div>
				</div>

				<?php if( have_rows('bg_blocks') ): ?>
				<div class="row bg-listing">
					<?php while ( have_rows('bg_blocks') ) : the_row(); ?>
					<div class="col-lg-3 col-12 col-sm-6 bg-item">
						<?php 
						$link = get_sub_field('bg_item_link');
						if( $link ): 
						    $link_url = $link['url'];
						    $link_title = $link['title'] ? $link['title'] : 'Subheader';
						    $link_target = $link['target'] ? $link['target'] : '_self';
						    ?>
						    <a class="d-block bg-item-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
						    	
						    	<?php 
								$image = get_sub_field('bg_image');
								if( !empty( $image ) ): ?>
								    <img class="bg-item-img" src="<?php echo esc_url($image['sizes'][ 'block-thumb' ]); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['alt']); ?>" width="<?php echo $image['width'] ?>" height="<?php echo $image['height']; ?>" />
								<?php endif; ?>

						    	<span class="bg-item-title"><?php echo esc_html( $link_title ); ?></span>
						    		
						    </a>
						<?php endif; ?>

						</div>
					<?php endwhile; ?>
				</div>
				<?php endif; ?>

				
			</div>
		</section>

	<?php elseif( get_row_layout() == 'bootstrap_tabs' ): ?>
		<section class="bootstrap-tabs" id="bootstrap_tabs<?php echo $i ?>">
			<div class="container">
				<?php if( have_rows('bt_tab') ): ?>
				<ul  class="nav nav-tabs" role="tablist">
				<?php while ( have_rows('bt_tab') ) : the_row(); ?>
					<li class="bt-nav-item">
		        		<a  href="#tab<?php echo get_row_index(); ?>" data-toggle="tab" class="<?php if (get_row_index()==1): ?>active<?php endif; ?>" role="tab"><?php echo get_sub_field('bt_tab_title'); ?></a>
					</li>
				<?php endwhile; ?>
				</ul>
				<?php endif; ?>

				<?php if( have_rows('bt_tab') ): ?>
				<div class="tab-content clearfix">
					<?php while ( have_rows('bt_tab') ) : the_row(); ?>

					<div class="tab-pane <?php if (get_row_index()==1): ?>active<?php endif ?>" id="tab<?php echo get_row_index(); ?>" role="tabpanel">
						<div class="panel panel-default">
					        <div class="panel-heading">
						        <h4 class="panel-title">
						            <a data-toggle="collapse" data-parent=".tab-pane" href="#collapse<?php echo get_row_index(); ?>">
						              <?php echo get_sub_field('bt_tab_title'); ?>
						            </a>
						        </h4>
					        </div>

					        <div id="collapse<?php echo get_row_index(); ?>" class="panel-collapse collapse in">
								<?php if (get_sub_field('bt_tab_body')): ?>
									
				          			<div class="bt-tab-body panel-body row">
					          			<div class="col-md-5">
					          				<?php 
											$image = get_sub_field('bt_image');
											if( !empty( $image ) ): ?>
											    <img class="bt-tab-img" src="<?php echo esc_url($image['sizes'][ 'block-thumb' ]); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['alt']); ?>" />
											<?php endif; ?>
					          			</div>

					          			<div class="col-md-5">
					          				<?php if (get_sub_field('bt_subheading')): ?>
									    		<h4 class="bt-subheading"><?php echo get_sub_field('bt_subheading'); ?></h4>
									    	<?php endif ?>
					          				<?php if (get_sub_field('bt_heading')): ?>
									    		<h2 class="bt-heading"><?php echo get_sub_field('bt_heading'); ?></h2>
									    	<?php endif ?>

									    	<?php if (get_sub_field('bt_tab_body')): ?>
									    		<p class="bt-description"><?php echo get_sub_field('bt_tab_body'); ?></p>
									    	<?php endif ?>

									    	<?php 
											$link = get_sub_field('bt_cta');
											if( $link ): 
											    $link_url = $link['url'];
											    $link_title = $link['title'];
											    $link_target = $link['target'] ? $link['target'] : '_self';
											    ?>
											    <a class="button btn btn-primary btn-lg bg-section-cta" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
											<?php endif; ?>
					          			</div>
				          			</div>
								<?php endif ?>
			          		</div>
			          	</div>

					</div>

					<?php endwhile; ?>
				</div>
				<?php endif; ?>
			</div>
		</section>
		<?php elseif( get_row_layout() == 'content_value_prop_tabs' ): ?>
		<section class="bootstrap-tabs content-value-prop-tabs" id="content_value_prop_tabs<?php echo $i ?>">
			<div class="container">
				<?php if( have_rows('cvpt_tab') ): ?>
				<ul  class="nav nav-tabs" role="tablist">
				<?php while ( have_rows('cvpt_tab') ) : the_row(); ?>
					<li class="bt-nav-item">
		        		<a  href="#cvptab<?php echo get_row_index(); ?>" data-toggle="tab" class="<?php if (get_row_index()==1): ?>active<?php endif; ?>" role="tab"><?php echo get_sub_field('cvpt_tab_title'); ?></a>
					</li>
				<?php endwhile; ?>
				</ul>
				<?php endif; ?>

				<?php if( have_rows('cvpt_tab') ): ?>
				<div class="tab-content clearfix">
					<?php while ( have_rows('cvpt_tab') ) : the_row(); ?>

					<div class="tab-pane <?php if (get_row_index()==1): ?>active<?php endif ?>" id="cvptab<?php echo get_row_index(); ?>" role="tabpanel">
						<div class="panel panel-default">
					        <div class="panel-heading">
						        <h4 class="panel-title">
						            <a data-toggle="collapse" data-parent=".tab-pane" href="#collapse<?php echo get_row_index(); ?>">
						              <?php echo get_sub_field('cvpt_tab_title'); ?>
						            </a>
						        </h4>
					        </div>

					        <div id="collapse<?php echo get_row_index(); ?>" class="panel-collapse collapse in">
								<?php if (get_sub_field('cvpt_tab_body')): ?>
									
				          			<div class="bt-tab-body panel-body row">
					          			<div class="col-md-6">
					          				<?php 
											$image = get_sub_field('cvpt_image');
											if( !empty( $image ) ): ?>
											    <img class="bt-tab-img" src="<?php echo esc_url($image['sizes'][ 'large' ]); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['alt']); ?>" />
											<?php endif; ?>
					          			</div>

					          			<div class="col-md-6">
					          				<?php if (get_sub_field('cvpt_subheading')): ?>
									    		<h4 class="cvpt-subheading"><?php echo get_sub_field('cvpt_subheading'); ?></h4>
									    	<?php endif ?>
					          				<?php if (get_sub_field('cvpt_heading')): ?>
									    		<h2 class="cvpt-heading"><?php echo get_sub_field('cvpt_heading'); ?></h2>
									    	<?php endif ?>

									    	<?php if (get_sub_field('cvpt_tab_body')): ?>
									    		<p class="cvpt-description"><?php echo get_sub_field('cvpt_tab_body'); ?></p>
									    	<?php endif ?>

									    	<?php 
											$link = get_sub_field('cvpt_cta');
											if( $link ): 
											    $link_url = $link['url'];
											    $link_title = $link['title'];
											    $link_target = $link['target'] ? $link['target'] : '_self';
											    ?>
											    <a class="button btn btn-primary btn-lg bg-section-cta" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
											<?php endif; ?>
					          			</div>
				          			</div>
								<?php endif ?>
			          		</div>
			          	</div>

					</div>

					<?php endwhile; ?>
				</div>
				<?php endif; ?>
			</div>
		</section>
	<?php elseif( get_row_layout() == 'hero_tabs_selector' ): ?>
		<section class="hero-tabs-selector" id="hero_tabs_selector<?php echo $i ?>">
			<div class="hts-slider">
				<?php if( have_rows('hts__tab') ): ?><?php while ( have_rows('hts__tab') ) : the_row(); ?>
			    <div class="hts-item-wrap">
			    	<div class="row hts-item" <?php if (get_sub_field('hts_bg')): ?>style="background-image: url(<?php echo get_sub_field('hts_bg'); ?>);"<?php endif ?>>
			    		<div class="container">
			    			<?php if (get_sub_field('hts_heading')): ?>
								<h2 class="hts-heading"><?php echo get_sub_field('hts_heading'); ?></h2>
							<?php endif ?>
			    			<div class="hts-cta-wrap">
			    			<?php 
							$link = get_sub_field('hts_cta');
							if( $link ): 
							    $link_url = $link['url'];
							    $link_title = $link['title'] ? $link['title'] : 'Learn More';
							    $link_target = $link['target'] ? $link['target'] : '_self';
							    ?>
			              		<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn btn-primary hts-one"><?php echo esc_html( $link_title ); ?></a>
			              	<?php endif ?>
							  <?php 
							$link2 = get_sub_field('hts_two_cta');
							if( $link2 ): 
							    $link_url = $link2['url'];
							    $link_title = $link2['title'] ? $link2['title'] : 'Learn More';
							    $link_target = $link2['target'] ? $link2['target'] : '_self';
							    ?>
			              		<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn btn-primary hts-one"><?php echo esc_html( $link_title ); ?></a>
			              	<?php endif ?>
			              	</div>
			    		</div>
			    	</div>
			    	<div class="slider-nav">
			    		<span><?php echo get_sub_field('hts__tab_title'); ?></span>
			    		<?php 
							$link3 = get_sub_field('hts_more_cta');
							if( $link3 ): 
							    $link_url = $link3['url'];
							    $link_title = $link3['title'] ? $link3['title'] : 'MORE INFORMATION';
							    $link_target = $link3['target'] ? $link3['target'] : '_self';
							    ?>
			              		<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="hts-more-cta"><?php echo esc_html( $link_title ); ?></a>
			              	<?php endif ?>
			    	</div>
			    </div>
			    <?php endwhile; ?>
			    <?php endif; ?>
			</div>
		</section>
	<?php elseif( get_row_layout() == 'left_img_right_content_module' ): ?>
		<section class="left-img-right-content-module" id="left_img_right_content_module<?php echo $i ?>">
			<div class="container py-5">
				<div class="lircm-wrap">
          			<div class="lircm-img-wrap">
          				<?php 
						$image = get_sub_field('lircm_image');
						if( !empty( $image ) ): ?>
						    <img class="lircm-tab-img" src="<?php echo esc_url($image['url' ]); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
          			</div>

          			<div class="lircm-content-wrap">
          				<?php if (get_sub_field('lircm_subheading')): ?>
				    		<h4 class="lircm-subheading"><?php echo get_sub_field('lircm_subheading'); ?></h4>
				    	<?php endif ?>
          				<?php if (get_sub_field('lircm_heading')): ?>
				    		<h2 class="lircm-heading"><?php echo get_sub_field('lircm_heading'); ?></h2>
				    	<?php endif ?>

				    	<?php if (get_sub_field('lircm_content')): ?>
				    		<p class="lircm-description"><?php echo get_sub_field('lircm_content'); ?></p>
				    	<?php endif ?>

				    	<?php 
						$link = get_sub_field('lircm_cta');
						if( $link ): 
						    $link_url = $link['url'];
						    $link_title = $link['title'];
						    $link_target = $link['target'] ? $link['target'] : '_self';
						    ?>
						    <a class="button btn btn-primary btn-lg lircm-cta" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>
          			</div>
				</div>
			</div>
		</section>

	<?php elseif( get_row_layout() == 'call_to_action_buttons_module' ): ?>
		<section class="call-to-action-buttons-module" id="call_to_action_buttons_module<?php echo $i ?>">
			<?php if( have_rows('ctabm_btns') ):  while ( have_rows('ctabm_btns') ) : the_row(); ?>
				<div class="ctabm-wrap ctabm-btn-<?php echo get_row_index() ?>">
					<?php 
					$link = get_sub_field('ctabm_btn');
					if( $link ): 
					    $link_url = $link['url'];
					    $link_title = $link['title'];
					    $link_target = $link['target'] ? $link['target'] : '_self';
					    ?>
					    <a class="ctabm-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
					    	<span><?php echo $link_title; ?></span><?php echo get_sub_field('ctabm_cta_icon'); ?>
					    </a>
					<?php endif; ?>
				</div>
			<?php endwhile; endif; ?>

		</section>

	<?php elseif( get_row_layout() == 'blog_module1' ): ?>
		<section class="blog-module1" id="blog_module1<?php echo $i ?>">
			<div class="container">
				<?php if (get_sub_field('blog_heading')): ?>
					<h2 class="blog-heading text-center"><?php echo get_sub_field('blog_heading') ?></h2>
				<?php endif ?>

				<?php
				$post_type = get_sub_field('post_type') ? get_sub_field('post_type') : 'post';
				$posts_per_page = get_sub_field('posts_per_page') ? get_sub_field('posts_per_page') : 2; 
				?>
				<?php 
				$args = array( 
					'post_type'   => $post_type,
					'post_status' => 'publish',
					'posts_per_page' => (int)$posts_per_page
				);
				$the_query = new WP_Query( $args );

				if ( $the_query->have_posts() ) : 
				?>
				<div class="row blog-listing">
					<?php while( $the_query->have_posts() ) : $the_query->the_post() ?>
						<div class="col-12 col-lg-6">
							<a class="blog-item" href="<?php the_permalink() ?>" title="<?php the_title() ?>">
								<div class="blog-item-bg" <?php if (has_post_thumbnail()): ?>style="background-image: url(<?php the_post_thumbnail_url(); ?>);"<?php endif ?>></div>
								<h3 class="post-title"><?php the_title(); ?></h3>
								<div class="post-meta">
									<time class="post-date" datetime="<?php echo get_the_date('F j, Y'); ?>" itemprop="datePublished"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo get_the_date('F j, Y'); ?></time>
									<span class="post-readmore"><i class="fa fa-plus-circle" aria-hidden="true"></i> Read More</span>
								</div>
							</a>
						</div>
					<?php endwhile ?>
					<?php wp_reset_postdata(); ?>
				</div>

				<?php else : ?>
					<h3 class="no-posts">No post to display.</h3>
				<?php endif ?>
			</div>
		</section>

	<?php elseif( get_row_layout() == 'blog_module2' ): ?>
		<section class="blog-module2" id="blog_module2<?php echo $i ?>">
			<div class="container">
				<?php if (get_sub_field('blog_heading')): ?>
					<h2 class="blog-heading text-center"><?php echo get_sub_field('blog_heading') ?></h2>
				<?php endif ?>

				<?php
				$post_type = get_sub_field('post_type');
				$posts_per_page = get_sub_field('posts_per_page'); ?>
				<?php 
				$args = array( 
					'post_type'   => $post_type,
					'post_status' => 'publish',
					'post_per_page' => (int)$posts_per_page
				);
				$the_query = new WP_Query( $args );

				if ( $the_query->have_posts() ) : 
				?>
				<div class="row blog2-listing">
					<?php while( $the_query->have_posts() ) : $the_query->the_post() ?>
						<div class=" col-12 col-md-6 col-lg-4 blog2-item">
							<?php if (has_post_thumbnail()): ?>
								<div class="blog2-img"><a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url('post-thumb'); ?>" alt="<?php the_title() ?>" title="<?php the_title() ?>"></a></div>
							<?php endif ?>

							<h3 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
							<div class="post-meta">
								<time class="post-date" datetime="<?php echo get_the_date('F j, Y'); ?>" itemprop="datePublished"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo get_the_date('F j, Y'); ?></time>
								<a href="<?php the_permalink() ?>"><i class="fa fa-plus-circle" aria-hidden="true"></i> Read More</a>
							</div>
						</div>
					<?php endwhile ?>
					<?php wp_reset_postdata(); ?>
				</div>
				<?php else : ?>
					<h3 class="no-posts">No post to display.</h3>
				<?php endif ?>
			</div>
		</section>

	<?php elseif( get_row_layout() == 'bg_img_content_module1' ): ?>
		<section class="bg-img-content-module1" id="bg_img_content_module1<?php echo $i ?>">
			<div class="container">
				<?php if (get_sub_field('bicm_section_heading')): ?>
					<h2 class="bicm-section-heading"><?php echo get_sub_field('bicm_section_heading'); ?></h2>
				<?php endif ?>

				<?php if (get_sub_field('bicm_description')): ?>
					<p class="bicm-description"><?php echo get_sub_field('bicm_description') ?></p>
				<?php endif ?>
			</div>

			<div class="bicm-listing container-fluid <?php echo get_sub_field('bicm_text_alignment') ?>">
				<?php if (have_rows('bicm_items')): ?>
					<?php while (have_rows('bicm_items')): the_row();
						$animation = get_sub_field('bicm_animation_style') != 'none' ? get_sub_field('bicm_animation_style') . ' wow' : '';
						?>
						<div class="bicm-items row" <?php if (get_sub_field('bicm_item_bg')): ?>style="background-image: url(<?php echo get_sub_field('bicm_item_bg') ?>)"<?php endif ?>>
							
							<div class="col-md-6 bicm-content-wrap">
								<div class="bicm-content <?php echo $animation;  ?>">
									<?php
									$bicm_icon = get_sub_field('bicm_icon');
									if (get_sub_field('bicm_icon')): ?>
										<img class="bicm-right-icon" src="<?php echo $bicm_icon['url']; ?>" alt="<?php echo $bicm_icon['alt']; ?>" title="<?php echo $bicm_icon['title']; ?>">
									<?php endif ?>
									<?php if (get_sub_field('bicm_title')): ?>
										<h3 class="bicm-title"><?php echo get_sub_field('bicm_title'); ?></h3>
									<?php endif ?>
									<?php if (get_sub_field('bicm_description')): ?>
										<div class="bicm-description"><?php echo get_sub_field('bicm_description'); ?></div>
									<?php endif ?>

									<?php 
									$link = get_sub_field('bicm_item_link');
									if( $link ): 
									    $link_url = $link['url'];
									    $link_title = $link['title'] ? $link['title'] : 'Subheader';
									    $link_target = $link['target'] ? $link['target'] : '_self';
									    ?>
										<a class="icm-item-btn button btn btn-outline-light btn-lg " href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									<?php endif; ?>
								</div>
							</div>

							<div class="col-md-6 bicm-img-wrap">
								<img class="bicm-left-img" src="<?php echo get_sub_field('bicm_item_bg') ?>" alt="<?php echo get_sub_field('bicm_title'); ?>" title="<?php echo get_sub_field('bicm_title'); ?>">
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif ?>
			</div>
		</section>



		<?php elseif( get_row_layout() == 'bg_img_content_module2' ): ?>
		<section class="bg-img-content-module2" id="bg_img_content_module2<?php echo $i ?>">
			<div class="container">
				<?php if (get_sub_field('bicm_section_heading')): ?>
					<h2 class="bicm-section-heading"><?php echo get_sub_field('bicm_section_heading'); ?></h2>
				<?php endif ?>

				<?php if (get_sub_field('bicm_description')): ?>
					<p class="bicm-description"><?php echo get_sub_field('bicm_description') ?></p>
				<?php endif ?>
			</div>

			<div class="bicm-listing container-fluid <?php echo get_sub_field('bicm_text_alignment') ?>">
				<?php if (have_rows('bicm_items')): ?>
					<?php while (have_rows('bicm_items')): the_row();
						$animation = get_sub_field('bicm_animation_style') != 'none' ? get_sub_field('bicm_animation_style') . ' wow' : '';
						?>
						<div class="bicm-items row" <?php if (get_sub_field('bicm_item_bg')): ?>style="background-image: url(<?php echo get_sub_field('bicm_item_bg') ?>)"<?php endif ?>>
							
							<div class="col-md-6 bicm-content-wrap">
								<div class="bicm-content <?php echo $animation;  ?>">
									<?php
									$bicm_icon = get_sub_field('bicm_icon');
									if (get_sub_field('bicm_icon')): ?>
										<img class="bicm-right-icon" src="<?php echo $bicm_icon['url']; ?>" alt="<?php echo $bicm_icon['alt']; ?>" title="<?php echo $bicm_icon['title']; ?>">
									<?php endif ?>
									<?php if (get_sub_field('bicm_title')): ?>
										<h3 class="bicm-title"><?php echo get_sub_field('bicm_title'); ?></h3>
									<?php endif ?>
									<?php if (get_sub_field('bicm_description')): ?>
										<div class="bicm-description"><?php echo get_sub_field('bicm_description'); ?></div>
									<?php endif ?>

									<?php 
									$link = get_sub_field('bicm_item_link');
									if( $link ): 
									    $link_url = $link['url'];
									    $link_title = $link['title'] ? $link['title'] : 'Subheader';
									    $link_target = $link['target'] ? $link['target'] : '_self';
									    ?>
										<a class="bicm-item-btn btn btn-primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									<?php endif; ?>
								</div>
							</div>

							<div class="col-md-6 bicm-img-wrap">
								<img class="bicm-left-img" src="<?php echo get_sub_field('bicm_item_bg') ?>" alt="<?php echo get_sub_field('bicm_title'); ?>" title="<?php echo get_sub_field('bicm_title'); ?>">
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif ?>
			</div>
		</section>

	<?php elseif( get_row_layout() == 'item_listing_on_bg_module' ): ?>
		<section class="item-listing-on-bg-module text-center" id="item_listing_on_bg_module<?php echo $i ?>" <?php if (get_sub_field('ilb_bg')): ?>style="background-image: url(<?php echo get_sub_field('ilb_bg'); ?>)"<?php endif ?>>
			<div class="container">
				<?php if (get_sub_field('ilb_heading')): ?>
					<h2 class="ilb-heading"><?php echo get_sub_field('ilb_heading'); ?></h2>
				<?php endif ?>
				<?php if (get_sub_field('ilb_description')): ?>
					<p class="ilb-description"><?php echo get_sub_field('ilb_description'); ?></p>
				<?php endif ?>

				<?php if (have_rows('lib_items')): ?>
				<div class="row ilb-listing">
					<?php while (have_rows('lib_items')): the_row(); ?>
					<div class="col-lg-2 col-md-4 col-6 ilb-item">
						<?php
						$ilb_image = get_sub_field('ilb_image');
						if ($ilb_image): ?>
							<span class="ilb-image-wrap">
							<img class="ilb-image" src="<?php echo $ilb_image['url'] ?>" alt="<?php if($ilb_image['alt']): echo $ilb_image['alt']; else: echo get_sub_field('ilb_title'); endif; ?>" title="<?php if($ilb_image['alt']): echo $ilb_image['alt']; else: echo get_sub_field('ilb_title'); endif; ?>"></span>
						<?php endif ?>

						<?php if (get_sub_field('ilb_title')): ?>
							<h3 class="ilb-title"><?php echo get_sub_field('ilb_title'); ?></h3>
						<?php endif ?>
					</div>
					<?php endwhile; ?>
				</div>
				<?php endif ?>

				<?php 
				$link = get_sub_field('ilb_section_link');
				if( $link ): 
				    $link_url = $link['url'];
				    $link_title = $link['title'] ? $link['title'] : 'Subheader';
				    $link_target = $link['target'] ? $link['target'] : '_self';
				    ?>
					<a class="ilb-item-btn btn " href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>
			</div>
		</section>


	<?php elseif( get_row_layout() == 'left_content_right_icon_title_listing_module' ): ?>
		<section class="left-content-right-icon-title-listing-module" id="left_content_right_icon_title_listing_module<?php echo $i ?>">
			<div class="container">
				<div class="row">
					<div class="col-md-6">

						<div class="lcrilm-content-wrap">
							<?php if (get_sub_field('lcrilm_heading')): ?>
								<h3 class="lcrilm-heading"><?php echo get_sub_field('lcrilm_heading'); ?></h3>
							<?php endif ?>
							<?php if (get_sub_field('lcrilm_description')): ?>
								<p class="lcrilm-description"><?php echo get_sub_field('lcrilm_description'); ?></p>
							<?php endif ?>

							<?php 
							$link = get_sub_field('lcrilm_link');
							if( $link ): 
							    $link_url = $link['url'];
							    $link_title = $link['title'] ? $link['title'] : 'Subheader';
							    $link_target = $link['target'] ? $link['target'] : '_self';
							    ?>
								<a class="lcrilm-item-btn btn btn-primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							<?php endif; ?>
						</div>

					</div>

					<div class="lcrilm-icon-title-list col-md-6">
						
						<?php if (have_rows('icon_title_listing')): ?>
						<div class="row lcrilm-icon-title-listing">
							<?php while (have_rows('icon_title_listing')): the_row(); ?>
							<div class="col-md-6 lcrilm-icon-title-item">
								<?php 
								$link = get_sub_field('lcrilm_link');
								if( $link ): 
								    $link_url = $link['url'];
								    $link_title = $link['title'] ? $link['title'] : 'Subheader';
								    $link_target = $link['target'] ? $link['target'] : '_self';
								    ?>
									<a class="lcrilm-item-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
								<?php endif; ?>

								
									<?php
						$ilb_image = get_sub_field('lcrilm_icon');
						if ($ilb_image): ?>
							<img class="lcrilm-image" src="<?php echo $ilb_image['url'] ?>" alt="<?php echo $ilb_image['alt'] ?>" title="<?php echo $ilb_image['title'] ?>">
						<?php endif ?>
									
									<!--<?php //if (get_sub_field('lcrilm_title')): ?>
										<h3 class="lcrilm-title"><?php //echo get_sub_field('lcrilm_title'); ?></h3>
									<?php //endif ?> -->
								<?php if( $link ):  ?>
									</a>
								<?php endif; ?>
							</div>
							<?php endwhile; ?>
						</div>
						<?php endif ?>
					</div>
				</div>
			</div>
		</section>

		<?php elseif( get_row_layout() == 'buckets_hover_focus' ): ?>
        <section class="hero-interactive-1-module" id="buckets_hover_focus<?php echo $i ?>">
        	<?php if (get_sub_field('bhf_heading')): ?>
            	<h2 class="hi1m-heading"><?php echo get_sub_field('bhf_heading') ?></h2>
        	<?php endif ?>

        	<?php if (have_rows('bhf_items')): ?>
		        <div class="hi1m-item-listing">
		        	<?php while (have_rows('bhf_items')): the_row(); ?>
		        		<?php 
						$link = get_sub_field('bhf_button1');
						if( $link ): 
						    $link_url = $link['url'];
						    $link_title = $link['title'] ? $link['title'] : 'Learn More';
						    $link_target = $link['target'] ? $link['target'] : '_self';
						    ?>
			            	<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="hi1m-item him-item <?php if (get_row_index()==1): ?>hi1m-item-hovered<?php endif ?>" <?php if (get_sub_field('bhf_bg')): ?>style="background-image: url(<?php echo get_sub_field('bhf_bg') ?>);"<?php endif ?>>
						<?php endif; ?>

				            <div class="hi1m-content">
				              	<?php if (get_sub_field('bhf_title')): ?>
				              		<h3 class="hi1m-hover-title"><?php echo get_sub_field('bhf_title') ?></h3>
				              	<?php endif ?>

				              	<?php if (get_sub_field('bhf_description')): ?>
				              		<div class="hi1m-description"><?php echo get_sub_field('bhf_description') ?></div>
				              	<?php endif ?>

				              	<?php if ($link_title): ?>
				              		<span class="btn hi1m-link"><?php echo esc_html( $link_title ); ?></span>
				              	<?php endif ?>
					        </div>

				            <?php if (get_sub_field('bhf_title')): ?>
				              	<h3 class="hi1m-title"><?php echo get_sub_field('bhf_title') ?></h3>
				            <?php endif ?>

			            <?php if( $link ): ?>
			            	</a>
			            <?php endif ?>

			        <?php endwhile ?>
		        </div>
	        <?php endif ?>
        </section>

        <section class="hero-interactive-1-mobile-carousel" id="buckets_hover_focus<?php echo $i ?>">
        	<?php if (have_rows('bhf_items')): ?>
        	<?php while (have_rows('bhf_items')): the_row(); ?>
        		
	            <div class="hi1m-slide" <?php if (get_sub_field('bhf_bg')): ?>style="background-image: url(<?php echo get_sub_field('bhf_bg') ?>);"<?php endif ?>>
					<div class="container">

			            <div class="hi1m-content">
			              	<?php if (get_sub_field('bhf_title')): ?>
			              		<h3 class="hi1m-hover-title"><?php echo get_sub_field('bhf_title') ?></h3>
			              	<?php endif ?>

			              	<?php if (get_sub_field('bhf_description')): ?>
			              		<div class="hi1m-description"><?php echo get_sub_field('bhf_description') ?></div>
			              	<?php endif ?>

			              	<?php 
							$link = get_sub_field('bhf_button1');
							if( $link ): 
							    $link_url = $link['url'];
							    $link_title = $link['title'] ? $link['title'] : 'Learn More';
							    $link_target = $link['target'] ? $link['target'] : '_self';
							    ?>
			              		<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn btn-primary hi2m-link"><?php echo esc_html( $link_title ); ?></a>
			              	<?php endif ?>
							  <?php 
							$link2 = get_sub_field('bhf_button2');
							if( $link2 ): 
							    $link_url = $link2['url'];
							    $link_title = $link2['title'] ? $link2['title'] : 'Learn More';
							    $link_target = $link2['target'] ? $link2['target'] : '_self';
							    ?>
			              		<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn hi1m-link"><?php echo esc_html( $link_title ); ?></a>
			              	<?php endif ?>
				        </div>
				    </div>

	            </div>

	        <?php endwhile ?>
    		<?php endif ?>
        </section>

    <?php elseif( get_row_layout() == 'hero-interactive-2-module' ): ?>
        <section class="hero-interactive-2-module" id="hero-interactive-2-module<?php echo $i ?>">
            <div class="hi2m-wrapper">
                <div class="container">
                    <?php if(get_sub_field('hi2m_heading')): ?><h1 class="hi2m-header"><?php echo get_sub_field('hi2m_heading'); ?></h1><?php endif; ?>
                    <?php if(get_sub_field('hi2m_description')): ?><p class="hi2m-description"><?php echo get_sub_field('hi2m_description'); ?></p><?php endif; ?>
                </div>
            </div>

        	<div class="hi2m-carousel" <?php if(get_sub_field('hi2m_hero_image')): ?> style="background-image: url(<?php echo get_sub_field('hi2m_hero_image'); ?>);" <?php endif; ?>>
	        	<?php if( have_rows('hi2m_items') ): ?>
		            <?php while ( have_rows('hi2m_items') ) : the_row(); ?>
		                <div class="hi2m-slide" data-imgsrc="<?php echo get_sub_field('hi2m_image'); ?>" style="background-image: url(<?php echo get_sub_field('hi2m_image'); ?>);">

		                	<?php if(get_sub_field('hi2m_title')): ?>
		                    	<h2 class="hi2m-slide-title"  tabindex="0"><span><?php echo get_sub_field('hi2m_title'); ?></span></h2>
		                    <?php endif; ?>

		                    <div class="hi2m-slider-hover-content">
		                    	<?php if (get_sub_field('hi2m_title')): ?>
		                    		<h2 class="hi2m-hover-title"><?php echo get_sub_field('hi2m_title'); ?></h2>
		                    	<?php endif ?>

		                        <?php if(get_sub_field('hi2m_text')): ?>
		                        	<p class="hi2m-slide-description"><?php echo get_sub_field('hi2m_text'); ?></p>
		                        <?php endif; ?>

		                        <?php $hi2m_cta = get_sub_field('hi2m_cta'); if($hi2m_cta): ?>
		                        <a href="<?php echo $hi2m_cta['url']; ?>" class="hi2m-slide-btn btn btn-primary"><?php echo $hi2m_cta['title']; ?></a>
		                        <?php endif; ?>
		                    </div>
		                </div>
		            <?php endwhile; ?>
         		<?php endif; ?>
			</div>
        </section>

    <?php elseif( get_row_layout() == 'testimonial_module' ): ?>
    	<section class="testimonial-module" id="testimonial_module<?php echo $i ?>">
    		<div class="container">
    			<?php if( have_rows('tm_items') ): ?>
	    		<div class="tm-carousel">

		            <?php while ( have_rows('tm_items') ) : the_row(); ?>
		                <div class="tm-slide">
		                	<div class="tm-content-wrap">
			                	<?php 
								$image = get_sub_field('tm_left_image');
								if( !empty( $image ) ): ?>
								    <figure class="tm-img-wrap"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></figure>
								<?php endif; ?>

			                    <div class="tm-right-content">
			                    	<?php if (get_sub_field('tm_title')): ?>
			                    		<h2 class="tm-title"><?php echo get_sub_field('tm_title'); ?></h2>
			                    	<?php endif ?>

			                        <?php if(get_sub_field('tm_text')): ?>
			                        	<p class="tm-text"><?php echo get_sub_field('tm_text'); ?></p>
			                        <?php endif; ?>

			                        <?php if (get_sub_field('tm_client_name')): ?>
			                        	<strong class="tm-client-name"><?php echo get_sub_field('tm_client_name') ?></strong>
			                        <?php endif ?>

			                    </div>
		                	</div>
		                </div>
		            <?php endwhile; ?>

		        </div>
         		<?php endif; ?>
    		</div>
    	</section>
    <?php elseif( get_row_layout() == 'testimonial_card_module' ): ?>
    	<section class="testimonial-card-module" id="testimonial_card_module<?php echo $i ?>">
    		<div class="container">
    			<?php if( have_rows('tcm_items') ): ?>
	    		<div class="tcm-carousel center">

		            <?php while ( have_rows('tcm_items') ) : the_row(); ?>
		                <div class="tcm-slide">
		                	<div class="tcm-content-wrap">
			                	<?php 
								$image = get_sub_field('tcm_left_image');
								if( !empty( $image ) ): ?>
								    <figure class="tcm-img-wrap"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></figure>
								<?php endif; ?>

			                    <div class="tcm-right-content">
			                    	<?php if (get_sub_field('tcm_title')): ?>
			                    		<h2 class="tcm-title"><?php echo get_sub_field('tcm_title'); ?></h2>
			                    	<?php endif ?>

			                        <?php if(get_sub_field('tcm_text')): ?>
			                        	<p class="tcm-text"><?php echo get_sub_field('tcm_text'); ?></p>
			                        <?php endif; ?>

			                        <?php if (get_sub_field('tcm_client_name')): ?>
			                        	<span class="tcm-sub-header"><?php echo get_sub_field('tcm_client_name') ?></span>
			                        <?php endif ?>
			                        <div>
			                        	<?php 
							$link = get_sub_field('tcm_button1');
							if( $link ): 
							    $link_url = $link['url'];
							    $link_title = $link['title'] ? $link['title'] : 'Learn More';
							    $link_target = $link['target'] ? $link['target'] : '_self';
							    ?>
			              		<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="btn btn-primary hi2m-link"><?php echo esc_html( $link_title ); ?></a>
			              	<?php endif ?>
			                        </div>
			                    </div>
		                	</div>
		                </div>
		            <?php endwhile; ?>

		        </div>
         		<?php endif; ?>
    		</div>
    	</section>

    <?php elseif( get_row_layout() == 'industries_we_serve_module' ): ?>
    	<section class="py-5 industries-we-serve-module" id="industries_we_serve_module<?php echo $i ?>">
		    <div class="container py-4">
		    	<?php if (get_sub_field('iwsm_section_heading')): ?>
		    		<h2 class="iwsm-heading "><?php echo get_sub_field('iwsm_section_heading'); ?></h2>
		    	<?php endif ?>

		        <div class="row">
		            <div class="col-md-4 col-lg-6 d-none d-md-block">
		                <!-- Tabs nav -->
		            	<?php if (have_rows('iwsm_tabs_items')): ?>
		                <div class="nav row nav-pills nav-pills-custom" id="v-pills-<?php echo get_row_index() ?>-tab" role="tablist" aria-orientation="vertical">
		            		<?php while (have_rows('iwsm_tabs_items')): the_row(); ?>
			                    <a class="col-12 col-lg-6 nav-link p-2  <?php if (get_row_index()==1): ?>active<?php endif ?>" id="v-pills-<?php echo get_row_index(); ?>-tab" data-toggle="pill" href="#v-pills-<?php echo get_row_index(); ?>" role="tab" aria-controls="v-pills-<?php echo get_row_index(); ?>" aria-selected="<?php if (get_row_index()==1): ?>true<?php else: ?>false<?php endif ?>">
									<div class="iwsm-wrap">
			                    	<?php
			                    	$image = get_sub_field('title_thumbnail_image');
			                    	if ($image): ?>
			                    		<img src="<?php echo $image['url'] ?>" class="on" alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>">
			                    	<?php endif ?>
									<?php
			                    	$image2 = get_sub_field('title_thumbnail_image_hover');
			                    	if ($image2): ?>
			                    		<img src="<?php echo $image2['url'] ?>" class="off" alt="<?php echo $image2['alt'] ?>" title="<?php echo $image2['title'] ?>">
			                    	<?php endif ?>
			                        <?php if (get_sub_field('iwsm_title')): ?>
			                        	<span class="font-weight-bold small text-uppercase"><?php echo get_sub_field('iwsm_title') ?></span>
			                        <?php endif ?>
									</div>
			                    </a>
		            		
		            		<?php endwhile ?>
		               	</div>
		            	<?php endif ?>
		            </div>


		            <div class="col-md-8 col-lg-6">
		                <!-- Tabs content -->
		                <?php if (have_rows('iwsm_tabs_items')): ?>
			                <div class="tab-content" id="v-pills-tabContent" role="tablist">
		                	<?php while (have_rows('iwsm_tabs_items')): the_row(); ?>

			                    <div class="tab-pane fade <?php if (get_row_index()==1): ?>show active<?php endif ?>" id="v-pills-<?php echo get_row_index(); ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo get_row_index(); ?>-tab">
			                    	<div class="d-md-none" role="tab" id="heading-<?php echo get_row_index() ?>">
					                	<a class="col-12 nav-link mb-3 p-2" data-toggle="collapse" href="#collapse-<?php echo get_row_index() ?>" aria-selected="<?php if (get_row_index()==1): ?>true<?php else: ?>false<?php endif ?>" aria-expanded="<?php if (get_row_index()==1): ?>true<?php else: ?>false<?php endif ?>" aria-controls="collapse-<?php echo get_row_index() ?>">
					                    	<?php
			                    	$image = get_sub_field('title_thumbnail_image');
			                    	if ($image): ?>
			                    		<img src="<?php echo $image['url'] ?>" class="on" alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>">
			                    	<?php endif ?>
									<?php
			                    	$image2 = get_sub_field('title_thumbnail_image_hover');
			                    	if ($image2): ?>
			                    		<img src="<?php echo $image2['url'] ?>" class="off" alt="<?php echo $image2['alt'] ?>" title="<?php echo $image2['title'] ?>">
			                    	<?php endif ?>
					                        <?php if (get_sub_field('iwsm_title')): ?>
					                        	<span class="font-weight-bold small text-uppercase"><?php echo get_sub_field('iwsm_title') ?></span>
					                        <?php endif ?>
					                    </a>
					                </div>

						            <div id="collapse-<?php echo get_row_index() ?>" class="collapse p-4 mb-3 <?php if (get_row_index()==1): ?>show<?php endif ?>" data-parent="#content" role="tabpanel" aria-labelledby="heading-<?php echo get_row_index() ?>">
				                    	<?php
				                    	$iwsm_image = get_sub_field('iwsm_image');
				                    	if ($iwsm_image): ?>
				                    		<img class="mb-4 iwsm-img" src="<?php echo $iwsm_image['url'] ?>" alt="<?php echo $iwsm_image['alt'] ?>" title="<?php echo $iwsm_image['title'] ?>">
				                    	<?php endif ?>
				                    	<?php if (get_sub_field('iwsm_title')): ?>
				                    		<h3 class="iwsm-title"><?php echo get_sub_field('iwsm_title') ?></h3>
				                    	<?php endif ?>

				                    	<?php if (get_sub_field('iwsm_description')): ?>
				                    		<div class="text-muted mb-2 iwsm-description"><?php echo get_sub_field('iwsm_description') ?></div>
				                    	<?php endif ?>

				                    	<?php 
										$iwsm_link = get_sub_field('iwsm_link');
										if( $iwsm_link ): 
										    $iwsm_link_url = $iwsm_link['url'];
										    $iwsm_link_title = $iwsm_link['title'];
										    $iwsm_link_target = $iwsm_link['target'] ? $iwsm_link['target'] : '_self';
										    ?>
										    <a class="btn btn-primary iwsm-link" href="<?php echo esc_url( $iwsm_link_url ); ?>" target="<?php echo esc_attr( $iwsm_link_target ); ?>"><?php echo esc_html( $iwsm_link_title ); ?></a>
										<?php endif; ?>
									</div>
			                    </div>
			               <?php endwhile ?>
			                </div>
		            	<?php endif ?>
		            </div>

		        </div>
		    </div>
		</section>

	<?php elseif( get_row_layout() == 'robotic_system_types_module' ): ?>
		<section class="robotic-system-types-module" id="robotic-system-types-module">
			<div class="container">
				<?php if (get_sub_field('rstm_section_heading')): ?>
		    		<h2 class="rstm-section-heading"><?php echo get_sub_field('rstm_section_heading'); ?></h2>
		    	<?php endif ?>

		    	<?php if (get_sub_field('rstm_section_description')): ?>
		    		<div class="rstm-section-description"><?php echo get_sub_field('rstm_section_description'); ?></div>
		    	<?php endif ?>


		    	<?php if( have_rows('rstm_tab') ): ?>
				<ul  class="nav nav-tabs rstm-nav-tabs" role="tablist">
				<?php while ( have_rows('rstm_tab') ) : the_row(); ?>
					<li class="rstm-nav-item">
		        		<a  href="#tab<?php echo get_row_index(); ?>" data-toggle="tab" class="<?php if (get_row_index()==1): ?>active<?php endif; ?>" role="tab">
		        			
	        				<?php 
							$image = get_sub_field('rstm_title_image');
							if( !empty( $image ) ): ?>
							    <figure><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></figure>
							<?php endif; ?>
		        			
		        			<span><?php echo get_sub_field('rstm_tab_title'); ?></span>
		        		</a>
					</li>
				<?php endwhile; ?>
				</ul>
				<?php endif; ?>

				<?php if( have_rows('rstm_tab') ): ?>
				<div class="tab-content rstm-tab-content clearfix">
					<?php while ( have_rows('rstm_tab') ) : the_row(); ?>

					<div class="tab-pane rstm-tab-pane <?php if (get_row_index()==1): ?>active<?php endif ?>" id="tab<?php echo get_row_index(); ?>" role="tabpanel">
						<div class="panel panel-default">
					        <div class="panel-heading">
						        <h4 class="panel-title">
						            <a data-toggle="collapse" data-parent=".tab-pane" href="#collapse<?php echo get_row_index(); ?>">
						            	<?php if( !empty( $image ) ): ?>
										    <figure><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" alt="<?php echo esc_attr($image['alt']) ?>" /></figure>
										<?php endif; ?>
						              	<span><?php echo get_sub_field('rstm_tab_title'); ?></span>
						            </a>
						        </h4>
					        </div>

					        <div id="collapse<?php echo get_row_index(); ?>" class="panel-collapse collapse in">
								<?php //if (get_sub_field('rstm_tab_body')): ?>
									
				          			<div class="rstm-tab-body panel-body">
					          			<div class="rstm-tab-innercontent">
					          				<?php 
											$content_image = get_sub_field('rstm_right_content_image');
											if( !empty( $content_image ) ): ?>
											    <figure class="rstm-tab-img"><img src="<?php echo esc_url($content_image['url']); ?>" alt="<?php echo esc_attr($content_image['alt']); ?>" title="<?php echo esc_attr($content_image['alt']); ?>" /></figure>
											<?php endif; ?>
					          			</div>

					          			<div class="rstm-tab-innercontent">
					          				<div class="rstm-content-wrap">
						          				<?php if (get_sub_field('rstm_body_heading')): ?>
										    		<h2 class="rstm-heading"><?php echo get_sub_field('rstm_body_heading'); ?></h2>
										    	<?php endif ?>

										    	<?php if (get_sub_field('rstm_body_description')): ?>
										    		<div class="rstm-description"><?php echo get_sub_field('rstm_body_description'); ?></div>
										    	<?php endif ?>

										    	<?php 
												$link = get_sub_field('rstm_cta');
												if( $link ): 
												    $link_url = $link['url'];
												    $link_title = $link['title'];
												    $link_target = $link['target'] ? $link['target'] : '_self';
												    ?>
												    <a class="button btn btn-primary btn-lg bg-section-cta" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
												<?php endif; ?>
					          				</div>
					          			</div>
				          			</div>
								<?php //endif ?>
			          		</div>
			          	</div>

					</div>

					<?php endwhile; ?>
				</div>
				<?php endif; ?>
			</div>
		</section>

	<?php elseif( get_row_layout() == 'video_with_description_module' ): ?>
		<section class="video-with-description-module" id="video_with_description_module<?php echo $i ?>">
			<div class="container">
				<div class="row vwdm-content-wrap">
					<div class="vwdm-media-wrap col-md-5">
						<?php 
						$image = get_sub_field('vwdm_cover_image');
						if( !empty( $image ) ): ?>
						    <img class="vwdm-tab-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>

						<a href="https://www.youtube.com/watch?v=<?php echo get_sub_field('vwdm_youtube_id') ?>" class="btn btn-primary play-video-btn popup-youtube">Play Video <span class="vwdm-play-icon"><i class="fa fa-play" aria-hidden="true"></i></span></a>
					</div>

					<div class="vwdm-content col-md-7">
						<?php if (get_sub_field('vwdm_content')): ?>
				    		<div class="vwdm-content-text"><?php echo get_sub_field('vwdm_content'); ?></div>
				    	<?php endif ?>
					</div>
				</div>
			</div>
		</section>

	<?php elseif( get_row_layout() == 'value_prop_module' ): ?>
		<section class="value-prop-module" id="value_prop_module<?php echo $i ?>">
			<div class="container">
				<?php if (get_sub_field('vpm_section_content')): ?>
		    		<div class="vpm-section-content"><?php echo get_sub_field('vpm_section_content'); ?></div>
		    	<?php endif ?>

		    	<?php if (have_rows('vpm_items')): ?>
		    	<div class="row vpm-row">
		    		<?php while ( have_rows('vpm_items') ) : the_row(); ?>
		    		<div class="col-md-6 col-lg-3 vpm-col">
		    			<div class="vpm-item">
		    				<?php 
							$image = get_sub_field('vpm_cover_image');
							if( !empty( $image ) ): ?>
							    <figure class="vpm-image-wrap"><img class="vwdm-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['alt']); ?>" /></figure>
							<?php endif; ?>

							<?php if (get_sub_field('vpm_heading')): ?>
					    		<h2 class="vpm-heading"><?php echo get_sub_field('vpm_heading'); ?></h2>
					    	<?php endif ?>

					    	<?php if (get_sub_field('vpm_description')): ?>
					    		<div class="vpm-description"><?php echo get_sub_field('vpm_description'); ?></div>
					    	<?php endif ?>

		    			</div>
		    		</div>
		    		<?php endwhile; ?>
		    	</div>
		    	<?php endif ?>
			</div>
		</section>

	<?php elseif( get_row_layout() == 'featured_listing_module' ): ?>
    	<?php $listingType = get_sub_field('flm_listing_type') ?>
		<section class="featured-listing-module" id="<?php echo $listingType .  $i; ?>">
			<div class="container">
				<?php if (get_sub_field('flm_section_title')): ?>
		    		<h2 class="flm-section-title"><?php echo get_sub_field('flm_section_title'); ?></h2>
		    	<?php endif ?>

				<?php if (get_sub_field('flm_section_content')): ?>
		    		<div class="flm-section-content mb-5"><?php echo get_sub_field('flm_section_content'); ?></div>
		    	<?php endif ?>

		    	<?php if (have_rows('flm_items')): ?>
		    	<div class="flm-featured-listing">
		    		<ul class="<?php echo $listingType; ?>">
		    		<?php while ( have_rows('flm_items') ) : the_row(); ?>
		    			<li class="flm-text"><?php echo get_sub_field('flm_text') ?></li>
		    		<?php endwhile; ?>
		    		</ul>
		    	</div>
		    	<?php endif ?>

		    </div>
		</section>

	<?php elseif( get_row_layout() == 'content_on_bg_module' ): ?>
		<section class="content-on-bg-module" id="content_on_bg_module<?php echo $i ?>">
			<div class="container">
				<?php if (get_sub_field('cobm_section_title')): ?>
		    		<h2 class="cobm-section-title mb-5"><?php echo get_sub_field('cobm_section_title'); ?></h2>
		    	<?php endif ?>

				<?php if (get_sub_field('cobm_section_content')): ?>
		    		<div class="cobm-section-content"><?php echo get_sub_field('cobm_section_content'); ?></div>
		    	<?php endif ?>
		    </div>

	    	<?php if (have_rows('cobm_items')): ?>
	    	<div class="cobm-listing">

	    		<?php while ( have_rows('cobm_items') ) : the_row(); ?>
	    			
	    			<div class="cobm-item" <?php if (get_sub_field('cobm_bg')): ?>style="background-image: url(<?php echo get_sub_field('cobm_bg') ?>)"<?php endif ?>>
	    				<?php 
						$link = get_sub_field('cobm_link');
						if( $link ): 
						    $link_url = $link['url'];
						    $link_title = $link['title'];
						    $link_target = $link['target'] ? $link['target'] : '_self';
						    ?>
						    <a class="cobm-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
						<?php endif ?>

							<div class="cobm-content-wrap">
			    				<?php if (get_sub_field('cobm_title')): ?>
			    					<h2 class="cobm-title"><?php echo get_sub_field('cobm_title') ?></h2>
			    				<?php endif ?>

			    				<?php if (get_sub_field('cobm_text')): ?>
			    					<div class="cobm-text"><?php echo get_sub_field('cobm_text') ?></div>
			    				<?php endif ?>
								
							</div>

			    		<?php if( $link ):  ?>
			    			</a>
			    		<?php endif ?>
	    			</div>
	    		<?php endwhile; ?>

	    	</div>
	    	<?php endif ?>

		</section>

	<?php elseif( get_row_layout() == 'numbered_list_module' ): ?>
		<section class="numbered-list-module" id="numbered_list_module<?php echo $i ?>">
			<div class="container">
				<?php if (have_rows('nlistm_items')): ?>
				<div class="row nlm-listing">

	    			<?php while ( have_rows('nlistm_items') ) : the_row(); ?>
					<div class="col-md-4 nlistm-item">
						<div class="nlistm-item-wrap">
							<?php echo get_sub_field('nlistm_title') ?>
						</div>
					</div>
					<?php endwhile; ?>

				</div>
				<?php endif ?>
			</div>
		</section>

	<?php elseif( get_row_layout() == 'pillarpage_linklist_module' ): ?>
		<section class="pillarpage-linklist-module" id="pillarpage_linklist_module<?php echo $i ?>">
			<div class="container">
				<?php $pplm_menu_name = get_sub_field('pplm_menu_name') ? get_sub_field('pplm_menu_name') : "Pillar Page Navigation"; ?>
				<?php
					wp_nav_menu(array(
						'menu' => $pplm_menu_name,
						'menu_class' => "pillar-nav",
					));
				?>
			</div>
		</section>

	<?php elseif( get_row_layout() == 'categories_module' ): ?>
		<section class="categories-module" id="categories_module<?php echo $i ?>">
			<div class="container">
				<?php if (get_sub_field('cat_description')): ?>
					<p class="cat-description"><?php echo get_sub_field('cat_description') ?></p>
				<?php endif ?>

				<?php if (have_rows('cat_items')): ?>
				<div class="row cat-listing">

	    			<?php while ( have_rows('cat_items') ) : the_row(); ?>
					<div class="col-md-6 cat-item">
						<?php 
						$link = get_sub_field('cat_link');
						if( $link ): 
						    $link_url = $link['url'];
						    $link_title = get_sub_field('cat_title') ? get_sub_field('cat_title') : $link['title'];
						    $link_target = $link['target'] ? $link['target'] : '_self';
						    ?>
						    <a class="cat-item-wrap" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><span class="cat-item-title"><?php echo esc_html( $link_title ); ?><span class="material-icons">arrow_forward</span></span></a>
						<?php endif; ?>
					</div>
					<?php endwhile; ?>

				</div>
				<?php endif ?>
			</div>
		</section>

	<?php elseif( get_row_layout() == 'hero_video_banner_module' ): ?>
		<section class="hero-video-banner hero-5-module" <?php if( get_sub_field('hm5_bg') ): ?>style="background-image: url(<?php echo get_sub_field('hm5_bg') ?>);"<?php endif; ?>>
			<?php
			$file = get_sub_field('hm5_video_bg');
			if( $file ): ?>
				<video autoplay="" loop="" class="video-background" id="video-background" muted="" plays-inline="">
					<source src="<?php echo $file['url']; ?>" type="video/<?php echo $file['subtype']; ?>">
					Your browser does not support HTML5 video.
				</video>
			<?php endif; ?>

			<div class="container">
				<?php $animation = get_sub_field('animation_style') != 'none' ? get_sub_field('animation_style') . ' animated' : ''; ?>
				<div class="hm5-content <?php echo $animation; ?>">

					<div class="hm5-text">
						<?php if (get_sub_field('hm5_heading')): ?>
							<h1 class="hm5-heading"><?php echo get_sub_field('hm5_heading'); ?></h1>
						<?php endif ?>
	
						<?php if (get_sub_field('hm5_description')): ?>
							<p class="hm5-description"><?php echo get_sub_field('hm5_description'); ?></p>
						<?php endif ?>
					</div>

					<div class="hm5-btn-wrap">
						<?php 
						$link = get_sub_field('hm5_cta');
						if( $link ): 
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
							?>
							<a class="btn btn-alt hm5-cta1" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>

	<?php elseif( get_row_layout() == 'hero_seven_video_banner_module' ): ?>
		<section class="hero-seven-banner-module hero-7-module">
			<div class="container">
				<?php $animation = get_sub_field('animation7_style') != 'none' ? get_sub_field('animation7_style') . ' animated' : ''; ?>
				<div class="hm7-content <?php echo $animation; ?>">

					<div class="hm7-text">
						<?php if (get_sub_field('hm7_heading')): ?>
							<h1 class="hm7-heading"><?php echo get_sub_field('hm7_heading'); ?></h1>
						<?php endif ?>
	
						<?php if (get_sub_field('hm7_description')): ?>
							<p class="hm7-description"><?php echo get_sub_field('hm7_description'); ?></p>
						<?php endif ?>
					</div>

					<div class="hm7-btn-wrap">
						<?php 
						$link = get_sub_field('hm7_cta');
						if( $link ): 
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
							?>
							<a class="btn btn-alt hm7-cta1" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>
						<?php 
						$link2 = get_sub_field('hm7_two_cta');
						if( $link2 ): 
							$link_url = $link2['url'];
							$link_title = $link2['title'];
							$link_target = $link2['target'] ? $link2['target'] : '_self';
							?>
							<a class="btn btn-alt-on-color hm7-cta2" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>
					</div>
					<div class="hm7-video-wrap" <?php if( get_sub_field('hm7_bg') ): ?>style="background-image: url(<?php echo get_sub_field('hm7_bg') ?>);"<?php endif; ?>>
						<?php
			$file = get_sub_field('hm7_video_bg');
			if( $file ): ?>
				<video autoplay="" loop="" class="video-background" id="video-background" muted="" plays-inline="">
					<source src="<?php echo $file['url']; ?>" type="video/<?php echo $file['subtype']; ?>">
					Your browser does not support HTML5 video.
				</video>
			<?php endif; ?>
					</div>
				</div>
			</div>
		</section>

	<?php elseif( get_row_layout() == 'hero6_module_module' ): ?>
		<section class="hero6-module clearfix">
			<div class="hm6-content-wrap">
				<div class="hm6-content">
					<?php if (get_sub_field('hm6_heading')): ?>
						<h1 class="hm6-heading"><?php echo get_sub_field('hm6_heading'); ?></h1>
					<?php endif ?>
	
					<div class="hm6-btn-wrap">
						<?php 
						$link = get_sub_field('hm6_cta1');
						if( $link ): 
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
							?>
							<a class="btn btn-alt hm6-cta1" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>
	
						<?php 
						$link = get_sub_field('hm6_cta2');
						if( $link ): 
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
							?>
							<a class="btn btn-alt-on-color hm6-cta2" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>
				</div>
				</div>
			</div>

			<div class="hm6-subcategory-wrap" <?php if( get_sub_field('hm6_bg') ): ?>style="background-image: url(<?php echo get_sub_field('hm6_bg') ?>);"<?php endif; ?>>
				<div class="hm6-subcategory-content">
					<?php if (get_sub_field('hm6_title')): ?>
						<h2 class="hm6-title"><?php echo get_sub_field('hm6_title'); ?></h2>
					<?php endif ?>
	
					<?php if (get_sub_field('hm6_description')): ?>
						<p class="hm6-description"><?php echo get_sub_field('hm6_description'); ?></p>
					<?php endif ?>
	
					<?php 
					$link = get_sub_field('hm6_link');
					if( $link ): 
						$link_url = $link['url'];
						$link_title = $link['title'] ? $link['title'] : 'Learn More';
						$link_target = $link['target'] ? $link['target'] : '_self';
						?>
						<a class="hm6-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php endif; ?>
				</div>
			</div>
		</section>
		<?php elseif( get_row_layout() == 'content_associations_module' ): ?>
			<section class="content-associations-module py-5">
				<div class="container">
						<div class="row cam-listing">
						<?php if (get_sub_field('cam_section_header')): ?>
						<div class="col-lg-3 col-md-12 col-12 cam-item"><h2 class="cam-title"><?php echo get_sub_field('cam_section_header'); ?></h2></div>
					<?php endif ?>
					<?php if (have_rows('cam_add_logos1')): ?>
						<?php while (have_rows('cam_add_logos1')): the_row(); ?>
							<div class="col-lg-2 col-md-3 col-6 cam-item">
							<?php 
							$image = get_sub_field('cam_add_logo');
							if( !empty( $image ) ): ?>
							   <img class="cami-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
											</div>

							<?php endwhile; ?>
							<?php endif ?>
						</div>
				
				</div>
		 </section>


		 <?php elseif( get_row_layout() == 'content-associations_module_two' ): ?>
			<section class="content-associations-module-two py-5">
				<div class="container ">
				<?php if (get_sub_field('cam_section_header')): ?>
						<h2 class="cam-title"><?php echo get_sub_field('cam_section_header'); ?></h2>
					<?php endif ?>
					<?php if (have_rows('cam_add_logos')): ?>
						<div class="row cam-listing">
		                	<?php while (have_rows('cam_add_logos')): the_row(); ?>
							<div class="col-lg-2 col-md-4 col-6 cam-item">
							<?php 
							$image1 = get_sub_field('cam_add_logo');
							if( !empty( $image1 ) ): ?>
							   <img class="cami-img" src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>" title="<?php echo esc_attr($image1['alt']); ?>" />
							<?php endif; ?>
											</div>

							<?php endwhile; ?>
						</div>
					<?php endif ?>
					<?php 
				$link = get_sub_field('cam_cta');
				if( $link ): 
				    $link_url = $link['url'];
				    $link_title = $link['title'] ? $link['title'] : 'Subheader';
				    $link_target = $link['target'] ? $link['target'] : '_self';
				    ?>
					<a class="cami-item-btn btn btn-primary btn-lg" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>
				</div>
		 </section>

		 <?php elseif( get_row_layout() == 'download_ebook_module' ): ?>
			<section class="download-ebook-module py-5">
			<div class="container">
			<div class="row dem-listing">
				<div class="col-md-6 dem-content-wrap">
				<?php if (get_sub_field('dem_header')): ?>
						<h2 class="dem-title"><?php echo get_sub_field('dem_header'); ?></h2>
					<?php endif ?>
					<?php echo get_sub_field('dem_content'); ?>
					<?php 
				$link = get_sub_field('dem_cta');
				if( $link ): 
				    $link_url = $link['url'];
				    $link_title = $link['title'] ? $link['title'] : 'Subheader';
				    $link_target = $link['target'] ? $link['target'] : '_self';
				    ?>
					<a class="dem-item-btn btn btn-primary btn-lg" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				<?php endif; ?>
				</div>
				<div class="col-md-6 dem-image-wrap">
				<?php 
							$image1 = get_sub_field('dem_image');
							if( !empty( $image1 ) ): ?>
							   <img class="dem-img" src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>" title="<?php echo esc_attr($image1['alt']); ?>" />
							<?php endif; ?>
				</div>
			</div>
			</div>
		 </section>

		 <?php elseif( get_row_layout() == 'areas_we_serve' ): ?>
			<section class="areas-we-serve-module py-5">
			<div class="container">
			<?php if (get_sub_field('aws_header')): ?>
						<h2 class="awsm-title"><?php echo get_sub_field('aws_header'); ?></h2>
					<?php endif ?>
					<?php if (get_sub_field('aws_sub_header')): ?>
						<p class="awsm-text"><?php echo get_sub_field('aws_sub_header'); ?></p>
					<?php endif ?>
					<?php if (get_sub_field('map_code')): ?>
						<div class="awsm-map"><?php echo get_sub_field('map_code'); ?></div>
					<?php endif ?>
			</div>
		 </section>	


		 <?php elseif( get_row_layout() == 'content_buckets_small_slider' ): ?>
		 <section class="content-buckets-small-slider-module py-5">
  <div class="container">
  <?php if (get_sub_field('cbss_section_header')): ?>
						<h2 class="cbssm-title"><?php echo get_sub_field('cbss_section_header'); ?></h2>
					<?php endif ?>
    <div class="cbs-slider">
	<?php if (have_rows('cbss_add_buckets')): ?>
						<?php while (have_rows('cbss_add_buckets')): the_row(); ?>
      <div>	<?php 
				$link = get_sub_field('cbss_bucket_link');
				if( $link ): 
				    $link_url = $link['url'];
				    $link_title = $link['title'] ? $link['title'] : 'Subheader';
				    $link_target = $link['target'] ? $link['target'] : '_self';
				    ?><a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">	<?php 
							$image1 = get_sub_field('cbss_bucket_image');
							if( !empty( $image1 ) ): ?>
							   <img class="dem-img" src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>" title="<?php echo esc_attr($image1['alt']); ?>" />
							<?php endif; ?> <?php if (get_sub_field('cbss_bucket_title')): ?><h3><?php echo get_sub_field('cbss_bucket_title'); ?></h3><?php endif ?></a><?php endif ?>							
							</div>
      <?php endwhile; ?>
							<?php endif ?>
    </div>
  </div>
</section>

<?php elseif( get_row_layout() == 'custom_folding_cartons' ): ?>
<section class="custom-folding-cartons">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-lg-6 cfc-content-wrap" >
				<?php if(get_sub_field('cfc_heading')):?>
				<h2 class="cfc-heading"><?php echo get_sub_field('cfc_heading');?></h2><?php endif;?><?php if(get_sub_field('cfc_desc')):?>
				<p class="cfc-text"><?php echo get_sub_field('cfc_desc');?></p><?php endif;?>
				<?php $cta = get_sub_field('cfc_cta'); if($cta):?>
				<a href="<?php echo $cta['url'];?>" class="btn btn-alt cfc-btn"><?php echo $cta['title'];?></a><?php endif;?>
			</div>
			<div class="col-12 col-lg-6 cfc-img-wrap">
				<?php $img = get_sub_field('cfc_img'); if($img):?><img src="<?php echo $img['url'];?>" alt="<?php echo $img['alt'];?>" title="<?php echo $img['alt'];?>"class="cfc-img" width="<?php echo $img['width'] ?>" height="<?php echo $img['height']; ?>" ><?php endif;?>
			</div>
		</div>
	</div>
	<?php if(get_sub_field('cfc_bg_img')):?>
	<style>
		.custom-folding-cartons:before{ background-image: url(<?php echo get_sub_field('cfc_bg_img');?>); }
	</style><?php endif;?>
</section>


<?php elseif( get_row_layout() == 'about_us_module' ): ?>
<section class="about-us-module">
	<div class="container">
		<div class="row align-items-center">
			
			<div class="col-12 col-lg-6 aum-content-wrap" >
				<div class="aum-content">
				<?php if(get_sub_field('aum_heading')):?>
				<h2 class="aum-heading"><?php echo get_sub_field('aum_heading');?></h2><?php endif;?><?php if(get_sub_field('aum_desc')):?>
				<p class="aum-text"><?php echo get_sub_field('aum_desc');?></p><?php endif;?>
				<?php $cta = get_sub_field('aum_cta'); if($cta):?>
				<a href="<?php echo $cta['url'];?>" class="btn btn-alt aum-btn"><?php echo $cta['title'];?></a><?php endif;?></div>
			</div>
			<div class="col-12 col-lg-6 aum-img-wrap">
				<?php $img = get_sub_field('aum_img'); if($img):?><img src="<?php echo $img['url'];?>" alt="<?php echo $img['alt'];?>" title="<?php echo $img['alt'];?>"class="aum-img" width="<?php echo $img['width'] ?>" height="<?php echo $img['height']; ?>" ><?php endif;?>
			</div>
		</div>
	</div>
	<?php if(get_sub_field('aum_bg_img')):?>
	<style>
		.about-us-module:before{ background-image: url(<?php echo get_sub_field('aum_bg_img');?>); }
	</style><?php endif;?>
</section>

<?php elseif( get_row_layout() == 'home_gallery_module' ): ?>
		<section class="home-gallery-module text-center" <?php if(get_sub_field('gall_bg_img')):?>style="background-image: url(<?php echo get_sub_field('gall_bg_img');?>);" <?php endif;?>>
			<div class="container">
				<div class="row gall-content-wrap">
					<div class="col-12">
						<?php if (get_sub_field('gall_heading')): ?>
				    		<h2 class="gall-heading"><?php echo get_sub_field('gall_heading'); ?></h2>
				    	<?php endif ?>

				    	
					</div>
				</div>

				<?php if( have_rows('gall_blocks') ): ?>
				<div class="row gall-listing" >
					<?php while ( have_rows('gall_blocks') ) : the_row(); ?>
					<div class="col-lg-3 col-12 col-sm-6 gall-item">
						<?php 
								$image = get_sub_field('gall_image');
								if( !empty( $image ) ): ?>
						    <a class="gall-item-link lightbox" href="<?php echo esc_url($image['url']); ?>" ><img class="gall-item-img" src="<?php echo esc_url($image['sizes'][ 'block-thumb' ]); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['alt']); ?>" width="<?php echo $image['width'] ?>" height="<?php echo $image['height']; ?>" />
													    		
						    </a>
					<?php endif; ?>	

						</div>
					<?php endwhile; ?>
				</div>
				<?php endif; ?>
				
				<div class="gall-cta-wrap">
					<a href="javascript:void(0)" class="gall-cta more">Load More</a><br>
					<a href="javascript:void(0)" class="gall-cta less">Load less</a>
				</div>
			</div>
		</section>



 <?php elseif( get_row_layout() == 'dest_resource_module' ): ?>
<section class="dest-resource-module" <?php if (get_sub_field('drm_bg_color')): ?>style="background-color:<?php echo get_sub_field('drm_bg_color'); ?>"<?php endif ?> >
	<div class="container py-5">
		<div class="row align-items-md-center ">
			<div class="col-md-8 col-12 ">
				<div> <?php if (get_sub_field('drm_heading')): ?>
						<h2 class="cbssm-title"><?php echo get_sub_field('drm_heading'); ?></h2>
					<?php endif ?>
					<?php echo get_sub_field('drm_desc'); ?>

					<?php $drm_link = get_sub_field('drm_link');
				if($drm_link):?>
				<div class="drm-cta-wrap  pb-4">
					<a class="btn btn-primary drm-btn" href="<?php echo $drm_link['url']; ?>"><?php echo $drm_link['title']; ?></a>
				</div>
				<?php endif; ?>
				</div>
			</div>
			<div class="col-md-4 col-12 text-center">
				<?php $img = get_sub_field('drm_img'); if($img):?>
				<a href="<?php echo $img['url'];?>"  title="<?php echo $img['alt'];?>" class="lightbox"><img src="<?php echo $img['url'];?>" alt="<?php echo $img['alt'];?>" title="<?php echo $img['alt'];?>"></a><?php endif;?>
			</div>
		</div>
	</div>
</section>

<?php elseif( get_row_layout() == 'bucket_module' ): ?>
		<section class="bucket-module" id="bucket-module<?php echo $i ?>">
			<div class="container pt-3 pb-5">
				<div class="bm-wrap">
					<div class="bm-title-wrap">
						<?php if (get_sub_field('bm_heading')): ?>
			    		<h2 class="bm-heading"><?php echo get_sub_field('bm_heading'); ?></h2>
			    	<?php endif ?>
						<?php if (get_sub_field('bm_text')): ?>
			    		<p class="bm-text"><?php echo get_sub_field('bm_text'); ?></p>
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

<?php elseif( get_row_layout() == 'rfq_lp_module' ): ?>
	<section class="rfq-lp-module">
			<div class="container">
				<?php if (get_sub_field('rfq_lp_heading')): ?>
			    		<h2 class="rfq-lp-heading"><?php echo get_sub_field('rfq_lp_heading'); ?></h2>
			    	<?php endif ?>
			    	<?php if (get_sub_field('rfq_lp_desc')): ?>
				<p class="rfq-lp-desc"><?php echo get_sub_field('rfq_lp_desc'); ?></p><?php endif ?>
				<div class="rfq-lp-wrap">
					<?php if(have_rows('rfq_lp_items')): while (have_rows('rfq_lp_items')): the_row(); ?>
					<div class="rfq-lp-item">
						<?php $img = get_sub_field('rfq_lp_img'); if($img):?><img src="<?php echo $img['url'];?>" alt="<?php echo $img['alt'];?>" title="<?php echo $img['alt'];?>"><?php endif;?>
						<?php if (get_sub_field('rfq_lp_title')): ?><h4><?php echo get_sub_field('rfq_lp_title'); ?></h4><?php endif ?>
					</div><?php endwhile;endif;?>
				</div>
			</div>
		</section>     


		  <?php elseif( get_row_layout() == 'additional_fact_module' ): ?>
		 	<section class="additional-fact-module">
		 		<div class="container">
		 			<div class="row m-0 justify-content-center align-items-center">
		 				<div class="col-12 col-md-6 text-center">
		 					<?php $img = get_sub_field('afm_img'); if($img):?><a href="<?php echo $img['url'];?>" class="lightbox"><img src="<?php echo $img['url'];?>" alt="<?php echo $img['alt'];?>" title="<?php echo $img['alt'];?>"></a><?php endif;?>
		 				</div>
		 				<div class="col-12 col-md-6">
		 					<div class="afm-content"><?php if(get_sub_field('afm_heading')):?>
		 						<h2 class="afm-heading"><?php echo get_sub_field('afm_heading');?></h2><?php endif;?><?php if(get_sub_field('afm_desc')):?>
		 						<p class="afm-desc"><?php echo get_sub_field('afm_desc');?></p><?php endif;?>
		 						<?php $cta = get_Sub_field('afm_cta'); if($cta):?>
		 						<a href="<?php echo $cta['url'];?>" class="btn btn-primary"><?php echo $cta['title'];?></a><?php endif;?>
		 					</div>
		 				</div>
		 			</div>
		 		</div>
		 	</section>

		 <?php elseif( get_row_layout() == 'contact_point_module' ): ?>
		 	<section class="contact-point-module">
		 		<div class="container">
		 			<div class="row m-0 text-center">
		 				<?php if(have_rows('cpm_items')): while(have_rows('cpm_items')): the_row();?>
		 				<div class="col-12 col-md-3 p-2 cpm-item">
		 					<?php $logo = get_sub_field('cpm_logo'); if($logo):?>
		 					<img src="<?php echo $logo['url'];?>" title="<?php echo $logo['alt'];?>" alt="<?php echo $logo['alt'];?>"><?php endif;?>
		 					<?php if(get_sub_field('cpm_title')):?>
		 					<div class="cpm-title"><strong><?php echo get_sub_field('cpm_title');?></strong></div><?php endif;?>
		 				</div>
		 			<?php endwhile;endif;?>
		 			</div>
		 		</div>
		 	</section>

<?php endif; ?>
<?php endwhile; echo '</section>'; ?>
<?php endif; ?>
