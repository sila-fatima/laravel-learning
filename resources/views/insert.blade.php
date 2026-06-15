<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
</head>

<body>
   <form action="/insert" method="post">
    @csrf

    <h1>Category Name</h1>

    <label>Category Name</label>
    <input type="text" name="cname">

    <button type="submit">Add</button>
</form>
</body>

</html>