<?php
// session_start();
include("sidebar.php");
include("../connection.php");
if (!isset($_SESSION["adminusername"]) && !isset($_SESSION["adminid"])) {
     echo "
<script>alert('You have not logged in'); location.replace('../roothome.php'); </script>";
}

//  else {
//      echo "
//  <script>alert('You have not logged in'); location.replace('../roothome.php'); </script>";
// }

// $res = $conn->prepare("SELECT count(*) from student");
// $res->execute();
// // $sth = $dbh->prepare("SELECT name, colour FROM fruit");
// // $sth->execute();
// $result = $res->fetchColumn();
// $count = $result;

//COUNTING TEACHERS
function countVal($query, $conn)
{
     $res = $conn->prepare($query);
     $res->execute();
     $result = $res->fetchColumn();
     return $result;
}


?>

<div class="dashboard-wrapper" style="background-color:#faf6ed">
     <div class="dashboard-ecommerce">
          <div class="container-fluid dashboard-content ">
               <!-- ============================================================== -->
               <!-- pageheader  -->
               <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                         <div class="page-header">
                              <h2 class="pageheader-title">AESS Admin Portal</h2>
                              <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus
                                   vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                         </div>
                    </div>
               </div>
               <!-- ============================================================== -->
               <!-- end pageheader  -->
               <!-- ================================CARDS============================== -->
               <div class="ecommerce-widget">

                    <div class="row">
                         <!-- CARD 1 -->
                         <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12" id="card1">
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="text-muted">Total Students Registered <span style="margin-left:20px" class="fas fa-graduation-cap"></span></h5>
                                        <div class="metric-value d-inline-block">
                                             <h1 class="mb-1" id="registeredstds"><span class="counter" data-count="<?php echo countVal("SELECT count(*) from students", $conn);

                                                                                                                        ?>">0</span></h1>
                                        </div>
                                   </div>
                                   <div id="sparkline-revenue"></div>
                              </div>
                         </div>
                         <!-- CARD 2 -->
                         <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12" id="card2">
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="text-muted">Total Teachers<span style="margin-left:20px" class="fa fa-user"></span></h5>
                                        <div class="metric-value d-inline-block">
                                             <h1 class="mb-1"><span class="counter" data-count="<?php echo countVal("SELECT count(*) from teacher", $conn); ?>">0</span></h1>
                                        </div>
                                   </div>
                                   <div id="sparkline-revenue2"></div>
                              </div>
                         </div>
                         <!-- CARD 3 -->
                         <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12" id="card3">
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="text-muted">Total classes<span style="margin-left:20px" class="fab fa-fw fa-wpforms"></span></h5>
                                        <div class="metric-value d-inline-block">
                                             <h1 class="mb-1"><span class="counter" data-count="<?php echo countVal("SELECT count(*) from section_level", $conn) ?>">0</span></h1>
                                        </div>
                                   </div>
                                   <div id="sparkline-revenue3"></div>
                              </div>
                         </div>
                         <!-- CARD 4 -->
                         <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12" id="card4">
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="text-muted">Total Fee Paid<span style="margin-left:20px" class="fa fa-credit-card"></span></h5>
                                        <div class="metric-value d-inline-block">
                                             <h1 class="mb-1">$<span class="counter" data-count="<?php echo countVal("SELECT (sum(fee)+sum(other)+sum(fine)) from fees join
               students on students.student_id = fees.student_id;
                                             ", $conn); ?>">0</span></h1>
                                        </div>
                                   </div>
                                   <div id="sparkline-revenue4"></div>
                              </div>
                         </div>
                    </div>
                    <!-- ============================TABLE================================== -->
                    <div class="block" data-fade="true">

                         <div class="row">
                              <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12" id="table">
                                   <div class="card">

                                        <div class="card-body p-0">
                                             <div class="table-responsive">
                                                  <h5 class="card-header">All Fee Paid Students</h5>
                                                  <br>
                                                  <div class="table-responsive">
                                                       <table class="table">
                                                            <thead class="bg-light">
                                                                 <tr class="border-0">
                                                                      <th class="border-0">#</th>
                                                                      <th class="border-0">Image</th>
                                                                      <th class="border-0">Registeration Number</th>
                                                                      <th class="border-0">First Name</th>
                                                                      <th class="border-0">Last Name</th>
                                                                      <th class="border-0">Fee Paid</th>
                                                                      <th class="border-0">Fee Remaining</th>
                                                                      <th class="border-0">Fee Paid in month</th>

                                                                 </tr>
                                                            </thead>
                                                            <tbody>
                                                                 <?php
                                                                 $result = $conn->query("SELECT Fees.remaining,students.student_id,students.registration_num,students.student_fname,students.student_lname,Fees.fee,monthname(Fees.time) as Month
												  from students join Fees on Fees.student_id = students.student_id ")->fetchAll(PDO::FETCH_ASSOC);
                                                                 // $col = $result->fetchAll(PDO::FETCH_ASSOC);
                                                                 foreach ($result as $rows) {
                                                                      $i = 0; ?>
                                                                      <tr>
                                                                           <td id="tdid<?php echo $rows['student_id']; ?>"><?php echo $rows['student_id']; ?></td>
                                                                           <td>
                                                                                <div class="m-r-10"><span class="fas fa-user fa-lg"></span></div>
                                                                           </td>
                                                                           <td id="tdregNum<?php echo $rows['student_id']; ?>"><?php echo $rows['registration_num']; ?></td>
                                                                           <td id="tdfn<?php echo $rows['student_id']; ?>"><?php echo $rows['student_fname']; ?> </td>
                                                                           <td id="tdln<?php echo $rows['student_id']; ?>"><?php echo $rows['student_lname']; ?></td>

                                                                           <td id="tdln<?php echo $rows['student_id']; ?>"><?php echo $rows['fee']; ?></td>
                                                                           <td id="tdln<?php echo $rows['student_id']; ?>"><?php echo $rows['remaining']; ?></td>

                                                                           <td id="tdln<?php echo $rows['student_id']; ?>"><?php echo $rows['Month']; ?></td>

                                                                           </td>
                                                                      </tr>
                                                                 <?php } ?>
                                                            </tbody>
                                                       </table>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <br>
                    <div id="chartContainer" style="margin-top:500px;height: 370px; width: 100%;"></div>

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

<?php
$dataPoints = array();
try {

     $dasaPoints = $conn->prepare("SELECT day(registered_on) as Day,student_id from students;
     ");
     $dasaPoints->execute();
     $result = $dasaPoints->fetchAll(PDO::FETCH_OBJ);
     // echo "<pre>";
     foreach ($result as $rows) {
          array_push($dataPoints, array("x" => $rows->Day, "y" => $rows->student_id));
     }
} catch (\PDOException $ex) {
     print($ex->getMessage());
}

?>
<script>
     window.onload = function() {

          var chart = new CanvasJS.Chart("chartContainer", {
               animationEnabled: true,
               exportEnabled: true,
               theme: "dark2", // "light1", "light2", "dark1", "dark2"
               title: {
                    text: "Registeration of each student daily"
               },
               axisX: {
                    valueFormatString: "Day ##0.#",
                    interval: 1,
                    intervalType: "month"
               },
               axisY: {
                    interval: 5,
                    valueFormatString:"Student ID: ##"

               },
               data: [{
                    type: "column",

                    //change type to bar, line, area, pie, etc  
                    dataPoints: <?php echo  json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
               }]
          });
          chart.render();

     }
</script>

<!-- <script src="../teacher/canvas.js"></script> -->
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

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