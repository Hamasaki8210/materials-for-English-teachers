@extends('for_teachers.common.contents')
@push('css')
    <link href="{{ asset('css/grammar/simple_sentences.css') }}" rel="stylesheet">
@endpush
@section('simple_sentences')
    <div class="img-title">Simple Sentences</a></div>
    <div class="img-area"><img class="img" src="{{ asset('images/1-1.png') }}" alt=""></a></div>
    <div class="container timeline-area">
        <div class="row timeline-top">
            <div class="col timeline-details">
                <div class="balloon-top">Simple Past</div>
            </div>
            <div class="col timeline-details">
                <div></div>
            </div>
            <div class="col timeline-details">
                <div class="balloon-top">Simple Present</div>
            </div>
            <div class="col timeline-details">
                <div></div>
            </div>
            <div class="col timeline-details">
                <div class="balloon-top">Simple Future</div>
            </div>
            <div class="col timeline-details">
                <div></div>
            </div>
            <div class="col timeline-details">
                <div class="balloon-top">Future Continuous</div>
            </div>
            <div class="col timeline-details">
                <div></div>
            </div>
            <div class="col timeline-details">
                <div class="balloon-top">Future Continuous</div>
            </div>
        </div>
        <div class="container timeline-container">
            <div class="row" id="timeline">
                <div class="col timeline-past">Past</div>
                <div class="col timeline-present">Present</div>
                <div class="col timeline-future">Future</div>
            </div>
        </div>
        <div class="row timeline-bottom">
            <div class="col timeline-details">
                    <div></div>
                </div>
                <div class="col timeline-details">
                    <div class="balloon-bottom">Past Perfect</div>
                </div>
                <div class="col timeline-details">
                    <div></div>
                </div>
                <div class="col timeline-details">
                    <div class="balloon-bottom">Present Perfect</div>
                </div>
                <div class="col timeline-details">
                    <div></div>
                </div>
                <div class="col timeline-details">
                    <div class="balloon-bottom">Future Perfect</div>
                </div>
                <div class="col timeline-details">
                    <div></div>
                </div>
                <div class="col timeline-details">
                    <div class="balloon-bottom">Future Perfect Continuous</div>
                </div>
                <div class="col timeline-details">
                <div></div>
            </div>
            </div>
        </div>
    </div>
@endsection