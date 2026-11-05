<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create a new Category </h1>  <br>
    @if(session('success'))
    <div style="background-color: #d4edda; color: #155724; padding: 15px; border: 1px solid #c3e6cb; border-radius: 5px; margin-bottom: 20px;">
        <strong>মামা!</strong> {{ session('success') }}
    </div>
@endif

<!-- 🎯 গ্লোবাল এরর মেসেজ (যেকোনো ফর্মে ভ্যালিডেশন ফেইল করলে এখানে সব দেখাবে) -->
@if($errors->any())
    <div style="background-color: #f8d7da; color: #721c24; padding: 15px; border: 1px solid #f5c6cb; border-radius: 5px; margin-bottom: 20px;">
        <strong style="display: block; margin-bottom: 5px;">নিচের ভুলগুলো ঠিক করো মামা:</strong>
        <ul style="margin: 0; padding-left: 20px;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{ route('category.store') }}" method="POST">
        @csrf
         Category Name: 
        <input type="text" name="name" placeholder=" Enter Category Name"> <br> <br>
        <input type="submit" value="Submit">

    </form>
</body>
</html>