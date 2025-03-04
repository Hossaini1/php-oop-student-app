<?php 
require_once("./includes/layout/header.php"); 
require_once("Student.php"); 

?>

<?php

$user = new Student;

if (isset($_GET['action'])  && $_GET['action'] == "edit") {
    $id = $_GET['id'];
    $result = $user->getOneUser($id);
}
?>

<div class="container">

<div class="card my-5">
   <div class="card-header d-flex justify-content-between align-items-center"><strong>Edit student</strong><a href="index.php" class="float-left btn btn-primary">Back</a> </div>

   <div class="card body">

   <div class="col">

   <form method="post" action="update.php">
   <input type="hidden" id="id" name="id" value="<?php echo $result['id'] ?>">
   <div class="form-group">
       <label for="name">Name</label>
       <input type="text" name="name" id="name" class="form-control" required value="<?php echo $result['name'] ?>">
   </div>

   <div class="form-group">
       <label for="field">Field</label>
       <input type="text" name="field" id="field" class="form-control" required value="<?php echo $result['field'] ?>">
   </div>

   <div class="form-group">
       <label for="age">Age</label>
       <input type="text" name="age" id="age" class="form-control" required value="<?php echo $result['age'] ?>">
   </div>

   <div class="form-group ">
       <button type="submit" name="edit" value="submit" id="submit" class="btn btn-primary">Save</button>
   </div>
   </form>
   </div>
   </div>


</div>
</div>