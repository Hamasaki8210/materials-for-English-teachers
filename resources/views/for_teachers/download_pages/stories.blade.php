@extends('for_teachers.download_pages.contents')
@push('css')
    <link href="{{ asset('css/download_pages/stories.css') }}" rel="stylesheet">
    <link href="{{ asset('css/download_pages/loading.css') }}" rel="stylesheet">
@endpush
@push('js')
    <script src="{{ asset('js/stories.js') }}" async></script>
@endpush
@section('stories')
<div class="story-page">
    <div class="loading-background"></div>
    <img class="loading-pic" src="{{ asset('images/loading.gif') }}" alt="">
    <div class="story-page-inner">
        <div class="menu-area">
            <div class="bread-crumbs">
                <div class="bread-crumbs-path bread-crumbs-tense">
                    <a class="bread-crumbs-nostyle" href="{{ route('top') }}">{{$tense_name}}</a>
                </div>
                <div class="bread-crumbs-path">
                    &nbsp;&gt;&nbsp;
                </div>
                <div class="bread-crumbs-path bread-crumbs-current">
                    Story
                </div>
            </div>
            <table>
                @foreach ($titles as $titles_index => $title)
                <tr>
                    <td class="menu-title-checkbox">
                        <input class="menu-title-sessions" type="checkbox" id={{"article-".$titles_index}} checked>
                        <label for={{"article-".$titles_index}}></label>
                    </td>
                    <td>
                        <p class="menu-title">
                            <span>{{$title->title}}&nbsp;</span>
                            <span><i class="fa fa-light fa-angle-down menu-title-pulldown-arrow"></i></span>
                        </p>
                        <div class="pulldown-lists">
                        @foreach ($menus as $menu_index => $menu)
                            <div class="checkbox-lists">
                                <div>
                                    <div class="menu-session-outer">
                                        <input class="menu-sessions {{"disable-target-".$titles_index}}" type="checkbox" id={{$menu->menu."-".$titles_index}} checked>
                                        <label for={{$menu->menu."-".$titles_index}}>{{$menu->menu}}</label>
                                    </div>
                                </div>
                                @if($menu_index === 0)
                                <div class="reading-visible-area">
                                    <label class="switch" for="{{'reading-vocab-'.$titles_index}}">
                                        <input type="checkbox" id="{{'reading-vocab-'.$titles_index}}" class="hide-switch {{"disable-target-".$titles_index}}" checked/>
                                        <div class="slider round"></div>
                                    </label>
                                    <div class="eye-icon">
                                        <i class="fa fa-solid fa-eye"></i>
                                    </div>
                                </div>
                                @endif
                            </div>
                        @endforeach
                        </div>
                    </td>
                </tr>
                @endforeach
                <tr>
                    <td></td>
                    <td class="menu-icons-area">
                        <div id="{{$title->tense_id}}" class="menu-icons-circle pdf-pv-icon pdf-icon"><i class="fa-solid fa-file-lines fa-lg"><span class="menu-tooltip tooltip-pv">Preview</span></i></div>
                        <div id="{{$title->tense_id}}" class="menu-icons-circle pdf-dl-icon pdf-icon"><i class="fa-solid fa-file-pdf fa-lg"><span class="menu-tooltip tooltip-p">Download PDF</span></i></i></div>
                        <div id="{{$title->tense_id}}" class="menu-icons-circle word-dl-icon pdf-icon"><i class="fa-solid fa-file-word fa-lg"><span class="menu-tooltip tooltip-w">Download Word</span></i></i></div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="content-area">
            @foreach ($titles as $article_index => $title)
            <div class="lesson-separator"></div>
            <div class="indivisual-content-area">
                <div class="page">
                    <div class="reading reading-{{$article_index}} show">
                        <div class="reading-area">
                            <div class="reading-title">
                                {{$title->title}}
                            </div>
                            <div class="reading-content">
                                <div class="reading-story">
                                    <img class="reading-pic" src="{{ asset('images/soccer-sample.jpg') }}" alt="">
                                    @foreach ($readings[$article_index] as $reading_index => $reading)
                                    {{$reading}}
                                        {{-- if bold has *, remove it --}}
                                        @if(isset($bolds[$article_index][$reading_index]))
                                            @if(false !== strpos($bolds[$article_index][$reading_index], '*'))
                                            <span><b class={{"reading-vocab-".$article_index}}>{{str_replace('*','',$bolds[$article_index][$reading_index])}}</b></span>.
                                            @else
                                            <span><b class={{"reading-vocab-".$article_index}}>{{$bolds[$article_index][$reading_index]}}</b></span>
                                            @endif
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vocabulary-{{$article_index}} show">
                        <div class="vocabulary-area">
                            <div class="title-area">
                                <span class="vocabulary-title">{{ucfirst($menus[1]->menu)}}</span>
                                <span class="vocabulary-article-title">{{$titles[$article_index]->title}}</span>
                            </div>
                            @foreach($vocabularies as $vocabulary)
                                @if($vocabulary->article_id == $title->article_id)
                                <div class="vocab-lists"><span>{{$vocabulary->vocabulary_id}}.&nbsp;&nbsp;</span><b>{{$vocabulary->vocabulary}}</b>&nbsp;:&nbsp;{{$vocabulary->meaning}}</div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="page-separator separator-question-{{$article_index}}"></div>
                <div class="page">
                    <div class="title-area">
                        <span class="questions-title">{{ucfirst($menus[2]->menu)}}</span>
                        <span class="article-title">{{$titles[$article_index]->title}}</span>
                    </div>
                    <div class="question-{{$article_index}} show">
                        <table>
                            @foreach($qas as $qa)
                                @if($qa->article_id == $title->article_id)
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
                </div>
                <div class="page-separator separator-practice-{{$article_index}}"></div>
                <div class="page">
                    <div class="title-area">
                        <span class="practice-title">{{ucfirst($menus[3]->menu)}}</span>
                        <span class="article-title">{{$titles[$article_index]->title}}</span>
                    </div>
                    <div class="practice-{{$article_index}} show">
                        <table>
                            @foreach($practices as $practice)
                                @if($practice->article_id == $title->article_id)
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
                </div>
                <div class="page-separator separator-answer-{{$article_index}}"></div>
                <div class="page">
                    <div class="title-area">
                        <span class="answers-title">{{ucfirst($menus[4]->menu)}}</span>
                        <span class="article-title">{{$titles[$article_index]->title}}</span>
                    </div>
                    <div class="answer-{{$article_index}} show">
                        <table>
                            @foreach($qas as $qa)
                                @if($qa->article_id == $title->article_id)
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
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection