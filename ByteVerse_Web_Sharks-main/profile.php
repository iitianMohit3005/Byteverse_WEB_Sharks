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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"><!--extra font awesome i have put-->


    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\profile.css">

</head>
<body>
    <div class="hero">
    <nav>
        <div class="container nav__container"><a href=index.html><img src="‫images\mch1.jpg" id="logo" alt=""></a>
        <ul class="nav__menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="games.php">Games</a></li>
            <li><a href="doubts.php">Ask your doubts</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>
         <!--- <li><a href="profile.html"><i class="fa-solid fa-user"></i></a></li>--->
    <li style="background-color: grey;" class="user-pic" onclick="toggleMenu()">&nbsp;&nbsp;&nbsp;<?php echo ucfirst($_SESSION['username'][0]); ?></li>
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
            <a href="formsubmit.php" class="sub-menu-link">
                <i class="fa-solid fa-user"></i>
                <p>Edit Profile</p>
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
    </div>
    <!--==================End of navbar=================-->
    <div class="hi">
    
    <h1><?php echo 'Welcome '. $_SESSION['username']; ?></h1>
    </div>

    <!--===========================start footer=======================-->
    <footer class="footer">
        <div class="container footer__container">
            <div class="footer__1">
                <a href="index.html" class="footer__logo"><h4>LOGO</h4></a>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod possimus excepturi eveniet laboriosam delectus veritatis beatae commodi quia illum quibusdam.
                </p>
            </div>
            <div class="footer__2">
                <h4>Permalinks</h4>
                <ul class="permalinks">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="games.php">Games</a></li>
                    <li><a href="doubt.php">Ask your doubts</a></li>
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
                    <p>mycareerhiveSupport@gmail.com</p>
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
        <script src="./main.js"></script>
        <script>
            let subMenu = document.getElementById("subMenu");
            function toggleMenu(){
                subMenu.classList.toggle("open-menu");
            }
        </script>
      </body>
    </html>