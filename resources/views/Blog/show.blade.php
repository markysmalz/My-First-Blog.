<!doctype html>
 <html>
<title>{{$post->title}}</title>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<center>
<h1><a href="/">Welcome To My Blog!!!</a></h1>
</center>

<h2>{{$post->title}}</h2>

<p>
    {{$post->content}}
</p>
<div class="text-center">
 <a href="/{{$post->id}}" class="btn btn-danger">Delete Post</a>
</div>
</html>