<?php include("./db.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="shortcut icon" type="image/png" href="img/icon.png" />
  <link rel="icon" href="img/logo.png" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&display=swap" rel="stylesheet" />
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->

  <link rel="stylesheet" href="style.css" />
  <title>Bank App for koren</title>

  <script defer src="script.js"></script>
</head>

<body>
  <header class="header">
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
        <li class="nav__item open">
          <a class="open nav__link nav__link--btn btn--show-modal" href="#">Open account</a>
        </li>
      </ul>
    </nav>
    <div class="hero_container">
      <div class="header__title">
        <h1>
          Together
          <br />

          <span class="highlight">a better tomorrow</span>
        </h1>
        <h4>
          Experience Shinhan Financial Group, a World Class Financial
          Service..
        </h4>
        <button class="btn--text btn--scroll-to">
          Learn more &DownArrow;
        </button>
      </div>
      <div class="formContainer">
        <span class="errors">
          <?php echo "";
          include('errors.php'); ?>
        </span>
        <form action="" method="POST">

          <div class="boxInput">


            <input type="text" name="username" class="inputDetails" placeholder="username" />
            <input type="text" name="password" placeholder="password" class="inputDetails" />

            <span class="text-wrapper">Forgot Password ?</span>
            <div class="createAcount">
              <span class="span-text_wrapper">
                New user? create account
              </span>
            </div>
            <button class="sign_box" name="login_user" type="submit">
              Sign In
            </button>
          </div>
        </form>
      </div>
    </div>
  </header>

  <section class="section" id="section--1">
    <div class="section__title">
      <h2 class="section__description">Features</h2>
      <h3 class="section__header">
        Everything you need in a modern bank and more.
      </h3>
    </div>

    <div class="features_list">
      <div class="money_grow">
        <img src="./img/download (2).png" alt="" class="featuresImg" />
        <h2 class="featuresText">
          Watch Your <br />
          Money Grow
        </h2>
      </div>

      <div class="free_card">
        <img src="./img/download.jpeg" alt="" class="featuresImg" />
        <h2 class="featuresText">
          Free Debit <br />
          Card Included
        </h2>
      </div>
    </div>
  </section>

  <section class="section" id="section--2">
    <div class="section__title">
      <h2 class="section__description">About Us</h2>
      <h3 class="section__header">
        Everything as simple as possible, but no simpler.
      </h3>
      <p class="about_text">
        We are a commercial bank that encourages and delivers sustainable
        economic growth that is profitable, environmentally responsible and
        socially relevant.
      </p>
    </div>

    <div class="operations">
      <div class="operations__tab-container">
        <button class="btn operations__tab operations__tab--1 operations__tab--active" data-tab="1">
          <span>01</span>Instant Transfers
        </button>
        <button class="btn operations__tab operations__tab--2" data-tab="2">
          <span>02</span>Instant Loans
        </button>
        <button class="btn operations__tab operations__tab--3" data-tab="3">
          <span>03</span>Instant Closing
        </button>
      </div>
      <div class="operations__content operations__content--1 operations__content--active">
        <div class="operations__icon operations__icon--1">
          <img src="img/transfer.jpeg" alt="About Us" class="avatar" style="
                width: 50px; /* Set the width of the avatar */
                height: 50px; /* Set the height of the avatar */
                border-radius: 50%; /* Create a circular avatar */
                overflow: hidden; /* Hide any content that exceeds the circular shape */
                border: 0px solid #333;
              " />
        </div>
        <h5 class="operations__header">
          Tranfser money to anyone, instantly! No fees, no BS.
        </h5>
      </div>

      <div class="operations__content operations__content--2">
        <div class="operations__icon operations__icon--2">
          <svg>
            <use xlink:href="img/icons.svg#icon-home"></use>
          </svg>
        </div>
        <h5 class="operations__header">
          Buy a home or make your dreams come true, with instant loans.
        </h5>
      </div>
      <div class="operations__content operations__content--3">
        <div class="operations__icon operations__icon--3">
          <svg>
            <use xlink:href="img/icons.svg#icon-user-x"></use>
          </svg>
        </div>
        <h5 class="operations__header">
          No longer need your account? No problem! Close it instantly.
        </h5>
      </div>
    </div>
  </section>

  <section class="section" id="section--3">
    <div class="section__title section__title--testimonials">
      <h2 class="section__description">Not sure yet?</h2>
      <h3 class="section__header">
        Millions of people are already making their lifes simpler.
      </h3>
    </div>
  </section>

  <section class="section section--sign-up">
    <div class="section__title">
      <h3 class="section__header">
        The best day to join was one year ago. The second best is today!
      </h3>
    </div>
    <button class="btn btn--show-modal">Open your free account today!</button>
  </section>

  <footer class="footer">
    <ul class="footer__nav">
      <li class="footer__item">
        <a class="footer__link" href="#">About</a>
      </li>
      <li class="footer__item">
        <a class="footer__link" href="#">Pricing</a>
      </li>
      <li class="footer__item">
        <a class="footer__link" href="#">Terms of Use</a>
      </li>
      <li class="footer__item">
        <a class="footer__link" href="#">Privacy Policy</a>
      </li>
      <li class="footer__item">
        <a class="footer__link" href="#">Careers</a>
      </li>

      <li class="footer__item">
        <a class="footer__link" href="#">Contact Us</a>
      </li>
    </ul>
    <img src="./img/logo.png" alt="Logo" class="footer__logo" />
    <p class="footer__copyright">&copy; Copyright</p>
  </footer>

  <div class="modal hidden">
    <button class="btn--close-modal">&times;</button>
    <h2 class="modal__header">
      Open your bank account <br />
      in just <span class="highlight">5 minutes</span>
    </h2>
    <span class="errors">
      <?php include('errors.php'); ?>
    </span>
    <form class="modal__form" action="" method="POST">
      <div class="d-flex">
        <div class="container-fluid">
          <label>Username</label>
          <input type="text" name="username" />
        </div>
        <label>First Name</label>
        <input type="text" name="firstname" />
        <label>Last Name</label>
        <input type="text" name="lastname" />
        <label>National ID No.</label>
        <input type="text" name="national_id" />

        <label>Email Address</label>
        <input type="email" name="email" />
        <label>Password</label>
        <input type="password" name="password" />
        <label>Confirm Password</label>
        <input type="password" name="cpassword" />
      </div>
      <button class="btn" type="submit" name="reg_user">Sign Up</button>
    </form>
  </div>
  <!-- <div class="overlay hidden"></div> -->

  <script src="script.js"></script>
</body>

</html>