<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>게시글 리스트</h2>
    <table>
        <tr>
            <th>연번</th><th>제목</th><th>작성자</th><th>작성일</th>
        </tr>
        @foreach($posts as $post)
        <tr>
            <td>{{$loop->index}}</td>
            <td><a href="">{{$post->title}}</a></td>
            <td>{{$post->user_id}}</td>
            <td>{{$post->created_at}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
