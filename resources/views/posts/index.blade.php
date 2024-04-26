<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Posts</h1>
  <ul>
    @foreach ($posts as $post)
      <li><a href="show/{{$post->id}}">{{ $post->title }}</a></li>

      Uztaisi, lūdzu, show 
    @endforeach
  </ul>
</body>
</html>