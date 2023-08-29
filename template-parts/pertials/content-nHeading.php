<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    a{color: #fff;
    text-decoration: none
    }
    .nHeading{
        width: 100%;
        font-family: 'kalpurush', Arial, sans-serif !important;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        overflow: hidden;
        }
        
        .ticker{
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            height: 50px;
            margin: 0 auto;
        }
        .news{
            width: 80%;
            background: #cc4444;
            padding: 0 2%
        }
        .title{
            width: 20%;
            text-align: center;
            background: #c81c1c;
            position: relative;
        }
        .title:after{
            position: absolute;
            content: "";
            right: -22%;
            border-left: 20px solid #c81c1c;
            border-top: 28px solid transparent;
            border-right: 20px solid transparent;
            border-bottom: 21px solid transparent;
            top: 0px;
        }
        .title h5{
            color: white;
            font-size: 18px;
            margin: 5% 0;
        }
        .news marquee{
            font-size: 18px;
            margin-top: 12px;
        }
        .news-content p{
            margin-right: 41px;
            display: inline;
    }
</style>

<!-- Heading dynamification -->
<div class="container-fluid nHeading bg-white">
    <div class="ticker">
        <div class="title">
            <h5>সংবাদ শিরোনামঃ</h5>
        </div>
        <div class="news">
            <?php
                $args = array(
                    'post_type' => 'post',
                    'order' => 'DESC',
                    'posts_per_page' => 5
                );
                $query = new WP_Query($args);
                $i = 1;
                while($query -> have_posts()){
                    $query->the_post();
            ?>
            <!-- Breaking news markup start -->
            <?php if ($i == 1) { ?>
                <marquee class="news-content">
            <?php } ?>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?>&nbsp; |&nbsp;</a> 
            <?php if ($i == 5) { ?>
                </marquee>
            <?php } ?>
            <?php $i++; ?>
            <!-- breking news markup end -->
            <?php
                }
                wp_reset_postdata();
            ?>
        </div>
    </div>
</div>  