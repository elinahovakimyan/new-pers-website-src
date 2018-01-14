<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Elina Hovakimyan">
    <meta name="description" content="Welcome to Elina Hovakimyan's personal website, who is a growing full-stack web developer. Here you can learn more about Elina, her experience and get in touch with her">
    <meta name="keywords" content="Elina Hovakimyan, web, website, full-stack, web developer, Javascript, personal, NodeJS, Express, online CV, personal website ">
    <meta name="robots" content="index, follow">

    <!-- Open Graph data -->
    <meta property="og:title" content="Elina's Personal Website" />
    <meta property="og:url" content="http://www.elinahovakimyan.com/" />
    <meta property="og:image" content="http://elinahovakimyan.com/default.jpg" />
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:description" content="Welcome to Elina Hovakimyan's personal website, who is a growing full-stack web developer. Here you can learn more about Elina, her experience and get in touch with her" />
    <meta property="og:site_name" content="Elina's Personal Website" />

    <!--APPLE TOUCH ICON-->
    <link rel="apple-touch-icon" href="images/logo.png">
    <!-- GOOGLE FONT -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">

    <!-- MATERIAL ICON FONT -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- ANIMATION -->
    <link href="stylesheets/animate.min.css" rel="stylesheet">
    <!-- MATERIALIZE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.0/css/materialize.min.css">
    <!-- BOOTSTRAP -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- CUSTOM STYLE -->
    <link href="stylesheets/style.css" id="switch_style" rel="stylesheet">

    <title>Elina's Personal Website</title>
    <link rel="shortcut icon" href="images/logo.png">

</head>
<body>


<!--==========================================
                  PRE-LOADER
===========================================-->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="box-holder animated bounceInDown">
                <span class="load-box"><span class="box-inner"></span></span>
            </div>
            <!-- NAME & STATUS -->
            <div class="text-holder text-center">
                <h2>Elina Hovakimyan</h2>
                <h6>Front-end web developer</h6>
            </div>
        </div>
    </div>
</div>

<!--==========================================
                    HEADER
===========================================-->
<header id="home">
    <nav id="theMenu" class="menu">

        <!--MENU-->
        <div id="menu-options" class="menu-wrap">

            <!--PERSONAL LOGO-->
            <div class="logo-flat">
                <img alt="personal-logo" class="img-responsive" src="images/logo.png">
            </div>
            <br>

            <!--OPTIONS-->
            <a href="#home"><i class="title-icon fa fa-user"></i>Home</a>
            <a href="#about"><i class="title-icon fa fa-dashboard"></i>About</a>
            <a href="#knowledge"><i class="title-icon fa fa-sliders"></i>Knowledge</a>
            <a href="#skills"><i class="title-icon fa fa-sliders"></i>Skills</a>
            <a href="#portfolios"><i class="title-icon fa fa-archive"></i>My works</a>
            <a href="#education"><i class="title-icon fa fa-graduation-cap"></i>Education</a>
            <a href="#blog"><i class="title-icon fa fa-pencil-square"></i>Blog</a>
            <a href="#contact"><i class="title-icon fa fa-envelope"></i>Contact</a>
        </div>

        <!-- MENU BUTTON -->
        <div id="menuToggle">
            <div class="toggle-normal">
                <i class="material-icons top-bar">remove</i>
                <i class="material-icons middle-bar">remove</i>
                <i class="material-icons bottom-bar">remove</i>
            </div>
        </div>
    </nav>
</header>



<!--==========================================
                   GREETING
===========================================-->
<div class="typewriter">
    <h1>Welcome to my website! :)</h1>
</div>


<!--==========================================
                   ABOUT
