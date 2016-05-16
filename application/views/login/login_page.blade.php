@extends('app')

@section('content')
<div class="col-md-11 col-md-offset-1">
	<h2>Login</h2>
</div>
<div class="col-md-12" style="margin-top: 60px">
	<div class="col-md-6 col-md-offset-3">
		<form class="form-horizontal" action="{{ site_url('admin/login/login') }}" method="post" role="form">
			<div class="form-group">
				<input type="text" class="form-control" id="username" name="username" placeholder="Username">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" id="password" name="password" placeholder="Password">
			</div>
			<div class="form-group">
				<input type="submit" class="form-control btn btn-primary" value="Login">
			</div>
		</form>
	</div>
</div>
@endsection