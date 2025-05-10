@extends('layouts.Frontend.app')
@section('title')
    Visi dan Misi
@endsection

@section('content')
    @section('about')
        <div class="container">
            @if ($visimisi)
                <div class="row about-page1-inner" style="margin-top: 5%">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="about-page-content-holder">
        <div class="content-box">
            <h2>VISI</h2>
            <p style="text-align: justify;">
                Mewujudkan Peserta Didik yang Beriman dan Bertakwa Kepada Tuhan Yang
                Maha Esa, Berakhlak Mulia, Berprestasi, dan Terampil.
            </p>
        </div>
        <div class="content-box">
            <h2>MISI</h2>
            <p style="text-align: justify;">
                <b>A. Beriman dan Bertaqwa kepada Tuhan Yang Maha Esa</b><br>
                1. Mengembangkan kegiatan pembinaan untuk membentuk karakter siswa yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa.<br>
                2. Meningkatkan kompetensi tenaga pendidik dan kependidikan.<br>
            </p>

            <p style="text-align: justify;">
                <b>B. Berakhlak Mulia</b> <br>
                1. Menumbuhkan sikap menghormati orang tua, guru, tenaga kependidikan, sesama siswa, dan lingkungan sekitarnya melalui kegiatan pembiasaan.<br>
                2. Membudayakan senyum, salam, sapa, sopan, dan santun.<br>
                3. Membentuk jiwa disiplin, percaya diri, dan berani bertanggung jawab.<br>
                4. Menumbuhkan sikap kepedulian sosial dan lingkungan yang tinggi.<br>
                5. Membudayakan sikap anti perundungan.<br>
                6. Membudayakan etika bersosial media.<br>
            </p>
           
                 <p style="text-align: justify;">
               <b> C. Berprestasi</b><br>
                1. Melaksanakan proses pembelajaran yang berorientasi pada pembelajaran siswa
                   aktif, kreatif, inovatif, menyenangkan, dan ramah terhadap anak.<br>
                2. Menumbuhkan semangat berprestasi secara intensif kepada seluruh warga sekolah.<br>
                3. Meningkatkan prestasi di bidang akademik dan non akademik melalui kegiatan
                   ekstrakurikuler.<br>

            <p style="text-align: justify;">
                <b>D. Terampil</b><br>
                1. Menumbuhkan kreativitas terhadap budaya bangsa melalui kegiatan intrakurikuler
                   kokurikuler, dan ekstrakurikuler.<br>
                2. Terampil dalam menjalankan kecakapan hidup (life skill).<br>
                3. Terampil menerapkan literasi dan numerasi.<br>       
            </p>

        </div>
    </div>
</div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="about-page-img-holder">
                            <img src="{{asset('storage/images/visimisi/' .$visimisi->image)}}" class="img-responsive" alt="visimisi">
                        </div>
                    </div>
                </div>
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
