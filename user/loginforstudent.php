<?php
session_start();
?>
<?php
session_destroy();
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <script src="https://kit.fontawesome.com/50aa9099eb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/login.css">
    <style>
        p {
            color: rgb(255, 255, 255);
            font-size: xx-large;
            padding-bottom: 20px;
            font-family:Arial, Helvetica, sans-serif;
        }
        input[type=email]{
            width: 250px;
            height: 40px;
            border-radius: 5px;
            border: 1px solid rgba(230, 216, 104, 0.582);
            background-color: rgba(255, 255, 255, 0.3);
            text-align: center;
            font-size: 15px;
            padding: 20px;
        }
        input[type=text]{
            width: 250px;
            height: 40px;
            border-radius: 5px;
            border: 1px solid rgba(230, 216, 104, 0.582);
            background-color: rgba(255, 255, 255, 0.3);
            text-align: center;
            font-size: 15px;
            padding: 20px;
        }
        input[type=password]{
            width: 250px;
            height: 40px;
            border-radius: 5px;
            border: 1px solid rgba(230, 216, 104, 0.582);
            background-color: rgba(255, 255, 255, 0.3);
            text-align: center;
            font-size: 15px;
            padding: 20px;
        }
        input[type=submit]{
            width: 250px;
            height: 40px;
            border-radius: 5px;
            border: 1px solid rgba(230, 216, 104, 0.582);
            background-color: rgba(255, 255, 255, 0.3);
            font-size: 18px;
            color: whitesmoke;
        }
        ::placeholder {
            color: whitesmoke;
        }
        input:focus{
            width: 300px;
            height: 40px;
        }

        input[type=submit]:hover{
            background-color: rgba(255, 255, 255, 0.452);
        }
        .icons{
            display: flex;
            flex-direction: row;
        }
        #text11, #text12, #text13{
            margin-top: 5px;
        }
    </style>
</head>
<body>



        <div class="logincontainer">
            <div class="logintop">
                <img src="../images/logo1.png" width="100%" class="logohead">
            </div>





            <div class="loginmiddle">
                <div class="loginform">
                    <form action="studentloginvalidate.php" method="post">
                        <div class="text">
                            <p>LOGIN AS</p>
                        </div>
    
                        <!-- <p class="or">
                            ----- continue as -----
                        </p> -->
    
    
                        <div class="icons">
                       
    
                            <div class="iconn">
                                <div class="icon">
                                    <a href="../html/loginforteacher.php"><i style="margin-left: 35px" class="fa-solid fa-user-gear"></i></a>
                                </div>
                                <div class="icontext">
                                    <p id="text12"  style="margin-left: 55px; ">Teacher</p>
                                </div>
                            </div>
    
                            <div class="iconn">
                                <div class="icon">
                                    <a href="login.php">
                                    <i style="color:white; margin-left: 15px"  class="fa fa-graduation-cap" aria-hidden="true" ></i>
                                    </a>
                                </div>
                                <div class="icontext">
                                    <p id="text13">Student</p>
                                </div>
                            </div>
                      </div>
    
    
    
                        <!-- <div class="username">
                            <input name="username" type="text" placeholder="Enter User Name" required>
                        </div>
                        <br> -->
                        <div class="email">
                            <input name="email" type="email" placeholder="Email" required>
                        </div>
                        <br>
                        <div class="password">
                            <input name="password" type="password" placeholder="Password" required>
                        </div>
<br>
                        <!-- <p class="recover">
                            <a href="home.html">Forgot Password?</a>
                        </p> -->
                        <div class="login">
                            <input type="submit" value="login" name="login">
                        </div>  
                        
                  
                        <span style="color:white">Don't have an account?
                            <a href="studentregistration.php" style="color: yellow; text-decoration:none;">Sign up</a> now!
                        </span>


                    </form>
                </div>
       
            





            </div>
            <div class="loginbottom">
            
            <!-- footer -->
            <div id="footer">
                <footer>
                    <div class="copy">
                        <div id="copyright">
                            <i class="fa fa-copyright"></i> &nbsp; Academic Aid - 2023 All rights reserved 
                        </div>
                    </div>
                </footer>
            </div>
            
        </div>






</body>
</html>