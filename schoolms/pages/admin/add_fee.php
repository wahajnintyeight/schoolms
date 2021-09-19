<?php
include("sidebar.php");
include("../connection.php");
?>
<div class="dashboard-wrapper" style="background-color:#faf6ed">
     <div class="container">
          <div class="row">
               <div class="addstudenttext">
                    <h1 id="hey">Add a Student fee</h1>
               </div>
               <div class="col-lg-12">
                    <div class="form-group">
                         <form action="" method="post">

                              <!-- <div class="block" data-fade="true">
                                   <label for="my-input">Registration Number</label>

                                   <input id="my-input" class="form-control" type="text" name="regnum">
                              </div> -->
                              <div class="block" data-fade="true">
                                   <label for="my-input">Student  Name</label>

                                   <input id="my-input" class="form-control" type="text" name="fname">
                              </div>
                              <div class="block" data-fade="true">
                                   <label for="my-input">Last Name</label>

                                   <input id="my-input" class="form-control" type="text" name="lname">
                              </div>
                              <div class="block" data-fade="true">
                                   <label for="my-input">Password</label>

                                   <input id="my-input" class="form-control" type="text" name="password">
                              </div>
                              <div class="block" data-fade="true">
                                   <label for="my-input">Guardian Name</label>

                                   <input id="my-input" class="form-control" type="text" name="guardian">
                              </div>
                              <div class="block" data-fade="true">

                                   <label for="my-input">Age</label>
                                   <input id="my-input" class="form-control" type="number" name="age">
                              </div>
                              <div class="block" data-fade="true">

                                   <label for="my-input">Gender</label>
                                   <input id="my-input" class="form-control" type="text" name="gender">
                              </div>
                              <br>
                              <div class="block" data-fade="true">
                                   <label for="my-input">Phonenumber</label>
                                   <input id="my-input" class="form-control" type="text" name="phonenumber">
                              </div>
                              <br>
                              <div class="block" data-fade="true">
                                   <label for="my-input">Home Address</label>
                                   <input id="my-input" class="form-control" type="text" name="address">
                              </div>
                              <br>
                              <div class="block" data-fade="true">
                                   <input type="submit" id="register" name="register" value="Register">
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>

</div>

<?php
//register button clicked
if (isset($_POST["register"])) {
     if (

          isset($_POST["fname"]) &&
          isset($_POST["lname"]) &&
          isset($_POST["guardian"]) &&
          isset($_POST["age"]) &&
          isset($_POST["gender"]) &&
          isset($_POST["phonenumber"]) &&
          isset($_POST["address"]) &&
          isset($_POST["password"])
     ) {
          // $regnum = $_POST["regnum"];
          $reg = "AESS" . rand(0, 200);
          $fname = $_POST["fname"];
          $lname = $_POST["lname"];
          $guardian = $_POST["guardian"];
          $age = $_POST["age"];
          $gender = $_POST["gender"];
          $phonenumber = $_POST["phonenumber"];
          $address = $_POST["address"];
          $password = $_POST["password"];
          try {
               $quer = $conn->prepare("INSERT into students (registration_num,
          student_fname,
          student_lname,
          guardian_name,
          sex,
          home_address,
          phonenumber,
          password,
          age
          )   values
          ('" . $reg . "',
           '" . $fname . "',
           '" . $lname . "',
           '" . $guardian . "',
           '" . $gender . "',
           '" . $address . "',
           '" . $phonenumber . "',
           '" . $password . "',
           '" . $age . "'
           )
           ");
               $quer->execute();
               echo "<script>alert('SUCCESS!');</script>";
               unset($_POST);
          } catch (PDOException $e) {
               echo "Failed to get DB handle: " . $e->getMessage() . "\n";
               unset($_POST);
               exit;
          }
     }
     unset($_POST);
}

?>

<style>
     .addstudenttext {
          margin-top: 150px;
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