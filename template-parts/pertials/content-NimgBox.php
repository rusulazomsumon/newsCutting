<div class="col-lg-5 px-0">
                <div class="row mx-0">
                    <!-- single post news image box -->
                    <!-- post dynamicication -->
                    <?php 
                                $args = array(
                                    'post_type' => 'post',
                                    'order' => 'DSC',
                                    'posts_per_page' => 4
                                );
                                $query = new WP_Query($args);
                                while($query -> have_posts()){
                                    $query->the_post();
                                    ?>
                            <!-- Single News  markup start -->
                    <div class="col-md-6 px-0">
                            <div class="position-relative overflow-hidden" style="height: 250px;">
                                <img class="img-fluid w-100 h-100" src="<?php the_post_thumbnail_url(); ?>" style="object-fit: cover;">
                                <div class="overlay">
                                    <div class="mb-2">
                                        <!-- post category showing -->
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">
                                            <span>
                                                <?php  
                                                    $catgs = get_the_category();
                                                    foreach($catgs as $catg){
                                                        echo $catg -> name."  ";
                                                    }
                                                ?>
                                            </span>
                                        </a>
                                        <a class="text-white" href=""><small><?php the_date(); ?></small></a>
                                    </div>
                                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" 
                                        href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                            </div>
                    </div>
                    <!-- single markup end -->
                        <!-- rest of loop -->
                        <?php
                            }
                            wp_reset_postdata();
                        ?>
                </div>
            </div>