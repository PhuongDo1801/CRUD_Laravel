<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h1>CRUD</h1>
    <h2>Create User</h2>
    <form action="{{Route('store')}}" method="post">
        @csrf
        <label for="Name">
            Name:
            <input type="text" name="name">
        </label><br><br>
        <label for="Fees">
            Fees:
            <input type="text" name="fees">
        </label><br><br>
        <label for="Description">
            Description:
            <input type="text" name="description">
        </label><br><br>
        <button type="submit">Create courses</button>
    </form>
</body>
</html>
