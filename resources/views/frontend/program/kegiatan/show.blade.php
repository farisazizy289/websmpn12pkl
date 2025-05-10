@extends('layouts.Frontend.app')

@section('title')
    Ekstrakurikuler SMP Negeri 12 Pekalongan
@endsection

@section('content')
    <div class="about-page1-area">
        <div class="container">
            <div class="about-page-content-holder">
                <div class="content-box">
                    <h2>SMP Negeri 12 Pekalongan memiliki beberapa Ekstrakurikuler sebagai berikut:</h2>
                </div>

                @php
                    $ekstrakurikuler = [
                        ['nama' => '1. Jurnalistik', 'deskripsi' => 'Ekstrakurikuler jurnalistik membekali siswa dengan keterampilan menulis berita, artikel, dan opini. Siswa juga belajar fotografi, desain grafis, dan editing video untuk mendukung media sekolah.', 'foto' => asset('storage/images/ekstrakurikuler/jurnalistik.jpg')],
                        ['nama' => '2. Voli', 'deskripsi' => 'Ekstrakurikuler bola voli bertujuan mengembangkan kemampuan siswa dalam olahraga voli, meningkatkan kekompakan tim, serta membangun mental juara melalui latihan rutin dan kompetisi.', 'foto' => asset('storage/images/ekstrakurikuler/voli.jpg')],
                        ['nama' => '3. Tari', 'deskripsi' => 'Ekstrakurikuler tari mengajarkan berbagai jenis tarian tradisional dan modern. Siswa dilatih untuk tampil di berbagai acara sekolah maupun kompetisi seni.', 'foto' => asset('storage/images/ekstrakurikuler/tari.jpg')],
                        ['nama' => '4. Pramuka', 'deskripsi' => 'Pramuka melatih kedisiplinan, kepemimpinan, dan keterampilan bertahan hidup di alam. Kegiatan meliputi latihan baris-berbaris, tali-temali, hingga kegiatan sosial dan kemanusiaan.', 'foto' => asset('storage/images/ekstrakurikuler/pramuka.jpg')],
                        ['nama' => '5. PBB', 'deskripsi' => 'Kegiatan PBB melatih siswa dalam kedisiplinan dan kekompakan melalui baris-berbaris, penghormatan, serta formasi gerakan yang teratur. Ini juga berguna untuk persiapan upacara dan lomba PBB.', 'foto' => asset('storage/images/ekstrakurikuler/pbb.jpg')]
                    ];
                @endphp

                @foreach($ekstrakurikuler as $index => $ekskul)
                    <div class="content-box" style="margin-bottom: 40px;">
                        <p style="text-align: justify;"><b>{{ $ekskul['nama'] }}</b><br>
                            {{ $ekskul['deskripsi'] }}
                        </p>
                        
                        <button onclick="showPhoto('{{ $index }}')" id="showBtn{{ $index }}">Lihat Foto</button>
                        <button onclick="hidePhoto('{{ $index }}')" id="hideBtn{{ $index }}" style="display: none;">Sembunyikan Foto</button>
                        
                        <div id="photoContainer{{ $index }}" style="display: none; text-align: center; margin-top: 20px;">
                            <img src="{{ $ekskul['foto'] }}" id="photo{{ $index }}" onclick="openFullScreen(this)" style="width: 100%; height: auto; cursor: pointer; border-radius: 10px;" alt="Foto {{ $ekskul['nama'] }}">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Fullscreen View -->
    <div id="fullscreenContainer" onclick="closeFullScreen()">
        <img id="fullscreenImage" src="">
    </div>

    <style>
        #fullscreenContainer {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
        }
        #fullscreenImage {
            max-width: 100%;
            max-height: 100%;
        }
    </style>

    <script>
        function showPhoto(index) {
            document.getElementById('photoContainer' + index).style.display = 'block';
            document.getElementById('showBtn' + index).style.display = 'none';
            document.getElementById('hideBtn' + index).style.display = 'inline-block';
        }

        function hidePhoto(index) {
            document.getElementById('photoContainer' + index).style.display = 'none';
            document.getElementById('showBtn' + index).style.display = 'inline-block';
            document.getElementById('hideBtn' + index).style.display = 'none';
        }

        function openFullScreen(img) {
            document.getElementById('fullscreenImage').src = img.src;
            document.getElementById('fullscreenContainer').style.display = 'flex';
        }

        function closeFullScreen() {
            document.getElementById('fullscreenContainer').style.display = 'none';
        }
    </script>
@endsection
