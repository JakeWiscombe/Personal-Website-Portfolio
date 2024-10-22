<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jake Wiscombe | Student Portfolio</title>

    <!---------- Goole Font Import (Kanit) ---------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!---------- Font Awesome Icons Import ---------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!---------- Remix Icons Import ---------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" integrity="sha512-HXXR0l2yMwHDrDyxJbrMD9eLvPe3z3qL3PPeozNTsiHJEENxx8DH2CxmV05iwG0dwoz5n4gQZQyYLUNt1Wdgfg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!---------- Linking External CSS ---------->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="form-styles.css">

    <!---------- Linking External JS ---------->
    <link rel="script" href="script.js">

    <!---------- Website Title & Icon ---------->
    <title>Jake Wiscombe | Student Portfolio</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/wave.jpeg">
</head>
<body>
    <section class="header">
        <nav>
            <a href="index.html" class="header-logo">Jake Wiscombe</a>
            <div class="nav-links" id="navLinks">
                <i class="fa-solid fa-xmark" id="menu-close" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.html" class="active">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="portfolio.html">PORTFOLIO</a></li>
                    <li><a href="services.html">SERVICES</a></li>
                    <li><a href="resume.html">RESUME</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa-solid fa-bars" id="menu-open" onclick="showMenu()"></i>
        </nav>
    </section>

    <div class="banner-content">
        <div class="text-box">
            <h1>I'm looking forward to working with you!</h1>
            <p>Complete the form below to contact me through email and I will get back to you as soon as possible!</p>

            <div class="media-icons">
                <a href="https://www.facebook.com/DJFozzyDiscos" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://www.facebook.com/DJFozzyDiscos" target="_blank"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.facebook.com/DJFozzyDiscos" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                <a href="https://www.facebook.com/DJFozzyDiscos" target="_blank"><i class="fa-brands fa-discord"></i></a>
                <a href="https://www.facebook.com/DJFozzyDiscos" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://instagram.com/djfozzydiscos?igshid=OGQ5ZDc2ODk2ZA==" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://m.me/DJFozzyDiscos/" target="_blank"><i class="fab fa-facebook-messenger"></i></a>
            </div>
        </div>
    </div>

    <!---------- About Me Section ---------->
    <section class="about-me">
        <div class="section-container">
            <!-- <h1 class="section-title">About Myself</h1> -->

            <div class="section-row">
                <div class="section-col left">
                    <h1 class="col-title">Hey, I'm Jake Wiscombe!</h1>
                    <p>
                        From studying computer science during my GCSE studies, my love for creative computing evolved overtime and at the age of sixteen, I started developing my own websites through the use of website fundamental languages such as HTML, CSS and JavaScript.
                        <br><br>
                        Through careful management of time between studying for exams and hobbies, I successfully educatuated myself on these languages which has helped me progress to the stage in which I am at today. I believe that all of my hardwork and determination will make me a successful web designer and developer in the future.
                    </p>
                </div>

                <div class="section-col right">
                    <h1 class="col-title">Send me a message!</h1>
                    <form action="contactform.php" class="contact-form" method="post">
                        <input type="text" name="name" placeholder="Full Name">
                        <input type="text" name="mail" placeholder="Email Address">
                        <input type="text" name="subject" placeholder="Subject">
                        <textarea name="message" placeholder="Enter your message..."></textarea>
                        <button class="hero-btn red-btn" type="submit" name="submit">SEND MESSAGE</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <section class="cta">
        <div class="section-container">
            <div class="section-row">

                <div class="section-col top">
                    <section class="stats">
                        <div class="counter-container">
                            <i class="ri-bar-chart-fill"></i>
                            <div class="counter" data-target="286633"></div>
                            <span>Total Collective Views</span>
                        </div>

                        <div class="counter-container">
                            <i class="fab fa-youtube fa-3x"></i>
                            <div class="counter" data-target="2004"></div>
                            <span>Total Youtube Subscribers</span>
                        </div>

                        <div class="counter-container">
                            <i class="ri-hourglass-2-fill"></i>
                            <div class="counter"data-target="5127"></div>
                            <span>Hours Developing</span>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    
    <section class="footer">
        <div class="section-col bottom">
            <h4 class="footer-title">Jake Wiscombe</h4>
            <p>I'm a young student, currently studying for their A-Levels, who has a growing passion for web design and development. Hoping to fulfill a career in web development in the near future.</p>

                <div class="icons">
                    <a href="https://www.linkedin.com/in/jake-wiscombe-889695277/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="https://github.com/Jake-Wiscombe" target="_blank"><i class="fa-brands fa-github"></i></a>
                    <a href="https://www.youtube.com/@jakewiscombe" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                    <a href="https://discord.gg/w8939TJ7zk" target="_blank"><i class="fa-brands fa-discord"></i></a>
                    <a href="https://www.facebook.com/jake.wiscombe" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/jake.wiscombe/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://m.me/jake.wiscombe/" target="_blank"><i class="fab fa-facebook-messenger"></i></a>
                </div>

                <p>Copyright © 2023 Jake Wiscombe - All rights reserved.</p>

            </div>
    </section>

    <script src="script.js"></script>
</body>
</html>