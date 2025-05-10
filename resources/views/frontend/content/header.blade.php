<div id="header2" class="header4-area">
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="header-top-left">
                    <div class="logo-area">
                        @if (@$footer->logo == NULL)
                            <img class="logo-img" src="{{ asset('Assets/Frontend/img/logo-footer.png') }}" alt="Logo Sekolah">
                        @else
                            <img class="logo-img" src="{{ asset('storage/images/logo/' . $footer->logo) }}" alt="Logo Sekolah">
                        @endif


                        <!-- Nama Sekolah -->
                        <span class="school-name">SMPN 12 Pekalongan</span>
                    </div>
                </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="header-top-right">
                        <ul>
                            <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:{{@$footer->telp}}"> {{@$footer->telp}} </a></li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="https://mail.google.com/">{{@$footer->email}}</a></li>
                            <li>
                                @auth
                                    <a href="/home" class="apply-now-btn2">Home</a>
                                @else
                                    <a class="apply-now-btn2" href="{{ route('login') }}" target="_blank">Masuk</a>

                                @endauth
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-menu-area bg-primary" id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                    
                    <nav id="desktop-nav">
                        <ul>
                            <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="/">Beranda</a></li>
                            <li><a href="#">Tentang Kami</a>
                                <ul>
                                    <li><a href="{{ route('profile.sekolah') }}">Profile Sekolah</a></li>
                                    <li><a href="{{ route('visimisi.sekolah') }}">Visi dan Misi</a></li>
                                </ul>
                            </li>
                           <li><a href="#">Program</a>
                                <ul>
                                    <li class="has-child-menu"><a href="#">Intrakurikuler</a>
                                        <ul class="thired-level">
                                            @foreach ($jurusanM as $jurusans)
                                                <li><a href=" {{ url('program', $jurusans->slug)}} "> {{$jurusans->nama}} </a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="has-child-menu"><a href="#">Ekstrakurikuler</a>
                                        <ul class="thired-level">
                                            @foreach ($kegiatanM as $kegiatans)
                                                <li><a href=" {{url('kegiatan', $kegiatans->slug)}} ">{{$kegiatans->nama}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="{{ (request()->is('berita')) ? 'active' : '' }}"><a href="{{ route('berita') }}">Berita</a></li>
                            <li><a href="{{ asset('brosur.pdf') }}" download="Brosur PPDB.pdf" target="_blank">PPDB</a></li>
                            <li><a href="#">LAINNYA</a>
                                <ul>
                                    <li><a href="https://tally.so/r/mDxP5X" target="_blank" rel="noopener noreferrer">SARAN DAN MASUKAN</a></li>
                                    <li><a href="https://script.google.com/macros/s/AKfycbwsTsTocpWOH5kVZU2IHqKOBwGA21PDoKjxyAsYvcN_qvczA_GYz09Ta5plhRAsn9gGUA/exec" target="_blank">CEK KEHADIRAN SISWA</a></li>
                                    <li><a href="{{ asset('Kaldik 2024-2025_SMP 12.pdf') }}" download="Kaldik 2024-2025_SMP 12.pdf" target="_blank">KALENDER AKADEMIK</a></li>
                                    <li><a href="" target="_blank" rel="noopener noreferrer">PENGUMUMAN KELULUSAN</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu Area Start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">

            <div class="header-top-left">
                    <div class="logo-area">
                        @if (@$footer->logo == NULL)
                            <img class="logo-img" src="{{ asset('Assets/Frontend/img/logo-footer.png') }}" alt="Logo Sekolah">
                        @else
                            <img class="logo-img" src="{{ asset('storage/images/logo/' . $footer->logo) }}" alt="Logo Sekolah">
                        @endif

                        <!-- Logo Sekolah Penggerak -->
                        <img class="logo-img" src="{{ asset('Assets/Frontend/img/footer/sekolahpenggerak2.jpg') }}" alt="Sekolah Penggerak">
                        
                        <!-- Logo Sekolah Ramah Anak -->
                        <img class="logo-img" src="{{ asset('Assets/Frontend/img/footer/ramahanak2.png') }}" alt="Sekolah Ramah Anak">
                        
                        <!-- Nama Sekolah -->
                        <span class="school-name">SMPN 12 Pekalongan</span>
                    </div>
                    
            <div class="col-md-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li class="active"><a href="/">Beranda</a></li>
                            <li><a href="#">Tentang Kami</a>
                                <ul>
                                    <li><a href="{{ route('profile.sekolah') }}">Profile Sekolah</a></li>
                                    <li><a href="{{ route('visimisi.sekolah') }}">Visi dan Misi</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Program</a>
                                <ul>
                                    <li class="has-child-menu"><a href="#">Intrakurikuler</a>
                                        <ul class="thired-level">
                                            @foreach ($jurusanM as $jurusans)
                                                <li><a href="{{ url('program', $jurusans->slug) }}">{{ $jurusans->nama }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="has-child-menu"><a href="#">Ekstrakurikuler</a>
                                        <ul class="thired-level">
                                            @foreach ($kegiatanM as $kegiatans)
                                                <li><a href="{{ url('kegiatan', $kegiatans->slug) }}">{{ $kegiatans->nama }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="{{ (request()->is('berita')) ? 'active' : '' }}"><a href="{{ route('berita') }}">Berita</a></li>
                            <li><a href="{{ asset('brosur.pdf') }}" target="_blank">PPDB</a></li>
                            <li><a href="#">Lainnya</a>
                                <ul>
                                    <li><a href="https://tally.so/r/mDxP5X" target="_blank" rel="noopener noreferrer">SARAN DAN MASUKAN</a></li>
                                    <li><a href="https://script.google.com/macros/s/AKfycbweMQVab0c8ZJpLOaWIITuurQirOrHj9PziImZMiuVVlcggVwiWQMh6J5NNfceKQzcoXA/exec" target="_blank">CEK KEHADIRAN SISWA</a></li>
                                    <li><a href="{{ asset('Kaldik 2024-2025_SMP 12.pdf') }}" download="Kaldik 2024-2025_SMP 12.pdf" target="_blank">KALENDER AKADEMIK</a></li>
                                    <li><a href="" target="_blank" rel="noopener noreferrer">PENGUMUMAN KELULUSAN</a></li>
                                </ul>
                            </li>
                            <li>
                                @auth
                                    <a href="/home" class="apply-now-btn2">Home</a>
                                @else
                                    <a class="apply-now-btn2" href="{{ route('login') }}" target="_blank">Masuk</a>
                                @endauth
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu Area End -->

