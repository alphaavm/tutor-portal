 <?php
 $Name=filter_input(INPUT_POST,'name');
 $Surname=filter_input(INPUT_POST,'surname');
 $Age=filter_input(INPUT_POST,'age');
 $Phoneno=filter_input(INPUT_POST,'phno');
 $EmailId = filter_input(INPUT_POST, 'eid');
 $Password = filter_input(INPUT_POST, 'pass');
 $Gender=filter_input(INPUT_POST,'sex');
 $Area=filter_input(INPUT_POST,'area');
 
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "mydatabase";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql = "INSERT INTO tutors_info (Name,Surname,Age,Phoneno,EmailId,Password,Gender,Area)
  values ('$Name','$Surname','Age','$Phoneno','$EmailId','$Password','$Gender','$Area')";
  
 if ($conn->query($sql)===TRUE){
    echo "Thankyou For Teaming up with us we appreciate alot!";
  }
  }
  else{
    echo "Error: ". $sql ."
  $conn->error;
  }
  $conn->close();
}
}
?>