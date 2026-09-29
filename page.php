 <?php get_header(); ?>

 <main>
     <section id="Blog">
         <div class="blog_single">

             <div class="post-contents">
                 <?php the_content(); ?>
             </div>

             <div class="inner">
                 <?php
                    if (have_posts()):
                        while (have_posts()):
                            the_post();
                    ?>
                         <article class="post">
                             <p>My Blog>Webデザイン>気になるWeb制作会社</p>
                             <p>2026.07.23</p>
                             <h2>気になるWeb制作会社</h2>
                             <img src="<?php echo esc_url(get_theme_file_uri('/blog_imgs.png')); ?>" alt="">
                             <h3>はじめに</h3>
                             <p>気になるWeb制作会社を紹介したいと思います！</p>
                             <h2>株式会社エクスフィールド</h2>
                             <img src="<?php echo esc_url(get_theme_file_uri('/exfield.png')); ?>" alt="">
                             <p>『クリエイティブなものを迅速に丁寧に。』</p>
                             <p>株式会社エクスフィールドは、名古屋を拠点とするWeb制作会社です。<br>親切・迅速・丁寧をモットーに制作してます。</p>
                             <h3>事業内容</h3>
                             <p>1　ホームページ制作事業<br>2　LP（ランディングページ）制作事業<br>3　広告制作事業<br>4　ロゴイラスト制作事業<br>5　コンサルティング事業</p>
                             <h3>最後に</h3>
                             <p>株式会社エクスフィールドについて紹介しました。<br>最後まで読んでくれてありがとうございました🙇</p>
                         </article>
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

 </main>

 <?php get_footer(); ?>

 <!-- <?php get_header(); ?>

<main>
    <section id="Blog">
        <div class="blog_single">

            <div class="inner">

                <?php
                if (have_posts()):
                    while (have_posts()):
                        the_post();
                ?>

                        <article class="post">

                            <p>My Blog &gt; Webデザイン &gt; <?php the_title(); ?></p>

                            <p><?php echo get_the_date('Y.m.d'); ?></p>

                            <h2><?php the_title(); ?></h2>

                            <?php the_content(); ?>

                        </article>

                <?php
                    endwhile;
                endif;
                ?>

            </div>

        </div>
    </section>
</main>

<?php get_footer(); ?> -->