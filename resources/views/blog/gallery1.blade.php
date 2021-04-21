@extends('layouts.app')

@section('title')
Gallery
@endsection

@section('style')
 <style>
  #gallery{
    border:2px solid black;
  }
   #gallery:hover{
      transform: scale(1.3);
      border:2px solid red;

   }
   #gallery p:hover{
      transform: scale(5);
      
   }
 </style>
@endsection

@section('content')
<div class="container">
  <div class="row py-3">
        
        <div class="col-md-2">
            <div id="gallery">
                <a href="{{asset('assets/assets/img/avtoicon/avto-1.png')}}" >
                    <img src="{{asset('assets/assets/img/avtoicon/avto-1.png')}}" class="img-fluid" ></a>
                    <p style="font-size: 5px;" align="center">Tracker</p>
            </div>
        </div>
        <div class="col-md-2">
            <div id="gallery">
                <a href="{{asset('assets/assets/img/avtoicon/avto-1.png')}}" >
                    <img src="{{asset('assets/assets/img/avtoicon/avto-1.png')}}" class="img-fluid" ></a>
            </div>
        </div>
        <div class="col-md-2">
            <div id="gallery">
                <a href="{{asset('assets/assets/img/avtoicon/avto-1.png')}}" >
                    <img src="{{asset('assets/assets/img/avtoicon/avto-1.png')}}" class="img-fluid" ></a>
            </div>
        </div>
        <div class="col-md-2">
            <div id="gallery">
                <a href="{{asset('assets/assets/img/avtoicon/avto-1.png')}}" >
                    <img src="{{asset('assets/assets/img/avtoicon/avto-1.png')}}" class="img-fluid" ></a>
            </div>
        </div>
        <div class="col-md-2">
            <div id="gallery">
                <a href="{{asset('assets/assets/img/avtoicon/avto-1.png')}}" >
                    <img src="{{asset('assets/assets/img/avtoicon/avto-1.png')}}" class="img-fluid" ></a>
            </div>
        </div>
        <div class="col-md-2">
            <div id="gallery">
                <a href="{{asset('assets/assets/img/avtoicon/avto-1.png')}}" >
                    <img src="{{asset('assets/assets/img/avtoicon/avto-1.png')}}" class="img-fluid" ></a>
            </div>
        </div>
    </div>
  <div class="row py-3">
        
        <div class="col-md-2">
            <div id="gallery">
                <a href="{{asset('assets/assets/img/avtoicon/avto-1.png')}}" >
                    <img src="{{asset('assets/assets/img/avtoicon/avto-1.png')}}" class="img-fluid" ></a>
            </div>
        </div>
        <div class="col-md-2">
            <div id="gallery">
                <a href="{{asset('assets/assets/img/avtoicon/avto-1.png')}}" >
                    <img src="{{asset('assets/assets/img/avtoicon/avto-1.png')}}" class="img-fluid" ></a>
            </div>
        </div>
        <div class="col-md-2">
            <div id="gallery">
                <a href="{{asset('assets/assets/img/avtoicon/avto-1.png')}}" >
                    <img src="{{asset('assets/assets/img/avtoicon/avto-1.png')}}" class="img-fluid" ></a>
            </div>
        </div>
        <div class="col-md-2">
            <div id="gallery">
                <a href="{{asset('assets/assets/img/avtoicon/avto-1.png')}}" >
                    <img src="{{asset('assets/assets/img/avtoicon/avto-1.png')}}" class="img-fluid" ></a>
            </div>
        </div>
        <div class="col-md-2">
            <div id="gallery">
                <a href="{{asset('assets/assets/img/avtoicon/avto-1.png')}}" >
                    <img src="{{asset('assets/assets/img/avtoicon/avto-1.png')}}" class="img-fluid" ></a>
            </div>
        </div>
        <div class="col-md-2">
            <div id="gallery">
                <a href="{{asset('assets/assets/img/avtoicon/avto-1.png')}}" >
                    <img src="{{asset('assets/assets/img/avtoicon/avto-1.png')}}" class="img-fluid" ></a>
            </div>
        </div>
    </div>

</div>
@endsection
@section('scripts')
<!-- <script src="{{asset('assets/js/jQuery.min.js')}}"></script>
<script src="{{asset('assets/js/popper.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/plugins/OwlCarousel2-2.3.4/dist/owl.carousel.js')}}"></script>
<script src="{{asset('assets/plugins/lightGallery-master/dist/js/lightgallery.js')}}"></script>
<script src="{{asset('assets/plugins/lightGallery-master/dist/js/lightgallery-all.js')}}"></script>

<script src="plugins/air-datepicker-master/dist/js/datepicker.js"></script>
 -->
<script>
  $(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        margin:15,
        autoplay:true,
        loop:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        nav:true,
        animateOut:"jello",
        animateIn:"jello",
        // items:5
        responsive:{
            0:{
                items:1
            },
            468:{
                items:2
            },
            768:{
                items:3
            },
            992:{
                items:4
            }

        }
    });
    $("#gallery").lightGallery({
        download:false,
        share:false
    });




    $.fn.datepicker.language["eng"] = {
        days: ["Dushanba","Seshanba","Chorshanba", "Payshanba","Juma","Shanba","Yakshanba"],
        daysShort:["Du","Se","Cho","Pa","Ju","Sha","Ya"],
        daysMin:["Ya","Du","Se","Cho","Pa","Ju","Sha"]
    }

    $("#picker").datepicker({
        language: "eng",
        multipleDates: false,
        multipleDatesSeparator: " ; ",
        autoClose: true,
        // timepicker: true,
        // startDate: 9,
        // minHours: 9,
        // maxHours: 18,
        clearButton: true
    })
})



</script>
@endsection

