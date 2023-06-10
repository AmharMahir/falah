<!DOCTYPE html>
<html>
<body>

  <?php include'header.php';?>
  <br>
  <br><center>


  <form action="StudentInfo.php" method="get">
    <label for="grade">Choose a Grade:</label>
    <select name="grade" >
      <option value="1">Grade 1</option>
      <option value="2">Grade 2</option>
      <option value="3">Grade 3</option>
      <option value="4">Grade 4</option>
        <option value="5">Grade 5</option>
    </select>
    <br><br>
    <input type="submit"  name="submit"value="Submit">
  </form>
  <br>
<?php
if (isset($_GET['submit'])) {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "School";


$conn = new mysqli($servername, $username, $password, $dbname);


$grade=$_GET['grade'];
$sql = "SELECT  id,fname, lname FROM students where grade='$grade'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>
<h3>Name of Students</h3>
<?php
    while($row = $result->fetch_assoc()) {
        echo  "*".$row["fname"]. " " . $row["lname"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
}
?>
  </center>
  <br>  <br>  <br>
<?php include'footer.php'; ?>
</body>
</html>
