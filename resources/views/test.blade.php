@extends('layout.home')
@section('content')


      <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay" style="background-image: url('https://images2.minutemediacdn.com/image/upload/c_fill,g_auto,h_1248,w_2220/f_auto,q_auto,w_1100/v1555290065/shape/mentalfloss/istock-486895782.jpg')">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5">
              
              <h1>Montirun.</h1>
              <font size="6">
              <p class="line-bottom">Service & Spareparts</p>
              </font>

            </div>
            <div class="col-lg-5 ml-auto">
              
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-5 pr-md-5 mr-auto">
            <h2 class="line-bottom">Apa itu Montirun?</h2>
            <p>Montirun adalah sebuah website jasa montir untuk mengatasi segala kerusakan atau juga bisa konsultasi dengan para montir yang kami tawarkan melalui website montirun.</p>
          </div>
          <div class="col-md-6">
            <div class="quick-contact-form bg-white single-widget popular-posts-widget ">
               <h1>Daftar Disini</h1><br>
              
            <div class="jq-tab-wrapper" id="horizontalTab">
              <div class="jq-tab-menu">
                <div class="jq-tab-title active" data-tab="1">Cutsomer</div>
                <div class="jq-tab-title" data-tab="2">Montir</div>
              </div>
              <div class="jq-tab-content-wrapper">
                <div class="jq-tab-content active" data-tab="1">
                <br>
               <form id="form-daftar" action="{{ url('/postregister') }}" method="post">
            {{csrf_field()}}
            <div class=" w3-margin-top w3-row">
              <div class="form-group w3-col l6 w3-padding-small">
                <input type="text" name="nama_cust" class="form-control" required="" placeholder="Nama Lengkap">
              </div>
              <div class="form-group w3-col l6 w3-padding-small">
                <input type="text" name="nama_kendaraan" class="form-control" required="" placeholder="Nama Kendaraan">
              </div>
              <div class="form-group w3-col l6 w3-padding-small">
                <input type="text" name="jenis_kendaraan" class="form-control" required="" placeholder="Jenis Kendaraan">
              </div>
              <div class="form-group w3-col l6 w3-padding-small">
                <input type="text" name="telepon" class="form-control" required="" placeholder="No.Telpon">
              </div>
              <div class="form-group w3-col l6 w3-padding-small">
                <input type="text" name="alamat" class="form-control" required="" placeholder="Alamat">
              </div>
              <div class="form-group w3-col l6 w3-padding-small">
                <input type="email" name="email" class="form-control" required="" placeholder="E-mail">
              </div>
              <div class="form-group w3-col l12 w3-padding-small">
                <input type="password" name="password" class="form-control" required="" placeholder="Password">
              </div>
              <div class="form-group w3-col l12 w3-padding-small"> 
                <button type="submit" class="btn btn-success form-control"><i style="color: black" class="fas fa-sign-in-alt"></i>Daftar</button>
              </div>
            </div>
          </form>
        </div>
            <div class="jq-tab-content active" data-tab="2">
              <br>
               <form id="form-daftar" action="{{ url('/postregister') }}" method="post">
            {{csrf_field()}}
            <div class=" w3-margin-top w3-row">
              <div class="form-group w3-col l6 w3-padding-small">
                <input type="text" name="nama_cust" class="form-control" required="" placeholder="Nama montir">
              </div>
              <div class="form-group w3-col l6 w3-padding-small">
                <input type="text" name="nama_kendaraan" class="form-control" required="" placeholder="Nama Kendaraan">
              </div>
              <div class="form-group w3-col l6 w3-padding-small">
                <input type="text" name="jenis_kendaraan" class="form-control" required="" placeholder="Jenis Kendaraan">
              </div>
              <div class="form-group w3-col l6 w3-padding-small">
                <input type="text" name="telepon" class="form-control" required="" placeholder="No.Telpon">
              </div>
              <div class="form-group w3-col l6 w3-padding-small">
                <input type="text" name="alamat" class="form-control" required="" placeholder="Alamat">
              </div>
              <div class="form-group w3-col l6 w3-padding-small">
                <input type="email" name="email" class="form-control" required="" placeholder="E-mail">
              </div>
              <div class="form-group w3-col l12 w3-padding-small">
                <input type="password" name="password" class="form-control" required="" placeholder="Password">
              </div>
              <div class="form-group w3-col l12 w3-padding-small"> 
                <button type="submit" class="btn btn-success form-control"><i style="color: black" class="fas fa-sign-in-alt"></i>Daftar</button>
              </div>
            </div>
          </form>


          <br>
          <footer class="w3-container" style="border-top: 1px solid #eee">
            <h6>Sudah memiliki akun? <a href="/login">MASUK</a></h6>
          </footer>
              </div>
          </div>
        </div>
      </div>
    </div>
  
    
        <div class="site-section">
      <div class="container">
        
        <div class="row mb-5">
          <div class="col-md-4 mr-auto">
            <h2 class="line-bottom">Sekilas Mengenai Montirun</h2>
          </div>
          <div class="col-md-8 text-right">
            <nav class="custom-tab nav" role="tablist"  class="nav nav-tabs" id="nav-tab" role="tablist">
              <a href="#nav-one" class="nav-item nav-link active" data-toggle="tab" role="tab"  aria-controls="nav-one" aria-selected="true">Pelayanan</a>
              <a href="#nav-two" class="nav-item nav-link" data-toggle="tab" role="tab" aria-controls="nav-two" aria-selected="false">Kualitas</a>
              <a href="#nav-three" class="nav-item nav-link" data-toggle="tab" role="tab" aria-controls="nav-three" aria-selected="false">Montir</a>
            </nav>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                <div class="row">
                  <div class="col-md-7">
                    <img src="image/f.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div class="col-md-4 ml-auto">
                    <h2 class="line-bottom">Pelayanan</h2>
                    <h4>Kendaraan bermasalah? Kami siap membantu.</h4>
                    <p>Jadwalkan servis mobil Anda online dan mekanik kami akan datang dimanapun Anda berada. Semua prosesnya sangat mudah. Dengan menggunakan website kami, Anda bisa mengatur jadwal servis, mendapatkan penawaran harga, dan melihat riwayat servis mobil Anda. Selain itu harga servis kami juga lebih rendah dari harga bengkel karena kami tidak mempunyai bengkel fisik sehingga biaya operasional kami lebih rendah.</p>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">
                <div class="row">
                  <div class="col-md-7">
                    <img src="image/d.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div class="col-md-4 ml-auto">
                    <h2 class="line-bottom">Kualitas</h2>
                    <h4>Servis kami bergaransi.</h4>
                    <p>
                    Kami menjamin kualitas servis yang mekanik kami lakukan. Oleh karena itu, semua servis kami disertai dengan garansi 3 bulan / 3000 km (yang mana yang lebih dulu). Dengan syarat dan ketentuan tertentu, jika ada permasalahan mobil yang timbul pada periode garansi, maka kami akan bertanggung jawab atas masalah tersebut tanpa mengenakan biaya tambahan.</p>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">
                <div class="row">
                  <div class="col-md-7">
                    <img src="image/e.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div class="col-md-4 ml-auto">
                    <h2 class="line-bottom">Montir</h2>
                    <h4>Mekanik kami datang kepada Anda.</h4>
                    <p>Anda tidak perlu lagi membawa mobil Anda ke bengkel. Mekanik kami akan datang ke lokasi Anda sesuai pesanan dengan membawa semua peralatan dan spareparts yang dibutuhkan. Anda hanya perlu mempersiapkan lokasi yang memadai untuk servis mobilnya.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section">
      <div class="container">
        <div class="row mb-4">

          <div class="col-md-12 mx-auto">
            <h2 class="line-bottom text-left">Artikel Populer</h2>
          </div>

        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="image/b.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="/artikel1">5 Tips Membeli Mobil Bekas yang Efektif</a></h2>
                <span class="meta d-inline-block mb-3">Oktober 17, 2019 <span class="mx-2">by</span> <a href="#">Abdul</a></span>
                <p>Tahukah kamu kalau tips membeli mobil bekas sangat bermanfaat? Meskipun tampak sepele, tips ini akan memudahkan kamu dalam memilih mobil bekas. Dengan tips ini, risiko salah pilih dapat diminimalisasi dengan...</p>
                <a href="#" style="color: #FE7501;">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="image/a.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html">5 Keuntungan Servis Motor Secara Berkala</a></h2>
                <span class="meta d-inline-block mb-3">Oktober 02, 2019 <span class="mx-2">by</span> <a href="#">Rizky</a></span>
                <p>Tahukah kamu kalau tips membeli mobil bekas sangat bermanfaat? Meskipun tampak sepele, tips ini akan memudahkan kamu dalam memilih mobil bekas. Dengan tips ini, risiko salah pilih dapat diminimalisasi dengan baik. Ingat, memilih mobil bekas jauh lebih sulit.. </p><a href="#" style="color: #FE7501;">Read More</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="image/c.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html">Cara Memulai Usaha Bengkel Motor dan Sparepart</a></h2>
                <span class="meta d-inline-block mb-3">Januari 2, 2019 <span class="mx-2">by</span> <a href="#">Rizky</a></span>
                <p>Jumlah pengguna motor semakin hari terus bertambah. Hal ini dipicu oleh banyaknya keunggulan yang ditawarkan moda transportasi ini, mulai dari harga terjangkau sampai cicilan ringan yang ditawarkan dari beberapa lembaga...</p> <a href="#" style="color: #FE7501;">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
@endsection