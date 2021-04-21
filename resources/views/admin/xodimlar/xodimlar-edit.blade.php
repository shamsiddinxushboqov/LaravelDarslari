@extends('layouts.master')

@section('title')
	Xodimlar malumotlarini taxrirlash
@endsection

@section('content')
		<div class="row">
          	<div class="col-md-12">
            	<div class="card">
              		<div class="card-header">
                		<h4 class="card-title"> Xodimlar malumotlarini o'zgartirish</h4>
							<form action="{{url('xodimlar-update/'.$xodimlar->id)}}" method="POST">
								<!-- Mana shu yeri xato beryapti -->
							    {{ csrf_field() }}
							    {{method_field('PUT')}}
							    <div class="modal-body">
							          <div class="form-group">
							            <label for="recipient-name" class="col-form-label">Familyasi:</label>
							            <input type="text" name="Familyasi" class="form-control" id="recipient-name"  value="{{$xodimlar->Familyasi}}">
							          </div>
							          <div class="form-group">
							            <label for="recipient-name" class="col-form-label">Ismi:</label>
							            <input type="text" name="Ismi" class="form-control" id="recipient-name"  value="{{$xodimlar->Ismi}}">
							          </div>
							          <div class="form-group">
							            <label for="recipient-name" class="col-form-label">Otasining ismi:</label>
							            <input type="text" name="Otasining_ismi"  class="form-control" id="recipient-name" value="{{$xodimlar->Otasining_ismi}}"></input>
							          </div>
							          <div class="form-group">
							            <label for="recipient-name" class="col-form-label">Lavozimi:</label>
							            <input type="text" name="Lavozimi"  class="form-control" id="recipient-name"  value="{{$xodimlar->Lavozimi}}"></input>
							          </div>
							          <div class="form-group">
							            <label for="recipient-name" class="col-form-label">Yoshi:</label>
							            <input type="text" name="Yoshi"  class="form-control" id="recipient-name"  value="{{$xodimlar->Yoshi}}"></input>
							          </div>
							          <div class="form-group">
							            <label for="recipient-name" class="col-form-label">Maoshi:</label>
							            <input type="text" name="Maoshi"  class="form-control" id="recipient-name"  value="{{$xodimlar->Maoshi}}"></input>
							          </div>
       							</div>

							    <div class="modal-footer">
							        <a href="{{url('dashboard')}}" class="btn btn-secondary" >Yopish</a>
							        <button type="submit" class="btn btn-primary">Saqlash</button>
							     </div>

							</form>
            		</div>
        		</div>
    		</div>
		</div>

@endsection