<?php
include "header.php";
include "controller/data_model.php";
$model_object = new model();

$editID = $_GET['editID'];

$tableData = $model_object->editSelectContact($editID);
$data = mysqli_fetch_assoc($tableData);
$message = "";
if (isset($_POST['update'])) {
    $update = $model_object->editContact($editID);
    if ($update == true) {
        header('location:contact.php?msg=Data SuccessFully Updated');
    } else
        echo "error";
}
?>

<form class="my-4" method="post" action="">
    <div class="row">
        <div class="col-md-3">
            <input type="text" value="<?php echo $data['name'] ?>" name="name" class="form-control" placeholder="Name">
        </div>
        <div class="col-md-3">
            <input type="text" value="<?php echo $data['phone'] ?>" name="phone" class="form-control" placeholder="Phone">
        </div>
        <div class="col-md-3">
            <input type="email" value="<?php echo $data['email'] ?>" name="email" class="form-control" placeholder="Contact Email">
        </div>
        <div class="col-md-3">
            <input type="email" value="<?php echo $data['user_email'] ?>" name="user_email" class="form-control" placeholder="user registration Email" required>
        </div>
    </div>
    <button type="submit" name="update" class="btn btn-primary mt-1">save</button>
</form>
<?php
include "footer.php";
?>