<section class="gallery">
<?php 

$images = get_sub_field('gallery');

if( $images ): ?>
    <div class="owl-carousel gallery-carousel">
        <?php 
        foreach( $images as $image ):
            $content = '<div class="item">';
                $content .= '<a href="'.$image['url'].'">';
                     $content .= '<img src="'.$image['sizes']['large'].'" alt="'.$image['alt'].'" class="img-fluid" />';
                $content .= '</a>';
            $content .= '</div>';
            if ( function_exists('slb_activate') ){
                $content = slb_activate($content);
            }
            echo $content;
        endforeach; 
        ?>
    </div>
<?php endif; ?>
</section>