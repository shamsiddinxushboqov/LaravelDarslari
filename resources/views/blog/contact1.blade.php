@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
     <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Biz bilan aloqa</h2>
          <p>Avto ehtiyot qismlar va Avto servis xizmatlariga muhtoj bo'lsangiz yoki sizni bu borada qiziqtirgan savollar bo'lsa quyidagi manzillarga murojat qilishingiz mumkin.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Bizning manzil</h3>
                  <p>Surxondaryo viloyati, Angor tumani</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Elektron manzilimiz</h3>
                  <p>shamsiddinxushboqov@gmail.com<br>angoravtoservis@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Bizning telefon raqamlarimiz</h3>
                  <p>+9 9899 421 08 58<br>+9 9893 221 00 69</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Ismingiz" data-rule="minlen:4" data-msg="Iltimos 4tadan ortiq belgi kiriting" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Emailingiz" data-rule="email" data-msg="Iltimos, email kiriting" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Bu maydon 8belgidan kam bolmasligi kerak" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Xabar"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Yuklanmoqda</div>
                <div class="error-message"></div>
                <div class="sent-message">Sizning xabaringiz jo'natildi. Tashakkur!</div>
              </div>
              <div class="text-center"><button type="submit">Xabar yuborish</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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