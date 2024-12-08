<!DOCTYPE html>
<html lang="en">
  <?php
  include('includes/connect.php');

  $query ='SELECT * FROM works WHERE works.id ='.$_GET['id'];

  $results = mysqli_query($connect,$query);
  $row = mysqli_fetch_assoc($results);

  ?>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    <link rel="stylesheet" href="css/main.css">
    <title>Keith Richard Lie Portfolio</title>
  </head>

  <body>
    <h1 class="hidden">Sqzit Case Study</h1>

    <!-- NAVIGATION -->
    <header id="main-header" class="full-width-grid-con">
      <h2 class="hidden">Keith's Portfolio Header</h2>
      <!-- Navbar -->
        <!-- Navigation -->
        <nav id="main-nav">
          <!-- Logo Nav -->
          <div id="logo-nav">
            <a href="index.php"><img src="images/K-Logo/k-logo-black.svg" alt="Keith's Logo" class="col-span-2"></a>

            <!-- Hamburger Button -->
            <img src="./images/icons/hamburger-button.svg" alt="Hamburger Button" class="hamburger-btn">
          </div>

          <div class="off-screen">
            <!-- Logo Off Screen -->
            <div id="logo-off">
              <a href="index.php"><img src="images/K-Logo/k-logo-black.svg" class="filter-white" alt="Keith's Logo"></a>
            </div>

            <!-- Page Nav -->
            <ul id="page-nav">
              <li><a id="works-menu" href="works.php">Works</a></li>
              <li><a id="about-menu" href="about.html">About</a></li>
              <li><a id="playground-menu" href="playground.html">Playground</a></li>
              <li class="secondary-btn"><a href="#contact">Contact</a></li>
            </ul>

            <ul class="socmed-nav filter-white m-col-start-10">
              <li>
                <a href="https://www.linkedin.com/in/keith-richard-79b312183/" target="_blank"><img src="./images/socmed/linkedin-icon.svg" alt="linkedin logo"></a>
              </li>
              <li>
                <a href="https://www.behance.net/keithrichard12" target="_blank"><img src="./images/socmed/behance-icon.svg" alt="behance logo"></a>
              </li>
              <li>
                <a href="https://github.com/keiith001" target="_blank"><img src="./images/socmed/github-icon.svg" alt="github logo"></a>
              </li>
            </ul>

            <!-- Close Button -->
            <img src="./images/icons/close-button-white.svg" alt="Close Button" class="close-btn">
          </div>
        </nav>
    </header>

    <!-- MAIN CONTENT -->
    <main>
      <!-- Page Banner Section -->
      <section id="cs-banner" class="full-width-grid-con" style="background-image: url(images/projects/banner/<?php echo $row['banner'];?>.jpg); background-size: cover; background-repeat: no-repeat;">
        <h2 class="hidden">Case Study - <?php echo $row['title'];?></h2>

        <!-- Work/Client Logo -->
        <div class="works-logo">
          <img src="./images/projects/logo/<?php echo $row['logo'];?>.svg" alt="Project Logo">
          <a href="<?php echo $row['link'];?>" class="secondary-btn-white <?php echo $row['link_vis'];?>" target="_blank">Visit Site</a>
        </div>

        <!-- Tools -->
        <div class="tools-cont">
          <p>Made with</p>
          <ul class="tools-list">
            <li>
              <img src="./images/icons/ai-logo.png" alt="Adobe Illustrator Logo">
            </li>

            <li>
              <img src="./images/icons/ps-logo.png" alt="Adobe Photoshop Logo">
            </li>

            <li>
              <img src="./images/icons/blender-logo.png" alt="Blender Logo">
            </li>

            <li>
              <img src="./images/icons/figma-logo.png" alt="Figma Logo">
            </li>
          </ul>
        </div>
      </section>

      <!-- Content Section -->
      <section class="grid-con">
        <h2 class="hidden">Project Case Study Content</h2>

        <!-- Work Overview -->
        <div id="work-overview" class="fade-in cs-cont col-span-4 m-col-start-2 m-col-span-10 l-col-start-2 l-col-span-10">
          <div class="cs-header-cont">
            <h3 class="cs-header-process">Work Overview</h3>
          </div>

          <div class="cs-content">
            <p class="body-copy"><?php echo $row['overview'];?></p>

            <div class="work-info">
              <div class="wi-caption">
                <p class="case-no">Type</p>
                <p class="year">Website</p>
              </div>

              <div class="wi-caption">
                <p class="case-no">Team</p>
                <p class="year">
                  <?php echo $row['team'];?>
                </p>
              </div>

              <div class="wi-caption">
                <p class="case-no">Role</p>
                <p class="year">
                  UXUI
                  <br>
                  Graphic/Motion
                  <br>
                  3D
                </p>
              </div>

              <div class="wi-caption">
                <p class="case-no">Year</p>
                <p class="year"><?php echo $row['year'];?></p>
              </div>
            </div>

            <!-- Thumb Image -->
            <img src="./images/projects/thumbnail/<?php echo $row['thumbnail'];?>.jpg" alt="Project Thumbnail Image">
          </div>
        </div>

        <!-- Research -->
        <!-- Problem Faced -->
        <div id="research" class="fade-in cs-cont col-span-4 m-col-start-2 m-col-span-10 l-col-start-2 l-col-span-10">
          <div class="cs-header-cont">
            <p class="case-no">Research</p>
            <h3 class="cs-header-process">Problem Faced</h3>
          </div>

          <div class="cs-content">
            <p class="body-copy"><?php echo $row['problem'];?></p>
          </div>
        </div>

        <!-- How Might We -->
        <div class="fade-in cs-cont col-span-4 m-col-start-2 m-col-span-10 l-col-start-2 l-col-span-10">
          <div class="cs-header-cont">
            <h3 class="cs-header-process">How Might We</h3>
          </div>

          <div class="cs-content">
            <p class="body-copy"><?php echo $row['how_might'];?></p>

            <img src="./images/projects/how-might-we/<?php echo $row['how_might_img'];?>.png" alt="Project How Might We Process">
          </div>
        </div>

        <!-- Target Audience -->
        <div class="fade-in cs-cont col-span-4 m-col-start-2 m-col-span-10 l-col-start-2 l-col-span-10">
          <div class="cs-header-cont">
            <h3 class="cs-header-process">Target Audience</h3>
          </div>

          <div class="cs-content">
            <img src="./images/projects/target-audience/<?php echo $row['target_audience'];?>.png" alt="Project Target Audience">
          </div>
        </div>

        <!-- Design -->
        <!-- Brainstorm Ideas -->
        <div id="design" class="fade-in cs-cont col-span-4 m-col-start-2 m-col-span-10 l-col-start-2 l-col-span-10">
          <div class="cs-header-cont">
            <p class="case-no">Design</p>
            <h3 class="cs-header-process">Brainstorm Ideas</h3>
          </div>

          <div class="cs-content">
            <p class="body-copy"><?php echo $row['brainstorm'];?></p>

            <img src="./images/projects/brainstorm/<?php echo $row['brainstorm_img'];?>.png" alt="Project Brainstorm Ideas Process">
          </div>
        </div>

        <!-- Key Findings -->
        <div class="fade-in cs-cont col-span-4 m-col-start-2 m-col-span-10 l-col-start-2 l-col-span-10">
          <div class="cs-header-cont">
            <h3 class="cs-header-process">Key Findings</h3>
          </div>

          <div class="cs-content">
            <p class="body-copy"><?php echo $row['key_findings'];?></p>

            <img src="./images/projects/key-findings/<?php echo $row['key_findings_img'];?>.png" alt="Project Key Findings">
          </div>
        </div>

        <!-- User Persona -->
        <div class="fade-in cs-cont col-span-4 m-col-start-2 m-col-span-10 l-col-start-2 l-col-span-10 <?php echo $row['user_persona_vis'];?>">
          <div class="cs-header-cont">
            <h3 class="cs-header-process">User Persona</h3>
          </div>

          <div class="cs-content">
            <img src="./images/projects/user-persona/<?php echo $row['user_persona_img'];?>.png" alt="Project User Persona">
          </div>
        </div>
        
        <!-- Design Decisions -->
        <div class="fade-in cs-cont col-span-4 m-col-start-2 m-col-span-10 l-col-start-2 l-col-span-10">
          <div class="cs-header-cont">
            <h3 class="cs-header-process">Design Decisions</h3>
          </div>

          <div class="cs-content">
            <p class="body-copy"><?php echo $row['design_decisions'];?></p>

            <img src="./images/projects/dd/<?php echo $row['design_decisions_img'];?>.png" alt="Project Design Decisions">
          </div>
        </div>

        <!-- Designing -->
        <div class="fade-in cs-cont col-span-4 m-col-start-2 m-col-span-10 l-col-start-2 l-col-span-10">
          <div class="cs-header-cont">
            <h3 class="cs-header-process">Designing</h3>
          </div>

          <div class="cs-content">
            <!-- Sketches (NULLABLE) -->
            <div class="<?php echo $row['sketches_vis'];?>">
              <p class="body-copy"><?php echo $row['sketches'];?></p>

              <img src="./images/projects/sketches/<?php echo $row['sketches_img'];?>.png" alt="Project Sketch Image">
            </div>

            <!-- Site Map(NULLABLE) -->
            <div class="<?php echo $row['site_map_vis'];?>">
              <p class="body-copy"><?php echo $row['site_map'];?></p>

              <img src="./images/projects/sitemap/<?php echo $row['site_map_img'];?>.png" alt="Project Key Findings">
            </div>

            <!-- Information Architecture (NULLABLE) -->
            <div class="<?php echo $row['ia_vis'];?>">
              <p class="body-copy"><?php echo $row['ia'];?></p>

              <img src="./images/projects/ia/<?php echo $row['ia_img'];?>.png" alt="Project Sketch Image">
            </div>

            <!-- Flowchart (NULLABLE) -->
            <div class="<?php echo $row['flow_chart_vis'];?>">
              <p class="body-copy"><?php echo $row['flow_chart'];?></p>

              <img src="./images/projects/flowchart/<?php echo $row['flow_chart_img'];?>.png" alt="Project Key Findings">
            </div>

            <!-- Wireframe (NULLABLE) -->
            <div class="<?php echo $row['wireframe_vis'];?>">
              <p class="body-copy"><?php echo $row['wireframe'];?></p>

              <img src="./images/projects/wireframe/<?php echo $row['wireframe_img'];?>.png" alt="Project Key Findings">
            </div>

            <!-- Highfid / Design -->
            <div class="">
              <p class="body-copy"><?php echo $row['highfid'];?></p>

              <img src="./images/projects/highfid/<?php echo $row['highfid_img'];?>.png" alt="Project Key Findings">
            </div>
          </div>
        </div>

        <!-- Implementation -->
        <div id="implementation" class="fade-in cs-cont col-span-4 m-col-start-2 m-col-span-10 l-col-start-2 l-col-span-10">
          <div class="cs-header-cont">
            <p class="case-no">Implementation</p>
            <h3 class="cs-header-process">Rapid Prototyping</h3>
          </div>

          <div class="cs-content">
            <p class="body-copy"><?php echo $row['prototyping'];?></p>

            <div>
              <iframe style="border: 1px solid rgba(0, 0, 0, 0.1); border-radius: 20px; margin-top: 10px;" width="100%" height="450" src="<?php echo $row['prototype_link'];?>" allowfullscreen></iframe>
            </div>

            <img class="<?php echo $row['prototype_img_vis'];?>" src="./images/projects/prototype/<?php echo $row['prototype_img'];?>" alt="Project Prototype">
          </div>
        </div>

        <!-- Get Feedback (NULLABLE) -->
        <div class="fade-in cs-cont col-span-4 m-col-start-2 m-col-span-10 l-col-start-2 l-col-span-10 <?php echo $row['feedback_vis'];?>">
          <div class="cs-header-cont">
            <h3 class="cs-header-process">Get Feedback &#38 Iterate</h3>
          </div>

          <div class="cs-content">
            <p class="body-copy"><?php echo $row['feedback'];?></p>

            <img class="detail-img" src="./images/projects/feedback/<?php echo $row['feedback_img'];?>.png" alt="Project Feedback Documentation">
          </div>
        </div>

        <!-- Key Takeaways -->
        <div class="cs-cont col-span-4 m-col-start-2 m-col-span-10 l-col-start-2 l-col-span-10">
          <div class="cs-header-cont">
            <h3 class="cs-header-process">Key Takeaways</h3>
          </div>

          <div class="cs-content">
            <p class="body-copy"><?php echo $row['key_takeaways'];?></p>
          </div>
        </div>
        
      </section>

      <!-- THIS SECTION WILL BE ON EVERY PAGE -->
      <!-- CONTACT -->
      <section id="contact" class="grid-con fade-in">
        <h2 class="hidden">Contact Me</h2>
        <!-- Decoration -->
        <div class="floating-anim footer-decor col-span-full">
          <img id="swirl-decor" src="./images/decorations/swirl-1.png" alt="Decorative Image">
        </div>

        <!-- Email Button -->
        <a href="mailto:kith.richrd@gmail.com?subject=Hey%20Fella&body=I'm%20..." class="col-span-4 m-col-start-4 m-col-span-6 email-contact-btn">Drop Me Your Problems <img src="./images/icons/mail-icon-black.svg" alt="Mail Icon"></a>

        <!-- Copy -->
        <p class="col-span-4 m-col-span-12 l-col-span-12 contact-headline">Let's Make It
          <span>FEASIBLE</span>
          <span>TOGETHER</span>
        </p>

        <!-- Socmed -->
        <div id="contact-socmed" class="col-span-4 m-col-start-4 m-col-span-6">
          <p>Can also find me here</p>
          <ul class="socmed-nav">
            <li>
              <a href="https://www.linkedin.com/in/keith-richard-79b312183/" target="_blank"><img src="./images/socmed/linkedin-icon.svg" alt="linkedin logo"></a>
            </li>
            <li>
              <a href="https://www.behance.net/keithrichard12" target="_blank"><img src="./images/socmed/behance-icon.svg" alt="behance logo"></a>
            </li>
            <li>
              <a href="https://github.com/keiith001" target="_blank"><img src="./images/socmed/github-icon.svg" alt="github logo"></a>
            </li>
          </ul>
        </div>

        <div class="floating-anim footer-decor col-span-full">
          <img id="twist-decor" src="./images/decorations/twist-1.png" alt="Decorative Image">
        </div>

        <div class="line-seperator col-span-4 m-col-span-12"></div>
        
        <div id="contact-text" class="col-span-4 m-col-start-1 m-col-span-12">
          <h3 class="hidden">Leave a Message</h3>
          <div id="lets">
            <p>Let's be</p>
          </div>
          
          <!-- Sliding Text -->
          <div class="sliding-text">
            <div class="title-slide">
              <p>/ <span class="mgnt">Partners</span> / <span class="blu">Friends</span> / <span class="orng">Bros</span> / <span class="mgnt">Partners</span> / <span class="blu">Friends</span> / <span class="gry">Buddies</span> / <span class="orng">Bros</span></p>
            </div>

            <div class="title-slide">
              <p>/ <span class="mgnt">Partners</span> / <span class="blu">Friends</span> / <span class="orng">Bros</span> / <span class="mgnt">Partners</span> / <span class="blu">Friends</span> / <span class="gry">Buddies</span> / <span class="orng">Bros</span></p>
            </div>

            <div class="title-slide">
              <p>/ <span class="mgnt">Partners</span> / <span class="blu">Friends</span> / <span class="orng">Bros</span> / <span class="mgnt">Partners</span> / <span class="blu">Friends</span> / <span class="gry">Buddies</span> / <span class="orng">Bros</span></p>
            </div>

          </div>  
        </div>

        <div class="col-span-4 m-col-start-1 m-col-span-6">
          <p class="opening-msg">Hey I really like to connect with people! I would love to know you better. Maybe we might have the same interest in movies. Tell me what is your best movie ever :D</p>
        </div>

        <div id="contact-form" class="col-span-4 m-col-start-7 m-col-span-6">
          <form action="#" method="post" enctype="text/plain">
            <input name="fullName" type="text" placeholder="Your Name">
            <input name="contactInfo" type="text" placeholder="Your Email/Phone Number">
            <textarea name="msg" placeholder="Drop your thoughts / movie recommendation / interests / discord username / steam ID / anything on your mind!"></textarea>
            <input name="submit" type="submit" value="Send" class="submit-btn">
          </form>
        </div>
      </section>
    </main>

    <!-- FOOTER -->
    <footer id="footer" class="full-width-grid-con">
      <div class="back-to-top col-span-2">
        <a href="#cs-banner" class="secondary-btn-white">Back to Top <span><img src="./images/icons/arrow-top-white.svg" alt="Arrow Icon"></span></a>
      </div>

      <div id="copyright-footer" class="col-span-4 m-col-span-12">
        <p>Design and Developed by Keith</p>
        <p id="copyright">&copy; 2025 All Rights Reserved</p>
      </div>
    </footer>
  
    <!-- JS -->
    <!-- GSAP Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/ScrollTrigger.js"></script>

    <!-- Plyr -->
    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
    
    <!-- Main JS -->
    <script src="./js/main.js"></script>
  </body>
</html>