<!DOCTYPE html>
<html>
<body>
<style>
body{
    width: 800px;
    height: 50px;
    margin: 25px auto;
    overflow: hidden;
    position: relative;
    border: 1px solid #000;
    margin: 25px auto;  
 
    background-color: #222;
 
  -webkit-border-radius: 5px;
  border-radius: 5px;
 
  -webkit-box-shadow: inset 0px 2px 2px rgba(0, 0, 0, .5), 0px 1px 0px rgba(250, 250, 250, .2);
  box-shadow: inset 0px 2px 2px rgba(0, 0, 0, .5), 0px 1px 0px rgba(250, 250, 250, .2);
}
</style>
<style>
body{ 
  background: url("http://i.cbc.ca/1.1478336.1379028936!/httpImage/image.jpg_gen/derivatives/16x9_620/hi-ouya-852-8col.jpg") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
<style>
.play_button {
    position:relative;
    transition: .5s ease;
    top: 250px;
    left: 700px;
    right: -600px;
    bottom: -191px;
}
h1{
	margin-bottom:15px;
	
}
</style>
 <marquee>
   <font size="15" font color="DarkBlue"><b>HI!!!!!Welcome to the world of gaming</b></font> 
  </marquee>
</marquee> 
<div class="play_button">
 <form action="HomeScreen.php" method="get">

                <input type="submit" value="Click to view the game releases" name="backButton" id="backButton" align="center" style=" height:50px; width:250px; font-weight:bold"/><br/><br/><br/>
				<input type="submit" value="Click to run the queries" name="query" id="query" align="left" style=" height:50px; width:250px;font-weight:bold" /><br/><br/><br/>
				<input type="submit" value="Add Collection" name="release" id="release" align="left" style=" height:50px; width:250px;font-weight:bold" /><br/><br/><br/>
				<input type="submit" value="View Collection" name="ViewCollection" id="ViewCollection" align="left" style=" height:50px; width:250px;font-weight:bold" />
            </form>
            <?php
                if(isset($_GET['backButton']))
                {
                    header('Location:Existing.php');
                    exit;
                }
				if(isset($_GET['query']))
                {
                    header('Location:newdb.php');
                    exit;
                }
				if(isset($_GET['release']))
                {
                    header('Location:SelectRelease.php');
                    exit;
                }
				if(isset($_GET['ViewCollection']))
                {
                    header('Location:ViewCollection.php');
                    exit;
                }
                
            ?>
			</form>
			</div>
</body>
</html>
