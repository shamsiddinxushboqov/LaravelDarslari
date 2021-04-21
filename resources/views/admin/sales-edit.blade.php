@extends('layouts.master')

@section('title')
	Edit- Sotuvlar
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Sotuvlar malumotlarini o'zgartirish</h3>
						 @if (session('status'))
	                        <div class="alert alert-success" role="alert">
	                            {{ session('status') }}
	                        </div>
                    	@endif
					</div>

					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<form action="/sales-update/{{ $sales->id }}" method="">
									{{csrf_field()}}
									{{method_field('PUT')}}
									<!-- <div class="form-group">
									 	<label>Id</label>
									    <input type="text" name="id" class="form-control" value="{{ $sales->id }}">
									</div> -->
									<div class="form-group">
									 	<label>id_mahsulot</label>
									    <input type="text" name="id_mahsulot" class="form-control" value="{{ $sales->id_mahsulot }}">
									</div>
									<div class="form-group">
									 	<label>Nomi</label>
									    <input type="text" name="Nomi" class="form-control" value="{{ $sales->Nomi }}">
									</div>
									<div class="form-group">
									 	<label>Narxi</label>
									    <input type="text" name="Narxi" class="form-control" value="{{ $sales->Narxi }}">
									</div>
									<div class="form-group">
									 	<label>Soni</label>
									    <input type="text" name="Soni" class="form-control" value="{{ $sales->Soni }}">
									</div>

									<button type="submit" class="btn btn-success">Tahrirlash</button>
									<a href="/sales" class="btn btn-danger">Orqaga</a>

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

