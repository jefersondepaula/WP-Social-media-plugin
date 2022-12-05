<div class="wrap">

        <h1>Links de suas redes sociais para mostrar no post:</h1>
        <hr>

    <form action="options.php" method="post">        
        <?php settings_fields('jp-social-settings'); ?>
        
        <label>Twitter:</label> <br>
        <input type="text" name="jp-social-links[tw-profile]" id="jp-social-links[tw-profile]" 
        value="<?php echo get_option('jp-social-links')['tw-profile'];?>"/><br>    

        <label>Facebook:</label><br>        
        <input type="text" name="jp-social-links[fb-profile]" id="jp-social-links[fb-profile]" 
        value="<?php echo get_option('jp-social-links')['fb-profile'];?>"/><br>

        <label>Youtube:</label><br>        
        <input type="text" name="jp-social-links[yt-profile]" id="jp-social-links[yt-profile]"
        value="<?php echo get_option('jp-social-links')['yt-profile'];?>"/><br>

        <label>Whatsapp:</label><br>        
        <input type="text" name="jp-social-links[wpp-profile]" id="jp-social-links[wpp-profile]" 
        value="<?php echo get_option('jp-social-links')['wpp-profile']; ?>"/><br>


        <hr>
        <h1>Escolha o estilo a ser exibido:</h1>      
         
        <input type="radio" name="jp-social-links[style]" id="jp-social-links[style]" value="style1"
        <?php echo (get_option('jp-social-links')['style'] == 'style1') ? 'checked' : ''; ?>><label>Style 1:</label>
        <p> Twitter | Facebook | Youtube | Whatsapp</p>
        <br>

        <input type="radio" name="jp-social-links[style]" id="jp-social-links[style2]" value="style2"
        <?php echo (get_option('jp-social-links')['style'] == 'style2') ? 'checked' : ''; ?>><label>Style 2:</label>
        <p>
            <img width="50" height="50" src="<?php echo plugin_dir_url(__FILE__).'/icons/twitter-style2.png';?>" alt="">
            <img width="50" height="50" src="<?php echo plugin_dir_url(__FILE__).'/icons/facebook-style2.png';?>" alt="">
            <img width="50" height="50" src="<?php echo plugin_dir_url(__FILE__).'/icons/youtube-style2.png';?>" alt="">
            <img width="50" height="50" src="<?php echo plugin_dir_url(__FILE__).'/icons/wpp-style2.png';?>" alt="">
        </p>
        <br>

        <input type="radio" name="jp-social-links[style]" id="jp-social-links[style3]" value="style3"
        <?php echo (get_option('jp-social-links')['style'] == 'style3') ? 'checked' : ''; ?>><label>Style 3:</label>
        <p>
            <img width="50" height="50" src="<?php echo plugin_dir_url(__FILE__)."/icons/twitter-style3.png";?>" alt="" srcset="">
            <img width="50" height="50" src="<?php echo plugin_dir_url(__FILE__)."/icons/facebook-style3.png";?>" alt="" srcset="">
            <img width="50" height="50" src="<?php echo plugin_dir_url(__FILE__)."/icons/youtube-style3.png";?>" alt="" srcset="">
            <img width="50" height="50" src="<?php echo plugin_dir_url(__FILE__)."/icons/wpp-style3.png";?>" alt="" srcset="">
        </p>
        <br>

        <br><input type="submit" id="submit" value="Salvar">

    </form>
</div>