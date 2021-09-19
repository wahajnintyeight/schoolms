<?php

include("../connection.php");
$id = $_GET['name'];
echo countVal("SELECT section_id from section_level where sectionname like  '%" . $id . "%' ", $conn);
function countVal($query, $conn)
{
     $res = $conn->prepare($query);
     $res->execute();
     $result = $res->fetchColumn();
     return $result;
}
