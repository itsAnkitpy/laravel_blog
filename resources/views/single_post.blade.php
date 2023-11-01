<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><?=$post->title?></h1>
    <br><br>
    <a href="/categories/{{$post->category->slug}}">{{ $post->category->name }}</a> 
    <p>By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a></p>
    <div><?=$post->body?></div>
</body>
</html>