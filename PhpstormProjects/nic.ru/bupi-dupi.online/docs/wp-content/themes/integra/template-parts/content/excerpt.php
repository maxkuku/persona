<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>
<div class="col-md-3 col-xs-12 col-12">
    <div class="card articles-card">
        <?if(!has_post_thumbnail(get_the_ID())){?>
        <a href="<?=get_the_permalink()?>">
            <img class="mr-3 im200x200" src="<?=catch_that_image() ?>" width="200" height="200" alt="<?=get_the_title()?>"></a>
        <?}
        else{?>
        <a href="<?=get_the_permalink()?>">
        <?=get_the_post_thumbnail(); ?>
        </a>
        <?}?>
        <h6 class="card-title"><a href="<?=get_the_permalink()?>"><?=get_the_title()?></a></h6>
    </div>
</div>
<!-- #post-<?=get_the_ID(); ?> -->
