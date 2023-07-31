<!-- Featured News Slider Start -->
<div class="container-fluid pt-5 mb-3">
        <div class="container">
            <div class="section-title">
                <h4 class="m-0 text-uppercase font-weight-bold">বিশেষ বার্তা</h4>
            </div>
            <div class="owl-carousel news-carousel carousel-item-4 position-relative">
                <?php 
                    $args = array(
                        'post_type'     =>  'post',
                        'order'         =>  'DSC',
                        'category_name' =>  'দেশ-ও-জনপদের-খবর',
                        'post_per_page' =>  8
                    );
                    $query = new WP_Query($args);
                    while($query -> have_posts()){
                        $query -> the_post();
                        ?>
                        <!-- single post markup -->
                        <div class="position-relative overflow-hidden" style="height: 300px;">
                            <img class="img-fluid h-100" src="<?php the_post_thumbnail_url(); ?>" style="object-fit: cover;">
                            <div class="overlay">
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
                                    <a class="text-white" href=""><small><?php the_date(); ?></small></a>
                                </div>
                                <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                        </div>
                    <!-- single post markup: end -->
                    <!-- end of loop -->
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
    <!-- Featured News Slider End -->