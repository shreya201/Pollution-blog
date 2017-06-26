<?php
//including the database connection file
include_once("DBconfig.php");
session_start();

//fetching data in descending order (lastest entry first)
$users = mysql_query("SELECT * FROM users ORDER BY UserID DESC");
$posts =mysql_query("SELECT * FROM entry ORDER BY postID DESC");
$comments=mysql_query("SELECT * FROM comments ORDER BY UserID DESC");
?>
<html>

<head>	
	<title>Pollution-a threat for world</title>
	

</head>
<body style = 'background-color:lightblue;'>
<table style="width:100%">
	<tr>
	<td style = 'background-color:white;'>
		<h1 style = 'background-color:white;' ><a href="http://"><img src="images/globe.jpg"style="width:50px;height:50px";></a>Pollution-a threat for world</h1>
		<p>Share Your Thoughts Independently</p>
	</td>
	<td>
		<td style = 'background-color:white;' align="right"><?php $date=date("F j, Y, g:i a"); echo $date; ?>
		<br>
		<?php
		
		//echo $_SESSION['id'];
		if(isset($_SESSION['id']))
		{
			
			echo "<p >Hello &nbsp &nbsp &nbsp &nbsp <font color='#038635' size='22'>".$_SESSION['user']."</font></p>";
			echo "||||<a href=\"signout.php\"> Sign Out </a>";
		}
			
		else 
		{
			echo "<a href=\"signin.html\">Sign In </a> |Not a member Yet? <a href=\"registration.html\"> Register</a>";
		}
		
		
		?>
		</td>
		
	</td>
	</tr>
<table>
<br>
<br>
<?php 
if(isset($_SESSION['id']))
{
	echo "<a href=writepost.php> <font size='18' color ='#3DC2F2'>Write a Post</font></a>";
}




?>



<h3>Latest Posts are given<hr></h3>
<br>
<table style = 'background-color:#B8AEFF;'style="width:70%" >
	<?php             // fetching all posts row to post asscociative array


	while($post = mysql_fetch_array($posts)) { 		
		echo "<tr>";
		echo "<td>";
		echo "<h2><font color ='red'>".$post['title']."</font>______";
		$usr= mysql_query("SELECT UserName FROM users WHERE UserID=".$post['userID']);
		$usrArray=mysql_fetch_array($usr);
		echo "_posted by <font color='BLUE'>".$usrArray['UserName']."</font></h2></td>" ;
		
		
		echo "<td align='right'><p>".$post['date']."</p></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>";
		echo "<p>".$post['content']."</p><hr></td>";
		
		
		echo "<td align ='right'>";
		echo "<a href=\"postview.php?pID=$post[postID]\">View</a></td>";
		
		
		
		//echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>











 
</body>

</html>