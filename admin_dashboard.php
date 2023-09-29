<!DOCTYPE html>
<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="./admin_dashboard_style.css">

  <title>Admin Dashboard</title>
</head>

<body>
  <div class="container-fluid">
    <nav class="nav">
      <img src="./img/logo.png" alt="logo" class="nav__logo" id="logo" />
      <ul class="nav__links">
        <li class="nav__item">
          <a class="nav__link" href="#section--1">Home</a>
        </li>
        <li class="nav__item">
          <a class="nav__link" href="#section--2">About</a>
        </li>
        <li class="nav__item">
          <a class="nav__link" href="#section--3">Invest</a>
        </li>
      </ul>
    </nav>
    <h1 class="h1">This is the admin dashboard!</h1>
    <p class="paragraph1">*The admin has oversight of all user accounts.</p>
  </div>
  <div>

    <table class="table table-success table-striped h-75">
      <div class="heading2">
        <h2 class="h2">User Table</h2>
      </div>
      <thead>
        <tr class="">
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Username</th>
          <th scope="col">Email Address</th>
          <th scope="col">National ID</th>
          <th scope="col">User Type</th>
          <th scope="col">Account Balance</th>
          <th scope="col">Edit Account Balance</th>
        </tr>
      </thead>
      <tbody class="p-4">
        <?php
        include("./db.php");
        $query = "SELECT * FROM `users` ORDER BY id";
        $result = $data->query($query);
        while ($row = mysqli_fetch_array($result)) {
          echo "<tr>";
          echo "<td>" . $row['id'] . "</td>";
          echo "<td>" . $row['first_name'] . "</td>";
          echo "<td>" . $row['last_name'] . "</td>";
          echo "<td>" . $row['Username'] . "</td>";
          echo "<td>" . $row['Email_Address'] . "</td>";
          echo "<td>" . $row['National_Id'] . "</td>";
          echo "<td>" . $row['user_type'] . "</td>";
          echo "<td>" . $row['User_Balance'] . "</td>";
          echo "<td>" ?> <div class="d-flex">
            <form action="" class="d-flex flex-row" method="POST">
              <input type="number" name="change_balance" class="form-control" placeholder="Change Balance">
              <button type="submit" class="btn btn-outline-success me-3" name="update"> Edit </button>
            </form>
          </div> <?php echo "</tr>";
                  if (isset($_POST['update'])) {
                     $id = $row['id'];
                   $current =  $row['User_Balance'] = mysqli_real_escape_string($data, $_POST['change_balance']);
                    $query = "UPDATE `users` SET User_Balance ='$current' where id = '$id'";
                    mysqli_query($data, $query);
                  }
                }

                
                  ?>

      </tbody>
    </table>
  </div>
</body>
<footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <script src="script.js"></script>
</footer>

</html>