<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1>Category List </h1> 
   <h3><a href="{{ route('category.create') }}" class="btn btn-success">+Add Category</a></h3>
   <table>
   <thead>
    <tr>
        <th>ID</th>
        <th>Category Name</th>
        <th>Slug</th>
        <th>Action</th>
    </tr>
   </thead>
   <tbody>
    @foreach ($categoris as $category)
    <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
        <td>{{$category->slug}}</td>
        <td><a href="{{ route('category.edit', $category->id) }}">Edit</a></td>
        <td>
            <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return ('Are you sure? delete This category')"> Delete</button>
            </form>
        </td>
        
    </tr>
        
    @endforeach
   </tbody>
   
   </table>
</body>
</html>