===========================================-->
<div id="about" class="section">
    <div class="container">
        <div class="row">

            <div class="col-md-4" id="intro-main">
                <img src="images/my_photo.jpg" class="profile img-responsive">
                <h3>Elina Hovakimyan</h3>
                <h5>Full-Stack Web Developer</h5> <hr>
                <h5><span class="glyphicon glyphicon-certificate"></span> "Best IT Student"- President Award 2017</h5>
                <div class="links">
                    <a href="https://www.facebook.com/elin.hovakimyan"  target="_blank" id="first_one" class="social btn-floating indigo "><i class="fa fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/elina-hovakimyan/" target="_blank" class="social btn-floating blue darken-3 "><i class="fa fa-linkedin"></i></a>
                    <a href="https://www.github.com/elinahovakimyan/" target="_blank" class="social btn-floating blue darken-3 "><i class="fa fa-github"></i></a>

                </div>
            </div>

            <div class="col-md-8">
                <!-- DETAILS -->
                <div id="about-card" class="card">
                    <div class="card-content">
                        <!-- ABOUT PARAGRAPH -->
                        <p>
                            <span class="about-heading">My Story</span><br>
                            Hi, I am a Javascript developer, front-end wizard and WordPress expert with 2+ years experience. I am experienced with all stages of the development cycle for dynamic web projects. Having an in-depth knowledge including HTML5, CSS, CSS3, SASS, JavaScript, ReactJS, NodeJS with Express framework. To make my projects look better and be perfectly responsive I use frameworks, such as Bootstrap and MaterializeCSS. Also, I have a strong background in time management and leadership which helps me to be more organized and responsible.
                        </p> <br>
                        <!-- Contacts -->
                        <div class="infos">
                            <ul class="profile-list">
                                <li class="clearfix">
                                    <span class="title"><i class="material-icons">email</i></span>
                                    <span class="content">elinahovakimyan@gmail.com</span>
                                </li>
                                <li class="clearfix">
                                    <span class="title"><i class="material-icons">language</i></span>
                                    <span class="content">elinahovakimyan.com</span>
                                </li>
                                <li class="clearfix">
                                    <span class="title"><i class="material-icons">phone</i></span>
                                    <span class="content">+374 55 855 615</span>
                                </li>
                                <li class="clearfix">
                                    <span class="title"><i class="material-icons">place</i></span>
                                    <span class="content">Yerevan, Armenia</span>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <!-- BUTTONS -->
                    <div id="about-btn" class="card-action">
                        <div class="about-btn">
                            <!-- DOWNLOAD CV BUTTON -->
                            <a class="waves-effect waves-light btn" href="content/CV_ElinaHovakimyan.pdf" download>
                                <div class="about-btn-content">
                                    <i class="fa fa-cloud-download"></i> Download CV
                                </div>
                            </a>
                            <!-- CONTACT BUTTON - TRIGGER MODAL-->
                            <a href="#" class="btn waves-effect" data-toggle="modal" data-target="#contactmodal">
                                <div class="about-btn-content">
                                    <i class="fa fa-envelope-open-o"></i> Contact Me
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==========================================
                  MODALS
===========================================-->

<div id="contactmodal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">


                <h4 class="text-center modal-title">Leave your message here</h4>
                <h5 class="text-center">Feel free to ask any question to me. :) </h5>


            </div> <!--modal-header -->
            <div class="modal-body">
                <form action="/php/form.php" method="post">
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="text" name="message" placeholder="Message" required>
                    <button type="submit" class="btn waves-effect">Send</button>
                </form>
            </div> <!--modal-body-->
            <div class="modal-footer">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" ><i class="fa fa-remove">close</i></span>
                </button>
            </div>
        </div> <!--modal-content-->
    </div> <!--modal-dialog-->
</div> <!--modal-->









