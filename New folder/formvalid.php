<?php include 'inc/header.php'; ?>


<div class="para">
	

<form id="myform" action="msg.php" method="post">
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" id="username"/></td>
			<td><span class="error_form" id="username_error_msg"></span></td>
		</tr>

		<tr>
			<td>Password</td>
			<td><input type="password" id="password"/></td>
			<td><span class="error_form" id="password_error_msg"></span></td>
		</tr>

		<tr>
			<td>Password Again</td>
			<td><input type="password" id="password_again"/></td>
			<td><span class="error_form" id="pass_again_error_msg"></span></td>
		</tr>

		<tr>
			<td>Email</td>
			<td><input type="text" id="email"/></td>
			<td><span class="error_form" id="email_error_msg"></span></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Submit"></td>
			<td></td>
		</tr>


	</table>
</form>




</div>


<?php include 'inc/footer.php'; ?>







