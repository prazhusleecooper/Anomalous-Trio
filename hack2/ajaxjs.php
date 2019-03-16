<?php
// Fetching Values From URL
$name2 = $_POST['name1'];
$email2 = $_POST['email1'];
$password2 = $_POST['password1'];
$dob2 = $_POST['dob1'];
$age2 = $_POST['age1'];
$address2 = $_POST['address1'];
$phone2 = $_POST['phone1'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydba";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO form_element2 (student_name, student_email,student_password,student_age,student_dob,student_address,student_phone)
    VALUES (:name2, :email2, :password2, :age2, :dob2, :address2, :phone2)");
    $stmt->bindParam(':name2', $name2);
    $stmt->bindParam(':email2', $email2);
    $stmt->bindParam(':password2', $password2);
    $stmt->bindParam(':age2', $age2);
    $stmt->bindParam(':dob2', $dob2);
    $stmt->bindParam(':address2', $address2);
    $stmt->bindParam(':phone2', $phone2);
  
    $stmt->execute();
    
    echo "New records created successfully";
   
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }


?>