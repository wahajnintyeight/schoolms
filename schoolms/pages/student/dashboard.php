<?php
session_start();
include("sidebar.php");
if (isset($_SESSION["student_id"])) {
     $stdId = $_SESSION["student_id"];
} else {
     echo "<script>alert('You are not logged in as Student!');
     location.replace('../roothome.php');
     </script>";
}

//COUNTING TEACHERS
function countVal($query, $conn)
{
     $res = $conn->prepare($query);
     $res->execute();
     $result = $res->fetchColumn();
     return $result;
}

function fetchVal($conn)
{
     if (isset($_SESSION["student_id"])) {
          $res = $conn->query("select sum(fee) from fees where student_id = '" . $_SESSION["student_id"] . "' ");
          $res->execute();
          $col = $res->fetchColumn();
          // $col = $res->fetchAll(PDO::FETCH_ASSOC);
          $val = $col;
          return $val;
     }
}
?>
<div class="dashboard-wrapper" style="background-color:#faf6ed; font-family: 'Montserrat','sans-serif' !important">
     <div class="dashboard-ecommerce">
          <div class="container-fluid dashboard-content ">
               <!-- ============================================================== -->
               <!-- pageheader  -->
               <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                         <div class="page-header">
                              <h2 class="pageheader-title" style="font-family: 'montserrat','sans-serif';">AESS Student Portal</h2>
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
                         <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12" id="card1">
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="text-muted" style="font-family: 'Montserrat','sans-serif';">Classes<span style="margin-left:20px" class="fas fa-graduation-cap"></span></h5>
                                        <div class="metric-value d-inline-block">
                                             <h1 class="mb-1" id="registeredstds"><span class="counter" data-count="<?php echo countVal("SELECT count(s_sid) from students where student_id = '" . $stdId . "' ", $conn);

                                                                                                                        ?>"></span></h1>
                                        </div>
                                   </div>
                                   <div id="sparkline-revenue"></div>
                              </div>
                         </div>
                         <!-- CARD 2 -->
                         <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12" id="card2">
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="text-muted" style="font-family: 'Montserrat','sans-serif';">My final score<span style="margin-left:20px" class="fa fa-user"></span></h5>
                                        <div class="metric-value d-inline-block">
                                             <h1 class="mb-1"><span class="counter" data-count="<?php echo countVal("SELECT totalmarks from students where student_id = '" . $stdId . "' ", $conn); ?>">0</span></h1>
                                        </div>
                                   </div>
                                   <div id="sparkline-revenue2"></div>
                              </div>
                         </div>
                         <!-- CARD 3 -->
                         <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12" id="card3">
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="text-muted" style="font-family: 'Montserrat','sans-serif';">Taught By Teacher(s)<span style="margin-left:20px" class="fab fa-fw fa-wpforms"></span></h5>
                                        <div class="metric-value d-inline-block">
                                             <h1 class="mb-1"><span class="counter" data-count="<?php echo countVal("SELECT count(teacher.t_sid) from students join section_level on section_level.section_id = students.s_sid join teacher on teacher.t_sid = section_level.section_id where student_id = '" . $stdId . "' ", $conn) ?>">0</span></h1>
                                        </div>
                                   </div>
                                   <div id="sparkline-revenue3"></div>
                              </div>
                         </div>
                         <!-- CARD 4 -->
                         <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12" id="card4">
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="text-muted" style="font-family: 'Montserrat','sans-serif';">Total Fee Paid<span style="margin-left:20px" class="fa fa-credit-card"></span></h5>
                                        <div class="metric-value d-inline-block" style="font-family: 'Montserrat','sans-serif';">
                                             <h1 class="mb-1">$<span class="counter" data-count="<?php if (isset($_SESSION["student_id"])) {
                                                                                                         echo countVal("SELECT (sum(fee)+sum(fine)) from fees join students using(student_id) where student_id = '" . $stdId . "'", $conn);
                                                                                                    } ?>">0</span></h1>
                                        </div>
                                   </div>
                                   <div id="sparkline-revenue4"></div>
                              </div>
                         </div>
                    </div>
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