<?php

require_once("./includes/layout/header.php");
require_once("student.php");

?>

<?php if (isset($_GET["delete"])) :?>
    <p class="alert alert-info">Student deleted succesfuly!</p>
<?php endif ?>

<?php if (isset($_GET["update"]) && $_GET["update"] == "success") :?>
    <p class="alert alert-success">Student updated successfully!</p>
<?php endif ?>

<?php
$user = new Student;

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $field = $_POST['field'];

    $user->setName($name);
    $user->setAge($age);
    $user->setField($field);

    if ($user->insertData()) {
        // redirect nach added new student
        header("Location: index.php");
        exit();  // beended sie das skript
    } else {
        echo "<p class='alert alert-danger'>Error add student!</p>";
    }

?>

<p class="alert alert-info">Added new student succesfuly!</p>

<?php } ?>



<!-- main table -->


<div class="container">

    <div class="card my-5">

        <div class="card-header"><strong>List Students</strong>
            <a href="add-user.php" class="float-right btn btn-dark btn-sm">Add new student</a>
        </div>
    </div>

    <div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr class="bg-primary text-white">
                    <th>Name</th>
                    <th>age</th>
                    <th>filed</th>
                    <th class="text-center">Edit/Delete</th>

                </tr>
            </thead>

            <tbody>
                <?php foreach($user->readAll() as $key=>$value) : ?>
                <tr>
                    <td><?php echo $value["name"]; ?></td>
                    <td><?php echo $value["age"]; ?></td>
                    <td><?php echo $value["field"]; ?></td>
                    <td>
                        <a href="edit-user.php?action=edit&id=<?php echo $value['id'] ?>" class="text-primary">Edit</a>
                        <a href="delete.php?action=delete&id=<?php echo $value['id'] ?>" class="text-danger" onclick="return confirm('Do you want to delete the student?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>





<?php require_once("./includes/layout/footer.php"); ?>
</body>

</html>