@extends('for_teachers.contents')
@push('css')
    <link href="{{ asset('css/grammar.css') }}" rel="stylesheet">
@endpush
@section('grammar')
<div class="grammar-area-outer">
    <div class="grammar-area-inner">
        <div class="title">Tenses</div>
        <div class="container">
            <div class="row timeline-area">
                <div class="col past-area">
                    <div class="tense-area-inner">
                        <div class="past-area-top area-top">
                            <div class="balloon-top">Simple Past</div>
                            <div class="no-balloon"></div>
                            <div class="balloon-top">Simple Present</div>
                            <div class="no-balloon"></div>
                        </div>
                        <div class="timeline-past-outer">
                            <div class="timeline-past timeline"></div>
                        </div>
                        <div class="past-area-bottom area-bottom">
                            <div class="no-balloon"></div>
                            <div class="balloon-bottom">Past Perfect</div>
                            <div class="no-balloon"></div>
                            <div class="balloon-bottom balloon-present-perfect">Present Perfect</div>
                        </div>
                    </div>
                </div>
                <div class="col present-area">
                    <div class="tense-area-inner">
                        <div class="present-area-top area-top">
                            <div class="balloon-top">Simple Past</div>
                            <div class="no-balloon"></div>
                            <div class="balloon-top">Simple Present</div>
                            <div class="no-balloon"></div>
                        </div>
                        <div class="timeline-present timeline"></div>
                        <div class="present-area-bottom area-bottom">
                            <div class="no-balloon"></div>
                            <div class="balloon-bottom">Past Perfect</div>
                            <div class="no-balloon"></div>
                            <div class="balloon-bottom balloon-present-perfect">Present Perfect</div>
                        </div>
                    </div>
                </div>
                <div class="col future-area">
                    <div class="tense-area-inner">
                        <div class="future-area-top area-top">
                            <div class="balloon-top">Simple Past</div>
                            <div class="no-balloon"></div>
                            <div class="balloon-top">Simple Present</div>
                            <div class="no-balloon"></div>
                        </div>
                        <div class="timeline-future-outer">
                            <div class="timeline-future timeline"></div>
                        </div>
                        <div class="future-area-bottom area-bottom">
                            <div class="no-balloon"></div>
                            <div class="balloon-bottom">Past Perfect</div>
                            <div class="no-balloon"></div>
                            <div class="balloon-bottom balloon-present-perfect">Present Perfect</div>
                            <div class="no-balloon"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection