@extends('layouts.app')

@section('content')

 
<div class="container mt-5">
  <div class="row">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/assets/img/about1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Firmamiz haqida ozroq to'xtalamiz!</h3>
            <p>
              Bizning Angor Avto Servis firmamizda umumiy 2xil turdagi xizmatlar mavjud yani:<br>
              <p style="font-weight: bold">1.Avto ehtiyot qismlar sotuvi.</p>
              <p style="font-weight: bold">2.Avtomobillarga texnik xizmat ko`rsatish.</p>
            </p>
            <div class="row">
              <div class="col-md-6">
                <!-- <i class="bx bx-receipt"></i> -->
                <i class="fa fa-shopping-cart" style="font-size:48px;color: black"></i>
                <h4>1.Avto ehtiyot qismlar sotuvi.</h4>
                <p>Biz avto ehtiyot qismlarni Xitoy, Janubiy Koreya va Germaniya kabi Yevropa mamlakatlaridan olib kelamiz</p>
              </div>
              <div class="col-md-6">
                <!-- <i class="bx bx-cube-alt"></i> -->
                <i class="fa fa-car" style="font-size:48px;color: black"></i>
                <i class="fa fa-wrench" style="font-size:48px;color: black"></i>
                <h4>2.Avtomobillarga texnik xizmat ko`rsatish.</h4>
                <p>Bizning mashinalarga texnik xizmatlarni ko'rsatadigan xodimlarimiz kamida 5 yillik tajribaga ega.</p>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg container mb-2">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">20+</span>
            <p>Umumiy xodimlarimiz soni</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">2</span>
            <p>Filiallarimiz</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">13</span>
            <p>Mijozlarga xizmat ko'rsatadigan sotuvchilarimiz</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">6</span>
            <p>Mashina tuzatadigan ustalarimiz</p>
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->


 <!-- Footer -->
    <footer id="footer" class="container">

      <div class="container d-md-flex py-4">

        <div class="mr-md-auto text-center text-md-left">
          <div class="copyright">
            &copy; 2021 <strong><span>Angor Avto Servis MChJ</span></strong>.  Kompaniya nomi Barcha huquqlar himoyalangan.
          </div>
          <div class="credits">
            dizayn <a href="#">shamsiddinxushboqov@gmail.com</a> tomonidan ishlab chiqildi
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>
    </footer><!-- End Footer -->





  </div>
</div>
@endsection

