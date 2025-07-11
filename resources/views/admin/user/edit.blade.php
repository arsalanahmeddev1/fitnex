@extends('layouts.admin.app')
@section('title', $page_title)
@section('content')

<section class="content-header">
	<div class="content-header-left">
		<h1>Edit User</h1>
	</div>
	<div class="content-header-right">
		<a href="{{ route('user.index') }}" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<form action="{{ route('user.update', $user->id)}}" id="regform" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
				@csrf
				{{ method_field('PATCH') }}
				<div class="box box-info">
					<div class="box-body">
						<!-- {{-- <div class="form-group">
							<label for="" class="col-sm-2 control-label">Roles <span style="color: red">*</span></label>
							<div class="col-sm-8">
								<select name="roles" id="" class="form-control">
									<option value="" selected>Select role</option>
									@foreach ($roles as $role)
										<option value="{{ $role->id }}" {{ $user->roles[0]->id==$role->id?'selected':'' }}>{{ $role->name }}</option>
									@endforeach
								</select>
								<span style="color: red">{{ $errors->first('name') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Name <span style="color: red">*</span></label>
							<div class="col-sm-8">
								<input type="text" class="form-control" value="{{ $user->name }}" name="name" placeholder="Enter user name">
								<span style="color: red">{{ $errors->first('name') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Email <span style="color: red">*</span></label>
							<div class="col-sm-8">
								<input type="email" class="form-control" value="{{ $user->email }}" name="email" placeholder="Enter user email">
								<span style="color: red">{{ $errors->first('email') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Password </label>
							<div class="col-sm-8">
								<input type="password" class="form-control" name="password" placeholder="Enter password">
								<span style="color: red">{{ $errors->first('password') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Confirm Password </label>
							<div class="col-sm-8">
								<input type="password" class="form-control" name="confirm-password" placeholder="Confirm password">
								<span style="color: red">{{ $errors->first('confirm-password') }}</span>
							</div>
						</div> --}} -->
                        <div class="form-group">
							<label for="" class="col-sm-2 control-label">Status</label>
							<div class="col-sm-8">
								<select name="status" class="form-control" id="">
									<option value="1" {{ $user->status==1?'selected':'' }}>Active</option>
									<option value="0" {{ $user->status==0?'selected':'' }}>In-Active</option>
								</select>
							</div>
						</div>
                        <div class="form-group">
							<label for="" class="col-sm-2 control-label">Top Rated</label>
							<div class="col-sm-8">
								<select name="top_rated" class="form-control" id="">
									<option value="1" {{ $user->top_rated==1?'selected':'' }}>YES</option>
									<option value="0" {{ $user->top_rated==0?'selected':'' }}>NO</option>
								</select>
							</div>
						</div>
                        <div class="form-group">
							<label for="" class="col-sm-2 control-label">Leaderboard</label>
							<div class="col-sm-8">
								<select name="leaderboard" class="form-control" id="">
									<option value="1" {{ $user->leaderboard==1?'selected':'' }}>YES</option>
									<option value="0" {{ $user->leaderboard==0?'selected':'' }}>NO</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="">Submit</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

@endsection

@push('js')
	<script>
		$(document).ready(function() {
			$("#regform").validate({
				rules: {
					name: "required",
					email: "required",
				}
			});
		});
	</script>
@endpush
