<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <script ></script> -->
    <link rel="stylesheet" href="../includes/bootstrap/css/bootstrap.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="../css"> -->
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="#">

            <img id="logoid" src="../includes/img/logomain.png" style="margin-top: -30px;margin-left:-20px;" width="100px" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a id="navbutton" class="nav-link" href="roothome.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a id="navbutton" class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a id="navbutton" class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbutton" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="student/login.php">Student Login</a>
                        <a class="dropdown-item" href="teacher/login.php">Teacher Login</a>
                        <a class="dropdown-item" href="admin/login.php">Admin Login</a>

                    </div>
                </li>

            </ul>

        </div>
    </nav>
</body>
<style>
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
            /* text-align: center; */
            /* position: relative; */
        }

        .dropdown-menu {
            margin-left: 130px;
        }

    }


    #navbutton {
        font-size: 20px;
    }
</style>

</html>