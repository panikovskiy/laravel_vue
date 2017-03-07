@extends('master')
@section('content')
<div id="app">

	<form class="form-horizontal" role="form" action="/profile/set-profile" method="POST" 
	@submit.prevent="onSubmit"
	@keydown="form.errors.clear($event.target.name)"
	>
		{!! csrf_field() !!}

		<div class="form-group">
			<label class="col-md-4 control-label">Name</label>
			<div class="col-md-6">
				<input type="text" class="form-control" name="name" v-model="form.name" />
				<span class="help is-danger" v-if="form.errors.has('name')" v-text="form.errors.get('name')"></span>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label">Second Name</label>
			<div class="col-md-6">
				<input text="text" class="form-control" name="second_name" v-model="form.second_name" />
				<span class="help is-danger" v-if="form.errors.has('second_name')" v-text="form.errors.get('second_name')"></span>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label">Third Name</label>
			<div class="col-md-6">
				<input text="text" class="form-control" name="third_name" v-model="form.third_name" />
				<span class="help is-danger" v-if="form.errors.has('third_name')" v-text="form.errors.get('third_name')"></span>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label">Phone</label>
			<div class="col-md-6">
				<input text="text" class="form-control" name="phone" v-model="form.phone" />
				<span class="help is-danger" v-if="form.errors.has('phone')" v-text="form.errors.get('phone')"></span>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<button type="submit" class="btn btn-primary">
					<i class="fa fa-btn fa-sign-in"></i>Save
				</button>
			</div>
		</div>
	</form>
	<div class="row">
		<div class="col-md-6">
			<a class="btn-link" href="{{ url('/') }}">Home</a>
		</div>
		<div class="col-md-6">
			<a class="btn-link" href="{{ url('auth/logout') }}">Logout</a>
		</div>
	</div>
</div>
@endsection

@section('scripts')
<script src="/js/vendor.js"></script>
<script src="/js/app.js"></script>
@endsection
