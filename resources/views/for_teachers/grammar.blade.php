@extends('for_teachers.contents')
@push('css')
    <link href="{{ asset('css/grammar.css') }}" rel="stylesheet">
    <link type="text/css" rel="stylesheet"
  href="http://code.jquery.com/ui/1.13.2/themes/cupertino/jquery-ui.min.css" />

@endpush
@push('js')
    <script
        src="https://code.jquery.com/jquery-3.6.4.js"
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>
        <!-- <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js" integrity="sha256-xLD7nhI62fcsEZK2/v8LsBcb4lG7dgULkuXoXB/j91c=" crossorigin="anonymous"></script> -->
    <script src="{{ asset('js/grammar.js') }}" async></script>
@endpush
@section('grammar')

<div class="grammar-area-outer">
    <div class="grammar-area-inner">
        <div class="tense-title">Tenses</div>
        <div class="container timeline-area">
            <div class="row timeline-top">
                <div class="col balloon-area-top past-area-top">
                    <div class="balloon balloon-past-top three-lines">
                        Past<br>Perfect<br>Progressive
                    </div>
                </div>
                <div class="col"></div>
                <div class="col balloon-area-top  past-area-top">
                    <div class="balloon balloon-past-top two-lines">
                        Past<br>Progressive
                    </div>
                </div>
                <div class="col"></div>
                <div class="col balloon-area-top present-area-top">
                    <div class="balloon balloon-present-top three-lines">
                        Present<br>Perfect<br>Progressive
                    </div>
                </div>
                <div class="col"></div>
                <div class="col balloon-area-top present-area-top">
                    <div class="balloon balloon-present-top two-lines">
                        Present<br>Progressive
                    </div>
                </div>
                <div class="col"></div>
                <div class="col balloon-area-top future-perfect-progressive-area future-area-top">
                    <div class="balloon balloon-future-top three-lines">
                        Future<br>Perfect<br>Progressive
                    </div>
                </div>
                <div class="col"></div>
                <div class="col balloon-area-top future-area-top">
                    <div class="balloon balloon-future-top two-lines">
                        Future<br>Progressive
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
                    <div class="col balloon-area-bottom past-perfect-area past-area-bottom">
                        <div class="balloon-bottom balloon-past-bottom two-lines">
                            Past<br>Perfect
                        </div>
                    </div>
                    <div class="col"></div>
                    <div class="col balloon-area-bottom simple-past-area  past-area-bottom">
                        <div class="balloon-bottom balloon-past-bottom two-lines">
                            Simple<br>Past
                        </div>
                    </div>
                    <div class="col"></div>
                    <div class="col balloon-area-bottom present-area-bottom">
                        <div class="balloon-bottom balloon-present-bottom two-lines">
                            Present<br>Perfect
                        </div>
                    </div>
                    <div class="col"></div>
                    <div class="col balloon-area-bottom present-area-bottom">
                        <div class="balloon-bottom balloon-present-bottom two-lines js-modal-open">
                            Simple<br>Present
                        </div>
                    </div>
                    <div class="col"></div>
                    <div class="col balloon-area-bottom future-perfect-area future-area-bottom">
                        <div class="balloon-bottom balloon-future-bottom two-lines">
                            Future<br>Perfect
                        </div>
                    </div>
                    <div class="col"></div>
                    <div class="col balloon-area-bottom future-area-bottom">
                        <div class="balloon-bottom balloon-future-bottom two-lines">
                            Simple<br>Future
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal js-modal">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
        <p>ここにモーダルウィンドウで表示したいコンテンツを入れます。モーダルウィンドウを閉じる場合は下の「閉じる」をクリックするか、背景の黒い部分をクリックしても閉じることができます。</p>
        <a class="js-modal-close" href="">閉じる</a>
    </div><!--modal__inner-->
</div>
<script type="text/javascript">
$(function() {
    $(document).ready(function() {
  $('[data-toggle="tooltip"]').tooltip();
});
});
</script>
<div class="container">
  <a href="#" data-toggle="tooltip" data-placement="top" title="Hooray!">Top</a>
  <a href="#" data-toggle="tooltip" data-placement="right" title="Hooray!">Right</a>
</div>
@endsection