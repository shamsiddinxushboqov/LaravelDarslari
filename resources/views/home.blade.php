@extends('layouts.app')


@section('content')
<!-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/dataTables.min.css')}}"> -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Bu foydalanuvchining shaxsiy kabineti</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h4>Bu yerda siz firmamizda bor avto extiyot qismlar bilan tanishishingiz mumkin</h4>


                     <div class="card-body">
        <div class="table-responsive">
            <input id="myInput" type="text" placeholder="Search..">
<br><br>

          <table id="datable" class="table">
            <thead class=" text-primary">
              <!-- <th>Id_mahsulot</th> -->
              <th>Nomi</th>
              <th>Narxi</th>
            
            </thead>
            <tbody id="myTable">
              @foreach ($products as $data)
              <tr>
                  <!-- <td>{{$data->id_mahsulot}}</td> -->
                <td>{{$data->Nomi}}</td>
                <td>{{$data->Narxi}}</td>
              <td>
                  <div style="height: 80px;overflow: hidden;">
                    {{$data->description}}
                  </div>
                </td>
             </tr>
             @endforeach

           </tbody>
         </table>
         {{ $products->links()}}
       </div>
     </div>
                </div>
            </div>





        </div>
    </div>
</div>
<!-- <script src="{{asset('assets/js/dataTables.min.js')}}"></script> -->
@endsection
@section('scripts')

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

  // $(document).ready( function () {
  //   $('#datable').DataTable();
  // } );  

</script>

@endsection
