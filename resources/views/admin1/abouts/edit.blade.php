@extends('layouts.master')

@section('title')
	Biz haqimizda malumotlarini taxrirlash
@endsection

@section('content')
		<div class="row">
          	<div class="col-md-12">
            	<div class="card">
              		<div class="card-header">
                		<h4 class="card-title"> Biz haqimizda malumotlarini o'zgartirish</h4>
							<form action="{{url('abouts-update/'.$abouts->id)}}" method="POST">
								<!-- Mana shu yeri xato beryapti -->
							    {{ csrf_field() }}
							    {{method_field('PUT')}}
							    <div class="modal-body">
							        <div class="form-group">
							        	<label for="recipient-name" class="col-form-label">Title:</label>
							            <input type="text" name="title" class="form-control" value="{{$abouts->title}}">
							         </div>
							         <div class="form-group">
							            <label for="recipient-name" class="col-form-label">Sub-Title:</label>
							            <input type="text" name="subtitle" class="form-control" value="{{$abouts->subtitle}}">
							          </div>
							          <div class="form-group">
							            <label for="message-text" class="col-form-label">Description:</label>
							            <textarea name="description"  class="form-control" value="{{$abouts->description}}" rows="6"></textarea>
							          </div>
							    </div>

							    <div class="modal-footer">
							        <a href="{{url('abouts')}}" class="btn btn-secondary" >Yopish</a>
							        <button type="submit" class="btn btn-primary">Saqlash</button>
							      </div>

							</form>



            		</div>
        		</div>
    		</div>
		</div>

@endsection