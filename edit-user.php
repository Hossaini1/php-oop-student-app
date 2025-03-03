<?php require_once("./includes/layout/header.php"); ?>

<div class="container">

<div class="card my-5">
   <div class="card-header"><strong>Edit student</strong><a href="index.php" class="float-left btn btn-primary">Edit</a> </div>

   <div class="card body">

   <div class="col">

   <form method="post">

   <div class="form-group">
       <label for="name">Name</label>
       <input type="text" id="name" class="form-control" required>
   </div>

   <div class="form-group">
       <label for="field">Field</label>
       <input type="text" id="field" class="form-control" required>
   </div>

   <div class="form-group">
       <label for="age">Age</label>
       <input type="number" id="age" class="form-control" required>
   </div>

   <div class="form-group">
       <button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary">Submit</button>
   </div>
   </form>
   </div>
   </div>


</div>
</div>