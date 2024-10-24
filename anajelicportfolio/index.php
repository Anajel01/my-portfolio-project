<?php get_header() ?>
<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post() ?>

   <?php 
   $contact_link = get_field("contact_link");
   $title_text = get_field("title_text");
   $video = get_field("video");
   $title_subtext = get_field("title_subtext");
   $cv_button = get_field("cv_button");
   $cv_video_ = get_field("cv_video_");
   $title_text_for_what_i_do = get_field("title_text_for_what_i_do");
   $paragraph_about_what_i_do= get_field("paragraph_about_what_i_do");
   $about_me_title_text = get_field("about_me_title_text");
   $about_me_paragraph = get_field("about_me_paragraph");
   $photo_of_myself = get_field("photo_of_myself");
   $how_i_work_on_my_projects_title_text = get_field("how_i_work_on_my_projects_title_text");
   $wip_first_photo = get_field("wip_first_photo");
   $wip_second_photo = get_field("wip_second_photo");
   $wip_third_photo = get_field("wip_third_photo");
   $wip_first_title = get_field("wip_first_title");
   $wip_second_title = get_field("wip_second_title");
   $wip_third_title = get_field("wip_third_title");
   $wip_first_paragraph = get_field("wip_first_paragraph");
   $wip_second_paragraph = get_field("wip_second_paragraph");
   $wip_third_paragraph = get_field("wip_third_paragraph");
   $email = get_field("email");
   $number = get_field("number");
   

   
   ?>
    <section class="hero">
        <video autoplay muted loop id="hero-video">
            <source src="<?php echo $video["url"] ?>" type="video/mp4">
            
        </video>
        <div class="hero-text">
            <h1><?php echo $title_text ?></h1>
            <p><?php echo $title_subtext ?></p>
            <div class="hero-buttons">
                <a href="<?php echo $cv_button ?>" class="btn" target="_blank"><?php pll_e("CV") ?></a>
                <a href="<?php echo $cv_video_ ?>" class="btn" target="_blank"><?php pll_e("Video CV") ?></a>
            </div>
        </div>
    </section>

    <div class="Introduction">
        <div class="titleandtext">
            <div class="title"><?php echo $title_text_for_what_i_do  ?></div>
            <div class="text"><?php echo $paragraph_about_what_i_do ?></div>
        </div>
    </div>
    <div class="container">
        <div class="content">
            <div class="imageofme"><img src="<?php echo $photo_of_myself["url"] ?>" alt=""></div>
            <div class="text-content">
                <h1><?php echo $about_me_title_text ?></h1>
                <p>
                <?php echo $about_me_paragraph ?>
                </p>
                <a href="<?php echo $contact_link ?>" class="contact-btn"><?php pll_e("Contact me") ?></a>
                
            </div>
        </div>
        <div class="bottom-red-section"></div>
    </div>
    
    <div class="about-projects">
        <div class="title-text">
            <h1><a name="about-projects"><?php echo $how_i_work_on_my_projects_title_text ?></a></h1>
        </div>
        <div class="about-project-images">
            <div class="step-one card">
                <div class="step-one-image">
                    <img src="<?php echo $wip_first_photo["url"] ?>" alt="Market Research">
                </div>
                <div class="step-one-title">
                    <h3><?php echo $wip_first_title ?></h3>
                </div>
                <div class="step-one-text">
                    <p><?php echo $wip_first_paragraph ?></p>
                </div>
            </div>
            <div class="step-two card">
                <div class="step-two-image">
                    <img src="<?php echo $wip_second_photo["url"]  ?>" alt="Low-Fidelity Website Design">
                </div>
                <div class="step-two-title">
                    <h3><?php echo $wip_second_title ?></h3>
                </div>
                <div class="step-two-text">
                    <p><?php echo $wip_second_paragraph ?></p>
                </div>
            </div>
            <div class="step-three card">
                <div class="step-three-image">
                    <img src="<?php echo $wip_third_photo["url"] ?>" alt="High-Fidelity Website Design">
                </div>
                <div class="step-three-title">
                    <h3><?php echo $wip_third_title ?></h3>
                </div>
                <div class="step-three-text">
                    <p><?php echo $wip_third_paragraph ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="carousel-container">
        <h2 class="carousel-title"><a name="carousel"><?php pll_e("Projects I worked on:") ?></h2>
        <div class="carousel">
            <button class="carousel-arrow left">&#10094;</button> 
            <div class="carousel-track">
                
                <?php
                $loop = new WP_Query(array(
                    "post_type" => "my-project",
                    "posts_per_page" => -1
                ));
                ?>

                <?php if($loop->have_posts()): ?>
                    <?php while($loop->have_posts()): $loop->the_post() ?>

                        <?php
                        $image = get_field("website_image");
                        $url = get_field("website_url");
                        ?>

                        <div class="carousel-item active">
                            <img src="<?php echo $image["url"] ?>" alt="Project 1">
                            
                            <a class="visit-button" href="<?php echo $url ?>"><?php pll_e("Visit") ?></a>
                        </div>


                    <?php endwhile; ?>
                <?php endif; ?>

                
               
            </div>
            <button class="carousel-arrow right">&#10095;</button> 
        </div>
        
    </div>

    
    <footer>
    <div class="contact-section">
        <div class="contact-item">
            <p><?php pll_e("call me:") ?> <?php echo $number ?> </p>
        </div>
        <div class="contact-item">
            <div class="contact-text">
                <p><?php pll_e("Contact me") ?></p>
            </div>
            <p>email: <?php echo $email ?></p>
        </div>
        <div class="contact-item">
            <a href="<?php echo $contact_link ?>" class="contact-btn"><?php pll_e("CONTACT") ?></a>
        </div>
    </div>
        <div id="popupForm" class="form-container" style="display:none;">
    <button id="closeFormButton" class="close-button">X</button>
    <?php echo do_shortcode('[contact-form-7 id="eb91d58" title="Contact me"]'); ?>
</div>
        <hr>
        <div class="name-section">
            <p><?php pll_e("My<br>Socials:") ?></p>
        </div>
        <div class="social-icons">
            <a href="www.linkedin.com/in/ana-jelić2005" target="_blank"><img src=" <?php echo get_template_directory_uri("url") ?>/img/linkedin-icon.png" alt="LinkedIn"></a>
            <a href="https://www.instagram.com/ana.jelic_?igsh=MWZ1cms3cGM4emozbw==" target="_blank"><img src="<?php echo get_template_directory_uri("url") ?>/img/instagram-icon.png" alt="Instagram"></a>
            <a href="https://www.youtube.com/watch?v=FcxjHNII7cw" target="_blank"><img src="<?php echo get_template_directory_uri("url") ?>/img/youtube-icon.png" alt="YouTube"></a>
        </div>
    </footer>
    



<?php endwhile; ?>
    <?php endif; ?>
<?php get_footer() ?>