<?php get_header() ?>
    <div class="container">
        <div class="row">
            <h4 class="page-title screen-reader-text">Blog Posts</h4>
            <main class="main_content col-md-9 pull-left">
                <div class="blog_posts_wrapper blog_posts_list clearfix  list_blog_style">
                    <?php while(have_posts()) : the_post(); ?>
                        <?php get_template_part( 'partials/post', 'item' ); ?>
                    <?php endwhile; ?>
                </div>
                <!-- .blog_posts_wrapper -->

                <nav class="navigation pagination" role="navigation">
                    <h2 class="screen-reader-text">Posts navigation</h2>
                    <div class="nav-links">
                        <?php
                        echo paginate_links(array(
                            'prev_text'          => __('<i class="fa fa-angle-left"></i>'),
                            'next_text'          => __('<i class="fa fa-angle-right"></i>')
                        ));
                    ?>
                    </div>
                </nav>
            </main>
            <!-- .main_content -->

            <?php get_sidebar(); ?>
        </div>
        <!-- .row -->
    </div>
<?php get_footer() ?>