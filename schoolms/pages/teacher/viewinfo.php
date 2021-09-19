<?php
session_start();
include("sidebar.php");
include("../connection.php");
if (isset($_SESSION["teacher_id"])) {
     $teacher_id = $_SESSION["teacher_id"];
}

function getInfo($conn, $query)
{
     $result = $conn->query($query);
     $num = $result->fetch(PDO::FETCH_NUM);
     $result = $num[0];
     return $result;
}
?>
<div class="dashboard-wrapper" style="font-family: 'Montserrat','sans-serif' !important;">
     <div class="container">
          <div class="row">
               <div class="container">
                    <div class="down">
                         <div class="d-block btn-secondary" style="color: #fff !important; margin-left: 29%;border-radius: 10px;background-color: #0984e3;width: 45%;">
                              <div class="row text-center padding">
                                   <div class="col-sm-8 col-md-10 col-lg-12" style="padding-top: 55px;padding-bottom:15%">

                                        <span class="glyphicon glyphicon-user" style="outline: 3px solid rgba(0, 0, 0, 0.5); color: #383c3e; background-color: #fff; font-size:140px; padding: 20px;box-shadow: 4px 4px 15px 1px rgba(0, 0, 0, 0.37);
"></span>
                                        <h2 class="info" style="margin-top: 15px;"><?php echo getInfo($conn, "SELECT teacher_id from teacher where teacher_id = '" . $teacher_id . "'"); ?></h2>
                                        <hr>
                                        <h5 class="info">Teacher Name #:<?php echo getInfo($conn, "SELECT teacher_name from teacher where teacher_id = '" . $teacher_id . "'"); ?></h2>
                                             <hr>
                                             <h5 class="info">Phone Number:</h5> <span><?php echo getInfo($conn, "SELECT phnum from teacher where teacher_id = '" . $teacher_id . "'"); ?></span>
                                             <hr>
                                             <h5 class="info">Gender:</h5> <span><?php echo getInfo($conn, "SELECT sex from teacher where teacher_id = '" . $teacher_id . "'"); ?></span>
                                             <hr>
                                             <h5 class="info">Salary:</h5> <span><?php echo getInfo($conn, "SELECT salary from teacher where teacher_id = '" . $teacher_id . "'"); ?></span>
                                             <hr>
                                             <h5 class="info">Email:</h5> <span><?php echo getInfo($conn, "SELECT email from teacher where teacher_id = '" . $teacher_id . "'"); ?></span>

                                   </div>

                              </div>
                         </div>
                    </div>
               </div>
               </body>


          </div>
     </div>

</div>

<?php
//register button clicked

?>

<style>
     .info {
          font-family: 'Montserrat', 'sans-serif' !important;
          font-weight: bold;
          font-size: 25px;
          color: #fff;
     }

     .down {
          padding-top: 100px;
          margin-top: -33px;
          /*margin-left: 20px;*/
     }

     .returnbut {
          color: #040404;
          border-radius: 0.5cm;
          border: 0cm;
          background-color: lightgrey;
     }

     .returnbut:hover {
          background-color: #00be81;
     }

     .addstudenttext {
          margin-top: 40px;
          text-align: center;
     }

     .addstudenttext h1 {
          text-align: center;
          margin-left: 20px;
     }

     #register:hover {
          transition: 0.5s ease-in-out;
          background-color: lightgreen;
     }

     input {
          /* margin: 20px 40px 20px 40px; */
          height: 50px;
          padding: 20px 50px 20px 50px;
          border-radius: 1cm;
          border: 0px solid;
     }
</style>

<script src="wakenbake.js"></script>