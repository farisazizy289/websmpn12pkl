@extends('layouts.backend.app')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="content-wrapper container-xxl p-0">
    <div class="content-body">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="card card-congratulations">
                    <div class="card-body text-center">
                        <img src="{{asset('Assets/Backend/images/pages/decore-left.png')}}" class="congratulations-img-left" alt="card-img-left" />
                        <img src="{{asset('Assets/Backend/images/pages/decore-right.png')}}" class="congratulations-img-right" alt="card-img-right" />
                        <div class="avatar avatar-xl bg-primary shadow">
                            <div class="avatar-content">
                                <i data-feather="award" class="font-large-1"></i>
                            </div>
                        </div>
                        <div class="text-center">
                            <h1 class="mb-1 text-white">Welcome {{Auth::user()->name}},</h1>
                            <p class="card-text m-auto w-75">
                                Have fun your day :)
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            @if (Auth::user()->role == 'Admin')
                <div class="col-lg-3 col-sm-6 col-12">
                <div class="row">
                    <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div>
                                <h2 class="font-weight-bolder mb-0">24</h2>
                                <p class="card-text">Guru</p>
                            </div>
                            <div class="avatar bg-light-primary p-50 m-0">
                                <div class="avatar-content">
                                    <i data-feather="users" class="font-medium-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h2 class="font-weight-bolder mb-0">{{$acara}}</h2>
                                    <p class="card-text">Acara</p>
                                </div>
                                <div class="avatar bg-light-danger p-50 m-0">
                                    <div class="avatar-content">
                                        <i data-feather="calendar" class="font-medium-5"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                <div class="row">
                    <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div>
                                <h2 class="font-weight-bolder mb-0">340</h2>
                                <p class="card-text">Murid</p>
                            </div>
                            <div class="avatar bg-light-warning p-50 m-0">
                                <div class="avatar-content">
                                    <i data-feather="user-check" class="font-medium-5"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <h2 class="font-weight-bolder mb-0">9</h2>
                                    <p class="card-text">Tenaga Kependidikan</p>
                                </div>
                                <div class="avatar bg-light-success p-50 m-0">
                                    <div class="avatar-content">
                                        <i data-feather="user" class="font-medium-5"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            @endif

            <div class="col-lg-4 col-md-6 col-12">
                <div class="card card-developer-meetup">
                    <div class="meetup-img-wrapper rounded-top text-center">
                        <img src="{{asset('Assets/Backend/images/illustration/email.svg')}}" alt="Meeting Pic" height="170" />
                    </div>
                    <div class="card-body">
                        <div class="meetup-header d-flex align-items-center">
                            <div class="meetup-day">
                                <h6 class="mb-0">{{Carbon\Carbon::parse($event->acara ?? 0)->format('l')}}</h6>
                                <h3 class="mb-0">{{Carbon\Carbon::parse($event->acara ?? 0)->format('d')}}</h3>
                            </div>
                            <div class="my-auto">
                                <h4 class="card-title mb-25">{{$event->title ?? 'Belum Ada Event'}}</h4>
                                <p class="card-text mb-0">{{$event->desc ?? 'Belum Ada Event'}}</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="avatar bg-light-primary rounded mr-1">
                                <div class="avatar-content">
                                    <i data-feather="calendar" class="avatar-icon font-medium-3"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h6 class="mb-0">{{Carbon\Carbon::parse($event->acara ?? 0)->format('d F, Y')}}</h6>
                                <small>{{Carbon\Carbon::parse($event->acara ?? 0)->format('H:i:s')}}</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="avatar bg-light-primary rounded mr-1">
                                <div class="avatar-content">
                                    <i data-feather="map-pin" class="avatar-icon font-medium-3"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h6 class="mb-0">{{$event->lokasi ?? 'Belum Ada Event'}}</h6>
                                <small>Pekalongan, Jawa Tengah, Indonesia.</small>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        
        </div>
    </div>
</div>
@endsection
