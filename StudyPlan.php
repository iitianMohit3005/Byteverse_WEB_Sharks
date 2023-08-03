<?php
$Show = array();
session_start();
if(!isset($_COOKIE["user_details"]) || !$_COOKIE["user_details"]){
    header("Location: formsubmit.php");
}

$server = "localhost";
$database = "hackathon";
        
$conn = mysqli_connect($server, "root", "Pratham@09", $database);
        
if(!$conn){
    die("Error". mysqli_connect_error());
}
$username=$_SESSION['username'];
$sql = "Select interests from user_details where username='$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$field = $row[0];
$result = json_decode($field);
foreach ($result as $key => $value) {
    array_push($Show, $value[0]);
}
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
    <link rel="stylesheet" href="css\StudyPlan.css">
    <link rel="stylesheet" href="css\profile.css">
    
</head>
<body>
    <nav>
        <div class="container nav__container"><a href=index.php><img src="‫images\mch1.jpg" id="logo" alt=""></a>
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
            <a href="#" class="sub-menu-link">
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
    
    <?php 
    if(sizeof($Show)==0){
        echo '<section class="about__achievements">
        <div class="container about__achievements-container">
        <h1>Till Now You have not showed any interest. Go to My Profile and then Edit your profile.</h1>
        </div>
     </section>';
    }
    if(in_array("webd",$Show)){
        echo '<section class="about__achievements">
        <div class="container about__achievements-container">
         <div class="about__achievements-left">
         <img src="‫images\webd.jpg"alt="">
         </div>
         <div class="about__achievements-right">
             <h1>Web Development</h1>
             <p>Web development refers to the creating, building, and maintaining of websites. It includes aspects such as web design, web publishing, web programming, and database management. It is the creation of an application that works over the internet i.e. websites.
            </p>
            <ol>
             <li>1. Understand the key concepts of visual design</li>
             <li>2. Know the basics of HTML</li>
             <li>3. Understand CSS</li>
             <li>4. Learn the foundation of UX design</li>
             <li>5. Familiarize yourself with UI design</li>
             <li>6. Understand the basics of creating layouts</li>
             <li>7. Learn about typography</li>
             <li>8. Put your knowledge into action and build something</li>
             <li>9. Get a mentor</li>
            </ol>
        </div>
        </div>
     </section>';
    }

    if(in_array("appd",$Show)){
        echo '<section class="about__achievements">
        <div class="container about__achievements-container">
         <div class="about__achievements-left">
         <img src="‫images\appd.jpeg"alt="">
         </div>
         <div class="about__achievements-right">
             <h1>App Development</h1>
             <p>Mobile application development is the process of creating software applications that run on a mobile device, and a typical mobile application utilizes a network connection to work with remote computing resources.
            </p>
            <ol>
             <li>1. Learn the Basics of Programming</li>
             <li>2. Attend a Coding Bootcamp</li>
             <li>3. Degree</li>
             <li>4. Choose an Appropriate Central Platform</li>
             <li>5. Get Experience Building and Testing Apps</li>
             <li>6. Get a mentor</li>
            </ol>
        </div>
        </div>
     </section>';
    }

    if(in_array("po",$Show)){
        echo '<section class="about__achievements">
        <div class="container about__achievements-container">
         <div class="about__achievements-left">
         <img src="‫images\dsa.png"alt="">
         </div>
         <div class="about__achievements-right">
             <h1>Data Structures and Algorithms</h1>
             <p>A data structure is defined as a particular way of storing and organizing data in our devices to use the data efficiently and effectively. The main idea behind using data structures is to minimize the time and space complexities. An efficient data structure takes minimum memory space and requires minimum time to execute the data.
            </p>
             <p>Algorithm is defined as a process or set of well-defined instructions that are typically used to solve a particular group of problems or perform a specific type of calculation. To explain in simpler terms, it is a set of operations performed in a step-by-step manner to execute a task.
            </p>
            
            <ol>
            <p>The complete process to learn DSA from scratch can be broken into 4 parts:
            </p>
             <li>1. Learn about Time and Space complexities</li>
             <li>2. Learn the basics of individual Data Structures</li>
             <li>3. Learn the basics of Algorithms</li>
             <li>4. Practice Problems on DSA</li>
            </ol>
        </div>
        </div>
     </section>';
    }

    if(in_array("mlai",$Show)){
        echo '<section class="about__achievements">
        <div class="container about__achievements-container">
         <div class="about__achievements-left">
         <img src="‫images\MLAI.png"alt="">
         </div>
         <div class="about__achievements-right">
             <h1>ML/AI</h1>
             <p>Artificial intelligence (AI) generally refers to processes and algorithms that are able to simulate human intelligence, including mimicking cognitive functions such as perception, learning and problem solving. Machine learning and deep learning (DL) are subsets of AI.
            </p>
             <p>Machine learning (ML) is a subset of AI that falls within the “limited memory” category in which the AI (machine) is able to learn and develop over time.
            </p>
            <h1>How to Learn ML/AI</h1>
            <p>
            In addition to online courses and data science bootcamps, you can also learn artificial intelligence through a bachelors or masters program in artificial intelligence. These programs include a strong background in computer science and provide a much broader education than an online course or a bootcamp.
            </p>
            <p>
            However, individual courses and bootcamps focus exclusively on the skills you need to learn to qualify for a career in AI. You do not have to take general education courses, such as history and psychology. This guide focuses on online courses and bootcamps.
            </p>
            <ol>
             <h1 size=10>Online Courses:</h1>
             <li><a href="https://www.coursera.org/courses?query=artificial%20intelligence">Coursera</a></li>
             <li><a href="https://www.edx.org/learn/artificial-intelligence">edX</a></li>
             <li><a href="https://www.udemy.com/courses/search/?q=artificial+intelligence&src=sac&kw=artificia">Udemy</a></li>
             <li><a href="https://ai.google/education/">Google</a></li>
             <li><a href="https://www.exed.hbs.edu/competing-age-ai-virtual/?ppc=dk_aiv_google&utm_campaign=HBSE_Harvard+Business+School_SEM_Google_Non-Brand_Program_AIV_National_None_Exact_Cross+Device_USA&utm_medium=SEM&utm_source=GOOGLE&utm_term=artificial+intelligence+online+course&gclid=Cj0KCQiAsqOMBhDFARIsAFBTN3c8ZkJp35a2wJfqoXPGdLL5cnw1YcVJc6g3NSPQy_06UAB5PcQYkwAaAi8PEALw_wcB&gclsrc=aw.ds">Harvard Business School</a></li>
            </ol>
        </div>
        </div>
     </section>';
    }
    if(in_array("arvr",$Show)){
        echo '<section class="about__achievements">
        <div class="container about__achievements-container">
         <div class="about__achievements-left">
         <img src="‫images\ARVR.png"alt="">
         </div>
         <div class="about__achievements-right">
             <h1>AR/VR</h1>
             <p>Augmented reality (AR) and Virtual Reality (VR) bridge the digital and physical worlds. They allow you to take in information and content visually, in the same way you take in the world. AR dramatically expands the ways our devices can help with everyday activities like searching for information, shopping, and expressing yourself. VR lets you experience what its like to go anywhere — from the front row of a concert to distant planets in outer space.
            </p>
            
            <ul type="disc">
            <p>You will need:
            </p>
            <li>&nbsp;</li>
             <li>Commitment: Our VR and AR courses are flexible, fast, and designed to fit around your schedule. You will need to study for a few hours every day to stay on track.</li>
             <li>&nbsp;</li>
             <li>Notes: Taking notes during your online lectures is a great way to flag any potential problems.</li>
             <li>&nbsp;</li>
             <li>Collaboration: While learning VR and AR, you’ll be working with industry mentors and an online peer network. Nobody studies alone.</li>
             <li>&nbsp;</li>
             <li>Knowledge: VR tech and best-practice are changing all the time. RMIT Online will keep you up-to-date.</li>
            </ul>
            <p>You can refer <a href="https://online.rmit.edu.au/course/sc-designing-and-developing-vr-and-ar-applications-var201"><b><i>online course</i></b></a> as well.</p>
        </div>
        </div>
     </section>';
    }

    if(in_array("bc",$Show)){
        echo '<section class="about__achievements">
        <div class="container about__achievements-container">
         <div class="about__achievements-left">
         <img src="‫images\blockchain.png"alt="">
         </div>
         <div class="about__achievements-right">
             <h1>Blockchain</h1>
             <p>A blockchain is a distributed database or ledger that is shared among the nodes of a computer network. As a database, a blockchain stores information electronically in digital format. Blockchains are best known for their crucial role in cryptocurrency systems, such as Bitcoin, for maintaining a secure and decentralized record of transactions. The innovation with a blockchain is that it guarantees the fidelity and security of a record of data and generates trust without the need for a trusted third party.
            </p>
            
            <ol>
             <li>1. Start With Academics: To become a blockchain developer, one must first acquire a strong academic background in computer science or mathematics.</li>
             <li>&nbsp;</li>
             <li>2. Get Proficient With Required Tech Skills: 
                 <ul>
                     <li>&nbsp;&nbsp;Programming Languages</li>
                     <li>&nbsp;&nbsp;Data Structures</li>
                     <li>&nbsp;&nbsp;Databases and Networking</li>
                     <li>&nbsp;&nbsp;Cryptography</li>
                 </ul>
             </li>
             <li>&nbsp;</li>
             <li>3. Understanding the Basics of Blockchain</li>
             <li>&nbsp;</li>
             <li>4. Learn About Cryptonomics</li>
            </ol>
        </div>
        </div>
     </section>';
    }

    if(in_array("uiux",$Show)){
        echo '<section class="about__achievements">
        <div class="container about__achievements-container">
         <div class="about__achievements-left">
         <img src="‫images\UIUX.png"alt="">
         </div>
         <div class="about__achievements-right">
             <h1>UI/UX Design</h1>
             <p>A UI (User Interface) deals with the applications graphical layout, which includes buttons, screen layout, animations, transitions, micro-interactions, and so on. In short, UI is all about how things look.
            </p>
             <p>UX (User Experience) design deals with how users interact with the system. Logical navigation and how smooth and intuitive the experience is all fall under UX design. In short, this type of design helps users have a positive experience.
            </p>
            
            <ol>
             <li>1. Learn the fundamentals of UX design</li>
             <li>2. Develop an eye for good design
             </li>
             <li>3. Invest in the right design software</li>
             <li>4. Build a portfolio of work</li>
             <li>5. Ask for feedback (and learn from it)</li>
             <li>6. Get real-world work experience</li>
            </ol>
        </div>
        </div>
     </section>';
    }

    

    ?>
    
    <div>&nbsp;</div>
    <div>&nbsp;</div>
    <!--======================END OF ACHIEVEMENTS=======================-->

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
        <script src="./main.js"></script>
        <script>
            let subMenu = document.getElementById("subMenu");
            function toggleMenu(){
                subMenu.classList.toggle("open-menu");
            }
        </script>
      </body>
    </html>