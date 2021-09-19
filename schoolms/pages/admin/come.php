<?php
if (isset($_POST["edit"])) {
     if (isset($_POST["id"]) && isset($_POST["fn"]) &&  isset($_POST["ln"]) && isset($_POST["guardian"]) && isset($_POST["age"]) &&  isset($_POST["gender"]) && isset($_POST["phonenumber"]) && isset($_POST["address"])) {
          // if (isset($_POST["fn"])) {

               $fname = $_POST["fn"];
               echo $fname;
          }
          if (isset($_POST["stdid"])) {
               $id = $_POST["stdid"];
               echo $id;
          
          $lname = $_POST["ln"];
          echo $lname;
          $guardian = $_POST["guardian"];
          echo $guardian;

          $age = $_POST["age"];
          echo $age;

          $gender = $_POST["gender"];
          echo $gender;

          $phonenumber = $_POST["phonenumber"];
          echo $phonenumber;
          $address = $_POST["address"];
          echo $address;
          // //PREPARING QUERY
          // try {
          //      $que =  $conn->prepare("UPDATE students set student_fname = '" . $fname . "',
          // student_lname = '" . $lname . "',
          // sex = '" . $gender . "',
          // home_address = '" . $address . "',
          // phonenumber = '" . $phonenumber . "',
          // age = '" . $age . "',    
          // guardian_name = '" . $guardian . "'  
          // where student_id = '" . $id . "'  
          // ");
          //      //EXECUTING QUERY
          //      // echo "<script>console.log($que);</script>";
          //      $que->execute();
          //      // echo "<script>
          //      // var modal = document.getElementById('my-modal');
          //      // modal.style.display = 'none';
          //      // modal.style.transition = '1s';
          //      // </script>";
          //      echo "<script>alert('Hey');</script>";
          //      echo "<script> location.replace('liststudents.php'); </script>";
          // } catch (PDOException $e) {
          //      echo "Failed to get DB handle: " . $e->getMessage() . "\n";
          //      unset($_POST);
          //      exit;
          // }
     }
}
