<form method="post" action="<?= isset($action) ? $action : '' ?>">
	<div>
		<label for="login">Login</label>
		<input type="text" name="login">	
	</div>
	<div>
		<label for="password">Password</label>
		<input type="password" name="password">	
	</div>
	
	<button type="submit">Войти</button>
</form>