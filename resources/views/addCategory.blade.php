<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Insert New Category</h1>
        <form action="/addNewCategory" method="POST" enctype="application/x-www-form-urlencoded">
            @csrf
            <input type="text" name="category" placeholder="Category Name">
            <input type="submit" value="Add">
        </form>
        @if ($errors->any())
            <h3 style="color: red">{{$errors->first()}}</h3>
        @endif
    </div>
</body>
</html>