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
                                   <label for="Registration Number">Class ID:</label>
                                   <br>
                                   <input type="text" name="classid" id="stdid" placeholder="">
                                   <br>
                                   <label for="Registration Number">Class Name:</label>
                                   <br>
                                   <input type="text" name="classname" id="classname" placeholder="">
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

                    <h1>List all the Classes</h1>
                    <h6 style="color:gray">TIP: Double click to Edit. Single Click to Delete.</h6>
               </div>
               <div class="col-xl-12 col-lg-12 col-md-8 col-sm-12" id="table">
                    <div class="card">
                         <h5 class="card-header">All the available Classes</h5>
                         <div class="card-body p-0">
                              <div class="block" data-fade="true">
                                   <div class="table-responsive">
                                        <table class="table">
                                             <thead class="bg-light">
                                                  <tr class="border-0">
                                                       <th class="border-0">#</th>
                                                       <th class="border-0">Class Name</th>
                                                       <th class="border-0">Class Teacher</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <?php
                                                  $result = $conn->query("SELECT distinct teacher_name,
                                                  sectionname,section_id from section_level
                                                  join students on s_sid = section_id 
                                                  join teacher on t_sid = section_id
                                                  ")->fetchAll(PDO::FETCH_ASSOC);

                                                  foreach ($result as $rows) {
                                                  ?>
                                                       <tr ondblclick="perform(this,<?php echo $rows['section_id'] ?>)">
                                                            <td id="tdid<?php echo $rows['section_id']; ?>"><?php echo $rows['section_id']; ?></td>
                                                            <td id="tdclassname<?php echo $rows['section_id']; ?>"><?php echo $rows['sectionname']; ?></td>
                                                            <td id="tdregNum<?php echo $rows['section_id']; ?>"><?php echo $rows['teacher_name']; ?></td>
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

     tbody tr:hover {
          padding-left: 2.5px;
          transition: 1.2s ease;
          animation: infinite alternate;
          /* background-color: lightyellow; */
          background-image: linear-gradient(45deg, #e8cc3f, #f0bb48);
     }

     .addstudenttext h1 {
          text-align: center;
          margin-left: 20px;
     }

     #register:hover {
          transition: 0.5s ease-in-out;
          background-color: lightgreen;
     }

     .modal {
          position: absolute;
          animation: openup .5s cubic-bezier(.08, -0.13, .49, 1.24) alternate;
          /* display: inline-block; */
     }

     @keyframes openup {
          0% {
               opacity: 0;
               /* height: -500px; */
               /* margin-top: -600px; */
               /* transform: translateY(-100deg); */
          }

          50% {
               opacity: 0.5;

               /* margin-top: -500px; */
          }

          60% {
               opacity: 0.7;

               /* margin-top: -100px; */
          }

          100% {
               opacity: 1;
               /* margin-top: 50px; */

               /* transform: translateY(20deg); */

          }
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
</style>

<script src="wakenbake.js"></script>

<script>
     function closeit() {
          var btn = document.getElementById("closeBtn");
          var modal = document.getElementById("my-modal");
          modal.style.display = "none";
          modal.style.transition = "1s";
     }

     function perform(elem, num) {
          // alert("You have chosen to edit this record");
          var modal = document.getElementById("my-modal");
          modal.style.display = "inline-block";
          modal.style.transition = "1s";
          document.getElementById("stdid").value = document.getElementById("tdid" + num).innerText;
          // document.getElementById("stdid").disabled = true;
          document.getElementById("classname").value = document.getElementById("tdclassname" + num).innerText;
     }
</script>

<?php
if (isset($_POST["edit"])) {
     if (
          isset($_POST["classid"])
          && isset($_POST["classname"])
     ) {
          $id = $_POST["classid"];
          $cn = $_POST["classname"];
          // echo "eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee".$id." ".$cn;

          //PREPARING QUERY
          try {
               $que =  $conn->prepare("UPDATE section_level set
                sectionname = '" . $cn . "'
               where section_id = '" . $id . "'  
               ");
               //EXECUTING QUERY
               // echo "<script>console.log($que);</script>";
               $que->execute();
               echo "<script>
               var modal = document.getElementById('my-modal');
               modal.style.display = 'none';
               modal.style.transition = '1s';
               </script>";
               echo "<script>alert('Record Updated');</script>";
               echo "<script>windows.location('dashboard.php');</script>";
               //      echo "
               // <script> location.replace('liststudents.php'); </script>";
               // echo "<script>window.location.reload();</script>";
               // header("Refresh:0");
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