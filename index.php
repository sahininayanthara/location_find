<?php
	if(isset($_POST['submit_address'])){
		$latitude 	= $_POST['latitude'];
		$longitude 	= $_POST['longitude'];
	?>
		<iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>&output=embed"></iframe>
	<?php	
	}
?>
<form method="POST">
	<p>
		<input type="text" name="latitude" id="latitude" placeholder="Enter Your latitude">
	</p>
	<p>
		<input type="text" name="longitude" id="longitude" placeholder="Enter Your longitude">
	</p>
		<input type="submit" name="submit_address" value="Search">
	
</form>