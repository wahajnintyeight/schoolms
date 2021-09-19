<?php

include("../connection.php");
$id = $_GET['name'];
echo countVal("SELECT teacher_id from teacher where teacher_name like  '%" . $id . "%' ", $conn);
function countVal($query, $conn)
{
     $res = $conn->prepare($query);
     $res->execute();
     $result = $res->fetchColumn();
     return $result;
}
