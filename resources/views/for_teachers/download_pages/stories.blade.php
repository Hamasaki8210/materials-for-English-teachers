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
                <ul>
                    <li class="checkbox-lists">
                        <input type="checkbox" id="checkbox-1" checked>
                        <label for="checkbox-1">Reading</label>
                    </li>
                    <li class="checkbox-lists">
                        <input type="checkbox" id="checkbox-2" checked>
                        <label for="checkbox-2">Vocabulary</label>
                    </li>
                    <li class="checkbox-lists">
                        <input type="checkbox" id="checkbox-3" checked>
                        <label for="checkbox-3">Questions</label>
                    </li>
                    <li class="checkbox-lists">
                        <input type="checkbox" id="checkbox-4" checked>
                        <label for="checkbox-4">Practice</label>
                    </li>
                    <li class="checkbox-lists">
                        <input type="checkbox" id="checkbox-5" checked>
                        <label for="checkbox-5">Answers</label>
                    </li>
                </ul>
            </div>
            <div>
                <p class="menu-title">
                    <span>Tim's Busy Day&nbsp;</span>
                    <span><i class="fa fa-light fa-angle-down menu-title-pulldown-arrow"></i></span>
                </p>
                <div class="pulldown-lists">
                    <ul>
                        <li class="checkbox-lists">
                            <input type="checkbox" id="checkbox-1" checked>
                            <label for="checkbox-1">Reading</label>
                        </li>
                        <li class="checkbox-lists">
                            <input type="checkbox" id="checkbox-2" checked>
                            <label for="checkbox-2">Vocabulary</label>
                        </li>
                        <li class="checkbox-lists">
                            <input type="checkbox" id="checkbox-3" checked>
                            <label for="checkbox-3">Questions</label>
                        </li>
                        <li class="checkbox-lists">
                            <input type="checkbox" id="checkbox-4" checked>
                            <label for="checkbox-4">Practice</label>
                        </li>
                        <li class="checkbox-lists">
                            <input type="checkbox" id="checkbox-5" checked>
                            <label for="checkbox-5">Answers</label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content-area">
            <div class="lesson-separator"></div>
            <div class="indivisual-content-area">
                <div class="page1">
                    <div class="reading">
                        <div class="reading-title">
                            Tim's Busy Day
                        </div>
                        <div class="reading-content">
                            <div class="reading-story">
                                <img class="reading-pic" src="{{ asset('images/soccer-sample.jpg') }}" alt="">
                                There is a boy named Tim who lives in a
                                small <b>village</b>. He wakes up early every
                                morning and goes to school. Today, he has
                                a <b>science</b> test, and he feels excited about
                                it. During the test, he carefully reads the
                                questions and writes his answers. He
                                finishes before everyone else and feels
                                <b>confident</b> about his <b>performance</b>. After school, he goes to the
                                park to play soccer with his friends. They have a lot of fun, and
                                Tim even scores a goal! When he gets home, his mom makes his
                                favorite dinner, spaghetti. He eats quickly because he wants to
                                finish his homework before bedtime. Tim feels tired but happy
                                after a <b>productive</b> day.
                            </div>
                        </div>
                    </div>
                    <div class="vocabulary">
                        <div class="vocabulary-title">
                            Vocabulary
                        </div>
                        <div class="vocabulary-content">
                            <div class="vocab-lists"><span>1.&nbsp;&nbsp;</span><b>Village</b>: A small group of houses in the countryside.</div>
                            <div class="vocab-lists"><span>2.&nbsp;&nbsp;</span><b>Confident</b>: Feeling sure or certain about something.</div>
                            <div class="vocab-lists"><span>3.&nbsp;&nbsp;</span><b>Productive</b>: Doing things that are useful or helpful.</div>
                            <div class="vocab-lists"><span>4.&nbsp;&nbsp;</span><b>Science</b>: The study of nature and the world around us.</div>
                            <div class="vocab-lists"><span>5.&nbsp;&nbsp;</span><b>Performance</b>: Results.</div>
                        </div>
                    </div>
                </div>
                <div class="page-num-area">
                    <div class="margin-top"></div>
                    <div class="page-num">1</div>
                </div>
                <div class="page-separator"></div>
                <div class="page2">
                    <div>
                        <div class="question-title">
                            Questions
                        </div>
                        <div class="question-content">
                            <div class="question"><span>1.&nbsp;&nbsp;</span>What does Tim do every morning?</div>
                            <div class="question"><span>2.&nbsp;&nbsp;</span>How does Tim feel about his science test?</div>
                            <div class="question"><span>3.&nbsp;&nbsp;</span>What does Tim do during the test?</div>
                            <div class="question"><span>4.&nbsp;&nbsp;</span>How does Tim feel after finishing the test?</div>
                            <div class="question"><span>5.&nbsp;&nbsp;</span>What does Tim do after school?</div>
                            <div class="question"><span>5.&nbsp;&nbsp;</span>What game do Tim and his friends play at the park?</div>
                            <div class="question"><span>5.&nbsp;&nbsp;</span>Why does Tim eat quickly?</div>
                            <div class="question"><span>5.&nbsp;&nbsp;</span>How does Tim feel after finishing his homework?</div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="page-num">2</div>
    </div>
</div>
@endsection