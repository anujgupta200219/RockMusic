<html>
    <head>
        <title>Login</title>
        <style>
            body{
                text-align:center;
                font-size:2rem;
                color:lightblue;
                padding-top:8rem;
                border-radius:4px;
                background:url(http://localhost/pro/b.jpg);
                background-size:cover;
                background-position: center;
                background-attachment: fixed;
            }
            #form .pass{
                padding:1rem;
            }
            h1{
                font-size:2rem;
                color:rgb(204, 0, 102);
            }
            h5{color:rgb(204, 0, 102)}
            a{
                font-size:1.3rem;
            }
            #btn {
            background:rgb(204, 0, 102);
            border-radius:5rem;
            background-size:cover;
                background-position: center;
                background-attachment: fixed;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            }
        </style>
    </head>
    <body>
        <div id="form">
            <h1>Register</h1>
            
            <form name="form" action="" method="POST">
            <div class="user">    
                <label>Username: </label>
                <input type="text" id="user" name="user"><br>
                </div>
                <div class="pass">
                <label>Password: </label>
                <input type="password" id="pass" name="pass"><br>
                </div>
                <input type="submit" id="btn" value="Register" name = "submit"/><br>
                <h5>Have an rockmusic account?</h5>
                <a href="http://localhost/pro/index.php">Login</a>
            </form>
        </div>
    </body>
</html>
<?php include('server.php')?>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if( !empty($_POST['user'])){
    $use=$_POST['user'];
    $passw=$_POST['pass'];
    $query="select * from info where user='$use'and pass='$passw'";
    $result=mysqli_query($connect,$query);
    $count=mysqli_num_rows($result);
    if($count>0){
        echo "Already Registered user login to continue";
    }
    else{
        $query="INSERT INTO info (user,pass) VALUES('$use','$passw')";
        if(mysqli_query($connect,$query)){
        echo "Registeration Successfully Login to continue";
        }
    }
}
else{
    echo "You Have Missed Some Field!!!";
}
}
?>