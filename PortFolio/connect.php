 <?php
// $conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');
// if(isset($_POST['send'])){

//    $name = mysqli_real_escape_string($conn, $_POST['name']);
//    $email = mysqli_real_escape_string($conn, $_POST['email']);
//    $number = mysqli_real_escape_string($conn, $_POST['number']);
//    $msg = mysqli_real_escape_string($conn, $_POST['message']);

//    $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name='$name' AND email='$email' AND number='$number' AND message='$msg'") or die('query failed');

//    if(mysqli_num_rows($select_message)>0){
//       $message[] = 'message sent already!';
//    }else{
//       mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number,message) VALUES
//       ('$name','$email','$number','$msg')") or die('query failed');
//     $message[] = 'message sent successful';

//    }

// }


// */
// <?php
// if(isset($$message)){
//    foreach($$message as $$message){
//       echo '
//       <div class="message">
//       <span>'.$message.' </span>
//       <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
//    </div>
//    ';
//    }
// }


// $name = $_POST['name'];
// $email = $_POST['email'];
// $number = $_POST['number'];
// $message = $_POST['message'];

// //database connection

// $conn = new mysqli('localhost', 'root', '', 'contact_db');
// if($conn->connect_error){
//    die('Connection failed :'. $conn->connect_error);

// }else{
//    $stmt = $conn->prepare( "INSERT INTO contact_form(name,email,number,message) value(?,?,?,?)");
//    $stmt->bind_param( $name, $email, $number, $message);
//    $stmt->execute();
//    echo "contact-form submitted succesfully";
//    $stmt->close();
//    $conn ->close();
// }
 
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "contact_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn){
    echo "connection ok";
}else{
   echo "connection failed";
}




?>

