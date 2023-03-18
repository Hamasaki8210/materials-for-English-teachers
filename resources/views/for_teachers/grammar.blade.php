@extends('for_teachers.contents')
@push('css')
    <link href="{{ asset('css/grammar.css') }}" rel="stylesheet">
@endpush
@section('grammar')
<div class="grammar-area-outer">
    <div class="grammar-area-inner">
        <div class="title">Grammar</div>
        <div class="categories">
            <div class="category-line">
                <span class="session">
                    <div class="img-title img-left"><a href="{{URL::to('/for_teachers/simple_sentences')}}">Simple Sentences</a></div>
                    <div><a href="{{URL::to('/for_teachers/simple_sentences')}}"><img class="img img-left" src="{{ asset('images/1.jpg') }}" alt=""></a></div>
                </span>
                <span class="session">
                    <div class="img-title img-right">grammar practice worksheets</div>
                    <div><img class="img img-right" src="{{ asset('images/2.jpg') }}" alt=""></div>
                </span>
            </div>
            <div class="category-line">
                <span class="session">
                    <div class="img-title img-left">Simple Sentences</div>
                    <div><img class="img img-left" src="{{ asset('images/3.jpg') }}" alt=""></div>
                </span>
                <span class="session">
                    <div class="img-title img-right">grammar practice worksheets</div>
                    <div><img class="img img-right" src="{{ asset('images/4.jpg') }}" alt=""></div>
                </span>
            </div>
        </div>
    </div>
</div>
@endsection