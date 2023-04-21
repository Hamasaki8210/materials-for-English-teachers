@extends('for_teachers.download_pages.contents')
@push('css')
    <link href="{{ asset('css/download_pages/stories.css') }}" rel="stylesheet">
@endpush
@push('js')
    <script src="{{ asset('js/menu.js') }}" async></script>
@endpush
@section('stories')

<div class="stories-page">
    <div class="menu">test</div>
    <div class="article">test2</div>
</div>
@endsection