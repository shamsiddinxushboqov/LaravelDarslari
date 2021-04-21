@extends('layouts.master')

@section('title')
Ro`yxatdan o'tgan foydalanuvchilar
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Ro`yxatdan o'tgan foydalanuvchilar</h4>
        
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
              <th>Id</th>
              <th>Ismi</th>
              <th>Telefon</th>
              <th>Email</th>
              <th>Foydalanuvchi turi(usertype)</th>
              <th>Tahrirlash</th>
              <th>O`chirish</th>
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
                  <a href="/role-edit/{{ $row->id }}" class="btn btn-success">Tahrirlash</a>
                </td>
                <td>
                  <form action="/role-delete/{{ $row->id }}" method="post">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <input type="hidden" name="id" value="{{$row->id}}">
                    <button type="submit" class="btn btn-danger">O`chirish</button>
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

