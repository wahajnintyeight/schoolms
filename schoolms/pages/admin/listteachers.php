<?php
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
                              <form action="" method="POST">
                                   <label for="Registration Number">Teacher ID:</label>
                                   <br>
                                   <input type="number" name="teacherID" id="teacherID" placeholder="">
                                   <br>
                                   <label for="Registration Number">Teacher Name:</label>
                                   <br>
                                   <input type="text" name="tNname" id="fn" placeholder="First Name">
                                   <br>
                                   <label for="Registration Number">Email:</label>
                                   <br>
                                   <input type="text" name="email" id="email" placeholder="First Name">
                                   <br>
                                   <label for="Registration Number">Password:</label>
                                   <br>
                                   <input type="text" name="password" id="password" placeholder="Password">
                                   <br>
                                   <label for="Registration Number">Gender:</label>
                                   <br>
                                   <select class="gender" name="Gender">
                                        <option value="M">M</option>
                                        <option value="F">F</option>
                                   </select>
                                   <br>
                                   <label for="Registration Number">Home Address:</label>
                                   <br>
                                   <input type="text" name="address" id="haddress" placeholder="Home Address">
                                   <br>
                                   <label for="Registration Number">Salary:</label>
                                   <br>
                                   <input type="text" name="salary" id="salary" placeholder="Salary">
                                   <br>
                                   <label for="Registration Number">Phonenumber:</label>
                                   <br>
                                   <input type="text" name="phonenumber" id="phnum" placeholder="Phonenumber">
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

                    <h1>List all the Teachers</h1>
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
                                                       <th class="border-0">Name</th>
                                                       <th class="border-0">username</th>
                                                       <th class="border-0">Gender</th>
                                                       <th class="border-0">Phonenumber</th>
                                                       <th class="border-0">Salary</th>
                                                       <th class="border-0">Address</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <?php
                                                  $result = $conn->query("SELECT * from teacher")->fetchAll(PDO::FETCH_ASSOC);
                                                  foreach ($result as $rows) { ?>
                                                       <tr ondblclick="perform(this,<?php echo $rows['teacher_id'] ?>)">
                                                            <td id="tdid<?php echo $rows['teacher_id']; ?>"><?php echo $rows["teacher_id"]; ?></td>
                                                            <td id="tdName<?php echo $rows['teacher_id']; ?>"><?php echo $rows["teacher_name"]; ?> </td>
                                                            <td id="tdEmail<?php echo $rows['teacher_id']; ?>"><?php echo $rows["email"]; ?></td>
                                                            <td id="tdGender<?php echo $rows['teacher_id']; ?>"><?php echo $rows["sex"]; ?></td>
                                                            <td id="tdphnum<?php echo $rows['teacher_id']; ?>"><?php echo $rows["phnum"]; ?></td>
                                                            <td id="tdsalary<?php echo $rows['teacher_id']; ?>"><span style="color:green" class="counter" data-count="<?php $row = intval($rows["salary"]);
                                                                                                                                                                          echo $row; ?>">$</span></td>
                                                            <td id="tdhaddress<?php echo $rows['teacher_id']; ?>"><?php echo $rows["address"]; ?></td>
                                                            <td hidden id="tdpassword<?php echo $rows['teacher_id']; ?>"><?php echo $rows["password"]; ?></td>
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

     .addstudenttext h1 {
          text-align: center;
          margin-left: 20px;
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


     #register:hover {
          transition: 0.5s ease-in-out;
          background-color: lightgreen;
     }


     .modal {
          position: absolute;
          animation: openup 1.5s alternate;
          /* display: inline-block; */
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

     input {
          /* margin: 20px 40px 20px 40px; */
          height: 50px;
          padding: 20px 50px 20px 50px;
          border-radius: 1cm;
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
          var modal = document.getElementById("my-modal");
          modal.style.display = "inline-block";
          modal.style.transition = "1s";
          document.getElementById("fn").value = document.getElementById("tdName" + num).innerText;
          // document.getElementById("gender").value = document.getElementById("tdGender" + num).innerText;
          document.getElementById("haddress").value = document.getElementById("tdhaddress" + num).innerText;
          document.getElementById("phnum").value = document.getElementById("tdphnum" + num).innerText;
          document.getElementById("teacherID").value = document.getElementById("tdid" + num).innerText;
          document.getElementById("salary").value = document.getElementById("tdsalary" + num).innerText;
          document.getElementById("password").value = document.getElementById("tdpassword" + num).innerText;
     }

     function closeit() {
          var btn = document.getElementById("closeBtn");
          var modal = document.getElementById("my-modal");
          modal.style.display = "none";
          modal.style.transition = "1s";
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


<?php


if (isset($_POST["edit"])) {
     if (
          isset($_POST["teacherID"])
          && isset($_POST["Gender"])
          && isset($_POST["phonenumber"])
          && isset($_POST["address"])
          && isset($_POST["salary"])
          && isset($_POST["tName"])
          && isset($_POST["password"])
          && isset($_POST["email"])
     ) {
          $id = $_POST["teacherID"];
          $fname = $_POST["tName"];
          $gender = $_POST["Gender"];
          $phonenumber = $_POST["phonenumber"];
          $address = $_POST["address"];
          $salary = $_POST["salary"];
          //PREPARING QUERY
          try {
               $que =  $conn->prepare("UPDATE teacher set teacher_name = '" . $fname . "',
          password = '" . $password . "',
          home_address = '" . $address . "',
          phonenumber = '" . $phonenumber . "',
          salary = '" . $salary . "',    
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