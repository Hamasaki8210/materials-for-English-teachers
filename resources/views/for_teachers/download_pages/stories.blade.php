@extends('for_teachers.download_pages.contents')
@push('css')
    <link href="{{ asset('css/download_pages/stories.css') }}" rel="stylesheet">
@endpush
@push('js')
    <script src="{{ asset('js/stories.js') }}" async></script>
@endpush
@section('stories')

<div class="stories-page">
    <div class="menu-area">
        <div class="article-title">Tim's Busy Day</div>
        <div class="toggle_contents">
            <p class="toggle_title">タイトル1</p>
            <p class="toggle_txt">ダミーテキストダミーテキストダミーテキスト</p>
        </div>
    </div>
    <div class="article">
        PDFの出力テスト！<br>
        <div style="font-weight:bold">ここは太字！</div>
        <div class="main_image">
            <img src="https://codelikes.com/wp-content/uploads/2019/06/PHP-e1601051806241.jpg" />
        </div>
        お寿司のテーブル
        <table class="sushiTable">
            <tr>
                <th>名前</th>
                <th>価格</th>
            </tr>
        </table>
    </div>
</div>
@endsection