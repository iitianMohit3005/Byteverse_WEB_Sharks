<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $server = "localhost";
        $database = "hackathon";
        
        $conn = mysqli_connect($server, "root", "Pratham@09", $database);
        
        if(!$conn){
            die("Error". mysqli_connect_error());
        }

        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $pass2 = $_POST["confpassword"];
        if($password == $pass2){
            $sql = "Select * from users";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result)+1;
            $sql3 = "Select * from users where uname='$username'";
            $result3 = mysqli_query($conn, $sql3);
            $num3 = mysqli_num_rows($result3);
            $sql1 = "Select * from users where uname='$username' AND password='$password'";
            $result1 = mysqli_query($conn, $sql1);
            $num1 = mysqli_num_rows($result1);

            if($num1==1){
                session_start();
                $_SESSION['username'] = $username;
                header("Location: index.php");
            }
            else if($num3==0){
                $sql2 = "INSERT INTO `users`(`Sno`, `uname`, `password`) VALUES('$num', '$username', '$password')";
                $result2 = mysqli_query($conn, $sql2);
                session_start();
                $_SESSION['username'] = $username;
            }
            else{
                $showAlert = "Username already exists";
                $login = false;
                header("Location: login.php");
            }
        }
        else{
            $showAlert = "Passwords do not match";
            header("Location: login.php");
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content=
        "width=device-width, initial-scale=1.0">
    <title>
        Build a Survey Form using HTML and CSS
    </title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Eczar&family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        .ab{
            margin-left: 20px;
        }
        /* Styling the Body element i.e. Color,
        Font, Alignment */
        h1{
            color:#fff
        }
        body {
            background-color: #1f2641;
            font-family: 'Montserrat', sans-serif;
            text-align: center;
        }

        /* Styling the Form (Color, Padding, Shadow) */
        form {
            background-color: #fff;
            max-width: 500px;
            margin: 50px auto;
            padding: 30px 20px;
            box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
        }

        /* Styling form-control Class */
        .form-control {
            text-align: left;
            margin-bottom: 25px;
            
        }

        /* Styling form-control Label */
        .form-control label {
            display: block;
            margin-bottom: 10px;
        }

        /* Styling form-control input,
        select, textarea */
        .form-control input,
        .form-control select,
        .form-control textarea {
            border: 1px solid #1f2641;
            border-radius: 2px;
            font-family: inherit;
            padding: 10px;
            display: block;
            width: 95%;
        }

        /* Styling form-control Radio
        button and Checkbox */
        .form-control input[type="radio"],
        .form-control input[type="checkbox"] {
            display: inline-block;
            width: auto;
        }

        /* Styling Button */
        button {
            color:#fff;
            background-color: #1f2641;
            border: 1px solid #1f2641;
            border-radius:2px;
            font-family: inherit;
            font-size: 21px;
            display: block;
            width: 100%;
            margin-top: 50px;
            margin-bottom: 20px;
        }
        button:hover{
    background: transparent;
    color: var(--color-white);
    border-color: var(--color-white);
        }
    </style>
</head>

<body>
    <h1>Please enter your details</h1>

    <!-- Create Form -->
    <form action="/hackathon/submission.php" method="POST" id="form">

        <!-- Details -->
        <div class="form-control">
            <label for="name" id="label-name">
                Name
            </label>

            <!-- Input Type Text -->
            <input type="text"
                   id="name"
                   placeholder="Enter your name" name="name" required/>
        </div>

        <div class="form-control">
            <label for="email" id="label-email">
                Email
            </label>

            <!-- Input Type Email-->
            <input type="email"
                   id="email"
                   placeholder="Enter your email" name="email" required/>
        </div>

        <div class="form-control">
            <label for="age" id="label-age">
                <h2>Name of institute</h2>
            </label>

            <!-- Input Type Text -->
            <input type="text"
                   id="institute"
                   placeholder="Enter the name of your institute" name="institute" />
        </div>

        <div class="form-control">
            <label for="branch" id="label-branch">
                <h2>Branch</h2>
            </label>

            <!-- Dropdown options -->
            <select name="branch" id="branch">
                <option value="CSE">CSE</option>
                <option value="ECE">ECE</option>
                <option value="EE">EE</option>
                <option value="ME">ME</option>
                <option value="CE">CE</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="form-control">
            <label for="role" id="label-role">
                <h2>Year of study</h2>
            </label>

            <!-- Dropdown options -->
            <select name="role" id="role">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                    
                <option value="other">Other</option>
            </select>
        </div>

        <div class="form-control">
            <label>
                Academic level
            </label>

            <!-- Input Type Radio Button -->
            <label for="recommed-1">
                <input type="radio"
                       id="recommed-1"
                       name="recommed" value="good">Good</input>
            </label>
            <label for="recommed-2">
                <input type="radio"
                       id="recommed-2"
                       name="recommed" value="average">Average</input>
            </label>
            <label for="recommed-3">
                <input type="radio"
                       id="recommed-3"
                       name="recommed" value="poor">Poor</input>
            </label>
        </div>

        <div class="form-control">
            <label>Interest and the level of knowledge
                <small>(Check all the interests that apply)</small>
            </label>
            <!-- Input Type Checkbox -->
            <div class="form-control ab">
            <label for="inp-1">
                <input type="checkbox"
                       name="inp-1" id="inp-1" value="Yes">Web development</input></label>
                       
                        <!-- Input Type Radio Button -->
                        <select name="webd" id="role">
                            <option value="Beginner">Beginner</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Expert">Expert</option>
                        </select>
                        
                    </div>
                    <div class="form-control ab">
            <label for="inp-2">
                <input type="checkbox"
                       name="inp-2" id="inp-2" value="Yes">App development</input></label>
                       <select name="appd" id="role">
                            <option value="Beginner">Beginner</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Expert">Expert</option>
                        </select></div>
                    <div class="form-control ab">
            <label for="inp-3">
                <input type="checkbox"
                       name="inp-3" id="inp-3" value="Yes">Placement oriented</input></label>
                       <select name="po" id="role">
                            <option value="Beginner">Beginner</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Expert">Expert</option>
                        </select></div>
                    <div class="form-control ab">
            <label for="inp-4">
                <input type="checkbox"
                       name="inp-4" id="inp-4" value="Yes">ML/AI</input></label>
                       <select name="mlai" id="role">
                            <option value="Beginner">Beginner</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Expert">Expert</option>
                        </select></div>
                    <div class="form-control ab">
            <label for="inp-5">
                <input type="checkbox"
                       name="inp-5" id="inp-5" value="Yes">AR/VR</input></label>
                       <select name="arvr" id="role">
                            <option value="Beginner">Beginner</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Expert">Expert</option>
                        </select></div>
                    <div class="form-control ab">
            <label for="inp-6">
                <input type="checkbox"
                       name="inp-6" id="inp-6" value="Yes">Blockchain</input></label>
                       <select name="bc" id="role">
                            <option value="Beginner">Beginner</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Expert">Expert</option>
                        </select></div>
                    <div class="form-control ab">
            <label for="inp-7">
                <input type="checkbox"
                       name="inp-7" id="inp-7" value="Yes">UI/UX design</input></label>
                       <select name="uiux" id="role">
                            <option value="Beginner">Beginner</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Expert">Expert</option>
                        </select></div>
        </div>

        <!-- Multi-line Text Input Control -->
        <button type="submit" value="submit" >
            Submit
        </button>
    </form>
</body>

</html>


