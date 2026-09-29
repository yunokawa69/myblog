<?php get_header(); ?>

<main>
    <section id="Blog">
        <article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
            <?php
            if (has_post_thumbnail()):
                the_post_thumbnail('medium');
            else:
            ?>

            <?php
            endif;
            ?>

            <div class="Blog">
                <div class="inner">
                    <?php
                    if (have_posts()):
                        while (have_posts()):
                            the_post();
                    ?>
                            <h2>Blog</h2>
                            <div class="Blog_article">
                                <article>
                                    <img src="<?php echo esc_url(get_theme_file_uri('/blog_imgs.png')); ?>" alt="">
                                    <p>2026.08.17　学校関連</p>
                                    <h3>前期を振り返って</h3>
                                    <a href="<?php the_permalink(); ?>">Read more</a>
                                </article>
                                <article>
                                    <img src="<?php echo esc_url(get_theme_file_uri('/blog_imgs.png')); ?>" alt="">
                                    <p>2026.07.23　Webデザイン</p>
                                    <h3>気になるWeb制作会社</h3>
                                    <a href="<?php the_permalink(); ?>">Read more</a>
                                </article>
                            </div>
                            <div class="article_none">
                                <article>
                                    <img src="<?php echo esc_url(get_theme_file_uri('/blog_imgs.png')); ?>" alt="">
                                    <p>2026.07.19　サークル</p>
                                    <h3>マッチ箱制作</h3>
                                    <a href="<?php the_permalink(); ?>">Read more</a>
                                </article>
                                <article>
                                    <img src="<?php echo esc_url(get_theme_file_uri('/blog_imgs.png')); ?>" alt="">
                                    <p>2026.05.25　Webデザイン</p>
                                    <h3>おすすめのWebサイト</h3>
                                    <a href="<?php the_permalink(); ?>">Read more</a>
                                </article>
                            </div>

                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
    </section>

    <div class="page">
        <?php get_sidebar(); ?>
    </div>

    <?php get_comments(); ?>

    <aside class="side-search">
        <h2 class="side-title">Search</h2>

        <?php get_search_form(); ?>

    </aside>

</main>

<?php get_footer();
