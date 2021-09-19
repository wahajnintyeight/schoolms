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
                              <form action="" method="POST">
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
                                   <label for="Registration Number">FEE:</label>
                                   <br>
                                   <input type="text" name="fee" id="fee" placeholder="fee" >
                                   <br>
                                   <label for="Registration Number">Paper_Fund:</label>
                                   <br>
                                   <input type="text" name="Paper_Fund" id="Paper_Fund" placeholder="Paper_Fund Name" value="0">
                                   <br>
                                   <label for="Registration Number">Remaing_amount:</label>
                                   <br>
                                   <input type="text" name="Remaing_amount" id="Remaing_amount" placeholder="Remaing_amount" value="0">
                                   <br>
                                   <label for="Registration Number">Fine:</label>
                                   <br>
                                   <input type="text" name="Fine" id="Fine" placeholder="Fine" value="0">
                                   <br>
                                   <label for="Registration Number">Others:</label>
                                   <br>
                                   <input type="text" name="Others" id="Others" placeholder="Others" value="0">
                                   <br>
                                   <hr>
                                   <input type="submit" name="Addfee" class="btn-primary" style="text-align:center;position:relative" value="Addfee">
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
                    <h6 style="color:gray">TIP: Double click to Add fee. .</h6>
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
                                        </table>
										<br>
										                         <h5 class="card-header">All Fee Paid Students</h5>
											 <br>
											<div class="table-responsive">
                                        <table class="table">
                                             <thead class="bg-light">
											 <tr class="border-0">
                                                       <th class="border-0">#</th>
                                                       <th class="border-0">Image</th>
                                                       <th class="border-0">Registeration Number</th>
                                                       <th class="border-0">First Name</th>
                                                       <th class="border-0">Last Name</th>
                                                       <th class="border-0">Fee Paid</th>
													   <th class="border-0">Fee Remaining</th>
                                                     <th class="border-0">Fee Paid in month</th>

                                                  </tr>
												  </thead>
											 <tbody>
                                                  <?php
                                                  $result = $conn->query("SELECT Fees.remaining,students.student_id,students.registration_num,students.student_fname,students.student_lname,Fees.fee,monthname(Fees.time) as Month
												  from students join Fees on Fees.student_id = students.student_id ")->fetchAll(PDO::FETCH_ASSOC);
                                                  // $col = $result->fetchAll(PDO::FETCH_ASSOC);
                                                  foreach ($result as $rows) {
                                                       $i = 0; ?>
                                                       <tr >
                                                            <td id="tdid<?php echo $rows['student_id']; ?>"><?php echo $rows['student_id']; ?></td>
                                                            <td>
                                                                 <div class="m-r-10"><span class="fas fa-user fa-lg"></span></div>
                                                            </td>
                                                            <td id="tdregNum<?php echo $rows['student_id']; ?>"><?php echo $rows['registration_num']; ?></td>
                                                            <td id="tdfn<?php echo $rows['student_id']; ?>"><?php echo $rows['student_fname']; ?> </td>
                                                            <td id="tdln<?php echo $rows['student_id']; ?>"><?php echo $rows['student_lname']; ?></td>
																
                                                            <td id="tdln<?php echo $rows['student_id']; ?>"><?php echo $rows['fee']; ?></td>
															    <td id="tdln<?php echo $rows['student_id']; ?>"><?php echo $rows['remaining']; ?></td>
                                                        
                                                            <td id="tdln<?php echo $rows['student_id']; ?>"><?php echo $rows['Month']; ?></td>
                                                        
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
<?php

//SELECT  fees.fee-(sum(students.monthly_fee) + sum(fees.paper_fund) +sum(fees.remaining)+ sum(fees.fine) + sum(fees.other)) from students join fees on students.student_id=fees.student_id where students.student_id = 6 ORDER by (fees.time)

?>
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
		  document.getElementById("fn").disabled = true;
          document.getElementById("ln").value = document.getElementById("tdln" + num).innerText;
		  document.getElementById("ln").disabled = true;
          
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




if (isset($_POST["Addfee"])) {
     if (isset($_POST["stdid"])  
	 && isset($_POST["fee"]) 
	 && isset($_POST["Paper_Fund"]) 
	 &&  isset($_POST["Remaing_amount"]) 
	 && isset($_POST["Fine"]) 
	 && isset($_POST["Others"])) 
	 {
		 
          // if (isset($_POST["fn"])) {

           
          $id = $_POST["stdid"];
          $fee = $_POST["fee"];//Fee
          $Paper_Fund = $_POST["Paper_Fund"];//Paper_Fund
          $Remaing_amount = $_POST["Remaing_amount"];//Remaing_amount
          $Fine = $_POST["Fine"];
          $Others = $_POST["Others"];
          //PREPARING QUERY
          try {
			  
			  $query2 = $conn->prepare("SELECT students.monthly_fee as mfee,fees.paper_fund as pfund,fees.remaining as feerem,
			  fees.fine as fine,fees.other as other from students join fees on students.student_id=fees.student_id 
			   where students.student_id = '".$id."' and month(fees.time)= month(curdate()) order by students.student_id desc 
			   limit 1");
			   $query2->execute();
			   $result = $query2->fetch(PDO::FETCH_ASSOC);
			   $rem_fee = $result["feerem"];
			   echo"Ddddddddddddddddddddddddddddddd" .$rem_fee;
			  echo"<script>
			  //$()
			  
			  </script>";
               $que =  $conn->prepare("INSERT into fees (student_id,
          fee,
          paper_fund,
          remaining,
          fine,
          other
          )   values
		  (
		  '" . $id . "',
          '" . $fee . "',
          '" . $Paper_Fund . "',
          '" . $Remaing_amount . "',
          '" . $Fine . "',
          '" . $Others . "'
		   )
		  ");
               //EXECUTING QUERY
               // echo "<script>console.log($que);</script>";
			   $que->execute();
			   
               /*$query2 = $conn->prepare("SELECT  fees.fee-(sum(students.monthly_fee) + 
			   sum(fees.paper_fund) +sum(fees.remaining)+ sum(fees.fine) + sum(fees.other)) as RemainingFee 
			   from students join fees on students.student_id=fees.student_id 
			   where students.student_id = '".$id."' ORDER by (fees.time)" );
			   
			   $query2->execute();
			   $result = $query2->fetch(PDO::FETCH_ASSOC);
			   $rem_fee = $result["RemainingFee"];
			   
			   
			   
			   $query3 = $conn->prepare("update fees set remaining= '".$rem_fee."' where student_id = '".$id."' ");
               $query3->execute();
			   */
              
               echo "<script>
               var modal = document.getElementById('my-modal');
               modal.style.display = 'none';
               modal.style.transition = '1s';
               </script>";
               //      echo "
               // <script> location.replace('liststudents.php'); </script>";
               // echo "<script>window.location.reload();</script>";
               //header("Refresh:0");
			   echo "<script>alert('SUCCESS!');</script>";
               unset($_POST);
          } catch (PDOException $e) {
               echo "Failed to get DB handle: " . $e->getMessage() . "\n";
               unset($_POST);
               exit;
          }
     }
}
unset($_POST);


/*
<th class="border-0">#</th>
                                                       <th class="border-0">Image</th>
                                                       <th class="border-0">Registeration Number</th>
                                                       <th class="border-0">First Name</th>
                                                       <th class="border-0">Last Name</th>
                                                       <th class="border-0">Fee</th>
                                                       <th class="border-0">Paper_Fund</th>
                                                       <th class="border-0">Remaing_amount</th>
                                                       <th class="border-0">Guardian</th>
                                                       <th class="border-0">Fine</th>
                                                       <th class="border-0">Others</th>
*/

?>