<?php 
$rows = get_field('greeters', 'option' );
if( $rows ) {
    $index = array_rand( $rows );
    $rand_row = $rows[ $index ];
    $rand_greeting = $rand_row['greeting'];
    $rand_image = $rand_row['image'];
} 
?>
<div class="greeter">
    <div class="greeter-greeting reveal-up load-hidden">
        <?php echo $rand_greeting ?>
    </div>
    <div class="greeter-image">
        <?php if($rand_image): ?>
            <img src="<?php echo esc_url($rand_image['url']); ?>" alt="<?php echo esc_attr($rand_image['alt']); ?>">
        <?php endif; ?>
    </div>
</div>