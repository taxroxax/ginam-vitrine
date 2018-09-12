<?php
/**
 * Template Name: About
 *
 *
 * @package WordPress
 * @subpackage geek_unit
 * @since geek_unit 1.0
 * @author : raymardrajaonarilala
 */

global $post;

get_header(); ?>
    <div id="container">

    <!-- Start Header -->
    <div class="hidden-header"></div>
    <!-- End Header -->


    <!-- Start Page Banner -->
    <div class="page-banner"
         style="padding:40px 0; background: url(<?php echo get_template_directory_uri(); ?>/images/slide-02-bg.jpg) center #f9f9f9;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2><?php echo get_the_title(); ?></h2>
                    <!--                    <p>Nous somme des professionelles</p>-->
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumbs">
                        <li><a href="#">Acceuil</a></li>
                        <li>A-propos de nous</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->


    <!-- Start Content -->
    <div id="content">
    <div class="container">
    <div class="page-content">


        <div class="row">

            <div class="col-md-7">

                <!-- Classic Heading -->
                <h4 class="classic-title"><span>
                    <?php echo get_field("about_content_title", $post->ID); ?>
            </span></h4>

                <!-- Some Text -->
                <?php echo get_field("about_content_description", $post->ID); ?>

            </div>

            <div class="col-md-5">

                <!-- Classic Heading -->
                <h4 class="classic-title"><span>Notre Solutions</span></h4>

                <!-- Accordion -->
                <div class="panel-group" id="accordion">

                    <!-- Start Accordion 1 -->
                    <div class="panel panel-default">
                        <!-- Toggle Heading -->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-1">
                                    <i class="fa fa-angle-up control-icon"></i>
                                    <i class="fa fa-desktop"></i> Site totalement responsive
                                </a>
                            </h4>
                        </div>
                        <!-- Toggle Content -->
                        <div id="collapse-1" class="panel-collapse collapse in">
                            <div class="panel-body"><img class="img-thumbnail image-text"
                                                         style="float:left; width:150px;" alt=""
                                                         src="images/margo.png"/> <strong class="accent-color">Geek
                                    Unit</strong> Nous avons développer ce site pour faire preuve notre
                                existance et pour vous montrer comme vitrine notre savoir faire et notre
                                compétence conçernant le <strong>monde numérique</strong>. Profiter de visité la
                                totalité du site et de prendre décision pour passer votre commande.
                            </div>
                        </div>
                    </div>
                    <!-- End Accordion 1 -->

                    <!-- Start Accordion 2 -->
                    <div class="panel panel-default">
                        <!-- Toggle Heading -->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-2"
                                   class="collapsed">
                                    <i class="fa fa-angle-up control-icon"></i>
                                    <i class="fa fa-gift"></i>Dev-Web Exemple de notre savoir
                                </a>
                            </h4>
                        </div>
                        <!-- Toggle Content -->
                        <div id="collapse-2" class="panel-collapse collapse">
                            <div class="panel-body"><strong>Symfony, Zend, Laravel</strong> comme framework de
                                développement d'application php.<br> <strong>Drupal , Wordpress,
                                    Prestashop</strong> en ce qui concernent le monde d'utilisation des gestions
                                de contenu (CMS) pour facilité votre administration de contenu dans votre site
                                web. <br><strong>JAVA, C#, PERL, Angulars, Node JS </strong> et d'autre encore
                                <a href="index.php">voir la suite...</a></div>
                        </div>
                    </div>
                    <!-- End Accordion 2 -->

                </div>
            </div>
        </div>

    </div>
    <!-- Divider -->
    <div class="hr1" style="margin-bottom:50px;"></div>

    <!-- Classic Heading -->
    <h4 class="classic-title"><span>L'équipe de développement</span></h4>

    <!-- Start Team Members -->
    <div class="row">
        <?php
        $teams = get_field("about_dev_team", $post->ID);
        ?>
        <!-- Start Memebr 1 -->
        <?php if (!is_null($teams)) : ?>
            <?php foreach ($teams as $team) : ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member">
                        <!-- Memebr Photo, Name & Position -->
                        <div class="member-photo">
                            <img alt="<?php echo $team['nom']; ?>" style="width: 330px; height: 330px;" src="<?php echo wp_get_attachment_url($team['photos']); ?>"/>

                            <div class="member-name"><?php echo $team['nom']; ?>
                                <span><?php echo $team['fonction'] ?></span></div>
                        </div>
                        <!-- Memebr Words -->
                        <div class="member-info">
                            <p><?php echo $team['description'] ?></p>
                        </div>
                        <?php if (!is_null($team['reseaux_sociaux'])) : ?>
                            <div class="member-socail">
                                <?php foreach ($team['reseaux_sociaux'] as $r_s) : ?>
                                    <?php switch ($r_s['nom_du_reseaux_sociaux']) {
                                        case 'facebook':
                                            ?>
                                            <a class="facebook" href="<?php echo $r_s['liens'] ?>"><i
                                                    class="fa fa-facebook"></i></a>
                                        <?php
                                            ;
                                            break;
                                        case 'linkedin':
                                            ?>
                                            <a class="linkedin" href="<?php echo $r_s['liens'] ?>"><i
                                                    class="fa fa-linkedin"></i></a>
                                            <?php
                                            ;
                                            break;
                                        case 'google_plus':
                                            ?>
                                            <a class="gplus" href="<?php echo $r_s['liens'] ?>"><i
                                                    class="fa fa-gplus"></i></a>
                                            <?php
                                            ;
                                            break;
                                        default:
                                            ?>
                                            <a class="mail" href="<?php echo $r_s['liens'] ?>"><i class="fa fa-envelope"></i></a>
                                            <?php
                                            ;
                                            break;
                                    }?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
        <!-- End Memebr -->
    </div>
    <!-- End Team Members -->

    </div>
    </div>
    </div>
    <!-- End content -->
<?php get_footer(); ?>