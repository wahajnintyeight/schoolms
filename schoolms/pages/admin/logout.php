<?php
session_start();
session_destroy();
echo "
<script> location.replace('../roothome.php'); </script>";

// echo "<script>alert('Admin has logged out!');";
