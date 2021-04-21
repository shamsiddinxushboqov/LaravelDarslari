@extends('layouts.master')

@section('title')
	Dashboard admin
@endsection

@section('content')

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Xodim qo'shish</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>

      <form action="/save-person" method="POST">
        {{ csrf_field() }}
        <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Familyasi:</label>
            <input type="text" name="Familyasi" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Ismi:</label>
            <input type="text" name="Ismi" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Otasining ismi:</label>
            <input type="text" name="Otasining_ismi"  class="form-control" id="recipient-name"></input>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Lavozimi:</label>
            <input type="text" name="Lavozimi"  class="form-control" id="recipient-name"></input>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Yoshi:</label>
            <input type="text" name="Yoshi"  class="form-control" id="recipient-name"></input>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Maoshi:</label>
            <input type="text" name="Maoshi"  class="form-control" id="recipient-name"></input>
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


<!-- Deletes modal -->
<!-- Xodimni ochirish -->
<div class="modal fade" id="deletemodalpop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: red">Ogoxlantirish!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form id="delete_modal" method="POST">
        {{ csrf_field() }}
        {{method_field('DELETE')}}

        <div class="modal-body">
          <input type="hidden" id="delete_abouts_id">
          <h5>Siz bu malumotni haqiqatdan ham o'chirmoqchimisiz</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Yopish</button>
          <button type="submit" class="btn btn-primary">Xa, O'chirilsin</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- end delete model -->




	<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"> Xodimlar ro'yxati
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
              <th>Id_xodim</th>
              <th>Familyasi</th>
              <th>Ismi</th>
              <th>Otasining_ismi</th>
              <th>Lavozimi</th>
              <th>Yoshi</th>
              <th>Maoshi</th>
              <th class="w-10p">Tahrirlash</th>
              <th class="w-10p">O'chirish</th>
            </thead>
            <tbody>
              @foreach($xodimlar as $item)
              <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->Familyasi}}</td>
                <td>{{$item->Ismi}}</td>
                <td>{{$item->Otasining_ismi}}</td>
                <td>{{$item->Lavozimi}}</td>
                <td>{{$item->Yoshi}}</td>
                <td>{{$item->Maoshi}}</td>
                <td>
                  <a href="{{ url('person-us/'.$item->id) }}" class="btn btn-success">Tahrirlash</a>
                </td>
                <td>
                 <a href="javascript:void(0)" class="btn btn-danger deletebtn" >O`chirish</a>
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
      $('#delete_modal').attr('action','/xodimlar-delete/'+data[0]);
      $('#deletemodalpop').modal('show');
    });
  } );  
</script>
@endsection
