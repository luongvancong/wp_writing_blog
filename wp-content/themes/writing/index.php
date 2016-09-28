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
            <aside class="side_content widget_area col-md-3 pull-right">
                <h3 class="screen-reader-text">Site Sidebar</h3>
                <div id="secondary" class="secondary">
                    <div id="widget-area" class="widget-area" role="complementary">
                        <div id="categories-4" class="widget_container widget_content widget widget_categories clearfix">
                            <h4 class="widget_title title"><span class="page_header_title">Categories</span></h4>
                            <ul>
                                <li class="cat-item cat-item-2"><a href="https://ahmad.works/writing/category/images-posts/" >Images Posts</a></li>
                                <li class="cat-item cat-item-3"><a href="https://ahmad.works/writing/category/life-style/" >Life Style</a></li>
                                <li class="cat-item cat-item-8"><a href="https://ahmad.works/writing/category/photograph/" >Photograph</a></li>
                                <li class="cat-item cat-item-1"><a href="https://ahmad.works/writing/category/uncategorized/" >Uncategorized</a></li>
                            </ul>
                        </div>
                        <div id="postlist-widget-5" class="widget_container widget_content widget asalah-postlist-widget clearfix">
                            <h4 class="widget_title title"><span class="page_header_title">Recent Posts</span></h4>
                            <div class="asalah_post_list_widget">
                                <ul class="post_list">
                                    <li class="post_item clearfix">
                                        <div class="post_thumbnail_wrapper"><a href="https://ahmad.works/writing/restaurant-employer-read-clients-orders-on-his-ipad/" title="Restaurant Employer Read Clients Orders On His iPad"><img width="50" height="50" src="https://awcdn1.ahmad.works/writing/wp-content/uploads/2015/05/Resturant-Employer-150x150.jpg" class="img-responsive wp-post-image" alt="Resturant-Employer" /></a></div>
                                        <div class="post_info_wrapper">
                                            <h5 class="title post_title"><a href="https://ahmad.works/writing/restaurant-employer-read-clients-orders-on-his-ipad/" title="Restaurant Employer Read Clients Orders On His iPad">Restaurant Employer Read Clients Orders On His iPad</a></h5>
                                            <span class="post_meta_item post_meta_time post_time">May 17, 2015</span>
                                        </div>
                                    </li>
                                    <li class="post_item clearfix">
                                        <div class="post_thumbnail_wrapper"><a href="https://ahmad.works/writing/amazing-classic-interior-design-with-perfect-lighting/" title="Amazing Classic Interior Design With Perfect Lighting"><img width="50" height="50" src="https://awcdn1.ahmad.works/writing/wp-content/uploads/2015/05/Modern-Enterior-Design-150x150.jpg" class="img-responsive wp-post-image" alt="Modern-Enterior-Design" /></a></div>
                                        <div class="post_info_wrapper">
                                            <h5 class="title post_title"><a href="https://ahmad.works/writing/amazing-classic-interior-design-with-perfect-lighting/" title="Amazing Classic Interior Design With Perfect Lighting">Amazing Classic Interior Design With Perfect Lighting</a></h5>
                                            <span class="post_meta_item post_meta_time post_time">May 17, 2015</span>
                                        </div>
                                    </li>
                                    <li class="post_item clearfix">
                                        <div class="post_thumbnail_wrapper"><a href="https://ahmad.works/writing/english-breakfast-tea-with-tasty-donut-desserts/" title="English Breakfast Tea With Tasty Donut Desserts"><img width="50" height="50" src="https://awcdn1.ahmad.works/writing/wp-content/uploads/2015/05/Desserts-150x150.jpg" class="img-responsive wp-post-image" alt="Desserts" /></a></div>
                                        <div class="post_info_wrapper">
                                            <h5 class="title post_title"><a href="https://ahmad.works/writing/english-breakfast-tea-with-tasty-donut-desserts/" title="English Breakfast Tea With Tasty Donut Desserts">English Breakfast Tea With Tasty Donut Desserts</a></h5>
                                            <span class="post_meta_item post_meta_time post_time">May 17, 2015</span>
                                        </div>
                                    </li>
                                    <li class="post_item clearfix">
                                        <div class="post_thumbnail_wrapper"><a href="https://ahmad.works/writing/two-smart-kids-reading-magazine-before-sleeping/" title="Two Smart Kids Reading Magazine Before Sleeping"><img width="50" height="50" src="https://awcdn1.ahmad.works/writing/wp-content/uploads/2015/05/Brother-and-Sister-150x150.jpg" class="img-responsive wp-post-image" alt="Brother-and-Sister" /></a></div>
                                        <div class="post_info_wrapper">
                                            <h5 class="title post_title"><a href="https://ahmad.works/writing/two-smart-kids-reading-magazine-before-sleeping/" title="Two Smart Kids Reading Magazine Before Sleeping">Two Smart Kids Reading Magazine Before Sleeping</a></h5>
                                            <span class="post_meta_item post_meta_time post_time">May 17, 2015</span>
                                        </div>
                                    </li>
                                    <li class="post_item clearfix">
                                        <div class="post_thumbnail_wrapper"><a href="https://ahmad.works/writing/co-founder-trying-to-explain-his-idea-to-his-employers/" title="Co-founder Trying To Explain His Idea To His Employers"><img width="50" height="50" src="https://awcdn1.ahmad.works/writing/wp-content/uploads/2015/05/Talking-Coworkers-150x150.jpg" class="img-responsive wp-post-image" alt="Talking-Coworkers" /></a></div>
                                        <div class="post_info_wrapper">
                                            <h5 class="title post_title"><a href="https://ahmad.works/writing/co-founder-trying-to-explain-his-idea-to-his-employers/" title="Co-founder Trying To Explain His Idea To His Employers">Co-founder Trying To Explain His Idea To His Employers</a></h5>
                                            <span class="post_meta_item post_meta_time post_time">May 17, 2015</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="tag_cloud-3" class="widget_container widget_content widget widget_tag_cloud clearfix">
                            <h4 class="widget_title title"><span class="page_header_title">Tags</span></h4>
                            <div class="tagcloud"><a href='https://ahmad.works/writing/tag/city/' class='tag-link-7' title='4 topics' style='font-size: 18.266666666667pt;'>city</a>
                                <a href='https://ahmad.works/writing/tag/design/' class='tag-link-12' title='2 topics' style='font-size: 8pt;'>design</a>
                                <a href='https://ahmad.works/writing/tag/girl/' class='tag-link-6' title='2 topics' style='font-size: 8pt;'>girl</a>
                                <a href='https://ahmad.works/writing/tag/image/' class='tag-link-5' title='4 topics' style='font-size: 18.266666666667pt;'>image</a>
                                <a href='https://ahmad.works/writing/tag/people/' class='tag-link-9' title='5 topics' style='font-size: 22pt;'>people</a>
                                <a href='https://ahmad.works/writing/tag/work/' class='tag-link-11' title='2 topics' style='font-size: 8pt;'>work</a>
                            </div>
                        </div>
                        <div id="search-4" class="widget_container widget_content widget widget_search clearfix">
                            <form role="search" class="search-form" method="get" action="https://ahmad.works/writing/">
                                <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" class="search-field" placeholder="Search ..." value="" name="s" title="Search for:">
                                </label>
                                <i class="search_submit_icon fa fa-search"><input type="submit" class="search-submit" value=""></i>
                            </form>
                        </div>
                    </div>
                    <!-- .widget-area -->
                </div>
                <!-- .secondary -->
            </aside>
        </div>
        <!-- .row -->
    </div>
<?php get_footer() ?>