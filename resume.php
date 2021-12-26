<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="8">
        <title>Apurba kumar</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <section>
            <nav>
                <a href="" class="name">Apurba Kumar</a>
                <ul>
                    <li><a href="/register/resume.php" class="home">Home</a></li>\
                    <li><a href="/register/about.php" class="about">About</a></li>
                    <li><a href="/register/contact.php" class="contact">Contact</a></li>
                    <li><a href="/register/feedback.php" class="feedback">Feed Back</a></li>
                    <li><a href="/register/LogOut.php" class="logout">Log Out</a></li>
                    
                    
                </ul>
            </nav>
            <div class="about-container">
        
                <div class="text-container">
                <p>About Me</p>
                <p>Student</p>
                <p>Computer Science Engineer</p>
                <p>Hey, I feel obligated to introduce myself. It can be difficult
                 to begin an introduction because you are so familiar with 
                 yourself. Let me try to gauge your impression of myself
                 based on my self-description. I hope my perception of 
                 myself and your perception of me are similar.</p>
            </div>
            </div>
            <img src="images/apu.jpg" class="model"alt="model">
        </section>
        <div class="details">
        <div class="details-text">
        <p>Personal Details</p>
         
        </div>
        <div class="box-container">
            <div class="box-1">
                <h4>ADDRESS<br><p>Adador, shamoli, Dhaka 1217</p></h4>
            </div>
            <div class="box-2">
                <h4>EDUCTION <br>
                    <li><h5>1. University of liberal Arts Bangladesh</h5></li>
                    <li><h5>2. Naogaon Polytechnic Institute</h5></li>
                    <li><h5>3. Puia Adarsha High School </h5></li>
                 </h4>
            </div>
            <div class="box-3">
                <h4>Contact No. <br><h5>01774775504</h5></h4>
            </div>
        </div>
        </div>
        <div class="hobbies">
            <div class="hobbies-text">
            <p>Hobbies</p>
             
            </div>
            <div class="box-container">
                <div class="box-1">
                    <img src="images/cyclist.webp" alt="cycling">
                    <h4>Cycling</h4>
                     <p>I have been cycling my whole life and I am never planning on quitting it.</p>
                </div>
                <div class="box-2">
                    <img src="images/CoxsBazar-Tour.png" alt="">
                    <h4>Travelling</h4>
                    <p>Travelling makes me feel free like a bird which always facinates me.</p>
                </div>
                <div class="box-3">
                    <img src="images/beautiful_bangladesh_18.jpg" alt="">
                    <h4>Football</h4><p>I like playing football very much.</p>
                </div>
            </div>
            </div>

            <div class="slideshow">
                <div class="slideshow-text">
                    <p>Slide Show</p>
                </div>
            <div id="slider">
                <figure>
                    <img src="images/apurba.jpg" class="oneimag">
                    <img src="images/one.jpg" class="twoimag">
                    <img src="images/two.jpg" class="threeimag">
                    <img src="images/three.jpg" class="fourimag">
                     
                </figure>
             </div>
           </div>

        <div class="video">
            <div class="video-text">
                <p>Video</p>
            </div>
            <div class="display">
             <iframe width="700" height="400"
              src="https://www.youtube.com/embed/tgbNymZ7vqY">
            </iframe>
           </div>
        </div>
        <div class="copyright">
            <div class="socialIcon">
            <a href="https://www.facebook.com/Apurbakumar96s/" class="fa fa-facebook"></a>
            <a href="https://twitter.com/surjokumar96" class="fa fa-twitter"></a>
            <a href="https://www.instagram.com/apurba_kumar_surjo/" class="fa fa-instagram"></a>
            </div>
            <div class="container">
               <p>© 2021 All Rights Reserved.</p>
            </div>
         </div>
    </body>
    
</html>