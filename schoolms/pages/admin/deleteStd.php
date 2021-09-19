<?php
include("../connection.php");
$id = $_POST['id'];
// echo $_SESSION["theID"];
// echo "<script>alert(" . $_SESSION["theID"] . ");</script>";
if ($id > 0) {

     // Check record exists
     $checkRecord = mysqli_query($conn, "SELECT * FROM students WHERE student_id=" . $id);
     $totalrows = mysqli_num_rows($checkRecord);

     if ($totalrows > 0) {
          // Delete record
          $query = "DELETE FROM students WHERE student_id=" . $id;
          mysqli_query($con, $query);
          echo 1;
          exit;
     }
}
echo 0;
exit;
