<?php
 session_start();
 require_once 'db_conn.php';

 if(isset($_POST['inputEmail']))
 {
  $email = trim(mysqli_real_escape_string($conn, $_POST['inputEmail']));
  $password = trim(mysqli_real_escape_string($conn, $_POST['inputPassword']));

  try
  { 
  
  $query = "SELECT * FROM users WHERE email='$email'";

  include 'db_runQuery.php';

  $returnValue = "Email or password is incorrect";
  if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            if($row['password'] == $password) {
              $returnValue = "ok"; // log in
              $_SESSION['userID'] = $row['id'];
            }
        }
  }

    echo $returnValue; 
  }
  catch(exception $e){
   echo $e->getMessage();
  }
 }
include 'db_close.php';
?>