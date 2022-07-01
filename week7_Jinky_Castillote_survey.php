<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Jinky Castillote</title>
	<style>
	 body {
      background-image: url('./mobile-legends3.jpg');
      background-repeat: no-repeat;
      background-size: 100%;
      background-size: cover;
      /*background-position: center;*/
    }
	
	.row {
      display: flex;
      flex-wrap: wrap;
      margin: 0 20px;
	  height: 400px;
    }
	
	pre{
		margin-left: 30px;
		background-color:rgba(0, 216, 183, 0.5);
		font-weight:700;
		text-align: center;
	}
	
	.column, .column1 {
	  float: left;
	  width: 50%; /* Create two equal columns that floats next to each other */
	  padding: 10px;
	  height: 250px
	}

	h3 {
	  padding: 10px;
	  text-align: center;
	  background-color:rgba(0, 216, 183, 0.3);
	  color: #4b1709;
	  font-weight:800;
	}

	input[type=text],
    select {
      font-size: 12px;
    }

	label{
	font-size: 12px
	}
.btn {
      background-color: #565656;
      color: #fff;
      padding: 12px;
      margin: 10px 0;
      border: none;
      width: 100%;
      border-radius: 3px;
      cursor: pointer;
      font-size: 20px;
    }

    .btn:hover {
      background-color: #00ad92;
	  color: #565656;
    }

	</style>
  </head>
  <body>
    

   
   <form method="post">
          <div class="row">
		  <div class="column">
		  <h3>ML Revamped Hero Survey Form!</h3>
		  <div class="column1" style="background-color:rgba(170, 170, 170, 0.9);">
            <div>
              <label for="fullname">Full Name:</label>
            </div>
            <div>
              <label for="heroname">Select revamped hero for the next season:</label>
            </div>
			<div>
              <label for="stats">Rate overall current hero stats</label>
            </div>
			<div>
              <label for="update_type">Choose update action:</label>
            </div>
			<div>
              <label for="build">Which equiment build do want to update?</label>
            </div>
			<div>
              <label for="percent">How much percentage of change?</label>
            </div>
			</div>
			
			<div class="column1" style="background-color:rgba(170, 170, 170, 0.9);">
            <div>
              <input type="text" id="fullname" name="fullname">
            </div>
            <div style="padding: 4px 0px 4px 0px" name="heroname">
             <input type="radio" id="aldous" name="heroname" value="Aldous">
			  <label for="aldous">Aldous</label>
			  <input type="radio" id="hylos" name="heroname" value="Hylos">
			  <label for="hylos">Hylos</label>
			  <input type="radio" id="hanabi" name="heroname" value="Hanabi">
			  <label for="hanabi">Hanabi</label>
			  <input type="radio" id="cecilion" name="heroname" value="Cecilion">
			  <label for="cecilion">Cecilion</label>
            </div>
			<div>
			  <select id="stats" name="stats">
				<option value=""></option>
				<option value="worst">Worst hero!</option>
				<option value="okay">It's okay!</option>
				<option value="ordinary">Ordinary!</option>
				<option value="awesome">Awesome!</option>
				<option value="love">Love this!</option>
				</select>
			</div>
			<div style="padding: 3px 0px 3px 0px">
              <input type="radio" id="nerf" name="update_type" value="Nerfed">
			  <label for="nerf">Nerfed</label>
			  <input type="radio" id="buff" name="update_type" value="Buffed">
			  <label for="buff">Buffed</label>
            </div>
			<div>
			  <select id="build" name="build">
				<option value=""></option>
				<option value="attack">Attack</option>
				<option value="damage">Damage</option>
				<option value="defense">Defense</option>
				<option value="jungle">Jungle</option>
				<option value="magic">Magic</option>
				<option value="movement">Movement</option>
				<option value="skin">Skin</option>
				</select>
			</div>
			<div style="padding: 4px 0px 4px 0px">
			<input type="range" min="0" max="100" value='0' class="slider" name="percent" id="percent">
			<span id="myPercent"></span>
			</div>
			
			
			</div>
			
			<input type="submit" value="Submit Feedback" class="btn">
			</div>
          </div>
	</form>
	
	<div style="width: 50%">
	
	<?php
	echo '<pre>';
	
	//validation
	$variable = var_dump($_POST);
	echo $variable;
	
//input text for user's fullname
if (isset($_POST['fullname']))
	{
		if (!empty($_POST['fullname']))
			{
				$username = htmlentities($_POST['fullname']);     // that's right, don't forget to filter user input!
				echo "<p>Your name, " . $username . "</p>";
			}
			else{
				echo "<p style='color: #4b1709'>Please enter your name.</p>";	
			}
	}
	
	
	if (!empty($_POST['heroname']))
		{
			$hero = htmlentities($_POST['heroname']);
		}
	
	if (isset($_POST['heroname']))
	{
				//hero selection radio button
				if (!empty($_POST['heroname']))
				{
					if($_POST['heroname'] === "Aldous"){
					echo "<p>Fighter: " . $hero . "</p>";
					}
					else if($_POST['heroname'] === "Hylos"){
						echo "<p>Tank: " . $hero . "</p>";
					}
					else if($_POST['heroname'] === "Hanabi"){
						echo "<p>Marksman: " . $hero . "</p>";
					}
					else if($_POST['heroname'] === "Cecilion"){
						echo "<p>Mage: " . $hero . "</p>";
					}
				}
				else{
					echo "<p style='color: #4b1709'>Choose a hero.</p>";
				}
				
				
				//hero stats dropdown
				if (isset($_POST['stats']))
					{
					switch ($_POST['stats'])
						{
							case "worst":
								echo "<p>" . $hero . " ,worst character in ML game!</p>";
								break;
							case "okay":
								echo "<p>Not good, Not bad for " . $hero . " hero. </p>";
								break;
							case "ordinary":
								echo "<p>Nothing special in " . $hero . "</p>";
								break;
							case "awesome":
								echo "<p>" . $hero . " ,exceeds my expectation!</p>";
								break;
							case "love":
								echo "<p>This hero is savage! " . $hero . " my all time favorite!</p>";
								break;
							default:
								echo "<p style='color: #4b1709'>Please rate hero's statistics</p>";
						}
					}
	}
	
	//action radio button
	if (isset($_POST['update_type']))
	{
		$update = htmlentities($_POST['update_type']);
		if (!empty($_POST['update_type']))
			{
				echo "<p>The hero will be " . $update . "!</p>";
			}
		else{
				echo "<p style='color: #4b1709'>Select an action for hero's udpdate!</p>";
			}
	}
	
	//equipment build dropdown
	if (isset($_POST['build']))
	{
		$equipbuild = htmlentities($_POST['build']);
		if (!empty($hero) && !empty($equipbuild))
			{
				echo "<p>" . $hero . "'s " . $equipbuild . " will be upgraded!</p>";
			}
		else{
				echo "<p style='color: #4b1709'>Choose build item to upgrade/downgrade.</p>";
			}
	}
	
	
	//number range for update percentage
	if (isset($_POST['percent']))
	{
		$number = htmlentities($_POST['percent']);
		if(is_numeric($number)){
			if (!empty($hero))
			{
				if (!empty($number))
				{
					echo "<p>" . $hero . "'s " . $number . " will be upgraded!</p>";
				}
				else{
					echo "<p style='color: #4b1709'>Specify percentage of change for the next game season!</p>";
				}
				
			}
		}
	}
	

	echo '</pre>';
	
?>

</div>

<script>
var slider = document.getElementById("percent");
var output = document.getElementById("myPercent");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value + "%";
}
</script>
      
  
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  </body>
</html>