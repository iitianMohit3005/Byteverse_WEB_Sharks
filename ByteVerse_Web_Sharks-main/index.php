<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive website</title>
    <!--hamburger and close icons-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Eczar&family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<!--swiper js-->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\profile.css">
</head>
<body>
    <nav>
        <div class="container nav__container"><a href=index.html><img src="‫images\mch1.jpg" id="logo" alt=""></a>
            <ul class="nav__menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="games.php">Games</a></li>
                <li><a href="doubts.php">Ask your doubts</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <?php if(isset($_SESSION['username'])){
                    echo '<li style="background-color: grey;" class="user-pic" onclick="toggleMenu()">&nbsp;&nbsp;&nbsp;'. ucfirst($_SESSION['username'][0]) .'</li>';
                } 
                else{
                    echo'<li><a href="login.php">login</a></li>';
                }
                ?>
            </ul>
        <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
        <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        
    </div>
    <div class="sub-menu-wrap" id="subMenu">
        <div class="sub-menu">
            <div class="user-info">
                <h4><?php echo $_SESSION['username']; ?></h4>
            </div>
            <hr>
            <a href="profile.php" class="sub-menu-link">
                <i class="fa-solid fa-user"></i>
                <p>My Profile</p>
                <span>></span>
            </a>
            <a href="StudyPlan.php" class="sub-menu-link">
                <i class="fa-solid fa-gear"></i>
                <p>My Study Plan</p>
                <span>></span>
            </a>
            <a href="contact.php" class="sub-menu-link">
                <i class="fa-solid fa-circle-info"></i>
                <p>Help & Support</p>
                <span>></span>
            </a>
            <a href="logout.php" class="sub-menu-link">
                <i class="fa-solid fa-right-from-bracket"></i>
                <p>Logout</p>
                <span>></span>
            </a>
           
        </div>
    </div>
    </nav>
    <!--==================End of navbar=================-->
    <header>
        <div class="container header__container">
            <div class="header__left">
                <h1>Grow your skills to advance your career path</h1>
                <p>
                    We help you to build your career and suggest you better study plans according to your interests and academic level.
                </p>
                <?php
                if(!isset($_SESSION['username'])){
                    echo '<a href="login.php" class="btn btn-primary">Login/Signup</a>';
                }
                else{
                    echo 'You can go to our Ask Your Doubts section and ask your queries related to your career.';
                }
                ?>
            </div>
            <div class="header__right">
                <div class="header__right-image">
                    <img src="‫images\image1.jpg">
                </div>
            </div>

        </div>
    </header>
    <!--==================Endd of header =====================-->

    <section class="categories">
        <div class="container categories__container">
            <div class="categories__left">
                <h1>Categories</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate modi pariatur dolores inventore accusantium in culpa maxime qui cum beatae tempora ex, ullam explicabo nulla ut cumque corrupti laboriosam doloribus ea et dicta adipisci! Doloremque commodi corporis quae vitae eius.</p>
                <a href="#" class="btn">Explore</a>
            </div>
            <div class="categories__right">
                <article class="category">
                    <span class="category__icon"><i class="uil uil-arrow-right"></i></span>
                    <h3>Opportunity1</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, possimus Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam, amet?.</p>
                </article>
                <article class="category">
                    <span class="category__icon"><i class="uil uil-arrow-right"></i></span>
                    <h3>Opportunity1</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, possimus Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam, amet?.</p>
                </article>
                <article class="category">
                    <span class="category__icon"><i class="uil uil-arrow-right"></i></span>
                    <h3>Opportunity1</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, possimus Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam, amet?.</p>
                </article>
            </div>
        </div>
    </section>
    <!--==========================end of categories============-->
    <section class="faqs">
        <h2>Frequently Asked Questions</h2>
        <div class="container faqs__container">
            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i>
                    <div class="question__answer">
                        <h4>
                            How do i know the right course for me?
                        </h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio possimus non commodi ea! Minima, eaque laborum pariatur ratione, ad nulla labore aliquid harum maiores omnis, ducimus tempore voluptates exercitationem voluptas?
                        </p>
                    </div>
                </div>
            </article>
            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i>
                    <div class="question__answer">
                        <h4>
                            How do i know the right course for me?
                        </h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio possimus non commodi ea! Minima, eaque laborum pariatur ratione, ad nulla labore aliquid harum maiores omnis, ducimus tempore voluptates exercitationem voluptas?
                        </p>
                    </div>
                </div>
            </article>
            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i>
                    <div class="question__answer">
                        <h4>
                            How do i know the right course for me?
                        </h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio possimus non commodi ea! Minima, eaque laborum pariatur ratione, ad nulla labore aliquid harum maiores omnis, ducimus tempore voluptates exercitationem voluptas?
                        </p>
                    </div>
                </div>
            </article>
            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i>
                    <div class="question__answer">
                        <h4>
                            How do i know the right course for me?
                        </h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio possimus non commodi ea! Minima, eaque laborum pariatur ratione, ad nulla labore aliquid harum maiores omnis, ducimus tempore voluptates exercitationem voluptas?
                        </p>
                    </div>
                </div>
            </article>
            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i>
                    <div class="question__answer">
                        <h4>
                            How do i know the right course for me?
                        </h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio possimus non commodi ea! Minima, eaque laborum pariatur ratione, ad nulla labore aliquid harum maiores omnis, ducimus tempore voluptates exercitationem voluptas?
                        </p>
                    </div>
                </div>
            </article>
            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i>
                    <div class="question__answer">
                        <h4>
                            How do i know the right course for me?
                        </h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio possimus non commodi ea! Minima, eaque laborum pariatur ratione, ad nulla labore aliquid harum maiores omnis, ducimus tempore voluptates exercitationem voluptas?
                        </p>
                    </div>
                </div>
            </article>
            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i>
                    <div class="question__answer">
                        <h4>
                            How do i know the right course for me?
                        </h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio possimus non commodi ea! Minima, eaque laborum pariatur ratione, ad nulla labore aliquid harum maiores omnis, ducimus tempore voluptates exercitationem voluptas?
                        </p>
                    </div>
                </div>
            </article>
            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i>
                    <div class="question__answer">
                        <h4>
                            How do i know the right course for me?
                        </h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio possimus non commodi ea! Minima, eaque laborum pariatur ratione, ad nulla labore aliquid harum maiores omnis, ducimus tempore voluptates exercitationem voluptas?
                        </p>
                    </div>
                </div>
            </article>
            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i>
                    <div class="question__answer">
                        <h4>
                            How do i know the right course for me?
                        </h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio possimus non commodi ea! Minima, eaque laborum pariatur ratione, ad nulla labore aliquid harum maiores omnis, ducimus tempore voluptates exercitationem voluptas?
                        </p>
                    </div>
                </div>
            </article>
            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i>
                    <div class="question__answer">
                        <h4>
                            How do i know the right course for me?
                        </h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio possimus non commodi ea! Minima, eaque laborum pariatur ratione, ad nulla labore aliquid harum maiores omnis, ducimus tempore voluptates exercitationem voluptas?
                        </p>
                    </div>
                </div>
            </article>
            
            <!--==============end of faqs====================-->

        </div>
    </section>
    <!--==============end of FAQs===========-->
    <section class="container testimonials__Container mySwiper">
        <h2>
            Students' Testimonials
        </h2>
        <div class="swiper-wrapper">
        <article class="testimonial swiper-slide">
            <div class="avatar">
                <img src="‫images\img3.jpg" alt="">
            </div>
            <div class="testimonial__info">
                <h5>Diana Roberts</h5>
                <small>Student</small>
            </div>
            <div class="testimonial__body">
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non sapiente maiores veritatis vel fugiat, at provident ex a, incidunt accusantium iusto rerum soluta! Error ipsam, provident minus rem iste architecto?
                </p>
            </div>
        </article>
        <article class="testimonial swiper-slide">
            <div class="avatar">
                <img src="‫images\img3.jpg" alt="">
            </div>
            <div class="testimonial__info">
                <h5>Diana Roberts</h5>
                <small>Student</small>
            </div>
            <div class="testimonial__body">
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non sapiente maiores veritatis vel fugiat, at provident ex a, incidunt accusantium iusto rerum soluta! Error ipsam, provident minus rem iste architecto?
                </p>
            </div>
        </article>
        <article class="testimonial swiper-slide">
            <div class="avatar">
                <img src="‫images\img3.jpg" alt="">
            </div>
            <div class="testimonial__info">
                <h5>Diana Roberts</h5>
                <small>Student</small>
            </div>
            <div class="testimonial__body">
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non sapiente maiores veritatis vel fugiat, at provident ex a, incidunt accusantium iusto rerum soluta! Error ipsam, provident minus rem iste architecto?
                </p>
            </div>
        </article>
        <article class="testimonial swiper-slide">
            <div class="avatar">
                <img src="‫images\img3.jpg" alt="">
            </div>
            <div class="testimonial__info">
                <h5>Diana Roberts</h5>
                <small>Student</small>
            </div>
            <div class="testimonial__body">
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non sapiente maiores veritatis vel fugiat, at provident ex a, incidunt accusantium iusto rerum soluta! Error ipsam, provident minus rem iste architecto?
                </p>
            </div>
        </article>
        <div class="testimonial swiper-slide">
            <div class="avatar">
                <img src="‫images\img3.jpg" alt="">
            </div>
            <div class="testimonial__info">
                <h5>Diana Roberts</h5>
                <small>Student</small>
            </div>
            <div class="testimonial__body">
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non sapiente maiores veritatis vel fugiat, at provident ex a, incidunt accusantium iusto rerum soluta! Error ipsam, provident minus rem iste architecto?
                </p>
            </div>
        </article>
