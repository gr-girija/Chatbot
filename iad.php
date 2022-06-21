<?php
    $conn = mysqli_connect("localhost", "root", "", "bot") or die("Database Error");

?>
<!DOCTYPE html>

<html>
<head>
  <style>
body {
  background-image: url('a.jpg'), url('c.jfif');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-position: right center;
  background-size: cover;
    background-blend-mode: screen;
}
div.transbox {
  margin: 30px;
  width: 600px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 100;
}

div.transbox p {
  margin: 5%;
  font-weight: bold;
  color: #000000;
}
table

{

border-style:solid;

border-width:2px;

border-color:pink;

}

</style>
    <title> INVALID RESPONSES/ COMPLAINTS DATASET</title>
</head>
<body>
  <center>
    <form action="" method="post">
      <div class="input-data">
     <br> <br> <br> 
<a href="adminlogin.php"><input type="button" id="invalid_btn" value=" BACK "style="color:#ffffff; padding: 12px 28px ; background-color:#e61010; border-radius: 10px; border: 2px solid white;"/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="login.php"><input type="button" id="logout_btn" value=" LOGOUT" style="color:#ffffff; padding: 12px 28px ; background-color:#e61010; border-radius: 10px; border: 2px solid white;"/></a>
</div>
       
     

       <br> <br> <br> <br> <br> <br> <br> <br> 
    </form>
    <div class="transbox">
<?php

    $sql = "SELECT * FROM complaint";

$result = $conn->query($sql);
echo "<table border='1'>

<tr>

<th>Id</th>

<th>Invalid Messages</th>

</tr>";

if ($result->num_rows > 0) 
{
  while($row = $result->fetch_assoc())

  {
  
  echo "<tr>";

  echo "<td>" . $row['id'] . "</td>";

  echo "<td>" . $row['messages'] . "</td>";

  echo "</tr>";
  
  
  }
}

else 

{
  echo "0 results";
}

echo "</table>";
$conn->close();


?>

 </center>
</div>
</body>
</html>