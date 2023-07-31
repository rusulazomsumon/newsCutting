<!-- initialing home template -->
<?php 
    /* 
        Template Name: Run Bangla24 
        Template Post Type: post, page
    */ 
?>
<!-- linking header -->
    <?php get_header() ?>

    <!-- M$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$((((((((((((Main News Slider Start)))))))))))))))) $$$$$$$$$$$$$$$$$$$$$$$$$-->
    <div class="container-fluid">
        <!-- ###############################Breaking News #################################### -->
        <?php 
            get_template_part('template-parts/pertials/content','nHeading'); 
        ?>
        <!-- Breaking News End -->
        <div class="row">
            <div class="col-lg-7 px-0">
                <div class="owl-carousel main-carousel position-relative">
                    <!-- post dynamicication -->
                <?php 
                        $args = array(
                            'post_type' => 'post',
                            'order' => 'DSC',
                            'posts_per_page' => 5
                        );
                        $query = new WP_Query($args);
                        while($query -> have_posts()){
                            $query->the_post();
                            ?>
                            <!-- Single News  markup -->
                    <!-- single post start: slider -->
                    <div class="position-relative overflow-hidden" style="height: 500px;">
                        <img class="img-fluid h-100" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_post_thumbnail_caption($post); ?>" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href=""><span>
                                            <?php  
                                                $catgs = get_the_category();
                                                foreach($catgs as $catg){
                                                    echo $catg -> name."  ";
                                                }
                                            ?>
                                        </span></a>
                                <a class="text-white" href=""><?php the_date(); ?></a>
                            </div>
                            <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="<?php the_permalink(); ?>">
                                <?php the_title(); ?></a>
                        </div>
                    </div>
                    <!-- single post end: slider -->
                    <!-- rest of loop -->
                    <?php
                        }
                        wp_reset_postdata();
                    ?>
                </div>
            </div>
            <!-- *********************main post slider end*************** -->
    <!-- #################################### image box post ########################################## -->
            <!-- Showing form template parts NingBox -->
            <?php get_template_part('template-parts/pertials/content','NimgBox'); ?>
        </div>
    </div>
    <!-- Main News Slider End -->


    <!-- ###############################Breaking News #################################### -->
    <?php get_template_part('template-parts/pertials/content','bknews'); ?>
    <!-- Breaking News End -->

    <!-- ###############################Feture News #################################### -->

    <!-- Featured News Slider Start -->
    <!-- Showing form template parts fetNews -->
    <?php get_template_part('template-parts/pertials/content','fetNews'); ?>
    <!-- Featured News Slider End -->

    <!-- ###############################Leatest News #################################### -->

    <!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%Body News Row 1%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
                    <div class="row">
                     <!-- ******3333333333333******** leatest single news international *******33333333333333**** -->
                        <div class="col-lg-6">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">দেশ জনপদের খবর</h4>
                            </div>
                            <?php 
                                $args = array(
                                    'post_type'     =>  'post',
                                    'order'         =>  'DSC',
                                    'category_name' =>  'দেশ-ও-জনপদের-খবর',
                                    'posts_per_page' =>  3
                                );
                                $query = new WP_Query($args);
                                while($query -> have_posts()){
                                    $query -> the_post();
                            ?>
                            <!-- single post markup -->
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="<?php the_post_thumbnail_url(); ?>" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">
                                            <span>
                                                <?php  
                                                    $catgs = get_the_category();
                                                    foreach($catgs as $catg){
                                                        echo $catg -> name." ";
                                                    }
                                                ?>
                                            </span>
                                        </a>
                                        <a class="text-body" href="#"><small><?php the_date(); ?></small></a>
                                    </div>
                                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    <p class="m-0"><?php the_excerpt() ?></p>
                                </div>
                            </div>
                            <!-- single post markup: end -->
                                <!-- end of loop -->
                            <?php
                                }
                            ?>
                        </div>
                        <!-- #####33333333333333333333######## leatest soprts  news ########333333333333333333333333#### -->
                        <div class="col-lg-6">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">খেলাধুলা</h4>
                            </div>
                            <?php 
                                $args = array(
                                    'post_type'     =>  'post',
                                    'order'         =>  'DSC',
                                    'category_name' =>  'খেলাধুলা',
                                    'posts_per_page' =>  3
                                );
                                $query = new WP_Query($args);
                                while($query -> have_posts()){
                                    $query -> the_post();
                            ?>
                             <!-- single post markup -->
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="<?php the_post_thumbnail_url(); ?>" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">
                                            <span>
                                                <?php  
                                                    $catgs = get_the_category();
                                                    foreach($catgs as $catg){
                                                        echo $catg -> name." ";
                                                    }
                                                ?>
                                            </span>
                                        </a>
                                        <a class="text-body" href="#"><small><?php the_date(); ?></small></a>
                                    </div>
                                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    <p class="m-0"><?php the_excerpt() ?></p>
                                </div>
                            </div>
                            <!-- single post markup: end -->
                                <!-- end of loop -->
                            <?php
                                }
                            ?>
                        </div>
                        <!-- Adverticement -->
                        <div class="col-lg-12">
                            <a href="https://htmlcodex.com"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/ads-728x90.png" alt=""></a>
                        </div>
                    </div>
                    <!-- %%%%%%%%%%%%%%%%%%%%%NewsRow2%%%%%%%%%%%%%%%%%%%%5 -->
                    <div class="row">
                     <!-- ******3333333333333******** leatest single news international *******33333333333333**** -->
                        <div class="col-lg-4">
                            <div class="section-title">
                                <h5 class="m-0 text-uppercase font-weight-bold">মতামত</h5>
                            </div>
                            <?php 
                                $args = array(
                                    'post_type'     =>  'post',
                                    'order'         =>  'DSC',
                                    'category_name' =>  'মতামত',
                                    'posts_per_page' =>  2
                                );
                                $query = new WP_Query($args);
                                while($query -> have_posts()){
                                    $query -> the_post();
                            ?>
                            <!-- single post markup -->
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="<?php the_post_thumbnail_url(); ?>" width="250" height="150" style="object-fit: auto;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">
                                            <span>
                                                <?php  
                                                    $catgs = get_the_category();
                                                    foreach($catgs as $catg){
                                                        echo $catg -> name." ";
                                                    }
                                                ?>
                                            </span>
                                        </a>
                                        <a class="text-body" href="#"><small><?php the_date(); ?></small></a>
                                    </div>
                                    <a class="h6 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                            </div>
                            <!-- single post markup: end -->
                                <!-- end of loop -->
                            <?php
                                }
                            ?>
                        </div>
                        <!-- #####33333333333333333333######## leatest soprts  news ########333333333333333333333333#### -->
                        <div class="col-lg-4">
                            <div class="section-title">
                                <h5 class="m-0 text-uppercase font-weight-bold">চাকরি</h5>
                            </div>
                            <?php 
                                $args = array(
                                    'post_type'     =>  'post',
                                    'order'         =>  'DSC',
                                    'category_name' =>  'চাকরি',
                                    'posts_per_page' =>  2
                                );
                                $query = new WP_Query($args);
                                while($query -> have_posts()){
                                    $query -> the_post();
                            ?>
                             <!-- single post markup -->
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="<?php the_post_thumbnail_url(); ?>" width="250" height="150" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">
                                            <span>
                                                <?php  
                                                    $catgs = get_the_category();
                                                    foreach($catgs as $catg){
                                                        echo $catg -> name." ";
                                                    }
                                                ?>
                                            </span>
                                        </a>
                                        <a class="text-body" href="#"><small><?php the_date(); ?></small></a>
                                    </div>
                                    <a class="h6 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                            </div>
                            <!-- single post markup: end -->
                                <!-- end of loop -->
                            <?php
                                }
                            ?>
                        </div>
                        <!-- #####33333333333333333333######## leatest soprts  news ########333333333333333333333333#### -->
                        <div class="col-lg-4">
                            <div class="section-title">
                                <h5 class="m-0 text-uppercase font-weight-bold">সুবর্ণ কথা</h5>
                            </div>
                            <?php 
                                $args = array(
                                    'post_type'     =>  'post',
                                    'order'         =>  'DSC',
                                    'category_name' =>  'সুবর্ণ-কথা',
                                    'posts_per_page' =>  2
                                );
                                $query = new WP_Query($args);
                                while($query -> have_posts()){
                                    $query -> the_post();
                            ?>
                             <!-- single post markup -->
                            <div class="position-relative mb-3">
                                <img class="img-fluid " src="<?php the_post_thumbnail_url(); ?>" width="250" height="150" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">
                                            <span>
                                                <?php  
                                                    $catgs = get_the_category();
                                                    foreach($catgs as $catg){
                                                        echo $catg -> name." ";
                                                    }
                                                ?>
                                            </span>
                                        </a>
                                        <a class="text-body" href="#"><small><?php the_date(); ?></small></a>
                                    </div>
                                    <a class="h6 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                            </div>
                            <!-- single post markup: end -->
                                <!-- end of loop -->
                            <?php
                                }
                            ?>
                        </div>
                        <!-- Adverticement -->
                        <div class="col-lg-12">
                            <a href="https://htmlcodex.com"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/ads-728x90.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
                        @@@@@@@@@@@@@@@@@@@@@@@@@@@@ Left Sidebar @@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
                <div class="col-lg-4">
                    <div class="mb-3">
                        <!-- ************** leatest single news international *********** -->
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold" >আন্তর্জাতিক</h4>
                            </div>
                            <?php 
                                $args = array(
                                    'post_type'     =>  'post',
                                    'order'         =>  'DSC',
                                    'category_name' =>  'আন্তর্জাতিক',
                                    'posts_per_page' =>  2
                                );
                                $query = new WP_Query($args);
                                while($query -> have_posts()){
                                    $query -> the_post();
                            ?>
                            <!-- single post markup -->
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="<?php the_post_thumbnail_url(); ?>"  style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">
                                            <span>
                                                <?php  
                                                    $catgs = get_the_category();
                                                    foreach($catgs as $catg){
                                                        echo $catg -> name." ";
                                                    }
                                                ?>
                                            </span>
                                        </a>
                                        <a class="text-body" href="#"><small><?php the_date(); ?></small></a>
                                    </div>
                                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    <p class="m-0"><?php the_excerpt() ?></p>
                                </div>
                            </div>
                            <!-- single post markup: end -->
                                <!-- end of loop -->
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <!-- Social Follow End -->

                    <!-- Ads Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                        </div>
                        <div class="bg-white text-center border border-top-0 p-3">
                            <a href=""><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/news-800x500-2.jpg" alt=""></a>
                        </div>
                    </div>
                    <!-- Ads End -->

                    <!-- Popular News Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">পাঠকপ্রিয়</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                        <?php 
                    $args = array(
                        'post_type'     =>  'post',
                        'order'         =>  'ASC',
                        'posts_per_page' =>  5
                    );
                    $query = new WP_Query($args);
                    while($query -> have_posts()){
                        $query -> the_post();
                        ?>
                        <!-- single post markup -->
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="" width="100" height="70">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" 
                                            href="">
                                            <span>
                                                <?php  
                                                    $catgs = get_the_category();
                                                    foreach($catgs as $catg){
                                                        echo $catg -> name." ";
                                                    }
                                                ?>
                                            </span>
                                        </a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                            </div>
                        <!-- single post markup: end -->
                        <!-- end of loop -->
                    <?php
                        }
                    ?>
                        </div>
                    </div>
                    <!-- Popular News End -->

                    <!-- Newsletter Start -->
                    <div class="mb-3">
                        <div class="bg-white text-center border border-top-0 p-3">
                            <p>নিয়মিত সর্বশেষ সংবাদ পেতে ইমেল দিয়ে সাবস্ক্রাইব করুন!</p>
                            <div class="input-group mb-2" style="width: 100%;">
                                <input type="text" class="form-control form-control-lg" placeholder="Your Email">
                                <div class="input-group-append">
                                    <button class="btn btn-primary font-weight-bold px-3">নিবন্ধন করুন</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Newsletter End -->
                </div>
            </div>
            <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%Body News Row 2%%%%%%%%%%%%%%%%%%%%% -->
            
        </div>
    </div>
    <!-- News With Sidebar End -->

<!-- linking Footer -->
<?php get_footer(); ?>