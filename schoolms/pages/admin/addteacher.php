<?php
include("sidebar.php");
?>
<div class="dashboard-wrapper" style="background-color:#faf6ed">
     <div class="container">
          <div class="row">
               <div class="addteachertext">
                    <h1>Add a Teacher</h1>
               </div>
               <div class="col-lg-12">
                    <div class="form-group">
                         <form action="" method="POST">
                              <div class="block" data-fade="true">
                                   <label for="my-input">Teacher Name</label>
                                   <input id="my-input" class="form-control" type="text" name="teachername">
                              </div>
                              <div class="block" data-fade="true">
                                   <label for="my-input">Password</label>
                                   <input id="my-input" class="form-control" type="password" name="password">
                              </div>
                              <div class="block" data-fade="true">
                                   <label for="my-input">Phonenumber</label>
                                   <input id="my-input" class="form-control" type="text" name="phonenumber">
                              </div>
                              <div class="block" data-fade="true">
                                   <label for="my-input">Address</label>

                                   <input id="my-input" class="form-control" type="text" name="address">
                              </div>
                              <div class="block" data-fade="true">
                                   <label for="my-input">Email</label>
                                   <input id="my-input" class="form-control" type="text" name="email">
                              </div>
                              <br>
                              <div class="block" data-fade="true">
                                   <label for="my-input">Gender</label>
                                   <select class="gender" name="Gender">
                                        <option value="M">M</option>
                                        <option value="F">F</option>
                                   </select>
                                   <label for="my-input" style="margin-left:10px">Class </label>
                                   <!-- <br> -->
                                   <select onchange="displayID(this.value)" name="classteacher" id="">
                                        <option value="">SELECT A CLASS</option>
                                        <br>
                                        <?php $qu = $conn->query("SELECT * from section_level")->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($qu as $row) {
                                        ?>
                                             <option value="<?php echo $row["sectionname"]; ?>"><?php echo $row["sectionname"]; ?></option>
                                        <?php } ?>
                                   </select>
                                   <br>
                                   <input id="res" type="hidden" name="secID" value="">
                              </div>

                              <!-- <br> -->
                              <div class="block" data-fade="true">
                                   <label for="my-input">Salary</label>
                                   <input id="my-input" class="form-control" type="text" name="salary">
                              </div>
                              <br>
                              <div class="block" data-fade="true">
                                   <input type="submit" name="register" id="register" value="Add">
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>

</div>

<style>
     .addteachertext {
          margin-top: 150px;
          text-align: center;
     }

     .addteachertext h1 {
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
          border-radius: 0.2cm;
          border: 0px solid;
     }

     .gender {
          padding: 10px 70px 10px 70px;
          border-radius: 0.2cm;
          text-align: center;
          background-color: white;
     }

     select {
          border: 0px;
          border-radius: 1cm;
          padding: 10px 100px 10px 100px;
     }
</style>


<?php
if (isset($_POST["register"])) {
     if (
          isset($_POST["teachername"])
          &&
          isset($_POST["password"]) &&
          isset($_POST["phonenumber"]) &&
          isset($_POST["address"]) &&
          isset($_POST["email"]) &&
          isset($_POST["Gender"]) &&
          isset($_POST["salary"]) &&
          isset($_POST["secID"])
     ) {
          // echo "heeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee";
          $tname = $_POST["teachername"];
          $gender = $_POST["Gender"];
          $secID = $_POST["secID"];
          $phonenumber = $_POST["phonenumber"];
          $address = $_POST["address"];
          $password = $_POST["password"];
          $email = $_POST["email"];
          $salary = $_POST["salary"];
          try {
               $quer = $conn->prepare("INSERT into teacher (teacher_name,
          password,
          phnum,
          address,
          email,
          sex,
          salary,
          t_sid
          )   values
          ('" . $tname . "',
           '" . $password . "',
           '" . $phonenumber . "',
           '" . $address . "',
           '" . $email . "',
           '" . $gender . "',
           '" . $salary . "',
           '" . $secID . "'
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
     unset($_POST["register"]);
     unset($_POST);
}



?>

<script>
     var res = document.getElementById("res");

     function displayID(el) {
          var val = el;
          xamlhttp = new XMLHttpRequest();
          xamlhttp.onreadystatechange = function() {
               if (this.readyState == 4 && this.status == 200) {
                    res.value = this.responseText;
                    console.log(res);
               }
          };
          xamlhttp.open("GET", "displayclassname.php?name=" + val, true);
          xamlhttp.send();
     }
</script>

<script src="wakenbake.js"></script>