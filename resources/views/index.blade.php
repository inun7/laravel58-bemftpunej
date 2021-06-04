@extends('layouts.master')
@section('content')

<section class="banner_area">
    <div class="box_1620">
      <section class="feature_area white_feature p_25">
        <div class="container">
          <div class="main_title">
              <h3 style="color: black; "> <strong>	
                  BADAN EKSEKUTIF MAHASISWA <br> 
                  FAKULTAS TEKNOLOGI PERTANIAN <br>
                  UNIVERSITAS JEMBER </strong>
              </h3>
              <picture>
                  <img src="{{asset('assets/BEM_FTP_UNEJ/logonayanikafiks3.png')}}" class="img-fluid img-thumbnail" style="height: 400px; width: 400px;">
              </picture>
          </div>
          
          <!--================FILOSOFI LOGO =================-->
              <div class="container">
              <div class="container text-center mb-4">
                  <h4 id="filosofi_logo" style="color: black;">FILOSOFI LOGO</h4>
              </div>
					<div id="demo" class="carousel slide" data-ride="carousel">
					  <!-- The slideshow -->
					  <div class="carousel-inner">
					  <center>
						<div class="carousel-item active">
						  <img src="{{asset('assets/BEM_FTP_UNEJ/FILOSOFI_LOGO_KABINET/1.png')}}" alt="Burung Elang" width="300" height="300">
						</div>
						<div class="carousel-item">
						  <img src="{{asset('assets/BEM_FTP_UNEJ/FILOSOFI_LOGO_KABINET/2.png')}}" alt="Mata" width="300" height="300">
						</div>
						<div class="carousel-item">
						  <img src="{{asset('assets/BEM_FTP_UNEJ/FILOSOFI_LOGO_KABINET/3.png')}}" alt="Sayap" width="300" height="300">
						</div>
						<div class="carousel-item">
						  <img src="{{asset('assets/BEM_FTP_UNEJ/FILOSOFI_LOGO_KABINET/4.png')}}" alt="Cakar" width="300" height="300">
						</div>
						<div class="carousel-item">
						  <img src="{{asset('assets/BEM_FTP_UNEJ/FILOSOFI_LOGO_KABINET/5.png')}}" alt="Warna" width="300" height="300">
						</div>
					  </center>
					  </div>
					  
					  <!-- Left and right controls -->
					  <a class="carousel-control-prev" href="#demo" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					  </a>
					  <a class="carousel-control-next" href="#demo" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					  </a>
					</div>
              </div>
          <!--================END FILOSOFI LOGO =================-->
          
          
          <div class="card text-center mt-4">
            <div class="card-body">
              <h4 id="latar_belakang" class="card-title" style="color: black;">LATAR BELAKANG</h4>
              <p class="card-text">
                  Badan Eksekutif Mahasiswa Fakultas Teknologi Pertanian Universitas Jember
                  merupakan organisasi kemahasiswaan dalam lingkup internal FTP yang bergerak
                  sebagai lembaga eksekutif dan menjalankan tugas dan fungsi eksekutif
                  sebagaimana tertuang dalam UUD IKM FTP.
              </p>
            </div>
          </div>
          <div class="card text-center mt-4">
            <div class="card-body">
              <h4 id="visi" class="card-title" style="color: black;">VISI</h4>
              <p class="card-text">
                  Mewujudkan BEM FTP UNEJ
                  sebagai lembaga berintegritas,
                  responsif, dan bersinergi bagi
                  mahasiswa FTP UNEJ.
              </p>
            </div>
          </div>
          <div class="card text-center mt-4">
            <div class="card-body">
              <h4 id="misi" class="card-title" style="color: black;">MISI</h4>
              <p class="card-text text-justify">
                  1. Membangun internal BEM FTP UNEJ yang kokoh
                      berlandaskan profesionalitas dengan semangat
                      gotong royong. <br>
                  2. Menjadi fasilitator dalam memperjuangkan aspirasi
                      mahasiswa FTP UNEJ dengan menjalankan fungsi
                      advokasi yang terbuka. <br>
                  3. Mewujudkan sinergitas yang harmonis dengan
                      Organisasi Mahasiswa dan lembaga kemahasiswaan
                      di lingkup FTP UNEJ. <br>
                  4. Menjalin hubungan eksternal FTP UNEJ untuk
                      mengembangkan sumberdaya mahasiswa FTP UNEJ.
              </p>
            </div>
          </div>
          <div class="card text-center mt-4">
            <div class="card-body">
              <h4 id="struktur_organisasi" class="card-title" style="color: black;">STRUKTUR ORGANISASI</h4>
              <p class="card-text text-left">
                  1. BADAN PENGURUS HARIAN <br>
                  2. DEPART ADVOKASI KESEJAHTERAAN MAHASISWA (ADKESMA) <br>
                  3. DEPART KAJIAN DAN AKSI STRATEGIS (KASTRAT) <br>
                  4. DEPART PENGEMBANGAN SUMBER DAYA MAHASISWA (PSDM) <br>
                  5. DEPART SOSIAL LINGKUNGAN (SOSLING) <br>
                  6. DEPART MEDIA INFORMASI (MEDINFO) <br>
                  7. DEPART HUBUNGAN EKSTERNAL (HUBEKS) <br>
              </p>
              <a class="btn btn-warning" href="{{url('/struktur')}}">DETAIL</a>
            </div>
          </div>
          
          <!--================PROKER UNGGULAN =================-->
          <div class="container mt-5">
              <div class="container text-center mb-4">
                  <h4 id="proker_unggulan" style="color: black;">PROKER UNGGULAN</h4>
              </div>
              <div class="row">
                  <div class="col">
                      <div class="item text-black">
                          <div class="testi_item">
                              <h4 class="text-center">FTP HARMONI</h4>
                          </div>
                      </div>
                  </div>
                  <div class="col">
                      <div class="item text-black">
                          <div class="testi_item">
                              <h4 class="text-center">TIM ADVOKASI</h4>
                          </div>
                      </div>
                  </div>
                  <div class="col">
                      <div class="item text-black">
                          <div class="testi_item">
                              <h4 class="text-center">SI-GAMA</h4>
                          </div>
                      </div>
                  </div>
                  <div class="col">
                      <div class="item text-black">
                          <div class="testi_item">
                              <h4 class="text-center">X-REACH</h4>
                          </div>
                      </div>
                  </div>
               </div>
          </div>
          <!--================END PROKER UNGGULAN =================-->
          
          
          </div>
        </div>
      </section>
    </div>
  </section>