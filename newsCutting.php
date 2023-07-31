<?php 
    /* 
        Template Name: News Cutting 
        Template Post Type: post, page
    */ 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title> দৈনিক সংবাদ চিত্র - সত্য ও ন্যায় প্রকাশে আপোষহীন </title>
    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.3.2/dist/html2canvas.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.3/dist/css/bootstrap-icons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.1/html2canvas.min.js"></script>
    <style>
        @font-face {
    font-family: "My Custom Font";
    src: url("fonts/AgameeI.TTF") format("truetype");
}
body{
    margin: 50px 30px 20px 30px;
    padding: 10px;
    font-family: "My Custom Font", sans-serif;
    color:#3D3D3D;
    background-color: #F5F5F5; 
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
    display: flex;
    justify-content: space-between;
  }
  
  .promotional .english {
    margin-right: 10px;
  }
  
  .promotional .tagline {
    margin-left: 10px;
  }

/* navigation area */
.nav-area{
    margin: 30px 0px 50px 0px;
    text-align: center;
    background-color: #006A4E;
    color: #F7FEFD;
}

.nav-area p{
    padding: 8px;
    font-weight: 400;
}

/* main article */

.article p {
    column-count: 2; /* Set the number of columns */
    column-gap: 20px; /* Set the gap between columns */
    text-align: justify;
    font-size: 20px;
}

.picture {
    display: flex;
    justify-content: center;
    align-items: center;
}

.image {
    filter: grayscale(10%);
}

.sourse {
    font-style: italic;
    font-weight: bold;
}

/* my Addvertisement */
.myAdd {
    font-style: italic;
    color: green;
    text-align: center; 
}

/* footer area  */
.footer {
    text-align: center;
    margin: 100px 0px 50px 0px;
    font-weight: 600;

}

/* coursor */
#screenshot-btn {
  cursor: pointer;
}


@media screen and (max-width: 768px) {
    .article {
        column-count: 1; /* Switch to a single column on smaller screens */
    }
}
    </style>
</head>
<body>
    <div class="print-area">
        <div class="header">
            <div class="image-section" style="width: 200px; padding-right: 20px;">
              <img src="https://doiniksongbadchitro.com/wp-content/uploads/2023/06/bkash-eid-cashback-1.jpeg" alt="Image 1">
            </div>
            <div class="image-section">
              <img style="width: 100%; " src="https://doiniksongbadchitro.com/wp-content/uploads/2023/06/doinik-songbad-chitro-national-logo-e1686597784367.jpg" alt="Image 2">
            </div>
            <div class="image-section">
              <img  style="width: 80%; " src="https://doiniksongbadchitro.com/wp-content/uploads/2023/06/bd50_mujib100-1.jpg" alt="Image 3">
            </div>
        </div>

        <div class="promotional d-flex justify-content-between">
            <span class="english">www.doiniksongbadchitro.com</span>
            <span class="tagline">সত্য ও ন্যায় প্রকাশে আপোষহীন</span>
        </div>
        
    
        <div class="nav-area">
            <p id="banglaDateTime"> </p>
        </div>
          
        <div class="article-continer">
            <h1 style="text-align: center; font-size: 28px; font-weight: 600;"><?php the_title(); ?></h1>
            <div class="picture">
                <img class="image" style="width: 600px; height= 350px;" src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""> 
            </div>
            <div class="article d-flex justify-content-around text-center"> 
                <!-- <span class="sourse"> মোঃ সৌরভ ইসলাম, সাভার (ঢাকা) প্রতিনিধিঃ </span> -->
                <?php the_content(); ?>
            </div>
            <div>
              <img src="https://doiniksongbadchitro.com/wp-content/uploads/2023/07/doinik-songbadchitro-sangbadik-niyog.jpg" width="100%">
            </div>
        </div>
    
        <!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@FooterArea@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
        <div class="footer">
            <hr>
           <p> ঠিকানাঃ ১৪/২৪ মদিনা ভিলা, মোহাম্মাদপুর, ঢাকা -১২০৭ </p>
           <p> যোগাযোগঃ ০১৮৮২৮৩৪০৭১</p>
           <p>  ইমেইলঃ <span class="english">news@doiniksongbadchitro.com</span> </p>
           <p>  <span class="english">&copy;</span> ২০২৩ - দৈনিক সংবাদ চিত্র </p>
        </div>

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
    banglaDateTimeElement.textContent = 'প্রকাশের তারিখঃ ' +formattedDate+ ' | ই-পেপার ভার্সন  ';

    </script>

</body>
</html>

