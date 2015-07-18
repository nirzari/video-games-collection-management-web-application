

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Add Game Release</title>

<script type="text/javascript" src="view.js"></script>

</head>
<style>
body{ 
  background: url("./minion2.jpg") no-repeat center center fixed; 
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
	font-size : 15px;
	font-weight:bold;
 
    background-color: White;
 
  -webkit-border-radius: 5px;
  border-radius: 5px;
 
  -webkit-box-shadow: inset 0px 2px 2px rgba(0, 0, 0, .5), 0px 1px 0px rgba(250, 250, 250, .2);
  box-shadow: inset 0px 2px 2px rgba(0, 0, 0, .5), 0px 1px 0px rgba(250, 250, 250, .2);
}
table{
	font-weight:bold;
	font-size:19px;
	
}

input{
	width:140px;
	height: 20px;
	margin-bottom:15px;
}

select{
	width:140px;
	height: 20px;
	margin-bottom:15px;
}

label{
	width:140px;
	height: 20px;
	margin-bottom:15px;

}

textarea{
	width:240px;
	height: 50px;
	margin-bottom:15px;

}

h1{
	margin-bottom:5px;
	
}
</style>

	<?php 
	if(isset($_GET["return"])){
			header("Location:SelectRelease.php");
			}
		if(isset($_GET["submit"])){
			$ReleaseID = $_GET["ReleaseID"];
			$CollectionFormat = $_GET["CollectionFormat"];
			$Content = $_GET["Content"];
			$Price = $_GET["Price"];
			$MarketPrice = $_GET["MarketPrice"];
			$SellStatus = $_GET["SellStatus"];
			$TransactionDate = $_GET["TransactionDate"];
			$Condition = $_GET["Condition"];
			
			try{
			$db = new PDO('mysql:host=localhost;dbname=gameproject',"root","root");
			$db-> beginTransaction();
			$db->exec('INSERT INTO gameproject.collection VALUES ("","'.$ReleaseID.'", "'.$CollectionFormat.'", "'.$Content.'", ""," '.$condition.' "," '.$Price.' "," '.$TransactionDate.' "," '.$MarketPrice.' "," '.$SellStatus.'")')
						or die(print_r($db->errorInfo(), true));
			$db->commit();
			header("Location:ViewCollection.php");
			}catch(PDOException $e){
				echo "Error: " . $e->getMessage();
				die();
			}
			?>
		<?php }
	?>
<body id="main_body" >
	
	<div id="form_container">
	
		<h1><a><center>Add new Collection<center></a></h1>
		<form id="addGameForm" class="appnitro"  method="GET" action="AddCollection.php">
					<div class="form_description">
			
			<p>Provide information for your collection.</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="GameName">Selected Release </label>
		<div>
			<select id="ReleaseID" name="ReleaseID" class="element select medium" type="Select" maxlength="255" value="<?php echo $_GET['rid'] ?>"/> 
			<option value='<?php echo $_GET['rid']?>'><?php echo $_GET['rid'] ?></option>
			</select>
			</input type="button" name="NewRelease"  >
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="CollectionFormat">Completeness</label>
		<div>
			<select id="CollectionFormat" name="CollectionFormat" class="element select medium" type="Select" maxlength="255" value="<?php echo $_GET['rid'] ?>"/> 
			<option value=''>----Select----</option>
			<option value='CIB'>Cartridge-Instructions-BOX</option>
			<option value='CB'>Cartridge-BOX</option>
			<option value='CI'>Cartridge-Instructions</option>
			<option value='C'>Cartridge</option>
			</select>
			</input type="button" name="NewRelease"  >
		</div> 
		</li>		<li id="li_2" 
		<label class="description" for="Content">Add Content </label>
		<div>
			<textarea id='Content' rows='2' cols='23' name="Content"></textarea>
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="dropdownCondition">Condition </label>
		<div>
				<select name="Condition" id="dropdownCondition">
					<option value=''>----Select----</option>
					<option value='new'>New</option>
					<option value='mint'>Mint</option>
					<option value='very good'>Very Good</option>
					<option value='good'>Good</option>
					<option value='acceptable'>Acceptable</option>
					<option value='poor'>Poor</option>
			</select>
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="Price">Price</label>
		<div>
			<input type='text' id='Price' placeholder='Enter Price' name="Price">
		</div> 
		</li>
				<li id="li_4" >
		<label class="description" for="MarketPrice">Market Price</label>
		<div>
			<input type='text' id='MarketPrice' name="MarketPrice" >
		</div> 
		</li>
			<li id="li_4" >
		<label class="description" for="SellStatus">Sell Status</label>
		<div>
			<select id="SellStatus" name="SellStatus">
					<option value=''>----Select----</option>
					<option value='1'>Keep It</option>
					<option value='2'>Might sell</option>
					<option value='3'>Will sell</option>
			</select>
		</div> 
		</li>
				<li id="li_4" >
		<label class="description" for="TransactionDate">Transaction Date</label>
		<div>
			<input type='date' name='TransactionDate' id='TransactionDate' >
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="1002727" />
			    
				<input id="buttonSaveForm" class="button_text" type="submit" name="submit" value="Submit" />
				<input id="buttonSave" class="button_text" type="submit" name="return" value="Back" />
				
		</li>
			</ul>
		</form>
	</div>
	</body>
</html>