@extends('master')
@section('content')
<div class="row">
	<div class="col-md-6">
		<a class="btn-link" href="{{ url('profile') }}">Edit Profile</a>
	</div>
	<div class="col-md-6">
		<a class="btn-link" href="{{ url('auth/logout') }}">Logout</a>
	</div>
</div>
@endsection