<div id="post-2" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">


                <h4 class="text-center modal-title">8 effective tips for time management</h4>
                <h5 class="text-center">Work smarter, nor harder. </h5>
                <img src="images/blog/time-main.jpg">


            </div> <!--modal-header -->
            <div class="modal-body">
                    <p>Are you a busy person overwhelmed with a bunch of tasks and trying to manage to do everything on time and properly? Or are you a person that always strives to achieve more and work harder, but the feeling of being unproductive and wasting your time never leaves you? If so, read further. The Internet is full of articles about time management. To solve this problem for myself, I started to experiment many different tips. Here I have chosen the most effective and powerful 8 tips that really worked for me.</p>
                    <p><b>NOTE:</b> Personalities do vary and the tip that worked for me perfectly may not work for you. Just think for a moment about your personality and decide which tip will be most effective for you.</p>
                    <h3>1.  Plan the next day in the evening</h3>
                    <p>To spend your time productively you should have a plan. Indeed, you cannot keep track of your time if you have a lot of tasks, but no plan. This will automatically overload your brain on just remembering on what you have to do. But when you write it down, you become calmer and more organized. But just writing down a list of tasks called “TO-DO LIST” will not always work. Read further to find out how correctly organize that list.</p>
                    <h3>2.  Divide the task into small pieces</h3>
                    <p>Actually, this is a kind of game between our consciousness and subconsciousness. Our subconsciousness never adjusts its actions with us. The good thing is that we can use tricks and make it do whatever we want. For example, when we know that we have a big task to do today it can scare our brain which will become a barrier for us to start working on task. To overcome this barrier, we can trick our brain by dividing the task into small pieces. This sends signs that the work is manageable and we will not get exhausted. This makes our brain approach the task more happily. </p>
                    <h3>3.  Leave buffer time in-between</h3>
                    <p>Although we can trick our brain to work harder, we cannot make it work unceasingly. Working continuously, without any breaks, makes the brain get exhausted and the productivity level falls. To escape this, it’s a good practice to include break time in your plan after each task. Even 5-10 minutes can be enough to get ready for the next task.</p>
                    <h3>4.  Prioritize & eliminate the non-essential</h3>
                    <p>If you want to have better results we should have better and pure plan. What I mean by saying pure is that it shouldn’t contain any additional task. If you aim to reach to your destination B, working for the other C, D & E can be confused for you; so, avoid from that. You should always choose your goal before planning your days and weeks. Whenever you feel uncomfortable with your plan, look through your goals once more. Maybe you need to make some changes. Decide which goals are important for you and concentrate on them allocating more time and attention to those activities.</p>
                    <h3>5.  Learn to say “NO”</h3>
                    <p>I should confess that this tip was the most revolutionary for me. Making a choice is really difficult, but when you do it you get closer to your main goal. You should stay focused. Learn to say “NO” to the things that do not meet your goal. Never waste your time. Make most use of it and ask yourself, “Is there a thing that does not benefit my goal? Should I keep it or will I feel freer if I eliminate it?”</p>
                    <h3>6.  Block out distractions</h3>
                    <p>Have you ever prepared a perfect plan with prioritized and pure to-do list and necessary breaks, but the results of the day were still unsatisfactory? Most likely, the reason of that is that you easily get distracted. For escaping this kind of situation, I would recommend turning off the notifications from social platforms, such as Facebook, Twitter or LinkedIn, not answering your emails and calling instantly and trying to minimize the possible distractions. When you are working on your activity focus on it and block all the information that can distract you.</p>
                    <h3>7.  2 minutes’ rule</h3>
                    <p>As I already mentioned, having a plan is mandatory for most people to stay focused on what they have to do. However, there are some little tiny things that is better not to include in your plan but, instead, do instantly and take right away from your day plan. These tasks/activities are the ones that take you less than 2 minutes to complete. So, if you get a task that will last approximately 2 minutes, complete it at the same time when you get it. This will help you to save some time for later activities.</p>
                    <h3>8.  Do something during waiting time</h3>
                    <p>Another important thing that I always do is to have an “extra plan” for your waiting time. If you keep track of your time you will notice how much spare time you have in your day spent on waiting for something or transportation. If you have activities that you can do outside your home, such as “finding a new course about NodeJS” or “reading an article about SEO”, you can plan those for your waiting or transportation time to complete them by your phone. </p>
                    <h3><b>BONUS:</b> Love what you do</h3>
                    <p>Nevertheless, no tip can help you become more and more productive in your work if you don’t love what you do. Enjoy everything that you do and find your passion that makes you wake up earlier, work harder and dream further. Find out what makes you enthusiastic. In this case, you will not need tips to concentrate on your work or how to escape distractions. Your passion will lead you and your motivation will be the key of the productive work.</p> <br>

                    <p>I really hope that these tips will be helpful for you. If you have any questions or would like to get a tool for a specific tip, feel free contact me or leave a message below. I will be glad to help you. One more thing, never forget that you are a human with real emotions and enjoy whatever you do. </p>

            </div> <!--modal-body-->
            <div class="modal-footer">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" ><i class="fa fa-remove">close</i></span>
                </button>
            </div>
        </div> <!--modal-content-->
    </div> <!--modal-dialog-->
