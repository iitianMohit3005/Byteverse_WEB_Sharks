<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    $server = "localhost";
    $database = "hackathon";
        
    $conn = mysqli_connect($server, "root", "Pratham@09", $database);
        
    if(!$conn){
        die("Error". mysqli_connect_error());
    }
    $username = $_SESSION['username'];
    $sql1 = "Select * from user_details where username='$username'";
    $result1 = mysqli_query($conn, $sql1);
    $num = mysqli_num_rows($result1);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $inst = $_POST['institute'];
    $branch = $_POST['branch'];
    $role = $_POST['role'];
    $level = $_POST['recommed'];
    $interests = array();
    if(isset($_POST['inp-1']) && $_POST['inp-1']=='Yes'){
        $interests.array_push($interests,["webd",$_POST['webd']]);
    }
    if(isset($_POST['inp-2']) && $_POST['inp-2']=='Yes'){
        $interests.array_push($interests,["appd",$_POST['appd']]);
    }
    if(isset($_POST['inp-3']) && $_POST['inp-3']=='Yes'){
        $interests.array_push($interests,["po",$_POST['po']]);
    }
    if(isset($_POST['inp-4']) && $_POST['inp-4']=='Yes'){
        $interests.array_push($interests,["mlai",$_POST['mlai']]);
    }
    if(isset($_POST['inp-5']) && $_POST['inp-5']=='Yes'){
        $interests.array_push($interests,["arvr",$_POST['arvr']]);
    }
    if(isset($_POST['inp-6']) && $_POST['inp-6']=='Yes'){
        $interests.array_push($interests,["bc",$_POST['bc']]);
    }
    if(isset($_POST['inp-7']) && $_POST['inp-7']=='Yes'){
        $interests.array_push($interests,["uiux",$_POST['uiux']]);
    }
    $interests = json_encode($interests);
    if($num==1){
        $sql = "UPDATE `user_details` SET `name`='$name', `email`='$email', `inst`='$inst', `branch`='$branch', `role`='$role', `level`='$level', `interests`='$interests' WHERE `username`='$username'";
        $result = mysqli_query($conn, $sql);
    }
    else{
        $sql = "INSERT INTO `user_details`(`username`, `name`, `email`,`inst`,`branch`,`role`,`level`,`interests`) VALUES('$username', '$name', '$email','$inst','$branch','$role','$level','$interests')";
        $result = mysqli_query($conn, $sql);
    }
    
    setcookie("user_details",true,time()+86400);
    header("Location: index.php");
}
?>