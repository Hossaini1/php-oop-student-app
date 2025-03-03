<?php require_once("./includes/layout/header.php"); ?>

<div class="container">

<div class="card my-5 d-flex justify-content-spaceBetween ">
   <div class="card-header">
    <strong>Add new student</strong>
   <a href="index.php" class="float-right btn btn-primary text-right">Back</a>
 </div>

   <div class="card body">

   <div class="col">

   <form method="post" action="index.php">

   <div class="form-group">
       <label for="name">Name</label>
       <input type="text" name="name" id="name" class="form-control" required>
   </div>

   <div class="form-group">
       <label for="field">Field</label>
       <input type="text" name="field" id="field" class="form-control" required>
   </div>

   <div class="form-group">
       <label for="age">Age</label>
       <input type="number" name="age" id="age" class="form-control" required>
   </div>

   <div class="form-group">
       <button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary">Submit</button>
   </div>
   </form>
   </div>
   </div>


</div>
</div>