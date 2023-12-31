<?php
  $firstname = $_POST["firstname"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  $host = "localhost";
  $dbname = "message_db";
  $username = "root";
  $password = "";
  
  $conn = mysqli_connect(hostname: $host,
                         username: $username,
                         password: $password,
                         database: $dbname);
  if($conn->connect_errno)
    {  
      die("Connection error: " . mysqli_connect_error());
    }
    
    $sql = "INSERT INTO message (name, email, subject, message)
            VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    
  if ( ! mysqli_stmt_prepare($stmt, $sql)) 
  {
    die(mysqli_error($conn));
  }

  mysqli_stmt_bind_param($stmt, "ssss",
                         $firstname,
                         $email,
                         $subject,
                         $message);

  mysqli_stmt_execute($stmt);

  echo "Record saved.";

?>
