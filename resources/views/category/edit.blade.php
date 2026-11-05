<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Category Edit </h1>
    <form action="{{ route('category.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        Category Name: <input type="text" name="name" value="{{ old('name',$category->name) }}"><br> <br>
        <input type="submit" value="Update">
        
    </form>
    <a href="{{ route('category.index') }}">Cancel</a>
</body>
</html>