</div> <!--modal-->











<div id="post-3" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">


                <h4 class="text-center modal-title">How to deliver a successful speech</h4>
                <h5 class="text-center">Conquer you fears. </h5>
                <img src="images/blog/speech-main.jpg">


            </div> <!--modal-header -->
            <div class="modal-body">

                <p class="text-right">Inspired by<i> Dale Carnegie “How to Develop Self-Confidence and Influence People by Public Speaking”</i></p>
                <p>When you have something important, reasonable and valuable to tell people, the best way is to have a public speech in front of them. However, so many people are afraid of having a public speech. Sometimes we can even call it Glossophobia, which is a form of Social Anxiety Disorder (SAD). Do you have this phobia? If yes, do not worry. Almost 74% of people suffer from speech anxiety. This huge number includes people who now succeed in their pitches too. The difference between them and those who are still afraid, is that successful pitchers practice more, they never give up and they always improve their techniques.</p>
                <p>Public speaking was my greatest fear that I could have ever imagined. Nevertheless, if you want to overcome a fear, you should meet the fear. Fortunately, I did it. Now I never miss an opportunity to better my skills of public speaking. Above are some pieces of advice that can help you to become a better public speaker.</p>
                <h3>Prepare beforehand</h3>
                <p>This is the most important advice that I can give. Many famous public speakers confess that they spend even weeks on preparing for the speech and that is the key for the successful speech. Define your goal for that particular speech and start preparing for it. You should try to interest and attract your audience. If you encounter some difficulties while trying to write a speech, than write down all the ideas that come to your mind and then start to collect your speech like a puzzle. </p>
                <h3>Speak frankly and emotionally</h3>
                <p>If you want to attract your audience, speak from heart. Stay emotional and sincere to penetrate deeply into their hearts. This trick will make you feel closer and your anxiety of the speech will decrease. Consider this important thing while preparing your speech and never write a speech in a hurry. Make your audience trust you.</p>
                <h3>Have some notes with you</h3>
                <p>This is useful for your safety and confidence. Do not worry even if your forget something. Keep notes and they will always help you to navigate. However, you had better not abuse this tip. Notes should be with you for the emergency. Nevertheless, you should never lose your eye contact.</p>
                <3>Find the straight way</3>
                <p>While writing your speech try to stay focused on your main topic. It is better to talk only about you topic accurately and in an organized way, rather than to jump from one topic to another and confuse your audience. </p>
                <h3>Do not start with apologizing or telling a funny story </h3>
                <p>Show your confidence. You can do more than you think. However, starting with “I am sorry I am not prepared” or telling a joke reveals your fear. Remember, that you will not have a second chance to make a first impression. Start your speech with something engaging and astonishing to trigger interest. Another interesting method of starting your speech is to choose an object or a symbol and start to explain how it is connected to your speech. </p>
                <h3>Practice makes perfect</h3>
                <p>After having prepared your speech script, start practicing it aloud. Try to practice in front of a mirror and be attentive to your mimics and body language. If you feel uncomfortable, while speaking, use your hands and improve your body language. You should always show your confidence. ;) For working on your voice record yourself and listen to find out what you can better. Finally, you can ask your friends and family members to become your audience and organize a rehearsal for you.</p>
                <p>Conquering you fears is not an easy job, but you can grow only if you move out of your comfort zone. The ability to have a powerful and influential speech will open many doors for you. I wish you good luck in this interesting journey and never give up. Feel free to contact me if you have questions.</p>


            </div> <!--modal-body-->
            <div class="modal-footer">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" ><i class="fa fa-remove">close</i></span>
                </button>
            </div>
        </div> <!--modal-content-->
    </div> <!--modal-dialog-->
