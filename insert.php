<html>

<body>

 

 

<?php

$con = mysql_connect("mysql.cis.ksu.edu","cis_id","password");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("cis_id", $con);

 

$sql="INSERT INTO noggerametable (fname, lname)

VALUES

('$_POST[fname]','$_POST[lname]')";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "1 record added";

 

mysql_close($con)

?>

</body>

</html>

 