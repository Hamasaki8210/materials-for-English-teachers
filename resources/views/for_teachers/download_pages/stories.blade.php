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
            <p class="menu-title">
                <span>Tim's Busy Day&nbsp;</span>
                <span><i class="fa fa-light fa-angle-down menu-title-pulldown-arrow"></i></span>
            </p>
            <div class="pulldown-lists">
                <div class="checkbox-lists">
                    <div class="menu-session-outer">
                        <input class="menu-sessions" type="checkbox" id="checkbox-1" checked>
                        <label for="checkbox-1">Reading</label>
                    </div>
                    <div class="reading-visible-area">
                        <label class="switch" for="slider-1">
                            <input type="checkbox" id="slider-1" class="hide-switch" checked/>
                            <div class="slider round"></div>
                        </label>
                        <div class="eye-icon">
                            <i class="fa fa-solid fa-eye"></i>
                        </div>
                    </div>
                </div>
                <div class="checkbox-lists">
                    <div class="menu-session-outer">
                        <input class="menu-sessions" type="checkbox" id="vocabulary-1" checked>
                        <label for="vocabulary-1">Vocabulary</label>
                    </div>
                </div>
                <div class="checkbox-lists">
                    <div class="menu-session-outer">
                        <input class="menu-sessions" type="checkbox" id="checkbox-3" checked>
                        <label for="checkbox-3">Questions</label>
                    </div>
                </div>
                <div class="checkbox-lists">
                    <div class="menu-session-outer">
                        <input class="menu-sessions" type="checkbox" id="checkbox-4" checked>
                        <label for="checkbox-4">Practice</label>
                    </div>
                </div>
                <div class="checkbox-lists">
                    <div class="menu-session-outer">
                        <input class="menu-sessions" type="checkbox" id="checkbox-5" checked>
                        <label for="checkbox-5  ">Answers</label>
                    </div>
                </div>
            </div>
            <div>
                <p class="menu-title">
                    <span>Tim's Busy Day&nbsp;</span>
                    <span><i class="fa fa-light fa-angle-down menu-title-pulldown-arrow"></i></span>
                </p>
                <div class="pulldown-lists">
                    <ul>
                        <div class="checkbox-lists">
                            <input class="menu-sessions" type="checkbox" id="checkbox-1" checked>
                            <label for="checkbox-1">Reading</label>
                        </div>
                        <div class="checkbox-lists">
                            <input class="menu-sessions" type="checkbox" id="checkbox-2" checked>
                            <label for="checkbox-2">Vocabulary</label>
                        </div>
                        <div class="checkbox-lists">
                            <input class="menu-sessions" type="checkbox" id="checkbox-3" checked>
                            <label for="checkbox-3">Questions</label>
                        </div>
                        <div class="checkbox-lists">
                            <input class="menu-sessions" type="checkbox" id="checkbox-4" checked>
                            <label for="checkbox-4">Practice</label>
                        </div>
                        <div class="checkbox-lists">
                            <input class="menu-sessions" type="checkbox" id="checkbox-5" checked>
                            <label for="checkbox-5">Answers</label>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content-area">
            <div class="lesson-separator"></div>
            <img class="loading-gif" src="{{ asset('images/loading.gif') }}" alt="">
            @foreach ($display_contents as $display_content)
            <div class="indivisual-content-area">
                <div class="page">
                    <div class="reading">
                        <div class="reading-title">
                            {{$display_content['title']}}
                        </div>
                        <div class="reading-content">
                            <div class="reading-story">
                                <img class="reading-pic" src="{{ asset('images/soccer-sample.jpg') }}" alt="">
                                <div class="reading-text">{{$display_content['reading']}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="vocabulary-1">
                        <div class="vocabulary-title">
                            Vocabulary
                        </div>
                        <div class="vocabulary-content">
                            {{$display_content['vocabulary']}}
                        </div>
                    </div>
                </div>
                <div class="page-separator"></div>
                <div class="page">
                    <div class="question-title">
                        Questions
                    </div>
                    <table>
                        <tr class="question">
                            <td rowspan="3" class="question-num">1.&nbsp;</td><td>How was the weather when Emily woke up?</td>
                        </tr>
                        <tr>
                            <td class="question-answer"></td>
                        </tr>
                        <tr>
                            <td class="question-margin"></td>
                        </tr>
                    </table>
                </div>
                <div class="page-separator"></div>
                <div class="page">
                    <div class="practice-title">
                        Practice
                    </div>
                    <table>
                        <tr class="practice">
                            <td rowspan="3" class="practice-num">1.&nbsp;</td><td>Tim wakes up early every morning and goes to school.</td>
                        </tr>
                        <tr>
                            <td class="practice-answer"></td>
                        </tr>
                        <tr>
                            <td class="practice-margin"></td>
                        </tr>
                    </table>
                </div>
                <div class="page-separator"></div>
                <div class="page">
                    <div class="answers-title">
                        Answers
                    </div>
                    <table>
                        <tr class="answer">
                            <td class="answer-num">1.&nbsp;</td><td class="answer-sentence">Tim wakes up early every morning and goes to school.</td>
                        </tr>
                        <tr class="answer">
                            <td class="answer-num">2.&nbsp;</td><td class="answer-sentence">Tim feels excited about his science test.</td>
                        </tr>
                        <tr class="answer">
                            <td class="answer-num">3.&nbsp;</td><td class="answer-sentence">During the test, Tim carefully reads the questions and writes his answers.</td>
                        </tr>
                        <tr class="answer">
                            <td class="answer-num">4.&nbsp;</td><td class="answer-sentence">Tim feels confident about his performance after finishing the test.</td>
                        </tr>
                        <tr class="answer">
                            <td class="answer-num">5.&nbsp;</td><td class="answer-sentence">After school, Tim goes to the park to play soccer with his friends.</td>
                        </tr>
                        <tr class="answer">
                            <td class="answer-num">6.&nbsp;</td><td class="answer-sentence">Tim and his friends play soccer at the park.</td>
                        </tr>
                        <tr class="answer">
                            <td class="answer-num">7.&nbsp;</td><td class="answer-sentence">Tim's mom makes his favorite dinner, spaghetti.</td>
                        </tr>
                        <tr class="answer">
                            <td class="answer-num">8.&nbsp;</td><td class="answer-sentence">Tim eats quickly because he wants to finish his homework before bedtime.</td>
                        </tr>
                        <tr class="answer">
                            <td class="answer-num">9.&nbsp;</td><td class="answer-sentence">Tim feels tired but happy after finishing his homework.</td>
                        </tr>
                        <tr class="answer">
                            <td class="answer-num">10.&nbsp;</td><td class="answer-sentence">Tim feels productive and happy at the end of the day.</td>
                        </tr>
                    </table>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection