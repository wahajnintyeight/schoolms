<?php
session_start();

require_once "dompdf_0-8-4/autoload.inc.php";

use Dompdf\Dompdf;

include("../connection.php");
if (isset($_SESSION["student_id"])) {
     $stdID = $_SESSION["student_id"];
}
if (isset($_GET["id"])) {
     $id = $_GET["id"];
     // echo "challanpage.php?id=$id";
     $que = $conn->query("SELECT 
		(SUM(f.fee) + SUM(f.paper_fund) + SUM(f.fine) + SUM(f.other)) AS PayableFee,
		s.monthly_fee,
		s.sex,
		sl.sectionname,
		f.fee,
		f.paper_fund,
		f.other,
		f.fine,
		s.totalmarks,
		s.registration_num,
		s.student_fname,
		s.student_lname,
		s.guardian_name
	FROM
		students s
			JOIN
		fees f ON f.student_id = s.student_id
			JOIN
		section_level sl ON sl.section_id = s.s_sid
	WHERE
		s.student_id = '" . $id . "'
	ORDER BY (s.student_id)
       ");
     $row = $que->fetchAll(PDO::FETCH_ASSOC);
     $fn = $row[0]["student_fname"];
     $ln = $row[0]["student_lname"];
     $gender = $row[0]["sex"];
     $parent = $row[0]["guardian_name"];
     $fee = $row[0]["fee"];
     $sn = $row[0]["sectionname"];
     $other = $row[0]["other"];
     $reg = $row[0]["registration_num"];
     $marks = $row[0]["totalmarks"];
     $totalfee = $row[0]["PayableFee"];
     $dompdf = new DOMPDF(array('isPhpEnabled' => true));
     $file = "challanpage.php";
     $Date1 = date('Y-m-d');
     $date = new DateTime($Date1);
     $date->modify('+7 days');
     $Date2 = $date->format('Y-m-d');
     $content = file_get_contents($file);
     $s = "<h1>Your personal record</h1>
     <h2>Your ID: $id</h2>
     <h3>Your full name: $fn $ln</h3>
     <h3>Gender: $gender</h3>
     <h3>Guardian: $parent</h3>
     <h3>You are studying in class: $sn</h3>
     <h4>Your final marks: $marks</h4>
     <h4>Fee: $fee</h4>
     <h4>Paper Fund: $fee</h4>
     <h4>Other charges: $other</h4>
     <h2>Total payable amount: $totalfee</h2>
     <h3>Due date: $Date2 </h3>
     ";
     $dompdf->load_html($s);
     $dompdf->set_option('isPhpEnabled', true);
     $dompdf->render();
     $dompdf->stream("challan" . rand(0, 1000) . ".pdf");
}
