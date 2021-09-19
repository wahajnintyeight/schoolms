<?php
session_start();
include("sidebar.php");
include("../connection.php");

if (isset($_SESSION["teacher_id"])) {
     $teach_id = $_SESSION["teacher_id"];
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

<div class="dashboard-wrapper" style="background-color:#faf6ed">
     <div class="container">
          <div id="my-modal" class="modal">
               <div class="modal-dialog" role="document">
                    <div class="modal-content">
                         <button class="closebtn" id="closeBtn" onclick="closeit()" style="border:0px solid;border-radius:0.5cm;background-color:transparent;position:absolute;right:5px;text-align:right">X</button>
                         <div class="modal-body">
                              <form action="liststudents.php" method="POST">
                                   <label for="Registration Number">Student ID:</label>
                                   <br>
                                   <input type="number" name="stdid" id="stdid" placeholder="">
                                   <br>
                                   <label for="Registration Number">Registration Number:</label>
                                   <br>
                                   <input type="text" name="" id="regNum" placeholder="Reg Num" value="">
                                   <br>
                                   <label for="Registration Number">First Name:</label>
                                   <br>
                                   <input type="text" name="fn" id="fn" placeholder="First Name">
                                   <br>
                                   <label for="Registration Number">Last Name:</label>
                                   <br>
                                   <input type="text" name="ln" id="ln" placeholder="Last Name">
                                   <br>
                                   <label for="Registration Number">Age:</label>
                                   <br>
                                   <input type="text" name="age" id="age" placeholder="Age">
                                   <br>
                                   <label for="Registration Number">Guardian Name:</label>
                                   <br>
                                   <input type="text" name="guardian" id="guardian" placeholder="Guardian Name">
                                   <br>
                                   <label for="Registration Number">Gender:</label>
                                   <br>
                                   <input type="text" name="gender" id="gender" placeholder="Gender">
                                   <br>
                                   <label for="Registration Number">Home Address:</label>
                                   <br>
                                   <input type="text" name="address" id="haddress" placeholder="Home Address">
                                   <br>
                                   <label for="Registration Number">Phonenumber:</label>
                                   <br>
                                   <input type="text" name="phonenumber" id="phnum" placeholder="Home Address">
                                   <br>
                                   <hr>
                                   <input type="submit" name="edit" class="btn-primary" style="text-align:center;position:relative" value="Edit">
                              </form>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <div class="container">
          <div class="row">
               <div class="addstudenttext">
                    <h1>All the sections taught by this Teacher</h1>
               </div>
               <div class="col-xl-12 col-lg-12 col-md-8 col-sm-12" id="table">
                    <div class="card">
                         <h5 class="card-header">All the sections taught by this Teacher</h5>
                         <div class="card-body p-0">
                              <div class="block" data-fade="true">
                                   <div class="table-responsive">
                                        <table class="table">
                                             <thead class="bg-light">
                                                  
                                             </thead>
                                             <tbody>
                                                  <?php
                                                  $result = $conn->query("SELECT sectionname,teacher_id,section_id from section_level join teacher on t_sid=section_id where teacher_id = '".$teach_id."'  ")->fetchAll(PDO::FETCH_ASSOC);
                                                  // $col = $result->fetchAll(PDO::FETCH_ASSOC);
                                                /*  echo "<pre>";
                                                  print_r($result);
                                                  echo"</pre>";*/
                                                  //                if(isset($teach_id)) {echo $teach_id;}
                                                   $teach_section_id="";
                                                  $flag=0;
                                                  
                                                  foreach ($result as $rows => $row_value) {
                                                       $i = 0;
                                                       foreach ($row_value as $z => $z_value) {

                                                            if ($z_value == $teach_id && $flag==0) {
                                                                 $var = $row_value["sectionname"];
                                                                 //  echo $var;
                                                                 echo "<h1>Section Name: $var     </h1>";
                                                                 echo "<hr>";
                                                                 $teach_section_id=$row_value["section_id"];
                                                                 $flag++;
                                                            }
                                                       }
                                                       $i++;
                                                      
                                                  } 
                                                  $student_in_section = $conn->query("SELECT count(*) from students where  s_sid=$teach_section_id")->fetchColumn();
                                               echo "<h1>No. of students I am teaching: $student_in_section</h1>";
                                                  ?>

                                                  <?php


                                                  ?>
                                             </tbody>
                                        </table>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>

</div>

<style>
     .addstudenttext {
          margin-top: 150px;
          text-align: center;
     }

     .modal {
          position: absolute;
          animation: openup 1.5s alternate;
          /* display: inline-block; */
     }

     @keyframes openup {
          0% {
               /* opacity: 0; */
               /* height: -500px; */
               margin-top: -1000px;
               /* transform: translateY(-100deg); */
          }

          50% {
               margin-top: -700px;
          }

          100% {
               /* opacity: 1; */
               margin-bottom: 180px;

               /* transform: translateY(20deg); */

          }
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
          background-color: #f3f3f3;
          text-align: center;
          margin-top: 5px;
          width: 100%;
          margin-left: auto;
          margin-right: auto;
          /* padding-left: 50px; */
          /* padding-right: 50px; */
          /* padding: 20px 50px 20px 50px; */
          border-radius: 1cm;
          color: black;
          border: 0px solid;
     }

     tbody tr:hover {
          padding-left: 2.5px;
          transition: 1.2s ease;
          animation: infinite alternate;
          /* background-color: lightyellow; */
          background-image: linear-gradient(45deg, #e8cc3f, #f0bb48);
     }
</style>

<script src="wakenbake.js"></script>

<script>
     function perform(elem, num) {
          // alert("You have chosen to edit this record");
          var modal = document.getElementById("my-modal");
          modal.style.display = "inline-block";
          modal.style.transition = "1s";
          document.getElementById("regNum").value = document.getElementById("tdregNum" + num).innerText;
          document.getElementById("regNum").disabled = true;
          document.getElementById("fn").value = document.getElementById("tdfn" + num).innerText;
          document.getElementById("ln").value = document.getElementById("tdln" + num).innerText;
          document.getElementById("age").value = document.getElementById("tdage" + num).innerText;
          document.getElementById("gender").value = document.getElementById("tdgen" + num).innerText;
          document.getElementById("guardian").value = document.getElementById("tdgdn" + num).innerText;
          document.getElementById("haddress").value = document.getElementById("tdhaddress" + num).innerText;
          document.getElementById("phnum").value = document.getElementById("tdphnum" + num).innerText;
          document.getElementById("phnum").value = document.getElementById("tdphnum" + num).innerText;
          document.getElementById("stdid").value = document.getElementById("tdid" + num).innerText;
     }

     function closeit() {
          var btn = document.getElementById("closeBtn");
          var modal = document.getElementById("my-modal");
          modal.style.display = "none";
          modal.style.transition = "1s";
     }

     function performsingle() {
          alert("You have chosen to delete this record");
     }
</script>
<script>

</script>



<?php
if (isset($_POST["edit"])) {
     if (isset($_POST["stdid"]) && isset($_POST["fn"]) &&  isset($_POST["ln"]) && isset($_POST["guardian"]) && isset($_POST["age"]) &&  isset($_POST["gender"]) && isset($_POST["phonenumber"]) && isset($_POST["address"])) {
          $id = $_POST["stdid"];
          $fname = $_POST["fn"];
          $lname = $_POST["ln"];
          $guardian = $_POST["guardian"];
          $age = $_POST["age"];
          $gender = $_POST["gender"];
          $phonenumber = $_POST["phonenumber"];
          $address = $_POST["address"];
          //PREPARING QUERY
          try {
               $que =  $conn->prepare("UPDATE students set student_fname = '" . $fname . "',
          student_lname = '" . $lname . "',
          sex = '" . $gender . "',
          home_address = '" . $address . "',
          phonenumber = '" . $phonenumber . "',
          age = '" . $age . "',    
          guardian_name = '" . $guardian . "'  
          where student_id = '" . $id . "'  
          ");
               //EXECUTING QUERY
               // echo "<script>console.log($que);</script>";
               $que->execute();
               echo "<script>
               var modal = document.getElementById('my-modal');
               modal.style.display = 'none';
               modal.style.transition = '1s';
               </script>";
               //      echo "
               // <script> location.replace('liststudents.php'); </script>";
               // echo "<script>window.location.reload();</script>";
               header("Refresh:0");
               unset($_POST);
          } catch (PDOException $e) {
               echo "Failed to get DB handle: " . $e->getMessage() . "\n";
               unset($_POST);
               exit;
          }
     }
}
unset($_POST);


?>