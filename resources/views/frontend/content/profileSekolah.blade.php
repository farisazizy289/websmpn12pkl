@extends('layouts.Frontend.app')

@section('title')
    Profile Sekolah
@endsection

@section('content')
    @section('about')
        <div class="container">
            @if ($profile)
                <div style="margin-top: 5%; margin-bottom:3%">
                    <img src="{{asset('storage/images/profileSekolah/' .$profile->image)}}" class="img-responsive" style="max-height:500px; width:100%; object-fit:cover">
                </div>
                <h2 class="title-center">{{$profile->title}}</h2>
                <p class="sub-title-full-width" style="text-align: justify;">
    SMPN 12 Pekalongan merupakan sekolah menengah pertama negeri yang berdiri sejak 30 Januari 1995 dan berada di bawah kepemilikan Pemerintah Daerah. Dengan NPSN 20331630, sekolah ini telah mendapatkan Akreditasi A, yang mencerminkan mutu pendidikan yang unggul dan berkualitas.
</p>

<p class="sub-title-full-width" style="text-align: justify;">
    Sebagai institusi pendidikan yang berstatus negeri, SMPN 12 Pekalongan menerapkan Kurikulum Merdeka, yang memberikan kebebasan bagi guru dan siswa dalam mengembangkan proses pembelajaran yang lebih kreatif, inovatif, dan menyenangkan. Sekolah ini juga memiliki tenaga pengajar yang kompeten serta fasilitas pendukung yang memadai, termasuk perpustakaan dan berbagai program akademik maupun non-akademik.
</p>

<p class="sub-title-full-width" style="text-align: justify;">
    Pendirian SMPN 12 Pekalongan didasarkan pada SK Pendirian Sekolah Nomor 5-213/A/261/0195 dengan Tanggal SK Pendirian 30 Januari 1995. Selain itu, sekolah ini juga telah memperoleh SK Izin Operasional Nomor 28/NOTA/A3.1/F/95 yang dikeluarkan pada 30 Januari 1995, sebagai bukti legalitas operasionalnya dalam memberikan layanan pendidikan kepada masyarakat.
</p>

<p class="sub-title-full-width" style="text-align: justify;">
    Saat ini, SMPN 12 Pekalongan dipimpin oleh Kepala Sekolah Ikasari Dewi dan didukung oleh Operator Mochamad Zein. Dengan visi mencetak generasi yang unggul, berkarakter, dan berdaya saing tinggi, sekolah ini terus berkomitmen untuk memberikan pendidikan terbaik bagi para peserta didiknya.
</p>

            @else
                <img src="{{asset('Assets/Frontend/img/empty.svg')}}" class="img-responsive" style="object-fit:cover; margin-top:5% !important; display: block;
            margin: 0 auto;">
            @endif
        </div>
    @endsection

    {{-- Guru --}}
    @section('guru')
        @include('frontend.content.guru')
    @endsection
@endsection