</div>
</div>
<div class="swiper-pagination"></div>
    </section>


<footer class="footer">
    <div class="container footer__container">
        <div class="footer__1">
            <a href="index.php" class="footer__logo"><h4>LOGO</h4></a>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod possimus excepturi eveniet laboriosam delectus veritatis beatae commodi quia illum quibusdam.
            </p>
        </div>
        <div class="footer__2">
            <h4>Permalinks</h4>
            <ul class="permalinks">
                <li><a href="index.php">Home</a></li>
                <li><a href="games.php">Games</a></li>
                <li><a href="doubts.php">Ask your doubts</a></li>
                <li><a href="about.php">About Us</a></li>
            </ul>
        </div>
        <div class="footer_3">
            <h4>Privacy</h4>
            <ul class="privacy">
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Terms and Conditions</a></li>
                <li><a href="#">Refund policy</a></li>
            </ul>
        </div>
        <div class="footer__4">
            <h4>Contact Us</h4>
            <div>
                <p>+01 234 567 8910</p>
                <p>muskmelon@gmail.com</p>
            </div>
        </div>
        <ul class="footer__socials">
            <li>
                <a href="#"><i class="uil uil-facebook"></i></a>
            </li>
            <li>
                <a href="#"><i class="uil uil-instagram"></i></a>
            </li>
            <li>
                <a href="#"><i class="uil uil-twitter"></i></a>
            </li>
            <li>
                <a href="#"><i class="uil uil-linkedin"></i></a>
            </li>
            
            
        </ul>
        
    </div>
    <div class="footer__copyright">
        <small>Copyright &copy; LOGO</small>
    </div>
</footer>



    
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="./main.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints:{
        600:{
            slidesPerView: 2
        }
      }
    });
    </script>
    <script>
            let subMenu = document.getElementById("subMenu");
            function toggleMenu(){
                subMenu.classList.toggle("open-menu");
            }
        </script>
</body>
</html>