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
            <div class="indivisual-content-area">
                <div class="page">
                    <div class="reading">
                        <div class="reading-title">
                            Tim's Busy Day
                        </div>
                        <div class="reading-content">
                            <div class="reading-story">
                                <img class="reading-pic" src="{{ asset('images/soccer-sample.jpg') }}" alt="">
                                There is a boy named Tim who lives in a
                                small <b class="reading-vocab-1">village</b>. He wakes up early every
                                morning and goes to school. Today, he has
                                a <b class="reading-vocab-1">science</b> test, and he feels excited about
                                it. During the test, he carefully reads the
                                questions and writes his answers. He
                                finishes before everyone else and feels
                                <b class="reading-vocab-1">confident</b> about his <b class="reading-vocab-1">performance</b>. After school, he goes to the
                                park to play soccer with his friends. They have a lot of fun, and
                                Tim even scores a goal! When he gets home, his mom makes his
                                favorite dinner, spaghetti. He eats quickly because he wants to
                                finish his homework before bedtime. Tim feels tired but happy
                                after a <b class="reading-vocab-1">productive</b> day.
                            </div>
                        </div>
                    </div>
                    <div class="vocabulary-1">
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
                <div class="page-separator"></div>
                <div class="page">
                    <div class="question-title">
                        Questions
                    </div>
                    <div class="question">
                        <div class="question-sentence"><span>1.&nbsp;&nbsp;</span>What does Tim do every morning?</div>
                        <div class="question-answer"></div>
                    </div>
                    <div class="question">
                        <div class="question-sentence"><span>2.&nbsp;&nbsp;</span>How does Tim feel about his science test?</div>
                        <div class="question-answer"></div>
                    </div>
                    <div class="question">
                        <div class="question-sentence"><span>3.&nbsp;&nbsp;</span>What does Tim do during the test?</div>
                        <div class="question-answer"></div>
                    </div>
                    <div class="question">
                        <div class="question-sentence"><span>4.&nbsp;&nbsp;</span>How does Tim feel after finishing the test?</div>
                        <div class="question-answer"></div>
                    </div>
                    <div class="question">
                        <div class="question-sentence"><span>5.&nbsp;&nbsp;</span>What does Tim do after school?</div>
                        <div class="question-answer"></div>
                    </div>
                    <div class="question">
                        <div class="question-sentence"><span>6.&nbsp;&nbsp;</span>What game do Tim and his friends play at the park?</div>
                        <div class="question-answer"></div>
                    </div>
                    <div class="question">
                        <div class="question-sentence"><span>7.&nbsp;&nbsp;</span>Why does Tim eat quickly?</div>
                        <div class="question-answer"></div>
                    </div>
                    <div class="question">
                        <div class="question-sentence"><span>8.&nbsp;&nbsp;</span>How does Tim feel after finishing his homework?</div>
                        <div class="question-answer"></div>
                    </div>
                </div>
                <div class="page-separator"></div>
                <div class="page">
                    <div class="practice-title">
                        Practice
                    </div>
                    <div class="practice">
                        <div class="practice-sentence"><span>1.&nbsp;&nbsp;</span>Do you usually wake up early in the morning like Tim?</div>
                        <div class="practice-answer"></div>
                    </div>
                    <div class="practice">
                        <div class="practice-sentence"><span>2.&nbsp;&nbsp;</span>How do you feel when you have a test at school?</div>
                        <div class="practice-answer"></div>
                    </div>
                    <div class="practice">
                        <div class="practice-sentence"><span>3.&nbsp;&nbsp;</span>Do you carefully read the practices during a test like Tim does?</div>
                        <div class="practice-answer"></div>
                    </div>
                    <div class="practice">
                        <div class="practice-sentence"><span>4.&nbsp;&nbsp;</span>How do you feel when you finish a test before everyone else?</div>
                        <div class="practice-answer"></div>
                    </div>
                    <div class="practice">
                        <div class="practice-sentence"><span>5.&nbsp;&nbsp;</span>Do you like to play sports with your friends after school like Tim does?</div>
                        <div class="practice-answer"></div>
                    </div>
                    <div class="practice">
                        <div class="practice-sentence"><span>6.&nbsp;&nbsp;</span>What is your favorite game to play with your friends?</div>
                        <div class="practice-answer"></div>
                    </div>
                    <div class="practice">
                        <div class="practice-sentence"><span>7.&nbsp;&nbsp;</span>What is your favorite food that your mom makes for dinner?</div>
                        <div class="practice-answer"></div>
                    </div>
                    <div class="practice">
                        <div class="practice-sentence"><span>8.&nbsp;&nbsp;</span>How do you feel after finishing your homework?</div>
                        <div class="practice-answer"></div>
                    </div>
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
        </div>
    </div>
</div>
@endsection