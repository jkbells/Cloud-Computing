<?php
echo "<h1> Welcome to the class of Cloud</h1>";
$conn = mysqli_connect("database-2.cof9kwjlflbr.us-east-1.rds.amazonaws.com", "admin", "123456db", "faculty"); 

$q = "select * from Persons";
$result = mysqli_query($conn,$q);
while ($row = mysqli_fetch_array($result))
{
echo $row['PersonID']." ";
echo $row['LastName']." ";
echo $row['FirstName']." ";
echo $row['Address']." ";
echo $row['City']." ";
echo "<br> ";
}
?>
