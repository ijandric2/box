<?php
    $con=mysqli_connect("localhost","root","root","register");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    $sesija =$_SESSION["ime"];
    $result = mysqli_query($con,"SELECT * FROM file Where korisnik = '$sesija'");

    echo "<table class='tablica'>";
    echo "<tr>";
    echo "<th>NAME</th><th>ACTION</th>";
    echo "</tr>";
  

    while($row = mysqli_fetch_array($result))
      {
      echo "<tr><td>";
        echo $row['fileIme'];
    echo "</td>";
?><td> <a href="delete.php?id=<?php echo $row['id'];?>">DELETE</a></td></tr><?php
        
      }

    mysqli_close($con);
    echo "</table>";
?>