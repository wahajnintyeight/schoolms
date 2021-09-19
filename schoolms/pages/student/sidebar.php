<?php
// session_start();
include_once("../connection.php");
if (isset($_SESSION["student_id"])) {
     $stdId = $_SESSION["student_id"];
     // echo "ssssssssssssssss".$stdId;
     $name = $conn->query("SELECT student_fname from students where student_id = '" . $stdId . "'");
     $nam = $name->fetch(PDO::FETCH_NUM);
     $stdName = $nam[0];
} 



// if (!isset($_SESSION["adminusername"])) {
//      echo "
// <script>alert('You have not logged in'); location.replace('../roothome.php'); </script>";
// }
// if (isset($_SESSION["adminusername"])) {
//      echo "here";
// } else {
//      echo "
//  <script>alert('You have not logged in'); location.replace('../roothome.php'); </script>";
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

     <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

     <!-- Latest compiled JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
     <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="../admin/assets/libs/css/style.css">

     <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
     <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

     <title>Student Portal</title>
</head>

<body>
     <!-- SIDEBAR -->
     <div class="dashboard-main-wrapper">

          <div class="dashboard-header">
               <nav class="navbar navbar-expand-lg bg-white fixed-top" style="background-color: #fff !important;">
                    <a class="navbar-brand" href="dashboard.php"><img src="../../includes/img/logomain.png" class="schoollogo" width="100px" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                    </button>
               </nav>
          </div>
          <div class="nav-left-sidebar sidebar-dark leftbar">
               <div class="menu-list" style="background-color: #0984e3;color: #fff !important;overflow: hidden;width: auto;height: 100%;">
                    <nav class="navbar navbar-expand-lg navbar-light">
                         <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                         </button>
                         <div class="collapse navbar-collapse" id="navbarNav">
                              <br>
                              <ul class="navbar-nav flex-column">
                                   <li class="nav-divider" style="color:lightblue">
                                        Hey, <?php if (isset($stdName)) {
                                                  echo $stdName;
                                             } ?>
                                   </li>
                                   <li class="nav-divider" style="color:black">
                                        Menu
                                   </li>
                                   <span class="color:black;border-top:8px solid;margin-top:10px"></span>
                                   <li class="nav-item">
                                        <a class="nav-link navitems" style="color:white;font-size:20px;" href="dashboard.php"><i style="font-size:20px;" class="fas fa-home"></i>Home</a>
                                   </li>
                                   <li class="nav-item">
                                        <a class="nav-link navitems" href="#" style="color:white;font-size:20px;" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i style="font-size:20px;" class="fa fa-graduation-cap fa-lg"></i>Profile</a>
                                        <div id="submenu-2" class="collapse submenu">
                                             <ul class="nav flex-column">
                                                  <li class="nav-item">
                                                       <a class="nav-link" href="viewinfo.php">View your personal info<span class="badge badge-secondary"></span></a>
                                                  </li>
                                             </ul>
                                        </div>
                                   </li>

                                   <li class="nav-item">
                                        <a class="nav-link navitems" id="myBtn" style="color:white;font-size:12px;" href="download.php?id=<?php echo $stdId; ?>"><i style="font-size:20px;" class="fas fa-download"></i>Challan Form as PDF</a>
                                   </li>

                                   <li class="nav-item">
                                        <a class="nav-link navitems" id="myBtn" style="color:white;font-size:20px;" href="../../pages/admin/logout.php"><i style="font-size:20px;" class="fa fa-power-off"></i>Log out</a>
                                   </li>

                              </ul>
                         </div>
                    </nav>
               </div>
          </div>
     </div>


</body>

<style>
     body {
          font-family: 'Montserrat', 'sans-serif';
     }

     /* a {
        font-size: 20px;
        margin-top: 24px;
        margin-bottom: 24px;
        color: aliceblue;
    } */
     /* The Modal (background) */
     .modal {
          display: none;
          /* Hidden by default */
          position: fixed;
          /* Stay in place */
          z-index: 1;
          /* Sit on top */
          padding-top: 100px;
          /* Location of the box */
          left: 0;
          top: 0;
          width: 100%;
          /* Full width */
          height: 100%;
          /* Full height */
          overflow: auto;
          /* Enable scroll if needed */
          background-color: rgb(0, 0, 0);
          /* Fallback color */
          background-color: rgba(0, 0, 0, 0.4);
          /* Black w/ opacity */
     }

     /* Modal Content */
     .modal-content {
          background-color: #fefefe;
          margin: auto;
          padding: 20px;
          border: 1px solid #888;
          width: 80%;
     }

     /* The Close Button */
     .close {
          color: #aaaaaa;
          float: right;
          font-size: 28px;
          font-weight: bold;
     }

     .close:hover,
     .close:focus {
          color: #000;
          text-decoration: none;
          cursor: pointer;
     }

     .schoollogo {
          height: 119px;
          position: absolute;
          top: -27px;
          left: 0;
     }

     .nav-item {
          margin-top: 30px;
     }

     .nav-item a:hover {
          color: red;
          transition: 0.6s ease;
     }

     ::-webkit-scrollbar {
          width: 10px;
     }

     ::-webkit-scrollbar-track {
          background: #f1f1f1;
     }

     ::-webkit-scrollbar-thumb {
          background: #2c4d99;
     }

     ::-webkit-scrollbar-thumb:hover {
          background: #2c4d99;
     }

     .fas {
          color: #fff !important;
     }

     .fa {
          color: #fff !important;
     }

     .fab {
          color: #fff !important;
     }
</style>
<!-- 
<style>
    .collapseditems {
        background-color: #bf5857;
        /* color: black; */
        margin-top: -10px;
    }

   

    .wrapper {
        display: inline;
        /* height: 100%; */
        flex-direction: column;

    }

    h3 {
        text-align: center;
        margin-top: 20px;
    }


     



 

 
    /* Sidebar styling */
    .sidebar-nav {
        padding: 0;
        list-style: none;
        transition: all .5s;
        width: 100%;
        text-align: center;
    }

    .sidebar-nav li {
        line-height: 40px;
        width: 100%;
        transition: all .3s;
        padding: 10px;
    }

    .sidebar-nav li a {
        display: block;
        text-decoration: none;
        color: #ddd;
    }

    .sidebar-nav li:hover {
        background: #d66967;
    }
</style> -->
<style>
     /* @media screen and (max-width:590px) {

        .leftbar {
            margin-top: 10px;
        }
    } */
</style>

<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<!-- bootstap bundle js -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<!-- slimscroll js -->
<script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<!-- main js -->
<script src="assets/libs/js/main-js.js"></script>


</html>