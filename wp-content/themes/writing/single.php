<?php get_header() ?>

<?php while(have_posts()) : the_post(); ?>
    <div class="container">
        <div class="row">
            <main class="main_content col-md-12">
                <div class="blog_posts_wrapper blog_single blog_posts_single">
                    <?php get_template_part( 'partials/post', 'full' ); ?>
                    <!-- #post-## -->
                    <!-- Reading progress bar -->
                    <?php get_template_part( 'partials/post', 'author' ); ?>

                    <!-- .author-info -->
                    <?php get_template_part( 'partials/post', 'navigation' ); ?>


                    <?php get_template_part( 'partials/post', 'related' ); ?>

                    <?php get_template_part( 'partials/post', 'comment-disqus' ); ?>
                    <!-- .comments-area -->
                </div>
                <!-- .blog_posts_wrapper -->
            </main>
            <!-- .main_content -->
        </div>
        <!-- .row -->
    </div>
<?php endwhile; ?>


<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5674cf635e4c5b26"></script>

<?php get_footer() ?>