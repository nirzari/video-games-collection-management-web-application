<?php
$hostname="localhost";
				$username="root";
				$password="root";
				$dbname="gameproject";
                $connection = mysql_connect($hostname, $username, $password);
				mysql_select_db($dbname, $connection);
				
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title> Execute Queries </title>
    </head>
	    <body>
		<style>
body{ 
  background: url("./minion3.jpg") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
	<style>
body{
    width: 800px;
    height: 50px;
    margin: 25px auto;
    overflow: hidden;
    position: relative;
    border: 1px solid #000;
    margin: 25px auto;  
 
    background-color: White;
 
  -webkit-border-radius: 5px;
  border-radius: 5px;
 
  -webkit-box-shadow: inset 0px 2px 2px rgba(0, 0, 0, .5), 0px 1px 0px rgba(250, 250, 250, .2);
  box-shadow: inset 0px 2px 2px rgba(0, 0, 0, .5), 0px 1px 0px rgba(250, 250, 250, .2);
}
h1{
	margin-bottom:5px;
	
}
</style>

        <div align="center">
            <h2>Game Selection</h2>
        </div>

        <form action="existing.php" method="get">

            <h6 style="font-family: Arial; font-size: medium;height:50px; width:400px; font-weight:bold">
			<b>Click here to select the desired game</b>
			<?php 
				$query = "SELECT GameID, GameTitle FROM game";
				$result = mysql_query ($query);
				echo "<select name='dropdown' value=''><option></option>";
				while($r = mysql_fetch_array($result)) {
					echo "<option value=".$r['GameID'].">".$r['GameTitle']."</option>"; 
				}
		echo "</select>";
		?>
		</h6>
			
			<input type="submit" value="Execute" name="exec" style="vertical-align:top; float: right;height:70px; width:200px; font-weight:bold" />
			<br/> <br/><br/><br/><br/>
			 <?php
	
                if(isset($_GET['home']))
                {
                    header('Location:HomeScreen.php');
                    exit;
                }
				if(isset($_GET['query']))
                {
                    header('Location:newdb.php');
                    exit;
                }
				if(isset($_GET['exec'])) 
                {
					if(!empty($_GET['dropdown'])){
					echo "<table border='1' style='float:left'>
					<p><b><h3>Game Information</h3></b></p>
					<tr>
					<th>GameID</th>
					<th>GameTitle</th>
					<th>DeveloperID</th>
					<th>Description</th>
					<th>GenreID</th>
					</tr>";
					
					$query = "Select * from game where GameID=".$_GET['dropdown'];	
					$result = mysql_query($query);										 
					
					if($result === FALSE) { 
						die(mysql_error()); // TODO: better error handling
					}

					while($row = mysql_fetch_array($result))
					{	
						echo "<tr>";
						echo "<td>".$row['GameID']. "</td>";
						echo "<td>".$row['GameTitle']."</td>";
						echo "<td>".$row['DeveloperID']. "</td>";
						echo "<td>".$row['Description']. "</td>";
						echo "<td>".$row['GenreID']."</td>";
						echo "</tr>";
	
					}			
					echo "</table>";
					}
					else
					{
						echo "Select any game and click execute!";
					}
					}
			  ?>
			<input type="submit" value="Return to Home Page" name="home" style="vertical-align:top; float: right;height:70px; width:200px; font-weight:bold" />
			<br/> <br/><br/><br/><br/>
			<input type="submit" value="Return to Query Execution Page" name="query"  style="vertical-align:top; float: right;height:70px; width:200px; font-weight:bold" />
			<br/><br/>
        </form>
       
		</body>
	</html>
						  

