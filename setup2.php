<?php
$link = mysqli_connect("localhost", "root", "", "r3ncoronadb",);
 // Check connection
if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$Gender = mysqli_real_escape_string($link, $_REQUEST['Gender']);
 $phone=mysqli_real_escape_string($link, $_REQUEST['phone']);
 $address=mysqli_real_escape_string($link, $_REQUEST['address']);
$symptom=mysqli_real_escape_string($link, $_REQUEST['symptom']);
// Attempt insert query execution
$sql = "INSERT INTO ukdistrictcases (first_name, last_name, Gender, phone,address, symptom) VALUES ('$first_name', '$last_name', '$Gender','$phone','$address','$symptom')";
if(mysqli_query($link, $sql)){?>
<script>
window.alert("Data added successfully");

window.location.href = "Corona_Index.php";
</script><?php
}

else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);

?>
