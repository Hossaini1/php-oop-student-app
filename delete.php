<?php 

require_once "student.php";

$user= new Student;
if (isset($_GET['action']) && $_GET['action'] == "delete"){
   $id = $_GET['id'];

   if($user->deleteData($id)) {
    header("location:index.php?delete");
   }
}
?> 