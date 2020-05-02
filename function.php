<?php 

$conn = mysqli_connect("localhost","root","","webport");


function input($data){
    global $conn;
      //ambil data
  $name = htmlspecialchars($data["name"]);
  $email = htmlspecialchars($data["email"]);
  $phone = htmlspecialchars($data["phone"]);
  $message= htmlspecialchars($data["message"]);

    // query inser data
    $query ="INSERT INTO datauser
    VALUES
    (null,'$name','$email','$phone','$message')
";
mysqli_query($conn,$query);

return mysqli_affected_rows($conn);

}

?>