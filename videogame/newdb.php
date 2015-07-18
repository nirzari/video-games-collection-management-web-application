<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title> Execute Queries </title>
	<style>
#box {
position:relative;
    float: left;
    height: 300px;
    width: 450px;
    margin: 20px;
    padding: 10px;
    border: solid;
    border-radius: 10px;
    background: #ffc;
}
#text {
    position: absolute; 
    width: 450px; 
    right: 0; 
    top: 0; 
    bottom: 0; 
    background: #ffc; 
    color:grey
}
#wrap {
    position:relative;
    width: 500px;  
    background: silver; 
    border: 1px solid grey
}
#wrapper-dropdown {
    content: "";
    width: 0;
    height: 0;
    position: absolute;
    right: 16px;
    top: 50%;
    margin-top: -6px;
    border-width: 6px 0 6px 6px;
    border-style: solid;
    border-color: transparent #fff;    
}
#float {
float: left;
}

body{ 
  background: url("./background.jpg") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

body{
    width: 800px;
    height: 50px;
    margin: 25px auto;
    overflow: scroll;
    position: relative;
    border: 1px solid #000;
    margin: 25px auto;  
 
    background-color: White;
 
  -webkit-border-radius: 5px;
  border-radius: 5px;
 
  -webkit-box-shadow: inset 0px 2px 2px rgba(0, 0, 0, .5), 0px 1px 0px rgba(250, 250, 250, .2);
  box-shadow: inset 0px 2px 2px rgba(0, 0, 0, .5), 0px 1px 0px rgba(250, 250, 250, .2);
}
table{
	background-color:#989898;
}

select{
	width:140px;
	height:40px;
	font-size:15px;
}
h1{
	margin-bottom:5px;
	
}

  </head>
</style>
    <body>
            <form action="newdb.php" method="get">
			<label><b><h3><center> Query Executions </center> </h3></b></label>
            <select name= "query">
				  <option value="0">--Select--</option>
				  <option value="1">Query 1</option>
				  <option value="2">Query 2</option>
				  <option value="3">Query 3</option>
				  <option value="4">Query 4</option>
				  <option value="5">Query 5</option>
				  <option value="6">Query 6</option>
				  <option value="7">Query 7</option>
				  <option value="8">Query 8</option>
				  <option value="9">Query 9</option>
				  <option value="10">Query 10</option>
			</select>
		    <h6 style="font-family: Arial; font-size: medium">
			<input type="submit" value="Execute" name="query1" id="query1" style="height:40px; width:150px;font-weight:bold" />
            
			<input type="submit" value="Return to Home Page" name="home" style=" height:40px; width:200px;font-weight:bold;vertical-align:top; float: right" /><br/>
			</h6>
		</form>
        <?php
	
                if(isset($_GET['home']))
                {
                    header('Location:HomeScreen.php');
                    exit;
                }
			
				if(isset($_GET['query1']))
				{
							$hostname="localhost";
							$username="root";
							$password="root";
							$dbname="gameproject";

				$connection = mysql_connect($hostname, $username, $password);
				mysql_select_db($dbname, $connection);
				$varCountry = $_GET['query'];
				$errorMessage = "";
				   
				  if(empty($varCountry)) 
				  {
					$errorMessage = "<li>You forgot to select a Query!</li>";
				  }
				   
				  if($errorMessage != "") 
				  {
					echo("<p>There was an error with your form:</p>\n");
					echo("<ul>" . $errorMessage . "</ul>\n");
				  } 
				  else
				  {
					switch($varCountry)
					{
				  case "1":	
						echo "<b>QUERY 1: The number of unique games per system (exclude the duplicates)</b>
							<br/>Select Distinct Console.ConsoleName, 
							  COUNT(game_release.GameID) as 'No. of Unique Games' 
						      <br/> from Console Join game_release ON console.ConsoleID = game_release.ConsoleID 
							  <br/> group by Console.ConsoleName";
						echo "<br>";
						echo "<br>";
						echo "<table border='1' style='font-weight:bold'>
						<tr>
						<th>Console_Name</th>
						<th>Count(GameID)</th>
						</tr>";	
						$query = "Select Distinct Console.ConsoleName, 
								  COUNT(game_release.GameID) as 'No. of Unique Games' 
								  from Console Join game_release ON console.ConsoleID = game_release.ConsoleID 
								  Group by Console.ConsoleName";	
						$result = mysql_query($query);										 
						
						if ($result)
						{
						  while($row = mysql_fetch_array($result)) {
						  echo "<tr>";
						  echo "<td>" . $row['ConsoleName'] . "</td>";
						  echo "<td>" . $row['No. of Unique Games'] . "</td>";
						  echo "</tr>";
						}
					 
						echo "</table>";}
								break; 
			case "2":
						echo     "<b>QUERY 2: A list with the duplicate games in the collection
								(each duplicate game should appear once and next to this we want to know the total number of copies)</b>
								<br/> Select Game.GameTitle, 
								  COUNT(Game.GameID) as 'Copies' 
								  <br/> from GAME join game_release ON game.GameID = game_release.GameID 
								  <br/> Join collection ON collection.ReleaseID = Game_release.ReleaseID GROUPBY Game.GameID";	
						echo "<br>";
						echo "<br>";
						echo "<table border='1' style='font-weight:bold'>
						<tr>
						<th>GameTitle</th>
						<th>Count(GameID)</th>
						</tr>";	
						$query = "Select Game.GameTitle, 
								  COUNT(Game.GameID) as 'Copies' 
								  from GAME join game_release ON game.GameID = game_release.GameID 
								  Join collection ON collection.ReleaseID = Game_release.ReleaseID GROUP BY Game.GameID";	
						$result = mysql_query($query);										 
						
						if ($result)
						{
						  while($row = mysql_fetch_array($result)) {
						  echo "<tr>";
						  echo "<td>" . $row['GameTitle'] . "</td>";
						  echo "<td>" . $row['Copies'] . "</td>";
						  echo "</tr>";
						}
						echo "</table>";
					}			
						
				
				break;
			case "3":
						echo     "<b> QUERY 3:The total cost of the collection based on the current value, grouped by console </b>
								<br/>SELECT Console.ConsoleName, 
								  SUM(Collection.Price) as 'Current Price' 
								  <br/> from Console Join game_release ON console.ConsoleID = game_release.ConsoleID 
								  <br/> Join collection ON collection.ReleaseID =game_release.ReleaseID group by Console.ConsoleName";	
						echo "<br>";
						echo "<br>";
						echo "<table border='1' style='font-weight:bold'>
						<tr>
						<th>ConsoleName</th>
						<th>Current Price</th>
						</tr>";	
						$query = "SELECT Console.ConsoleName, 
								  SUM(Collection.Price) as 'Current Price' 
								  from Console Join game_release ON console.ConsoleID = game_release.ConsoleID Join
								  collection ON collection.ReleaseID =game_release.ReleaseID group by Console.ConsoleName";		
						$result = mysql_query($query);										 
						
						if ($result)
						{
						  while($row = mysql_fetch_array($result)) {
						  echo "<tr>";
						  echo "<td>" . $row['ConsoleName'] . "</td>";
						  echo "<td>" . $row['Current Price'] . "</td>";
						  echo "</tr>";
						}
						 echo "</table>";
					}			
				break;
			case "4":
							echo  "<b>Query 4: The complete games and the games missing something (box and/or manual)</b>
								<br/> 4(1): SELECT Game.GameTitle, 
								  Collection.CollectionFormat from Game JOIN 
								  Game_Release On Game_Release.GameID = Game.GameID JOIN 
								  Collection On Collection.ReleaseID = game_release.ReleaseID WhereCollection.CollectionFormat = 'CIB'";	
							echo "<br>";
							echo "<br>";
							echo "<table border='1' style='font-weight:bold'>
							<tr>
							<th>GameTitle</th>
							<th>CollectionFormat</th>
							</tr>";	
							$query = "SELECT Game.GameTitle, 
								  Collection.CollectionFormat from Game JOIN 
								  Game_Release On Game_Release.GameID = Game.GameID JOIN 
								  Collection On Collection.ReleaseID = game_release.ReleaseID Where Collection.CollectionFormat = 'CIB'";		
							$result = mysql_query($query);										 
						
							if ($result)
							{
							  while($row = mysql_fetch_array($result)) {
							  echo "<tr>";
							  echo "<td>" . $row['GameTitle'] . "</td>";
							  echo "<td>" . $row['CollectionFormat'] . "</td>";
							  echo "</tr>";
							  }
							 echo "</table>";
							}			
							echo  "<br/> 4(2): SELECT Game.GameTitle, Collection.CollectionFormat from Game JOIN Game_Release On 
							Game_Release.GameID = Game.GameID JOIN Collection On Collection.ReleaseID = game_release.ReleaseID 
							Where Collection.CollectionFormat != 'CIB'";	
							echo "<br>";
							echo "<br>";
							echo "<table border='1' style='font-weight:bold'>
							<tr>
							<th>GameTitle</th>
							<th>CollectionFormat</th>
							</tr>";	
							$query = "SELECT Game.GameTitle, Collection.CollectionFormat from Game JOIN Game_Release On 
							Game_Release.GameID = Game.GameID JOIN Collection On Collection.ReleaseID = game_release.ReleaseID 
							Where Collection.CollectionFormat != 'CIB'";		
							$result = mysql_query($query);										 
						
							if ($result)
							{
							  while($row = mysql_fetch_array($result)) {
							  echo "<tr>";
							  echo "<td>" . $row['GameTitle'] . "</td>";
							  echo "<td>" . $row['CollectionFormat'] . "</td>";
							  echo "</tr>";
							  }
							 echo "</table>";
							}							
								echo  "<br/> 4(3): SELECT Game.GameTitle, 
									  Collection.CollectionFormat from Game JOIN 
									  Game_Release On Game_Release.GameID = Game.GameID JOIN 
									  Collection On Collection.ReleaseID = Game_Release.ReleaseID where 
									  Collection.CollectionFormat != 'CIB' && Game_Release.PlayStatus = 'Completed' 
									  ORDER BY Game.GameTitle ASC";	
							echo "<br>";
							echo "<br>";
						    echo "<table border='1' style='font-weight:bold'>
							<tr>
							<th>GameTitle</th>
							<th>CollectionFormat</th>
							</tr>";	
							$query = "SELECT Game.GameTitle, 
									  Collection.CollectionFormat from Game JOIN 
									  Game_Release On Game_Release.GameID = Game.GameID JOIN 
									  Collection On Collection.ReleaseID = Game_Release.ReleaseID Where 
									  Collection.CollectionFormat != 'CIB' && Game_Release.PlayStatus = 'Completed' 
									  ORDER BY Game.GameTitle ASC";		
							$result = mysql_query($query);										 
						    if ($result)
							{
							  while($row = mysql_fetch_array($result)) {
							  echo "<tr>";
							  echo "<td>" . $row['GameTitle'] . "</td>";
							  echo "<td>" . $row['CollectionFormat'] . "</td>";
							  echo "</tr>";
							  }
							 echo "</table>";
							}
								break;
			case "5":	echo     "<b>QUERY 5 : The top 100 most expensive videogames (based on the current market value) </b>
								<br/>  Select game.GameTitle as 'Title', 
								  Console.ConsoleName as 'Console' , 
								  collection.MarketValue<br/> from game Join game_release On game.GameID = game_release.GameID
								  <br/> join Console On Console.ConsoleID = game_release.ConsoleID				
								  <br/> join collection On collection.ReleaseID = game_release.ReleaseID                     
								  <br/> Order BY collection.MarketValue Desc LIMIT 100";
						echo "<br>";
						echo "<br>";
						echo "<table border='1' style='font-weight:bold'>
						<tr>
						<th>Title</th>
						<th>Console</th>
						<th>MarketValue</th>
						</tr>";	
						$query = "Select game.GameTitle as 'Title', 
								  Console.ConsoleName as 'Console' , 
								  collection.MarketValue from game Join game_release On game.GameID = game_release.GameID
								  join Console On Console.ConsoleID = game_release.ConsoleID				
								  join collection On collection.ReleaseID = game_release.ReleaseID                     
								  Order BY collection.MarketValue Desc LIMIT 100";		
						$result = mysql_query($query);										 
						
						if ($result)
						{
						  while($row = mysql_fetch_array($result)) {
						  echo "<tr>";
						  echo "<td>" . $row['Title'] . "</td>";
						  echo "<td>" . $row['Console'] . "</td>";
						  echo "<td>" . $row['MarketValue'] . "</td>";
						  echo "</tr>";
						}
						 echo "</table>";
					
					}			
				
				break;
			case "6":
						echo     "<b>QUERY 6 :The games the collector purchased for a price lower than current market price </b>
								<br/>  Select game.GameTitle, 
								  collection.Price, 
								  collection.MarketValue <br/> from Collection <br/> Join 
								  game_release On game_release.ReleaseID = collection.ReleaseID Join 
								  game ON game.GameID =game_release.GameID <br/> Where 
								  collection.Price < collection.MarketValue";	
						echo "<br>";
						echo "<br>";
						echo "<table border='1' style='font-weight:bold'>
						<tr>
						<th>GameTitle</th>
						<th>Price</th>
						<th>MarketValue</th>
						</tr>";	
						$query = "Select game.GameTitle, collection.Price, collection.MarketValue 
						from Collection Join game_release On game_release.ReleaseID = collection.ReleaseID 
						Join game ON game.GameID =game_release.GameID Where collection.Price < collection.MarketValue";		
						$result = mysql_query($query);										 
						
						if ($result)
						{
						  while($row = mysql_fetch_array($result)) {
						  echo "<tr>";
						  echo "<td>" . $row['GameTitle'] . "</td>";
						  echo "<td>" . $row['Price'] . "</td>";
						  echo "<td>" . $row['MarketValue'] . "</td>";
						  echo "</tr>";
						}
						 echo "</table>";
				}
				break;
			case "7":
						echo	  "<b>QUERY 7 :A list of the videogames that the collector ‘wants to keep’ </b>
								  <br/> QUERY 7 : Select game.GameTitle as 'Title' <br/> from collection <br/> Inner Join
								  game_release On game_release.ReleaseID = collection.ReleaseID <br/> join 
								  game ON game.GameID = game_release.GameID <br/> Where collection.SellStatus = 1";	
						echo "<br>";
						echo "<br>";
						echo "<table border='1' style='font-weight:bold'>
						<tr>
						<th>Title</th>
						</tr>";	
						$query = "Select game.GameTitle as 'Title' from collection Inner Join
								  game_release On game_release.ReleaseID = collection.ReleaseID join 
								  game ON game.GameID = game_release.GameID Where collection.SellStatus = 1";		
						$result = mysql_query($query);										 
						
						if ($result)
						{
						  while($row = mysql_fetch_array($result)) {
							  echo "<tr>";
							  echo "<td>" . $row['Title'] . "</td>";
							  echo "</tr>";
							}
						 echo "</table>";
						 //echo "</div></div>";
						}
						
						break;
			case "8":
						echo "<b>QUERY 8 :A list of the videogames that the collector ‘wants to play’ </b>
							  <br/>  Select game.GameTitle as 'Wishlist' <br/> from game <br/> Inner Join 
							  game_release ON game.GameID = game_release.GameID <br/> Join 
							  Collection On game_release.ReleaseID = collection.ReleaseID <br/> Where Game_Release.PlayStatus = 'WishList'";
						echo "<br>";
						echo "<br>";
						echo "<table border='1' style='font-weight:bold'>
						<tr>
						<th>GameTitle</th>
						</tr>";	
						$query = "Select game.GameTitle as 'Wishlist' from game Inner Join 
								  game_release ON game.GameID = game_release.GameID Join 
								  COllection On game_release.ReleaseID = collection.ReleaseID Where Game_Release.PlayStatus = 'WishList'";		
						$result = mysql_query($query);										 
						
						if ($result)
						{
						  while($row = mysql_fetch_array($result)) {
						  echo "<tr>";
						  echo "<td>" . $row['Wishlist'] . "</td>";
						  echo "</tr>";
						}
						 echo "</table>";}
					break;
			case "9":
						echo     "<b>QUERY 9 : The total money that the collector has spent every month</b>
								  <br/>  Select MonthName(collection.TransactionDate) as 'Month' ,
								  SUM(collection.Price) as 'Expense' <br/> from Collection <br/> Inner Join 
								  game_release On Collection.ReleaseID = game_release.ReleaseID <br/> Inner Join 
								  game On game.GameID = game_release.GameID 
								  <br/> Group By Month(collection.TransactionDate)";	
						echo "<br>";
						echo "<br>";
						echo "<table border='1' style='font-weight:bold'>
						<tr>
						<th>Month</th>
						<th>Sum_of_Expense</th>
						</tr>";	
						$query = "Select MonthName(collection.TransactionDate) as 'Month' ,
								  SUM(collection.Price) as 'Expense' from Collection Inner Join 
								  game_release On Collection.ReleaseID = game_release.ReleaseID Inner Join 
								  game On game.GameID = game_release.GameID 
								  Group By Month(collection.TransactionDate)";		
						$result = mysql_query($query);										 
						
						if ($result)
						{
						  while($row = mysql_fetch_array($result)) {
						  echo "<tr>";
						  echo "<td>" . $row['Month'] . "</td>";
						  echo "<td>" . $row['Expense'] . "</td>";
						  echo "</tr>";
						}
						 echo "</table>";}
								break;
			case "10":
						echo      "<b>QUERY 10 :The game that has the highest increase in value (current value minus money paid) for and what is this increase</b>
								  <br/>  Select game.GameTitle, console.ConsoleName, collection.Price, collection.MarketValue, 
								  (collection.MarketValue -collection.Price) as Increase <br/> from Collection <br/> Inner Join 
								  game_release On Collection.ReleaseID = game_release.ReleaseID <br/> Inner Join 
								  game On game.GameID = game_release.GameID <br/> Inner Join 
								  console On console.ConsoleID = game_release.ConsoleID 
								  <br/> Order By Increase DESC";	
						echo "<br>";
						echo "<br>";
						echo "<table border='1' style='font-weight:bold'>
						<tr>
						<th>GameTitle</th>
						<th>ConsoleName</th>
						<th>Price</th>
						<th>MarketValue</th>
						<th>Increase_in_collection</th>
						</tr>";	
						$query = "
									Select game.GameTitle, console.ConsoleName, collection.Price, collection.MarketValue, (collection.MarketValue -collection.Price) as Increase 
									from Collection 
									Inner Join game_release On Collection.ReleaseID = game_release.ReleaseID 
									Inner Join game On game.GameID = game_release.GameID 
									Inner Join console On console.ConsoleID = game_release.ConsoleID 
									Order By Increase DESC";		
						$result = mysql_query($query);										 
						
						if ($result)
						{
						  while($row = mysql_fetch_array($result)) {
						  echo "<tr>";
						  echo "<td>" . $row['GameTitle'] . "</td>";
						  echo "<td>" . $row['ConsoleName'] . "</td>";
						  echo "<td>" . $row['Price'] . "</td>";
						  echo "<td>" . $row['MarketValue'] . "</td>";
						  echo "<td>" . $row['Increase'] . "</td>";
						  echo "</tr>";
						}
						 echo "</table>";}
						

								break;
			}}}
			?>			
        
    </body>
</html>
