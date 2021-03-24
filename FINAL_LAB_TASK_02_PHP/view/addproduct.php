<?php
	$title = "Create Page";
	include('header.php');
?>

<form method="post" action="../controller/regCheck.php">
	<fieldset>
		<legend>Add Product</legend>
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="username" value=""></td>
			</tr>
			<tr>
				<td>Buying price</td>
				<td><input type="text" name="bproduct" value=""></td>
			</tr>
			<tr>
				<td>Selling Price</td>
				<td><input type="text" name="sproduct" value=""></td>
			</tr>
			<tr>

			<tr>
				<td></td>
				<td>
					<button type="button">Save</button>
					<a href="home.php">Back	</a>
				</td>
			</tr>
		</table>
	</fieldset>
</form>

<?php
	include('footer.php');
?>
