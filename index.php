<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="shortcut icon" href="img/icon.png">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <!--using FontAwesome---------------->
  <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
  <meta name="theme-color" content="#fafafa">
</head>

<body>

  <!--startHeader-->
  <header>
    <div class="container">
      <div class="row">
        <div class="brandName">
          <a href="" class="logo">Programmer</a>
        </div>
        <!--HamburgerSection-->
        <input class="navigationBar" type="checkbox" id="navToggle">
        <label for="navToggle">
          <span class="hamburger"></span>
        </label>
        <!--EndHamburgerSection-->
        <div class="navbar">
          <ul>
            <li><a href="#home" class="active">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#testimonials">Testimonials</a></li>
            <li><a href="#contactBTN">Contacts</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <!--endHeader-->

  <!--StartHomeSection-->
  <section class="home" id="home">
    <div class="container">
      <div class="row fullScreen">
        <div class="homeContent">
          <div class="block">
            <h6>Hello, I'm . . . .</h6>
            <h1>Benjamin Testaferri</h1>
            <h3>A Front-End Web Developer</h3>
            <div class="cvBtn">
              <a href="">My Portfolio</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--EndHomeSection-->

  <!--StartAboutSection-->
  <section class="aboutMe" id="about">
    <div class="container">
      <div class="row">
        <div class="sectionTitle">
          <h1>About Me</h1>
          <p class="small textUppercase">Information About Me</p>
        </div>
      </div>
      <div class="row">
        <div class="aboutContent">
          <div class="row">
            <div class="img">
              <img src="./img/aboutModel1.png" alt="About Me">
            </div>
            <div class="text">
              <h4>I'm Benjamin Testaferri</h4>
              <h6>A <span>Front-End</span> Web Developer</h6>
              <p>Hello everyone, I introduce myself, I am currently in the second year of the Computer Systems Analyst career in addition to studying I am dedicated to front end web development for 2 years and I love it!</p>
              <div class="info">
                <div class="list">
                  <label>E-mail:</label>
                  <p>benjamintestaferrig@gmail.com</p>
                </div>
                <div class="list">
                  <label>Age:</label>
                  <p>21</p>
                </div>
                <div class="list">
                  <label>Phone:</label>
                  <p>(+54) 351-750-4504</p>
                </div>
                <div class="list">
                  <label>Residence:</label>
                  <p>Argentina</p>
                </div>
                <div class="list">
                  <label>Adress:</label>
                  <p>Cordoba</p>
                </div>
                <div class="list">
                  <label>Freelance:</label>
                  <p>Avaible</p>
                </div>
              </div>

              <!--SocialMedia-->
              <div class="socialMedia">
                <a href="https://www.instagram.com/benjatestaferri7/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/benjatestafe" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://github.com/benjatestaferri7" target="_blank"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/benjam%C3%ADn-testaferri-gomez-55073a185/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
              </div>
              <!--EndSocualMedia-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--EndAboutSection-->

  <!--MessageText-->
  <section class="messageText">
      <div class="container">
        <div class="row">
          <div class="text">
            <h2>A Web Developer, click the button to download</h2>
          </div>
          <div class="button">
            <a href=""download=>Download CV</a>
          </div>
        </div>
      </div>
  </section>
  <!--EndMessageText-->

  <!--ServiceSection-->
  <section class="services" id="services">
    <div class="container">
      <div class="row">
        <div class="sectionTitle textCenter">
           <h1>OUR SERVICES</h1>
        </div>
      </div>
      <div class="row">
        <div class="serviceContents">
          <div class="box">
            <div class="icons">
              <i class="fa fa-mobile"></i>
            </div>
            <h5>Responsive Website</h5>
            <p>I make your site responsive for mobile and tablet.</p>
          </div>
          <div class="box">
            <div class="icons">
              <i class="fa fa-book"></i>
            </div>
            <h5>Tutorials</h5>
            <p>If you need to learn something specific I can help you with a short tutorial.</p>
          </div>
          <div class="box">
            <div class="icons">
              <i class="fa fa-award"></i>
            </div>
            <h5>Testing for Perfection</h5>
            <p>Projects are tested by inexperienced users in order to get an honest review.</p>
          </div>
          <div class="box">
            <div class="icons">
              <i class="fa fa-lightbulb"></i>
            </div>
            <h5>Creativity</h5>
            <p>You have no layout for your page. Do not worry tell me the requirements and I will let my creativity flow to be able to make a good design.</p>
          </div>
          <div class="box">
            <div class="icons">
              <i class="fa fa-code"></i>
            </div>
            <h5>Getting Ready</h5>
            <p>The code will be commented by sections in a specific order so that it can be understood by anyone.</p>
          </div>
          <div class="box">
            <div class="icons">
              <i class="fa fa-cog"></i>
            </div>
            <h5>Advanced Features</h5>
            <p>If you want to do something that is not within what I offer you can ask me and we will see if I can help you.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--EndServiceSection-->
  <!--SkillsSection-->
  <section class="skills" id="skills">
    <div class="container">
      <div class="row alignItemsCenter">
        <div class="skillsContent">
          <div class="row">
            <div class="sectionTitle">
              <h1>Professional Skills</h1>
              <p>Yes, I learned web design because I love programming and coding websites.</p>  
            </div>
          </div>
          <div class="row">
            <div class="skillsBox">
              <h6>Front-End</h6>
              <div class="skillsBar">
                <div class="skillsIntheBar" style="width: 90%;">
                  <span>90%</span>
                </div>
              </div>
            </div>
            <div class="skillsBox">
              <h6>Database</h6>
              <div class="skillsBar">
                <div class="skillsIntheBar" style="width: 80%;">
                  <span>80%</span>
                </div>
              </div>
            </div>
            <div class="skillsBox">
              <h6>UI & UX</h6>
              <div class="skillsBar">
                <div class="skillsIntheBar" style="width: 95%;">
                  <span>95%</span>
                </div>
              </div>
            </div>
            <div class="skillsBox">
              <h6>Programming and Back-End</h6>
              <div class="skillsBar">
                <div class="skillsIntheBar" style="width: 75%;">
                  <span>75%</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="image">
          <img src="./img/skills.jpg" alt="skills">
        </div>
      </div>
    </div>
  </section>
  <!--EndSkillsSection-->

