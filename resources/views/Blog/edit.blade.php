<!doctype html>
<html>
<head>
    <title>Edit A Blog-Post!!!</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
<center>
    <h1><a href="/">Welcome To My Blog!!!</a></h1>
</center>
<h2>Edit: {!! $post->title !!}</h2>
{!! Form::model(['method' =>'PATCH','route' =>['blog.update', $post->id]]) !!}

<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('published_at', 'Published On') !!}
    {!! Form::input('date', 'published_at', null, ['class'=>'form-control']) !!}
</div>

{!! Form::submit('Update Post', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}
@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif
@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
</body>
</html>