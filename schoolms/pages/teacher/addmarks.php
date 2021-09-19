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
                              <form action="" method="POST">
                                   <label for="Registration Number">Student ID:</label>
                                   <br>
                                   <input type="number" name="stdid" id="stdid" placeholder="">
                                   <br>
                                   <label for="Registration Number">Marks:</label>
                                   <br>
                                   <input type="text" name="phonenumber" id="phnum" placeholder="Marks">
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
                                                  <tr class="border-0">
                                                       <th class="border-0">Section Name</th>
                                                       <th class="border-0">Student ID</th>
                                                       <th class="border-0">Teacher ID</th>
                                                       <!-- <th class="border-0">Section ID</th> -->
                                                       <th class="border-0">Student First Name</th>
                                                       <th class="border-0">Student Last Name</th>
                                                       <th class="border-0">Total Marks</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <?php
                                                  $result = $conn->query("
                                                  SELECT sectionname,teacher_id,section_id,student_fname,student_id,student_lname,students.totalmarks 
                                                  from section_level join 
                                                  teacher on t_sid=section_id join 
                                                  students on s_sid = section_level.section_id 
                                                  where teacher_id = '" . $teach_id . "'
                                                  ")->fetchAll(PDO::FETCH_ASSOC);

                                                  $teach_section_id = "";
                                                  $flag = 0;
                                                  foreach ($result as $rows) {
                                                  ?>
                                                       <tr onclick="perform(this,<?php echo $rows['student_id'] ?>)">
                                                            <td id="tdid<?php echo $rows['section_id']; ?>"><?php echo $rows['sectionname']; ?></td>
                                                            <td id="tdstdID<?php echo $rows['student_id']; ?>"><?php echo $rows['student_id']; ?></td>
                                                            <!-- <td id="tdsec<?php echo $rows['section_id']; ?>"><?php echo $rows['section_id']; ?></td> -->
                                                            <td id="tdregNum<?php echo $rows['section_id']; ?>"><?php echo $rows['teacher_id']; ?></td>
                                                            <td id="tdfn<?php echo $rows['section_id']; ?>"><?php echo $rows['student_fname']; ?> </td>
                                                            <td id="tdln<?php echo $rows['section_id']; ?>"><?php echo $rows['student_lname']; ?></td>
                                                            <td id="tdun<?php echo $rows['student_id']; ?>"><?php echo $rows['totalmarks']; ?></td>
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
          document.getElementById("stdid").value = document.getElementById("tdstdID" + num).innerText;

          document.getElementById("phnum").value = document.getElementById("tdun" + num).innerText;
          // document.getElementById("stdid").value = document.getElementById("tdid" + num).innerText;
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
     if (isset($_POST["stdid"]) &&  isset($_POST["phonenumber"])) {
          $id = $_POST["stdid"];
          $phonenumber = $_POST["phonenumber"];
          //PREPARING QUERY
          try {
               $que =  $conn->prepare("UPDATE students set totalmarks = '" . $phonenumber . "'
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
               echo "<script>alert('Marks added!. Referesh the page to see changes!');</script>";
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