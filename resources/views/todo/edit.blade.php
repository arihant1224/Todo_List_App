<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO | Edit</title>
</head>
<body style="text-align:center">
    <h1>Edit your TODO</h1>
    <h3>
        <x-alert />
    </h3>
    <form action="/update" method="post">
        @csrf
        @method('patch')
        <input type="text" name="title" value="{{$todo->title}}"/>
        <input style="display:none" type="number" name="id" value="{{$todo->id}}">
        <input type="submit" value="Edit" />
    </form>
    <br>
    <a href="/index">Back</a>
</body>
</html>