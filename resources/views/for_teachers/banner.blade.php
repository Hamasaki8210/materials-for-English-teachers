@extends('for_teachers.main')
@push('css')
    <link href="{{ asset('css/banner.css') }}" rel="stylesheet">
@endpush
@section('banner')
<div class="banner">
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
                <div class="col-2 text-picture">
                </div>
                <div class="col-10 msg">
                    <span class="first-line">Customizable English Teaching Materials</span><br>
                    <span class="second-line">You can select and download only necessary pages for PDF!</span>
                </div>
                <div class="col">
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
