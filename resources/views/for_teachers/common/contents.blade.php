@extends('for_teachers.common.banner')
@push('css')
    <link href="{{ asset('css/common/contents.css') }}" rel="stylesheet">
@endpush
@section('contents')
<div class="tab-area">
    <div class="tab highlighted">
        <span><i class="fa-solid fa-spell-check"></i></span>
        <span>&nbsp;Grammar</span>
    </div>
    <div class="tab unhighlighted discussions">
        <span><i class="fa-sharp fa-solid fa-comments"></i></span>
        <span>&nbsp;Discussions</span>
    </div>
    <div class="tab unhighlighted business">
        <span><i class="fa-solid fa-business-time"></i></span>
        <span>&nbsp;Business</span>
    </div>
</div>
<div>@yield('simple_sentences')</div>
@endsection