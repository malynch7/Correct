<!DOCTYPE html>
    <html>
        <head>
            <title>Correct Login</title>
              <link rel="stylesheet" type="text/css" href="LoginStyle.css">
        </head>
        <body>
            <?php
                session_start();
                $uname="";
                $User_true=0;
                $Pass_true=0;
                $Both_true=0;
                $pass="";
                $Usererror = "";
                $Passerror = "";
                $success = "";
                    if(isset($_POST['submit'])){
                                    $User_true=0;
                                    $Pass_true=0;
                                    $Both_true=0;
                                    $uname=" ";
                                    $pass = " ";
                         $uname = $_POST['username'];
                         $pass = $_POST['password'];
                                                   $favorites = array(
                    "Garav Soni" => array(
                        "admin" => "password1234",
                    ),
                    "Dave Punk" => array(
                        "admin2" => "password1234",
                    ),
                    "John Flinch" => array(
                      "admin3" => "password1234",
                    )
                );
                     $keys = array_keys($favorites);
                     for($i = 0; $i < count($favorites); $i++) {
    foreach($favorites[$keys[$i]] as $key => $value) {
         if($uname==$key){
            $User_true=1;
            if($pass==$value){
                 $Pass_true=1;
            }
            if($User_true==1&&$Pass_true==1){
                $Both_true=1;
            }
        }


    }
    echo "\n";
}

echo "both true".$Both_true;

           if($User_true==1 ){
                            if($Both_true==1){
                                if(!empty($_POST["remember"])){
                                    setcookie("member_login",$uname,time()+(10*365*24*60*60));
                                    setcookie("member_password",$pass,time()+(10*365*24*60*60));

                                }else{

                                }
                                header("game/PlayCorrect.php");
                                $error = "Not success";
                                $success = "Welcome! ";

                                    $User_true=0;
                                    $Pass_true=0;
                                    $Both_true=0;
                                    $uname=" ";
                                    $pass = " ";
                            }else{
                                $Passerror = "Invalid Password";
                            }
                        }else{
                            $Usererror = "Invalid Username";

                        }
                    }

            ?>


                <div class="CorrectLogin">
                <img src="/images/PhotoIcon" class="IconMain">
                <h1> Connect Login </h1>
                <table id="mainframe">
                    <tr>
                        <td>
                            <ul>
                                <li><a class="active" href="Correct.html">Home</a></li>
                                <li><a href="Login.php">Play</a></li>
                                <li><a href="howtoplay.html">How to play</a></li>
                                <li><a href="youtube.html">YouTube Video</a>
                                <li><a href="aboutcontributors.html">About Contributors</a></li>
                                <li class="liclass"> <a href="https://github.com/malynch7/Web-Programming-Project-1">GitHub Repository</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>


                <form method="post">
                    <p>Username: </p>
                    <p class="Usererror"><?php echo "<font color='red'>$Usererror</font>";
                    ?>
                    <input type="text" name="username" placeholder="Enter Username" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>"  required>
                    <p>Password: </p>
                     <p class="Passerror"><?php echo "<font color='red'>$Passerror</font>";
                    ?>
                    <input type="password" name="password" placeholder="Enter Password" value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>" required>
                    <input type="submit" name="submit" value="Login">
                     <label for="remember-me">Remember me:</label>
                    <input type="checkbox" class="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> name="remember" />
                    <a href="ForgotPassword.php">Forgot Password</a><br>
                    <a href="ForgotUsername.php">Forgot Username</a><br>
                        </form>
                    </div>
        </body>
    </html>
