
<?php
$link=Connect(); 

if (isset($POST['view'])){

$query3 = "SELECT * FROM cab WHERE city = "Gurgaon" & area = "Sector-4";
$query3 = "SELECT * FROM cab WHERE city = "Gurgaon" & area = "Sector-5";
$query3 = "SELECT * FROM cab WHERE city = "Gurgaon" & area = "Sector-7";
$query3 = "SELECT * FROM cab WHERE city = "Gurgaon" & area = "Sector-10";
$query3 = "SELECT * FROM cab WHERE city = "Gurgaon" & area = "Sector-14";
$query3 = "SELECT * FROM cab WHERE city = "Gurgaon" & area = "Sector-15";
$query3 = "SELECT * FROM cab WHERE city = "Gurgaon" & area = "Sector-17A";
$query3 = "SELECT * FROM cab WHERE city = "Gurgaon" & area = "Sector-17B";
$query3 = "SELECT * FROM cab WHERE city = "Gurgaon" & area = "Sector-17C";
$query3 = "SELECT * FROM cab WHERE city = "Gurgaon" & area = "Sector-22";
$query3 = "SELECT * FROM cab WHERE city = "Gurgaon" & area = "Sector-23A";
$query3 = "SELECT * FROM cab WHERE city = "Gurgaon" & area = "Sector-23B";

$query3 = "SELECT * FROM cab WHERE city = "New Delhi" & area = "Hauz Khas";
$query3 = "SELECT * FROM cab WHERE city = "New Delhi" & area = "Lajpat Nagar";
$query3 = "SELECT * FROM cab WHERE city = "New Delhi" & area = "Karol Bagh";
$query3 = "SELECT * FROM cab WHERE city = "New Delhi" & area = "Palam Vihar";
$query3 = "SELECT * FROM cab WHERE city = "New Delhi" & area = "Rohini";
$query3 = "SELECT * FROM cab WHERE city = "New Delhi" & area = "Udyog Vihar";
$query3 = "SELECT * FROM cab WHERE city = "New Delhi" & area = "Vasant Kunj";

$query3 = "SELECT * FROM cab WHERE city = "Manesar" & area = "Sector-1A";
$query3 = "SELECT * FROM cab WHERE city = "Manesar" & area = "Sector-1B";
$query3 = "SELECT * FROM cab WHERE city = "Manesar" & area = "Sector-1C";

$query3 = "SELECT * FROM cab WHERE city = "Faridabad" & area = "Sector-1A";
$query3 = "SELECT * FROM cab WHERE city = "Faridabad" & area = "Sector-1B";
$query3 = "SELECT * FROM cab WHERE city = "Faridabad" & area = "Sector-1C";

$result3=mysql_query($query3,$link) or die("Error: ".mysql_error());
//do similar for all 


}


echo "<table>";

while($row = mysql_fetch_array($result3){   
echo "<tr><td>" . $row['city'] . "</td><td>" . $row['area'] . "</td></tr>";  
}

echo "</table>"; 

mysql_close($link); 

?>