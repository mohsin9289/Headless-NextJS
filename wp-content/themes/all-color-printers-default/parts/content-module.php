
<?php if(get_field('hide_show')):?>
<?php if(have_rows('cm_items')):?>

<section class="content-module ">
	<?php while(have_rows('cm_items')): the_row();?>
	<div class="cm-wrap ">
<div class="container clearfix">
	<?php $img = get_sub_field('cm_img'); if($img):?>
<div class="cm-img">
		<a href="<?php echo $img['url'];?>" class="lightbox"><img src="<?php echo $img['url'];?>" alt="<?php echo $img['alt'];?>" title="<?php echo $img['alt'];?>"></a>

</div><?php endif;?>
<?php echo get_sub_field('cm_desc');?>
</div>
</div><?php endwhile;?>
</section> <?php endif;?><?php endif;?>