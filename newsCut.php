<?php 
    /* 
        Template Name: News Press 
        Template Post Type: post, page
    */ 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Cutting Version2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.3/dist/css/bootstrap-icons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.1/html2canvas.min.js"></script>
    <link href="https://fonts.maateen.me/kalpurush/font.css" rel="stylesheet">
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.3.2/dist/html2canvas.min.js"></script>
    
    <style>
      body{
      margin: 50px;
      font-family: "My Custom Font", sans-serif;
      color:#060606;
      background-color: #ffffff; 
      font-family: 'SolaimanLipi', Arial, sans-serif !important;
      /* font-family: 'kalpurush', Arial, sans-serif !important; */
      }
      .english {
          font-family: 'Courier New', Courier, monospace;
      }
      /* header area */
      .header {
          display: flex;
      }

      .image-section {
          flex: 1;
      }
      .image-section img{
          height: 150px;
      }

      /* promotional */

      .promotional {
          margin-top: 20px;
          text-align: center;
          background-color: #CAEAE5;
        }
        
        .promotional .tagline {
          font-size: 14px;
          font-weight: 600;
        }

      /* navigation area */
      .nav-area{
          margin-top: 10px;
          text-align: center;
          background-color: #F9F0E2;
          display: flex;  
          justify-content: space-between;
      }

      .nav-area p{
          padding: 2px;
          font-weight: 600;
          text-decoration: none;
          font-size: 16px;
      }



      /* main article */

      .news {
          max-width: 1200px;
          margin: 20px auto;
          padding: 10px;
        }

        .title {
          font-size: 42px;
          text-align: center;
          font-weight: 900;
      }

        .image-wrapper {
          float: right;
          width: 40%;
          height: auto;
          shape-outside: url("");
          margin: 10px;
        }

        .content {
          overflow: hidden;
          text-align: justify;
        }

        .content p{
          font-size: 24px;
          font-weight: 500;
        }

        .copyright {
          text-align: center;
          font-weight: bolder;
        }

        .copyright p{
          font-size: 24px;
        }
      .offer{
          font-size: 10px;
          text-align: center;
          color: red;
        }


      /* footer area  */
      .source{
          font-weight: 600;
          font-style: italic;
      }

    </style>

</head>
<body>
    <div class="print-area">
        <div class="header">
            <!-- <div class="image-section">
              <img src="./img/imageskjk.jpg" alt="Image 1">
            </div> -->
            <div class="image-section">
              <img style="width: 100%;" src="https://doiniksongbadchitro.com/wp-content/uploads/2023/08/WhatsApp_Image_2023-08-01_at_13.02.00-removebg-preview.png" alt="Image 2">
            </div>
            <!-- <div class="image-section">
              <img  style=" margin-left: 150px;" src="./img/mujib100.png" alt="Image 3">
            </div> -->
        </div>

        <div class="promotional ">
            <span class="tagline"><p id="banglaDateTime"> </p> </span>
        </div>
        
    
        <div class="nav-area english">
            <p>www.doiniksongbadchitro.com</p>
            <p>www.facebook.com/doiniksongbadchitro</p>
            <p>mail: info@doiniksongbadchitro.com</p>
            <!-- <p> বুধবার | ১৪ ই জুন ২০২৩ | ৫ ই আষাঢ় | ১২ ই রবিউল আউয়াল | </p> -->
        </div>
          
        <div class="news">
            <h1 class="title"><?php the_title(); ?></h1>
            <div class="content">
              <div class="image-wrapper">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" width="100%" height="auto">
              </div>
              
              
              <hr>
              <!-- the news content -->
              <?php the_content(); ?>
              <!-- offter Adertisement -->
              <p class="offer">*১৯৯৯ টাকায় নিউজ পোর্টাল সহ যে কোন ওয়েবসাইট বানাতে, যোগাযোগঃ 01882834071</p>
              
            </div>
          </div>
          <div class="copyright">
            <img src="https://doiniksongbadchitro.com/wp-content/uploads/2023/07/doinik-songbadchitro-sangbadik-niyog.jpg" alt="" width="100%">
            <p class="copy">  <span class="english">&copy;</span> ২০২৩ - দৈনিক সংবাদ চিত্র </p>
            
          </div>
    
        <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@FooterArea@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->

    </div>
    
    <button id="screenshot-btn">@</button>
    <!-- <p class="myAdd">মাত্র <b> ২২২২ টাকায় </b> যে কোন ওয়েবসাইট বানাতে, যোগাযোগঃ ০১৮৮২৮৩৪০৭১</p> -->

    <script>
        document.getElementById('screenshot-btn').addEventListener('click', function() {
        html2canvas(document.body).then(function(canvas) {
        // Create a temporary link
        var link = document.createElement('a');
        link.href = canvas.toDataURL();

        link.download = 'সংবাদচিত্র_newsCutting_' + getCurrentTime() + '.png';

        // Function to get current time as minutes and seconds
        function getCurrentTime() {
            var currentDate = new Date();
            var minutes = currentDate.getMinutes().toString().padStart(2, '0');
            var seconds = currentDate.getSeconds().toString().padStart(2, '0');
            return minutes + ':' + seconds;
        }

            // Trigger the download
            link.click();
        });
        });

        // @@@@@@@@@@@BanglaDate@@@@@@@@@@@@@@
        // Array of Bangla day names
        const banglaDayNames = [
            "রবিবার", "সোমবার", "মঙ্গলবার", "বুধবার",
            "বৃহস্পতিবার", "শুক্রবার", "শনিবার"
        ];

        // Get the current date
        const currentDate = new Date();

        // Set the options for Bengali calendar
        const options = {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric',
            calendar: 'beng',
            numberingSystem: 'beng'
        };

        // Format the date in the Bengali calendar
        const formatter = new Intl.DateTimeFormat('bn-BD', options);
        const formattedDate = formatter.format(currentDate);

        // Get the day index (0-6)
        const dayIndex = currentDate.getDay();

        // Get the corresponding Bangla day name
        const banglaDayName = banglaDayNames[dayIndex];

        // Display the Bangla day name and date
        const banglaDateTimeElement = document.getElementById("banglaDateTime");
        banglaDateTimeElement.textContent = ' প্রকাশের সময়ঃ ' +formattedDate+ ' | বর্ষঃ ১, পৃষ্ঠাঃ ১২,  | ই-পেপার ভার্সন | মূল্যঃ ফ্রি  ';

    </script>
</body>
</html>


