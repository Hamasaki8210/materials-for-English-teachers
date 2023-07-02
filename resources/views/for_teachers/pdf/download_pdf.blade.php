<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{ public_path('/css/pdf/download_pdf.css')  }}">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="{{ public_path('/js/pdf/download_pdf.js') }}" async></script>
    </head>
    <body>
        <div class="content-area">
            @foreach ($titles as $article_index => $title)
            <div class="lesson-separator"></div>
            <div class="indivisual-content-area">
                {{-- if reading session and vocab session are both invisible, whole page will be invisiable --}}
                <div class="page {{($visible_articles[$article_index]->reading_session==='1' || $visible_articles[$article_index]->vocab_session==='1') ? 'show' : 'hide'}}">
                    <div class="reading {{($visible_articles[$article_index]->reading_session==='1') ? 'show' : 'hide'}}">
                        <div class="reading-title">
                            {{$title->title}}
                        </div>
                        <div class="reading-content">
                            <div class="reading-story">
                                <img class="reading-pic" src="{{public_path('images/soccer-sample.jpg')}}">
                                @foreach ($readings[$article_index] as $reading_index => $reading)
                                    {{$reading}}
                                    @if(isset($bolds[$article_index][$reading_index]))
                                        @if(false !== strpos($bolds[$article_index][$reading_index], '*'))
                                            <span class="reading_bold_underline">
                                                <b class="{{($visible_articles[$article_index]->reading_bold==='0') ? 'hide' : ''}}">
                                                    {{str_replace('*','',$bolds[$article_index][$reading_index])}}
                                                </b>
                                            </span>.
                                        @else
                                            <span class="reading_bold_underline">
                                                <b class="{{($visible_articles[$article_index]->reading_bold==='0') ? 'hide' : ''}}">
                                                    {{$bolds[$article_index][$reading_index]}}
                                                </b>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="vocabulary-area {{($visible_articles[$article_index]->vocab_session==='1') ? 'show' : 'hide'}}">
                        <div class="title-area">
                            <span class="vocabulary-title">{{ucfirst($menus[1]->menu)}}</span>
                            <span class="vocabulary-article-title">{{$titles[$article_index]->title}}</span>
                        </div>
                        @foreach($vocabularies as $vocabulary)
                            @if($vocabulary->article_id == intval($article_index)+1)
                            <div class="vocab-lists"><span>{{$vocabulary->vocabulary_id}}.&nbsp;&nbsp;</span><b>{{$vocabulary->vocabulary}}</b>&nbsp;:&nbsp;{{$vocabulary->meaning}}</div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="page-num {{($visible_articles[$article_index]->reading_session==='1' || $visible_articles[$article_index]->vocab_session==='1') ? 'show' : 'hide'}}">
                    {{$visible_articles[$article_index]->reading_page_number}}
                </div>
                <div class="page-separator {{($page_separators[$article_index]["question_separator"] === "1") ?  'show' : 'hide'}}"></div>
                <div class="page {{($visible_articles[$article_index]->question_session==='1') ? 'show' : 'hide'}}">
                    <div class="title-area">
                        <span class="questions-title">{{ucfirst($menus[2]->menu)}}</span>
                        <span class="article-title">{{$titles[$article_index]->title}}</span>
                    </div>
                    <table>
                        @foreach($qas as $qa)
                            @if($qa->article_id == intval($article_index)+1)
                            <tr class="question">
                                <td rowspan="3" class="question-num">
                                {{$qa->question_id}}.&nbsp;
                                </td>
                                <td>
                                {{$qa->question}}
                                </td>
                            <tr>
                            <tr><td class="question-answer"></td></tr>
                            <tr><td class="question-margin"></td></tr>
                            @endif
                        @endforeach
                    </table>
                </div>
                <div class="page-num {{($visible_articles[$article_index]->question_session==='1') ? 'show' : 'hide'}}">
                    {{$visible_articles[$article_index]->question_page_number}}
                </div>
                <div class="page-separator {{($page_separators[$article_index]["practice_separator"] === "1") ?  'show' : 'hide'}}"></div>
                <div class="page {{($visible_articles[$article_index]->practice_session==='1') ? 'show' : 'hide'}}">
                    <div class="title-area">
                        <span class="practice-title">{{ucfirst($menus[3]->menu)}}</span>
                        <span class="article-title">{{$titles[$article_index]->title}}</span>
                    </div>
                    <table>
                        @foreach($practices as $practice)
                            @if($practice->article_id == intval($article_index)+1)
                            <tr class="practice">
                                <td rowspan="3" class="practice-num">
                                {{$practice->practice_id}}.&nbsp;
                                </td>
                                <td>
                                {{$practice->practice}}
                                </td>
                            <tr>
                            <tr><td class="practice-answer"></td></tr>
                            <tr><td class="practice-margin"></td></tr>
                            @endif
                        @endforeach
                    </table>
                </div>
                {{-- if status is visible then show --}}
                <div class="page-num {{($visible_articles[$article_index]->practice_session==='1') ? 'show' : 'hide'}}">
                    {{$visible_articles[$article_index]->practice_page_number}}
                </div>
                <div class="page-separator  {{($page_separators[$article_index]["answer_separator"] === "1") ?  'show' : 'hide'}}"></div>
                <div class="page {{($visible_articles[$article_index]->answer_session==='1') ? 'show' : 'hide'}}">
                    <div class="title-area">
                        <span class="answers-title">{{ucfirst($menus[4]->menu)}}</span>
                        <span class="article-title">{{$titles[$article_index]->title}}</span>
                    </div>
                    <table>
                        @foreach($qas as $qa)
                            @if($qa->article_id == intval($article_index)+1)
                            <tr class="answer">
                                <td class="answer-num">
                                {{$qa->question_id}}.&nbsp;&nbsp;
                                </td>
                                <td class="answer-sentence">
                                {{$qa->answer}}
                                </td>
                            <tr>
                            @endif
                        @endforeach
                    </table>
                </div>
                <div class="page-num {{($visible_articles[$article_index]->answer_session==='1') ? 'show' : 'hide'}}">
                    {{$visible_articles[$article_index]->answer_page_number}}
                </div>
            </div>
            @endforeach
        </div>
    </body>
</html>