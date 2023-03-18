@extends('for_teachers.main')
@push('css')
    <link href="{{ asset('css/common/banner.css') }}" rel="stylesheet">
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
    </div>
</div>
@endsection