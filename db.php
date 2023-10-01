<?php


$host = "localhost";
$user = "root";
$password = "";
$db = "book_connect";

$data = mysqli_connect($host,$user,$password,$db);


 
// Starting the session, necessary
// for using session variables
session_start();

function getRandomStringMtrand($length = 11)
{
    $keys = array_merge(range(0, 9));
    $key = "";
    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[mt_rand(0, count($keys) - 1)];
    }
    $randomString = $key;
    return $randomString;
}
// Declaring and hoisting the variables
$username = $email = $firstname = $lastname = $create_datetime = $password_1 = $password_2 = $NId = "";
$errors = array();
$_SESSION['success'] = "";
// Registration code
if (isset($_POST['reg_user'])) {
  
    
    $username = mysqli_real_escape_string($data, $_POST['username']);
    $firstname = mysqli_real_escape_string($data, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($data, $_POST['lastname']);
    $email = mysqli_real_escape_string($data, $_POST['email']);
    $password_1 = mysqli_real_escape_string($data, $_POST['password']);
    $password_2 = mysqli_real_escape_string($data, $_POST['cpassword']);
    $create_datetime = date("Y-m-d H:i:s");
    $account_number = getRandomStringMtrand();
    $NId = mysqli_real_escape_string($data, $_POST['national_id']);
    // Ensuring that the user has not left any input field blank
    // error messages will be displayed for every blank input
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if (empty($lastname)) {
        array_push($errors, "Input Your Last Name");
    }
    if (empty($firstname)) {
        array_push($errors, "Input your First Name");
    }
    // $query = "SELECT * FROM `users`";
    // $result = mysqli_query($data, $query, MYSQLI_USE_RESULT);
    // while ($row = mysqli_fetch_array($result)) {
    //     if ($account_number == $row['account_number']) {
    //         $account_number = getRandomStringMtrand();
    //     }else{
    //         break;
    //     }
    // }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
        // Checking if the passwords match
    }
    // If the form is error free, then register the user
    if (count($errors) == 0) {
         
        // Password encryption to increase data security
        $password = md5($password_1);
         
        // Inserting data into table
        $query = "INSERT INTO users (Username, first_name, last_name, National_Id, Email_Address, passcode,account_number, create_date)
                  VALUES('$username', '$firstname', '$lastname' , '$NId' ,'$email', '$password','$account_number' ,'$create_datetime')";
         
        mysqli_query($data, $query);
  
        // Storing username of the logged in user

        $_SESSION['username'] = $username;
         

        $_SESSION['success'] = "You have logged in";
         
        header('location: index.php');
    }
}
  
// User login
if (isset($_POST['login_user'])) {
    $username = $password = "";     

    $username = mysqli_real_escape_string($data, $_POST['username']);
    $password = mysqli_real_escape_string($data, $_POST['password']);
  
    // Error message if the input field is left blank
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    // $query = "SELECT * FROM `users` ORDER BY id";
    // $result = $data->query($query);
    // while ($row = mysqli_fetch_array($result))
    // {
    //     if ($row['username'] === $_POST['username']) {
    //         array_push($errors, "Enter Unique Username ");
    //     }else{
    //         break;
    //     }
    // }
   
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username=
                '$username' AND passcode='$password'";
        $row = mysqli_query($data, $query);
        $result = $row->fetch_assoc();

        if ($result["user_type"] == "user") {

            $_SESSION["username"] = $username;
            header("location:user_dashboard.php");
        } elseif ($result["user_type"] == "admin") {

            $_SESSION["username"] = $username;
            header("location:admin_dashboard.php");
        }
        
  
    
        if (mysqli_num_rows($results) == 1) {
            
            $_SESSION['username'] = $username;

            $_SESSION['success'] = "You have logged in!";
            
            header('location: user_dashboard.php');
        }
        else {
             
            // If the username and password doesn't match
            array_push($errors, "Username or password incorrect");
        }
    }
}



