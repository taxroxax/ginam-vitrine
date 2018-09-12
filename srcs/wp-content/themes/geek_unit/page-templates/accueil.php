<?php
/**
 * Template Name: Accueil
 *
 *
 * @package WordPress
 * @subpackage geek_unit
 * @since geek_unit 1.0
 * @author : raymardrajaonarilala
 */

global $post;
$show_slider= get_field("show_slider",$post->ID);
if($show_slider){
    $main_slider=(get_field("main_slider",$post->ID));
    $breff_presentation=(get_field("breff_presentation",$post->ID));
    $recent_project=(get_field("recent_projects", $post->ID));
}

get_header(); ?>

    <!-- Full Body Container -->
<div id="container">
<!-- Start Home Page Slider -->
<?php
if ($show_slider):
    ?>
    <section id="home">
        <!-- Carousel -->
        <div id="main-slide" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php $nb_slider = Count($main_slider);
                for($i = 0; $i < $nb_slider; $i++){ ?>
                    <?php if ($i == 0):  ?>
                        <li data-target="#main-slide" data-slide-to="<?php echo $i; ?>" class="active" ></li>
                    <?php else : ?>
                        <li data-target="#main-slide" data-slide-to="<?php echo $i; ?>"></li>
                    <?php endif; ?>
                <?php }?>
            </ol>

            <!--/ Indicators end-->
            <!-- Carousel inner -->
            <div class="carousel-inner">
                <?php if (!is_null($main_slider)) : ?>
                <?php foreach($main_slider as $key=>$value):?>
                    <div class="item <?php echo $value['main_slide_active']; ?>">
                        <img class="img-responsive" src="<?php echo wp_get_attachment_url($value['main_slider_background']);?>" alt="slider">
                        <div class="slider-content">
                            <div class="col-md-12 text-center">
                                <h2 class="animated2" style="color: #ffffff">
                                    <span><?php echo $value['main_slider_title'];?></span>
                                </h2>

                                <?php if (isset($value['main_slider_small_text'])): ?>
                                <h3 class="animated3">
                                    <span><?php echo $value['main_slider_small_text']; ?></span>
                                </h3>
                                <?php endif ;?>

                                <?php if (isset($value['main_buttom_link'])): ?>
                                <p class="animated4"><a href="<?php echo $value['main_buttom_link']; ?>" target="_blank" class="slider btn btn-system btn-large">Suivre</a>
                                </p>
                                <?php endif ;?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
            </div>
            <!-- Carousel inner end-->

            <!-- Controls -->
            <a class="left carousel-control" href="#main-slide" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
            </a>
            <a class="right carousel-control" href="#main-slide" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
            </a>
        </div>
        <!-- /carousel -->
    </section>
<?php endif;?>
<!-- End Home Page Slider -->


<!-- Start Content -->
<div id="content">
<!-- Start Services Section fa-globe -->
<div class="container">
    <div class="row">
<?php if(!is_null($breff_presentation)) : ?>
<?php foreach($breff_presentation as $key=>$value):?>
    <!-- Start Service Icon 1 -->
    <div class="col-md-4 col-sm-4 service-box service-icon-left-more">
        <div class="service-icon">
            <i class="fa <?php echo $value['icon_presentation']; ?> fa-4x"></i>
        </div>
        <div class="service-content">
                <h4><?php echo $value['title_presentation']; ?></h4>
                <p><?php echo $value['description_presentation'] ?></p>
        </div>
    </div>
    <!-- End Service Icon 1 -->
<?php endforeach; ?>
<?php endif ?>
    </div>
    <!-- .row -->
</div>
<!-- .container -->
<!-- End Services Section -->


<!-- Start Portfolio Section -->
<div class="project">
    <div class="container">
        <!-- Start Recent Projects Carousel -->
        <div class="recent-projects">
            <h4 class="title"><span>Recent Projects</span></h4>
            <div class="projects-carousel touch-carousel">
                <?php if(!is_null($recent_project)): ?>
                <?php foreach ($recent_project as $key=>$value): ?>
                    <div class="portfolio-item item">
                        <div class="portfolio-border">
                            <div class="portfolio-thumb">
                                <a class="lightbox" data-lightbox-type="ajax" href="https://vimeo.com/78468485">
                                    <div class="thumb-overlay"><i class="fa fa-play"></i></div>
                                    <img alt="" src="<?php echo wp_get_attachment_url($value['projet_jacket_image']);?>" />
                                </a>
                            </div>
                            <div class="portfolio-details">
                                <a href="#">
                                    <h4><?php echo $value['project_title'] ;?></h4>
                                    <span><?php echo $value['project_few_description'] ;?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php endif ?>
            </div>
        </div>
        <!-- End Recent Projects Carousel $value['project_video_link'] -->
    </div>
    <!-- .container -->
