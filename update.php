<?php 
require_once "student.php";
?>

<?php 

$user = new Student;

if (isset($_POST['edit']) ) {
  if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $field = $_POST['field'];
    $age = $_POST['age'];

    $user->setName($name);
    $user->setField($field);
    $user->setAge($age);
  }

    if ($user->updateData($id)) {
       header("location:index.php?update=success");
    } else {
        echo "<p class='alert alert-danger'>Error updating student!</p>";
    }
    
}


?>