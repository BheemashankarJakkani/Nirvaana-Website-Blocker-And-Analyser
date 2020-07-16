<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "ingenius18";
 
//Creating connection for mysqli
$conn = new mysqli($server, $user, $pass, $dbname);


if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}
$link1 = "http://localhost/searchini.php";
?>
<html>


<div class="topnav">
	<a class="active" href="#new .html">Home</a>
  <a href='<?php echo $link1; ?>' >Search by Link</a>
  <a href="http://localhost/about.php">About</a>
</div>

	<head>
	<link href='https://fonts.googleapis.com/css?family=Redressed' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Revalia' rel='stylesheet'>
</head>

<h1 >Nirvana</h1>
<h2 >#block it!!!</h2>

<style>
input[type=submit],[type=reset] {
    width: 10%;
    background-color: #333;
    color: white;
    padding: 14px 20px;
    margin: 8px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 70%;
	margin-left:auto; 
    margin-right:auto;
}

 td {
    border: 1px solid #ddd;
    padding: 8px;
	text-align:center;
}
th{
	width:10%;
	border: 1px solid #ddd;
    padding: 8px;
	text-align:center;
}

tr:nth-child(even){background-color: #f2f2f2;}
tr:nth-child(odd){background-color: white;}

tr:hover {background-color: #ddd;}

th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: 	#000000;
    color: white;
	text-align:center;
	}
input[type=submit]:hover,[type=reset]:hover {
    background-color: #ddd;
	color:black;
}
input[type=text],[type=date],[type=time],[type=number],[type=email],[type=password],select {
    width: 45%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;	
	border-bottom: 1px dashed #83A4C5;
	
}
h1 {
    font-family: 'Redressed';font-size: 120px;
    text-align: center;
}

h2 {
    font-family: 'Revalia';font-size: 22px;
    text-align: center;
}
h3 {
	text-align: center;
}
	.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   font-style: italic;
   height: 35px;
   text-align: center;
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #ddd;
  color: black;
}
</style>
<body style="background-color:white;">
<form method="POST" action="">

<center><input type="text" name="search" id="search" placeholder="name of the company"  autocomplete="off"></br></br></center>
<center><input type="submit" name ="searchbut" value="search"></center>

</form>
</body>
<?php
if(isset($_POST["searchbut"]))
{
	
	$sqli = mysqli_query($conn,"select * from hackbigger where name='$_POST[search]'") or die("Error: " . mysqli_error($conn));
	$fnamei = mysqli_query($conn,"select * from hackbigger where name='$_POST[search]'");
	$fnii= mysqli_fetch_array($fnamei);
	$fname = $fnii['story'];
	
	$fnamei = mysqli_query($conn,"select * from hackbigger where name='$_POST[search]'");
	$fnii= mysqli_fetch_array($fnamei);
	$link1 = $fnii['link_1'];
	
	$fnamei = mysqli_query($conn,"select * from hackbigger where name='$_POST[search]'");
	$fnii= mysqli_fetch_array($fnamei);
	$link2 = $fnii['link_2'];
	
	echo"<table border=1>";
	$i=1;
	while($row=mysqli_fetch_array($sqli))
	{

		echo "<h3>Datatheft :  $i </h3> ";
		echo"<table border=1>";
		echo "<br>";
		echo "<tr>";
		echo "<th>"; echo "name"; echo "</th>";
		echo "<td>"; echo $row["name"]; echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>"; echo "alt name"; echo "</th>";
		echo "<td>"; echo $row["alt_name"]; echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>"; echo "web host"; echo "</th>";
		echo "<td>"; echo $row["web_host"]; echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>"; echo "year"; echo "</th>";
		echo "<td>"; echo $row["year"]; echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>"; echo "records lost"; echo "</th>";
		echo "<td>"; echo $row["records_lost"]; echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>"; echo "organisation"; echo "</th>";
		echo "<td>"; echo $row["org"]; echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>"; echo "method"; echo "</th>";
		echo "<td>"; echo $row["method"]; echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>"; echo "sensitivity"; echo "</th>";
		echo "<td>"; echo $row["sensitivity"]; echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>"; echo "source"; echo "</th>";
		echo "<td>"; echo $row["src"]; echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>"; echo "story"; echo "</th>";
		echo "<td>"; echo $row["story"]; echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>"; echo "link 1"; echo "</th>";
		echo "<td><a href=\"{$row['link_1']}\">{$row['link_1']}</a></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>"; echo "link 2"; echo "</th>";
		echo "<td><a href=\"{$row['link_2']}\">{$row['link_2']}</a></td>";
		echo "</tr>";
		
		
		echo"</table>";
		echo "</br>";
		$i++;
	}
	
	
}
?>

<div class="footer">
  <p>Nirvana</p>
  </div>
</html>