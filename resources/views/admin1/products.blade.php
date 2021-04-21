@extends('layouts.master')

@section('title')
Tovarlar ro'yxati
@endsection

@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tovar qo'shish</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>

      <form action="/save-products" method="POST">
        {{ csrf_field() }}
        <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Id_mahsulot:</label>
            <input type="text" name="id_mahsulot" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nomi:</label>
            <input type="text" name="Nomi" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Narxi:</label>
            <input type="text" name="Narxi"  class="form-control" id="recipient-name"></input>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Soni:</label>
            <input type="text" name="Soni"  class="form-control" id="recipient-name"></input>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Yopish</button>
          <button type="submit" class="btn btn-primary">Saqlash</button>
        </div>

      </form>
    </div>
  </div>
</div>










<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"> Tovarlar ro'yxati
<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Qo'shish</button>
        </h4>
         
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
              <th>Id_mahsulot</th>
              <th>Nomi</th>
              <th>Narxi</th>
              <th>Soni</th>
              <th class="w-10p">Tahrirlash</th>
              <th class="w-10p">O'chirish</th>
            </thead>
            <tbody>
              @foreach($products as $item)
              <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->id_mahsulot}}</td>
                <td>{{$item->Nomi}}</td>
                <td>{{$item->Narxi}}</td>
                <td>{{$item->Soni}}</td>
                <td>
                  <a href="#" class="btn btn-success">Edit</a>
                </td>
                <td>
                 <a href="#" class="btn btn-danger deletebtn" >Delete</a>
               </td>
              </tr>
              @endforeach
            </tbody>
          </table>
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

    $('#datable').on('click','.deletebtn',function(){
      $tr=$(this).closest('tr');
      var data=$tr.children("td").map(function(){
        return $(this).text();
      }).get();
      $('#delete_abouts_id').val(data[0]);
      $('#delete_modal').attr('action','/about-us-delete/'+data[0]);
      $('#deletemodalpop').modal('show');
    });
  } );  
</script>
@endsection

