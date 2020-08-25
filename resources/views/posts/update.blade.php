<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Update</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .container{
            border: solid;
            margin-top: 30px;
            width: 600px;
        }
    </style>

</head>
<body>
<div class="container">
    <h1>Edit: Post {{ $post->id }}</h1>
    <form class="form-group" action="{{ route('posts.update', $post )}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-2">
                <label for="title">Title</label>
            </div>
            <div class="col-10">
                <input type="text" name="title" id="title" value="{{ $post->title }}" style="width: 100%">
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <label for="body">Body</label>
            </div>
            <div class="col-10">
                <textarea name="body" id="body" style="width: 100%"> {{ $post->body}} </textarea>
            </div>
        </div>
        <div class="row" style="margin-top: 10px">
            <div class="col-2">
                <button type="submit" class="btn btn-primary btn-sm">update</button>
            </div>
            <div class="col-2">
                <a href="{{ route('posts.index')}}" class="btn btn-warning btn-sm">return</a>
            </div>
        </div>

    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
