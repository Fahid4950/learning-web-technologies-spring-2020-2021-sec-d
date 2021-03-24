<?php
	require_once('../model/userModel.php');
	$title = "Edit Page";
	include('header.php');
	$id=$_GET['id'];
	$data=getUserbyId($id);

	$_SESSION['edit_id']=$id;
?>

	<form method="post" action="../controller/update.php">
		<fieldset>
			<legend>EDIT PRODUCT</legend>
			<table>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value="<?php echo$data['name'] ?>"></td>
				</tr>
				<tr>
					<td>Buying price</td>
					<td><input type="text" name="bproduct" value=""></td>
				</tr>
				<tr>
					<td>Selling Price</td>
					<td><input type="text" name="sproduct" value=""></td>
				</tr>
					<td>
					<button type="button">Save</button>
						<a href="user_list.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
<?php
	include('footer.php');
?>
