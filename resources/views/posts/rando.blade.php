<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/app.css" rel="stylesheet">
    <style>
    body{   background-image:url(https://yomi2201.github.io/imgconan/aa.jpg);
            background-repeat: no-repeat; }
    h1{ color:white; }</style>
</head>
<body>
    <h1>Conan</h1>
    <p><a href="/rando" class="btn btn-info">more</a></p>
    @foreach ($posts as $post)
        <h4 class="card-title"></h4>
        <img src="{{ $post -> body}}" alt="" width=480px />
    @endforeach
</body>
</html>