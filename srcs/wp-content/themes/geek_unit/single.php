<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage geek_unit
 * @since geek_unit 1.0
 * @author : raymardrajaonarilala
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <?php if ( is_sticky() ) : ?>
                                <hgroup>
                                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'geek_unit' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                                    <h3 class="entry-format"><?php _e( 'Featured', 'geek_unit' ); ?></h3>
                                </hgroup>
                            <?php else : ?>
                                <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'geek_unit' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                            <?php endif; ?>

                            <?php if ( comments_open() && ! post_password_required() ) : ?>
                                <div class="comments-link">
                                    <?php comments_popup_link( '<span class="leave-reply">' . __( 'Reply', 'geek_unit' ) . '</span>', _x( '1', 'comments number', 'geek_unit' ), _x( '%', 'comments number', 'geek_unit' ) ); ?>
                                </div>
                            <?php endif; ?>
                        </header><!-- .entry-header -->

                        <?php if ( is_search() ) : // Only display Excerpts for Search ?>
                            <div class="entry-summary">
                                <?php the_excerpt(); ?>
                            </div><!-- .entry-summary -->
                        <?php else : ?>
                            <div class="entry-content">
                                <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'geek_unit' ) ); ?>
                                <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'geek_unit' ) . '</span>', 'after' => '</div>' ) ); ?>
                            </div><!-- .entry-content -->
                        <?php endif; ?>

                        <footer class="entry-meta">
                            <?php $show_sep = false; ?>
                            <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
                                <?php
                                /* translators: used between list items, there is a space after the comma */
                                $categories_list = get_the_category_list( __( ', ', 'geek_unit' ) );
                                if ( $categories_list ):
                                    ?>
                                    <span class="cat-links">
				<?php printf( __( '<span class="%1$s">Posted in</span> %2$s', 'geek_unit' ), 'entry-utility-prep entry-utility-prep-cat-links', $categories_list );
                $show_sep = true; ?>
			</span>
                                <?php endif; // End if categories ?>
                                <?php
                                /* translators: used between list items, there is a space after the comma */
                                $tags_list = get_the_tag_list( '', __( ', ', 'geek_unit' ) );
                                if ( $tags_list ):
                                    if ( $show_sep ) : ?>
                                        <span class="sep"> | </span>
                                    <?php endif; // End if $show_sep ?>
                                    <span class="tag-links">
				<?php printf( __( '<span class="%1$s">Tagged</span> %2$s', 'geek_unit' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list );
                $show_sep = true; ?>
			</span>
                                <?php endif; // End if $tags_list ?>
                            <?php endif; // End if 'post' == get_post_type() ?>

                            <?php if ( comments_open() ) : ?>
                                <?php if ( $show_sep ) : ?>
                                    <span class="sep"> | </span>
                                <?php endif; // End if $show_sep ?>
                                <span class="comments-link"><?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'geek_unit' ) . '</span>', __( '<b>1</b> Reply', 'geek_unit' ), __( '<b>%</b> Replies', 'geek_unit' ) ); ?></span>
                            <?php endif; // End if comments_open() ?>

                            <?php edit_post_link( __( 'Edit', 'geek_unit' ), '<span class="edit-link">', '</span>' ); ?>
                        </footer><!-- #entry-meta -->
                    </article><!-- #post-<?php the_ID(); ?> -->

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>