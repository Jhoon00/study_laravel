<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="antialiased">
        <div>
            <a href="/users/create">회원가입</a>
           </div>
           <div>
            <a href="/users">회원 리스트 보기</a>
            @foreach ($users as $user)
                <div>
                    <a href="/users/{{$user['id']}}">
                    이름: {{$user["name"]}}
                    </a>
                    &nbsp;&nbsp;
                    이메일: {{$user["email"]}} <br>
                </div>
            @endforeach
           </div>
    </body>
</html>
