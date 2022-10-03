<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>myPROJECT</title>

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('/css/home.css')}}">

    <link rel="stylesheet" href="{{asset('/bootstrap/bootstrap.min.css')}}">

    <script src="{{asset('/jquery/jquery-3.2.1.min.js')}}"></script>
</head>
<body>
    <!---- header ---->
    <header>
        <div class="container-fluid sticky header">
            <div class="logo">
                <img src="../../img/logo.png" alt="">
            </div>
            <div class="nav">
                <ul>
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="#aboutme">About Me</a></li>
                    <li><a href="#myservice">Services</a></li>
                    <li><a href="#myportfolio">My Portifolio</a></li>
                    <li><a href="#mycontact">Contact</a></li>
                </ul>
            </div>
            <div class="sub-nav">
                <i class='bx bx-menu' id="sub-menu"></i>
                <div class="none sub-menu">
                    <ul>
                        <li><a href="#home" class="active">Home</a></li>
                        <li><a href="#aboutme">About Me</a></li>
                        <li><a href="#myservice">Services</a></li>
                        <li><a href="#myportfolio">My Portifolio</a></li>
                        <li><a href="#mycontact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!----- home text describe ----->
    <section class="container-fluid home" id="home">
        <div class="txt-describe">
            <h4>Hello</h4>
            <p>I'M SOVANKIRY</p>
            <span>(Call me KIRY)</span>
            <h2>Front-End Developer</h2>
            <button type="button"><a href="#">Hire Me</a></button>
        </div>
    </section>

    <!----- about me ----->
    <section class="container-fulid aboutme" id="aboutme">
        <div class="aboutme-img">
            <img src="../../img/about1.png" alt="">
        </div>
        <div class="aboutme-txt">
            <h1>About <span>Me</span> </h1>
            <h3>Hi guys, I am Here To Help Your Next Project.</h2>
            <p>If the adjectives you use to describe yourself are 
                irrelevant to the job, chances are the HR manager won't 
                be impressed. Likewise, anyone can say they are creative 
                and hardworking. You need to follow up the adjectives with 

                examples of how you demonstrate that quality. </p>
                <div class="about-position">

                    <div class="about-in">
                        <h5>1. Problem Solving</h5>
                    </div>

                    <div class="about-in">
                        <h5>2. Search a lot</h5>
                    </div>

                    <div class="about-in">
                        <h5>3. Creative Ideas</h5>
                    </div>

                    <div class="about-in">
                        <h5>4. High Quality</h5>
                    </div>

                </div>
            <button type="button"><a href="#">Hire Me</a></button>
        </div>
    </section>

    <!----- My Service ----->
    <section class="container-fulid myservice" id="myservice">

        <div class="main-text">
            <h2>My Services</h2>
            <h4>Better Design, Better Experiences</h4>
        </div>

        <div class="service-content">
            <div class="box">
                <img src="../../img/serv2.png" alt="">
                <h3>Web Application Design</h3>
                <p>If the adjectives you use to describe yourself are 
                    irrelevant to the job, chances are the HR manager won't 
                    be impressed.</p>
            </div>

            <div class="box">
                <img src="../../img/serv1.png" alt="">
                <h3>Mobile Application Design</h3>
                <p>If the adjectives you use to describe yourself are 
                    irrelevant to the job, chances are the HR manager won't 
                    be impressed.</p>
            </div>

            <div class="box .box3">
                <img src="../../img/serv3.png" alt="">
                <h3>Photo Design</h3>
                <p>If the adjectives you use to describe yourself are 
                    irrelevant to the job, chances are the HR manager won't 
                    be impressed.</p>
            </div>
        </div>
    </section>

    <!----- Portfolio ----->
    <section class="container-fulid myportfolio" id="myportfolio">
        <div class="main-text">
            <h2>My Portfolio</h2>
            <h4>Some of My Distinguished Works</h4>
        </div>
    
        <div class="portifolio-content">
            <div class="row">
                <img src="../../img/portfolio1.jpg" alt="">
                <div class="main-row">
                    <div class="row-txt">
                        <h6>Development</h6>
                    </div>
                    <div class="row-icon">
                        <i class="bx bx-heart"></i>
                    </div>
                </div>
                <h3>Mobile app landing design & Services</h3>
            </div>
    
            <div class="row">
                <img src="../../img/portfolio2.jpg" alt="">
                <div class="main-row">
                    <div class="row-txt">
                        <h6>Development</h6>
                    </div>
                    <div class="row-icon">
                        <i class="bx bx-heart"></i>
                    </div>
                </div>
                <h3>Mobile app landing design & Services</h3>
            </div>
    
            <div class="row">
                <img src="../../img/portfolio3.jpg" alt="">
                <div class="main-row">
                    <div class="row-txt">
                        <h6>Development</h6>
                    </div>
                    <div class="row-icon">
                        <i class="bx bx-heart"></i>
                    </div>
                </div>
                <h3>Mobile app landing design & Services</h3>
            </div>
    
            <div class="row">
                <img src="../../img/portfolio4.jpg" alt="">
                <div class="main-row">
                    <div class="row-txt">
                        <h6>Development</h6>
                    </div>
                    <div class="row-icon">
                        <i class="bx bx-heart"></i>
                    </div>
                </div>
                <h3>Website landing design & Services</h3>
            </div>
    
            <div class="row">
                <img src="../../img/portfolio5.jpg" alt="">
                <div class="main-row">
                    <div class="row-txt">
                        <h6>Development</h6>
                    </div>
                    <div class="row-icon">
                        <i class="bx bx-heart"></i>
                    </div>
                </div>
                <h3>Mobile app landing design & Services</h3>
            </div>
    
            <div class="row">
                <img src="../../img/portfolio7.jpg" alt="">
                <div class="main-row">
                    <div class="row-txt">
                        <h6>Development</h6>
                    </div>
                    <div class="row-icon">
                        <i class="bx bx-heart"></i>
                    </div>
                </div>
                <h3>Website landing design & Services</h3>
            </div>
        </div>
    </section>

    <!----- Contact ME ----->
    <section class="container-fulid mycontact" id="mycontact">
        <div class="contact-txt">
            <h2>Contact Me</h2>
            <h4>Let's Work Together</h4>
            <p>If the adjectives you use to describe yourself are 
                irrelevant to the job, chances are the HR manager won't 
                be impressed.</p>

            <div class="contact-list">
                <ul>
                    <li><a href="#">msovankiry@gmail.com</a></li>
                    <li><a href="#">+85593526404</a></li>
                </ul>
            </div>

            <div class="contact-icon">
                <a href="https://www.facebook.com/kirykmengslot/" target="_blank"><i class='bx bxl-facebook'></i></a>
                <a href="https://www.instagram.com/kiry_goodboy/" target="_blank"><i class='bx bxl-instagram'></i></a>
            </div>            
        </div>
        <div class="contact-form">
            <form action="">
                <input class="form-control" type="text" name="name" id="name" placeholder="Enter Your Name" autocomplete="off" required>
                <input class="form-control" type="email" name="email" id="email" placeholder="Enter Your Email" autocomplete="off" required>
                <input class="form-control" type="text" name="object-txt" id="objext-txt" placeholder="Enter Your Subject" autocomplete="off">
                <textarea name="message" id="message" cols="40" rows="10" placeholder="Enter Your Message" autocomplete="off"></textarea>
                <input type="submit" value="Submit" class="btn-send">
            </form>
        </div>
    </section>

    <div class="copyright">
        <p>Developed with love by SOVANKIRY © 2022</p>
    </div>

    <!----- scroll top ----->
    <a href="#" class="scroll-top"><i class='bx bxs-up-arrow'></i></a>


    <script type="text/javascript" src="../../js/scroll.js"></script>
    <script type="text/javascript" src="../../js/submenu.js"></script>
</body>
</html>