</div> <!--modal-->








<!--==========================================
                   KNOWLEDGE
===========================================-->
<section id="knowledge" class="section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="section-title">
            <h4 class="text-uppercase text-center"><i class="title-icon fa fa-pie-chart"></i>Knowledge</h4>
            <h5 class="text-center">Find out what makes me stronger and stay tuned as this list is becoming larger.</h5>
        </div>

        <div class="card">
            <div class="row">
                <div class="col-sm-6 col-md-2">
                    <div class="skill-logo">
                        <img src="images/knowledge/html5.png" class="img-responsive knowledge-icon">
                    </div>
                    <div class="knowledge-content">
                        <h5>HTML5</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2">
                    <div class="skill-logo">
                        <img src="images/knowledge/css3.png" class="img-responsive knowledge-icon">
                    </div>
                    <div class="knowledge-content">
                        <h5>CSS3</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2">
                    <div class="skill-logo">
                        <img src="images/knowledge/react.png" class="img-responsive knowledge-icon">
                    </div>
                    <div class="knowledge-content">
                        <h5>React</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2">
                    <div class="skill-logo">
                        <img src="images/knowledge/nodejs.png" class="img-responsive knowledge-icon">
                    </div>
                    <div class="knowledge-content">
                        <h5>NodeJS + Express</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2">
                    <div class="skill-logo">
                        <img src="images/knowledge/js.png" class="img-responsive knowledge-icon">
                    </div>
                    <div class="knowledge-content">
                        <h5>JavaScript</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2">
                    <div class="skill-logo">
                        <img src="images/knowledge/jquery.png" class="img-responsive knowledge-icon">
                    </div>
                    <div class="knowledge-content">
                        <h5>JQuery</h5>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-6 col-md-2">
                    <div class="skill-logo">
                        <img src="images/knowledge/sass.png" class="img-responsive knowledge-icon">
                    </div>
                    <div class="knowledge-content">
                        <h5>SASS</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2">
                    <div class="skill-logo">
                        <img src="images/knowledge/php.png" class="img-responsive knowledge-icon">
                    </div>
                    <div class="knowledge-content">
                        <h5>PHP</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2">
                    <div class="skill-logo">
                        <img src="images/knowledge/bootstrap.png" class="img-responsive knowledge-icon">
                    </div>
                    <div class="knowledge-content">
                        <h5>Bootstrap</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2">
                    <div class="skill-logo">
                        <img src="images/knowledge/materializecss.png" class="img-responsive knowledge-icon">
                    </div>
                    <div class="knowledge-content">
                        <h5>MaterializeCSS</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2">
                    <div class="skill-logo">
                        <img src="images/knowledge/wordpress.png" class="img-responsive knowledge-icon">
                    </div>
                    <div class="knowledge-content">
                        <h5>WordPress</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-2">
                    <div class="skill-logo">
                        <img src="images/knowledge/drupal.png" class="img-responsive knowledge-icon">
                    </div>
                    <div class="knowledge-content">
                        <h5>Drupal</h5>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>


<!--==========================================
                   SKILLS
