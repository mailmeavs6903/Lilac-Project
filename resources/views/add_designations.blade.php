<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> ADD DESIGNATIONS </h1>
    <form action="/add_designations" id="form-data" method="post">
        @csrf

        <fieldset>
<label >designation</label>
<input type="text" id="designation" name="designation" placeholder="Enter Your Designation..">
<input type="submit">
</fieldset>
</form>
<a href="/">Back </a>
</body>
</html>