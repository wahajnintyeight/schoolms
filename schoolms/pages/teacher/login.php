<?php
session_start();
include("../connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <script ></script> -->
    <link rel="stylesheet" href="../../includes/bootstrap/css/bootstrap.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="../css"> -->
    <title>Document</title>
</head>

<body>
    <!-- START OF NAVBAR -->
    <nav class="navbar navbar-expand-md navbar-light bg-light">

        <a class="navbar-brand" href="#">
            <img id="logoid" src="../../includes/img/logomain.png" style="margin-top: -30px;margin-left:-20px;" width="100px" alt="">
        </a>

        <button style="padding:20px" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a id="navbutton" class="nav-link" href="../roothome.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a id="navbutton" class="nav-link" href="../about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a id="navbutton" class="nav-link" href="../contact.php">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbutton" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../student/login.php">Student Login</a>
                        <a class="dropdown-item" href="login.php">Teacher Login</a>
                        <a class="dropdown-item" href="../admin/login.php">Admin Login</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- END OF NAVBAR -->
    <!-- ----------------------------------- -->
    <!-- LOGIN CONTENT -->
    <section>
        <div class="container h-100">

            <img id="schoollogo" src="../../includes/img/logohome.png" alt="Logo">
            <div class="d-flex justify-content-center h-50">

                <div class="wrapper fadeInDown">
                    <div id="formContent">
                        <!-- Tabs Titles -->
                        <div class="fadeIn first">
                            <span style="margin: 41px;font-size: 57px;" class="fas fa-graduation-cap"></span>
                        </div>

                        <!-- Login Form -->
                        <form method="POST" action="">
                            <input type="text" id="login" class="fadeIn second" name="username" placeholder="Teacher Registration Number">
                            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Teacher Password">
                            <input type="submit" class="fadeIn fourth" name="login" value="Log In">
                        </form>

                        <!-- Remind Passowrd -->
                        <div id="formFooter">
                            <a class="underlineHover" href="#">Forgot Password?</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
</body>
<style>
    /* 
    @media screen and (max-width:992px) {

        #loginpart {
            margin-top: 500px;
            margin-right: 100px;
        }

        #logopart {
            margin-left: 250px;
            margin-top: -100px;
        }

    } */



    @import url('https://fonts.googleapis.com/css?family=Poppins');

    body {
        font-family: "Poppins", sans-serif;
        height: 100vh;
    }

    a {
        color: #92badd;
        display: inline-block;
        text-decoration: none;
        font-weight: 400;
    }

    h2 {
        text-align: center;
        font-size: 16px;
        font-weight: 600;
        text-transform: uppercase;
        display: inline-block;
        margin: 40px 8px 10px 8px;
        color: #cccccc;
    }



    /* STRUCTURE */

    .wrapper {
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        width: 100%;
        min-height: 90%;
        margin-top: -140px;
        padding: 20px;
    }

    #formContent {
        -webkit-border-radius: 10px 10px 10px 10px;
        border-radius: 10px 10px 10px 10px;
        background: #fff;
        padding: 30px;
        width: 90%;
        max-width: 450px;
        position: relative;
        padding: 0px;
        -webkit-box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
        box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.3);
        text-align: center;
    }

    #formFooter {
        background-color: #f6f6f6;
        border-top: 1px solid #dce8f1;
        padding: 25px;
        text-align: center;
        -webkit-border-radius: 0 0 10px 10px;
        border-radius: 0 0 10px 10px;
    }



    /* TABS */

    h2.inactive {
        color: #cccccc;
    }

    h2.active {
        color: #0d0d0d;
        border-bottom: 2px solid #5fbae9;
    }



    /* FORM TYPOGRAPHY*/

    input[type=button],
    input[type=submit],
    input[type=reset] {
        background-color: #56baed;
        border: none;
        color: white;
        padding: 15px 80px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        text-transform: uppercase;
        font-size: 13px;
        -webkit-box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
        box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
        -webkit-border-radius: 5px 5px 5px 5px;
        border-radius: 5px 5px 5px 5px;
        margin: 5px 20px 40px 20px;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    input[type=button]:hover,
    input[type=submit]:hover,
    input[type=reset]:hover {
        background-color: #39ace7;
    }

    input[type=button]:active,
    input[type=submit]:active,
    input[type=reset]:active {
        -moz-transform: scale(0.95);
        -webkit-transform: scale(0.95);
        -o-transform: scale(0.95);
        -ms-transform: scale(0.95);
        transform: scale(0.95);
    }

     
    input[type=password], input[type=text] {
        background-color: #f6f6f6;
        border: none;
        color: #0d0d0d;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 5px;
        width: 85%;
        border: 2px solid #f6f6f6;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -ms-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
        -webkit-border-radius: 5px 5px 5px 5px;
        border-radius: 5px 5px 5px 5px;
    }

    input[type=text]:focus {
        background-color: #fff;
        border-bottom: 2px solid #5fbae9;
    }

    input[type=text]:placeholder {
        color: #cccccc;
    }



    /* ANIMATIONS */

    /* Simple CSS3 Fade-in-down Animation */
    .fadeInDown {
        -webkit-animation-name: fadeInDown;
        animation-name: fadeInDown;
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    @-webkit-keyframes fadeInDown {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }

        100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
        }
    }

    @keyframes fadeInDown {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }

        100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
        }
    }

    /* Simple CSS3 Fade-in Animation */
    @-webkit-keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @-moz-keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .fadeIn {
        opacity: 0;
        -webkit-animation: fadeIn ease-in 1;
        -moz-animation: fadeIn ease-in 1;
        animation: fadeIn ease-in 1;

        -webkit-animation-fill-mode: forwards;
        -moz-animation-fill-mode: forwards;
        animation-fill-mode: forwards;

        -webkit-animation-duration: 1s;
        -moz-animation-duration: 1s;
        animation-duration: 1s;
    }

    .fadeIn.first {
        -webkit-animation-delay: 0.4s;
        -moz-animation-delay: 0.4s;
        animation-delay: 0.4s;
    }

    .fadeIn.second {
        -webkit-animation-delay: 0.6s;
        -moz-animation-delay: 0.6s;
        animation-delay: 0.6s;
    }

    .fadeIn.third {
        -webkit-animation-delay: 0.8s;
        -moz-animation-delay: 0.8s;
        animation-delay: 0.8s;
    }

    .fadeIn.fourth {
        -webkit-animation-delay: 1s;
        -moz-animation-delay: 1s;
        animation-delay: 1s;
    }

    /* Simple CSS3 Fade-in Animation */
    .underlineHover:after {
        display: block;
        left: 0;
        bottom: -10px;
        width: 0;
        height: 2px;
        background-color: #56baed;
        content: "";
        transition: width 0.2s;
    }

    .underlineHover:hover {
        color: #0d0d0d;
    }

    .underlineHover:hover:after {
        width: 100%;
    }

    /* OTHERS */

    *:focus {
        outline: none;
    }

    #icon {
        width: 60%;
    }

    * {
        box-sizing: border-box;
    }

    #schoollogo {
        /* margin-left: 325px; */
        text-align: center;
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-top: -70px;
        width: 500px;
        position: relative;
    }

    #navbutton {
        font-size: 20px;
    }


    .user_card {
        height: 400px;
        width: 350px;
        margin-top: auto;
        margin-bottom: auto;
        background: #f39c12;
        position: relative;
        display: flex;
        justify-content: center;
        flex-direction: column;
        padding: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border-radius: 5px;

    }

    #loginpart {
        background-color: lightblue;
        /* padding: 79px; */
        padding: 30px;
        height: 500px;
        width: 600px;
        border-radius: 1.5cm;
        text-align: center;
        display: block;
        margin-left: auto;
        margin-right: auto;
        position: relative;

        /* margin-left: 50px; */

    }

    .brand_logo_container {
        position: absolute;
        height: 170px;
        width: 170px;
        top: -75px;
        border-radius: 50%;
        background: #60a3bc;
        padding: 10px;
        text-align: center;
    }

    .brand_logo {
        height: 150px;
        width: 150px;
        border-radius: 50%;
        border: 2px solid white;
    }

    .login_btn {
        width: 100%;
        background: #c0392b !important;
        color: white !important;
    }

    .login_btn:focus {
        box-shadow: none !important;
        outline: 0px !important;
    }

    .login_container {
        padding: 0 2rem;
    }

    .input-group-text {
        background: #c0392b !important;
        color: white !important;
        border: 0 !important;
        border-radius: 0.25rem 0 0 0.25rem !important;
    }

    .input_user,
    .input_pass:focus {
        box-shadow: none !important;
        outline: 0px !important;
    }

    .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
        background-color: #c0392b !important;
    }

    @media screen and (min-width:1850px) {
        #navbutton {
            margin-left: 250px;
            /* text-align: center; */
            /* position: relative; */
        }

        .dropdown-menu {
            margin-left: 230px;
        }

    }


    @media screen and (min-width:992px) and (max-width:1849px) {
        #navbutton {
            margin-left: 100px;
        }

        .dropdown-menu {
            margin-left: 130px;
        }

        #loginpart {

            margin-right: 20px;

        }

        /* #schoollogo {
            margin-left: 325px;
            margin-top: -86px;
        } */

    }


    @media screen and (max-width:992px) {

        #schoollogo {
            /* margin-left: 110px; */
            width: 300px;
        }

        .wrapper {
            /* width:200px; */
            margin-top: -90px;
        }

        /* #schoollogo {
            margin-left: 237px;
            margin-top: -86px;
        } */

    }

    @media screen and (min-width:890px) and (max-width:1079px) {

        /* #schoollogo {
            margin-left: 210px;
        } */

        /* #schoollogo {
margin-left: 237px;
margin-top: -86px;
} */

    }
</style>

<?php 
$yes = 0;
if (isset($_POST["login"])) 
{
     if (isset($_POST["username"])) {
          $username = $_POST["username"];
          $yes++;
     }
     if (isset($_POST["password"])) {
          $password = $_POST["password"];
          $yes++;
     }
     // echo $username;
     // echo $password;
     if ($yes > 0) {
          $res = $conn->query("SELECT * from teacher where email = '" . $username . "' and password = '" . $password . "' ");
          $result = $res->fetch(PDO::FETCH_NUM);
          
          if ($result != NULL) 
          {

               $_SESSION["teacher_id"] = $result[0];
               echo "<script> location.replace('dashboard.php'); </script>";
            
          } else {
               echo "<script>document.getElementById('login').style.borderColor = 'red';
          </script>";
          }
     }
     unset($_POST["login"]);
     unset($_POST);
}
?>

</html>