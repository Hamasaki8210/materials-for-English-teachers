@extends('for_teachers.download_pages.contents')
@push('css')
    <link href="{{ asset('css/download_pages/stories.css') }}" rel="stylesheet">
@endpush
@push('js')
    <script src="{{ asset('js/stories.js') }}" async></script>
@endpush
@section('stories')
<div class="story-page">
    <div class="story-page-inner">
        <div class="menu-area">
            <div class="bread-crumbs">
                <div>
                    Simple Present
                </div>
                <div>
                    &nbsp;&gt;&nbsp;
                </div>
                <div>
                    Stories
                </div>
            </div>
            <table>
                @foreach ($titles as $titles_index => $title)
                <tr class="menu-title-area">
                    <td class="menu-title-checkbox">
                        <input class="menu-title-sessions" type="checkbox" checked>
                        <label></label>
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
                                        <input class="menu-sessions" type="checkbox" id={{$menu->menu}} checked>
                                        <label for={{$menu->menu}}>{{$menu->menu}}</label>
                                    </div>
                                </div>
                                @if($menu_index === 0)
                                <div class="reading-visible-area">
                                    <label class="switch">
                                        <input type="checkbox" id class="hide-switch" checked/>
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
                        <div class="menu-icons-circle preview-icon"><i class="fa-solid fa-file-lines fa-lg"><span class="menu-tooltip tooltip-pv">Preview</span></i></div>
                        <div class="menu-icons-circle pdf-icon"><i class="fa-solid fa-file-pdf fa-lg"><span class="menu-tooltip tooltip-p">Download PDF</span></i></i></div>
                        <div class="menu-icons-circle word-icon"><i class="fa-solid fa-file-word fa-lg"><span class="menu-tooltip tooltip-w">Download Word</span></i></i></div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="content-area">
            <img class="loading-gif" src="{{ asset('images/loading.gif') }}" alt="">
            <div class="content-area">
            <img class="loading-gif" src="{{ asset('images/loading.gif') }}" alt="">
            @foreach ($titles as $article_index => $title)
            <div class="lesson-separator"></div>
            <div class="indivisual-content-area">
                <div class="page">
                    <div class="reading">
                        <div class="reading-title">
                            {{$title->title}}
                        </div>
                        <div class="reading-content">
                            <div class="reading-story">
                                <img class="reading-pic" src="{{ asset('images/soccer-sample.jpg') }}" alt="">
                                @foreach ($readings[$article_index] as $reading_index => $reading)
                                {{$reading}}
                                @if(isset($bolds[$article_index][$reading_index]))
                                <b>{{$bolds[$article_index][$reading_index]}}</b>.
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="show">
                        <div class="vocabulary-title">
                            Vocabulary
                        </div>
                        <div class="vocabulary-content">
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
        </div>

        </div>
    </div>

</div>

@endsection