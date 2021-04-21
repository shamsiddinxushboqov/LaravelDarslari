@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Servis bo'limi</h2>
          <p>Angor Avto Servis MChJ jamiyati tomonidan ko'rsatiladigan eng ommabop xizmat turlari:</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <!-- <i class="bx bxl-dribbble"></i> -->
                <!-- <i class="fa-car-wrench"></i> -->
                <img src="assets/assets/img/avtoicon/service-1.jpg" class="img-fluid" alt=""  style="border-radius: 50%;height: 60px;width:61px;">

              </div>
              <h4><a href="">Mashinani motor qilish</a></h4>
              <p>Avto ulovingiz motoridagi muammolarni aniqlaymiz va bartaraf etamiz.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <!-- <i class="bx bx-file"></i> -->
                <img src="assets/assets/img/avtoicon/service-2.jpg" class="img-fluid" alt="" style="border-radius: 50%;height: 61px;width:61px;">
              </div>
              <h4><a href="">Balansirovka</a></h4>
              <p>G'ildiraklarni muvozanatlash bu haydash qulayligi demakdir</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <!-- <i class="bx bx-tachometer"></i> -->
                <img src="assets/assets/img/avtoicon/service-3.jpg" class="img-fluid" alt=""  style="border-radius: 50%;height: 60px;">

              </div>
              <h4><a href="">Xodovoy</a></h4>
              <p>Mashinani haydash paytida tebranish va haddan tashqari tebranishdan saqlanish uchun xodovoy xizmati</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
                <!-- <i class="bx bx-layer"></i> -->
                <img src="assets/assets/img/avtoicon/service-4.jpg" class="img-fluid" alt=""  style="border-radius: 50%;height: 60px;">
              </div>
              <h4><a href="">Kuzupnoy</a></h4>
              <p>Mashina kuzovi(tanasi)ni tamirlash.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
              <div class="icon">
                <!-- <i class="bx bx-slideshow"></i> -->
                <img src="assets/assets/img/avtoicon/service-5.jpg" class="img-fluid" alt=""  style="border-radius: 50%;height: 60px;">
              </div>
              <h4><a href="">Moy almashtirish</a></h4>
              <p>Mashinangizga eng mashxur Mannol moylarini quying</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <!-- <i class="bx bx-arch"></i> -->
                <img src="assets/assets/img/avtoicon/service-6.jpg" class="img-fluid" alt=""  style="width: 70px;border-radius: 50%;height: 60px;">
              </div>
              <h4><a href="">Elektrik</a></h4>
              <p>Mashinada qisqa tutashuv va shu kabi elektr simlarini sozlash</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    
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