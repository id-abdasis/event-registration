<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Form Pendaftaran Festival Himanura</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">

  <style>
    body{
      background: url('assets/img/himanura.jpeg') no-repeat;
      background-size: contain;
      background-position: top center;
    }

  </style>
<body class="layout-3">
   @include('sweetalert::alert')

  <div id="app">
    <div class="main-wrapper container">
     
      <!-- Main Content -->
      <div class="banner"></div>
      <div class="main-content">
        
        <section class="section" style="margin-top: -80px;">
          <div class="row justify-content-center">
                <div class="col-md-9 col-sm-12">
                      @if (Session::has('error'))
                      <div class="alert alert-danger alert-dismissible show fade">
                        <div class="alert-body">
                          <button class="close" data-dismiss="alert">
                            <span>×</span>
                          </button>
                          Silahkan tanyakan di fitur chat yang tersedia di pojok kanan bawah apabila ada hal yang tidak di mengerti pada formulir pendaftaran
                        </div>
                      </div>
                      @endif
                    <div class="section-body">
                        <h2 class="section-title text-dark">Formulir Pendaftaran Peserta Festifal <b>HIMANURA</b></h2>
                        <p class="section-lead text-dark">Silahkan lengkapi formulir pendaftaran dibawah sesuai dengan data ril anda.</p>
                        <div class="card" style="opacity: 97%;">
                            <form class="needs-validation" novalidate="" action="{{ route('store-pendaftaran-peserta') }}" method="POST">
                              @csrf
                              <div class="card-header">
                                <h4>Formulir Pendaftaran</h4>
                              </div>
                              <div class="card-body">
                                <div class="form-group">
                                  <label>Nama Lengkap</label>
                                  <input type="text" placeholder="Masukan Nama Lengkap" name="nama_lengkap" class="form-control" required="">
                                  <small class="form-text text-muted">Contoh: Abd. Asis</small>
                                  <div class="invalid-feedback">
                                    Nama lengkap harus diisi
                                  </div>
                                  <div class="valid-feedback">
                                    Sudah Benar
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label>Jenis Kelamin</label>
                                  <select class="custom-select" required name="jenis_kelamin">
                                      <option value="">Pilih Jenis Kelamin</option>
                                      <option value="Laki-Laki">Laki-laki</option>
                                      <option value="Perempuan">Perempuan</option>
                                  </select>
                                  <div class="invalid-feedback">
                                      Harus Memilih Salah Satu Program Jenis Kelamin
                                  </div>
                                  <div class="valid-feedback">
                                      Sudah Benar
                                  </div>
                                </div>

                                <div class="form-row">
                                  <div class="col-md-8">
                                    <div class="form-group">
                                      <label for="tempat_lahir">Tempat Lahir</label>
                                      <input type="text" placeholder="Masukan Tempat Lahir" name="tempat_lahir" id="tempat_lahir" class="form-control">
                                      <small class="form-text text-muted">Contoh: Bangkalan</small>
                                      <div class="valid-feedback">
                                        Sudah Benar
                                    </div>
                                    </div>
                                  </div>

                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label>Tanggal Lahir</label>
                                      <input placeholder="Pilih Tanggal Lahir" type="date" class="form-control" name="tanggal_lahir"> 
                                      <small class="text-form text-muted">Contoh: 17/11/1997</small>
                                    </div>
                                    
                                  </div>
                                </div>

                                


                                <div class="form-group">
                                  <label>Alamat Lengkap</label>
                                  <textarea name="alamat_lengkap" placeholder="Masukan alamat lengkap anda" required class="form-control" id="" cols="30" rows="10"></textarea>
                                  <small class="form-text text-muted">Contoh: Desa. Rongdurin, Kec. Tanah Merah, Kab. Bangkalan</small>
                                  <div class="invalid-feedback">
                                    Alamat Harus Diisi
                                  </div>
                                  <div class="valid-feedback">
                                    Sudah Benar
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label>Nomor Telepon</label>
                                  <input type="text" name="nomor_telepon" placeholder="Masukan nomor telepon anda" required class="form-control">
                                  <small class="form-text text-muted">Contoh: 081944999994</small>
                                  <div class="valid-feedback">
                                    Good job!
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label>Asal Sekolah</label>
                                  <input name="asal_sekolah" placeholder="Masukan asal sekolah anda" type="text" required class="form-control">
                                  <small class="form-text text-muted">Contoh: SMK Nurul Amanah</small>
                                  <div class="invalid-feedback">
                                    Nama SMK Harus Diisi
                                  </div>
                                  <div class="valid-feedback">
                                    Sudah Benar
                                  </div>
                                </div>
                                <div class="form-group">
                                    <label>Program Try Out</label>
                                    <select class="custom-select" required name="program_tryout">
                                        <option value="">Pilih Try Out</option>
                                        <option value="SAINTEK">SAINTEK</option>
                                        <option value="SOSHUM">SOSHUM</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Harus Memilih Salah Satu Program Try Out
                                    </div>
                                    <div class="valid-feedback">
                                        Sudah Benar
                                    </div>
                                </div>
                              </div>
                              <div class="card-footer text-right">
                                
                                <button class="btn btn-info">Daftar Sekarang</button>
                              </div>
                            </form>
                          </div>
                          <a target="_blank" href="{{ route('dokumentasi-himanura') }}">
                            <button class="btn btn-danger btn-block">Tonton Video Dokumentasi Himanura</button>
                          </a>
                      </div>
                </div>
                
          </div>
          
        </section>
        
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; {{ date('Y') }} <div class="bullet"></div> Design By <a href="abdasis.github.io">HIMANURA</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>