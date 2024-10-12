<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Students</title>
</head>
<body>
    <h1>Create a Student</h1>
    <form action="{{route('students.store')}}" method="POST">
        @csrf
        @method('post')
        <input type="text" name="name" placeholder="Student Name">
        <input type="email" name="email" placeholder="Student Email">
        <input type="number" name="age" placeholder="Student Age">
        <input type="submit" value="Create Student">
    </form>
</body>
</html>