<!--portfolioSection-->
    <section id="portfolio">
        <!--heading-->
        <div class="container">
      <div class="row">
        <div class="sectionTitle textCenter">
          <h1>My Portfolio Works</h1>
        </div>
      </div>
        <!--porfolioBoxContainer-->
        <div class="pbContainer">
            <!--box1-->
            <div class="pBox">
                <!--text-->
                <div class="textOverlay">
                    <h1>Coffe Blog</h1>
                    <p>Client Project</p>
                </div>
                <!--img-->
                <img src="img/pj1.jpg" alt="portfolio">
            </div>

            <!--box2-->
            <div class="pBox">
                <!--text-->
                <div class="textOverlay">
                    <h1>Client Portfolio</h1>
                    <p>Client Project</p>
                </div>
                <!--img-->
                <img src="img/pj2.png" alt="portfolio">
            </div>

            <!--box3-->
            <div class="pBox">
                <!--text-->
                <div class="textOverlay">
                    <h1>Coming Soon</h1>
                    <p>Client Project</p>
                </div>
                <!--img-->
                <img src="img/cmsoon.jpg" alt="portfolio">
            </div>

            <!--box4-->
            <div class="pBox">
                <!--text-->
                <div class="textOverlay">
                    <h1>Coming Soon</h1>
                    <p>Client Project</p>
                </div>
                <!--img-->
                <img src="img/cmsoon.jpg" alt="portfolio">
            </div>

            <!--box5-->
            <div class="pBox">
                <!--text-->
                <div class="textOverlay">
                    <h1>Coming Soon</h1>
                    <p>Client Project</p>
                </div>
                <!--img-->
                <img src="img/cmsoon.jpg" alt="portfolio">
            </div>

            <!--box6-->
            <div class="pBox">
                <!--text-->
                <div class="textOverlay">
                    <h1>Coming Soon</h1>
                    <p>Client Project</p>
                </div>
                <!--img-->
                <img src="img/cmsoon.jpg" alt="portfolio">
            </div>
        </div>
    </section>
