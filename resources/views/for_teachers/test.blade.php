<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ public_path('/css/download_pages/test.css')  }}">
</head>
<body>
    here!
    @foreach ($grammar_article_contents as $content_value)
    {{$content_value['title']}}
    @endforeach
</body>
</html>