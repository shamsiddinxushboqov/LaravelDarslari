@extends('layouts.master')

@section('title')
	Edit- Register Roles
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Edit Role for Registered User</h3>
						 @if (session('status'))
	                        <div class="alert alert-success" role="alert">
	                            {{ session('status') }}
	                        </div>
                    	@endif
					</div>

					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<form action="/role-register-update/{{ $users->id }}" method="">
									{{csrf_field()}}
									{{method_field('PUT')}}
									<div class="form-group">
									 	<label>Email address</label>
									    <input type="text" name="username" class="form-control" value="{{ $users->name }}">
									</div>

									<div class="form-group">
									 	<label>Give role</label>
									    <select name="usertype" class="form-control">
									    	<option value="admin">Admin</option>
									    	<option value="vendor">Vendor</option>
									    	<option value="">None</option>
									    </select>
									</div>
									<button type="submit" class="btn btn-success">Update</button>
									<a href="/role-register" class="btn btn-danger">Cancel</a>

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

@endsection

