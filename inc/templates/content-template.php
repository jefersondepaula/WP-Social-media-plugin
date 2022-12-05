<hr>
<h5>Minhas redes sociais</h5>

<?php $style = get_option('jp-social-links')['style'];?>

<?php switch ($style) {
    case 'style1': ?>
        <style>

        </style>
        <div class="jp-social-media-liks my-3">
            <a href="<?php echo get_option('jp-social-links')['tw-profile']; ?>" target="_blank" rel="noopener noreferrer">Twitter</a>
            <a href="<?php echo get_option('jp-social-links')['fb-profile']; ?>" target="_blank" rel="noopener noreferrer">Facebook</a>
            <a href="<?php echo get_option('jp-social-links')['yt-profile']; ?>" target="_blank" rel="noopener noreferrer">Youtube</a>
            <a href="<?php echo get_option('jp-social-links')['wpp-profile']; ?>" target="_blank" rel="noopener noreferrer">Whatsapp</a>
        </div>

    <?php break;
    case 'style2': ?>
        <style>

        </style>
        <div class="jp-social-media-liks my-3">
           <a href="<?php echo get_option('jp-social-links')['tw-profile']; ?>" target="_blank" rel="noopener noreferrer">
                <img width="40" height="40" src="<?php echo plugin_dir_url(__FILE__) . "/icons/twitter-$style"; ?>" alt="">
           </a>
           <a href="<?php echo get_option('jp-social-links')['fb-profile']; ?>" target="_blank" rel="noopener noreferrer">
                <img width="40" height="40" src="<?php echo plugin_dir_url(__FILE__) . "/icons/facebook-$style"; ?>" alt="">
           </a>
           <a href="<?php echo get_option('jp-social-links')['yt-profile']; ?>" target="_blank" rel="noopener noreferrer">
                <img width="40" height="40" src="<?php echo plugin_dir_url(__FILE__) . "/icons/youtube-$style"; ?>" alt="">
           </a>
           <a href="<?php echo get_option('jp-social-links')['wpp-profile']; ?>" target="_blank" rel="noopener noreferrer">
                <img width="40" height="40" src="<?php echo plugin_dir_url(__FILE__) . "/icons/wpp-$style"; ?>" alt="">
           </a>
        </div>

    <?php break;

    case 'style3': ?>

        <style>

        </style>
        <div class="jp-social-media-liks my-3">
            <a href="<?php echo get_option('jp-social-links')['tw-profile']; ?>" target="_blank" rel="noopener noreferrer">
                    <img width="40" height="40" src="<?php echo plugin_dir_url(__FILE__) . "/icons/twitter-$style"; ?>" alt="">
            </a>
            <a href="<?php echo get_option('jp-social-links')['fb-profile']; ?>" target="_blank" rel="noopener noreferrer">
                    <img width="40" height="40" src="<?php echo plugin_dir_url(__FILE__) . "/icons/facebook-$style"; ?>" alt="">
            </a>
            <a href="<?php echo get_option('jp-social-links')['yt-profile']; ?>" target="_blank" rel="noopener noreferrer">
                    <img width="40" height="40" src="<?php echo plugin_dir_url(__FILE__) . "/icons/youtube-$style"; ?>" alt="">
            </a>
            <a href="<?php echo get_option('jp-social-links')['wpp-profile']; ?>" target="_blank" rel="noopener noreferrer">
                    <img width="40" height="40" src="<?php echo plugin_dir_url(__FILE__) . "/icons/wpp-$style"; ?>" alt="">
            </a>
        </div>  
    <?php break;

}?>



