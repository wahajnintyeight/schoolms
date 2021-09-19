<?php
session_start();
include("sidebar.php");
// include("../connection.php");
if (isset($_SESSION["teacher_id"])) {
     $teacher_id = $_SESSION["teacher_id"];
} else {
     echo "<script>alert('You are not logged in as Teacher!');
     location.replace('../roothome.php');
     </script>";
}

$dataPoints = array();
try {

     $dasaPoints = $conn->prepare("SELECT student_id,totalmarks,student_fname from students join 
     section_level on section_id = s_sid join teacher on t_sid = section_id
      where teacher_id = '" . $teacher_id . "' ");
     $dasaPoints->execute();
     $result = $dasaPoints->fetchAll(PDO::FETCH_OBJ);
     // echo "<pre>";
     foreach ($result as $rows) {
          array_push($dataPoints, array("x" => $rows->student_id, "y" => $rows->totalmarks));
     }
} catch (\PDOException $ex) {
     print($ex->getMessage());
}

//COUNTING TEACHERS
function countVal($query, $conn)
{
     $res = $conn->prepare($query);
     $res->execute();
     $result = $res->fetchColumn();
     return $result;
}

?>

<div class="dashboard-wrapper" style="background-color:#faf6ed; font-family: 'Montserrat','sans-serif' ">
     <div class="dashboard-ecommerce">
          <div class="container-fluid dashboard-content ">
               <!-- ============================================================== -->
               <!-- pageheader  -->
               <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                         <div class="page-header">
                              <h2 class="pageheader-title" style="font-family: 'montserrat','sans-serif';">AESS Teacher Portal<?php if (isset($_SESSION["student_id"])) {
                                                                                                                                       echo $_SESSION["student_id"];
                                                                                                                                  } ?></h2>
                              <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus
                                   vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                         </div>
                    </div>
               </div>
               <!-- ============================================================== -->
               <!-- end pageheader  -->
               <!-- ================================CARDS============================== -->
               <div class="ecommerce-widget" style="font-family: 'Montserrat','sans-serif' !important;">

                    <div class="row">
                         <!-- CARD 1 -->

                         <!-- CARD 2 -->
                         <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12" id="card2">
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="text-muted" style="font-family: 'Montserrat','sans-serif';">Class average:<span style="margin-left:20px" class="fa fa-user"></span></h5>
                                        <div class="metric-value d-inline-block">
                                             <h1 class="mb-1"><span class="counter" data-count="<?php echo countVal("SELECT ceil(avg(totalmarks)) from teacher join section_level on section_id= t_sid join students on s_sid = section_id where teacher_id ='" . $teacher_id . "' ", $conn) + 40; ?>">0</span></h1>
                                        </div>
                                   </div>
                                   <div id="sparkline-revenue2"></div>
                              </div>
                         </div>
                         <!-- CARD 3 -->
                         <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12" id="card3">
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="text-muted" style="font-family: 'Montserrat','sans-serif';">Teaching Sections:<span style="margin-left:20px" class="fab fa-fw fa-wpforms"></span></h5>
                                        <div class="metric-value d-inline-block">
                                             <h1 class="mb-1"><span class="counter" data-count="<?php echo countVal("SELECT count(*) from section_level join teacher on teacher.t_sid = section_level.section_id   where teacher.teacher_id = '" . $teacher_id . "'  ", $conn) ?>">0</span></h1>
                                        </div>
                                   </div>
                                   <div id="sparkline-revenue3"></div>
                              </div>
                         </div>
                         <!-- CARD 4 -->
                         <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12" id="card4">
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="text-muted" style="font-family: 'Montserrat','sans-serif';">My Salary<span style="margin-left:20px" class="fa fa-credit-card"></span></h5>
                                        <div class="metric-value d-inline-block" style="font-family: 'Montserrat','sans-serif';">
                                             <h1 class="mb-1">$<span class="counter" data-count="<?php echo countVal("select salary from teacher where teacher_id = '" . $teacher_id . "' ", $conn); ?>">0</span></h1>
                                        </div>
                                   </div>
                                   <div id="sparkline-revenue4"></div>
                              </div>
                         </div>
                    </div>
                    <!-- ============================TABLE================================== -->
                    <table class="table table-light">
                         <thead class="thead-light">
                              <tr>
                                   <th>Student Name</th>
                                   <th>Student ID</th>
                              </tr>
                         </thead>
                         <tbody>
                              <?php
                              $qu = $conn->query("
                         SELECT student_id,totalmarks,student_fname from students join 
                         section_level on section_id = s_sid join teacher on t_sid = section_id
                         where teacher_id = '" . $teacher_id . "'
                         ");
                              $res = $qu->fetchAll(PDO::FETCH_ASSOC);
                              foreach ($res as $ro) {
                              ?>

                                   <tr>
                                        <td><strong><?php echo $ro["student_fname"]; ?></strong></td>
                                        <td style="color:lightgray"><?php echo $ro["student_id"]; ?></td>
                                   </tr>
                              <?php
                              } ?>
                         </tbody>
                    </table>
                    <br>
                    <hr>
                    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                    <br>
               </div>
          </div>
     </div>
</div>
<?php



?>

<style>
     #registeredStds {
          transition: 0.6s;
     }

     @keyframes card1anim {
          0% {
               /* opacity: 0; */
               padding-top: 10px;
          }

          40% {
               /* opacity: 0.5; */
               padding-top: 20px;
          }

          60% {
               /* opacity: 1; */
               padding-top: 10px;
          }

          100% {
               /* opacity: 1; */
               padding-top: 0px;
          }

     }

     @keyframes fadeIn {
          0% {
               /* opacity: 0; */
               /* margin-left: -200px; */
               left: 500px;
          }

          30% {
               /* opacity: 0.5; */
               /* margin-left: -150px; */
               left: 350px;

          }

          50% {
               /* margin-left:-100px; */
               left: 200px;

          }

          70% {
               opacity: 1;
               /* margin-left: -50px; */
               left: 100px;

          }

          80% {
               opacity: 1;
               /* margin-left: 0px; */
               left: 50px;
          }

          100% {
               opacity: 1;
               /* margin-left: 0px; */
               left: 0px;
          }
     }

     #card1 {
          animation: card1anim 0.7s ease;
          position: relative;
     }

     #card2 {
          animation: card1anim 1.9s ease;
          position: relative;
     }

     #card3 {
          animation: card1anim 2.11s ease;
          position: relative;
     }

     #card4 {
          animation: card1anim 2.44s ease;
          position: relative;
     }

     #table {
          margin-top: 10px;
          /* animation: fadeIn 0.3s ease-in; */
          position: absolute;
     }

     .counter {
          animation-duration: 1s;
          animation-delay: 0s;
     }
</style>

<script>
     window.onload = function() {

          var chart = new CanvasJS.Chart("chartContainer", {
               animationEnabled: true,
               exportEnabled: true,
               theme: "light2", // "light1", "light2", "dark1", "dark2"
               title: {
                    text: "Marks of each student taught by this teacher"
               },
               axisX: {

                    interval: 1,
                    valueFormatString: "#0.## Student ID"

               },
               axisY: {
                    interval: 10,
                    valueFormatString: "Marks - ##0.##"
               },
               data: [{
                    type: "column", //change type to bar, line, area, pie, etc  
                    dataPoints: <?php echo  json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
               }]
          });
          chart.render();

     }
</script>
<script>
     $(document).ready(function() {
          $('.counter').each(function() {
               var $this = $(this),
                    countTo = $this.attr('data-count');
               $({
                    countNum: $this.text()
               }).animate({
                    countNum: countTo
               }, {
                    duration: 1000,
                    easing: 'linear',
                    step: function() {
                         $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                         $this.text(this.countNum);
                    }
               });
          });
     });
</script>
<script src="wakenbake.js"></script>
<script src="canvas.js"></script>