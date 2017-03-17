<?php
	require_once "create.logic.php";
	include "../common/header.php";
?>
	<h1>New patiënt</h1>
	<form method="post">
		<div>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name">
		</div>
		<div>
			<label for="species">Species:</label>
			<select name="species">
  				<option value="cat">Cat</option>
  				<option value="dog">Dog</option>
  				<option value="fish">Fish</option>
  				<option value="hamster">Hamster</option>
			</select>
		</div>
		<div>
			<label for="gender">Gender:</label>
			<input type="radio" id="male" name="gender" value="0"> Male
  			<input type="radio" id="female" name="gender" value="1"> Female
		</div>
		<div>
			<label for="status">Status:</label>
			<textarea id="status" name="status"></textarea>
		</div>
		<div>
			<label for="client">Client name:</label>
			<select>
				<?php
					foreach ($clients as $client){
						echo '<option value="'.$client["id"].'">'.$client["name"].'</option>';
					}
				?>
			</select>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>