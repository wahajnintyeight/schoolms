<?php

include("../connection.php");
$id = $_GET['name'];
echo countVal("SELECT student_id from students where registration_num like  '%" . $id . "%' ", $conn);
function countVal($query, $conn)
{
     $res = $conn->prepare($query);
     $res->execute();
     $result = $res->fetchColumn();
     return $result;
}
