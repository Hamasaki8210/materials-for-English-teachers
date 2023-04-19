@extends('for_teachers.download_pages.contents')
@push('css')
    <link href="{{ asset('css/stories.css') }}" rel="stylesheet">
@endpush
@push('js')
    <script src="{{ asset('js/stories.js') }}" async></script>
@endpush
@section('stories')
<p>
    Grammar Story Challenge
</p>

@endsection