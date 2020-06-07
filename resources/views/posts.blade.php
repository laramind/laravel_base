<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Posts</title>
    <style>
        h1 {
            text-align: center;
        }
        .tabella {
            background-color: #dddddd;
            width: auto;
            margin-right: auto;
            margin-left: auto;
            border: solid;
            text-align: center;
        }
    </style>
</head>
<body>

<h1>Show all posts</h1>
    <table class="tabella">

        <tr>
            <th>Title</th>
            <th>Body</th>
        </tr>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td style="border: 1.5px solid">{{ $post->title }}</td>
                <td style="border: 1.5px solid">{{ $post->body }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
