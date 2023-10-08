<?php include("./db.php");
$id = $_GET['id'];
$query = "SELECT * FROM `users` WHERE id = '$id'";
$row = mysqli_query($data, $query);
$result = $row->fetch_assoc();
if (isset($_POST['update_account'])) {

    $current = mysqli_real_escape_string($data, $_POST['change_balance']);
    $query = "UPDATE `users` SET User_Balance ='$current' where id = '$id'";
    mysqli_query($data, $query);
    header("location:admin_dashboard.php");
}
?>
<!DOCTYPE html>

<html>

<head>
    <link rel="shortcut icon" type="image/png" href="img/icon.png" />
    <link rel="icon" href="img/logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="edit_account_number.css">
    <title>Edit Account Balance here</title>
</head>

<body class="container">
    <?php
    if (isset($_GET['id'])) {
    ?>
        <div class="container-fluid">
            <form method="POST" action="">
                <label for="">
                    <h1>Change Account Balance of <?php echo $result['Username']  ?> </h1>
                </label> <br> <br>
                <input class="form-control" type="int" placeholder="Enter a New Value" name="change_balance"> <br>
                <button type="submit" name="update_account" class="btn btn-success">Submit</button>
            </form>
        </div>
    <?php } ?>

</body>
<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</footer>

</html>