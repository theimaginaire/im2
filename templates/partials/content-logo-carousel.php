test
<?php 
if(get_sub_field('logo_carousel')):
    $terms = get_sub_field('logo_carousel');
    $type = $terms->name;

    $shortcode = '[logos type='.$type.']';
else:
    $shortcode = '[logos]';
endif;

echo do_shortcode($shortcode);

?>