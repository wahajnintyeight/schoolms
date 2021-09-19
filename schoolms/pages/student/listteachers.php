<?php
include("sidebar.php");
include("../connection.php");
?>
<div class="dashboard-wrapper" style="background-color:#faf6ed">
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
                                                       <!-- <th class="border-0">Gender</th> -->
                                                       <th class="border-0">Class(es) Assigned</th>
                                                       <th class="border-0">Salary</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  <?php
                                                  $result = $conn->query("SELECT * from teacher")->fetchAll(PDO::FETCH_ASSOC);

                                                  foreach ($result as $rows) { ?>

                                                       <tr ondblclick="perform()">
                                                            <td><?php echo $rows["teacher_id"]; ?></td>
                                                            <td><?php echo $rows["teacher_name"]; ?> </td>
                                                            <td><?php echo $rows["email"]; ?></td>
                                                            <td><?php echo $rows["sex"]; ?></td>
                                                            <td>6,9</td>
                                                            <td>$<span style="color:green" class="counter" data-count="<?php $row = intval($rows["salary"]);
                                                                                                    echo $row; ?>">$</span></td>
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
</style>

<script src="wakenbake.js"></script>

<script>
     function perform() {

          alert("You have chosen to edit this record");
     }

     function performsingle() {
          alert("You have chosen to delete this record");
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