===========================================-->
<section id="skills" class="section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="section-title">
            <h4 class="text-uppercase text-center"><i class="title-icon fa fa-sliders"></i>Skills</h4>
            <h5 class="text-center">Knowledge is important, but the skills make a FULL package with them.</h5>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div id="skills-card" class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <!-- FIRST SKILL SECTION -->
                                <div class="skills-title">
                                    <h6 class="text-center">Technical</h6>
                                </div>
                                <!-- FIRST SKILL BAR -->
                                <div class="skillbar" data-percent="85%">
                                    <div class="skillbar-title"><span>SEO & SEM</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">85%</div>
                                </div>
                                <!-- SECOND SKILL BAR  -->
                                <div class="skillbar" data-percent="90%">
                                    <div class="skillbar-title"><span>Digital Marketing</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">90%</div>
                                </div>
                                <!-- THIRD SKILL BAR  -->
                                <div class="skillbar" data-percent="70%">
                                    <div class="skillbar-title"><span>Graphic Design</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">70%</div>
                                </div>
                                <!-- FOURTH SKILL BAR  -->
                                <div class="skillbar" data-percent="88%">
                                    <div class="skillbar-title"><span>Project management</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">88%</div>
                                </div>
                            </div>


                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <!-- SECOND SKILL SECTION -->
                                <div class="skills-title">
                                    <h6 class="text-center">Personal</h6>
                                </div>
                                <!-- FIRST SKILL BAR -->
                                <div class="skillbar" data-percent="84%">
                                    <div class="skillbar-title"><span>Time management</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">84%</div>
                                </div>
                                <!-- SECOND SKILL BAR  -->
                                <div class="skillbar" data-percent="80%">
                                    <div class="skillbar-title"><span>Teamwork</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">80%</div>
                                </div>
                                <!-- THIRD SKILL BAR  -->
                                <div class="skillbar" data-percent="91%">
                                    <div class="skillbar-title"><span>Responsibility</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">90%</div>
                                </div>
                                <!-- FOURTH SKILL BAR  -->
                                <div class="skillbar" data-percent="89%">
                                    <div class="skillbar-title"><span>Hardworking</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">93%</div>
                                </div>
                            </div>


                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <!-- THIRD SKILL SECTION -->
                                <div class="skills-title">
                                    <h6 class="text-center">Software</h6>
                                </div>
                                <!-- FIRST SKILL BAR -->
                                <div class="skillbar" data-percent="70%">
                                    <div class="skillbar-title"><span>Adobe Photoshop</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">70%</div>
                                </div>
                                <!-- SECOND SKILL BAR  -->
                                <div class="skillbar" data-percent="87%">
                                    <div class="skillbar-title"><span>Content Management Systems</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">87%</div>
                                </div>
                                <!-- THIRD SKILL BAR  -->
                                <div class="skillbar" data-percent="65%">
                                    <div class="skillbar-title"><span>UI/UX</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">65%</div>
                                </div>
                                <!-- FOURTH SKILL BAR  -->
                                <div class="skillbar" data-percent="80%">
                                    <div class="skillbar-title"><span>Google Analytics</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">80%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!--==========================================
                  PORTFOLIOS
===========================================-->
<section id="portfolios" class="section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="section-title">
            <h4 class="text-uppercase text-center"><i class="title-icon fa fa-archive"></i>Portfolios</h4>
            <h5 class="text-center">Look through some of my works on my website.</h5><br>
            <h5 class="note"><strong>NOTE:</strong> My skills are best shown in my personal website. Above are only the demo versions of some experimental websites.</h5>
        </div>
        <div class="row">

            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="images/hask.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">HASK Products<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">HASK Products<i class="material-icons right">close</i></span>
                      <p>I built this website for B2C company that sells 3D printer fillaments and this is just an informational website.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="images/mentor.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Mentorship<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Mentorship <i class="material-icons right">close</i></span>
                      <p>This project aimed to found a network of mentors and mentees in Armenian regions and further. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="images/electricar.jpg">
                    </div>
                    <div class="card-content">
                      <span class="card-title activator grey-text text-darken-4">Electricars<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Electricars<i class="material-icons right">close</i></span>
                      <p>This website was built for car-selling company where you can choose what kind of electric car you want.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<!--==========================================
                   EDUCATION
