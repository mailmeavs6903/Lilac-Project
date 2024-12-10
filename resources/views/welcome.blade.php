<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
.grid-container {
  display: grid;
  height: 400px;
  align-content: center;
  grid-template-columns: auto auto auto;
  gap: 10px;
  background-color: #2196F3;
  padding: 10px;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}

.add-designation-link {
    padding-left: 600px; /* Adjust as needed */
    text-decoration: none; /* Optional: removes underline */
    color: inherit; /* Optional: ensures it uses the current text color */
}
</style>
</head>
<body>
    

<h1>The align-content Property</h1>

<a href="/add_designations" class="add-designation-link">ADD DESIGNATIONS</a>
<a href="/add_departments"> ADD DEPARTMENTS </a>
<p>Use the <em>align-content</em> property to vertically align the grid inside the container.</p>

<p>The value "center" will align the rows in the middle of the container:</p>

<table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Department</th>
                <th>Designation</th>
                <th>Contact</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $usr)
                <tr>
                    <td>{{ $usr->id }}</td>
                    <td>{{ $usr->name }}</td>
                    <td>{{ $usr->department->name ?? 'N/A' }}</td>
                    <td>{{ $usr->designation->name ?? 'N/A' }}</td>
                    <td>{{ $usr->contact }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="/add_user">Add New User</a>
</body>
</html>