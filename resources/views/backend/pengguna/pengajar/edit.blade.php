@extends('layouts.backend.app')

@section('title')
   Edit Pengajar
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
                        <h4>Edit Pengajar</h4>
                    </div>
                    <div class="card-body">
                        <form action=" {{route('backend-pengguna-pengajar.update', $pengajar->id)}} " method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="basicInput">Nama</label> <span class="text-danger">*</span>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value=" {{$pengajar->name}} " placeholder="Nama" />
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
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value=" {{$pengajar->email}} " placeholder="Email" />
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
                                            <option value="Informatika" {{$pengajar->userDetail->mengajar == 'Informatika' ? 'selected' : ''}} >Informatika</option>
                                             <option value="Pendidikan Pancasila" {{$pengajar->userDetail->mengajar == 'Pendidikan Pancasila' ? 'selected' : ''}} >Pendidikan Pancasila</option>
                                            <option value="Matematika" {{$pengajar->userDetail->mengajar == 'Matematika' ? 'selected' : ''}} >Matematika</option>
                                            <option value="Bimbingan Konseling" {{$pengajar->userDetail->mengajar == 'Bimbingan Konseling' ? 'selected' : ''}} >Bimbingan Konseling</option>
                                            <option value="Kepala Sekolah" {{$pengajar->userDetail->mengajar == 'Kepala Sekolah' ? 'selected' : ''}} >Kepala Sekolah</option>
                                            <option value="Bahasa Inggris" {{$pengajar->userDetail->mengajar == 'Bahasa Inggris' ? 'selected' : ''}} >Bahasa Inggris</option>
                                            <option value="Bahasa Indonesia" {{$pengajar->userDetail->mengajar == 'Bahasa Indonesia' ? 'selected' : ''}} >Bahasa Indonesia</option>
                                            <option value="IPS" {{$pengajar->userDetail->mengajar == 'IPS' ? 'selected' : ''}} >IPS</option>
                                            <option value="Seni Budaya" {{$pengajar->userDetail->mengajar == 'Seni Budaya' ? 'selected' : ''}} >Seni Budaya</option>
                                            <option value="Bahasa Jawa" {{$pengajar->userDetail->mengajar == 'Bahasa Jawa' ? 'selected' : ''}} >Bahasa Jawa</option>
                                            <option value="PJOK" {{$pengajar->userDetail->mengajar == 'PJOK' ? 'selected' : ''}} >PJOK</option>
                                            <option value="Prakarya" {{$pengajar->userDetail->mengajar == 'Prakarya' ? 'selected' : ''}} >Prakarya</option>
                                            <option value="PAIBP" {{$pengajar->userDetail->mengajar == 'PAIBP' ? 'selected' : ''}} >PAIBP</option>
                                            <option value="IPA" {{$pengajar->userDetail->mengajar == 'IPA' ? 'selected' : ''}} >IPA</option>
                                            <option value="Penjaga Sekolah" {{$pengajar->userDetail->mengajar == 'Penjaga Sekolah' ? 'selected' : ''}} >Tenaga Kependidikan (Penjaga Sekolah)</option>
                                            <option value="Tukang Kebun" {{$pengajar->userDetail->mengajar == 'Tukang Kebun' ? 'selected' : ''}} >Tenaga Kependidikan (Tukang Kebun)</option>
                                            <option value="Keamanan Sekolah" {{$pengajar->userDetail->mengajar == 'Kemananan Sekolah' ? 'selected' : ''}} >Tenaga Kependidikan (Keamanan Sekolah)</option>
                                            <option value="Administrasi Dapodik dan ASIK PTK" {{$pengajar->userDetail->mengajar == 'Administrasi Dapodik dan ASIK  PTK' ? 'selected' : ''}} >Tenaga Kependidikan (Administrasi Dapodik dan ASIK PTK)</option>
                                            <option value="Administrasi Keuangan" {{$pengajar->userDetail->mengajar == 'Administrasi Keuangan' ? 'selected' : ''}} >Tenaga Kependidikan (Administrasi Keuangan)</option>
                                            <option value="Administrasi Kesiswaan" {{$pengajar->userDetail->mengajar == 'Administrasi Kesiswaan' ? 'selected' : ''}} >Tenaga Kependidikan (Administrasi Kesiswaan)</option>
                                            <option value="Pengelola Perpustakaan" {{$pengajar->userDetail->mengajar == 'Pengelola Perpustakaan' ? 'selected' : ''}} >Tenaga Kependidikan (Pengelola Perpustakaan)</option>
                                            <option value="Office Boy" {{$pengajar->userDetail->mengajar == 'Office Boy' ? 'selected' : ''}} >Tenaga Kependidikan (Office Boy)</option>

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
                                        <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip" value=" {{$pengajar->userDetail->nip}} " placeholder="NIP" />
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
                                        <small class="text-danger">Kosongkan jika tidak ingin mengubah.</small>
                                        @error('foto_profile')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="basicInput">Status</label> <span class="text-danger">*</span>
                                        <select name="status" class="form-control @error('status') is-invalid @enderror">
                                            <option value="Aktif" {{$pengajar->status == 'Aktif' ? 'selected' : ''}} >Aktif</option>
                                            <option value="Tidak Aktif" {{$pengajar->status == 'Tidak Aktif' ? 'selected' : ''}} >Tidak Aktif</option>
                                        </select>
                                        @error('status')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="basicInput">Website</label>
                                        <input type="text" class="form-control @error('website') is-invalid @enderror" name="website" value=" {{$pengajar->userDetail->website}} " placeholder="Website" />
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
                                        <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" value=" {{$pengajar->userDetail->instagram}} " placeholder="Instagram" />
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
                                        <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value=" {{$pengajar->userDetail->facebook}} " placeholder="Facebook" />
                                        @error('facebook')
                                            <div class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                

                               
                              
                            </div>
                            <button class="btn btn-primary" type="submit">Update</button>
                            <a href="{{route('backend-pengguna-pengajar.index')}}" class="btn btn-warning">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection