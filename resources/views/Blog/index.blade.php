<!doctype html>
  <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome To My Blog</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
    <center>
   <h1><a href="/">Welcome To My Blog!!!</a></h1>
        <h2>News, Gossips, Social Events, Inspirations!!!</h2>
     </center>

@foreach($post as $Post)
    <h4>
       <a href="/view/{{$Post->id}}">{{$Post->title}}</a>
    </h4>
    <p>{{ $Post->content}}</p>
@endforeach
</body>
<footer>
    <a href="/create">CREATE A BLOG-POST</a><br>
    <a href="/contact">CONTACT ME</a><br>
    <a href="/about">ABOUT</a>
</footer>
</html>