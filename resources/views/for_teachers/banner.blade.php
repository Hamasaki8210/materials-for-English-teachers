@extends('for_teachers.main')
@push('css')
    <link href="{{ asset('css/banner.css') }}" rel="stylesheet">
@endpush
@section('banner')
<div class="banner">
    <div class="first-stripe"></div>
    <div class="second-stripe"></div>
    <div class="third-stripe"></div>
    <div class="fourth-stripe"></div>
    <div class="fifth-stripe">
        <div class="fifth-stripe-top"></div>
        <div class="fifth-stripe-bottom"></div>
    </div>
    <div class="sixth-stripe"></div>
    <div class="no-stripe">
        <div class="header-area">
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <span><i class="fa-solid fa-house"></i></span>
                            <span>Home</span>
                        </div>
                        <div class="col">
                            <span><i class="fa-solid fa-user"></i></span>
                            <span>About</span>
                        </div>
                        <div class="col">
                            <span><i class="fa-solid fa-envelope"></i></span>
                            <span>Contact</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title">
                <div class="msg">
                </div>
                <div class="container">
                <div class="row">
                    <div class="col text-picture">
                    </div>
                    <div class="col-6 msg">
                        <span class="first-line">test materials</span><br>
                        <span class="second-line">test test</span>
                    </div>
                    <div class="col">
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
