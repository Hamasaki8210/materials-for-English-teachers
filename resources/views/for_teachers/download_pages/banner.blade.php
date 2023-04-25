@extends('for_teachers.main')
@push('css')
    <link href="{{ asset('css/download_pages/banner.css') }}" rel="stylesheet">
@endpush
@section('banner')
<div class="banner">
    <div class="icon-area">
        <div class="header-icons-circle"><i class="fa-solid fa-house icon-home"></i></div>
        <div class="header-icons-circle"><i class="fa-solid fa-user icon-about"></i></div>
        <div class="header-icons-circle"><i class="fa-solid fa-envelope icon-email"></i></div>
    </div>
</div>
@endsection