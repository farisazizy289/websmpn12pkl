@extends('layouts.backend.app')

@section('title')
   Tambah Pengajar
@endsection

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            <div class="alert-body">
                <strong>{{ $message }}</strong>
                <button type="button" class="close" data-dismiss="alert">×</button>
            </div>
        </div>
    @elseif($message = Session::get('error'))
        <div class="alert alert-danger" role="alert">
            <div class="alert-body">
                <strong>{{ $message }}</strong>
                <button type="button" class="close" data-dismiss="alert">×</button>
            </div>
        </div>
    @endif
<div class="content-wrapper container-xxl p-0">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2> Pengajar</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header header-bottom">
                        <h4>Tambah Pengajar</h4>
                    </div>
                    <div class="card-body">
                        <form action=" {{route('backend-pengguna-pengajar.store')}} " method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="basicInput">Nama</label> <span class="text-danger">*</span>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value=" {{old('name')}} " placeholder="Nama" />
                                        @error('name')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="basicInput">Email</label> <span class="text-danger">*</span>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value=" {{old('email')}} " placeholder="Email" />
                                        @error('email')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="basicInput">Mengajar</label> <span class="text-danger">*</span>
                                        <select name="mengajar" class="form-control @error('mengajar') is-invalid @enderror">
                                            <option value="">-- Pilih --</option>
                                            <option value="Mata Pelajaran">Mata Pelajaran</option>
                                            <option value="Bimbingan Konseling">Bimbingan Konseling</option>
                                            <option value="Matematika">Matematika</option>
                                            <option value="Pendidikan Pancasila">Pendidikan Pancasila</option>
                                            <option value="Informatika">Informatika</option>
                                            <option value="Kepala Sekolah">Kepala Sekolah</option>
                                            <option value="Bahasa Inggris">Bahasa Inggris</option>
                                            <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                            <option value="IPS">IPS</option>
                                            <option value="Seni Budaya">Seni Budaya</option>
                                            <option value="Bahasa Jawa">Bahasa Jawa</option>
                                            <option value="PJOK">PJOK</option>
                                            <option value="Prakarya">Prakarya</option>
                                            <option value="PAIBP">PAIBP</option>
                                            <option value="IPA">IPA</option>
                                            <option value="Penjaga Sekolah">Tenaga Kependidikan (Penjaga Sekolah)</option>
                                            <option value="Tukang Kebun">Tenaga Kependidikan (Tukang Kebun)</option>
                                            <option value="Keamanan Sekolah">Tenaga Kependidikan (Keamanan Sekolah)</option>
                                            <option value="Administrasi Dapodik dam ASIK PTK">Tenaga Kependidikan (Administrasi Dapodik dan ASIK PTK)</option>
                                            <option value="Administrasi Keuangan">Tenaga Kependidikan (Administrasi Keuangan)</option>
                                            <option value="Administrasi Kesiswaan">Tenaga Kependidikan (Administrasi Kesiswaan)</option>
                                            <option value="Pengelola Perpustakaan">Tenaga Kependidikan (Pengelola Perpustakaan)</option>
                                            <option value="Office Boy">Tenaga Kependidikan (Office Boy)</option>







                                        </select>
                                        @error('mengajar')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="basicInput">NIP</label> <span class="text-danger">*</span>
                                        <input type="number" class="form-control @error('nip') is-invalid @enderror" name="nip" value=" {{old('nip')}} " placeholder="NIP" />
                                        @error('nip')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="basicInput">Foto Profile</label>  <span class="text-danger">*</span>
                                        <input type="file" class="form-control @error('foto_profile') is-invalid @enderror" name="foto_profile"/>
                                        @error('foto_profile')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="basicInput">Website</label>
                                        <input type="text" class="form-control @error('website') is-invalid @enderror" name="website" value=" {{old('website')}} " placeholder="Website" />
                                        @error('website')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                               

                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="basicInput">Instagram</label>
                                        <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" value=" {{old('instagram')}} " placeholder="Instagram" />
                                        @error('instagram')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="basicInput">Facebook</label>
                                        <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value=" {{old('facebook')}} " placeholder="Facebook" />
                                        @error('facebook')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                               
                                
                              
                            </div>
                            <button class="btn btn-primary" type="submit">Tambah</button>
                            <a href="{{route('backend-pengguna-pengajar.index')}}" class="btn btn-warning">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection