   <!-- linking Header -->
   <?php get_header() ?>

     
   <!--================Blog Area =================-->
   <section class="container-fluid">
      <div class="container">
         <div class="row" >
            <div class="post-body col-md-12 col-12">
               <div class="single-post">
                  <div class="pt-5 feature-img text-center">
                     <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_post_thumbnail_caption(); ?>">
                  </div>
                  <div class="blog_details">
                     <h2 class="pt-3" style="font-family: 'kalpurush', Arial, sans-serif !important; color: #000000;"><?php the_title(); ?></h2>
                     <hr>
                     <ul class="blog-info-link mt-3 mb-4" style="list-style-type: none;">
                        <li>
                           <?php
                                 $author_id = $post->post_author; 
                                 $author_url = get_the_author_meta('user_url',$author_id);
                                 $author_name =  get_the_author_meta('display_name', $author_id); 
                              ?>
                           <!-- <a href="<?php echo $author_url; ?>"><i class="fa fa-user"></i> 
                              <?php 
                                 echo $author_name;  
                              ?>
                           </a> -->
                        </li>
                     </ul>
                     <!-- blog content -->
                     <!-- avaiable font : SolaimanLipi, kalpurush -->
                     <div class="content d-flex justify-content-center" style="font-family: 'kalpurush', Arial, sans-serif !important; color: #000000;">
                         <?php the_content(); ?>
                     </div>
                  </div>   
               </div>
            </div>
            <!-- Comments and others area -->
            <div class="col-12 text-center">
               <!-- previous - Next and author area  -->
               <div class="navigation-top text-center">
                  <div class="navigation-area">
                     <div class="row text-center" style="font-family: 'kalpurush', Arial, sans-serif !important;">
                        <div class="col-lg-6 col-md-6 col-12 nav-left flex-row 
                           d-flex justify-content-start align-items-center">
                           <!-- view privous post -->
                           <?php 
                              if($prev_post = get_previous_post()){
                                 $prev_post_thumb = get_the_post_thumbnail($prev_post->ID, 'thumbnail');
                                 $prev_post_title = get_the_title($prev_post->ID);
                           ?>
                           <div class="pr-1 thumb">
                              <!-- <?php echo previous_post_link('%link', $prev_post_thumb); ?> -->
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>পূর্ববর্তী সংবাদ</p>
                                 <h5 style="font-family: 'kalpurush', Arial, sans-serif !important;"><?php echo previous_post_link('%link', $prev_post_title); ?></h5>
                           </div>
                           <?php
                           }  
                           ?>
                        </div>
                        <!-- Next Post  -->
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <!-- next post dynamicafication -->
                           <?php 
                              if($next_post = get_next_post()){
                                 $next_post_thumb = get_the_post_thumbnail($next_post->ID, 'thumbnail');
                                 $next_post_title = get_the_title($next_post->ID);
                              ?>
                                 <div class="detials" >
                                    <p>পরবর্তী সংবাদ</p>
                                    <a href="#">
                                       <h5 style="font-family: 'kalpurush', Arial, sans-serif !important;"><?php echo next_post_link('%link', $next_post_title); ?></h5>
                                    </a>
                                 </div>
                                 <div class="arrow">
                                    <a href="#">
                                       <span class="lnr text-white ti-arrow-left"></span>
                                    </a>
                                 </div>
                                 <div class="pl-1 thumb">
                                    <!-- next post image -->
                                    <!-- <?php echo next_post_link('%link', $next_post_thumb); ?> -->
                                 </div>
                           <?php
                              } 
                           ?>
                        </div>
                     </div>
                  </div>
               </div>
               
             <!-- #####################################Coments###################################### -->

         
            <!-- #####################################SideBar###################################### -->
            
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->
   <!-- linkig the footer area -->
   <?php get_footer() ?>
