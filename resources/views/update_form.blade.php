<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/update" method="POST">
        @csrf
        @method("put")
        <span>이름 : </span> <input type="text" name="name" value="ㄱㅈㅎ" readonly> <br>
        <span>생년월일(YYYY/MM/DD) : </span> <input type="text" name="birthDate" value="2000/06/02" readonly> <br>
        <span>email : </span> <input type="text" name="email" value="gjh@yju.ac.kr" > <br>
        <span>소속 : </span> <input type="text" name="organization" value="student"> <br>
        <input type="submit" value="수정">
    </form>
</body>
</html>
