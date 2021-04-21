@extends('layouts.master')

@section('title')
Registratsiyadan o'tgan Foydalanuvchilar
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"> Registratsiyadan o'tgan Foydalanuvchilar</h4>
        <h4 class="card-title" style="color: blue"> Muhammad al-Xorazmiy nomidagi TATU KIF AT-servis 217-17 guruh talabalari elektron ruyxati</h4>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
          {{ session('status') }}
        </div>
        @endif
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table" id="datable">
            <thead class=" text-primary">
              <th>T/R</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Usertype</th>
              <th>Edit</th>
              <th>Delete</th>
            </thead>
            <tbody>
              @foreach($users as $row)

              <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->phone}}</td>
                <td>{{$row->email}}</td>
                <td>{{$row->usertype}}</td>
                <td>
                  <a href="/role-edit/{{ $row->id }}" class="btn btn-success">Edit</a>
                </td>
                <td>
                  <form action="/role-delete/{{ $row->id }}" method="post">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <input type="hidden" name="id" value="{{$row->id}}">
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <!-- + -->
          {{ $users->links()}}
        </div>
      </div>
    </div>
  </div>

</div>
@endsection

@section('scripts')
<script>
  $(document).ready( function () {
    $('#datable').DataTable();
  } );  
</script>	
@endsection

