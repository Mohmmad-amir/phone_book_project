<?php
include "header.php";
include "controller/data_model.php";
$model_object = new model();
if (isset($_POST['submit'])) {
    $insert = $model_object->contact();
    if ($insert == true) {
        header("location:contact.php");
    } else {
        echo "error";
    }
}

$contactData = $model_object->contact_select();

if (isset($_POST['delete'])) {
    $deleteID = $_GET['deleteID'];
    $delete = $model_object->deleteContactData($deleteID);
    if ($delete == true) {
        header('location:contact.php?msg=Data SuccessFully Deleted');
    } else
        echo "error";
}

?>

<div class="container">
    <button type="button" id="addNew" class="btn btn-success mt-2">New contact <i class="fas fa-plus"></i></button>


    <div id="formShow" style="display: none;">
        <form class="my-4" method="post" action="">
            <div class="row">
                <div class="col-md-3">
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                <div class="col-md-3">
                    <input type="text" name="phone" class="form-control" placeholder="Phone">
                </div>
                <div class="col-md-3">
                    <input type="email" name="email" class="form-control" placeholder="Contact Email">
                </div>
                <!-- <div class="col-md-3">
                    <input type="email" name="user_email" class="form-control" placeholder="user registration Email" required>
                </div> -->
            </div>
            <button type="submit" name="submit" class="btn btn-primary mt-1">save</button>
        </form>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover mt-5 table-primary">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th class="text-center" colspan="2">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($data = mysqli_fetch_assoc($contactData)) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $data['id'] ?></th>
                            <td><?php echo $data['name'] ?></td>
                            <td><?php echo $data['phone'] ?></td>
                            <td><?php echo $data['email'] ?></td>
                            <td>
                                <a href="edit_contact.php?editID=<?php echo $data['id'] ?>">
                                    <button type="submit" name="submit" class="btn btn-primary mt-1"><i class="fas fa-edit"></i> Update</button>

                                </a>
                            </td>
                            <td>
                                <form method="post" action="contact.php?deleteID=<?php echo $data['id'] ?>">
                                    <button type="submit" name="delete" class="btn btn-danger mt-1"><i class="fas fa-trash"></i> Delete</button>
                                </form>

                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php
include "footer.php";
?>