<!--EndportfolioSection-->

<!--MessageText-->
<section class="messageText">
  <div class="container">
    <div class="row">
      <div class="text">
        <h2>I am a programmer who is very interested in what the project is intended for</h2>
      </div>
      <div class="button">
        <a href="" download=>SUBSCRIBE</a>
      </div>
    </div>
  </div>
</section>
<!--EndMessage-->
<!--TestimonialSection-->
<section class="testimonials" id="testimonials">
  <div class="container">
    <div class="row">
      <div class="sectionTitle textCenter">
        <h1>Testimonials</h1>
      </div>
    </div>
    <div class="row">
      <div class="testimonialContent">
        <div class="testContent">
          <div class="image">
            <img src="img/testimonials/testimonials1.png" alt="Testimonials Picture">
          </div>
          <div class="text">
            <p>Excellent services in ux & ui design. We will surely continue working together. Thank you</p>
            <h5>Jhon Doe</h5>
            <p>Founder</p>
          </div>
        </div>
        <div class="testContent">
          <div class="image">
            <img src="img/testimonials/testimonials2.png" alt="Testimonials Picture">
          </div>
          <div class="text">
            <p>Excellent responsive design and optimization services. We will keep in touch. Thank you</p>
            <h5>Susan Rivera</h5>
            <p>Co-Founder</p>
          </div>
        </div>
        <div class="testContent">
          <div class="image">
            <img src="img/testimonials/testimonials3.png" alt="Testimonials Picture">
          </div>
          <div class="text">
            <p>Amazing designs, lots of creativity. We will communicate soon for future work. Thank you</p>
            <h5>Paul Doe</h5>
            <p>Co-Founder</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--EndTestimonialSection-->


<!--contactBtn-->
    <section id="contactBTN">
        <!--heading-->
        <h1 class="cbHeading">If You Have Any Project In Your Mind ?</h1>
        <!--btn-->
        <a href="#contactForm"> Contact Me</a>
    </section>
    <!--contactForm-->

  <!--ContactSection-->
    <section id="contactForm">
        <form action="contact.php" method="post">
            <!--left-->
            <div class="contactLeft">
                <!--heading-->
                <h1 class="clHeading"><font style="border-bottom: 3px solid #057ace;"> Writ</font>e Us</h1>
                <!--name-->
                <div class="fName">
                <!--FormName-->
                <font>Name</font>
                <!--input-->
                <input type="text" name="name" placeholder="Full Name" >
                </div>
                <!--FormEmail-->
                <div class="fEmail">
                    <!--name-->
                    <font>Email</font>
                    <!--input-->
                    <input type="email" name="email" placeholder="Example@gmail.com" >
                    </div>
            </div>
            <!--right-->
            <div class="contactRight">
                <!--message-->
                <div class="message">
                    <font>Message</font>
                    <textarea name="msg" rows="5" cols="20" placeholder="Write Message..."></textarea>
                </div>
                <!--sumbit-->
                <button type="submit" name="submit">submit</button>
            </div>
        </form>
    </section>
<!--EndContactSection-->


<!--Footer-->
<footer>
  <div class="container">
    <div class="row">
      <div class="logo">
        Benjamin Testaferri
      </div>
      <div class="socialMedia">
        <a href="https://www.instagram.com/benjatestaferri7/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://twitter.com/benjatestafe" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://github.com/benjatestaferri7" target="_blank"><i class="fab fa-github"></i></a>
        <a href="https://www.linkedin.com/in/benjam%C3%ADn-testaferri-gomez-55073a185/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
  </div>
</footer>
<!--EndFooter-->

<!--Copyright-->
<section class="copyright">
  <div class="container">
    <p>&copy; 2020, Copyright of all right reserved</p>
  </div>
  <p class="text">Designed and Developer by <span><strong><a href="#home">Benjamin Testaferri&reg</a></strong></span></p>
</section>


  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
