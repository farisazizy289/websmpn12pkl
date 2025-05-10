@extends('layouts.Frontend.app')

@section('title')
    {{$jurusan->nama}} Mata Pelajaran
@endsection

@section('content')
    @section('about')
    <div class="about-page1-area">
        <div class="container">
            {{-- Gambar di atas, full width, rounded, dan diberi jarak --}}
            <div class="text-center my-4">
                <img src="{{ asset('storage/images/jurusan/' . $jurusan->dataJurusan->image) }}" 
                    class="img-fluid rounded" 
                    style="width: 100%; max-width: 1200px; height: auto; border-radius: 15px; margin-bottom: 20px;" 
                    alt="about">
            </div>

                

    

    <div class="about-page-content-holder">
        <div class="content-box">
            <h2>SMP Negeri 12 Pekalongan memiliki beberapa mata pelajaran sebagai berikut:</h3>
            <p style="text-align: justify;">
                          </p>
        </div>
        <div class="content-box">
            <p style="text-align: justify;">
                <b>1. Bahasa Inggris</b><br>
            Mata pelajaran yang membekali siswa dengan keterampilan berbicara, menulis, membaca, dan mendengarkan dalam bahasa Inggris.</br>
            </p>

            <p style="text-align: justify;">
                <b>2. Bahasa Indoneisa</b><br>
            Mempelajari keterampilan berbahasa Indonesia yang baik dan benar, mencakup membaca, menulis, berbicara, dan mendengarkan.</p>
            </p>

            <p style="text-align: justify;">
                <b>3. Bimbingan Konseling (BK) </b><br>
            Memberikan bimbingan kepada siswa dalam mengembangkan potensi, mengatasi permasalahan, serta merencanakan masa depan pendidikan dan karier.</p>
            </p>

            <p style="text-align: justify;">
                <b>4. Ilmu Pengetahuan Sosisal (IPS) </b><br>
            Mengajarkan sejarah, geografi, ekonomi, dan sosiologi untuk memahami lingkungan sosial dan budaya.</p>
            </p>

            <p style="text-align: justify;">
                <b>5. Informatika</b><br>
            Membekali siswa dengan keterampilan dasar dalam teknologi informasi, pemrograman, dan penggunaan komputer.</p>
            </p>

            <p style="text-align: justify;">
                <b>6. Seni Budaya </b><br>
            Mengembangkan kreativitas siswa melalui seni musik, tari, rupa, dan teater.</p>
            </p>

            <p style="text-align: justify;">
                <b>7. Bahasa Jawa </b><br>
            Memperkenalkan siswa pada budaya dan bahasa daerah Jawa sebagai bagian dari pelestarian budaya lokal.</p>
            </p>

            <p style="text-align: justify;">
                <b>8. Pendidikan Jasmani,Olahraga,dan Kesehatan (PJOK) </b><br>
            Mengajarkan pentingnya kebugaran jasmani, olahraga, serta pola hidup sehat.</p>
            </p>

            <p style="text-align: justify;">
                <b>9. Matematika </b><br>
            Mempelajari konsep angka, aljabar, geometri, statistika, dan pemecahan masalah logis.</p>
            </p>

            <p style="text-align: justify;">
                <b>10. Prakarya </b><br>
            Membantu siswa mengembangkan keterampilan tangan dalam bidang kerajinan, rekayasa, budidaya, dan pengolahan makanan.</p>
            </p>

            <p style="text-align: justify;">
                <b>11. Pendidikan Agama Islam dan Budi Pekerti </b><br>
            Mengajarkan nilai-nilai agama Islam dan budi pekerti yang baik dalam kehidupan sehari-hari.</p>
            </p>

            <p style="text-align: justify;">
                <b>12. Ilmu Pengetahuan Alam (IPA) </b><br>
            Mengenalkan siswa pada ilmu fisika, kimia, dan biologi untuk memahami fenomena alam.</p>
            </p>

            <p style="text-align: justify;">
                <b>13. Pendidikan Pancasila</b><br>
            Membentuk karakter siswa berdasarkan nilai-nilai Pancasila, kewarganegaraan, dan kebangsaan.</p>
            </p>

        </div>
    </div>
</div>
                        {{-- Deskripsi dari Database --}}
                        {!! $jurusan->dataJurusan->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
@endsection
