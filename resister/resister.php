<?php 
// session_start();

try{
    $conn = mysqli_connect("localhost","root","","artgallery");
}   
catch(Exception $e){   
    if(!$conn){
        echo("database connection failed");
    }   
}
$result=mysqli_query($conn,"SELECT * from user_signup");
if(!empty($_POST)){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // echo "INSERT INTO `user_signup`(`name`,`email`,`password`) VALUE('$name','$email','$password')";
    // to run insert query in data base  syntax = mysqli_query($conn,query);
    if($name!=""||$email=""||$password=""){
        mysqli_query($conn,"INSERT INTO `user_signup`(`name`,`email`,`password`) VALUE('$name','$email','$password')");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resister.css">
    <title>Document</title>
</head>
<body>
    <div class="signup-container">
        <div class="inside-signup-container1"></div>
        <div class="text-content">
            <h1>ArtGallery</h1>
            <h2>asldkjfasdlfkjasdlfkjasdlfjk</h2>
            <h2>a;sldkfja;dlkfjas;ldkfjafjll</h2>
        </div>
        <div class="inside-signup-container2">
        <h1>Sign-up</h1><br><br><br>
        <div class="input-container">
        <form action="" method="POST" class="signup-contents">
            <label for="name"></label><br>
            <input type="text" id="name" name="name" placeholder="Username" required><br>
            <label for="email"></label><br>
            <input type="email" id="email" name="email" placeholder="Email" required><br>
            <label for="password"></label><br>
            <input type="password" id="password" name="password" placeholder="Password" required><br><br><br>
            <button class="signup-button">Submit</button><br><br><br><br>
            <!-- <button>Log in</button><br><br> -->
        </form>
        </div>
        </div>
    </div>
    <!-- <div class="login-container">
    <div class="inside-login-container1">
            <h1>ArtGallery</h1>
        </div>
        <div class="inside-signup-container2">
        <h1>Log-in</h1><br><br><br>
        <div class="input-container">
        <form action="" method="POST" class="signup-contents">
            <label for="name"></label><br>
            <input type="text" id="name" name="name" placeholder="Username" required><br>
            <label for="email"></label><br>
            <input type="email" id="email" name="email" placeholder="Email" required><br>
            <label for="password"></label><br>

            <button>Submit</button><br><br><br><br>
            <button>Log in</button><br><br>
        </form>
        </div>
        </div>
    </div>

    </div> -->
</body>
</html>