</div>
<!-- End Portfolio Section -->


<!-- Divider -->
<div class="hr1 margin-60"></div>


<!-- Start News & Skill Section -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <!-- Classic Heading -->
            <h4 class="classic-title"><span>A la une</span></h4>

            <!-- Start Latest Posts -->
            <div class="latest-posts-classic">

                <!-- Post 1 -->
                <div class="post-row">
                    <div class="left-meta-post">
                        <div class="post-date"><span class="day">28</span><span class="month">Dec</span></div>
                        <div class="post-type"><i class="fa fa-picture-o"></i></div>
                    </div>
                    <h3 class="post-title"><a href="#">Standard Post With Image</a></h3>
                    <div class="post-content">
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet <a class="read-more" href="#">Read More...</a></p>
                    </div>
                </div>

                <!-- Post 2 -->
                <div class="post-row">
                    <div class="left-meta-post">
                        <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                        <div class="post-type"><i class="fa fa-picture-o"></i></div>
                    </div>
                    <h3 class="post-title"><a href="#">Gallery Post</a></h3>
                    <div class="post-content">
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <a class="read-more" href="#">Read More...</a></p>
                    </div>
                </div>

            </div>
            <!-- End Latest Posts -->
        </div>
        <!-- .col-md-6 -->

        <div class="col-md-6">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Our Skills</span></h4>

            <div class="skill-shortcode">
                <div class="skill">
                    <p>Web Design</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" data-percentage="60">
                            <span class="progress-bar-span">60%</span>
                            <span class="sr-only">60% Complete</span>
                        </div>
                    </div>
                </div>
                <div class="skill">
                    <p>Wordpress</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" data-percentage="80">
                            <span class="progress-bar-span">80%</span>
                            <span class="sr-only">60% Complete</span>
                        </div>
                    </div>
                </div>
                <div class="skill">
                    <p>CSS 3</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" data-percentage="90">
                            <span class="progress-bar-span">90%</span>
                            <span class="sr-only">60% Complete</span>
                        </div>
                    </div>
                </div>
                <div class="skill">
                    <p>HTML 5</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" data-percentage="100">
                            <span class="progress-bar-span">100%</span>
                            <span class="sr-only">60% Complete</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- .col-md-6 -->
    </div>
    <!-- .row -->
</div>
<!-- .container -->
<!-- End News & Skill Section -->


<!-- Divider -->
<div class="hr1 margin-60"></div>


<!-- Start Clients/Partner Section -->
<div class="container">
    <div class="our-clients">

        <!-- Classic Heading -->
        <h4 class="classic-title"><span>Our Clients</span></h4>

        <div class="clients-carousel custom-carousel touch-carousel" data-appeared-items="5">

            <!-- Client 1 -->
            <div class="client-item item">
                <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/c1.png" alt="" /></a>
            </div>

            <!-- Client 2 -->
            <div class="client-item item">
                <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/c2.png" alt="" /></a>
            </div>

            <!-- Client 3 -->
            <div class="client-item item">
                <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/c3.png" alt="" /></a>
            </div>

            <!-- Client 4 -->
            <div class="client-item item">
                <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/c4.png" alt="" /></a>
            </div>

            <!-- Client 5 -->
            <div class="client-item item">
                <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/c5.png" alt="" /></a>
            </div>

            <!-- Client 6 -->
            <div class="client-item item">
                <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/c6.png" alt="" /></a>
            </div>

            <!-- Client 7 -->
            <div class="client-item item">
                <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/c7.png" alt="" /></a>
            </div>

            <!-- Client 8 -->
            <div class="client-item item">
                <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/c8.png" alt="" /></a>
            </div>

        </div>
    </div>
</div>
<!-- .container -->
<!-- End Clients/Partner Section -->


</div>
<!--specific script-->

<?php get_footer(); ?>