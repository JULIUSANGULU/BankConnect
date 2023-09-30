<!DOCTYPE html>
<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="./admin_dashboard_style.css">

  <title>Admin Dashboard</title>
  <style>
    /* Styling for the modal */
    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.7);
      justify-content: center;
      align-items: center;
      z-index: 1;
    }

    /* Styling for the modal content */
    .modal-content {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      text-align: center;
    }

    /* Styling for the close button */
    .close {
      position: absolute;
      top: 10px;
      right: 10px;
      cursor: pointer;
    }
  </style>
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
          <th scope="col">Account Number</th>
          <!--Create a new row for account number-->
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
            <form action="" class="d-flex flex-row" method="POST">
          echo "<td>"  ?>
          <div class=" d-flex flex-row">
            <button type="submit" class="btn btn-outline-success me-3" name="update" id="openModalBtn" onclick="openModal()">
              Edit </button>
          </div> <?php echo "</td>";
                  echo "<td>"  ?>
          <div class=" d-flex flex-row">
            <button type="submit" class="btn btn-outline-success me-3" name="update" id="openModalBtn" onclick="openModal()">
              Edit </button>
          </div> <?php echo "</td>" . "</tr>";
                  // if (isset($_POST['update'])) {
                  //    $id = $row['id'];
                  //  $current =  $row['User_Balance'] = mysqli_real_escape_string($data, $_POST['change_balance']);
                  //   $query = "UPDATE `users` SET User_Balance ='$current' where id = '$id'";
                  //   mysqli_query($data, $query);
                  // }
                }


                  ?>

      </tbody>
    </table>

    <!-- The Modal -->
    <div id="myModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <span class="close" id="closeModalBtn" onclick="closeModal()">&times;</span>
        <h2>Modal Form</h2>
        <form>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name"><br><br>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email"><br><br>
          <button type="submit">Submit</button>
        </form>
      </div>
    </div>
<?php
echo "<br>Using mt_rand(): " . getRandomStringMtrand();
  ?>
  </div>
</body>
<footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <script src="script.js"></script>
  <script>
    // Function to open the modal
    function openModal() {
      const modal = document.getElementById('myModal');
      modal.style.display = 'block';
    }

    // Function to close the modal
    function closeModal() {
      const modal = document.getElementById('myModal');
      modal.style.display = 'none';
    }

    // Close the modal if the user clicks outside of it
    window.addEventListener('click', (event) => {
      const modal = document.getElementById('myModal');
      if (event.target === modal) {
        modal.style.display = 'none';
      }
    });
  </script>


</footer>

</html>