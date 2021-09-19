<?php
// session_start();
include("sidebar.php");
include("../connection.php");

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
                    <h1>Following are all the registered students</h1>
                    <h6 style="color:gray">TIP: Double click to Edit. Single Click to Delete.</h6>
               </div>
               <div class="col-xl-12 col-lg-12 col-md-8 col-sm-12" id="table">
                    <div class="card">
                         <h5 class="card-header">All the registered Students</h5>
                         <div class="card-body p-0">
                              <div class="block" data-fade="true">
                                   <div class="table-responsive">
                                        <table class="table">
                                             <thead class="bg-light">
                                                  <tr class="border-0">
                                                       <th class="border-0">#</th>
                                                       <th class="border-0">Image</th>
                                                       <th class="border-0">Registeration Number</th>
                                                       <th class="border-0">First Name</th>
                                                       <th class="border-0">Last Name</th>
                                                       <th class="border-0">username</th>
                                                       <th class="border-0">Gender</th>
                                                       <th class="border-0">Age</th>
                                                       <th class="border-0">Guardian</th>
                                                       <th class="border-0">Home Address</th>
                                                       <th class="border-0">Phonenumber</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <?php
                                                  $result = $conn->query("SELECT * from students")->fetchAll(PDO::FETCH_ASSOC);
                                                  // $col = $result->fetchAll(PDO::FETCH_ASSOC);
                                                  foreach ($result as $rows) {
                                                       $i = 0; ?>
                                                       <tr ondblclick="perform(this,<?php echo $rows['student_id'] ?>)" onclick="performsingle(this,<?php echo $rows['student_id']; ?>)">
                                                            <td id="tdid<?php echo $rows['student_id']; ?>"><?php echo $rows['student_id']; ?></td>
                                                            <td>
                                                                 <div class="m-r-10"><span class="fas fa-user fa-lg"></span></div>
                                                            </td>
                                                            <td id="tdregNum<?php echo $rows['student_id']; ?>"><?php echo $rows['registration_num']; ?></td>
                                                            <td id="tdfn<?php echo $rows['student_id']; ?>"><?php echo $rows['student_fname']; ?> </td>
                                                            <td id="tdln<?php echo $rows['student_id']; ?>"><?php echo $rows['student_lname']; ?></td>
                                                            <td id="tdun<?php echo $rows['student_id']; ?>"><?php echo $rows['student_fname'];
                                                                                                              echo $rows['student_lname'];
                                                                                                              echo "@email.com"; ?></td>
                                                            <td id="tdgen<?php echo $rows['student_id']; ?>"><?php echo $rows['sex']; ?></td>
                                                            <td id="tdage<?php echo $rows['student_id']; ?>"><?php echo $rows['age']; ?></td>
                                                            <td id="tdgdn<?php echo $rows['student_id']; ?>"><?php echo $rows['guardian_name']; ?>
                                                            <td id="tdhaddress<?php echo $rows['student_id']; ?>"><?php echo $rows['home_address']; ?>
                                                            <td id="tdphnum<?php echo $rows['student_id']; ?>"><?php echo $rows['phonenumber']; ?>
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
          // console.log(elem.innerText[0]);
          // console.log(document.getElementById("tdregNum" + num)); //.placeholder = elem.innerText[0];
          document.getElementById("regNum").value = document.getElementById("tdregNum" + num).innerText;
          document.getElementById("regNum").disabled = true;
          document.getElementById("fn").value = document.getElementById("tdfn" + num).innerText;
          document.getElementById("ln").value = document.getElementById("tdln" + num).innerText;
          document.getElementById("age").value = document.getElementById("tdage" + num).innerText;
          document.getElementById("gender").value = document.getElementById("tdgen" + num).innerText;
          // document.getElementById("un").value = document.getElementById("tdun" + num).innerText;
          document.getElementById("guardian").value = document.getElementById("tdgdn" + num).innerText;
          document.getElementById("haddress").value = document.getElementById("tdhaddress" + num).innerText;
          document.getElementById("phnum").value = document.getElementById("tdphnum" + num).innerText;
          document.getElementById("phnum").value = document.getElementById("tdphnum" + num).innerText;
          document.getElementById("stdid").value = document.getElementById("tdid" + num).innerText;
          // document.getElementById("id").value = document.getElementById("tdid" + num).innerText;
          // document.getElementById("id").disabled = true;

     }

     function closeit() {
          var btn = document.getElementById("closeBtn");
          var modal = document.getElementById("my-modal");
          modal.style.display = "none";
          modal.style.transition = "1s";
     }

     /*function performsingle(el,stdID) {

          // alert(stdID);
          var id = stdID;
          // $_SESSION["theID"] = stdID;
          $.ajax({
               url: 'deleteStd.php',
               type: 'POST',
               data: 
               {
                    id:id
               },
               success: function(response) 
               {
                    if (response == 1) 
                    {
                         // Remove row from HTML Table
                         $(el).closest('tr').css('background', 'tomato');
                         $(el).closest('tr').fadeOut(800, function() 
                         {
                              $(this).remove();
                         });
                    } 
                    else 
                    {
                         alert('Invalid ID.');
                    }

               }
          });

     }*/
</script>
<script>

</script>



<?php
if (isset($_POST["edit"])) {
     if (isset($_POST["stdid"]) && isset($_POST["fn"]) &&  isset($_POST["ln"]) && isset($_POST["guardian"]) && isset($_POST["age"]) &&  isset($_POST["gender"]) && isset($_POST["phonenumber"]) && isset($_POST["address"])) {
          // if (isset($_POST["fn"])) {

          // echo "heeeeeeeeeeeeeeeeeeeeeeee" . $id;
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