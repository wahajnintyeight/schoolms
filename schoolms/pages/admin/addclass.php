<?php
include("sidebar.php");
?>
<div class="dashboard-wrapper" style="background-color:#faf6ed">
     <div class="container">
          <div class="row">
               <div class="addCLASStext">
                    <h1>Add a CLASS</h1>
               </div>
               <div class="col-lg-12">
                    <div class="form-group">
                         <form action="" method="POST">
                              <div class="block" data-fade="true">
                                   <label for="my-input">Class Name</label>
                                   <input id="my-input" class="form-control" type="text" name="classname">
                                   <br>
                              </div>
                              <!-- <div class="block" data-fade="true">
                                   <label for="my-input">Class Teacher</label>
                                   <br>
                                   <select onchange="displayID(this.value)" name="classteacher" id="">
                                        <option value="">SELECT A TEACHER</option>
                                        <br>
                                        <?php // $qu = $conn->query("SELECT * from teacher")->fetchAll(PDO::FETCH_ASSOC);
                                        //foreach ($qu as $row) {
                                        ?>
                                             <option value="<?php // echo $row["teacher_name"]; 
                                                            ?>"><?php //echo $row["teacher_name"]; 
                                                                                                    ?></option>
                                        <?php // } 
                                        ?>
                                   </select>
                                   <br>
                                   <input id="res" type="hidden" name="teacherID" value="">
                              </div> -->
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
     .addCLASStext {
          margin-top: 150px;
          text-align: center;
     }

     select {
          border: 0px;
          border-radius: 1cm;
          padding: 10px 100px 10px 100px;
     }

     .addCLASStext h1 {
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


<?php

if (isset($_POST["register"])) {
     if (

          isset($_POST["classname"])
          //  &&
          // isset($_POST["teacherID"])

     ) {


          $classname = $_POST["classname"];
          $classteacher = $_POST["teacherID"];
          try {
               $quer = $conn->prepare("INSERT into section_level (sectionname) values ('" . $classname . "') ");
               $quer->execute();
               // $newSecID = $conn->prepare("SELECT section_id where sectionname = '" . $classname . "' ");
               // $secID = $newSecID->fetch();
               // $sec = $secID[0];
               // $sec = countVal("SELECT section_id from section_level where sectionname like '%" . $classname . "%' ", $conn);
               // $quer2 = $conn->prepare("UPDATE teacher set t_sid = $sec where teacher_id = '" . $classteacher . "' ");
               // $quer2->execute();
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

function countVal($query, $conn)
{
     $res = $conn->prepare($query);
     $res->execute();
     $result = $res->fetchColumn();
     return $result;
}
?>




<script src="wakenbake.js"></script>
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
          xamlhttp.open("GET", "displayid.php?name=" + val, true);
          xamlhttp.send();
     }
</script>