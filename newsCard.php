<?php 
    /* 
        Template Name: News Card 
        Template Post Type: post, page
    */ 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo('name'); ?></title>  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.3/dist/css/bootstrap-icons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.1/html2canvas.min.js"></script>
    <link href="https://fonts.maateen.me/kalpurush/font.css" rel="stylesheet">
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.3.2/dist/html2canvas.min.js"></script>
    
    <style>
      body{
      font-family: "My Custom Font", sans-serif;
      /* color:#060606; */
      background-color: red; 
      font-family: 'SolaimanLipi', Arial, sans-serif !important;
      /* font-family: 'kalpurush', Arial, sans-serif !important; */
      }
      .english {
          font-family: 'Courier New', Courier, monospace;
      }
      /* header area */
      /* .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        border-bottom: 1px solid #ccc;

      .image-section {
        flex: 1;
        text-align: right;
      }
      .image-section img{
        width: 100px;
        height: 50px;
      } */

      /* promotional */

      .promotional {
        flex: 1;
        text-align: left;
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
          width: 1080px;
          height: auto;
          margin: 20px auto;
          padding: 10px;
          text-align: center;
        }

        .title {
  font-size: 64px;
  text-align: center;
  font-weight: bolder; /* or 900 */
  text-shadow: 0 1px 2px black;
}

      .title h1{
        color: #F42A40;
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
        .print-area {
            background: linear-gradient(180deg, #F0EFE3 50%, #006E4D 50%);
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

      /* details button */
      

    </style>

</head>
<body>
<div class="print-area" style="background-color: #F2EEE3;">
    <div class="header" >
        <!-- <div class="promotional">
            <span class="tagline"><p id="banglaDateTime"></p></span>
        </div> -->
        <div style="text-align: center;  background-color: #red; position: relative; ">
            <img src="https://doiniksongbadchitro.com/wp-content/uploads/2023/08/WhatsApp_Image_2023-08-01_at_13.02.00-removebg-preview.png" width="600px" height="150px" ">
        </div>
    </div>

    <div class="content-wrapper" style=" height: 50%; display: flex;">
        <div class="news text-center" style="flex: 1; padding: 20px;">
            <h1 class="title" style="color: red; font-size: 48px; font-weight: 900; text-align: center;"><?php the_title(); ?></h1>
            <div class="content">
                <div style="text-align: center;  background-color: #red; ">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" height="auto">
                    <p style="border-radius: 50px; background-color: red; color: white; font-size: 26px;                    text-align: center; padding: 10px 20px; display: inline-block; cursor: pointer;">
                        << বিস্তারিত লিংক কমেন্টে >>
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>

    
    <button id="screenshot-btn">^</button>

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
        banglaDateTimeElement.textContent = formattedDate;

    </script>
</body>
</html>


