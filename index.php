<!DOCTYPE html>
<html lang="en">
  <?php
  //connect to the running database server and the specific database
  $connect = new mysqli('localhost','root','root','keith_portfolio');
  include('includes/connect.php');


  //create a query to run in SQL
  $query = 'SELECT works.id AS works, thumbnail, m_thumb, banner, overview, type, title, team, year, link, cs_no, problem, how_might, target_audience, brainstorm, key_findings, design_decisions, site_map, flow_chart, wireframe, highfid, prototyping, feedback, key_takeaways, title FROM works WHERE works.id IN (3, 4, 5)';


  //run the query to get back the content
  $results = mysqli_query($connect,$query);


  // print_r($results);

  ?>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    <link rel="stylesheet" href="css/main.css">
    <title>Keith Richard Lie Portfolio</title>
  </head>

  <body>
    <h1 class="hidden">Keith Richard Lie's Portfolio Website</h1>

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
      <!-- Hero Section -->
      <section id="hero-banner" class="grid-con">
        <h2 class="hidden">Keith's Portfolio Hero Section</h2>
        <!-- Headline -->
        <div id="hero-headline" class="col-span-4 m-col-start-2 m-col-span-5">
          <p class="opening-caption">Hey! I'm a</p>
          <p id="creative-copy">CREATIVE</p>
          <p id="problem-copy">PROBLEM</p>
          <p id="solver-copy">SOLVER</p>
        </div>

        <!-- Decoration -->
        <div id="hero-decor" class="decor m-col-start-7 m-col-span-4">
          <img id="k-logo-3d" class="floating-anim" src="./images/decorations/k-logo-3d.png" alt="K Logo 3D Image">
        </div>

        <!-- Skill Showcase -->
        <div id="skill-showcase" class="col-span-4 m-col-start-2 m-col-span-8">
          <ul id="skill-list">
            <li class="container-1">Print</li>
            <li class="container-1">UX/UI</li>
            <li class="container-1">Front-End</li>
            <li class="container-1">Web Design</li>
            <li class="container-1">Graphic</li>
            <li class="container-1">Motion</li>
          </ul>
        </div>      

        <!-- Short Bio -->
        <p id="hero-bio" class="col-span-4 m-col-start-2 m-col-end-12 l-col-start-2 l-col-span-5 container-1">Experienced in tailoring product concepts/outputs based on problems within the scope of <span>Websites, Mobile Apps, Digital Media Designs, Printed Designs</span>, and many more. Helping clients achieve their goals is always on my dictionary. Look up my works to see if my dictionary is still up to date.</p>

        <!-- Video -->
        <div class="col-span-4 m-col-start-2 m-col-span-10 l-col-start-7 l-col-span-5 video-size">
          <video autoplay muted controls preload="metadata">
            <source src="./video/keith-demoreel.mp4" type="video/mp4">
            <source src="./video/keith-demoreel.webm" type="video/webm">
            <p>Ooops, something went wrong. You may be using an oudated browser or have javascript disabled.</p>
          </video>
        </div>
      </section>

      <!-- Featured Works (Dynamic)-->
      <section id="feat-work-sect" class="grid-con">
        <h2 class="header-section fade-in col-span-4 m-col-start-2 m-col-span-11">Featured Works</h2>

        <?php

        while($row = mysqli_fetch_array($results)) {
        
          echo '

        <!-- Work #1 -->
        <div class="work-card fade-in col-span-4 m-col-start-2 m-col-end-12">
          <h3 class="hidden">Work 1</h3>
          <!-- Thumbnail -->
          <picture class="thumb-img">
            <source
            media="(max-width: 767px)"
            sizes="(max-width: 651px) 100vw, 651px"
            srcset="
            ./images/projects/thumbnail/'.$row['m_thumb'].'.jpg">
            
            <img
            sizes="(max-width: 2390px) 40vw, 956px"
            src="./images/projects/thumbnail/'.$row['thumbnail'].'.jpg"
            alt="Project Thumbnail Image">
          </picture>

          <!-- Content -->
          <div class="work-caption-cont">
            <p class="case-no">Case Study '.$row['cs_no'].'</p>
            <p class="year">'.$row['year'].'</p>
          </div>

          <p class="thumb-work-title">'.$row['title'].'</p>

          <div class="f-wc-footer">
            <!-- Tags -->
            <ul class="tag-lists">
              <li>UX/UI</li>
              <li>3D</li>
              <li>Graphic</li>
              <li>Website</li>
            </ul>

            <!-- Learn More Button -->
            <a href="case-study.php?id='.$row['works'].'" class="secondary-btn">Learn More <span><img src="./images/icons/arrow-right.svg" alt="Arrow Icon"></span></a>
          </div>
        </div>';

        } ?>

        <div class="more-work-btn col-span-4 m-col-span-12">
          <a href="works.html" class="primary-btn">More Works <span><img src="./images/icons/arrow-right-white.svg" alt="Arrow Icon"></span></a>
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
          <form action="sendmail.php" method="post">

            <label class="hidden" for="full_name">Full Name</label>
            <input name="full_name" type="text" placeholder="Your Name" id="full_name">

            <label class="hidden" for="email">Email</label>
            <input name="email" type="text" placeholder="Your Email/Phone Number" id="email">

            <label class="hidden" for="msg">Message</label>
            <textarea name="msg" id="msg" placeholder="Drop your thoughts / movie recommendation / interests / discord username / steam ID / anything on your mind!"></textarea>

            <input type="submit" value="send" class="submit-btn">
          </form>
        </div>
      </section>
    </main>

    <!-- FOOTER -->
    <footer id="footer" class="full-width-grid-con">
      <div class="back-to-top col-span-2">
        <a href="#hero-banner" class="secondary-btn-white">Back to Top <span><img src="./images/icons/arrow-top-white.svg" alt="Arrow Icon"></span></a>
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
