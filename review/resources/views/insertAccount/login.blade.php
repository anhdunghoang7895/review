@extends('frontend.layout.user.master')
@section('content')
<form action="action_page.php">
	@csrf
	<div class="container">
		<b>Username</b><br>
		<input type="text" placeholder="Enter Username" name="uname" required>

		<b>Password</b><br>
		<input type="password" placeholder="Enter Password" name="psw" required>

		<button type="submit">Login</button><br>
		<label>
			<input type="checkbox" checked="checked" name="remember"> Remember me
		</label>
	</div>


</form>

@endsection