@extends('for_teachers.banner')
@push('css')
    <link href="{{ asset('css/contents.css') }}" rel="stylesheet">
@endpush
@section('contents')
<div class="tab-area">
    <div class="tab highlighted">
        <span><i class="fa-solid fa-spell-check fa-lg"></i></span>
        <span>&nbsp;Grammar</span>
    </div>
    <div class="tab unhighlighted discussions">
        <span><i class="fa-sharp fa-solid fa-comments fa-lg"></i></span>
        <span>&nbsp;Discussions</span>
    </div>
    <div class="tab unhighlighted business">
        <span><i class="fa-solid fa-business-time fa-lg"></i></span>
        <span>&nbsp;Test</span>
</div>
</div>
<div>@yield('lessons')</div>
@endsection