===========================================-->
<section id="education" class="section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="section-title">
            <h4 class="text-uppercase text-center"><i class="title-icon fa fa-graduation-cap"></i>Education</h4>
            <h5 class="text-center">Education is not always theoretical, but here is that part of my education.</h5>
        </div>

        <div id="timeline-education">

            <!-- FIRST TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>E</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Elementary Education</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>Paruyr Sevak School</small>
                            </h6>
                            <h6>
                                <small>Sep 2005 - May 2008</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I completed my elementary education from this school. I successfully completed all the credits with the highest grades.
                        </p>
                    </div>
                </div>
            </div>

            <!-- SECOND TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>S</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Secondary School</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>School No. 171 </small>
                            </h6>
                            <h6>
                                <small>Sep 2008 - June 2011</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I studied here grades 5-7. At school, I had high academic performance and revealed my leadership qualities.
                        </p>
                    </div>
                </div>
            </div>

            <!-- THIRD TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>H</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">High School</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>Shirakatsy Lyceum international educational complex</small>
                            </h6>
                            <h6>
                                <small>Sep 2011 - Jul 2017</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I continued my education in this prestigious institution, which brought revolutionary changes to my life and personality. I was thought how to think which guaranteed my further growth.
                        </p>

                    </div>
                </div>
            </div>

            <!-- FOURTH TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><i class="fa fa-graduation-cap"></i></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Business management</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>American University of Armenia</small>
                            </h6>
                            <h6>
                                <small>Present</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            Due to a long hard work, I was admitted to the most prestigious university of Armenia. I will study Business at American University of Armenia.
                        </p>

                    </div>
                </div>
            </div>
            <!-- FIFTH TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><h6>P</h6></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Foundations of Programming</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>Lynda.com</small>
                            </h6>
                            <h6>
                                <small>Dec 2016 - Jun 2017</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            Lynda.com provides with the most informational and high-level online courses in almost every sphere. I studied here "Foundations of Programming" which changed my mindset developing more algorithmical thinking.
                        </p>
                    </div>
                </div>
            </div>
            <!-- SIXTH TIMELINE -->
            <div class="timeline-block">
                <!-- DOT -->
                <div class="timeline-dot"><i class="fa fa-globe"></i></div>
                <!-- TIMELINE CONTENT -->
                <div class="card timeline-content">
                    <div class="card-content">
                        <!-- TIMELINE TITLE -->
                        <h6 class="timeline-title">Computer Science (CS50)</h6>
                        <!-- TIMELINE TITLE INFO -->
                        <div class="timeline-info">
                            <h6>
                                <small>Harvard University (edx.org)</small>
                            </h6>
                            <h6>
                                <small>Jul 2017 - Aug 2017</small>
                            </h6>
                        </div>
                        <!-- TIMELINE PARAGRAPH -->
                        <p>
                            I completed this notable course from this prestigious institution. Due to this course, I gained broad understanding of Computer Science.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!--==========================================
             BLOG
===========================================-->
<section id="blog" class="section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="section-title">
            <h4 class="text-uppercase text-center"><i class="title-icon fa fa-pencil-square"></i>Blog</h4>
            <h5 class="text-center">Get to know my personality and perspectives.</h5>
        </div>
        <div id="blog-card" class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card">

                    <!--BLOG EVEN-->
                    <div class="blog even">
                        <!--IMAGE-->
                        <div class="image">
                            <img alt="blog-image" src="images/blog/time-square.jpeg"/>
                            <div class="image-overlay"></div>
                        </div>
                        <!--DETAILS-->
                        <div class="content">
                            <h6>8 effective tips for time management</h6>
                            <p>
                                Are you a busy person overwhelmed with a bunch of tasks and trying to manage to do everything on time and properly? Or are you a person that always strives to achieve more and work harder, but the results are still unsatisfactory? Here are the most effective and useful 8 tips that really worked for me.
                            </p>
                            <a href="#" data-toggle="modal" data-target="#post-2">Read More</a>
                        </div>
                    </div>
                    <!--BLOG ODD-->
                    <div class="blog odd">
                        <!--IMAGE-->
                        <div class="image">
                            <img alt="blog-image" src="images/blog/speech-square.jpg"/>
                            <div class="image-overlay"></div>
                        </div>
                        <!--DETAILS-->
                        <div class="content">
                            <h6>How to deliver a successful speech</h6>
                            <p>
                                When you have something important, reasonable and valuable to tell people, the best way is to have a public speech in front of them. However, almost 74% of people suffer from speech anxiety. The ability to have a powerful and influential speech will open many doors for you. Here are some pieces of advice that can help you to become a better public speaker.

                            </p>
                            <a href="#" data-toggle="modal" data-target="#post-3">Read More</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>






