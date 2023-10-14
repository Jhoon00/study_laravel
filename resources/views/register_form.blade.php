<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/users" method="POST">
        @csrf
        <span>이름 : </span> <input type="text" name="name"> <br>
        <span>생년월일(YYYY/MM/DD) : </span> <input type="text" name="birthDate"> <br>
        <span>email : </span> <input type="text" name="email"> <br>
        <span>소속 : </span> <input type="text" name="organization"> <br>
        <input type="submit" value="등록">
    </form>
</body>
</html>
