<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> ADD Departments </h1>
    <form action="/add_departments" id="form-data" method="post">
        @csrf

        <fieldset>
<label >Departments</label>
<input type="text" id="department" name="department" placeholder="Enter Your Department..">
<input type="submit">
</fieldset>
</form>
<a href="/">Back </a>
</body>
</html>