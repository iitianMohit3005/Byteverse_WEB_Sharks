<?php 
    $showAlert = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $server = "localhost";
        $database = "hackathon";
        
        $conn = mysqli_connect($server, "root", "Pratham@09", $database);
        
        if(!$conn){
            die("Error". mysqli_connect_error());
        }

        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql = "Select * from users where uname='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if($num==1){
            $login = true;
            session_start();
            $_SESSION['username'] = $username;
            header("Location: index.php");
        }
        else{
            $login = false;
            $showAlert = true;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Created BY - Sagar Developer -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Login and Signup Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
 
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></s>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Eczar&family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- CSS FILE LINK -->
    <link rel="stylesheet" href="css\login.css">
    <!-- Boxicons CSS LINK -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php 
        if($showAlert){
            echo '<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Invalid username and password</strong>
          </div>';
        }
    ?>
    <section class="container forms">
        <!-- Login Form -->
        <div class="form login">
            <!-- form-container start -->
            <div class="form-content">
                <h2 class="heading">Login</h2>
                <form action="/hackathon/login.php" method="POST">
                    <!-- Email filed -->
                    <div class="field input-field">
                        <input type="text" placeholder="User name" class="input" name="username" required>
                    </div>
                    <!-- Password Filed -->
                    <div class="field input-field">
                        <input type="password" placeholder="Password" class="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,30}" title="Must contain atleast one number and one uppercase and lowercase letter, and 8 to 30 characters" required>
                        <i class='bx bx-hide eye-icon'></i>
                    </div>
                    <!-- Forgot Password -->
                    <div class="form-link">
                        <a href="#" class="forgot-pass">Forgot password?</a>
                    </div>
                    <!-- Login Button -->
                    <div class="field button-field">
                        <button type="submit">Login</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
                </div>
            </div>
            <!-- form-container close -->

            <div class="line"></div>
            <!-- Login With Social Media -->
            <div class="media-options">
                <a href="#" class="field facebook">
                    <i class='bx bxl-facebook facebook-icon'></i>
                    <span>Login with Facebook</span>
                </a>
            </div>
            <div class="media-options">
                <a href="#" class="field google">
                    <img src="‫images\google.png" alt="" class="google-img">
                    <span>Login with Google</span>
                </a>
            </div>
        </div>
        
        <!-- Signup Form -->
        <div class="form signup">
            <!-- form-container start -->
            <div class="form-content">
                <h2 class="heading">Signup</h2>
                <form action="/hackathon/formsubmit.php" method="POST">
                    <!-- Name Field -->
                    <div class="field input-field">
                        <input type="text" placeholder="User Name" class="input" name="username" required>
                    </div>
                    <!-- Email Field -->
                    <div class="field input-field">
                        <input type="email" placeholder="Email" class="input" name="email" required>
                    </div>
                    <!-- Password Field -->
                    <div class="field input-field">
                        <input type="password" placeholder="Create Password" name="password" class="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,30}" title="Must contain atleast one number and one uppercase and lowercase letter, and 8 to 30 characters" required>
                        <i class='bx bx-hide eye-icon'></i>
                    </div>
                    <!-- Confirm Password Field -->
                    <div class="field input-field">
                        <input type="password" placeholder="Confirm Password" name="confpassword" class="password" required>
                    </div>
                    <!-- SignUp Button -->
                    <div class="field button-field">
                        <button type="submit">Signup</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                </div>
            </div>
            <!-- form-container close -->

            <div class="line"></div>
            <!-- Login With Social Media -->
            <div class="media-options">
                <a href="#" class="field facebook">
                    <i class='bx bxl-facebook facebook-icon'></i>
                    <span>Login with Facebook</span>
                </a>
            </div>
            <div class="media-options">
                <a href="#" class="field google">
                    <img src="‫images\google.png" alt="" class="google-img">
                    <span>Login with Google</span>
                </a>
            </div>

        </div>
    </section>

    <!-- JavaScript FILE LINK -->
    <script src="login.js"></script>
</body>

</html>