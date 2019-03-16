<?php
// Fetching Values From URL
$email2 = $_POST['email1'];
$password2 = $_POST['password1'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydba";
$db_hostname='localhost';
$db_username='root';
$db_password='';
$db_dbname='mydba';
$db_tablename='form_element2';
$db_conn_str="mysql:host=" . $db_hostname . ";dbname=" . $db_dbname;

try {
    /*$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/


  $conn = new PDO($db_conn_str, $db_username, $db_password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);



    // prepare sql and bind parameters
   $stmt = $conn->prepare("select * from form_element2 where student_email=? and student_password=?");
   $stmt->bindValue(1, $email2);
    $stmt->bindParam(2, $password2);
    /*$stmt->bindParam(':password2', $password2);
    $stmt->bindParam(':age2', $age2);
    $stmt->bindParam(':dob2', $dob2);
    $stmt->bindParam(':address2', $address2);
    $stmt->bindParam(':phone2', $phone2);*/
  
    $stmt->execute();

$result = $stmt->fetchAll();

 if (count($result) == 0) {
    echo "login failed! <br />";
  } else {
    echo "Welcome, ";//.htmlentities($result[0]['name'])."!<br />";
  }
  
  $conn = null;
  //$this->db = null;
  //$stmt->close();
 }catch (PDOException $e) {
  echo "Error in PDO: " . $e->getMessage();
}

?>