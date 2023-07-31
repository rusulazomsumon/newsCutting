<div class="container-fluid bg-dark py-3 mb-3">
        <div class="container">
            <div class="row align-items-center bg-dark">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">তাজা খবর</div>
                            <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                                style="width: calc(100% - 170px); padding-right: 90px;">
                                <!-- breking news title: dynamicfication -->
                                <?php 
                                        
                                        $args = array(
                                            'post_type' => 'post',
                                            'order' => 'DSC',
                                            'posts_per_page' => 3,
                                            'category_name' => 'তাজা-খবর'

                                        );
                                        $query = new WP_Query($args);
                                        while($query -> have_posts()){
                                            $query->the_post();
                                            ?>
                                    <!-- Breaking news markup start -->
                                <div class="text-truncate">
                                    <a class="text-white text-uppercase font-weight-semi-bold" 
                                        href="<?php the_permalink(); ?>"><?php the_title(); ?>
                                    </a>
                                    
                                </div>
                                <!-- breking news markup end -->
                                    <!-- rest of loop -->
                                    <?php
                                        }
                                        wp_reset_postdata();
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>