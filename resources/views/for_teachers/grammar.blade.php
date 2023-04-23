@extends('for_teachers.contents')
@push('css')
    <link href="{{ asset('css/grammar.css') }}" rel="stylesheet">
@endpush
@push('js')
    <script src="{{ asset('js/grammar.js') }}" async></script>
@endpush
@section('grammar')

<div class="grammar-area-outer">
    <div class="grammar-area-inner">
        <div class="tense-title">Tenses</div>
        <div class="container timeline-area">
            <div class="row timeline-top">
                <div class="col balloon-area-top past-area-top overlap-1st">
                    <div class="balloon balloon-past-top three-lines">Past<br>Perfect<br>Progressive
                        <div class="pulldown-past pulldown-to-right-threelines">
                            <div class="pulldown-child"><a href="{{ route('stories',['category'=>'Past Perfect Progressive']) }}">Stories</a></div>
                            <div class="pulldown-child"><a href="">Grammar Points</a></div>
                            <div class="pulldown-child"><a href="">Activities</a></div>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
                <div class="col balloon-area-top  past-area-top overlap-2nd">
                    <div class="balloon balloon-past-top two-lines pulldown-title">Past<br>Progressive
                        <div class="pulldown-past pulldown-to-right">
                            <div class="pulldown-child"><a href="">Stories</a></div>
                            <div class="pulldown-child"><a href="">Grammar Points</a></div>
                            <div class="pulldown-child"><a href="">Activities</a></div>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
                <div class="col balloon-area-top present-area-top overlap-3rd">
                    <div class="balloon balloon-present-top three-lines">Present<br>Perfect<br>Progressive
                        <div class="pulldown-present pulldown-to-right-threelines">
                            <div class="pulldown-child"><a href="">Stories</a></div>
                            <div class="pulldown-child"><a href="">Grammar Points</a></div>
                            <div class="pulldown-child"><a href="">Activities</a></div>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
                <div class="col balloon-area-top present-area-top overlap-4th">
                    <div class="balloon balloon-present-top two-lines pulldown-title">Present<br>Progressive
                        <div class="pulldown-present pulldown-to-left">
                            <div class="pulldown-child"><a href="">Stories</a></div>
                            <div class="pulldown-child"><a href="">Grammar Points</a></div>
                            <div class="pulldown-child"><a href="">Activities</a></div>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
                <div class="col balloon-area-top future-perfect-progressive-area future-area-top">
                    <div class="balloon balloon-future-top three-lines">Future<br>Perfect<br>Progressive
                        <div class="pulldown-future pulldown-to-left-threelines">
                            <div class="pulldown-child"><a href="">Stories</a></div>
                            <div class="pulldown-child"><a href="">Grammar Points</a></div>
                            <div class="pulldown-child"><a href="">Activities</a></div>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
                <div class="col balloon-area-top future-area-top">
                    <div class="balloon balloon-future-top two-lines pulldown-title">Future<br>Progressive
                        <div class="pulldown-future pulldown-to-left">
                            <div class="pulldown-child"><a href="">Stories</a></div>
                            <div class="pulldown-child"><a href="">Grammar Points</a></div>
                            <div class="pulldown-child"><a href="">Activities</a></div>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
            </div>
            <div class="container timeline-container">
                <div class="row" id="timeline">
                    <div class="col timeline-past">Past</div>
                    <div class="col timeline-present">Present</div>
                    <div class="col timeline-future">Future</div>
                </div>
            </div>
            <div class="row timeline-bottom">
                <div class="col"></div>
                <div class="col balloon-area-bottom past-perfect-area past-area-bottom overlap-1st">
                    <div class="balloon-bottom balloon-past-bottom two-lines pulldown-title">Past<br>Perfect
                        <div class="pulldown-past pulldown-to-right">
                            <div class="pulldown-child"><a href="">Stories</a></div>
                            <div class="pulldown-child"><a href="">Grammar Points</a></div>
                            <div class="pulldown-child"><a href="">Activities</a></div>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
                <div class="col balloon-area-bottom simple-past-area  past-area-bottom overlap-2nd">
                    <div class="balloon-bottom balloon-past-bottom two-lines pulldown-title">Simple<br>Past
                        <div class="pulldown-past pulldown-to-right">
                            <div class="pulldown-child"><a href="">Stories</a></div>
                            <div class="pulldown-child"><a href="">Grammar Points</a></div>
                            <div class="pulldown-child"><a href="">Activities</a></div>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
                <div class="col balloon-area-bottom present-area-bottom overlap-3rd">
                    <div class="balloon-bottom balloon-present-bottom two-lines pulldown-title">Present<br>Perfect
                        <div class="pulldown-present pulldown-to-right">
                            <div class="pulldown-child"><a href="">Stories</a></div>
                            <div class="pulldown-child"><a href="">Grammar Points</a></div>
                            <div class="pulldown-child"><a href="">Activities</a></div>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
                <div class="col balloon-area-bottom present-area-bottom">
                    <div class="balloon-bottom balloon-present-bottom two-lines overlap-4th pulldown-title">Simple<br>Present
                        <div class="pulldown-present pulldown-to-left">
                            <div class="pulldown-child"><a href="">Stories</a></div>
                            <div class="pulldown-child"><a href="">Grammar Points</a></div>
                            <div class="pulldown-child"><a href="">Activities</a></div>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
                <div class="col balloon-area-bottom future-perfect-area future-area-bottom">
                    <div class="balloon-bottom balloon-future-bottom two-lines pulldown-title">Future<br>Perfect
                        <div class="pulldown-future pulldown-to-left">
                            <div class="pulldown-child"><a href="">Stories</a></div>
                            <div class="pulldown-child"><a href="">Grammar Points</a></div>
                            <div class="pulldown-child"><a href="">Activities</a></div>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
                <div class="col balloon-area-bottom future-area-bottom">
                    <div class="balloon-bottom balloon-future-bottom two-lines pulldown-title">Simple<br>Future
                        <div class="pulldown-future pulldown-to-left">
                            <div class="pulldown-child"><a href="">Stories</a></div>
                            <div class="pulldown-child"><a href="">Grammar Points</a></div>
                            <div class="pulldown-child"><a href="">Activities</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection