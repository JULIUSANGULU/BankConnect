<?php
// session_start();
include("./db.php");
$username = $_SESSION['username'];
if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You have to log in first";
  header('location: index.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: index.php");
}
$query = "SELECT * from `users` WHERE username ='$username'";
$row = mysqli_query($data, $query);
$result = $row->fetch_assoc();
?>
<!DOCTYPE html>
<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="./user_dashboard_style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>User Dashboard</title>
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
        <li class="nav__item">
          <a class="nav__link nav__link--btn btn--show-modal" href="#">Open account</a>
        </li>
      </ul>
    </nav>
    <div class="container">
      <div class="flex-container">
        <div>
          <h1 class="h1">
            <?php if (isset($_SESSION['username'])) : ?>
              <p>
                Welcome
                <strong>
                  <?php echo $_SESSION['username'];

                  ?>
                </strong>
              </p>
              <p>
                <a href="index.php?logout='1'" style="color: red;">
                  Click here to Logout
                </a>
              </p>



            <?php endif ?>
          </h1>
          <h3 class="h3">Accounts</h3>
        </div>
        <div>
          <img class="avatar" src="img/Image avatar.png" alt="Profile Picture" class="logo">
        </div>
      </div>
      <div class="balance">
        <div class="flex-container">
          <div class="checking">
            <p class="font1">Checking
            <p>
            <p class="font2"><?php
              echo $result['account_number'];
              ?></p>

          </div>
          <div class="checking">
            <p class="font1"></p>
            <p class="font2">Available Balance</p>
            <?php
            echo $result['User_Balance'];
            ?><span>.00</span>
          </div>
        </div>
        <div class="flex-container2">
          <div class="icon-background">
            <i class="bi bi-send"></i>
            <p>Transfer</p>
          </div>
          <div class="icon-background" style="margin-left: 40px;">
            <i class="bi bi-box-arrow-down"></i>
            <p>Deposit</p>
          </div>
          <div class="icon-background" style="margin-left: 40px;">
            <i class="bi bi-credit-card"></i>
            <p>Deposit</p>
          </div>
          <div class="icon-background" style="margin-left: 40px;">
            <i class="bi bi-chat-square-dots"></i>
            <p>Message</p>
          </div>
        </div>

      </div>
</body>
<footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <script src="script.js"></script>
</footer>

</html>