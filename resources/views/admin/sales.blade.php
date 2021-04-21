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

      <form action="/save-sales" method="POST">
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


<!-- 
        <div class="row mt-5">
            <div class="col-md-6 offset-3">
                <div class="card">
                    <div class="card-body">
                        <h1 class="bg-dark text-white m-0 py-5 text-center">
                            <span id="display">0</span>so'm
                        </h1>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" placeholder="summani kiriting" id="input">

                            <textarea id="text" class="form-control" placeholder="Qoshimcha malumot"></textarea>
                        </div>
                        <div class="btn-group d-flex">
                            <button type="button" data-toggle="debit" class="btn btn-success w-50">Daromad</button>
                            <button type="button" data-toggle="credit" class="btn btn-danger w-50">Xarajat</button>
                        </div>
                    </div>

                    <div class="card-body" id="body">

                    </div>


                    <div class="progress my-3">
                        <div class="progress-bar progress-bar-striped bg-danger" id="progress">

                        </div>
                    </div>


                </div>



            </div>
        </div> -->









<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"> Tovarlar ro'yxati
<button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#exampleModal">Qo'shish</button>
        </h4>

        <input type="text" id="id_mahsulot" class="float-left mt-3" placeholder="id_mahsulot">
        <input type="text" id="count" class="float-left mt-3" placeholder="Nechta sotchoqchisiz">
        <a href="/sales" class="btn btn-success float-left" data-toggle="debit">Kirim</a>
        <button type="submit" class="btn btn-danger float-left">Sotish</button>




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
              <th id="display">Soni</th>
              <th class="w-10p">Tahrirlash</th>
              <th class="w-10p">O'chirish</th>
            </thead>
            <tbody>
              @foreach($sales as $item)
              <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->id_mahsulot}}</td>
                <td>{{$item->Nomi}}</td>
                <td>{{$item->Narxi}}</td>
                <td>{{$item->Soni}}</td>
                <td>
                  <a href="/sales-edit/{{ $item->id }}" class="btn btn-success">Tahrirlash</a>
                  <!-- <a href="#" class="btn btn-success">Tahrirlash</a> -->
                </td>
                <td>
                 <!-- <a href="/sales-delete/{{ $item->id }}" class="btn btn-danger deletebtn" >O`chirish</a> -->
                 <form action="/sales-delete/{{ $item->id }}" method="post">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <input type="hidden" name="id" value="{{$item->id}}">
                    <button type="submit" class="btn btn-danger">O`chirish</button>
                  </form>
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

    // $('#datable').on('click','.deletebtn',function(){
    //   $tr=$(this).closest('tr');
    //   var data=$tr.children("td").map(function(){
    //     return $(this).text();
    //   }).get();
    //   $('#delete_abouts_id').val(data[0]);
    //   $('#delete_modal').attr('action','/about-us-delete/'+data[0]);
    //   $('#deletemodalpop').modal('show');
    // });
  } );





   
</script>
@endsection

