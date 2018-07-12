<?php if (!empty($_SESSION['level']))
	header('location:'.base_url().'c_dashboard');
?>
<h3>Login</h3>
<form>
	<label>username</label>
	<input type="text" name="username"><br>
	<label>password</label>
	<input type="password" name="password"><br>
	<button type="submit">Login</button>
</form>