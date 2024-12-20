<!DOCTYPE html>
<html lang="en">
  <?php
  //connect to the running database server and the specific database
  $connect = new mysqli('localhost','root','root','keith_portfolio');
  include('includes/connect.php');


  //create a query to run in SQL
  $query = 'SELECT works.id AS works, thumbnail, m_thumb, banner, overview, type, title, team, year, link, cs_no, problem, how_might, target_audience, brainstorm, key_findings, design_decisions, site_map, flow_chart, wireframe, highfid, prototyping, feedback, key_takeaways, title FROM works WHERE works.id IN (3, 4, 5, 1) ORDER BY FIELD(works.id, 3, 4, 5, 1)';


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
    <h1 class="hidden">Keith Richard Lie's Works</h1>

    <!-- NAVIGATION -->
    <header id="main-header" class="full-width-grid-con">
      <h2 class="hidden">Keith's Portfolio Header</h2>
      <!-- Navbar -->
        <!-- Navigation -->
        <nav id="main-nav">
          <!-- Logo Nav -->
          <div id="logo-nav">
            <a href="index.html"><img src="images/K-Logo/k-logo-black.svg" alt="Keith's Logo" class="col-span-2"></a>

            <!-- Hamburger Button -->
            <img src="./images/icons/hamburger-button.svg" alt="Hamburger Button" class="hamburger-btn">
          </div>

          <div class="off-screen">
            <!-- Logo Off Screen -->
            <div id="logo-off">
              <a href="index.html"><img src="images/K-Logo/k-logo-black.svg" class="filter-white" alt="Keith's Logo"></a>
            </div>

            <!-- Page Nav -->
            <ul id="page-nav">
              <li><a id="works-menu" href="works.html">Works</a></li>
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
      <section id="works-banner" class="grid-con">
        <h2 class="hidden">Keith's Portfolio Works Section</h2>

        <div class="decor-container col-span-full">
          <img id="swirl2-decor" class="floating-anim" src="./images/decorations/swirl-2.png" alt="Decorative Image">
          <img id="swirl3-decor" class="floating-anim" src="./images/decorations/swirl-3.png" alt="Decorative Image">
        </div>

        <!-- Headline -->
        <div id="wb-headline" class="col-span-4 m-col-start-2 m-col-span-10">
          <p class="opening-caption">I've Worked with Various Clients to</p>
          <p class="pb-bold">SOLVE THEIR PROBLEMS</p>
          <p class="opening-caption">In the forms of</p>
        </div>

        <!-- Skill Showcase -->
        <div id="w-skill-showcase" class="col-span-4 m-col-span-12">
          <ul id="skill-list">
            <li class="container-1">Print</li>
            <li class="container-1">UX/UI</li>
            <li class="container-1">Front-End</li>
            <li class="container-1">Web Design</li>
            <li class="container-1">Graphic</li>
            <li class="container-1">Motion</li>
          </ul>
        </div>
        
        <!-- CTA -->
        <div id="check-these-out" class="col-span-4 m-col-span-12">
          <p><span>Check</span> these out!</p>
          <img src="./images/icons/arrow-bottom.svg" alt="Bottom Arrow" class="container-1">
        </div>        
      </section>

      <!-- Solutions -->
      <!-- Carousel for Mobile size -->
      <div class="carousel-cont grid-con">
        <h2 class="header-section fade-in col-span-4 m-col-span-12">Solutions I've Come With</h2>

        <!-- Cards Container -->
        <div id="works-catalogue" class="col-span-4 m-col-span-12">

          <?php

          while($row = mysqli_fetch_array($results)) {
          
          echo '

          <!-- Work #1 -->
          <div class="work-card fade-in m-col-span-6">
            <h3 class="hidden">Work 1</h3>
            <!-- Thumbnail -->
            <img class="thumb-img" src="./images/projects/thumbnail/'.$row['m_thumb'].'.jpg" alt="Project Thumbnail">

            <!-- Content -->
            <div class="work-caption-cont">
              <p class="case-no">Case Study '.$row['cs_no'].'</p>
              <p class="year">'.$row['year'].'</p>
            </div>

            <p class="thumb-work-title">'.$row['title'].'</p>

            <div class="wc-footer">
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
        </div>
      </div>

      <!-- Other Works Section -->
      <section id="other-works" class="hidden">
        <h2 class="header-section-2 col-span-4 m-col-span-12">Other Works You Might Find Interesting</h2>

        <!-- Work Archives -->
        <!-- W-A-#1 -->
          <!-- Year -->
          <div class="work-a-cont col-span-4 m-col-start-2 m-col-span-10">
            <div class="work-a-time">
              <p class="caption">Year</p>
              <p class="works-year">2022</p>
            </div>

            <div class="work-a-list">
              <div>
                <p class="work-archive-title">Project Name</p>

                <!-- Works Tags -->
                <ul class="tag-lists">
                  <li class="uxui-cont">UXUI</li>
                  <li class="graphic-cont">Graphic</li>
                  <li class="web-cont">Website</li>
                </ul>
              </div>

              <!-- View Detail Button -->
              <a href="#" class="view-detail-btn">View Detail<span><img src="./images/icons/arrow-right.svg" alt="Arrow Icon"></span></a>
            </div>
          </div>

          <div class="line-seperator-dash col-span-4 m-col-start-2 m-col-span-10"></div>

        <!-- W-A-#2 -->
          <!-- Year -->
          <div class="work-a-cont col-span-4 m-col-start-2 m-col-span-10">
            <div class="work-a-time">
              <p class="caption">Year</p>
              <p class="works-year">2022</p>
            </div>

            <div class="work-a-list">
              <div>
                <p class="work-archive-title">Project Name</p>

                <!-- Works Tags -->
                <ul class="tag-lists">
                  <li class="uxui-cont">UXUI</li>
                  <li class="graphic-cont">Graphic</li>
                  <li class="web-cont">Website</li>
                </ul>
              </div>

              <!-- View Detail Button -->
              <a href="#" class="view-detail-btn">View Detail<span><img src="./images/icons/arrow-right.svg" alt="Arrow Icon"></span></a>
            </div>
          </div>

          <div class="line-seperator-dash col-span-4 m-col-start-2 m-col-span-10"></div>

        <!-- W-A-#3 -->
          <!-- Year -->
          <div class="work-a-cont col-span-4 m-col-start-2 m-col-span-10">
            <div class="work-a-time">
              <p class="caption">Year</p>
              <p class="works-year">2022</p>
            </div>

            <div class="work-a-list">
              <div>
                <p class="work-archive-title">Project Name</p>

                <!-- Works Tags -->
                <ul class="tag-lists">
                  <li class="uxui-cont">UXUI</li>
                  <li class="graphic-cont">Graphic</li>
                  <li class="web-cont">Website</li>
                </ul>
              </div>

              <!-- View Detail Button -->
              <a href="#" class="view-detail-btn">View Detail<span><img src="./images/icons/arrow-right.svg" alt="Arrow Icon"></span></a>
            </div>
          </div>

          <div class="line-seperator-dash col-span-4 m-col-start-2 m-col-span-10"></div>

        <!-- W-A-#4 -->
          <!-- Year -->
          <div class="work-a-cont col-span-4 m-col-start-2 m-col-span-10">
            <div class="work-a-time">
              <p class="caption">Year</p>
              <p class="works-year">2022</p>
            </div>

            <div class="work-a-list">
              <div>
                <p class="work-archive-title">Project Name</p>

                <!-- Works Tags -->
                <ul class="tag-lists">
                  <li class="uxui-cont">UXUI</li>
                  <li class="graphic-cont">Graphic</li>
                  <li class="web-cont">Website</li>
                </ul>
              </div>

              <!-- View Detail Button -->
              <a href="#" class="view-detail-btn">View Detail<span><img src="./images/icons/arrow-right.svg" alt="Arrow Icon"></span></a>
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
        <a href="#works-banner" class="secondary-btn-white">Back to Top <span><img src="./images/icons/arrow-top-white.svg" alt="Arrow Icon"></span></a>
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