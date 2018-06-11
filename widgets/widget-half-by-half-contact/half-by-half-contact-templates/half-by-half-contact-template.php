<div class="half-by-half-contact-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>
                    <?php echo $instance['title']; ?>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="square-box">
                    <div class="square-container">
                        <div class="contact-icon">
                            <img src="<?php echo wp_get_attachment_url(wp_kses_post($instance['left_section']['image'])); ?>">
                        </div>
                        <div class="call">
                            <h3>Call</h3>
                            <p><?php echo $instance['left_section']['phone_number']; ?></p>
                        </div>
                        <div class="email">
                            <h3>Email</h3>
                            <p><a href="mailto:<?php echo $instance['left_section']['email']; ?>"><?php echo $instance['left_section']['email']; ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="square-box">
                    <div class="square-container">
                        <div class="contact-icon">
                            <a target="_blank" href="<?php echo $instance['right_section']['google_map_url']; ?>">
                                <img src="<?php echo  wp_get_attachment_url(wp_kses_post($instance['right_section']['image'])); ?>">

                            </a>
                        </div>
                        <div class="address">
                            <h3>Address</h3>
                            <?php echo $instance['right_section']['address']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="social-contact">
                        <a target="_blank" href="<?php echo $instance['instagram_url']; ?>">
                        <img src="<?php echo  plugins_url('/image/instagram.png', __FILE__ ) ?>">
                        </a>
                        <a target="_blank" href="<?php echo $instance['twitter_url']; ?>">
                        <img src="<?php  echo  plugins_url('/image/twitter.png', __FILE__ ) ?>">
                        </a>
                </div>
            </div>
        </div>
    </div>
</div>