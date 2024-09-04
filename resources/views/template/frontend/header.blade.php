<!-- Spinner Start -->
<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->

<!-- Topbar Start -->
<div class="container-fluid topbar px-0 px-lg-4 bg-light py-2 d-none d-lg-block">
    <div class="container">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                <div class="d-flex flex-wrap">
                    <div class="ps-3">
                        <a href="mailto:example@gmail.com" class="text-muted small"><i
                                class="fas fa-envelope text-primary me-2"></i>pajangan2013@gmail.com</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-flex justify-content-end">
                    <div class="d-flex pe-3">
                        <a class="btn p-0 text-primary me-3"
                            href="https://www.facebook.com/pemdes.pajangan.3?mibextid=rS40aB7S9Ucbxw6v"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn p-0 text-primary me-3"
                            href="https://www.instagram.com/pemdes_pajangan_2013?igsh=M3NodWNjdDM0ODB2"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar & Hero Start -->
<div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="#" class="navbar-brand p-0">
                <img src="{{ asset('assets/frontend') }}/img/logolanding.png" alt="Logo">

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-0 mx-lg-auto">
                    <a href="{{ route('beranda') }}" class="nav-item nav-link active">Beranda</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-bs-toggle="dropdown">
                            <span class="dropdown-toggle">Profil Desa</span>
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{ route('tentangDesa') }}" class="dropdown-item">Tentang Kami</a>
                            <a href="team.html" class="dropdown-item">Visi & Misi</a>
                            <a href="testimonial.html" class="dropdown-item">Sejarah Desa</a>
                            <a href="FAQ.html" class="dropdown-item">Geografis Desa</a>
                            <a href="404.html" class="dropdown-item">Data Penduduk Perwilayah</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-bs-toggle="dropdown">
                            <span class="dropdown-toggle">Informasi</span>
                        </a>
                        <div class="dropdown-menu">
                            <a href="feature.html" class="dropdown-item">Berita</a>
                            <a href="team.html" class="dropdown-item">Pengumuman</a>
                            <a href="testimonial.html" class="dropdown-item">Agenda Kegiatan</a>
                            <a href="FAQ.html" class="dropdown-item">Potensi Desa</a>
                            <a href="404.html" class="dropdown-item">BUMDES</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-bs-toggle="dropdown">
                            <span class="dropdown-toggle">PemDes</span>
                        </a>
                        <div class="dropdown-menu">
                            <a href="feature.html" class="dropdown-item">Tugas dan Fungsi Perangkat Desa</a>
                            <a href="team.html" class="dropdown-item">Struktur Organisasi</a>
                            <a href="testimonial.html" class="dropdown-item">Perangkat Desa</a>
                            <a href="FAQ.html" class="dropdown-item">Lembaga Desa</a>
                        </div>
                    </div>
                    <a href="service.html" class="nav-item nav-link">Gallery</a>
                    <div class="nav-btn px-3">
                        <a href="#"
                            class="btn btn-primary rounded-pill py-2 px-4 ms-3 flex-shrink-0">Pengaduan</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar & Hero End -->