<!--==========================================
                  CONTACT
===========================================-->
<section id="contact" class="section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="section-title">
            <h4 class="text-uppercase text-center"><i class="title-icon fa fa-envelope"></i>Contact</h4>
            <h5 class="text-center">Anytime is a perfect time to cantact me for any questions.</h5>
        </div>
        <div class="row">
            <div id="contact-card" class="col-md-7 col-sm-12 col-xs-12">
                <!-- CONTACT FORM -->
                <div class="card">
                    <div class="card-content">
                        <form id="contact-form" name="c-form" action="php/mail_handler.php" method="post">
                            <!-- NAME -->
                            <div class="input-field">
                                <input id="first_name" type="text" class="validate" name="first_name" required>
                                <label for="first_name"><i class="fa fa-user"></i> Name</label>
                            </div>
                            <!--SUBJECT-->
                            <div class="input-field">
                                <input id="sub" type="text" class="validate" name="sub">
                                <label for="sub"><i class="fa fa-hashtag"></i> Subject</label>
                            </div>
                            <!--EMAIL-->
                            <div class="input-field">
                                <input id="email" type="email" class="validate" name="email" required>
                                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            </div>
                            <!--MESSAGE-->
                            <div class="input-field">
                                <textarea id="textarea1" class="materialize-textarea" name="message"
                                          required></textarea>
                                <label for="textarea1"><i class="fa fa-edit"></i> Message</label>
                            </div>
                            <!-- SEND BUTTON -->
                            <div class="contact-send">
                                <button id="submit" name="contactSubmit" type="submit" value="Submit"
                                        class="btn waves-effect">Send <i class="fa fa-send"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <!--FORM LOADER-->
                    <div id="form-loader" class="progress is-hidden">
                        <div class="indeterminate"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-sm-12 col-xs-12">
                <!-- QUOTE TIME -->

                <div id="quote" class="card text-center">
                    <h3 class="text-uppercase">Quote Time!</h3>
                    <img src="images/lamp.png" class="img-responsive">
                    <p><b>Get your quote before you leave.</b><br>
                    Click on the icon.</p>
                    <i id="randomQuote" class="fa fa-random" ></i>


                    <h5 id="randomQ"></h5>


                </div>
            </div>

        </div>
    </div>
</section>

<!--SCROLL TO TOP-->
<div id="scroll-top">
    <div id="scrollup"><i class="fa fa-angle-up"></i></div>
</div>

<!--==========================================
                      FOOTER
===========================================-->

<footer>
    <div class="footer text-center">
        <h5>Liked this? Let's connect on <a href="https://www.linkedin.com/in/elina-hovakimyan/" target="_blank">LinkedIn</a>!</h5>
        <p>
            elinahovakimyan@gmail.com <br>
            +37455855615
        </p>
    </div>
</footer>

<!-- ================== SCRIPTS ================== -->
<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.0/js/materialize.min.js"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR API KEY"></script> -->
<!-- <script src="javascript/markerwithlabel.min.js"></script> -->
<!-- <script src="javascript/retina.min.js"></script> -->
<script src="javascript/scrollreveal.min.js"></script>
<script src="javascript/jquery.touchSwipe.min.js"></script>
<script src="javascript/custom.js"></script>


</body>
</html>
